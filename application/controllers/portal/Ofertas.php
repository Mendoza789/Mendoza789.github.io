<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ofertas extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/ofertas', $this->cargar_datos());
	}//end index

	public function cargar_datos() {
		$datos = array();
	
		// Titles
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Ofertas';
		$datos['imagen_banner'] = base_url('recursos-portal/images/banner/ofertas.jpg');
	
		// Navigation
		$datos['navegacion'] = array('Ofertas' => '');
	
		// Load the model
		$this->load->model('Tabla_tennis');
	
		// Get tennis with offers and update discount to 50%
		$tennis_con_oferta = $this->Tabla_tennis->select_tennis_con_ofertas();
		foreach ($tennis_con_oferta as $tennis) {
			if ($tennis->descuento > 0) { // Check if a discount is applied
				$tennis->descuento = 50; // Set discount to 50%
			}
		}
		$datos['tennis_con_oferta'] = $tennis_con_oferta;
	
		return $datos;
	}//end cargar_datos
	//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_OFERTAS);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Ofertas
