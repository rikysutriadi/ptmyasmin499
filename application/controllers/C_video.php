<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_video extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_ptmyasmin');
		$this->load->library('form_validation');		
		$this->load->database();
	}
	public function addVideo(){
		$this->load->view('/dashboard/user/add-user.php');
	}
	public function getVideo(){
		$dataUser = $this->M_ptmyasmin->getUser();
		print_r($getUser);die();
		$this->load->view('/dashboard/user/add-user.php', $dataUser);
	}
	public function updateVideo(){
		$this->load->view('/dashboard/user/add-user.php');
	}
	public function deleteVideo(){
		$this->load->view('/dashboard/user/add-user.php');
	}
}
