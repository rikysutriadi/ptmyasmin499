<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
        
	public function login()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if($email == "riky" && $password == "riky@123"){
			redirect('dashboard1');
		}
		else {
			redirect('auth');
		}
	}
        
        public function logout()
	{
                redirect('auth');
	}
}
