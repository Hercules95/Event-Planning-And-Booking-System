<?php
class Registration_model extends CI_Model{
	public function add_user()
	{
		$password = md5($_POST['password']);
		$add = array('firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'email' => $_POST['email'], 'password' => $password);
		return $this->db->insert('users',$add);
	}
	public function mail_exists($user)
	{
		$this->db->select('*');
	    $this->db->where('email',$user);
	    $query = $this->db->get('users');
	    if($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
}