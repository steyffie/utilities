<?php

	Class Student_Model extends CI_Model{

		public function __construct(){

			parent::__construct();

		}

		public function add_new_user()
		{

		$data = array(
			
			'studid'			=> $this->input->post('studid'),
			'studfname'			=> $this->input->post('studfname'),
			'studlname' 		=> $this->input->post('studlname'),
			'year' 				=> $this->input->post('year'),
			'section'			=> $this->input->post('section'),	
			'gender' 			=> $this->input->post('gender'),
			'birthdate' 		=> $this->input->post('birthdate'),
			'studaddress'		=> $this->input->post('studaddress'),
			'studemail'	 		=> $this->input->post('studemail'),
			'studcontactno'		=> $this->input->post('studcontactno'),
			'personfname'		=> $this->input->post(' personfname '),
			'personlname'		=> $this->input->post('personlname'),
			'studrelation'		=> $this->input->post('studrelation'),
			'personaddress'		=> $this->input->post('personaddress'),
			'personcontactno'	=> $this->input->post('personcontactno'),
			'studstatus'		=> $this->input->post('studstatus')
		
		);
		
		$this->db->insert('tblstudent' , $data);	

		}
	}
?>