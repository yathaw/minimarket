<?php
class Category_mdl extends CI_Model
{
	public function read()
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->order_by('categories_name','ASC');
		$sql = $this->db->get();

		return $sql->result();
	}	

	public function store()
	{
		$name = $this->input->post('name');
		$image = $this->Category_mdl->upload_img('photo');

		$data = array(
			'categories_name'	=>	$name,
			'categories_photo'	=>	$image
		);

		$result = $this->db->insert('categories',$data);

		return $result;

	}



	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/category/'.$file;
		// image/category/1.jpg

		$config['upload_path'] = 'image/category/';
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


	public function delete($id)
	{
		$sql = 'DELETE FROM categories WHERE categories_id = '.$id;

		$result = $this->db->query($sql);

		return $result;
	}










}
?>