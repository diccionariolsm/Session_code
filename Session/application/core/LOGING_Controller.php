<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/

	class LOGING_Controller extends CI_Controller
	{
		
		 public function __construct()
		{
			parent::__construct();
				//cargar librerias, helpers 
				//clase Session inicializada en el controlador, para poder hacer uso de ella
				$this->load->library('session');
				$this->load->helper('url');
				//carga el archivo de configuracion
				//$this->config->load('configsesion');
				//carga la base de datos
				$this->load->database();
				//caraga el helper URL 
				//$this->load->helper('url');
				$this->load->model('modelo_session');
		}		
	}//login controller

		/**
		* clase par evitar ciclo
		**/
		class Loging extends LOGING_Controller
		{
			
			 public function __construct()
			{
				parent::__construct();
				$this->valida_sesion();
			}

			

			public function valida_sesion(){

				$datos = array('user');
				$this->session->unset_userdata($datos);


				$user= $this->uri->segment(2);
				$pass= $this->uri->segment(3);
				echo $user;
				$arr = array('user'=> '$user',
							'pass'=> '$pass');
				if($this->session->has_userdata('user')){
					redirect('succes');

				}else{
					redirect('error_access');
				}//else
				return "";

			}//valida session

			
			}//login controller


?>