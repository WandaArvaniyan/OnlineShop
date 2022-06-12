<?php

class tbl_pelanggan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
		$this->load->model('model_pelanggan');
    }
    public function index(){
        $data['pelanggan'] = $this->model_pelanggan->tampil_data()->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tbl_pelanggan', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_aksi(){
        $nama_prdk =$this->input->post('nama');
        $deskripsi =$this->input->post('email');
        $deskripsi_lengkap =$this->input->post('alamat');
        $harga =$this->input->post('telp');
        
    $data = array(
        'nama'       =>$nama_prdk,
        'email'         =>$deskripsi, 
        'alamat' =>$deskripsi_lengkap,
        'telp'             =>$harga
    );
    $this->model_pelanggan->tambah_pelanggan($data,'tbl_pelanggan');
    redirect('admin/tbl_pelanggan/index');
    }

    public function edit($id){
        $where = array('id'=>$id);
        $data['pelanggan']=$this->model_pelanggan->edit_data($where,'tbl_pelanggan')->result();
        $this->load->view('themes/header');
        $this->load->view('themes/sidebar');
        $this->load->view('crud/edit_pelanggan', $data);
        $this->load->view('themes/footer');
    }
    public function update(){
        $id         = $this->input->post('id');
        $nama_prdk  =$this->input->post('nama');
        $deskripsi  =$this->input->post('email');
        $deskripsi_lengkap =$this->input->post('alamat');
        $harga      =$this->input->post('telp');
    
    $data = array(
        'nama'       =>$nama_prdk,
        'email'         =>$deskripsi, 
        'alamat' =>$deskripsi_lengkap,
        'telp'             =>$harga
        
    );
    $where = array(
        'id'   =>$id
    );

    $this->model_pelanggan->update_data($where,$data,'tbl_pelanggan');
    redirect('admin/tbl_pelanggan/index');


    }
    public function hapus($id){
        $where = array('id'=>$id);
        $this->model_pelanggan->hapus_data($where,'tbl_pelanggan');
        redirect('admin/tbl_pelanggan/index');
    }

}