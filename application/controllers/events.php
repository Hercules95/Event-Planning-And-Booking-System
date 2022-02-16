<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {
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
	public function add()
	{
		$data['list'] = $this->createevents->category();
		$this->load->view('backend/Events/add',$data);
	}
	public function addevent()
	{   
	    $dataInfo = array();
	    $files = $_FILES;
	    $this->createevents->add();
	    $eventId = $this->db->insert_id();
	    foreach ($_FILES['userfile']['name'] as $name => $value) {
				        $file_name = explode(".",$_FILES['userfile']['name'][$name]);
				        $allowed_ext = array("jpg","jpeg","png");
				        if(in_array($file_name[1],$allowed_ext))
				        {
				        	$new_name = md5(rand()).'.'.$file_name[1];
				        	$sourcePath = $_FILES['userfile']['tmp_name'][$name];
				        	$targetPath = "./images/".$new_name;
				        	if(move_uploaded_file($sourcePath,$targetPath)){
				        		$data = array('images' => $new_name,'eventId'=>$eventId);
				        		$this->db->insert('event_images',$data);
				        }
				    }
				}
		$this->session->set_flashdata('success', 'Event Has Been Added');
    	redirect('events/add');
	}
	public function getEvents()
	{
		$data['details'] = $this->createevents->get();
		$this->load->view('backend/Events/view',$data);
	}
	public function deleteEvents($id)
	{
		$deleteEvents = $this->createevents->delete($id);
		$this->session->set_flashdata('delete', 'Event Has Been Deleted');
    	redirect('events/getEvents');
	}
	public function moreDetails($id)
	{
		$data['more'] = $this->createevents->moreDetails($id);
		$data['list'] = $this->createevents->moreEventDetails($id);
		$this->load->view('backend/Events/moredetails',$data);
	}
	public function eventStatus()
	{
		$data['status'] = $this->createevents->status();
		// print_r($data);
		$this->load->view('backend/Events/status',$data);
	}
	public function history()
	{
		$date = new DateTime("now");
 		$curr_date = $date->format('d/m/Y');

	    $data['history'] = $this->createevents->eventHistory($curr_date);
	   //print_r($data);
		$this->load->view('backend/Events/history',$data);
	}
	public function updateEvents($id)
	{	 
	   $dataInfo = array();
	   $files = $_FILES;
	   $this->createevents->updateEvent($id);
	   $Imageid = $_POST['Imageid'];
	   foreach ($_FILES['userfile']['name'] as $name => $value) {
				        $file_name = explode(".",$_FILES['userfile']['name'][$name]);
				        $allowed_ext = array("jpg","jpeg","png");
				        if(in_array($file_name[1],$allowed_ext))
				        {
				        	$new_name = md5(rand()).'.'.$file_name[1];
				        	$sourcePath = $_FILES['userfile']['tmp_name'][$name];
				        	$targetPath = "./images/".$new_name;
				        	if(move_uploaded_file($sourcePath,$targetPath)){
				        		$data = array('images' => $new_name);
				        		$this->db->where('id', $Imageid);
				        		$this->db->update('event_images',$data);
				        }
				    }
				}
		$this->session->set_flashdata('success', 'Details has been updated');
		redirect('events/getEvents');
	}
	public function updateDetails($id)
	{
		$data['more'] = $this->createevents->updateEventDetails($id);
		$data['list'] = $this->createevents->updateEventImagesDetails($id);
		$data['lists'] = $this->createevents->category();
		$this->load->view('backend/Events/update',$data);
	}
	public function BookedEvents()
	{
		if($this->session->userdata('name')[0]->role == "user")
		{
			$id=$this->session->userdata('name')[0]->id;
			$data['details'] = $this->createevents->getUserBookingDetails($id);
			$this->load->view('backend/Events/userbook',$data);
		}
		else if($this->session->userdata('name')[0]->role == "admin")
		{
			$data['details'] = $this->createevents->getBookingDetails();
			$this->load->view('backend/Events/book',$data);
		}
		
	}
}
