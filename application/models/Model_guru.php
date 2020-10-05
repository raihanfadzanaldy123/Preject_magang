<?php 

    class Model_guru extends CI_Model
    {

        public function tampil()
        {
            $query = $this->db->get('guru');
            return $query;
        }

        public function buat($data)
        {
            $this->db->insert('mahasiswa', $data);
        }

        public function lihat_data($where)
        {
            return $this->db->get_where('mahasiswa',$where);
        }

        public function edit_cari($where)
        {
            return $this->db->get_where('mahasiswa',$where);
        }

        public function edit_data($where,$data)
        {
            $this->db->where($where);
            $this->db->update('mahasiswa',$data);
        }

        public function hapus($where)
        {
            $this->db->where($where);
            $this->db->delete('mahasiswa');
        }
    }
    
?>