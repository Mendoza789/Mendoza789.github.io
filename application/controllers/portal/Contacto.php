<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/contacto', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Contacto';
		$datos['imagen_banner'] = base_url('recursos-portal/images/banner/mi_foto.jpg');

		//navegación
		$datos['navegacion'] = array('Contacto' => ''
									//'Ofertas' => base_url('portal/ofertas')
									);

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_CONTACTO);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Contacto
