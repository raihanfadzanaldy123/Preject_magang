<?php 

class Model_login extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('login', $data);
    }

    public function login($where)
    {
        return $this->db->get_where('login', $where);
    }
}


?>