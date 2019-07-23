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

		redirect('item','refresh');

	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		
		$this->Item_mdl->delete($id);

		redirect('item','refresh');	
	}















}
?>