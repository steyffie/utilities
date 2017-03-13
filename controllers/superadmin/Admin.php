<?php 
	
	Class Admin extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Login_Model');

		}

		public function index(){

			$data = [
			 'title' => 'SITE',
			 'content' => 'superadmin/admin',
			 'class' => 'hold-transition skin-blue layout-top-nav',
			 'nav' => 'partials/_supnav',
			 'classFooter' => 'partials/clsfooter'
			];

			$this->load->view('layout/master_layout', $data);
			$this->Login_Model->view_users();
			
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
			redirect('superadmin/Admin' , 'refresh');
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

		public function show_student_id() {
			$id = $this->uri->segment(3);
			$data['tbladmin'] = $this->Login_Model->show_students();
			$data['single_student'] = $this->Login_Model->show_student_id($id);
			$this->load->view('layout/master_layout', $data);
		}
		public function update_student_id1() {
			$id= $this->input->post('did');	

			$data = array(
			'adminfname' => $this->input->post('adminfname'),
			'adminlname' => $this->input->post('adminlname'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'adminemail' => $this->input->post('adminemail'),
			'gender' => $this->input->post('gender'),
			'adminaddress' => $this->input->post('adminaddress')
			);
			
			$this->Login_Model->update_student_id1($id,$data);
			$this->show_student_id();
		}
	}
 ?>