<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}//end __construct

	public function index()	{
		$sesion_iniciada = isset($this->session->sesion_iniciada) ? $this->session->sesion_iniciada : FALSE;
		$rol_actual = isset($this->session->rol_actual) ? $this->session->rol_actual : '';
		$login_failure = isset($this->session->login_failure) ? $this->session->login_failure : NULL;

		if ($sesion_iniciada) {
			redirect('principal/'.$this->tareas->TAREA_DASHBOARD);
			return;
		}//end if hay una sesión iniciada; se redirige a dashboard.
		else{
			$this->verificar();
		}//end else no hay sesión iniciada; se verifican las credenciales de acceso.
	}//end index

	public function cargar_datos(){
		$datos = array();

		//títulos
		$datos['titulo_tab'] = 'Tus Tennis Inc. - Acceso';

		return $datos;
	}//end cargar_datos

	public function crear_vista($nombre_vista=NULL, $datos=NULL){
		$this->load->view($nombre_vista, $datos);
	}//end crear_vista

	public function verificar(){
		if($this->input->post('usuario') == NULL){
			if($this->session->login_failure){
				echo '<script type="text/javascript">alert("Credenciales de acceso inválidas");</script>';
				$this->session->login_failure = FALSE;
			}//end if hubo un error al intentar ingresar al panel de administración
			$this->crear_vista('usuario/login', $this->cargar_datos());
		}//si no hay datos de POST (se ha entrado a login por primera vez)
		else{
			$this->load->model('Tabla_usuarios');
			$respuesta = $this->Tabla_usuarios->login($this->input->post('usuario'), $this->input->post('pass'));
			if($respuesta != NULL){
				$this->session->sesion_iniciada = TRUE;
				$this->session->id_usuario = $respuesta->id_usuario;
				$this->session->nombre_usuario = $respuesta->nombre_usuario;
				$this->session->nombre_completo_usuario = $respuesta->nombre_usuario.' '.$respuesta->ap_paterno_usuario.' '.$respuesta->ap_materno_usuario;
				$this->session->rol_actual = $respuesta->rol_usuario;
				$this->session->email_usuario = $respuesta->email_usuario;
				$this->session->seccion_actual = $this->tareas->TAREA_DASHBOARD;
				$this->session->login_failure = FALSE;
				$this->session->mensaje = NULL;

				redirect('principal/'.$this->session->seccion_actual);
			}//end if si existe
			else{
				$this->session->login_failure = TRUE;
				redirect('usuario/login');
			}
		}//end else se verifican las credenciales de acceso
	}//end verificar

}//end class Ofertas
