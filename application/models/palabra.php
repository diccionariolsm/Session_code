<?php
class Palabra extends CI_Model{

	public function __construct(){
		$this->load->database();
	}	

	public function insertar($palabra){
		$this->db->query("INSERT INTO palabra VALUES (1, '$palabra')");
	}

	public function modificar($idpalabra, $palabra){
		$this->db->query("UPDATE palabra SET palabra = '$palabra' WHERE idpalabra = $idpalabra ");
	}

	public function obtener_entidad($idpalabra){
		
	}

	public function listar_entidades(){
		
	}

	public function eliminar($palabra){
		$this->db->query("DELETE FROM palabra WHERE palabra = '$palabra' ");
	}

}

?>

