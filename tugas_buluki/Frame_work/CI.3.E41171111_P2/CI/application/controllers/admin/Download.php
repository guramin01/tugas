<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/_componen/breadcrumb');
		$this->load->view('admin/_content/v_download');
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
	}

	public function lakukan_download(){				
		force_download('gambar/pic1.jpg',NULL);
	}	

}