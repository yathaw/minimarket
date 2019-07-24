<?php

class Order_ctrl extends CI_Controller
{
	
	public function addtocart()
	{
		$this->Order_mdl->addtocart();
	}
}
?>