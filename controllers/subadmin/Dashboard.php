<?php 
	Class Dashboard extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$data = [
			 'title' => 'SITE Dashboard',
			 'content' => 'subadmin/dashboard',
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

	}
 ?>