<?php 
	Class StudentBoard extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$data = [
				'title' => 'Student Board',
				'content' => 'student/home',
				'class' => 'hold-transition register-page'
			];

			$this->load->view('layout/login_layout', $data);
		}

		public function form_student(){

			$data = [
				'title' => 'Student Form',
				'content' => 'student/form-student',
				'class' => 'hold-transition register-page'
			];

			$this->load->view('layout/login_layout', $data);
		}

		public function search_student(){

			$data = [
				'title' => 'Student Form',
				'content' => 'student/search-student',
				'class' => 'hold-transition register-page'
			];

			$this->load->view('layout/login_layout', $data);
		}
	}
 ?>