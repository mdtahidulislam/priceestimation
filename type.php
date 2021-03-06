<?php include('header.php');?>

<!-- add item btn -->
<section class="add-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 titile_bar text-center">
        <a href="#addtype" data-toggle="modal" class="btn btn-primary btn-sm mt-3 mb-3">Add New</a>
      </div>
    </div>
  </div>
</section>
<!-- end add item btn -->

<!-- product type output form area -->
<section class="table_holder product-type-out pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-hover table-responsive" id="example">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Product Type</th>
              <th scope="col">Manufacture</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- form output -->
            <?php
              // db connection
              include_once('config.php');
              // get data from DB & show
              //$sql = "SELECT * FROM product_type";
              $sql = "SELECT p.*, m.manufacture_name, m.mid 
                        FROM product_type as p,
                             tbl_manufacture as m
                        WHERE p.id = m.mid";
              $getData = mysqli_query($conn, $sql);
              if (mysqli_num_rows($getData) > 0) {
                while($row = mysqli_fetch_assoc($getData)) {
            ?>
            <tr>
              <th scope="row"><?php echo $row["id"]; ?></th>
              <td><?php echo $row["product_type"]; ?></td>
              <td><?php echo $row["manufacture_name"]; ?></td>
              <td class="action">
                  <a href="#edit<?php echo urldecode($row['id']); ?>" data-toggle="modal"  class="mr-1" title="Edit">
                    <i class="fas fa-edit"></i>
                  </a>
                  <!-- include edit modal -->
                  <?php include('update_type_modal.php'); ?>
                  <!-- End -->
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
</section>
<!-- end product type output form area -->

<!-- include insert type modal -->
<?php include('insert_type_modal.php'); ?>
<!-- End -->

<?php include('footer.php');?>