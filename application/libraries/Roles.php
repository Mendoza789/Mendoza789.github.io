<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Roles {

        //Constantes roles/departamentos
		public $ROL_NONE = array();
		public $ROL_ADMINISTRADOR = array();
		public $ROL_USUARIO = array();

		public function __construct(){
			//Inicialización de las constantes de los roles
			//Respetar el orden de los roles
			$this->ROL_ADMINISTRADOR['nombre'] = 'Administrador';
			$this->ROL_ADMINISTRADOR['clave'] = 0;

			$this->ROL_USUARIO['nombre'] = 'Miembro';
			$this->ROL_USUARIO['clave'] = 1;
		}//end constructor

	}//end class Roles
