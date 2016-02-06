<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/

	class LOGING_Controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
				//cargar librerias, helpers 
				//clase Session inicializada en el controlador, para poder hacer uso de ella
				$this->load->library('sesion');
				//carga el archivo de configuracion
				$this->config->load->('');
				//carga la base de datos
				$this->load->database();
				//caraga el helper URL 
				$this->load->helper->('url');
		}

		/**
		* clase par evitar ciclo
		**/
		class Loging extends LOGING_Controller
		{
			
			function __construct()
			{
				parent::__construct();
			}

	
			//Preguntamos si la sesion esta activa()
			if($this->session->userdata('usuario') != NULL){
				//Va a preguntar que tipo de usuario es o sesion es
		        $usuario = $this->session->userdata();

			}else{//Si la sesion no esta activa
				//Te manda al login
			}


		}
	}


?>