<?php
defined('BASEPATH') OR exit('Not allowed access');

class Mahasiswa_model extends CI_Model{

    public function getDataMahasiswa(){
        $this->db->order_by('id', 'DESC');
        $data = $this->db->get('mahasiswa')->result();
        
        return $data;
    }

    public function simpanData($data){
        $this->db->insert('mahasiswa',$data);
        return $this;
    }

    public function findData($id){
        $this->db->where('id',$id);
        $data = $this->db->get('mahasiswa')->row();
        return $data;
    }

    public function updateData($data,$id){
        $this->db->where('id',$id);
        $this->db->update('mahasiswa',$data);
        return $this;
    }

    public function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');
        return $this;
    }
}
?>