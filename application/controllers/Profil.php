<?php
    class Profil extends CI_Controller{

    //     function edit_profil()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/navbar-admin');
    //     $this->load->view('admin/profil/edit-profil');
    //     $this->load->view('templates/footer');
    // }

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    function tampil_profil()
    {
        $id_pengguna = $this->session->userdata("id_pengguna");
        $where = array('id' => $id_pengguna);
        $where1 = array('user_id' => $id_pengguna);
        if (isset($_SESSION['nama'])) {
            $data['pengguna'] = $this->Model_pengguna->ambil_data($where);
            $data['join'] = $this->Model_pengguna->join_data($where1);
            $data['total_materi'] = $this->Model_materi->total_materi();
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');
            $this->load->view('admin/profil/edit-profil', $data);
            $this->load->view('templates/footer-index');
        } else {
            redirect(base_url());
        }
    }

    function edit_aksi()
    {
        $id     = $this->input->post('id');
        $nama   = $this->input->post('nama');
        $email  = $this->input->post('email');
        $hp     = $this->input->post('hp');
        
        $data = array(
            'nama'  => $nama,
            'email' => $email,
            'hp'    => $hp
        );

        $where = array (
            'id' => $id
        );

                $this->Model_pengguna->update_data($where, $data);
                $this->session->set_flashdata('pesan','Diubah');

                redirect( base_url('Home/profil/'.$_SESSION['id_pengguna']));
    }

    

    }
