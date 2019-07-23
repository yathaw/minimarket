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

}
?>