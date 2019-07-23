<div class="boxes mb-5">
	<div class="section_container">
		<div class="container">
			<div class="row">

				<?php 
                  	foreach ($categories as $category):

                  	$id = $category->categories_id;
                  	$name = $category->categories_name;
                  	$photo = $category->categories_photo;

                ?>
				
				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box m-4">
						<div class="box_image text-center" style="background-color: #a5a5a5;">
							<img src="<?= $photo ?>" alt="" class="img-fluid p-3" style="width: 100px; height: 100px;">
						</div>
						<div class="box_title trans_200">
							<a href="categories.html">
								<?= $name; ?>
							</a>
						</div>
					</div>
				</div>

				<?php endforeach; ?>


			</div>
		</div>
	</div>
</div>