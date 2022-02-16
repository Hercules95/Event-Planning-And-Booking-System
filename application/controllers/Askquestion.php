<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Askquestion extends CI_Controller {
	 public function index()
	 {
	 	if($this->session->userdata("logged_in") == True)
		{
			$this->load->view('frontend/home');
		}
		else
		{
			$response = $this->session->set_flashdata('Login',"You have to login first" );
			redirect('home',$response);
		}
		
	 }
	 public function email()
		{

	// 		$config = Array(
	// 		'protocol' => 'SMTP',
	// 		'smtp_host' => 'ssl://smtp.gmail.com',
	// 		'smtp_port' => 587,
	// 		'smtp_user' => 'nomanhussain45@gmail.com', 
 //            'smtp_pass' => 'silentwish.123',//my valid email password
 //            'mailtype' => 'html',
 //            'charset' => 'iso-8859-1',
 //            'wordwrap' => TRUE 
 //        );
	// 	$this->load->library('email', $config);
	// 	$this->email->set_newline("\r\n");  
	// 	$this->email->from('Editing Proficient'); 
	// 	$this->email->to('nomanhussain45@gmail.com');
	// 	$this->email->subject('Signup Details | Editing Proficient');
	// 	$this->email->message('User Name:');
	// 	if($this->email->send())
 //     {
 //      echo 'Email sent.';
 //     }
 //     else
 //    {
 //     show_error($this->email->print_debugger());
 //    }
			
	// }
					$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'nomanhussain45@gmail.com',
			'smtp_pass' => 'silentwish.123',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			// Set to, from, message, etc.
			    
			$result = $this->email->send();
		}

}

