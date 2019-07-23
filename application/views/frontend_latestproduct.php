<div class="products">
	<div class="section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="products_container grid">

						<?php 
                          $i = 0;
                          foreach ($latestitems as $item):
                          $i++;

                          $id = $item->items_id;
                          $name = $item->items_name;
                          $price = $item->items_price;
                          $photo = base_url().$item->items_photo;
                          $desc = $item->items_description;

                          $cid = $item->categories_id;
                          $cname = $item->categories_name;

                        ?>

						<!-- Product -->
						<div class="product grid-item mt-5">
							<div class="product_inner">
								<div class="product_image"><img src="<?php echo $photo ?>" alt="" class="img-fluid"></div>
								<div class="product_content text-center" style="height: 200px;">
									<div class="product_title"><a href="product.html"> <?php echo $name; ?> </a></div>
									<div class="product_price text-danger"><?php echo $price; ?> Ks </div>
									<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
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