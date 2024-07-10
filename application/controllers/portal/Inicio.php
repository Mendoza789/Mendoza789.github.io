<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		//$this->load->view('portal/inicio');
		$this->crear_vista('portal/inicio', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Tus Tennis Inc.';
		$datos['subtitulo_seccion'] = 'Calzado deportivo y casual de las mejores marcas para gente como tú';

		//navegación
		$datos['navegacion'] = array();

		//información de la BD
		$this->load->model('Tabla_tennis');
		//el resultado es un arreglo de objetos
		//(se deberá utilizar el operador -> para acceder a los campos de información)
		$datos['tennis_con_oferta'] = $this->Tabla_tennis->select_tennis_con_ofertas(3);

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$datos['menu_portal'] = navegacion_portal($this->paginas->PAGINA_INICIO);
		$this->load->view($nombre_vista, $datos);
	}//end crear_vista

}//end class Inicio
