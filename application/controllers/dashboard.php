<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata("logged_in") == True)
		{
			$this->load->model('createevents');
		}
		else
		{
			redirect('login','refresh');
		}
	}
	public function index()
	{ 
		$data=$this->createevents->totalUsers();
		$events=$this->createevents->totalevents();
		$ongoingevents=$this->createevents->ongoingevents();
		$userId = $this->session->userdata('name')[0]->id;
		$notify['list'] = $this->createevents->getNotify($userId);
		$notify['userNotification'] = $this->createevents->getNotifyUser($userId);
		$notify['adminMsg'] = $this->createevents->getNotifyAdmin();
		$notify['countMsg'] = $this->createevents->getNotifyAdminCount();
		$notify['userMsgs'] = $this->createevents->getNotifyUserCount($userId);
		$notify['countEvent'] = $this->createevents->countUserBookedEvents($userId);
		// print_r($notify);
		$this->session->set_userdata($notify);
		$this->load->view('backend/dashboard',['users' => $data,'events'=>$events,'ongoingevents'=>$ongoingevents]);
	}
	public function test()
	{
		print_r($this->session->all_userdata());
	}
	public function profile()
	{
		$this->load->view('backend/profile');
	}
	public function updatepassword()
	{
		$id = $_POST['id'];
		$password = md5($_POST['password']);
		$arrayName = array ('firstname' => $_POST['firstname'],'lastname'=>$_POST['lastname'],'email'=>$_POST['email'],'password'=>$password);
		$this->db->where('id',$id);
		$this->db->update('users',$arrayName);
		$this->session->set_flashdata('success', 'Event Has Been Added');
    	redirect('dashboard/profile');
	}
}
