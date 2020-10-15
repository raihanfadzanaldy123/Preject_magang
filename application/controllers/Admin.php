<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }

        function index()
        {
            $user = $this->session->userdata("nama");
            if (isset($_SESSION['nama']) && $user == "admin") {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('admin/data');
                $this->load->view('templates/footer');  
            }
            else {
                    redirect(base_url());
                }
        }
}


?>