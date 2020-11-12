<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
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
        $data['mapel'] = $this->Model_mapel->tampil_data()->result();
        $data['materi'] = $this->Model_materi->tampil_data();
        $this->load->view('templates/header-index');
        $this->load->view('templates/navbar-index');
        $this->load->view('edumark/pelajaran', $data);
        $this->load->view('templates/footer-index');
    }
    function tentang()
    {
        $this->load->view('templates/header-index');
        $this->load->view('templates/navbar-index');
        $this->load->view('edumark/tentang');
        $this->load->view('templates/footer-index');
    }
    function detail_materi($id)
    {
        $where = array('id' => $id);
        $data['materi'] = $this->Model_materi->show_data($where)->result();
        $data['latihan'] = $this->Model_latihan->show_data($id);
        $this->load->view('templates/header-index');
        $this->load->view('templates/navbar-index');
        $this->load->view('edumark/detail-materi', $data);
        $this->load->view('templates/footer-index');
    }
    function latihan($id_materi, $id_latihan)
    {
        $id_terakhir = $this->Model_latihan->latihan_terakhir($id_latihan, $id_materi);
        $id_t = $id_terakhir + 1;
        $pilihan = $this->input->post('pilihan');
        $jawaban = $this->input->post('jawaban');
        $id_l = $id_latihan - 1;
        if ($pilihan == $jawaban) {
            if ($pilihan != NULL) {
                $array = array(
                    'id_pengguna' => $_SESSION['id_pengguna'],
                    'id_latihan' => $id_l,
                    'pilihan' => $pilihan,
                );
                $this->Model_latihan->jawaban($array);
                if ($id_latihan == $id_t) {
                    $array = array(
                        'user_id' => $_SESSION['id_pengguna'],
                        'materi_id' => $id_materi,
                        'status' => 1,
                    );
                    $this->Model_latihan->status($array);
                    redirect(base_url('Home'));
                }
            }
            $data['latihan'] = $this->Model_latihan->latihan($id_latihan, $id_materi);
            base_url('Home/latihan/' . $id_materi . '/' . $id_latihan);
        } else {
            $data['latihan'] = $this->Model_latihan->latihan($id_l, $id_materi);
            redirect(base_url('Home/latihan/' . $id_materi . '/' . $id_l), 'refresh');
        }
        $this->load->view('templates/header-index');
        $this->load->view('edumark/latihan', $data);
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
        $id_pengguna = $this->session->userdata("id_pengguna");
        $where = array('id' => $id_pengguna);
        $where1 = array('user_id' => $id_pengguna);
        if (isset($_SESSION['nama'])) {
            $data['pengguna'] = $this->Model_pengguna->ambil_data($where);
            $data['join'] = $this->Model_pengguna->join_data($where1);
            $data['total_materi'] = $this->Model_materi->total_materi();
            $this->load->view('templates/header-index');
            $this->load->view('templates/navbar-index');
            $this->load->view('edumark/profil', $data);
            $this->load->view('templates/footer-index');
        } else {
            redirect(base_url());
        }
    }

    function transaksi()
    {
        $this->load->view('templates/header-index');
        $this->load->view('templates/navbar-index');
        $this->load->view('edumark/transaksi');
        $this->load->view('templates/footer-index');
    }
    
}
