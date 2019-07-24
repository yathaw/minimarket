<?php
class Frontend_ctrl extends CI_Controller
{
	public function index()
	{
		$data['latestitems'] = $this->Frontend_mdl->latestitem();

		$data['innerdata'] = 'frontend_latestproduct';
		$this->load->view('frontend_template',$data);
	}

	public function category()
	{
		$data['categories'] = $this->Category_mdl->read();

		$data['innerdata'] = 'frontend_category';
		$this->load->view('frontend_template',$data);
	}

	public function category_product()
	{
		$id = $this->uri->segment(4);
		$data['category_products'] = $this->Frontend_mdl->category_product($id);

		$data['innerdata'] = 'frontend_category_product';
		$this->load->view('frontend_template',$data);
	}

	public function item()
	{
		$data['items'] = $this->Item_mdl->read();

		$data['innerdata'] = 'frontend_products';
		$this->load->view('frontend_template',$data);
	}

	public function cart()
	{
		$data['innerdata'] = 'frontend_cart';
		$this->load->view('frontend_template',$data);
	}

}
?>