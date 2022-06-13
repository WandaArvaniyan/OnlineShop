<?php

class tambah_pelanggan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
		$this->load->model('model_pelanggan');
    }
    public function index(){
        $data['pelanggan'] = $this->model_pelanggan->tampil_data()->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('crud/tambah_pelanggan', $data);
        $this->load->view('admin/footer');
    }
}
?>