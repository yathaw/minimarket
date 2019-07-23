<?php
/**
 * 
 */
class Auth_mdl extends CI_Model
{
	
	public function register()
	{
		$name = $this->input->post('name');
		$photo = $this->Auth_mdl->upload_img('photo');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'users_name' 		=> $name,
			'users_phoneno'		=>	$phone,
			'users_address'		=>	$address,
			'users_email'		=>	$email,
			'users_password'	=>	SHA1($password),
			'users_photo'		=>	$photo 
		);

		$result = $this->db->insert('users',$data);

		return $result;




	}

	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/user/'.$file;
		// image/category/1.jpg

		$config['upload_path'] = 'image/user/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';

		$this->load->library('upload',$config);

		if ($this->upload->do_upload($image)) 
		{
			$imagefile = $filepath;
		}
		else
		{
			$imagefile = $this->upload->display_errors();
		}

		return $imagefile;
	}
}
?>