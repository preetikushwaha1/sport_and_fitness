<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
 {
	public function index()
	{
		$this->load->view('template/Header');
		$this->load->view('template/Home_Body');
		$this->load->view('template/Footer');
	}



}
