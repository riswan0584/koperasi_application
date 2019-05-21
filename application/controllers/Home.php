<?php 

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
       
        $this->load->view("view_home");
	}

	public function login()
	{
        // load view admin/overview.php
       
        $this->load->view("view_login");
	}
}

?>