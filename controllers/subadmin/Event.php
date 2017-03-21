<?php 
	Class Event extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Event_Model');

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

			$this->load->library('form_validation');
			$this->form_validation->set_rules('eventtitle', 'EventTitle', 'trim|required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('eventdesc', 'EventDesc', 'trim|required|min_length[5]|max_length[10]');
			$this->form_validation->set_rules('eventdate', 'EventDate', 'trim|required|min_length[5]|max_length[10]');
			$this->form_validation->set_rules('send', 'Send', 'trim|required');

			if($this->form_validation->run() == FALSE){
				$data = [
				 'title' => 'Create Event',
				 'content' => 'subadmin/create-event',
				 'class' => 'hold-transition skin-blue layout-top-nav',
				 'nav' => 'partials/_subnav',
				 'classFooter' => 'partials/clsfooter'
				];

				$this->load->view('layout/master_layout', $data);
			}
			else{

				$this->Event_Model->add_new_event();
				redirect('subadmin/Event', 'refresh');
			}
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