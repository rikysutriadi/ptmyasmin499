<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');
	}
        
	public function login()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if($email == "riky" && $password == "riky@123"){
			redirect('dashboard');
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
