<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//untuk pemanggolan library form_validation
        $this->load->library('form_validation');

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

	public function form_tambah()
	{

		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/barang/tambah_barang');
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
	}

	public function tambah_aksi()
	{
		$barang = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->input_data();
            $this->session->set_flashdata('success', 'Barang Berhasil disimpan');
            redirect('admin/barang/form_tambah');

    }
	}

	
	//fungsi untuk mengedit data
	    public function edit($id = null)
    {
       
        $barang = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->edit();
            $this->session->set_flashdata('success', 'Berhasil di edit');
        }

        $data["barang"] = $barang->getById($id);
        if (!$data["barang"]) show_404();
        
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/navbar');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/barang/edit_barang',$data);
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');
    }
    	public function hapus ($id = null){
    		if (!isset($id)) show_404();

    		if ($this->barang_model->delete($id)){
    			redirect(base_url('index.php/admin/barang'));
    		}
    	}



	
}
