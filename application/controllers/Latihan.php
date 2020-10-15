<?php

    class Latihan extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('Model_materi');
            $this->load->model('Model_latihan');
            $this->load->helper('url');
            

        }

        function index()
        {
            $user = $this->session->userdata("nama");
            if (isset($_SESSION['nama']) && $user == "admin") {
                $data['latihan'] = $this->Model_latihan->tampil_data();
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('admin/latihan/index', $data);
                $this->load->view('templates/footer');   
            }
            else {
                    redirect(base_url());
                }
            
        }

        function tambah()
        {
            $id_materi = $this->input->post('id_materi');
            $jumlah = $this->input->post('jumlah');
            $data['jumlah'] = $jumlah;
            $data['id_materi'] = $id_materi;
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/latihan/tambah',$data);
            $this->load->view('templates/footer');
        }

        function tambah_aksi()
        {
            $materi = $this->input->post('materi');
            $latihan= $this->input->post('latihan');
            $deskripsi= $this->input->post('deskripsi');

            $data = array(
                'id_materi' => $materi,
                'nama_latihan' => $latihan,
                'deskripsi' => $deskripsi
            );

                $this->Model_latihan->simpan_data($data);
                $this->session->set_flashdata('pesan','Ditambahkan');
                redirect(base_url('latihan'));
    
        }

        function show($id)
        {
            $where = array('id' =>$id);
            $data['latihan'] = $this->Model_latihan->show_data($where)->result();
            $data['materi'] = $this->Model_materi->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/latihan/show',$data);
            $this->load->view('templates/footer');

        }

        function edit($id)
        {
            $where = array('id' =>$id);
            $data['latihan'] = $this->Model_latihan->show_data($where)->result();
            $data['materi'] = $this->Model_materi->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admin');
            $this->load->view('admin/latihan/edit',$data);
            $this->load->view('templates/footer');

        }
        
        function edit_aksi()
        {
            $id = $this->input->post('id');
            $materi = $this->input->post('materi');
            $latihan = $this->input->post('latihan');
            $deskripsi = $this->input->post('deskripsi');

            $data = array(
                'id_materi' => $materi,
                'nama_latihan' => $latihan,
                'deskripsi' => $deskripsi
            );
            $where = array(
                'id' => $id
            );
    
                $this->Model_latihan->update_data($where, $data);
                $this->session->set_flashdata('pesan','Diubah');

    
                redirect('latihan');

        }

        public function delete($id)
        {
            $where = array('id' =>$id);
            $this->Model_latihan->hapus_data($where);
            $this->session->set_flashdata('pesan','Dihapus');
            redirect('latihan');
        }
        
    }


?>