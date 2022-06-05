<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $data['user'] = $this->login_model->getAll()->result();
        $this->template->views('admin/tbl_kategori',$data);
    }
    // public function tambah(){
    //     $this->template->views('admin/tambah_mahasiswa');
    // }
    // public function input(){
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('pass');
    //     $nama = $this->input->post('nama');
    //     $grup = $this->input->post('grup');

    //     $data = array(
    //         'username' => $username,
    //         'password' => $password,
    //         'nama' => $nama,
    //         'grup' => $grup,
    //     );
    //     $this->Mahasiswa_model->input_data($data, 'tm_user');
    //     redirect('Mahasiswa/index');
    // }
    // public function edit($id){
    //     $where = array('id' => $id);
    //     $data['user'] = $this->login_model->edit_data($where,'tm_user')->result();
    //     $data['grub'] = $this->login_model->getGrup()->result();
    //     $this->template->views('admin/edit_mahasiswa',$data);
    // }
    // public function update(){
    //     $id = $this->input->post('id');
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('pass');
    //     $nama = $this->input->post('nama');
    //     $grup = $this->input->post('grup');

    //     $data = array(
    //         'username' => $username,
    //         'password' => $password,
    //         'nama' => $nama,
    //         'grup' => $grup,
    //     );
    //     $where = array(
    //         'id' => $id
    //     );
    //     $this->login_model->update_data($where,$data,'tbl_user');
    //     redirect('Mahasiswa');
    // }
    // public function hapus($id){
    //     $where = array('id' => $id);
    //     $this->login_model->hapus_data($where,'tbl_user');
    //     redirect('Mahasiswa/index');
    // }
    // }
    // public function index(){
    //     $this->load->model('Mahasiswa_model');
    //     $data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
    //     $this->load->view('view_mahasiswa',$data);
    // }
// public function index(){
//     $this->load->model('prodi_model');
//     $data['Prodi'] = $this->prodi_model->get_data();
//     $this->load->view('view_prodi',$data);
// }
// public function angkatan(){
//     $this->load->model('angkatan_model');
//     $data['Angkatan'] = $this->angkatan_model->get_data();
//     $this->load->view('view_angkatan',$data);
// }
}