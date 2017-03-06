<?php 

	Class Logs extends CI_Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$data = [
			 'title' => 'SITE Logs',
			 'content' => 'superadmin/logs',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function admin_logs(){

			$data = [
			 'title' => 'Admin Logs',
			 'content' => 'superadmin/admin-logs',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function sms_logs(){

			$data = [
			 'title' => 'SMS Logs',
			 'content' => 'superadmin/sms-logs',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function event_logs(){

			$data = [
			 'title' => 'Event Logs',
			 'content' => 'superadmin/event-logs',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}
	}
 ?>