<?php
class Auth extends CI_Model {

	private $tableName;
	private $secret; 
	
    function __construct(){
        parent::__construct();
        $this->tableName = 'users';
    }
	
	function setSession($data){
		
		//$this->session->set_userdata('uid', $data['id']);
		$this->session->set_userdata('e', $data['email_id']);
		
	}

	function getRandomString($length = 5) {
    	$characters = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
	    $string = '';

    	for ($i = 0; $i < $length; $i++) {
        	$string .= $characters[mt_rand(0, strlen($characters) - 1)];
    	}

    	return $string;
	}
	
	function authenticate($email,$password){



		$sql = "select * from ".$this->tableName." where ";
		$sql .= " email_id = '".$email."' and password='".md5($password)."'";
		
		
		$query = $this->db->query($sql);

		$data = array();
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
			$this->setSession($data);



			$newdata = array(
                   'email_id'  => $email,
                   'logged_in' => TRUE
               );

$this->session->set_userdata($newdata);


			return TRUE;




		}

		return FALSE;

	}

	
	function alreadyexists($email){



		$sql = "select * from ".$this->tableName." where ";
		$sql .= " email_id = '".$email."'";
		
		
		$query = $this->db->query($sql);

		$data = array();
		if ($query->num_rows() > 0) {
			
			return TRUE;
		}

		return FALSE;

	}



function add($r_email_id,$r_password){
      	$data['email_id'] = $r_email_id;
        $data['password'] = md5($r_password);
   
  
  		try{
  			$this->db->insert($this->tableName,$data);
      $this->setSession($data);
    
          		return 1;
  		} catch(Exception $e){
  			log_message('error', 'register::add'.$e->getMessage());
  			return 0;
  		}
    }





	function canWeSendForgotPasswordMail(){
		$sql = "select * from users where email_id = '".$this->input->post('e')."'";
		$query = $this->db->query($sql);
	
		$data = array();
		if ($query->num_rows() > 0) {
			return TRUE;
		}
		return FALSE;
	}
}
?>