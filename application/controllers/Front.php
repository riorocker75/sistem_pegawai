<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function cache(){
		$nama="umam";
		$this->m_dah->simpan_cache($nama);
	}

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('url');
		$this->load->helper('dah_helper');
		$this->load->library(array('session','form_validation','cart'));	
		$this->load->model('m_dah');
	
	}	

	public function index(){
		$this->load->database();			
		
		$this->load->view('front/v_header');
		$this->load->view('front/v_index');
		$this->load->view('front/v_footer');
	}

	

    
}