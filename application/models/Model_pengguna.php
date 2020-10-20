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

        public function ambil_data($where)
        {
            $query = $this->db->get_where('data_pengguna', $where);
            $ret = $query->row();
            return $ret;
        }
        public function join_data($where1)
        {
            $select = array(
                'data_pengguna.*',
                'materi.id as id_materi',
                'tugas.id as id_tugas',
                'count(tugas.user_id) as Total'
            );
            $this->db->select($select);
            $this->db->from('tugas');
            $this->db->join('data_pengguna', 'tugas.user_id = data_pengguna.id ','left');
            $this->db->join('materi', 'tugas.materi_id = materi.id ');
            $this->db->where($where1);
            $this->db->where('tugas.status = 1');
            $query = $this->db->get();
            return $query->result_array();
        }

    }
    
?>