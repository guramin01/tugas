<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coding extends CI_Controller {
	
	function index(){
		$this->load->library('librarissendiri');
		$this->librarissendiri->nama_saya();
                echo "<br/>";
                $this->librarissendiri->nama_kamu("Solossa");
	}

}