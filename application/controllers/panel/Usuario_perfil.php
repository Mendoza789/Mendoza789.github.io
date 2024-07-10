<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_perfil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_USUARIO_PERFIL, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
		//se carga el helper para los componentes de formulario
		$this->load->helper('form');
	}//end __construct

	public function index($id_usuario)	{
		$this->crear_vista('panel/usuario_perfil', $this->cargar_datos($id_usuario));
	}//end index

	public function cargar_datos($id_usuario){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Perfil de usuario';

		//información de la BD
		$this->load->model('Tabla_usuarios');
		$datos['info_usuario'] = $this->Tabla_usuarios->select(array('id_usuario'=>$id_usuario))[0];

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_USUARIO_PERFIL, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function actualizar(){
		$this->load->model('Tabla_usuarios');

		//se verifica si existe el correo en otro usuario
		$res = $this->Tabla_usuarios->existe_email_datos($this->input->post('email'));
		$id_usuario = $this->input->post('id_usuario');
		if(($res != NULL) && ($res->id_usuario != $id_usuario)){
			echo '<script>alert("El correo electrónico ya está registrado");</script>';
			$this->crear_vista('panel/usuario_detalles', $this->cargar_datos($id_usuario));
		}//end if el correo ya está registrado
		else{
			$values = array('rol_usuario'=>$this->input->post('rol'),
							'nombre_usuario'=>$this->input->post('nombre'),
							'ap_paterno_usuario'=>$this->input->post('ap-paterno'),
							'ap_materno_usuario'=>$this->input->post('ap-materno'),
							'fecha_nacimiento'=>$this->input->post('fecha-nacimiento'),
							'email_usuario'=>$this->input->post('email')
							);

			if($this->Tabla_usuarios->update($values, $id_usuario)){
				echo '<script>alert("Información actualizada");</script>';
				$this->crear_vista('panel/usuario_detalles', $this->cargar_datos($id_usuario));
			}//end if acutalización exitosa
			else{
				echo '<script>alert("No hubo cambios o hubo un error al actualizar información.Consulte al administrador.");</script>';
				$this->crear_vista('panel/usuario_detalles', $this->cargar_datos($id_usuario));
			}//end else error al actualizar información
		}//end else se guardan los datos del usuario
	}//end actualizar

}//end class Usuario_perfil
