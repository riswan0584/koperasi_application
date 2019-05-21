<?php

class Model_bagian extends CI_Model {

    function list_bagian(){
		/*get from table user*/
		$this->db->select('  b.kode_bag as kode, b.nama_bag as nama, d.nama as divisi, b.status as status');
		$this->db->from('bagian as b');
		$this->db->join('divisi as d', 'd.id = b.kode_divisi');
		$bagian=$this->db->get();
		return $bagian;
	}

	function list_divisi(){
		$this->db->order_by("status", "desc");
		$divisi=$this->db->get('divisi');
		return $divisi;
	}

	function insert_bagian($databagian){		
		$insertbagian=$this->db->insert('bagian',$databagian);
		return $insertbagian;
	}

	function tampil_edit_bagian($kode){
		$editbagian=$this->db->get_where('bagian',array('kode_bag'=>$kode));
		return $editbagian;
	}

	function edit_bagian($databagian,$id){
		$this->db->where('kode_bag',$id);
		$ganti=$this->db->update('bagian',$databagian);		
		return $ganti;
	}

}
?>