<?php

    class Pengguna extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('Model_pengguna');
            $this->load->helper('url');

        }

        

        function tambah_aksi()
        {
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jk = $this->input->post('jk');
            $pekerjaan= $this->input->post('pekerjaan');
            $lulusan= $this->input->post('lulusan');
            $bayaran= $this->input->post('bayaran');

            $user = $this->input->post('user');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            
            $data_login = array(
                'username' => $user,
                'email' => $email,
                'password' => md5($pass)
                );
            $this->Model_login->register($data_login);
            $last_id = $this->db->insert_id();

            $data = array(
                'id_login' => $last_id,
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'pekerjaan' => $pekerjaan,
                'lulusan' => $lulusan,
                'bayaran' => $bayaran,
            );

                $this->Model_guru->simpan_data($data);
                $this->session->set_flashdata('pesan','Ditambahkan');
                redirect('guru');
    
        }

        function show($id)
        {
            $where = array('id' =>$id);
            $data['guru'] = $this->Model_guru->show_data($where)->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/guru/show',$data);
            $this->load->view('templates/footer');

        }

        function show_aksi()
        {
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jk = $this->input->post('jk');
            $pekerjaan= $this->input->post('pekerjaan');
            $lulusan= $this->input->post('lulusan');
            $bayaran= $this->input->post('bayaran');

            $data = array(
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'pekerjaan' => $pekerjaan,
                'lulusan' => $lulusan,
                'bayaran' => $bayaran,
            );
    
                $this->Model_guru->simpan_data($data);

                redirect('guru');
        }

        function edit($id)
        {
            $where = array('id' =>$id);
            $data['guru'] = $this->Model_guru->edit_data($where)->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/guru/edit',$data);
            $this->load->view('templates/footer');

        }
        
        function edit_aksi()
        {
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jk = $this->input->post('jk');
            $pekerjaan= $this->input->post('pekerjaan');
            $lulusan= $this->input->post('lulusan');
            $bayaran= $this->input->post('bayaran');

            $data = array(
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'pekerjaan' => $pekerjaan,
                'lulusan' => $lulusan,
                'bayaran' => $bayaran
            );
    
                $this->Model_guru->simpan_data($data);
                $this->session->set_flashdata('pesan','Diubah');

    
                redirect('guru');

        }

        public function delete($id)
        {
            $where = array('id' =>$id);
            $this->Model_guru->hapus_data($where);
            $this->session->set_flashdata('pesan','Dihapus');
            redirect('guru');
        }
        
    }


?>