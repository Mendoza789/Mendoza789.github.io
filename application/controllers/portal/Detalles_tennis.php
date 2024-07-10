<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalles_tennis extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}//end __construct

	public function index($id_tennis=NULL)	{
		$this->crear_vista('portal/detalles_tennis', $this->cargar_datos($id_tennis));
	}//end index

	public function cargar_datos($id_tennis){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc.';
		$datos['titulo_seccion'] = 'Detalles de tennis';
		$datos['imagen_banner'] = base_url($this->constantes->IMG_DIR.'banner/detalles-tennis.jpg');

		//información de la BD
		$this->load->model('Tabla_tennis');
		//el resultado es un arreglo de objetos
		//(se deberá utilizar el operador -> para acceder a los campos de información)
		$datos['detalles_tennis'] = $this->Tabla_tennis->select_detalles_tennis($id_tennis);

		//navegación
		//se coloca la navegación después de la lectura de info de la BD porque
		//se requiere esta información en la navagación.
		$datos['navegacion'] = array('Detalles' => '',
									 $datos['detalles_tennis']->marca.' '.$datos['detalles_tennis']->modelo => ''
									//'Ofertas' => base_url('portal/ofertas')
									);



		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_portal'] = navegacion_portal($this->paginas->PAGINA_DETALLES_TENNIS);
		$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/portal_base', $data);
	}//end crear_vista

}//end class Detalles_tennis
