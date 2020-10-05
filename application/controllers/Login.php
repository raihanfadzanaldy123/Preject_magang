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
            $this->load->view('templates/header');

            if (isset($_SESSION['nama']) && $user == "admin") {
                $this->load->view('admin/data');
            }
            else
            {
                $this->load->view('admin/index');
            }
            $this->load->view('templates/footer');
        }

        public function login_action()
        {
            $user = $this->input->post('user');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $where = array(
                'username' => $user,
                'email' => $email,
                'password' => md5($pass)
                );
            $cek = $this->Model_login->login($where)->num_rows();
            if($cek > 0){
    
                $data_session = array(
                    'nama' => $user,
                    'email' => $email,
                    'status' => "login"
                    );
    
                $this->session->set_userdata($data_session);
    
                redirect(base_url());
    
            }else{
                echo "Username atau password salah !";
            }
        }

        function register()
        {
            $this->load->view('templates/header');
            $this->load->view('admin/register.php');
            $this->load->view('templates/footer');
        }

        function register_action()
        {
            $user = $this->input->post('user');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');

            $data = array(
                    'username' => $user,
                    'email' => $email,
                    'password' => md5($pass)
                    );
            
            $this->Model_login->register($data);
            redirect(base_url());
        }

        function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }

    }
    

?>