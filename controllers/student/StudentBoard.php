<?php 
	Class StudentBoard extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->model('Student_Model');	

		}

		public function student_form()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('studid','StudID','trim|required|min_length[6]|max_length[11]');
			$this->form_validation->set_rules('studfname','StudFname','trim|required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('studlname','StudLname','trim|required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('year','Year','trim|required|min_length[1]|max_length[8]');
			$this->form_validation->set_rules('section','Section','trim|required|min_length[2]|max_length[4]');
		    $this->form_validation->set_rules('gender','Gender','trim|required');
		    $this->form_validation->set_rules('birthdate','birthDate','trim|required|min_length[5]|max_length[10]');
		    $this->form_validation->set_rules('studaddress', 'StudAddress', 'trim|required|min_length[5]|max_length[50]');
		    $this->form_validation->set_rules('studemail', 'StudEmail', 'trim|required|min_length[5]|max_length[20]');
		    $this->form_validation->set_rules('studcontactno', 'StudContactNo', 'trim|required|min_length[5]|max_length[20]');
		    $this->form_validation->set_rules('personfname','PersonFname','trim|required|min_length[2]|max_length[20]');
		    $this->form_validation->set_rules('personlname','PersonLname','trim|required|min_length[2]|max_length[20]');
		    $this->form_validation->set_rules('studrelation','StudRelation','trim|required|min_length[2]|max_length[20]');
		    $this->form_validation->set_rules('personaddress', 'PersonAddress', 'trim|required|min_length[5]|max_length[50]');
		    $this->form_validation->set_rules('personcontactno', 'PersonContactNo', 'trim|required|min_length[5]|max_length[20]');
		    $this->form_validation->set_rules('studstatus','StudStatus','trim|required');

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