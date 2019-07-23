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

		$this->session->set_flashdata('success','Your data is added.');

		redirect('category','refresh');

	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		$this->Category_mdl->delete($id);

		$this->session->set_flashdata('success','Your data is deleted.');

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

		$this->session->set_flashdata('success','Your data is updated.');

		redirect('category','refresh');
	}














}
?>