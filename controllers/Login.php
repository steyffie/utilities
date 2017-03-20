<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_Model');
	}
	
	public function index()
	{
		$session = $this->session->userdata('isLogin');
		if($session == False){
			redirect('login/login_form');
		}
		else{
			$username = $this->session->userdata('username');
			$data['level'] = $this->session->userdata('level');
			  if($data['level']== "2"){

			  	$data = [
	 				'title' => 'SITE',
		 			'content' => 'subadmin/student',
		 			'class' => 'hold-transition skin-blue layout-top-nav',
		 			'nav' => 'partials/_subnav',
		 			'classFooter' => 'partials/clsfooter'
				];

				$this->load->view('layout/master_layout', $data);

			}
			else if ($data['level']== "1"){

				$data = [
			 		'title' => 'SITE',
			 		'content' => 'superadmin/admin',
			 		'class' => 'hold-transition skin-blue layout-top-nav',
			 		'nav' => 'partials/_supnav',
			 		'classFooter' => 'partials/clsfooter'
				];

				$this->load->view('layout/master_layout', $data);
			
			}
			else{

				$data = [
			 		'title' => 'SITE',
			 		'content' => 'superadmin/admin',
			 		'class' => 'hold-transition skin-blue layout-top-nav',
			 		'nav' => 'partials/_supnav',
			 		'classFooter' => 'partials/clsfooter'
				];

				$this->load->view('layout/master_layout', $data);
			}
          
		}
	}

	public function login_form()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username' , 'Username' , 'required|trim|xss_clean');
		$this->form_validation->set_rules('password' , 'Password' , 'required|md5|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$data = [
						'title' => 'Login',
						'content' => 'login',
						'class' => 'hold-transition register-page',
						];

					$this->load->view('layout/login_layout', $data);
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$id = $this->Login_Model->getid($username, $password);
			$level = $this->Login_Model->getlevel($username, $password);
			$firstname = $this->Login_Model->getfirstname($username, $password);
			$util = $this->Login_Model->getuser($username, $password );
			if($util == 1){	
				$this->session->set_userdata('isLogin',TRUE);
				$this->session->set_userdata('username', $username);
				  $this->session->set_userdata('level',$level);
				$this->session->set_userdata('id', $id[0]['id']);
				$this->session->set_userdata('adminfname', $firstname);
				
				redirect('Login');
				
			}else{
			redirect('login/error');
			}
		}
	}
	
	 function error(){
        
        $data = [
						'title' => 'Login',
						'content' => 'login_error',
						'class' => 'hold-transition register-page',
						];

						$this->load->view('layout/login_layout', $data);
    }
	public function logout() {
        $this->session->sess_destroy();
        redirect('');
    }
	
	}

