<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uadmin extends Loging{
	
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$valida = $this->valida_sesion();
		if( $valida == "admin"){
			$this->load->view('Vadmin');
		}elseif ($valida == "user") {
			$this->load->view('Vuser');

		}else{
			$this->load->view('Verror');
		}

	}

<<<<<<< HEAD
	public function valsesion(){
		
	}
=======
	
>>>>>>> refs/remotes/origin/master
	
}