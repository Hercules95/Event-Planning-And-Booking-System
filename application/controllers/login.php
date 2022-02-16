<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('backend/login');
	}
	public function signIn()
	{	
		$data = $this->login_model->logincondition();
		if($data->num_rows()>0)
		{
			$user = $data->result();
			$newdata = array('name' => $user,'logged_in' => TRUE,'count'=>$data);
			$this->session->set_userdata($newdata);
			 $id = $this->session->userdata('name')[0]->id;
			if($this->session->userdata('name')[0]->role == "user")
			{
				redirect('home','refresh');
			}
			else if($this->session->userdata('name')[0]->role == "admin")
			{
				redirect('home','refresh');
			}
		}
		else
		{
			$response = $this->session->set_flashdata('error', 'Invalid Username Or Password');
			redirect('login',$response);
		}
	}
	
}