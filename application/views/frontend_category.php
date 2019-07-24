<div class="products mb-5">
	<div class="section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="products_container grid">

						<?php 
		                  	foreach ($categories as $category):

		                  	$id = $category->categories_id;
		                  	$name = $category->categories_name;
		                  	$photo = $category->categories_photo;

		                ?>
						
						<!-- Product -->
						<div class="product grid-item">
							<div class="product_inner">
								<a href="<?= base_url('frontend/category/item/'.$id) ?>"> 
								<div class="product_image text-center p-5">
									
										<img src="<?php echo $photo ?>" alt="" style="width: 100px; height: 100px;">
										
										<p style="font-size: 24px; font-weight: 700; color: #414141; margin-top: 13px;">
											<?= $name; ?>
										</p>

								</div>
									</a>
								
								
							</div>	
						</div>

						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>