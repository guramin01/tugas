<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		//fungsi untuk pemanggilan model

		$this->load->model('barang_model');

	}

	public function index()
	{
		$data['barang']=$this->barang_model->getAll();
		// $data["xx"] = array("a", "sdfdaf");
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		// $this->load->view('admin/barang/daftar_barang');
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
		$this->load->view("admin/barang/daftar_barang", $data);
	}

	//fungsi untuk insert data

	public function add(){

	}

	
	//fungsi untuk mengedit data
	
	public function edit(){

	}


	
}
