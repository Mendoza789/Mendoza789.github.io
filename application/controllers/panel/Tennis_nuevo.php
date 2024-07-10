<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tennis_nuevo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_TENNIS_NUEVO, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
		//se carga el helper para los componentes de formulario
		$this->load->helper('form');
	}//end __construct

	public function index()	{
		$this->crear_vista('panel/tennis_nuevo', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Agregar nuevos tennis';

		//información de la BD

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_TENNIS_TODOS, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function agregar(){
		//se procesa el archivo de imagen
		$config['upload_path']          = $this->constantes->IMG_DIR.'tennis/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

		if (!$this->upload->do_upload('imagen')){
			echo '<script>alert("'.$this->upload->display_errors().'");</script>';
			$this->crear_vista('panel/tennis_nuevo', $this->cargar_datos());
		}//end if existe un error al subir el archivo
		else{
			$this->load->model('Tabla_tennis');

			$values = array('marca'=>$this->input->post('marca'),
							'modelo'=>$this->input->post('modelo'),
							'color'=>$this->input->post('color'),
							'talla'=>$this->input->post('talla'),
							'genero'=>$this->input->post('genero'),
							'descripcion'=>$this->input->post('descripcion'),
							'precio'=>$this->input->post('precio'),
							'ruta_imagen'=>'tennis/'.$this->upload->data('raw_name').$this->upload->data('file_ext')//$this->upload->data() contiene toda la información de la subida del archivo
							);

			if($this->Tabla_tennis->insert($values)){
				$this->session->mensaje = 'Tennis agregado';
				redirect('principal/'.$this->tareas->TAREA_TENNIS_TODOS);
			}//end if registro de tennis exitoso
			else{
				echo '<script>alert("Error al almacenar datos. Consulte al administrador.");</script>';
				$this->crear_vista('panel/tennis_nuevo', $this->cargar_datos());
			}//end else error al registrar tennis
		}//end else se subió correctamente el archivo
	}//end agregar

}//end class Tennis_nuevo
