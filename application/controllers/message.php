<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('createevents');
	}
	public function index()
	{
		$id=$this->session->userdata('name')[0]->id;
		$message['user'] = $this->createevents->getMessage($id);
		$message['message'] = $this->createevents->message();
		$this->load->view('backend/Query/questions',$message);
	}
	public function sent()
	{
		if($this->session->userdata("logged_in") == True)
		{
			$arrayName = array ('userId' => $_POST['userId'],'name'=>$_POST['name'],'email'=>$_POST['email'],'phone'=>$_POST['phone'],'message'=>$_POST['message']);
			$this->db->insert('queries',$_POST);
			$response = $this->session->set_flashdata('success',"Your Message Has Been Sent");
			redirect('home',$response);
		}
		else
		{
			$response = $this->session->set_flashdata('Login',"You have to login first" );
			redirect('home',$response);
		}
	}
	public function readMessages($id)
	{
		// $get = $this->db->where('id',$id)->set('status',1)->update('queries');
		$getMessages ['list'] = $this->createevents->readMails($id);
		$getMessages ['lists'] = $this->createevents->replygetText($id);
		// print_r($getMessages);
	    $this->load->view('backend/Query/read',$getMessages);
	}
	public function reply()
	{
		$arrayName = array ('userId' => $_POST['userId'],'reply'=>$_POST['reply'],'queriesId'=>$_POST['queriesId']);
		$this->db->insert('adminqueries',$_POST);
	}
	public function deletemessage($id)
	{
		$this->db->where('userId',$id);
		$this->db->delete('queries');

		$this->db->where('userId',$id);
		$this->db->delete('adminqueries');
		$this->session->set_flashdata('success', 'Message Deleted');
		redirect('message');
	}
	public function read($id)
	{
		$getMessages ['list'] = $this->createevents->readMails($id);
		$getMessages ['lists'] = $this->createevents->replygetText($id);
		$this->load->view('backend/Query/usermessages',$getMessages);
	}

}