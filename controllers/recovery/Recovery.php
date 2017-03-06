<?php 

	Class Recovery extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$data = [
				'title' => 'Login',
				'content' => 'superadmin/recovery/pwd-recovery',
				'class' => 'hold-transition register-page',
			];

			$this->load->view('layout/login_layout', $data);
		}

		public function home(){

			$data = [
			 'title' => 'Password Recovery',
			 'content' => 'superadmin/recovery/home',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_pwdnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}
	}
 ?>