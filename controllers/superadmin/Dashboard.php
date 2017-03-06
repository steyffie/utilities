<?php 
	
	Class Dashboard extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$data = [
			 'title' => 'SITE Dashboard',
			 'content' => 'superadmin/dashboard',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function create_admin(){

			$data = [
			 'title' => 'Create Admin',
			 'content' => 'superadmin/create-admin',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function search_admin(){

			$data = [
			 'title' => 'Searching Admin...',
			 'content' => 'superadmin/search-admin',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}
	}
 ?>