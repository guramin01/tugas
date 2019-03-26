<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
    
		//fungsi untuk pemangilan model
		$this->load->model("Barang_model");
    }


    public function index()
    {
    	$this->load->view('admin/dashboard');
    }

    // fungsi yang digunakan untuk panggil form tambah daata
    public function Add(){

    }

    // fungsi yang digunakan untuk panggil form Edit data
    public function Edit(){

    }
}