<?php
class dashboard extends CI_Controller{
    public function index(){
        // $data['produk']=$this->model_produk->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
}