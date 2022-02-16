<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_MODEL {

	public function logincondition()
	{
		$password = md5($_POST['password']);
		$where = array('email' => $_POST['email'],'password' => $password);
		$this->db->where($where);
		return $this->db->get('users');
	}
	
}
