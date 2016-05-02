<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Ptmyasmin');
		$this->load->helper(array('form', 'url','download'));
		$this->load->library('form_validation');		
		$this->load->database();
        // $this->load->library("PHPExcel/PHPExcel");
	}
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function topNav(){
		$this->load->view('pages/layout/top-nav.html');
	}

	public function collapsedSidebar(){
		$this->load->view('pages/layout/collapsed-sidebar.html');
	}

	public function mail(){
		$this->load->view('/dashboard/mail/mailbox.php');
	}

	public function addUser(){
		$getUser = $this->M_Ptmyasmin->getUser();
		// print_r($getUser);die();
		$this->load->view('/dashboard/user/add-user.php');

	}
	public function addArticle(){
		$getArticle = $this->M_Ptmyasmin->getArticle();	
	    $this->load->view('/dashboard/article/add-article.php');
	}
	public function getArticle(){
		$getArticle = $this->M_Ptmyasmin->getArticle();	
	    $this->load->view('/dashboard/article/list-article.php');
	}

	public function addTestimoni(){
		$this->load->view('/dashboard/testimoni/add-testimoni.php');
	}

	public function addGallery(){
		$this->load->view('/dashboard/gallery/add-gallery.php');
	}
	
	public function addVideo(){
		$this->load->view('/dashboard/video/add-video.php');
	}

	public function addProgram(){
		$this->load->view('/dashboard/program/add-program.php');
	}
	function editor($path,$width) {
		//Loading Library For Ckeditor
		$this->load->library('ckeditor');
		$this->load->library('ckFinder');
		//configure base path of ckeditor folder 
		$this->ckeditor->basePath = base_url().'js/ckeditor/';
		$this->ckeditor-> config['toolbar'] = 'Full';
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor-> config['width'] = $width;
		//configure ckfinder with ckeditor config 
		$this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
	}
}
