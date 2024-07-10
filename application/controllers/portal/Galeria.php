<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/galeria', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Galería';
		$datos['imagen_banner'] = base_url('recursos-portal/images/banner/logo_upt.jpg');

		//navegación
		$datos['navegacion'] = array('Galería' => ''
									//'Ofertas' => base_url('portal/ofertas')
									);

		//información de la BD
		$this->load->model('Tabla_tennis');
		//el resultado es un arreglo de objetos
		//(se deberá utilizar el operador -> para acceder a los campos de información)
		$datos['imagenes_tennis'] = $this->Tabla_tennis->select_imagenes_tennis('Nike');

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_GALERIA);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Galeria
