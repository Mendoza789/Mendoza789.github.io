<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tennis_caballero extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/tennis_caballero', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();
	
		// Titles
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Tennis para hombre';
		$datos['imagen_banner'] = base_url('recursos-portal/images/banner/catalogo-h.jpg');
	
		// Navigation
		$datos['navegacion'] = array('Catalogo de tennis' => '',
									 'Tennis para hombre' => '');
	
		// Load the model
		$this->load->model('Tabla_tennis');
	
		// Get tennis for men
		$tennis_caballero = $this->Tabla_tennis->select_tennis_genero($this->constantes->GENERO_HOMBRE);
		foreach ($tennis_caballero as $tennis) {
			// Apply an 80% discount
			$tennis->descuento = 80; 
			$tennis->precio_final = $tennis->precio * (1 - $tennis->descuento / 100); // Calculate the final price
		}
		$datos['tennis_caballero'] = $tennis_caballero;
	
		return $datos;
	}//end cargar_datos
	

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_TENNIS_CABALLERO);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Tennis_caballero
