<?php
    class Model_profil extends CI_Model{
        function tampil_data(){
            return $this->db->get('data_pengguna');
        }
    }
?>