<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __Construct(){
       parent ::__construct();
       $this->load->model('model_kategori');
   }

	public function index()
	{

		//$data['barang'] = $this->model_barang->list_barang();
		$data['kategori'] = $this->model_kategori->list_kategori()->result();
		$this->load->view('view_master_kategori',$data);
	}

	function input(){

		$this->load->view('view_master_kategori_input');
	}

	function input_simpan(){

		$datakategori= array(
			'kategori'=>$this->input->post('nama'),
			'update_date'=>$this->input->post('update_date'),
			'update_user'=>$this->input->post('username'),
		);
		$hasil=$this->model_kategori->insert_kategori($datakategori);		
		//echo $hasil;
		if ($hasil){
             redirect('kategori');
		} 

		$this->load->view('view_master_user_input');
	}

	function edit(){
		$kode=$this->uri->segment(3);
		//echo $kodebarang;
		$data['kategori']=$this->model_kategori->tampil_edit_kategori($kode)->row_array();
		$this->load->view('view_master_kategori_edit',$data);
	}

	function edit_simpan(){
		$id=$this->input->post('id');
		//echo $id;
		$datakategori= array(
			'id'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama'),
			'status'=>	$this->input->post('status')
		);
		$hasil=$this->model_kategori->edit_kategori($datakategori,$id);

		if ($hasil){
			 redirect('kategori');
		}	
		//$hasil=$this->model_barang->edit_barang($databarang);		
	}
}


?>