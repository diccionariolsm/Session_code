<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uadmin extends Loging{
	
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$valida = $this->valida_sesion();
		echo $valida;
		if( $valida == "admin"){
			$this->load->view('Vadmin');
		}else{
			if ($valida == "user") {
				$this->load->view('Vuser');

<<<<<<< HEAD
	}
=======
			}else{
				$this->load->view('Verror');
			}

		}

	
	}	
}
>>>>>>> refs/remotes/origin/master
