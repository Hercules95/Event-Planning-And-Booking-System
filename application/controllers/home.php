<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('createevents');
		
	}
	 public function index()
	 {
	 	$date = new DateTime("now");
 		$curr_date = $date->format('d/m/Y');
	 	$history = $this->createevents->Historyforfront($curr_date);
	 	foreach ($history as $row)
		{
			$dat =$this->db->select('*')
			->from('event_images')
			->where('eventId',$row->eid)
			->get()
			->first_row();
			$row->submitted_by = $dat->images;
		}
	 	$data = $this->createevents->getEventDetails();
		foreach ($data as $row)
		{
			$dat =$this->db->select('*')
			->from('event_images')
			->where('eventId',$row->eid)
			->get()
			->first_row();
			$row->submitted_by = $dat->images;
		}
		$arrayName = array('list' => $data,'history' => $history);
		// print_r($arrayName);
		 $this->load->view('frontend/home',$arrayName);
	 }
	 public function eventDetails($id)
	 {
	 	$data['list'] = $this->createevents->frontendEventDetails($id);
	 	$data['lists'] = $this->createevents->frontendImages($id);
	 	$this->load->view('frontend/eventdetails',$data);
	 }
	 public function BookEvents()
	 {
	 	$this->load->view('payment');
	 }
	 public function Events()
	 {
	 		$config = array();
	 		$config["base_url"] = base_url() . "index.php/Home/Events";
	 		$config["total_rows"] = $this->createevents->get_count();
	 		$config["per_page"] = 4;
	 		$config["uri_segment"] = 3;
	 		$config['num_tag_open'] = '<li>';
	 		$config['num_tag_close'] = '</li>';
	 		$config['cur_tag_open'] = '<li><a href="#" class="active-page">';
	 		$config['cur_tag_close'] = '</a></li>';
	 		$config['prev_tag_open'] = '<li>';
	 		$config['prev_tag_close'] = '</li>';
	 		$config['first_tag_open'] = '<li>';
	 		$config['first_tag_close'] = '</li>';
	 		$config['last_tag_open'] = '<li>';
	 		$config['last_tag_close'] = '</li>';
	 		$config['next_link'] = '>';
	 		$config['next_tag_open'] = '<li>';
	 		$config['next_tag_close'] = '</li>';
	 		$config['prev_link'] = '<';
	 		$config['prev_tag_open'] = '<li>';
	 		$config['prev_tag_close'] = '</li>';
	 		$this->pagination->initialize($config);
	 		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
	 		$links = $this->pagination->create_links();

	 		$query = $this->input->post('search');
	 		if($this->input->post('search'))
	 		{
	 			$events = $this->createevents->fetch_data($query);
	 			$categories = $this->db->select('*')
	 			->from('event_category')
	 			->get()->result();
		 		foreach ($events as $row)
		 		{
		 			$dat =$this->db->select('*')
		 			->from('event_images')
		 			->where('eventId',$row->eid)
		 			->get()
		 			->first_row();
		 			$row->submitted_by = $dat->images;
		 		}
		 		$arrayName = array('categorylist'=>$categories,'events'=>$events);
	 			$this->load->view('frontend/events',$arrayName);
	 		}
	 		else
	 		{
	 			$events = $this->createevents->FrontgetEventDetails($config["per_page"], $page);
	 			$categories = $this->db->select('*')
	 			->from('event_category')
	 				->get()->result();
		 		foreach ($events as $row)
		 		{
		 			$dat =$this->db->select('*')
		 			->from('event_images')
		 			->where('eventId',$row->eid)
		 			->get()
		 			->first_row();
		 			$row->submitted_by = $dat->images;
		 		}
		 		$arrayName = array('categorylist'=>$categories,'links'=>$links,'events'=>$events);
	 			$this->load->view('frontend/events',$arrayName);
	 		}
	 		
	 	}
}

