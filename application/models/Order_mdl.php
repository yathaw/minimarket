<?php
class Order_mdl extends CI_Model
{
	
	public function addtocart()
	{
		$cart = $this->input->post('cart');
		$total = $this->input->post('total');

		$itemarray = array();
		$itemarray = $cart['mycart'];

		// Date
		$todaydate = date('Y-m-d');

		// Voucher No
		$this->load->helper('string');
		$voucher = random_string('alnum',10);

		// Userid (SESSION)
		$session = $this->session->userdata('login_data');
		$userid = $session['id'];

		foreach ($itemarray as $item) 
		{
			$itemid = $item['id'];
			$quantity = $item['qty'];

			$orderdetail = array(
				'orderdetails_userid'	=>	$userid,
				'orderdetails_itemid'	=>	$itemid,
				'orderdetails_qty'		=>	$quantity,
				'orderdetails_voucherno'=>	$voucher
			);

			$this->db->insert('orderdetails',$orderdetail);

		}

		$order = array(
			'orders_date'	=>	$todaydate,
			'orders_total'	=>	$total,
			'orders_voucherno'	=> $voucher
		);

		$result = $this->db->insert('orders',$order);

		return $result;







	}
}
?>