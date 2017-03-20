<?php 
	Class Student extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$data = [
			 'title' => 'SITE',
			 'content' => 'subadmin/student',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function search_student(){

			$data = [
			 'title' => 'Searching Student',
			 'content' => 'subadmin/search-student',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function edit_student(){

			$data = [
			 'title' => 'Update Student',
			 'content' => 'subadmin/update-student',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

	}
 ?>