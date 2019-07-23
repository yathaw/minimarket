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
}
?>