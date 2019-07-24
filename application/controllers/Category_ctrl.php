<?php 
class Category_ctrl extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();

		$session = $this->session->userdata('login_data');

		if ($session) 
		{
			# CRUD
			if ($role = $session['role'] == 'admin') 
			{
				$this->router->fetch_class();
			}
			else
			{
				$this->load->library('user_agent');
				if ($this->agent->is_referral())
				{
				    echo $this->agent->referrer();
				}
			}

		}
		else
		{
			// login Form
			redirect('login','refresh');
		}
	}


	public function index()
	{
		$data['categories'] = $this->Category_mdl->read();

		$data['innerdata'] = 'category_read';
		$this->load->view('backend_template',$data);
	}

	public function create()
	{
		$data['innerdata'] = 'category_create';
		$this->load->view('backend_template',$data);
	}

	public function store()
	{
		$this->Category_mdl->store();

		$this->session->set_flashdata('create','Your data is added.');

		redirect('category','refresh');

	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		$this->Category_mdl->delete($id);

		$this->session->set_flashdata('delete','Your data is deleted.');

		redirect('category','refresh');	
	}

	public function edit()
	{
		$id = $this->uri->segment(3);

		$data['category'] = $this->Category_mdl->edit($id);

		$data['innerdata'] = 'category_edit';
		$this->load->view('backend_template',$data);
	}

	public function update()
	{
		$this->Category_mdl->update();

		$this->session->set_flashdata('edit','Your data is updated.');

		redirect('category','refresh');
	}














}
?>