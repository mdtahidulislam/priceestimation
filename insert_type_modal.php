<!-- Product Type Modal -->
<div class="modal fade" id="addtype" tabindex="-1" role="dialog" aria-labelledby="addtypeLabel" aria-hidden="true">
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
                  <label>Enter Product Type</label>
                  <input type="text" name="producttype" required placeholder="Enter Product Type" class="form-control"/>
                </div>
                <div class="form-group col-12">
                  <label>Select Manufacture</label>
                  <select name="mid" class="form-control">
                    <option value="">Select Manufacture</option>
                    <?php
                        $msql = "SELECT * FROM tbl_manufacture";
                        $msql_run = mysqli_query($conn, $msql);
                        while($mrow = mysqli_fetch_assoc($msql_run)){
                            //echo "<option value='" .$mrow['manufacture_name']. "'>" .$mrow['manufacture_name']. "</option>";
                            echo '<option value="' .$mrow['mid']. '">' .$mrow['manufacture_name']. '</option>';
                        };
                    ?>
                  </select>
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