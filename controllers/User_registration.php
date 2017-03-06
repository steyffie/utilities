<?php
	class User_registration extends CI_controller{
		
		public function __construct(){
		parent::__construct();
		$this->load->model('Login_Model');
	}
		
		
		public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','Firstname','trim|required');
		$this->form_validation->set_rules('lastname','Lastname','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]|max_length[15]|matches[passwordconf]');
		$this->form_validation->set_rules('passwordconf','Password Confirmation','trim|required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('email','email','trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('user_registration_view');
		}
		else
		{
			$this->Login_Model->add_new_user();
			redirect('Login' , 'refresh');
		}
	}	
	}
?>