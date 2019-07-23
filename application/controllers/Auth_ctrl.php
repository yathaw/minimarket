<?php

class Auth_ctrl extends CI_Controller
{
	public function index()
	{
		$data['innerdata'] = 'login';
		$this->load->view('frontend_template',$data);
	}
	
	public function register()
	{
		$data['innerdata'] = 'register';
		$this->load->view('frontend_template',$data);
	}


	public function check()
	{
		$this->form_validation->set_rules('name', 'User Name', 'required');

		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|is_unique[users.users_email]');

		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE ) 
		{
			// register Form
			$data['innerdata'] = 'register';
			$this->load->view('frontend_template',$data);
		}
		else
		{
			$this->Auth_mdl->register();

			redirect('login','refresh');
		}
	}

















		
 
} 
?>