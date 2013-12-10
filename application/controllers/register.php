<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->_flushOutputArray();
		
		$this->load->model('auth','auth');
	}
	
	function _flushOutputArray(){
		$this->outputData = array();
	}
	
	private function _loginValidate(){
		
		$this->form_validation->set_rules('r_email_id', 'Email Id', 'trim|required|valid_email|callback_checkexists');
		$this->form_validation->set_rules('r_password', 'Password', 'trim|required');
		//$this->form_validation->set_rules('r_name', 'User Name', 'required');
		//$this->form_validation->set_rules('r_rp_password', 'Repeat Password', 'trim|callback_validrp');
	}
	

		

	function validrp($r_rp_password){
		$r_password = $this->input->post('r_password');
		if($r_password != $r_rp_password){
			$this->form_validation->set_message('validrp', 'Both the passwords do not match');
			return FALSE;
		}
		return TRUE;
		
	} 




	function checkexists($r_email_id){
		$r_email_id= $this->input->post('r_email_id');
		if($this->auth->alreadyexists($r_email_id )=== TRUE) {
			$this->form_validation->set_message('valid_email', 'E-Mail already registered');
			return FALSE;
		} 
		return TRUE;
		
	} 



	public function index(){
		$this->outputData['error'] ='';
				
		$this->_loginValidate();

		if($this->form_validation->run() === TRUE){
			if( $this->auth->add($this->input->post('r_email_id'), $this->input->post('r_password')) ){
				

				 $this->auth->authenticate($this->input->post('r_email_id'), $this->input->post('r_password')) ;
			
				redirect('home');
			} else {
				$this->outputData['error'] = 'Invalid Data';
			}
		} 

		$this->load->view('view_register',$this->outputData);
	}
}