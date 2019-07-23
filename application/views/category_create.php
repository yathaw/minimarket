<div class="row page-titles">
  <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor"> Category List </h3>
  </div>
  <div class="col-md-7 align-self-center text-right">
      <div class="d-flex justify-content-end align-items-center">
          
          <a href="<?php echo base_url('category') ?>" class="btn btn-success btn-lg d-none d-lg-block m-l-15 "> 
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
          <form action="<?php echo base_url('category/store') ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-material" >
              <div class="form-group">
                <label class="col-md-12" for="name"> Name</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Enter Category Name" class="form-control form-control-line" name="name" id="name">
                </div>
              </div>
              <div class="form-group">
                  <label for="image" class="col-md-12">Image</label>
                  <div class="col-md-12">
                      <input type="file" name="photo" id="image">
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