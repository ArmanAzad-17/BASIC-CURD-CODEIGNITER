<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
                $this->load->view('include/header.php');
                $this->load->view('app-views/login_view.php');
                $this->load->view('include/footer.php');
                
        }

        public function signup(){
                $this->load->view('include/header.php');
                $this->load->view('app-views/register_view.php');
                $this->load->view('include/footer.php');
        }

        public function logout(){
                session_destory();
                redricet('/');
        }

}
