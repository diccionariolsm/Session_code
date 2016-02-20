<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Se carga el modelo
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		//llamada a la funcion insertar del modelo palabra
		//$data['datos'] = $this->palabra->insertar("hola");

		//llamada a la funcion modificar del modelo palabra
		//$data['datos'] = $this->palabra->modificar(1, "hola_MUNDito _cruel");

		//$data['datos'] = $this->palabra->eliminar("hola");

		//$data['palabras'] = $this->palabra->obtener_entidad(2);
		
		//ESTAS SON PRUEBAS
		$this->load->model('modelo_session');

		$var= $this->modelo_session->rol("admin");
		var_dump($var);
		/*
		$user = array('name' => 'maggie');
		$user1 ="maggie";
		$name= $this->session->set_userdata($user);
		echo $this->session->has_userdata('name');
		$datos = array('name');
		$this->session->unset_userdata($datos);
		echo $this->session->has_userdata('name');
		*/

		/*  ESTO YA TIENE LAS FUNCIONES O ESTRUCTURA QUE MEDIO ACORDAMOS
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

		*/

	}

	public function succes() {
		$this->load->view('success');
	}

	public function error_access(){
		$this->load->view('error_session');
	}

}
