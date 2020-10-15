<?php 

    class Model_mapel extends CI_Model
    {

        function tampil_data(){
            return $this->db->get('mata_pelajaran');
        }
    
        function simpan_data($data){
            $this->db->insert('mata_pelajaran',$data);
        }
    
        function show_data($where){
            return $this->db->get_where('mata_pelajaran',$where);
        }
    
        function edit_data($where){
            return $this->db->get_where('mata_pelajaran',$where);
    
        }
    
        function update_data($where,$data){
            $this->db->where($where);
            $this->db->update('mata_pelajaran',$data);
        }
    
        function hapus_data($where){
            $this->db->where($where);
            $this->db->delete('mata_pelajaran',$where);
        }

    }
    
?>