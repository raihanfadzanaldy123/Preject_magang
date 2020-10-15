<?php 

    class Model_materi extends CI_Model
    {

        function tampil_data(){
            $this->db->select('*');
            $this->db->from('mata_pelajaran');
            $this->db->join('materi', 'mata_pelajaran.id = materi.id_mapel');
            $query = $this->db->get();
            return $query->result_array();
        }
    
        function simpan_data($data){
            $this->db->insert('materi',$data);
        }
    
        function show_data($where){
            return $this->db->get_where('materi',$where);
        }
    
        function update_data($where,$data){
            $this->db->where($where);
            $this->db->update('materi',$data);
        }
    
        function hapus_data($where){
            $this->db->where($where);
            $this->db->delete('materi',$where);
        }

    }
    
?>