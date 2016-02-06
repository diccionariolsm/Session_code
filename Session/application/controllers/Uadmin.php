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
		
	}
	
}