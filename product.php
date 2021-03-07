<?php include('header.php'); ?>
<?php include_once('config.php'); ?>

<!-- add item btn -->
<section class="add-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 titile_bar text-center">
        <button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#addproduct">New Item</button>
      </div>
    </div>
  </div>
</section>
<!-- end add item btn -->

<!-- Add Product Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addproductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addproductLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label>Product Name:</label>
            <input type="text" name="prodname" class="form-control" required placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label>Product Description:</label>
            <input type="text" name="descp" class="form-control" required placeholder="Enter Description">
          </div>
          <div class="form-group">
            <label>Product Generation:</label>
            <input type="text" name="generation" class="form-control" required placeholder="Enter Generation">
          </div>
          <div class="form-group">
            <label>Product Model:</label>
            <input type="text" name="model" class="form-control" required placeholder="Enter Model">
          </div>
          <div class="form-group">
            <label>Product Unit Price:</label>
            <input type="text" name="unitprice" class="form-control" required placeholder="Enter Unit Price">
          </div>
          <div class="form-group">
            <label>Product Wholesale Price:</label>
            <input type="text" name="wholesale" class="form-control" required placeholder="Enter Wholesale Price">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary">Submit</button>
          <!-- <input type="submit" class="btn btn-success" name="psubmit" id="submit" value="Submit"> -->
          <input type="hidden" name="action" value="addproduct">
        </div>
      </form>
    </div>
  </div>
</div>


<!-- product output form area -->
<section class="table_holder product-type-out pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">PId</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Generation</th>
                <th scope="col">Model</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Wholesale Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- form output -->
              <?php
                // db connection
                //include_once('config.php');
                // get data from DB & show
                $psql = "SELECT * FROM tbl_product";
                $getpsql = mysqli_query($conn, $psql);
                if (mysqli_num_rows($getpsql) > 0) {
                  while($prow = mysqli_fetch_assoc($getpsql)) {
              ?>
              <tr>
                <th scope="row"><?php echo $prow["pid"]; ?></th>
                <td><?php echo $prow['prodname']; ?></td>
                <td><?php echo $prow['descp']; ?></td>
                <td><?php echo $prow['generation']; ?></td>
                <td><?php echo $prow['model']; ?></td>
                <td><?php echo $prow['unitprice']; ?></td>
                <td><?php echo $prow['wholesale']; ?></td>
                <td class="action">
                    <a href="#edit<?php echo urldecode($prow['pid']); ?>" class="mr-1" title="Edit" data-toggle="modal" >
                      <i class="fas fa-edit"></i>
                    </a>
                    <?php include('product_update.php');?>
                </td>
              </tr>
              <?php      
                  }
                } else {
                  echo "0 results found";
                }
                //mysqli_close($conn);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end product output form area -->




<?php include('footer.php'); ?>