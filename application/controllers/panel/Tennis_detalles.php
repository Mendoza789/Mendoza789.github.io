<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tennis_detalles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_TENNIS_DETALLES, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
		//se carga el helper para los componentes de formulario
		$this->load->helper('form');
	}//end __construct

	public function index($id_tennis)	{
		$this->crear_vista('panel/tennis_detalles', $this->cargar_datos($id_tennis));
	}//end index

	public function cargar_datos($id_tennis){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Detalles de tennis';

		//información de la BD
		$this->load->model('Tabla_tennis');
		$datos['info_tennis'] = $this->Tabla_tennis->select(array('id_tennis'=>$id_tennis))[0];//se obtiene el primero (e idealmente el único) registro obtenido.

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_TENNIS_DETALLES, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function actualizar(){
		$id_tennis = $this->input->post('id_tennis');

		if ($_FILES['imagen']["error"] == UPLOAD_ERR_NO_FILE){//se verifica si no se actualzó la imagen
			$this->load->model('Tabla_tennis');

			$values = array('marca'=>$this->input->post('marca'),
							'modelo'=>$this->input->post('modelo'),
							'color'=>$this->input->post('color'),
							'talla'=>$this->input->post('talla'),
							'genero'=>$this->input->post('genero'),
							'descripcion'=>$this->input->post('descripcion'),
							'precio'=>$this->input->post('precio')
							);

			if($this->Tabla_tennis->update($values, $id_tennis)){
				echo '<script>alert("Información de tennis actualizada");</script>';
				$this->crear_vista('panel/tennis_detalles', $this->cargar_datos($this->input->post('id_tennis')));
			}//end if registro de tennis exitoso
			else{
				echo '<script>alert("Error al actualzar información. Consulte al administrador.");</script>';
				$this->crear_vista('panel/tennis_detalles', $this->cargar_datos($this->input->post('id_tennis')));
			}//end else error al registrar tennis
		}//end if se verifica si no se actualizó la imagen
		else{
			//se procesa el archivo de imagen
			$config['upload_path']          = $this->constantes->IMG_DIR.'tennis/';
	        $config['allowed_types']        = 'jpg|png';
	        $config['max_size']             = 0;
	        $config['max_width']            = 0;
	        $config['max_height']           = 0;

	        $this->load->library('upload', $config);

			if (!$this->upload->do_upload('imagen')){
				echo '<script>alert("'.$this->upload->display_errors().'");</script>';
				$this->crear_vista('panel/tennis_detalles', $this->cargar_datos($id_tennis));
			}//end if existe un error al subir el archivo
			else{
				//se borra el archivo anterio de imagen; se utiliza la constante del directorio de imágenes.
				unlink($this->constantes->IMG_DIR.$_POST['imagen-actual']);
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

				if($this->Tabla_tennis->update($values, $id_tennis)){
					echo '<script>alert("Información de tennis actualizada");</script>';
					$this->crear_vista('panel/tennis_detalles', $this->cargar_datos($id_tennis));
				}//end if registro de tennis exitoso
				else{
					echo '<script>alert("Error al actualizar información. Consulte al administrador.");</script>';
					$this->crear_vista('panel/tennis_detalles', $this->cargar_datos($id_tennis));
				}//end else error al registrar tennis
			}//end else se subió correctamente el archivo
		}//end else se actualiza también la imagen
	}//end actualizar

}//end class Tennis_detalles
