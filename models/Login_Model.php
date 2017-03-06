<?php

 class Login_Model extends CI_Model{
		

 
	public function add_new_user()
	{
		
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'lastname'=> $this->input->post('lastname'),
			'username' => $this->input->post('username'),
			 'level' => '1',
			'gender'=> $this->input->post('gender'),
		
			'email'=> $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		
		);
		
		$this->db->insert('users' , $data);
	}
	/** End of Function add_new_user. */
	public function display(){
		$query = $this->db->get('users');
		
		return $query->result_array();
	}
	public function deletion($id)
	{
		$this->db->where('id' ,$id);
		return $this->db->delete('users');
	}
	public function select_up($id)
	{
		
		return $this->db->query("SELECT * from users where id = $id")->result();
		
	}
	public function update_user(){
		$this->db->query("UPDATE  users 
		SET firstname = '$_POST[firstname]' ,
		lastname = '$_POST[lastname]',
		username ='$_POST[username]' ,
		gender = '$_POST[gender]' ,
		user_bio = '$_POST[user_bio]',
		user_interest = '$_POST[user_interest]' ,
		user_job = '$_POST[user_job]' where id = $_POST[id] 
		");
	}
	/**
		Function Display_All_Member
		--------------------------------
		It will display all data that you want in a table.
	*/	
		public function login_registered($username , $password)
	{
		$this->db->select('id , username , password');
		$this->db->from('users');		
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
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
	
        $query = $this->db->get();
        return $query->num_rows();

    }
    
     public function getid($username, $password){
        $this->db->select('id');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        $result =  $query->result_array();
        return $result;
    }
   public function getlevel($username, $password){
        $this->db->select('level');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        $data = array_shift($query->result_array());
         if($data['level']==1){
            return 1;
        }else if($data['level']==2){
            return 2;
        }
      
    }
    
     public function getfirstname($username, $password){
        $this->db->select('firstname');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        $result =  $query->result_array();
        return $result;
    }
     
 }