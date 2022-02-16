<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('registration_model');
	}
	public function index()
	{
		$this->load->view('backend/registration');
	}
	public function add()
	{
		$user = $_POST['email'];
		$email = $this->registration_model->mail_exists($user);
		if($email == 0)
		{
			$response = $this->registration_model->add_user();
			if($response)
			{
				$this->session->set_flashdata('success', 'Event Has Been Added');
				//$this->session->set_flashdata();
				// $this->load->view('backend/');
	    		redirect('registration');
			}
			else
			{
				$response = $this->session->set_flashdata('error', 'Try Again!');
	    		redirect('registration');
			}
		}
		else
		{
			// $response = array('email', 'Email ALready Exist!');
			$this->session->set_flashdata('email','Email ALready Exist!');
	    	redirect('registration');
		}
	}

}