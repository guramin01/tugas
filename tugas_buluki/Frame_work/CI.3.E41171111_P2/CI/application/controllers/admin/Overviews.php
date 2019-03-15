<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overviews extends CI_Controller 
{
	public function _constructor()
	{
		parent::_constructor();
	}

	public function index()
	{
		$this->load->view('admin/overviews');
	}
	public function test()
	{
		$this->load->view('admin/_componen/head');
		$this->load->view('admin/_componen/sidebar');
		$this->load->view('admin/_content/dashboard2');
		$this->load->view('admin/_componen/footer');
		$this->load->view('admin/_componen/js');

	}
}
