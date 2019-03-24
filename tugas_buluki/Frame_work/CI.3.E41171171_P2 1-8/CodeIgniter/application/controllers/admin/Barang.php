<?php 
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Barang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	//fungsi untuk memanggil model
		$this->load->model("Barang_model");
	}

	public function index(){
		$this->load->view('admin/overview');
	}

	//fungsi untuk memanggil form insert data
	public function add(){

	}
	//fungsi untuk memanggil form edit data
	public function edit(){

	}
}