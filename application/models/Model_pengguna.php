<?php 

    class Model_pengguna extends CI_Model
    {

        function tampil_data(){
            return $this->db->get('data_pengguna');
        }
    
        function show_data($where){
            return $this->db->get_where('data_pengguna',$where);
        }
    
        function edit_data($where){
            return $this->db->get_where('data_pengguna',$where);
        }
    
        function update_data($where,$data){
            $this->db->where($where);
            $this->db->update('data_pengguna',$data);
        }
    
        function hapus_data($where){
            $this->db->where($where);
            $this->db->delete('data_pengguna',$where);
        }

    }
    
?>