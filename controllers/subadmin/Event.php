<?php 
	Class Event extends CI_Controller{

		public function __construct(){

			parent::__construct();

		}

		public function index(){

			$data = [
			 'title' => 'SITE Event',
			 'content' => 'subadmin/event',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function create_event(){
			$data = [
			 'title' => 'Create Event',
			 'content' => 'subadmin/create-event',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function edit_event(){
			$data = [
			 'title' => 'Edit Event',
			 'content' => 'subadmin/edit-event',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

		public function search_event(){
			$data = [
			 'title' => 'Searching Event...',
			 'content' => 'subadmin/search-event',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_subnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
		}

	}
 ?>