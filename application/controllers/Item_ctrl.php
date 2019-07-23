<?php 
class Item_ctrl extends CI_Controller
{
	public function index()
	{
		$data['items'] = $this->Item_mdl->read();

		$data['innerdata'] = 'item_read';
		$this->load->view('backend_template',$data);
	}

	public function create()
	{
		$data['categories'] = $this->Category_mdl->read();
		$data['innerdata'] = 'item_create';
		$this->load->view('backend_template',$data);
	}

	public function store()
	{
		$this->Item_mdl->store();

		$this->session->set_flashdata('create','Your data is added.');

		redirect('item','refresh');

	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		$this->Item_mdl->delete($id);

		$this->session->set_flashdata('delete','Your data is added.');

		redirect('item','refresh');	
	}


	public function edit()
	{
		$id = $this->uri->segment(3);
		
		$data['item'] = $this->Item_mdl->edit($id);

		$data['categories'] = $this->Category_mdl->read();
		$data['innerdata'] = 'item_edit';
		$this->load->view('backend_template',$data);
	}


	public function update()
	{
		$this->Item_mdl->update();

		$this->session->set_flashdata('edit','Your data is updated.');

		redirect('item','refresh');
	}










}
?>