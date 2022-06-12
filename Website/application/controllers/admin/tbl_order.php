<?php

class tbl_order extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
		$this->load->model('model_order');
    }
    public function index(){
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tbl_order', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_aksi(){
        $nama =$this->input->post('nama');
        $email =$this->input->post('email');
        $alamat =$this->input->post('alamat');
        $telp =$this->input->post('telp');
        $id_produk =$this->input->post('id_produk');
        $qty =$this->input->post('qty');
        $harga =$this->input->post('harga');  
        $tanggal =$this->input->post('tanggal');           
        
    $data = array(
        'nama'      =>$nama,
        'email'     =>$email, 
        'alamat'    =>$alamat,
        'telp'      =>$telp,
        'id_produk' =>$id_produk,
        'qty'       =>$qty,
        'harga'     =>$harga
    );
    $this->model_order->tambah_order($data,'tbl_pelanggan', 'tbl_detail_order', 'tbl_order');
    redirect('admin/tbl_order/index');
    }

    public function edit($id){
        $where = array('id'=>$id);
        $data['order']=$this->model_order->edit_data($where,'tbl_pelanggan', 'tbl_detail_order', 'tbl_order')->result();
        $this->load->view('themes/header');
        $this->load->view('themes/sidebar');
        $this->load->view('crud/edit_order', $data);
        $this->load->view('themes/footer');
    }
    public function update(){
        $id         = $this->input->post('id');
        $nama       =$this->input->post('nama');
        $email      =$this->input->post('email');
        $alamat =$this->input->post('alamat');
        $telp =$this->input->post('telp');
        $id_produk =$this->input->post('id_produk');
        $qty =$this->input->post('qty');
        $harga =$this->input->post('harga');  
        $tanggal =$this->input->post('tanggal'); 
    
    $data = array(
        'nama'      =>$nama,
        'email'     =>$email, 
        'alamat'    =>$alamat,
        'telp'      =>$telp,
        'id_produk' =>$id_produk,
        'qty'       =>$qty,
        'harga'     =>$harga,
        'tanggal'   =>$tanggal
        
    );
    $where = array(
        'id_produk'   =>$id
    );

    $this->model_produk->update_data($where,$data,'tbl_produk');
    redirect('admin/tbl_produk/index');


    }
    public function hapus($id){
        $where = array('id'=>$id);
        $this->model_produk->hapus_data($where,'tbl_produk');
        redirect('admin/tbl_produk/index');
    }

}