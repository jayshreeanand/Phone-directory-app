<?php
class Phone extends CI_Model {

	private $tableName;
	private $secret; 
	
    function __construct(){
        parent::__construct();
        $this->tableName = 'phone';
    }
	
	

	
	function authenticate($email,$password){



		$sql = "select * from ".$this->tableName." where ";
		$sql .= " email_id = '".$email."' and password='".md5($password)."'";
		
		
		$query = $this->db->query($sql);

		$data = array();
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
			$this->setSession($data);
			return TRUE;
		}

		return FALSE;

	}


	

    function getAll(){
        $data = array();
        $query = $this->db->get_where($this->tableName,array('user_email' => $this->session->userdata('email_id')));
        if ($query->num_rows() > 0){
            $data =  $query->result_array();
        } 
        return $data;
    }



    function view($userid){
        $data = array();
       $query = $this->db->get_where($this->tableName, array('id' => $userid));
        if ($query->num_rows() > 0){
            $data =  $query->result_array();
        }
        return $data;
    }



function addcontact($email_id,$first_name,$last_name,$phone_no){
      	$data['email_id'] = $email_id;
      	$data['first_name'] = $first_name;
      	$data['last_name'] = $last_name;
      	$data['phone_no'] = $phone_no;
        $data['user_email'] = $this->session->userdata('email_id');
   		$data['id'] = md5($phone_no);	
  
  		try{
  			$this->db->insert($this->tableName,$data);
     
    
          		return 1;
  		} catch(Exception $e){
  			log_message('error', 'register::add'.$e->getMessage());
  			return 0;
  		}
    }



    function delete($userid){
        $data = array();
       $query = $this->db->delete($this->tableName, array('id' => $userid));
       return TRUE;
    }




  function getSearchResults($keyword){
        $data = array();
        $keyword = trim(strtolower($keyword));
        $sql = "select * from phone where user_email="."'".$this->session->userdata('email_id')."'"." and (first_name like '%$keyword%' OR last_name like '%$keyword%' OR phone_no like '%$keyword%' OR email_id like '%$keyword%' OR location like '%$keyword%')";
        $this->db->order_by('created_on', 'DESC');
		$query = $this->db->query($sql); 
        if ($query->num_rows() > 0){
            $data =  $query->result_array();
        }
        return $data;
    }



    function csvquery(){
        $data = array();
        $query = $this->db->get_where($this->tableName,array());
        
        return $query;
    }

       function add($userid){
      
         $data = array();
    	$data['id'] = $userid;
	   	$data['created'] = date('Y-m-d H:i:s');
		$data['last_modified'] = date('Y-m-d H:i:s');
		$data['user_email'] = $this->session->userdata('email_id');
		
        try{
  			$this->db->insert($this->tableName,$data);
  			return $id;
  		} catch(Exception $e){
  			//log_message('error', 'Phone::add'.$e->getMessage());
  			return 0;
  		}


     
    }

}
?>
















