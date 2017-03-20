<?php 
	Class StudentBoard extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Student_Model');	

		}

		public function index()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('studid','Student ID','trim|required|exact_length[10]|numeric');
			$this->form_validation->set_rules('studfname','First Name','trim|required|alpha');
			$this->form_validation->set_rules('studlname','Last Name','trim|required|alpha');
			$this->form_validation->set_rules('year','Year','trim|required|exact_length[3]|alpha_numeric');
			$this->form_validation->set_rules('section','Section','trim|required|exact_length[2]|alpha_numeric');
		    $this->form_validation->set_rules('gender','Gender','trim|required');
		    $this->form_validation->set_rules('birthdate','birthDate','trim|required|exact_length[10]');
		    $this->form_validation->set_rules('studaddress', 'Address', 'trim|required|min_length[5]|max_length[50]|alpha_numeric');
		    $this->form_validation->set_rules('studemail', 'StudEmail', 'trim|required|min_length[5]|max_length[20]|valid_email');
		    $this->form_validation->set_rules('studcontactno', 'ContactNo', 'trim|required|min_length[5]|max_length[20]|numeric');
		    $this->form_validation->set_rules('personfname','Person First Name','trim|required|min_length[2]|max_length[20]|alpha');
		    $this->form_validation->set_rules('personlname','Person Last Name','trim|required|min_length[2]|max_length[20]|alpha');
		    $this->form_validation->set_rules('studrelation','StudRelation','trim|required|min_length[2]|max_length[20]|alpha');
		    $this->form_validation->set_rules('personaddress', 'PersonAddress', 'trim|required|min_length[5]|max_length[50]|alpha_numeric');
		    $this->form_validation->set_rules('personcontactno', 'PersonContactNo', 'trim|required|min_length[5]|max_length[20]|numeric');

			if($this->form_validation->run() == FALSE)
			{
					$data = [
					'title' => 'Student Form',
					'content' => 'student/student-form',
					'class' => 'hold-transition register-page'
				];

				$this->load->view('layout/login_layout', $data);
			}
		else
		{
			$this->Student_Model->add_new_user();
			redirect('student/StudentBoard/student_form' , 'refresh');
		}
		}

	}
 ?>