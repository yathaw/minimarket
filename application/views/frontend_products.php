<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="products_container grid">

							
							<?php 
	                        	
	                        	foreach ($items as $item):

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
						

					</div>
				</div>
			</div>
		</div>
	</div>