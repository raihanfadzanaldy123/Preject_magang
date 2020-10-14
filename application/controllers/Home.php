<?php

    class Home extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            // $this->load->model('Model_siswa');
            $this->load->helper('url');

        }

        function index()
        {
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');
            $this->load->view('edumark/index');
            $this->load->view('templates/footer-index');
        }
        function pelajaran()
        {
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');
            $this->load->view('edumark/pelajaran');
            $this->load->view('templates/footer-index');
        }
        function tentang()
        {
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');          
            $this->load->view('edumark/tentang');
            $this->load->view('templates/footer-index');
        }
        function kontak()
        {
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');       
            $this->load->view('edumark/kontak');
            $this->load->view('templates/footer-index');
        }
        function profil()
        {
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');       
            $this->load->view('edumark/profil');
            $this->load->view('templates/footer-index');
        }

        function tambah()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/guru/tambah');
            $this->load->view('templates/footer');
        }

    }


?>