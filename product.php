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

<!-- product input form area -->
<section class="form modal">
  <div class="modal-content">
    <span class="close-button">X</span>
      <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 pt-3 pb-3">
                <form name="product" id="product" action="create.php" method="post">
                  <fieldset>
                    <legend>Product:</legend>
                    <div id="dynamic_field">
                      <div class="form-row">
                        <div class="form-group col-12">
                            <label>Product:</label>
                          <input type="text" name="product" required placeholder="Enter Product" class="form-control"/>
                        </div>
                        <div class="form-group col-12">
                            <label>Description</label>
                            <textarea name="description" rows="3" placeholder="Enter Description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-12">
                            <label>Generation</label>
                            <input type="text" name="generation" required placeholder="Enter Generation" class="form-control"/>
                        </div>
                        <div class="form-group col-12">
                            <label>Model</label>
                            <input type="text" name="model" required placeholder="Enter Model" class="form-control"/>
                        </div>
                        <div class="form-group col-12">
                            <label>Unit Price</label>
                            <input type="text" name="unitprice" required placeholder="Enter Unit Price" class="form-control"/>
                        </div>
                        <div class="form-group col-12">
                            <label>Wholesale Price</label>
                            <input type="text" name="wholeprice" required placeholder="Enter Wholesale Price" class="form-control"/>
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
</section><!-- end product input form area -->

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


<?php include('footer.php'); ?>