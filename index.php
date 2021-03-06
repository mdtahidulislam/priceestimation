<?php include('header.php'); ?>

<!-- add item btn -->
<section class="add-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 titile_bar text-center">
        <a href="#addnewtype" data-toggle="modal" class="btn btn-primary btn-sm mt-3 mb-3">Add New</a>
      </div>
    </div>
  </div>
</section>
<!-- end add item btn -->

<!-- Product Type Modal -->
<div class="modal fade" id="addnewtype" tabindex="-1" role="dialog" aria-labelledby="addnewtypeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form method="POST" action="create.php" class="form-horizontal" enctype="multipart/form-data" >
        <div class="modal-body">
          <fieldset>
            <legend>Product Type</legend>
            <div id="dynamic_field">
              <div class="form-row">
                <div class="form-group col-12">
                  <input type="text" name="producttype" required placeholder="Enter Product Type" class="form-control"/>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</a>
          <input type="hidden" name="action" value="addtype">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- product type output form area -->
<section class="table_holder product-type-out pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- form output -->
              <?php
                // db connection
                include_once('config.php');
                // get data from DB & show
                $sql = "SELECT id, product_type FROM product_type";
                $getData = mysqli_query($conn, $sql);
                if (mysqli_num_rows($getData) > 0) {
                  while($row = mysqli_fetch_assoc($getData)) {
              ?>
              <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["product_type"]; ?></td>
                <td class="action">
                    <a href="update.php?id=<?php echo urldecode($row['id']); ?>" class="mr-1" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                </td>
              </tr>
              <?php      
                  }
                } else {
                  echo "0 results found";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end product type output form area -->


<!-- footer area -->
<?php include('footer.php'); ?>




