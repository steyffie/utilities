<?php 
	
	Class Dashboard extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Login_Model');

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
			$this->load->library('form_validation');
			$this->form_validation->set_rules('adminfname','adminFname','trim|required');
			$this->form_validation->set_rules('adminlname','adminLname','trim|required');
			$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[10]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[15]');
			$this->form_validation->set_rules('birthdate','Birthdate','trim|required|min_length[8]|max_length[10]');
	    $this->form_validation->set_rules('adminemail','adminemail','trim|required');
	    $this->form_validation->set_rules('gender','gender','trim|required');
	    $this->form_validation->set_rules('adminaddress','Adminaddress','trim|required|min_length[8]|max_length[100]');
			if($this->form_validation->run() == FALSE)
			{
				$data = [
				 'title' => 'Create Admin',
				 'content' => 'superadmin/create-admin',
				 'class' => 'hold-transition skin-blue layout-top-nav',
				 'nav' => 'partials/_supnav',
				 'classFooter' => 'partials/clsfooter'
				];

				$this->load->view('layout/master_layout', $data);
			}
		else
		{
			$this->Login_Model->add_new_user();
			redirect('superadmin/Dashboard' , 'refresh');
		}
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