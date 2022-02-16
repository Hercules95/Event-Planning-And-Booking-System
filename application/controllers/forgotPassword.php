<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class forgotPassword extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('createevents');
	}
	 public function index()
	 {
		$this->load->view('backend/forgotpassword');
	 }
	 public function ResetPassword()
	 {
	 	$email = $_POST['email'];
	 	$data = $this->createevents->ForgotPassword($email);
	 	if ($data) {
	 		$this->createevents->sendpassword($data);
	 	} else {
	 		echo "<script>alert(' $email not found, please enter correct email id')</script>";
	 		// redirect(base_url() . 'index.php/forgotPassword', 'refresh');
	 	}
	 }
	 // public function sendLink()
	 // {
	 // // 		$to_email = "nomanhussain45@gmail.com";
		// // $subject = "Simple Email Test via PHP";
		// // $body = "Hi, This is test email send by PHP Script";
		// // $headers = "From: sender email";

		// // if (mail($to_email, $subject, $body, $headers)) {
		// //     echo "Email successfully sent to $to_email...";
		// // } else {
		// //     echo "Email sending failed...";
		// // }
		//  $config = Array(
		// 	'protocol' => 'SMTP',
		// 	'smtp_host' => 'ssl://smtp.gmail.com',
		// 	'smtp_port' => 465,
		// 	'smtp_user' => 'youremailadress.com', 
  //           'smtp_pass' => 'yourpassword',//my valid email password
  //           'mailtype' => 'html',
  //           'charset' => 'iso-8859-1',
  //           'wordwrap' => TRUE,
  //           'smtp_crypto' => 'ssl'
  //       );
		// $this->load->library('email', $config);
		// $this->email->set_newline("\r\n");  
		// $this->email->from('Editing Proficient'); 
		// $this->email->to('nomanhussain45@gmail.com');
		// $this->email->subject('User Details | Editing Proficient');
		// $this->email->message('User Name:');

		// if($this->email->send())
		// { 
		// 	echo "sent";
		// }
		// else
		// {
		// 	echo $this->email->print_debugger();
		// }
	 // }
}

