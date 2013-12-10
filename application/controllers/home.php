<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->_flushOutputArray();
		
		$this->load->model('phone','ph');
						
			}
	
	function _flushOutputArray(){
		$this->outputData = array();
	}
	
	
	public function index(){
	
			
	
		$this->outputData['phone'] = $this->ph->getAll();
					
		$this->load->view('view_home',$this->outputData);
	}



	public function view($userid){
	
	
	
		$this->outputData['user'] = $this->ph->view($userid);
					
		$this->load->view('view_detail',$this->outputData);
	}

	public function add($userid){
	
		
	
		 $this->ph->add($userid);
	$this->outputData['phone'] = $this->ph->getAll();
					
		$this->load->view('view_home',$this->outputData);
	}

	public function delete($userid){
	
		
		 $this->ph->delete($userid);
	
		$this->outputData['phone'] = $this->ph->getAll();
					
		$this->load->view('view_home',$this->outputData);
	}




	public function search($keyword = NULL){
	
		//$this->output->enable_profiler(TRUE);
	
		$this->outputData['phone'] = $this->ph->getSearchResults($keyword);
					
		$this->load->view('view_home',$this->outputData);
	}



public function csvexport(){
		//$this->output->enable_profiler(TRUE);

		$this->load->dbutil();
			
		$query = $this->ph->csvquery();
		
		$csvcontent = $this->dbutil->csv_from_result($query,",");

       $date = date('U');
      $filename = date('Y-m-d-Gis', $date); 
     $filename="Phone_keep_Contacts.csv";

      force_download($filename, $csvcontent); 

  

    $this->outputData['phone'] = $this->ph->getAll();
					
	$this->load->view('view_home',$this->outputData);

	}

}