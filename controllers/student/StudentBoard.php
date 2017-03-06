<?php 
	Class StudentBoard extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function student_form(){

			$data = [
				'title' => 'Student Form',
				'content' => 'student/student-form',
				'class' => 'hold-transition register-page'
			];

			$this->load->view('layout/login_layout', $data);
		}

	}
 ?>