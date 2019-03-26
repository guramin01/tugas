<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding_sendiri extends CI_Controller {
	
	function index(){

		$this->load->library('library_sendiri');
		$this->library_sendiri->nama_saya();
                echo "<br/>";
                $this->library_sendiri->nama_kamu("Andi");
	}
 
}