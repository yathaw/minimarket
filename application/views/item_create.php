<div class="row page-titles">
  <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor"> Item List </h3>
  </div>
  <div class="col-md-7 align-self-center text-right">
      <div class="d-flex justify-content-end align-items-center">
          
          <a href="<?php echo base_url('item') ?>" class="btn btn-success btn-lg d-none d-lg-block m-l-15 "> 
            <i class="fa fa-backward mr-2"></i>
            Go Back
          </a>
      </div>
  </div>
</div>

<div class="col-lg-12 col-xlg-12 col-md-12">
  <div class="card">
      <!-- Tab panes -->
      <div class="card-body">
          <form action="<?php echo base_url('item/store') ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-material" >
              <div class="form-group">
                <label class="col-md-12" for="name"> Name</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Enter Item Name" class="form-control form-control-line" name="name" id="name">
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-12" for="category">Select Category </label>
                  <div class="col-sm-12">
                      <select class="form-control form-control-line" id="category" name="categoryname">
                        <?php 
                          $i = 0;
                          foreach ($categories as $category):
                          $id = $category->categories_id;
                          $name = $category->categories_name;
                        ?>

                          <option value="<?php echo $id; ?>"> <?php echo $name; ?> </option>

                        <?php endforeach; ?>

                      </select>
                  </div>
              </div>

              <div class="form-group">
                  <label for="image" class="col-md-12">Image</label>
                  <div class="col-md-12">
                      <input type="file" name="photo" id="image">
                  </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-12" for="price"> Price </label>
                <div class="col-md-12">
                    <input type="text" placeholder="Enter Item Price" class="form-control form-control-line" name="price" id="price">
                </div>
              </div>

              <div class="form-group">
                  <label class="col-md-12" for="description"> Description </label>
                  <div class="col-md-12">
                      <textarea rows="5" class="form-control form-control-line" name="description" id="description"></textarea>
                  </div>
              </div>
              

              
              <div class="form-group">
                  <div class="col-sm-12">
                      <button class="btn btn-success" type="submit">
                        <i class="fa fa-save mr-2"></i>
                        Save 
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>