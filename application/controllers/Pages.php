<?php
class Pages extends CI_Controller {

	public function index(){
		$this->load->view('elvinero/index');
	}

	function nosotros(){
		$this->load->view('elvinero/nosotros');
	}
		
	function mas(){
		$this->load->view('elvinero/mas');
	}
		
	function galeria(){
		$this->load->view('elvinero/galeria');
	}

	
}