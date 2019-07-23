<div class="row page-titles">
  <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor"> Item List </h3>
  </div>
  <div class="col-md-7 align-self-center text-right">
      <div class="d-flex justify-content-end align-items-center">
          
          <a href="<?php echo base_url('item/create') ?>" class="btn btn-success btn-lg d-none d-lg-block m-l-15 "> 
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
                          foreach ($items as $item):
                          $i++;

                          $id = $item->items_id;
                          $name = $item->items_name;
                          $price = $item->items_price;
                          $photo = base_url().$item->items_photo;
                          $desc = $item->items_description;

                          $cid = $item->categories_id;
                          $cname = $item->categories_name;

                        ?>

                        <tr>
                          <td> <?php echo $i; ?> </td>
                          <td> <?php echo $name; ?> </td>
                          <td> 
                            <img src="<?php echo $photo; ?>" style="width: 50px; height: 50px;">
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="btn btn-outline-primary detailbtn" data-id="<?= $id ?>" data-name="<?= $name; ?>" data-price="<?= $price; ?>" data-photo="<?= $photo; ?>" data-desc="<?= $desc; ?>" data-cname="<?= $cname; ?>">
                              <i class="fa fa-eye"></i>
                              Detail
                            </a>

                            <a href="" class="btn btn-outline-warning">
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


<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title itemname" id="detailModalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="" class="img-fluid" id="photo">
          </div>
          <div class="col-lg-8 col-md-6 col-sm-12">
            <h3 class="itemname text-center"></h3>
            <p id="cname" class="mt-5"></p>
            <p id="price" class="text-danger"></p>
            <p id="desc" class="text-justify"></p>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(".detailbtn").click(function(event)
  {
   event.preventDefault();
        var id=$(this).data('id');
        var name=$(this).data('name');
        var price=$(this).data('price');
        var photo=$(this).data('photo');
        var desc=$(this).data('desc');
        var cname=$(this).data('cname');        

        //alert(name);
        $(".itemname").text(name);
        $("#photo").attr("src",photo);
        $("#price").text(price+"Ks");          
        $("#cname").text(cname);
        $('#desc').text(desc);
    //    alert(id + name+price+photo+newphoto+categoryid);
      $("#detailModal").modal('show');

  });
</script>
