<!-- update product -->
<div class="modal fade" id="update<?php echo urldecode($prow['pid']); ?>" tabindex="-1" role="dialog" aria-labelledby="updateproductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateproductLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php 
            $pid = $prow['pid'];
            $p = "SELECT * FROM tbl_product WHERE id = '{$pid}'";
            $getrowdata = mysqli_query($conn, $p);
            $rowresult = mysqli_fetch_assoc($getrowdata);
          ?>
      <form action="update.php?id=<?php echo $rowresult['pid']; ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          

          <div class="form-group">
            <label>Product Name:</label>
            <input type="text" name="prodname" class="form-control" required value="<?php echo $rowresult['prodname'] ?>">
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
          <button type="submit"  class="btn btn-primary">Update</button>
          <!-- <input type="submit" class="btn btn-success" name="psubmit" id="submit" value="Submit"> -->
          <input type="hidden" name="action" value="updateproduct">
        </div>
      </form>
    </div>
  </div>
</div>