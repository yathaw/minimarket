<div class="row page-titles">
  <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor"> Category List </h3>
  </div>
  <div class="col-md-7 align-self-center text-right">
      <div class="d-flex justify-content-end align-items-center">
          
          <a href="<?php echo base_url('category/create') ?>" class="btn btn-success btn-lg d-none d-lg-block m-l-15 "> 
            <i class="fa fa-plus mr-2"></i>
            Add New
          </a>
      </div>
  </div>
</div>

<div class="row">
  <!-- column -->
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table" id="example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Photo</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
    
                        <?php 
                          $i = 0;
                          foreach ($categories as $category):
                          $i++;

                          $id = $category->categories_id;
                          $name = $category->categories_name;
                          $photo = $category->categories_photo;

                        ?>

                        <tr>
                          <td> <?php echo $i; ?> </td>
                          <td> <?php echo $name; ?> </td>
                          <td> 
                            <img src="<?php echo $photo; ?>" style="width: 50px; height: 50px;">
                          </td>
                          <td>
                            <a href="<?php echo base_url('category/edit/'.$id) ?>" class="btn btn-outline-warning">
                              <i class="fa fa-edit"></i>
                              Edit
                            </a>
                            
                            <a href="<?php echo base_url('category/delete/'.$id) ?>" class="btn btn-outline-danger">
                              <i class="fa fa-trash"></i>
                              Delete
                            </a>

                          </td>
                        </tr>

                        <?php endforeach; ?>

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>