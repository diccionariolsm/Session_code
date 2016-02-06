<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

//cargar la imagen
define('IMAGEN', FCPATH.'media');

$base = & get_instance();

define('BASE_URL', $base->config->base_url());
define('MEDIA_URL',BASE_URL.'media');
//define('BOOPSTRAP',BASE_URL.'assets/boopstrap');







?>