<?php

class tambah_produk extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
		$this->load->model('model_kategori');
    }
    public function index(){
        $data['kategori'] = $this->model_kategori->tampil_data()->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('crud/tambah_produk', $data);
        $this->load->view('admin/footer');
    }
}
?>