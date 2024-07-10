<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_DASHBOARD, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
	}//end __construct

	public function index()	{
		$this->crear_vista('panel/dashboard', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Dashboard';

		//información de la BD
		$this->load->model('Tabla_tennis');
		$this->load->model('Tabla_ofertas');
		$datos['pares_mujer'] = $this->Tabla_tennis->count(array('genero' => 1));
		$datos['pares_hombre'] = $this->Tabla_tennis->count(array('genero' => 0));
		$datos['ofertas_validas'] = $this->Tabla_ofertas->count(array('fin_oferta >=' => 'now()'));
		$datos['ofertas_expiradas'] = $this->Tabla_ofertas->count(array('fin_oferta <' => 'now()'));

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_DASHBOARD, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

}//end class Dashboard
