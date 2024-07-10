<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tennis_dama extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/tennis_dama', $this->cargar_datos());
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Tennis para mujer';
		$datos['imagen_banner'] = base_url('recursos-portal/images/banner/catalogo-m.jpg');

		//navegación
		$datos['navegacion'] = array('Catalogo de tennis' => '',
									 'Tennis para mujer' => ''
									//'Ofertas' => base_url('portal/ofertas')//ejemplo de sección con link
									);

		//información de la BD
		$this->load->model('Tabla_tennis');
		//el resultado es un arreglo de objetos

		// Get tennis for men
		$tennis_dama = $this->Tabla_tennis->select_tennis_genero($this->constantes->GENERO_MUJER);
		foreach ($tennis_dama as $tennis) {
			// Apply an 80% discount
			$tennis->descuento = 35; 
			$tennis->precio_final = $tennis->precio * (1 - $tennis->descuento / 100); // Calculate the final price
		}
		$datos['tennis_dama'] = $tennis_dama;
	
		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_TENNIS_DAMA);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Tennis_dama
