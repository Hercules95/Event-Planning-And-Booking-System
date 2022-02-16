<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller {
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
    // parent::__construct();
    // $this->load->model('createevents');
  }
  public function index()
  {
    $data = array('EventId' => $_GET['EventId'],'EventName' => $_GET['EventName'],'Amount' =>$_GET['amount'],'Seats' => $_GET['totalseats']);
    $this->load->view('stripe',$data);
  }
  public function process() {
    try {
      if(!empty($_POST['stripeSource'])) {
        $date = new DateTime("now");
        $created = $date->format('d/m/Y');
        // $created = date("d F Y");
        $fullname = $_POST['firstname']." ".$_POST['lastname'];
        $file = 'count.txt';
        //get the number from the file
        $uniq = file_get_contents($file);
        //add +1
        $invoiceid = $uniq + 1 ;
        // add that new value to text file again for next use
        file_put_contents($file, $invoiceid);
        $userId=$this->session->userdata('name')[0]->id;
        $data = array('firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'email' => $_POST['email'],'phone' => $_POST['phone'],'address' => $_POST['address'],'city' => $_POST['city'],'EventId' => $_POST['EventId'],'EventName' => $_POST['EventName'],'itemname' => $_POST['itemname'],'itemprice' => $_POST['itemprice'],'invoice'=>$invoiceid,'created'=>$created,'userId'=>$userId);
        $this->db->insert('event_booking',$data);
        $amount = $_POST['itemprice']."00";
        $country_currency = $_POST['currency'];
        $source_id = $_POST['stripeSource'];
        $services = $_POST['itemname'];
        //Stripe Library
        require_once (APPPATH."third_party/stripe/init.php");
        //Stripe Keys SK
        \Stripe\Stripe::setApiKey("sk_test_51JSrexAP1nhjCw3E54Mb2OSMvXBCL9r8BW6ohH2gqyGfxjvNEqX7Wh9vCMR5ohPPAUNyWkadSbnkyEnoCgNpi7hV00ASQfjLw1");
        $customer = \Stripe\Customer::create([
          "email" => $data['email'],
          "source" => $source_id,
          "metadata" => $data,
        ]);
        $source = \Stripe\Source::create([
          "amount" => $amount,
          "currency" => $country_currency,
          "type" => "three_d_secure",
          "three_d_secure" => [
            "customer" => $customer->id,
            "card" => $source_id,
          ],
          "redirect" => [
            "return_url" => "http://localhost/eventplanning/index.php/checkout/charge?amount=".$data['itemprice']."&services=".$services."&currency=".$country_currency."&fullname=".$fullname."&email=".$data['email']."&phone=".$data['phone']."&address=".$data['address']."&customer=".$customer->id."&invoice=".$data['invoice']."&created=".$data['created']."&city=".$data['city']."&Eventid".$data['eventId']."&EventName".$data['eventName']
          ],
          "owner" => [
            "address" => [
              "city" => $data['city'],
              "line1" => $data['address'],
            ],
            "email" => $data['email'],
            "name" => $fullname,
            "phone" => $data['phone']
          ],
          "metadata" => $data,          
        ]);
        //Condtion Starts
        if($source->redirect->status === "pending")
        {
          redirect($source->redirect->url);
        }
        if($source->status === "chargeable")
        {         
          $charge = \Stripe\Charge::create([
            "amount" => $amount,
            "currency" => "AUD",
            "customer" => $customer->id,
            "source" => $source_id,
          ]);
          $config = Array(
                'protocol' => 'SMTP',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'youremailadress.com', 
                'smtp_pass' => 'yourpassword',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE,
                'smtp_crypto' => 'ssl'
                );
          $emails = array('youremailadress.com',$_POST['email']);
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");  
          $this->email->from('youremailadress.com'); 
          $this->email->to($emails);
          $this->email->subject('Payment Invoice Stripe | Event Planning And Booking System');
          $this->email->message($this->load->view('invoiceadmin',$data, TRUE));
          if($this->email->send())
          { 
            $this->load->view('transactionsuccess',$data);
          }
          else
          {
            $this->load->view('transactionunsuccess');
          }

        }
        if($source->status === "failed") {

          $this->load->view('transactionunsuccess');
        }
        //Condition Ends

      }
        // Use Stripe's library to make requests...
    } catch(\Stripe\Error\Card $e) {
        // Since it's a decline, \Stripe\Error\Card will be caught
      $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
      // echo json_encode($err);
       //print('Status is:' . $e->getHttpStatus() . "\n");
       //print('Type is:' . $err['type'] . "\n");
       //print('Code is:' . $err['code'] . "\n");
        // param is '' in this case
       //print('Param is:' . $err['param'] . "\n");
       //print('Message is:' . $err['message'] . "\n");
    } catch (\Stripe\Error\RateLimit $e) {
       $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
        // Too many requests made to the API too quickly
    } catch (\Stripe\Error\InvalidRequest $e) {
       $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
        // Invalid parameters were supplied to Stripe's API
    } catch (\Stripe\Error\Authentication $e) {
       $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
       // Authentication with Stripe's API failed
       // (maybe you changed API keys recently)
    } catch (\Stripe\Error\ApiConnection $e) {
       $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
      // Network communication with Stripe failed
    } catch (\Stripe\Error\Base $e) {
       $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
        // Display a very generic error to the user, and maybe send
       // yourself an email
    } catch (Exception $e) {
       $body = $e->getJsonBody();
      $err  = $body['error'];
      $this->load->view('invalidcard',$err);
        // Something else happened, completely unrelated to Stripe
    }
  }
  public function charge()
  {
    require_once (APPPATH."third_party/stripe/init.php");
    \Stripe\Stripe::setApiKey("sk_test_51JSrexAP1nhjCw3E54Mb2OSMvXBCL9r8BW6ohH2gqyGfxjvNEqX7Wh9vCMR5ohPPAUNyWkadSbnkyEnoCgNpi7hV00ASQfjLw1");
    $data = array('Name' => $_GET['fullname'],'amount' => $_GET['amount'],'country_currency' => $_GET['currency'],'phone' => $_GET['phone'],'address' => $_GET['address'],'services' => $_GET['services'],'invoice'=> $_GET['invoice'],'created'=> $_GET['created'],'city'=>$_GET['city'],'email'=>$_GET['email']);

    $amount =$_GET['amount']."00";
    $country_currency =$_GET['currency'];
    $source_id =$_GET['source'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $name = $_GET['fullname'];
    $customer_id = $_GET['customer'];
    $charge = \Stripe\Charge::create([
      "amount" => $amount,
      "currency" => $country_currency,
      "customer" => $customer_id,
      "source" => $source_id,
    ]);
    if($charge->status === "succeeded")
    {
      $config = Array(
                'protocol' => 'SMTP',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'youremailadress.com', 
                'smtp_pass' => 'yourpassword',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE,
                'smtp_crypto' => 'ssl'
                );
      $emails = array('youremailadress.com',$_GET['email']);
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");  
      $this->email->from('youremailadress.com'); 
      $this->email->to($emails);
      $this->email->subject('Payment Invoice | Event Planning And Booking System');
      $this->email->message($this->load->view('invoicetwo',$data, TRUE));
      if($this->email->send())
      { 
        $this->load->view('transactionsuccess',$data);
      }
      else
      {
        $this->load->view('transactionunsuccess');
      }
    }
  }

}

