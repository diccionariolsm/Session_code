<?php
class Modelo_session extends CI_Model{

	public function __construct(){
		$this->load->database();
	}	

						
	
	public function verificaUser($user){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user',$user);
		$query = $this->db->get();
		$result = $query->result_array();
		if(empty($result))
		    return FALSE;
		else
		    return TRUE;
	}


}


?>