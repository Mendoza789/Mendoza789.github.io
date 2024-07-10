<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_todos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_USUARIOS_TODOS, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
	}//end __construct

	public function index()	{
		if($this->session->mensaje != NULL){
			echo '<script>alert("'.$this->session->mensaje.'");</script>';
			$this->session->mensaje = NULL;
		}//end if existe algún mensaje qué mostrar
		$this->crear_vista('panel/usuarios_todos', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Usuarios';

		//información de la BD
		$this->load->model('Tabla_usuarios');
		$datos['usuarios'] = $this->Tabla_usuarios->select_all();

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_USUARIOS_TODOS, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function borrar($id_usuario){
		$this->load->model('Tabla_usuarios');

		if($this->Tabla_usuarios->delete($id_usuario)){
			$this->session->mensaje = 'Usuario borrado';
			redirect('principal/'.$this->tareas->TAREA_USUARIOS_TODOS);
		}//
		else{
			$this->session->mensaje = 'Error al borrar usuario';
			redirect('principal/'.$this->tareas->TAREA_USUARIOS_TODOS);
		}//
	}//end borrar

}//end class Usuarios_todos
