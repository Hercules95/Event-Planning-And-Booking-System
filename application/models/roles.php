<?php
class Roles extends CI_Model{
	public function getUsers()
	{
		$this->db->select('*');
		$this->db->from('users');
		return $this->db->get()->result();
	}
	public function defineRoles($id)
	{
		$this->db->where('id',$id);
		$this->db->set('role','admin');
		$this->db->update('users');
	}
	public function defineUser($id)
	{
		$this->db->where('id',$id);
		$this->db->set('role','user');
		$this->db->update('users');
	}
	public function deleteRoles($id)
	{
		$this->db->where('id',$id);
        $this->db->delete('users');
	}
}