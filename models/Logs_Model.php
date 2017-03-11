<?php

	Class Logs_Model extends CI_Model{


		public function get_index(){
			
			$query = $this->db->get('logs');
			
			return->query->result();
		}
		
		public function get_admin_logs(){
			
			$this->db->select("no,username,loggedin,action,loggedout");
			$this->db->('adminlogs');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function get_admin_logs(){
			
			$query = $this->db->get('adminlogs');
			
			return->query->result();
		}
	}
?>


