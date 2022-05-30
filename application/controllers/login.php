<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $this->load->view('shopping/login');
    }
    public function cek_log(){
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');
        $cek = $this->Mahasiswa_model->login($username,$password,'tbl_user')->result();
        if($cek != FALSE){
            foreach ($cek as $row){
                $user = $row->username;
                $grub = $row->grub;
            }
            $this->session->set_userdata('sesion_user', $user);
            $this->session->set_userdata('sesion_grub', $grub);
            redirect('Page');
        }else{
            $this->load->view('shopping/login');
        }
    }
}
?>