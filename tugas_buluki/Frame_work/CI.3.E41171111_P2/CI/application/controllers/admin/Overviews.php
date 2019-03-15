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
}
