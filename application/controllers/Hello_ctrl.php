<?php

class Hello_ctrl extends CI_Controller
{
	public function hello()
	{
		$data['name'] = 'Ya Thaw Myat Noe';
		$data['country'] = 'Yangon';
		$data['color'] = 'blue';

		$this->load->view('hello',$data);
	}

	public function get($name, $country, $color)
	{
		$data['name'] = $name;
		$data['country'] = $country;
		$data['color'] = $color;

		$this->load->view('hello',$data);
	}
}

?>