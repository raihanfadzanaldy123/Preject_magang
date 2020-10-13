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

    public function login_where($where)
    {
        $query = $this->db->get_where('login', $where);
        $ret = $query->row();
        return $ret->username;
    }
    
}


?>