<!-- Cart -->

<div class="cart_section shoppingcart_div">
	<div class="section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_container">
						
						<!-- Cart Bar -->
						<div class="cart_bar">
							<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
								<li> Product </li>
								<li> Price </li>
								<li> Quantity </li>
								<li> Total </li>
							</ul>
						</div>

						<!-- Cart Items -->
						<div class="cart_items">
							<div class="shoppingcart_item"></div>
						</div>

						<!-- Cart Buttons -->
						<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
							<div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="button button_continue trans_200">
									<a href="<?= base_url('frontend/item') ?>">continue shopping
								</a>
								</div>
								<div class="button button_clear trans_200">
									<a href="<?= base_url(); ?>">clear cart</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section_container cart_extra_container checkout_div">
		<div class="container">
			<div class="row">

				<!-- Cart Total -->
				<div class="col-xxl-6">
					<div class="cart_extra cart_extra_2">
						<div class="cart_extra_content cart_extra_total">
							<div class="cart_extra_title">Cart Total</div>
							<ul class="cart_extra_total_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">Subtotal</div>
									<div class="cart_extra_total_value ml-auto subtotal"></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">Shipping</div>
									<div class="cart_extra_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">Total</div>
									<div class="cart_extra_total_value ml-auto total"></div>
								</li>
							</ul>
							<div class="checkout_button trans_200"><a href="javascript:void(0)">proceed to checkout</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cart_section noshoppingcart_div">
	<div class="section_container">

		<div class="col-lg-12 text-center">

			<img src="<?php echo base_url() ?>template/error.gif" class="img-fluid" width="500px" height="500px">
			<h1> Oops...  </h1>
			<h3> Look like something was wrong. We're working on it. </h3>
		</div>
		
	</div>
	
</div>