<?php
class login_model extends CI_Model{
	// public function get_data(){
  //   $data_mahasiswa = [
  //     ["nama"=>"Wanda Arvaniyan","prodi"=>"MIF"],
  //     ["nama"=>"Moch. Andri","prodi"=>"TKK"],
  //     ["nama"=>"Khoirur Rizal","prodi"=>"TIF"]
  //   ];
  //   return $data_mahasiswa;
  // }

  function getAll(){
    $this->db->select('*');
    $this->db->from('tbl_user');
    $query = $this->db->get();
    return $query;
  }
  function input_data($data,$table){
    $this->db->insert($table,$data);
  }
  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }
  public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  function getRoleid(){
    $this->db->select('*');
    $this->db->from('tbl_user');
    $query = $this->db->get();
    return $query;
  }
  function login($user, $pass, $table){
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username',$user);
    $this->db->where('password',$pass);
    $query = $this->db->get();
    return $query;
  }
}
?>
