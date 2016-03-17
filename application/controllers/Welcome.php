<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if($this->session->email)
		{
			$this->load->view("logged_in");
		}
		else
		{
			$this->load->view('signUp');
		}
	}
	public function check()
	{
		$rules = array(
		array('field'=>'usermail','label'=>'Email','rules'=>'trim|required|valid_email'),
		array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
		);
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()==False)
		{
			$this->index();
		}
		else
		{
			$email = $this->input->post("username");
			$password = password_hash($this->input->post("login_password"),PASSWORD_DEFAULT); 
			if($this->User_model->isDuplicate($email))
			{
				$this->index();
			}
			else
			{
				$data = array('email' => $email,'password' => $password , 'something' => 0);
				$this->User_model->insert($data);
				$this->session->set_userdata("email",$email);
				$this->index();
			}
		}
	}
	public function login()
	{
		$rules = array(
			array('field'=>'username','label'=>'Email','rules'=>'trim|required|valid_email'),
		array('field'=>'login_password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
		);
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()==False)
		{
			$this->index();
		}
		else
		{
			$email = $this->input->post("username");
			$password = $this->input->post("login_password"); 
			$data = array('email' => $email,'password' => $password , 'something' => 0);
			if($this->User_model->check_login($data))
			{
				$this->session->set_userdata("email",$email);
			}
			$this->index();
		}
	}
	public function log_out()
	{
		$this->session->sess_destroy();
		redirect("/Welcome");
	}
}
