<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
		{
			$this->load->view('themes/header');
			$this->load->view('themes/sidebar',$data);
			$this->load->view('register',$data);
			$this->load->view('themes/footer');
		}
    }