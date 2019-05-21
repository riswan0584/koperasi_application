<?php

class Model_user extends CI_Model {

    function list_user(){
		/*get from table user*/
		$user=$this->db->get('user');
		return $user;
	}

	function insert_user($datauser){		
		$insertuser=$this->db->insert('user',$datauser);
		return $insertuser;
	}

	function tampil_edit_user($username){
		$edituser=$this->db->get_where('user',array('username'=>$username));
		return $edituser;
	}

	function edit_user($datauser,$id){
		$this->db->where('username',$id);
		$ganti=$this->db->update('user',$datauser);		
		return $ganti;
	}

}
?>