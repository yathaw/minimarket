<!-- Checkout -->

<div class="checkout">
	<div class="section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
						
						<!-- Billing -->
						<div class="billing checkout_box">
							<div class="checkout_title"> Register </div>
							<div class="checkout_form_container">
								<form action="<?php echo base_url('check') ?> " method="POST" enctype="multipart/form-data" 
								 id="checkout_form" class="checkout_form">
									
									<div>
										<!-- Name -->
										<label for="name">Name</label>
										<input type="text" id="name" class="checkout_input" name="name">
										<p class="text-danger"> 
											<?php echo form_error('name'); ?>
										</p>
									</div>

									<div>
										<!-- Photo -->
										<label for="name">Photo</label>
										<input type="file" id="name" class="pt-4 pb-4" name="photo">
									</div>

									<div>
										<!-- Phone -->
										<label for="phone">Phone</label>
										<input type="text" id="phone" class="checkout_input" name="phone">
									</div>

									<div>
										<!-- Address -->
										<label for="address">Address</label>
										<input type="text" id="address" class="checkout_input" name="address">
									</div>

									<div>
										<!-- Email -->
										<label for="email">Email Address*</label>
										<input type="email" id="email" class="checkout_input" required="required" name="email">
										<p class="text-danger"> 
											<?php echo form_error('email'); ?>
										</p>
									</div>

									<div>
										<!-- Password -->
										<label for="password"> Password </label>
										<input type="password" id="password" class="checkout_input" required="required" name="password">
									</div>

									<div>
										<!-- Confirm Password -->
										<label for="confirmpasswrod"> Confirm Password </label>
										<input type="password" id="confirmpasswrod" class="checkout_input" required="required" name="confirm_password">
									</div>

									<div class="order_text">
										<p> I have already Register! 
											<a href="<?php echo base_url('login') ?>"> Login Here </a>
										</p>

									</div>

									<button type="submit" class="checkout_button trans_200">Register</button>



									
								</form>
							</div>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>
</div>