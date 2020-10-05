<?php

    class Mahasiswa extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('Model_guru');
            $this->load->helper('url');

        }

        function index()
        {
            $data['tampil'] = $this->Model_guru->tampil()->result();
            $this->load->view('templates/header');
            $this->load->view('admin/guru/index', $data);
            $this->load->view('templates/footer');
        }

        function create()
        {
            $this->load->view('templates/header');
            $this->load->view('create');
            $this->load->view('templates/footer');
        }

        function create_action()
        {
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jurusan = $this->input->post('jurusan');

            $data = array(
                    'nama' => $nama,
                    'nim' => $nim,
                    'tgl_lahir' => $tgl_lahir,
                    'jurusan' => $jurusan
                    );
            
            $this->Model_mahasiswa->buat($data);
            redirect('mahasiswa');
        }

        function show($id)
        {
            $id1 = intval($id);
            $where = array('id' => $id1);
            $data['lihat'] = $this->Model_mahasiswa->lihat_data($where)->result();
            $this->load->view('templates/header');
            $this->load->view('view',$data);
            $this->load->view('templates/footer');

        }

        function update($id)
        {
            $id1 = intval($id);
            $where = array('id' => $id1);
            $data['edit'] = $this->Model_mahasiswa->edit_cari($where)->result();
            $this->load->view('templates/header');
            $this->load->view('update',$data);
            $this->load->view('templates/footer');

        }
        
        function update_action($id)
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jurusan = $this->input->post('jurusan');
            
            $where = array('id' => $id);

            $data = array(
                'nama' => $nama,
                'nim' => $nim,
                'tgl_lahir' => $tgl_lahir,
                'jurusan' => $jurusan
                );

            $this->Model_mahasiswa->edit_data($where,$data);

            redirect('mahasiswa');

        }

        public function delete($id)
        {
            $where = array('id'=>$id);
            $this->Model_mahasiswa->hapus($where);
            redirect('mahasiswa');
        }
        
    }


?>