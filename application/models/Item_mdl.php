<?php
class Item_mdl extends CI_Model
{
	public function read()
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->join('categories','items.items_categoriesid = categories.categories_id','INNER');
		$this->db->order_by('items_name','ASC');
		$sql = $this->db->get();

		return $sql->result();
	}	

	public function store()
	{
		$name = $this->input->post('name');
		$categoryid = $this->input->post('categoryname');
		$image = $this->Item_mdl->upload_img('photo');
		$price = $this->input->post('price');
		$description = $this->input->post('description');

		$data = array(
			'items_name'		=>	$name,
			'items_price'		=>	$price,
			'items_description'	=>	$description,
			'items_photo'		=>	$image,
			'items_categoriesid'=>	$categoryid
		);

		$result = $this->db->insert('items',$data);

		return $result;

	}



	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/item/'.$file;
		// image/category/1.jpg

		$config['upload_path'] = 'image/item/';
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
		$sql = 'DELETE FROM items WHERE items_id = '.$id;

		$result = $this->db->query($sql);

		return $result;
	}


	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->where('items_id', $id);
		$sql = $this->db->get();

		return $sql->row_array();
	}


	public function update()
	{
		# oldPhoto...
		if ($_FILES['newPhoto']['name'] == NULL) 
		{
			$image = $this->input->post('oldPhoto');
		}

		#newPhoto
		else
		{
			$image = $this->Item_mdl->upload_img('newPhoto');
		}

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$categoryid = $this->input->post('categoryname');
		$price = $this->input->post('price');
		$description = $this->input->post('description');

		$data = array(
			'items_name'		=>	$name,
			'items_price'		=>	$price,
			'items_description'	=>	$description,
			'items_photo'		=>	$image,
			'items_categoriesid'=>	$categoryid
		);

		$this->db->where('items_id',$id);
		$result = $this->db->update('items',$data);

		return $result;

	}







}
?>