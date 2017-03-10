<?php

	Class Event_Model extends CI_Model{

		public function __construct(){

			parent::__construct();
		}

		public function add_new_event()
		{
			
			$data = array(
					'eventtitle' => $this->input->post('eventtitle'),
					'eventdesc'=> $this->input->post('eventdesc'),
					'eventdate' => $this->input->post('eventdate'),
					'eventtime' => $this->input->post('eventtime'),
				);

				$this->db->insert('tblevent' , $data);
		}
	}
?>