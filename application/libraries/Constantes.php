<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Constantes {

		//ruta imágenes subidas de tennis
		public $IMG_DIR = 'recursos-panel/img/';
		public $GENERO_HOMBRE = 0;
		public $GENERO_MUJER = 1;

		//info sesión
		public $SES_VAR = array();

		public function __construct(){
			//Arreglo de nombres de variables de sesión
			$this->SES_VAR = array('seccion_actual', 'sesion_iniciada', 'id_usuario', 'nombre_usuario',
								   'nombre_completo_usuario', 'rol_actual', 'email_usuario', 'login_failure', 'idElementoEditar',
							  	   '__ci_last_regenerate',
							      );
		}//end constructor

	}//end class Constantes
