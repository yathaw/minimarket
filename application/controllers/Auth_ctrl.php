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


	public function authentication()
	{
		$result = $this->Auth_mdl->login();

		if ($result) 
		{
			// success

			$sess_data = array(
				'id'		=>	$result['users_id'],
				'email'		=>	$result['users_email'],
				'name'		=>	$result['users_name'],
				'photo'		=>	$result['users_photo'],
				'role'		=>	$result['role']
			);

			$this->session->set_userdata('login_data', $sess_data);

			if ($result['role'] == "admin" ) 
			{
				redirect('category','refresh');
			}
			else
			{
				redirect('/','refresh');
			}
		}
		else
		{
			// login Form
			$data =  array('error_message' => 'Invalid Email or Password' );

			$data['innerdata'] = 'login';
			$this->load->view('frontend_template',$data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login_data');
		session_destroy();

		redirect('login','refresh');	
	}












		
 
} 
?>