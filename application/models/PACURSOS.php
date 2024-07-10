<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PACURSOS extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this-> load -> helper('form');
		$this -> load -> library('form_validation');
	}// end construct

	public function index()
	{
		//$this->load->view('portal/inicio');
		$this->crear_vista('panel/****/pacursos', $this->cargar_datos());

	}// end index

	public function cargar_datos(){
		$datos=array();

		//datos DB
		$this->load->model('****/Tabla_PACURSOS');
		$datos['PACURSOS'] = $this->Tabla_PACURSOS->select_all();

		$this->load->model('Cedula****/Tabla_PlantaAcademica');
		$datos['Tabla_PlantaAcademica'] = $this->Tabla_PlantaAcademica->select_all();

		$this->load->model('Cedula****/Tabla_Cursos');
		$datos['Tabla_Cursos'] = $this->Tabla_Cursos->select_all();

		$datos['titulo_seccion']='PACURSOS';

		//Navegacion
		$datos['Navegacion']=array();

		return $datos;

	}//end cargar datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$this->load->view($nombre_vista,$datos);
	}//end crear vista


	public function guardar(){
		$this->load->model('******/Tabla_PACURSOS');
		$valores = array( 'IdPlanta'=> $this->input->post('IdPlanta'),
						  'IdCursos'=> $this->input->post('IdCursos')

						);
    $this->Tabla_PLANTACURSOS->guardar_paac($valores);
         if ($valores>0){
         	echo "string";
					redirect('****/***');
         }else{
         	return redirect()->to(base_url('Error'));
         }

	}//end guardar

	   public function borrar($IdPlanta){
		$this->load->model('*****/Tabla_PACURSOS');
		$this->Tabla_PACURSOS->borrar_elpc($IdPlanta);
		 if ($IdPlanta>0){
         	redirect('panel/****/****');
         }else{
         	echo "ERROR";
         }

	}//end borrar
	public function buscar($IdPlanta){
			$this->load->model('*****/Tabla_PACURSOS');
			$datos=$this->Tabla_PACURSOS->select($IdPlanta);
			$this->load->view('panel/*****/modificar_pacursos',$datos);
	}//end buscar


	public function modificar($IdPlanta)
	{
		$this->load->model('*****/Tabla_PACURSOS');
		$valores = array( 'IdPlanta'=> $this->input->post('IdPlanta'),
						  'IdCursos'=> $this->input->post('IdCursos')

						);
		$this->Tabla_PACURSOS->modificar_pacursos($valores,$IdPlanta);
			if ($valores>0){
         	redirect('panel/*****/*****');
         }else{
         	echo "ERROR";
         }

	}//modificar




}//end class PACURSOS
