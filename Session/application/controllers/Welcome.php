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

		//$this->load->view('welcome_message',$data);
		$this->session->set_userdata('user',array('nombre'=>'Ricardo'));
		var_dump($this->session->userdata('user'));
		$this->session->sess_destroy();
		//var_dump($this->session->userdata('user'));
	}

}
