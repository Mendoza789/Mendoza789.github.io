<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_nuevo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_USUARIO_NUEVO, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
		//se carga el helper para los componentes de formulario
		$this->load->helper('form');
	}//end __construct

	public function index()	{
		$this->crear_vista('panel/usuario_nuevo', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Agregar nuevo usuario';

		//información de la BD

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_USUARIOS_TODOS, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function agregar(){
		$this->load->model('Tabla_usuarios');

		if($this->Tabla_usuarios->existe_email($this->input->post('email'))){
			echo '<script>alert("El correo electrónico ya está registrado");</script>';
			$this->crear_vista('panel/usuario_nuevo', $this->cargar_datos());
		}//end if el correo ya está registrado
		else{
			$values = array('rol_usuario'=>$this->input->post('rol'),
							'nombre_usuario'=>$this->input->post('nombre'),
							'ap_paterno_usuario'=>$this->input->post('ap-paterno'),
							'ap_materno_usuario'=>$this->input->post('ap-materno'),
							'fecha_nacimiento'=>$this->input->post('fecha-nacimiento'),
							'email_usuario'=>$this->input->post('email'),
							'password_usuario'=>hash("sha256",$this->input->post('password'))
							);

			if($this->Tabla_usuarios->insert($values)){
				$this->session->mensaje = 'Usuario agregado';
				redirect('principal/'.$this->tareas->TAREA_USUARIOS_TODOS);
			}//end if registro de usuario exitoso
			else{
				echo '<script>alert("Error al almacenar datos. Consulte al administrador.");</script>';
				$this->crear_vista('panel/usuario_nuevo', $this->cargar_datos());
			}//end else error al registrar usuario
		}//end else se guardan los datos del usuario
	}//end agregar

}//end class Usuario_nuevo
