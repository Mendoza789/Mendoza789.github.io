<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tennis_dama extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_TENNIS_DAMA, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
	}//end __construct

	public function index()	{
		if($this->session->mensaje != NULL){
			echo '<script>alert("'.$this->session->mensaje.'");</script>';
			$this->session->mensaje = NULL;
		}//end if existe algún mensaje qué mostrar
		$this->crear_vista('panel/tennis_dama', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Inventario de tennis de mujer';

		//información de la BD
		$this->load->model('Tabla_tennis');
		$datos['tennis'] = $this->Tabla_tennis->select_tennis_todos_info_ofertas(1);//genero 1=mujer

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_TENNIS_DAMA, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function borrar($id_tennis){
		$this->load->model('Tabla_tennis');

		//se obtiene el nombre de la imagen del tennis a borrar
		$imagen = $this->Tabla_tennis->select_imagen_tennis($id_tennis)[0]->ruta_imagen;

		if($this->Tabla_tennis->delete($id_tennis)){
			//se borra el archivo de imagen; se utiliza la constante del directorio de imágenes.
			unlink($this->constantes->IMG_DIR.$imagen);
			echo '<script>alert("Tennis borrados");</script>';
			$this->crear_vista('panel/tennis_dama', $this->cargar_datos());
		}//
		else{
			echo '<script>alert("Error al borrar los tennis");</script>';
			$this->crear_vista('panel/tennis_dama', $this->cargar_datos());
		}//
	}//end borrar

}//end class Tennis_dama
