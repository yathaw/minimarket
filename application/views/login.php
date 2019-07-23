<!-- Checkout -->

<div class="checkout">
	<div class="section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
						
						<!-- Billing -->
						<div class="billing checkout_box">
							<div class="checkout_title"> Login </div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" class="checkout_form">

									<div>
										<!-- Email -->
										<label for="email">Email Address*</label>
										<input type="email" id="email" class="checkout_input" required="required" name="email">
									</div>

									<div>
										<!-- Password -->
										<label for="password"> Password </label>
										<input type="password" id="password" class="checkout_input" required="required" name="password">
									</div>

									

									<div class="order_text">
										<p> I have not Register! 
											<a href="<?php echo base_url('register') ?>"> Register Here </a>
										</p>

									</div>

									<div class="checkout_button trans_200"><a href="checkout.html"> Register </a></div>



									
								</form>
							</div>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>
</div>