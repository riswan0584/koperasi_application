<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   function __Construct(){
       parent ::__construct();
       $this->load->model('model_user');
   }

	public function index()
	{

		//$data['barang'] = $this->model_barang->list_barang();
		$data['user'] = $this->model_user->list_user()->result();
		$this->load->view('view_master_user',$data);
	}

	function input(){

		$this->load->view('view_master_user_input');
	}

	function input_simpan(){

		$datauser= array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('pass'),
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'level'=>$this->input->post('level'),
		);
		$hasil=$this->model_user->insert_user($datauser);		
		//echo $hasil;
		if ($hasil){
             redirect('user');
		}

		$this->load->view('view_master_user_input');
	}

	function edit(){
		$username=$this->uri->segment(3);
		//echo $kodebarang;
		$data['user']=$this->model_user->tampil_edit_user($username)->row_array();
		$this->load->view('view_master_user_edit',$data);
	}

	function edit_simpan(){
		$id=$this->input->post('id');
		//echo $id;
		$datauser= array(
			'username'	=>	$this->input->post('username'),
			'password'	=>	$this->input->post('pass'),
			'nama'		=>	$this->input->post('nama'),
		    'email'		=>	$this->input->post('email'),
            'level'		=>	$this->input->post('level'));
		$hasil=$this->model_user->edit_user($datauser,$id);

		if ($hasil){
			 redirect('user');
		}	
		//$hasil=$this->model_barang->edit_barang($databarang);		
	}

	
}


?>