<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->_flushOutputArray();
	}
	
	function _flushOutputArray(){
		$this->outputData = array();
	}
	
	public function index(){
		$this->load->view('view_home');
	}
}