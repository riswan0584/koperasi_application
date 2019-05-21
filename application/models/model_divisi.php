<?php

class Model_divisi extends CI_Model {

    function list_divisi(){
		/*get from table user*/
		$this->db->order_by("status", "desc");
		$divisi=$this->db->get('divisi');
		return $divisi;
	}

	function insert_divisi($datadivisi){		
		$insertdivisi=$this->db->insert('divisi',$datadivisi);
		return $insertdivisi;
	}

	function tampil_edit_divisi($kode){
		$editdivisi=$this->db->get_where('divisi',array('id'=>$kode));
		return $editdivisi;
	}

	function edit_divisi($datadivisi,$id){
		$this->db->where('id',$id);
		$ganti=$this->db->update('divisi',$datadivisi);		
		return $ganti;
	}

}
?>