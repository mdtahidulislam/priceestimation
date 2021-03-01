<?php include('header.php'); ?>

<!-- add item btn -->
<section class="add-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 titile_bar text-center">
        <button class="btn btn-info btn-md mt-4 mb-3 trigger" title="New Item">
          <span class="glyphicon glyphicon-tag">&nbsp;</span>New Item
        </button>
      </div>
    </div>
  </div>
</section>
<!-- end add item btn -->

<!-- product type form area -->
<section class="form pt-3 pb-3 modal">
  <div class="modal-content">
    <span class="close-button">X</span>
      <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form name="product_type" id="product_type" action="create.php" method="post">
                  <fieldset>
                    <legend>Product Type</legend>
                    <div id="dynamic_field">
                      <div class="form-row">
                        <div class="form-group col-12">
                          <input type="text" name="producttype[]" required placeholder="Enter Product Type" class="form-control"/>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="button" name="add" id="add" class="btn btn-primary mr-3" value="Add More Type">
                        <!-- <button type="button" name="add" id="add" class="btn btn-primary">Add More Type</button> -->
                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
                    </div>
                  </fieldset>
                </form>
            </div>
        </div>
      </div>
  </div>
</section><!-- end form area -->

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
                    <a href="delete.php?id=<?php echo urldecode($row['id']); ?>" title="Delete">
                      <i class="far fa-trash-alt"></i>
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




