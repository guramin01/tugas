<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		//fungsi untuk pemanggilan model

		$this->load->model("Barang_model");

	}

	public function index()
	{
		$this->load->view('admin/_content/overviews');
	}

	//fungsi untuk insert data

	public function add(){

	}

	
	//fungsi untuk mengedit data
	
	public function edit(){

	}

	
}
