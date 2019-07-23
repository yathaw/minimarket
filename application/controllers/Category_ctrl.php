<?php 
class Category_ctrl extends CI_Controller
{
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

		redirect('category','refresh');

	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		$this->Category_mdl->delete($id);

		redirect('category','refresh');	
	}















}
?>