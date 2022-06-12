<?php

class tbl_kategori extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
		$this->load->model('model_kategori');
    }
    public function index(){
        $data['kategori'] = $this->model_kategori->tampil_data()->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tbl_kategori', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_aksi(){
        $kategori =$this->input->post('nama_kategori');   
    $data = array(
        'nama_kategori'      =>$kategori
    );
    $this->model_kategori->tambah_kategori($data,'tbl_kategori');
    redirect('admin/tbl_kategori/index');
    }

    public function edit($id){
        $where = array('id'=>$id);
        $data['kategori']=$this->model_kategori->edit_data($where,'tbl_kategori')->result();
        $this->load->view('themes/header');
        $this->load->view('themes/sidebar');
        $this->load->view('crud/edit_kategori', $data);
        $this->load->view('themes/footer');
    }
    public function update(){
        $id         = $this->input->post('id');
        $kategori   = $this->input->post('nama_kategori');
    
    $data = array(
        'nama_kategori'      =>$kategori
        
    );
    $where = array(
        'id'   =>$id
    );

    $this->model_kategori->update_data($where,$data,'tbl_kategori');
    redirect('admin/tbl_kategori/index');


    }
    public function hapus($id){
        $where = array('id'=>$id);
        $this->model_kategori->hapus_data($where,'tbl_kategori');
        redirect('admin/tbl_kategori/index');
    }

}