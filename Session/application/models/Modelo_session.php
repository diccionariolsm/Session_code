<?php
class Modelo_session extends CI_Model{

	public function __construct(){
		$this->load->database();
	}	

						
	
	public function verificaUser($user){
		echo $user;
		$this->db->select('id,Usuario,Rol');
		$this->db->from('users');
		$this->db->where('Usuario',$user);
		$query = $this->db->get();
		$result = $query->result_array();
		
		if(empty($result))
		    return FALSE;
		else
		    return $result[0];
	}

	public function rol($user){
		$this->db->select('Rol');
		$this->db->from('users');
		$this->db->where('Usuario',$user);
		$query = $this->db->get();
		$result = $query->result_array();
		if(empty($result))
		    return "";
		else
		    return $result;
	}


}


?>