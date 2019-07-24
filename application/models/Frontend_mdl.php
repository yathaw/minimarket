<?php

class Frontend_mdl extends CI_Model
{
	
	public function latestitem()
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->join('categories','items.items_categoriesid = categories.categories_id','INNER');
		$this->db->order_by('items_id','DESC');
		$this->db->limit(6);
		$sql = $this->db->get();

		return $sql->result();

	}

	public function category_product($id)
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->join('categories','items.items_categoriesid = categories.categories_id','INNER');
		$this->db->where('items_categoriesid',$id);
		$this->db->order_by('items_name','ASC');
		$sql = $this->db->get();

		return $sql->result();

	}
}
?>