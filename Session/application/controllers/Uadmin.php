<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uadmin extends Loging{
	
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		if( valsesion()){
			$this->load->view('Vadmin');
		}

	}

	public function valsesion(){
		$user= $this->uri->segment(2);
			$pass= $this->uri->segment(3);

			$arr = array('user'=> '$user',
						'pass'=> '$pass');
			if($this->session->has_userdata('user')){
				echo "Redireccionar";
			}else{
				//Su el usuario esta en la base, se inicializa sesión
				if($this->modeloS->verificaUser($user)){
					$this->session->set_userdata($arr);
					echo $this->session->has_userdata('user') ;
				}else{
					echo "Usuario incorrecto";
				}
			}
		
	}
	
}