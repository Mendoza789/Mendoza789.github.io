<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oferta_detalles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//se verifica si existe una sesión activa y si el rol tiene permiso para la tarea
		//la funcion is_rol_permitido() se define en el helper persmisos_roles_helper
		if(!is_rol_permitido($this->tareas->TAREA_OFERTA_DETALLES, isset($this->session->rol_actual)?$this->session->rol_actual:-1)){
			redirect("principal/".$this->tareas->TAREA_NONE);
			return;
		}
		//se carga el helper para los componentes de formulario
		$this->load->helper('form');
	}//end __construct

	public function index($id_tennis)	{
		$this->crear_vista('panel/oferta_detalles', $this->cargar_datos($id_tennis));
	}//end index

	public function cargar_datos($id_tennis){
		$datos = array();

		//títulos
		$datos['titulo_seccion'] = 'Detalles de oferta';

		//información de la BD
		$this->load->model('Tabla_tennis');
		$this->load->model('Tabla_ofertas');

		$datos['info_tennis'] = $this->Tabla_tennis->select(array('id_tennis'=>$id_tennis))[0];//se obtiene el primero (e idealmente el único) registro obtenido.
		$res_oferta = $this->Tabla_ofertas->select(array('id_tennis'=>$datos['info_tennis']->id_tennis));
		if(sizeof($res_oferta) > 0) {
			$datos['id_oferta'] = $res_oferta[0]->id_oferta;
			$datos['porcentaje'] = $res_oferta[0]->descuento;
			$datos['fin_oferta'] = $res_oferta[0]->fin_oferta;
		}//end if existe un registro de oferta

		//var_dump($datos);

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$data['contenido'] = $this->load->view($nombre_vista, $datos, TRUE);
		$data['menu_lateral_panel'] = crear_menu_lateral_panel($this->tareas->TAREA_OFERTA_DETALLES, $this->session->rol_actual);
		//$data['navegacion'] = $datos['navegacion'];

		$this->load->view('base/panel_base', $data);
	}//end crear_vista

	public function actualizar(){
		$id_tennis = $this->input->post('id_tennis');
		$exito = FALSE;
		$this->load->model('Tabla_ofertas');

		$res_oferta = $this->Tabla_ofertas->select(array('id_tennis'=>$id_tennis));
		if(sizeof($res_oferta) > 0){
			$id_oferta = $res_oferta[0]->id_oferta;

			$values = array('descuento'=>$this->input->post('descuento'),
							'fin_oferta'=>$this->input->post('validez'),
							);

			if($this->Tabla_ofertas->update($values, $id_oferta)){
				$exito = TRUE;
			}//end if actualización exitosa
		}//end if existe oferta
		else{
			$values = array('id_tennis'=>$id_tennis,
							'descuento'=>$this->input->post('descuento'),
							'fin_oferta'=>$this->input->post('validez'),
							);

			if($this->Tabla_ofertas->insert($values)){
				$exito = TRUE;
			}//end if actualización exitosa
		}//end else no existe oferta y se inserta

		//se mand mensaje y se carga la página de ofertas.
		if($exito){
			$this->session->mensaje = 'Información de oferta actualizada';
			redirect('principal/'.$this->tareas->TAREA_OFERTAS_TODAS);
		}//end if actualización de oferta exitoso
		else{
			$this->session->mensaje = 'Error al actualizar la oferta';
			redirect('principal/'.$this->tareas->TAREA_OFERTAS_TODAS);
		}//end else error al actualizar oferta
	}//end actualizar

}//end class Oferta_detalles
