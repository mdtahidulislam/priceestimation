<?php include('header.php'); ?>

<!-- add item btn -->
<section class="add-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 titile_bar text-center">
        <a href="#addmanufacture" data-toggle="modal" class="btn btn-primary btn-sm mt-3 mb-3">Add Manufacture</a>
      </div>
    </div>
  </div>
</section>
<!-- end add item btn -->

<!-- include insert manufacture modal -->
<?php include('manufacture_insert_modal.php'); ?>

<!-- manufacture output form area -->
<section class="table_holder product-type-out pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-hover display" id="example">
            <thead>
              <tr>
                <th scope="col">Mid</th>
                <th scope="col">Manufacture Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- form output -->
              <?php
                // db connection
                include_once('config.php');
                // get data from DB & show
                $sql = "SELECT * FROM tbl_manufacture";
                $getData = mysqli_query($conn, $sql);
                if (mysqli_num_rows($getData) > 0) {
                  while($mrow = mysqli_fetch_assoc($getData)) {
              ?>
              <tr>
                <th scope="row"><?php echo $mrow["mid"]; ?></th>
                <td><?php echo $mrow["manufacture_name"]; ?></td>
                <td class="action">
                    <a href="#medit<?php echo urldecode($mrow['mid']); ?>" data-toggle="modal"  class="mr-1" title="Edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <!-- include edit modal -->
                    <?php include('manufacture_update_modal.php'); ?>
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
  </div>
</section>
<!-- end manufacture output form area -->




<?php include('footer.php'); ?>