<?php

class Model_kategori extends CI_Model {

    function list_kategori(){
		/*get from table user*/
		$this->db->order_by("status", "desc");
		$kategori=$this->db->get('kategori_pinjaman');
		return $kategori;
	}

	function insert_kategori($datakategori){		
		$insertkategori=$this->db->insert('kategori_pinjaman',$datakategori);
		return $insertkategori;
	}

	function tampil_edit_kategori($kode){
		$editkategori=$this->db->get_where('kategori',array('id'=>$kode));
		return $editkategori;
	}

	function edit_kategori($datakategori,$id){
		$this->db->where('id',$id);
		$ganti=$this->db->update('kategori',$datakategori);		
		return $ganti;
	}

}
?>