<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acerca_del_autor extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/acerca_del_autor', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Acerca del autor';
		$datos['imagen_banner'] = base_url('recursos-portal/images/banner/acerca-de.jpg');

		//navegación
		$datos['navegacion'] = array('Acerca de' => '',
									 'Información del autor' => ''
									//'Ofertas' => base_url('portal/ofertas')
									);

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_ACERCA_DEL_AUTOR);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Acerca_del_autor
