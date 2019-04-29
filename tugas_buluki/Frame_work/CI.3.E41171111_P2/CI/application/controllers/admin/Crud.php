<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
				$this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/_componen/breadcrumb');
		$this->load->view('admin/_content/v_tampil',$data);
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
	}

	function tambah(){
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/_componen/breadcrumb');
		$this->load->view('admin/_content/v_tambah');
		$this->load->view('admin/_componen/js');
		$this->load->view('admin/_componen/footer');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(

			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);

		$this->m_data->input_data($data,'user');
		redirect('admin/crud/index');

	}

}

 ?>