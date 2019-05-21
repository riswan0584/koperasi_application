<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	function __Construct(){
       parent ::__construct();
       $this->load->model('model_divisi');
   }

	public function index()
	{

		//$data['barang'] = $this->model_barang->list_barang();
		$data['divisi'] = $this->model_divisi->list_divisi()->result();
		$this->load->view('view_master_divisi',$data);
	}

	function input(){

		$this->load->view('view_master_divisi_input');
	}

	function input_simpan(){

		$datadivisi= array(
			'id'=>$this->input->post('kode'),
			'nama'=>$this->input->post('nama')
		);
		$hasil=$this->model_divisi->insert_divisi($datadivisi);		
		//echo $hasil;
		if ($hasil){
             redirect('divisi');
		} 

		$this->load->view('view_master_user_input');
	}

	function edit(){
		$kode=$this->uri->segment(3);
		//echo $kodebarang;
		$data['divisi']=$this->model_divisi->tampil_edit_divisi($kode)->row_array();
		$this->load->view('view_master_divisi_edit',$data);
	}

	function edit_simpan(){
		$id=$this->input->post('id');
		//echo $id;
		$datadivisi= array(
			'id'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama'),
			'status'=>	$this->input->post('status')
		);
		$hasil=$this->model_divisi->edit_divisi($datadivisi,$id);

		if ($hasil){
			 redirect('divisi');
		}	
		//$hasil=$this->model_barang->edit_barang($databarang);		
	}
}


?>