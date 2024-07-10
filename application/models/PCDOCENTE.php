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
		$this->load->model('****/Tabla_PCDOCENTE');
		$datos['PCDOCENTE'] = $this->Tabla_PACURSOS->select_all();

		$this->load->model('Cedula****/Tabla_ProgramaCurso');
		$datos['Tabla_ProgramaCurso'] = $this->Tabla_ProgramaCurso->select_all();

		$this->load->model('Cedula****/Tabla_Docente');
		$datos['Tabla_Docente'] = $this->Tabla_Docente->select_all();

		$datos['titulo_seccion']='PCDOCENTE';

		//Navegacion
		$datos['Navegacion']=array();

		return $datos;

	}//end cargar datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$this->load->view($nombre_vista,$datos);
	}//end crear vista


	public function guardar(){
		$this->load->model('******/Tabla_PCDOCENTE');
		$valores = array( 'IdPrograma'=> $this->input->post('IdPrograma'),
						  'IdDocente'=> $this->input->post('IdDocente')

						);
    $this->Tabla_PCDOCENTE->guardar_pcdocente($valores);
         if ($valores>0){
         	echo "string";
					redirect('****/***');
         }else{
         	return redirect()->to(base_url('Error'));
         }

	}//end guardar

	   public function borrar($IdPrograma){
		$this->load->model('*****/Tabla_PCDOCENTE');
		$this->Tabla_PCDOCENTE->borrar_elpc($IdPrograma);
		 if ($IdPlanta>0){
         	redirect('panel/****/****');
         }else{
         	echo "ERROR";
         }

	}//end borrar
	public function buscar($IdProgramaCurso){
			$this->load->model('*****/Tabla_PCDOCENTE');
			$datos=$this->Tabla_PCDOCENTE->select($IdProgramaCurso);
			$this->load->view('panel/*****/modificar_pcdocente',$datos);
	}//end buscar


	public function modificar($IdPrograma)
	{
		$this->load->model('*****/Tabla_PCDOCENTE');
		$valores = array( 'IdPrograma'=> $this->input->post('IdPrograma'),
						  'IdDocente'=> $this->input->post('IdDocente')

						);
		$this->Tabla_PCDOCENTE->modificar_pcdocente($valores,$IdPrograma);
			if ($valores>0){
         	redirect('panel/*****/*****');
         }else{
         	echo "ERROR";
         }

	}//modificar




}//end class PACURSOS
