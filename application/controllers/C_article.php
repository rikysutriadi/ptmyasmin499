<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_ptmyasmin');
		$this->load->library('form_validation');		
		$this->load->database();
	}
	public function addArticle(){
		$this->load->view('/dashboard/article/add-article.php');
	}
	public function getArticle(){
		$dataUser = $this->M_ptmyasmin->getUser();
		$this->load->view('/dashboard/article/add-article.php',$dataUser);
	}
	public function updateArticle(){
		$this->load->view('/dashboard/article/add-article.php',$dataUser);
	}
	public function deleteArticle(){
		$this->load->view('/dashboard/article/add-article.php',$dataUser);
	}
