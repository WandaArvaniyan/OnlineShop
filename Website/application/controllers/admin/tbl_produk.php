<?php

class tbl_produk extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
		$this->load->model('model_produk');
    }
    public function index(){
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tbl_produk', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_aksi(){
        $nama_prdk =$this->input->post('nama_produk');
        $deskripsi =$this->input->post('deskripsi');
        $deskripsi_lengkap =$this->input->post('deskripsi_lengkap');
        $harga =$this->input->post('harga');
        $stok =$this->input->post('stok');
        $kategori =$this->input->post('kategori');
        $gambar =$_FILES['gambar']['name'];
        if($gambar =''){}else{
            $config ['upload_path'] ='./uploads';
            $config ['allowed_types'] ='jpg|jpeg|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo"Gambar Gagal diUpload";
            }else{
                $gambar=$this->upload->data('gambar');            
            }
        } 
        
    $data = array(
        'nama_produk'       =>$nama_prdk,
        'deskripsi'         =>$deskripsi, 
        'deskripsi_lengkap' =>$deskripsi_lengkap,
        'harga'             =>$harga,
        'stok'              =>$stok,
        'kategori'          =>$kategori,
        'gambar'            =>$gambar
    );
    $this->model_produk->tambah_produk($data,'tbl_produk');
    redirect('admin/tbl_produk/index');
    }

    public function edit($id){
        $where = array('id_produk'=>$id);
        $data['produk']=$this->model_produk->edit_data($where,'tbl_produk')->result();
        $this->load->view('themes/header');
        $this->load->view('admin/sidebar');
        $this->load->view('crud/edit_produk', $data);
        $this->load->view('admin/footer');
    }
    public function update(){
        $id         = $this->input->post('id_produk');
        $nama_prdk  =$this->input->post('nama_produk');
        $deskripsi  =$this->input->post('deskripsi');
        $deskripsi_lengkap =$this->input->post('deskripsi_lengkap');
        $harga      =$this->input->post('harga');
        $stok       =$this->input->post('stok');
        $kategori   =$this->input->post('kategori');
    
    $data = array(
        'nama_produk'       =>$nama_prdk,
        'deskripsi'         =>$deskripsi, 
        'deskripsi_lengkap' =>$deskripsi_lengkap,
        'harga'             =>$harga,
        'stok'              =>$stok,
        'kategori'          =>$kategori
        
    );
    $where = array(
        'id_produk'   =>$id
    );

    $this->model_produk->update_data($where,$data,'tbl_produk');
    redirect('admin/tbl_produk/index');


    }
    public function hapus($id){
        $where = array('id_produk'=>$id);
        $this->model_produk->hapus_data($where,'tbl_produk');
        redirect('admin/tbl_produk/index');
    }

}