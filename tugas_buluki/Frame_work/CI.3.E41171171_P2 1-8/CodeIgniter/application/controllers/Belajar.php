<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	//	$this->load->helper('html');
		$this->load->model('m_data');
		
	}

	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

	//public function index(){
	//	$this->load->view('view_belajar');
	//}

	//public function halo(){
	//	 $data = array('judul' => "Cara menjadi horang kaya" ,
	//	 				'isi' =>'ya kerja doong');
	//	$this->load->view('view_belajar',$data);
	//}

}