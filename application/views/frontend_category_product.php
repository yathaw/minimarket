<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
							<?php if ($category_products): ?>

						<div class="products_container grid">

							
							<?php 
	                        	
	                        	foreach ($category_products as $item):

	                          	$id = $item->items_id;
	                          	$name = $item->items_name;
	                          	$price = $item->items_price;
	                          	$photo = base_url().$item->items_photo;
	                          	$desc = $item->items_description;

	                          	$cid = $item->categories_id;
	                          	$cname = $item->categories_name;

	                        ?>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="<?= $photo; ?>" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html"> <?= $name ?></a></div>
										<div class="product_price"> <?= $price ?> Ks </div>
										<div class="product_button ml-auto mr-auto trans_200">
											<a href="javascript:void(0)" class="addtocard_btn" data-id="<?= $id; ?>" data-name="<?= $name; ?>" data-price="<?= $price; ?>" data-photo="<?= $photo; ?>" data-desc="<?= $desc; ?>" data-cid="<?= $cid; ?>" data-cname="<?= $cname; ?>">
												add to cart
										</a></div>
									</div>
								</div>	
							</div>

							<?php endforeach; ?>
						</div>
						
							<?php else : ?>

								<div class="col-lg-12 text-center">

									<img src="<?php echo base_url() ?>template/error.gif" class="img-fluid" width="500px" height="500px">
									<h1> Oops...  </h1>
									<h3> Look like something was wrong. We're working on it. </h3>
								</div>

							<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>