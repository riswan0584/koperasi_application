<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {

	function __Construct(){
       parent ::__construct();
       $this->load->model('model_bagian');
   }

	public function index()
	{

		//$data['barang'] = $this->model_barang->list_barang();
		$data['bagian'] = $this->model_bagian->list_bagian()->result();
		$this->load->view('view_master_bagian',$data);
	}

	function input(){

		$select['selectdivisi'] = $this->model_bagian->list_divisi()->result();
		$this->load->view('view_master_bagian_input',$select);
	}

	function input_simpan(){

		$databagian= array(
			'kode_bag'=>$this->input->post('kode'),
			'nama_bag'=>$this->input->post('bagian'),
			'kode_divisi'=>$this->input->post('divisi')
		);
		$hasil=$this->model_bagian->insert_bagian($databagian);		
		//echo $hasil;
		if ($hasil){
             redirect('bagian');
		} 

		$this->load->view('view_master_user_input');
	}

	function edit(){
		$kode=$this->uri->segment(3);
		//get combobox divisi
		$data['selectdivisi'] = $this->model_bagian->list_divisi()->result();
		//get data bagian u di edit
		$data['bagian']=$this->model_bagian->tampil_edit_bagian($kode)->row_array();
		$this->load->view('view_master_bagian_edit',$data);
	}

	function edit_simpan(){
		$id=$this->input->post('id');
		//echo $id;
		$databagian= array(
			'kode_bag'	=>	$this->input->post('kode'),
			'nama_bag'	=>	$this->input->post('nama'),
			'kode_divisi'	=>	$this->input->post('divisi'),
			'status'=>	$this->input->post('status')
		);
		$hasil=$this->model_bagian->edit_bagian($databagian,$id);

		if ($hasil){
			 redirect('bagian');
		}	
		//$hasil=$this->model_barang->edit_barang($databarang);		
	}
}


?>