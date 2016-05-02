<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_ptmyasmin');
		$this->load->library('form_validation');		
		$this->load->database();
	}
	public function addUser(){
		$this->load->view('/dashboard/user/add-user.php');
	}
	public function getUser(){
		$dataUser = $this->M_ptmyasmin->getUser();	
		print_r($dataUser);die();
		$this->load->view('/dashboard/user/add-user.php', $dataUser);
	}
	public function updateUser(){
		$this->load->view('/dashboard/user/add-user.php');
	}
	public function deleteUser(){
		$this->load->view('/dashboard/user/add-user.php');
	}
}
