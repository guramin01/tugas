<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

Class Form extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/_componen/breadcrumb');
		$this->load->view('admin/_content/v_form');
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
	}

	public function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfirmasi_email','Konfirmasi Email','required');


		if($this->form_validation->run() != false ){
			echo "Form Validation Oke";

		}else {
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/_componen/breadcrumb');
		$this->load->view('admin/_content/v_form');
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
		}
	}
}

 ?>
