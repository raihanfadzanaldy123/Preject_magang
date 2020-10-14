<?php 

    class Login extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Model_login');
            $this->load->helper('url');
            
            
        }

        public function index()
        {
            $user = $this->session->userdata("nama");
            if (isset($_SESSION['nama']) && $user == "admin") {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-admin');
                $this->load->view('login/index');
                $this->load->view('templates/footer');
        }
            else if(isset($_SESSION['nama']))
            {
                
            }
        }

        public function login_action()
        {
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $where = array(
                'email' => $email,
                'password' => md5($pass)
                );
            $cek = $this->Model_login->login($where)->num_rows();
            $name = $this->Model_login->login_where($where);
            if($cek > 0){
    
                $data_session = array(
                    'nama' => $name,
                    'email' => $email,
                    'status' => "login"
                    );
    
                $this->session->set_userdata($data_session);
                
                $user = $this->session->userdata("nama");
                if (isset($_SESSION['nama']) && $user == "admin") {
                    redirect(base_url('Admin'));
                }
                else {
                    redirect(base_url());
                }
                
    
            }else{
                echo '<script>alert("Salah Password Atau Username");</script>';
            }
        }

        // function register()
        // {
        //     $this->load->view('templates/header');
        //     $this->load->view('login/register');
        //     $this->load->view('templates/footer');
        // }

        function register_action()
        {
            $user = $this->input->post('user');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');

            $nama = $this->input->post('nama');
            $hp = $this->input->post('hp');

            $data = array(
                    'username' => $user,
                    'email' => $email,
                    'password' => md5($pass)
                    );
            $this->Model_login->register($data);
            $id = $this->db->insert_id();

            
            $data1 = array(
                'id_login' => $id,
                'nama' => $nama,
                'email' => $email,
                'hp' => $hp
                );

            
            $this->Model_pengguna->simpan_data($data1);
            redirect(base_url());
        }

        function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }

        public function guru()
        {
            redirect(base_url('Guru'));
        }
    }
    

?>