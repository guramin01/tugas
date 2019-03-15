<?php

class Overview extends CI_controller{
	public function __contructor(){
		parent::__constructor();
	}
	public function index(){
		$this->load->view("admin/overview");
	}
}