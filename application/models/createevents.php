<?php
class Createevents extends CI_Model{
	public function add()
	{
		$description = stripslashes($_POST['description']);
		$arrayName = array ('tittle' => $_POST['tittle'],'capacity'=>$_POST['capacity'],'address'=>$_POST['address'],'date'=>$_POST['date'],'time'=>$_POST['time'],'description'=>$description);
		$this->db->insert('event',$_POST);
	}
	public function get()
	{
		$this->db->select('*,event_category.name as cname,event.id as eid');
		$this->db->from('event');
		$this->db->join('event_category','event.categoryid=event_category.id');
		return $this->db->get()->result();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('event');
		$this->db->where('eventId',$id);
		$this->db->delete('event_images');
	}
	public function moreDetails($id)
	{
		$this->db->select('*');
		$this->db->from('event_images');
		$this->db->where('eventId',$id);
		return $this->db->get()->result();
	}
	public function moreEventDetails($id)
	{
		$this->db->select('*,event_category.name as cname,event.id as eid');
		$this->db->from('event');
		$this->db->join('event_category','event.categoryid=event_category.id');
		$this->db->where('event.id',$id);
		return $this->db->get()->result();
	}
	public function status()
	{
		$this->db->select('*');
		$this->db->from('event_booking');
		$this->db->join('event','event_booking.EventId=event.id','right');
		return $this->db->get()->result();
	}
	public function eventHistory($curr_date)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('date >',$curr_date);
		return $this->db->get()->result();
	}
	public function totalUsers()
	{
		$this->db->select('role');
		$this->db->from('users');
		$this->db->where("role",'user');
		return $this->db->count_all_results();
	}
	public function totalevents()
	{
		$this->db->select('*');
		$this->db->from('event');
		return $this->db->count_all_results();
	}
	public function ongoingevents()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('d/m/Y');
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('date',$curr_date);
		return $this->db->count_all_results();
	}
	public function message()
	{
		$this->db->select('*');
		$this->db->from('queries');
		return $this->db->get()->result();
	}
	public function getMessage($id)
	{
		$this->db->select('*');
		$this->db->from('queries');
		$this->db->where('userId',$id);
		return $this->db->get()->result();
	}
	public function getNotify($userId)
	{
		$this->db->select('*');
		$this->db->from('queries');
		$this->db->where('userId',$userId);
		$this->db->where('status',0);
		return $this->db->get()->result();
	}
	public function getNotifyUser($userId)
	{
		$this->db->select('*');
		$this->db->from('adminqueries');
		$this->db->where('userId',$userId);
		$this->db->where('status',0);
		return $this->db->get()->result();
	}
	public function getNotifyAdmin()
	{
		$this->db->select('*');
		$this->db->from('queries');
		$this->db->where('status','0');
		return $this->db->get()->result();
	}
	public function getNotifyAdminCount()
	{
		$this->db->select('*');
		$this->db->from('queries');
		$this->db->where('status','0');
		return $this->db->get()->num_rows();
	}
	public function getNotifyUserCount($id)
	{
		$this->db->select('*');
		$this->db->from('adminqueries');
		$this->db->where('userId',$id);
		$this->db->where('status',0);
		return $this->db->get()->num_rows();
	}
	public function readMails($id)
	{
		$this->db->where('id',$id);
		$this->db->set('status',1);
		$this->db->update('queries');
		$this->db->select('*,queries.id as qid');
		$this->db->from('queries');
		$this->db->where('userId',$id);
		return $this->db->get()->result();
	}
	public function replygetText($id)
	{
		$this->db->select('*');
		$this->db->from('adminqueries');
		$this->db->where('userId',$id);
		return $this->db->get()->result();
	}
	public function updateEvent($id)
	{
		$arrayName = array ('tittle' => $_POST['tittle'],'capacity'=>$_POST['capacity'],'address'=>$_POST['address'],'date'=>$_POST['date'],'time'=>$_POST['time'],'description'=>$_POST['description'],'categoryid'=>$_POST['categoryid'],'price'=>$_POST['price']);
		$this->db->where('id', $id);
		$this->db->update('event', $arrayName);
	}
	public function updateEventDetails($id)
	{
		$this->db->select('*,event_images.id as imId');
		$this->db->from('event_images');
		$this->db->where('eventId',$id);
		return $this->db->get()->result();
	}
	public function updateEventImagesDetails($id)
	{
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id',$id);
		return $this->db->get()->result();
	}
	public function category()
	{
		$this->db->select('*');
		$this->db->from('event_category');
		return $this->db->get()->result();
	}
	public function getEventDetails()
	{
		$this->db->select('*,event_category.name as cname,event.id as eid');
		$this->db->from('event');
		$this->db->join('event_category','event.categoryid=event_category.id');
		$this->db->limit(6);
		return $this->db->get()->result();
	}
	public function frontendEventDetails($id)
	{
		$this->db->select('*,event_category.name as cname,event.id as eid,event.tittle as ename');
		$this->db->from('event');
		$this->db->join('event_category','event.categoryid=event_category.id');
		$this->db->where('event.id',$id);
		return $this->db->get()->result();
	}
	public function frontendImages($id)
	{
		$this->db->select('*');
		$this->db->from('event_images');
		$this->db->where('eventId',$id);
		return $this->db->get()->result();
	}
	public function FrontgetEventDetails($limit, $start)
	{
		$this->db->select('*,event_category.name as cname,event.id as eid');
		$this->db->from('event');
		$this->db->join('event_category','event.categoryid=event_category.id');
		$this->db->limit($limit, $start);
		return $this->db->get()->result();
	}
	
	public function get_count() 
	{
		return $this->db->count_all("event");
	}
	public function ForgotPassword($email)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query=$this->db->get();
		return $query->row_array();
	}
	public function sendpassword($data)
	{
		$email = $data['email'];
		$query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
		$row=$query1->result_array();
		if ($query1->num_rows()>0)
		{
			$passwordplain = "";
			$passwordplain  = rand(999999999,9999999999);
			$newpass['password'] = md5($passwordplain);
			$this->db->where('email',$email);
			$this->db->update('users',$newpass);
			$config = Array(
				'protocol' => 'SMTP',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'youremailadress.com', 
				'smtp_pass' => 'yourpassword',//my valid email password
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE,
				'smtp_crypto' => 'ssl'
				);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");  
			$this->email->from('youremailadress.com'); 
			$this->email->to($email);
			$this->email->subject('Event Planning And Booking System | Reset Password');
			$this->email->message('Dear '.$row[0]['firstname'].', Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is '.$passwordplain.'</b><br> Please update your password<br><br><br> Thanks & Regards <br> Event Planning And Booking System.');
			if (!$this->email->send()) {
				echo "<script>alert('Failed to send password, please try again!')</script>";
			} else {
				echo "<script>alert('Password sent to your email!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Email not found try again!')</script>";
		}
	}
	function fetch_data($query)
	{
		$this->db->select('*,event.id as eid');
		$this->db->from('event');
		if($query != '')
		{
			$this->db->like('tittle',$query);
			$this->db->or_like('capacity',$query);
			$this->db->or_like('address',$query);
			$this->db->or_like('price',$query);
			$this->db->or_like('date',$query);
			$this->db->or_like('time',$query);
			$this->db->or_like('description',$query);
		}
		$this->db->order_by('id','DESC');
		return $this->db->get()->result();
	}
	public function Historyforfront($curr_date)
	{
		$this->db->select('*,event.id as eid');
		$this->db->from('event');
		$this->db->where('date >',$curr_date);
		$this->db->limit(3);
		$this->db->order_by('tittle','DESC');
		return $this->db->get()->result();
	}
	public function getBookingDetails()
	{
		$this->db->select('*');
		$this->db->from('event_booking');
		return $this->db->get()->result();
	}
	public function getUserBookingDetails($id)
	{
		$this->db->select('*');
		$this->db->from('event_booking');
		$this->db->where('userId',$id);
		return $this->db->get()->result();
	}
	public function countUserBookedEvents($id)
	{
		$this->db->select('*');
		$this->db->from('event_booking');
		$this->db->where('userId',$id);
		return $this->db->get()->num_rows();
	}
}