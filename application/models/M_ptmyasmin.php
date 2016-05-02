<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_ptmyasmin extends CI_Model{

	public function _constructor() {
		parent::__construct();
	}

	public function getUser(){
		$this->db->select('*');
        // if($filter!=null){
        //     $this->db->where($filter);
        // }
        $this->db->from('user');
        return $this->db->get()->result();
	}

	public function getArticle(){

	}
	public function getVideo(){

	}
	public function getGallery(){

	}
	public function getProgram(){

	}
	public function getTestimoni(){

	}
	public function getMessage(){

	}
}