<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index(){
		$this->session->unset_userdata($this->constantes->SES_VAR);
    	$this->session->sess_destroy();

		redirect('principal');
    }//end index

}//end class Logout
