<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addcontact extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->_flushOutputArray();
		$this->load->model('phone','phone');
		
	}
	
	function _flushOutputArray(){
		$this->outputData = array();
	}
	
	private function _loginValidate(){
		
		$this->form_validation->set_rules('phone_no', 'Email Id', 'required');
		$this->form_validation->set_rules('first_name', 'Name', 'required');
	
		//$this->form_validation->set_rules('r_name', 'User Name', 'required');
		//$this->form_validation->set_rules('r_rp_password', 'Repeat Password', 'trim|callback_validrp');
	}
	

		

	






	public function index(){
		$this->outputData['error'] ='';
				
		$this->_loginValidate();

		if($this->form_validation->run() === TRUE){
			if( $this->phone->addcontact($this->input->post('email_id'), $this->input->post('first_name') , $this->input->post('last_name') , $this->input->post('phone_no')) ){
				
				redirect('home');
			} else {
				$this->outputData['error'] = 'Invalid Data';
			}
		} 

		$this->load->view('view_addcontact',$this->outputData);
	}
}