<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index($id_seccion=NULL, $parametro_uno=NULL){

		//se obtiene el estatus de la sesión
		$sesion_iniciada = isset($this->session->sesion_iniciada) ? $this->session->sesion_iniciada : FALSE;
		//se declara una variable de sesion con la sección actual solicitada
		$this->session->seccion_actual = $id_seccion==NULL ? $this->paginas->PAGINA_NONE : $id_seccion;

		if(($this->session->seccion_actual == 0) || ($this->session->seccion_actual > 1000)){
			switch ($this->session->seccion_actual) {
				case $this->paginas->PAGINA_NONE:
					redirect('portal/inicio');
					break;
				case $this->paginas->PAGINA_INICIO:
					redirect('portal/inicio');
					break;
				case $this->paginas->PAGINA_OFERTAS:
					redirect('portal/ofertas');
					break;
				case $this->paginas->PAGINA_TENNIS_DAMA:
					redirect('portal/tennis_dama');
					break;
				case $this->paginas->PAGINA_TENNIS_CABALLERO:
					redirect('portal/tennis_caballero');
					break;
				case $this->paginas->PAGINA_GALERIA:
					redirect('portal/galeria');
					break;
				case $this->paginas->PAGINA_CONTACTO:
					redirect('portal/contacto');
					break;
				case $this->paginas->PAGINA_ACERCA_DEL_SITIO:
					redirect('portal/acerca_del_sitio');
					break;
				case $this->paginas->PAGINA_ACERCA_DEL_AUTOR:
					redirect('portal/acerca_del_autor');
					break;
				case $this->paginas->PAGINA_DETALLES_TENNIS:
					redirect('portal/detalles_tennis/index/'.$parametro_uno);
					break;
				case $this->paginas->PAGINA_LOGIN:
					redirect('usuario/login');
					break;
				default:
					redirect('portal/inicio');
					break;
			}//end switch páginas del portal
		}//end if es una página
		else{
			if($this->session->sesion_iniciada){
				switch ($this->session->seccion_actual) {
					case $this->tareas->TAREA_NONE:
						redirect('panel/dashboard');
						break;
					case $this->tareas->TAREA_DASHBOARD:
						redirect('panel/dashboard');
						break;
					case $this->tareas->TAREA_USUARIOS_TODOS:
						redirect('panel/usuarios_todos');
						break;
					case $this->tareas->TAREA_USUARIO_NUEVO:
						redirect('panel/usuario_nuevo');
						break;
					case $this->tareas->TAREA_USUARIO_DETALLES:
						redirect('panel/usuario_detalles/index/'.$parametro_uno);
						break;
					case $this->tareas->TAREA_USUARIO_BORRAR:
						redirect('panel/usuarios_todos/borrar/'.$parametro_uno);
						break;
					case $this->tareas->TAREA_USUARIO_PERFIL:
						redirect('panel/usuario_perfil/index/'.$parametro_uno);
						break;

					case $this->tareas->TAREA_TENNIS_TODOS:
						redirect('panel/tennis_todos');
						break;
					case $this->tareas->TAREA_TENNIS_NUEVO:
						redirect('panel/tennis_nuevo');
						break;
					case $this->tareas->TAREA_TENNIS_AGREGAR:
						redirect('panel/tennis_nuevo/agregar');
						break;
					case $this->tareas->TAREA_TENNIS_DETALLES:
						redirect('panel/tennis_detalles/index/'.$parametro_uno);
						break;
					case $this->tareas->TAREA_TENNIS_BORRAR:
						redirect('panel/tennis_todos/borrar/'.$parametro_uno);
						break;
					case $this->tareas->TAREA_TENNIS_DAMA:
						redirect('panel/tennis_dama');
						break;
					case $this->tareas->TAREA_TENNIS_CABALLERO:
						redirect('panel/tennis_caballero');
						break;

					case $this->tareas->TAREA_OFERTAS_TODAS:
						redirect('panel/ofertas_todas');
						break;
					case $this->tareas->TAREA_OFERTA_DETALLES:
						redirect('panel/oferta_detalles/index/'.$parametro_uno);
						break;
					case $this->tareas->TAREA_OFERTA_BORRAR:
						redirect('panel/ofertas_todas/borrar/'.$parametro_uno);
						break;

					default:
						redirect('panel/dashboard');
						break;
				}//end switch tareas del panel
			}//end if existe una sesión activa
			else{
				redirect('usuario/login');
			}//end else no hay una sección activa
		}//end else es una tarea

	}//end index

}//end class Principal
