<?php
class model_order extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tbl_pelanggan');
        return $this->db->get('tbl_order');
        return $this->db->get('tbl_detail_order');
    }
    public function tambah_pelanggan ($data, $table){
        $this->db->insert($table,$data);

    }
    public function edit_data ($where,$table){
       return $this->db->get_where($table,$where);
    }

    public function update_data ($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);

    }
    public function hapus_data ($where,$table){
        $this->db->where($where);
        $this->db->delete($table);

    }
    public function find($id){
         $result =$this->db->where('id',$id)
                            ->limit(1)
                            ->get('tbl_pelanggan', 'tbl_order', 'detail_order');                            
        if($result->num_rows() > 0){
            return $result->row();
     }else{
         return array();
     }
    }
}