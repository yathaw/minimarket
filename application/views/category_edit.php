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
          <form action="<?php echo base_url('category/update') ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-material" >
              
              <input type="hidden" name="id" value="<?php echo $category['categories_id']; ?>">
              <input type="hidden" name="oldPhoto" value="<?php echo $category['categories_photo'];  ?>">


              <div class="form-group">
                <label class="col-md-12" for="name"> Name</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Enter Category Name" class="form-control form-control-line" name="name" id="name" value="<?php echo $category['categories_name'] ?>">
                </div>
              </div>
              <div class="form-group">
                  <label for="image" class="col-md-12">Image</label>
                  <div class="col-md-12">
                      
                  
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      
                      <li class="nav-item">
                        <a class="nav-link active" id="old-tab" data-toggle="tab" href="#old" role="tab" aria-controls="old" aria-selected="true"> Old Photo </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false"> New Photo </a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active pt-3" id="old" role="tabpanel" aria-labelledby="old-tab">
                        <img src="<?php echo $category['categories_photo'] ?>" class="img-fluid" style="width: 100px; height: 100px ">
                      </div>
                      <div class="tab-pane fade pt-3" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <input type="file" name="newPhoto" id="image">
                      </div>
                    </div>
                  </div>

              </div>
              <div class="form-group">
                  <div class="col-sm-12">
                      <button class="btn btn-success" type="submit">
                        <i class="fa fa-upload mr-2"></i>
                        Update 
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>