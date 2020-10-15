<?php 

    class Model_latihan extends CI_Model
    {

        function tampil_data(){
            $select = array(
                'materi.nama_materi',
                'materi.id as id_materi',
                'lat_soal.id as id',
                'count(lat_soal.id) as Total'
            );
            $this->db->select($select);
            $this->db->from('materi');
            $this->db->join('lat_soal', 'materi.id = lat_soal.id_materi', 'left');
            $query = $this->db->get();
            return $query->result_array();
        }
    
        function simpan_data($data){
            $this->db->insert('lat_soal',$data);
        }
    
        function show_data($where){
            return $this->db->get_where('lat_soal',$where);
        }
    
        function update_data($where,$data){
            $this->db->where($where);
            $this->db->update('lat_soal',$data);
        }
    
        function hapus_data($where){
            $this->db->where($where);
            $this->db->delete('lat_soal',$where);
        }

    }
    
?>