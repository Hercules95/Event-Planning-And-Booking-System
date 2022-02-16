<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('roles');
	}

	 public function index()
	 {
	 	$data['list'] = $this->roles->getUsers();
		$this->load->view('backend/role/customerroles',$data);
	 }
	 public function defineroles($id)
	 {
	 	$this->roles->defineRoles($id);
	 	redirect('Role');
	 }
	 public function user($id){
	 	$this->roles->defineUser($id);
	 	redirect('Role');
	 }
	 public function deleteRoles($id)
	 {
	 	$response = $this->roles->deleteRoles($id);
	 	if($response)
	 	{
	 		$this->session->set_flashdata('success', 'Details has been updated');
	 		redirect('Role');
	 	}
	 	else
	 	{
	 		$this->session->set_flashdata('error', 'Details has been updated');
	 		redirect('Role');
	 	}
	 }

}

