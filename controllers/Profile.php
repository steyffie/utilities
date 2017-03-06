<?php 

	Class Profile extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function subProfile(){

			$data = [
			 'title' => 'Update Profile',
			 'content' => 'profile',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function supProfile(){

			$data = [
			 'title' => 'Update Profile',
			 'content' => 'profile',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}
	}
 ?>