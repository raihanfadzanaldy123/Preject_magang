<?php

class Admin extends CI_Controller
{
    function index()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/data');
            $this->load->view('templates/footer');
        }
        function pelajaran()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/pelajaran');
            $this->load->view('templates/footer');
        }
        function tentang()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');          
            $this->load->view('admin/tentang');
            $this->load->view('templates/footer');
        }
        function kontak()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');       
            $this->load->view('admin/kontak');
            $this->load->view('templates/footer');
        }
}


?>