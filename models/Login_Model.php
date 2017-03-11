<?php

 class Login_Model extends CI_Model{
	
	public function __construct(){

		parent::__construct();
	}
 
	public function add_new_user()
	{
		
		$data = array(
			'adminfname' => $this->input->post('adminfname'),
			'adminlname'=> $this->input->post('adminlname'),
			'username' => $this->input->post('username'),
			 'level' => '2',
			'gender'=> $this->input->post('gender'),
			'adminaddress' => $this->input->post('adminaddress'),
			'birthdate' => $this->input->post('birthdate'),
			'adminemail'=> $this->input->post('adminemail'),
			'password' => md5($this->input->post('password'))
		
		);
		
		$this->db->insert('tbladmin' , $data);
	}
	
		public function login_registered($username , $password)
	{
		$this->db->select('id , username , password');
		$this->db->from('tbladmin');		
		$this->db->where('username' , $username);
		$this->db->where('password' , md5($password));
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
		
	}
	 public function getuser($username, $password)  {
        $this->db->select('*');
        $this->db->from('tbladmin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
	
        $query = $this->db->get();
        return $query->num_rows();

    }
    
     public function getid($username, $password){
        $this->db->select('id');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tbladmin');
        $result =  $query->result_array();
        return $result;
    }
   public function getlevel($username, $password){
        $this->db->select('level');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tbladmin');
        $data = array_shift($query->result_array());
         if($data['level']==1){
            return 1;
        }else if($data['level']==2){
            return 2;
        }
      
    }
    
     public function getfirstname($username, $password){
        $this->db->select('adminfname');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tbladmin');
        $result =  $query->result_array();
        return $result;
    }

	
	
	public function view_users(){
		$query = $this->db->get('tbladmin');
		
		return $query->result_array();
	}
     
 }


    // Function To Fetch All Students Record
	public function show_students(){
		$query = $this->db->get('tbladmin');
		$query_result = $query->result();
		return $query_result;
	}

	  // Function To Fetch Selected Student Record
	public function show_student_id($data){
		$this->db->select('*');
		$this->db->from('tbladmin');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
}
	// Update Query For Selected Student
	public function update_student_id1($id,$data){
		$this->db->where('sid', $id);
		$this->db->update('tbladmin', $data);
} 
}
?>

