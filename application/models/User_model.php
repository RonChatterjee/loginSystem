<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }
	public function insert($user)
	{
		$this->db->insert("Users",$user);
	}
	public function isDuplicate($email)
	{
		$result = $this->db->get_where("Users",array('email' => $email )); 
		if($result->num_rows()==0)
			return False;
		else
			return True;
	}
	public function check_login($user)
	{
		$result = $this->db->get_where("Users",array('email' => $user["email"] ));
		if($result->num_rows())
		{
			foreach($result->result() as $row)
			{
				return password_verify($user['password'],$row->password);
			}
		}
		else
			return False;	
	}
}