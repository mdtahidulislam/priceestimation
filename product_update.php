<div class="modal fade" id="edit<?php echo urldecode($prow['pid']); ?>" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-left" id="myModalLabel">Edit</h4> -->
                <h5 class="modal-title">Edit Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                  $pid = $prow['pid'];
                  $query = "SELECT * FROM tbl_product WHERE pid = $pid";
                  $getdata = mysqli_query($conn, $query);
                  $result = mysqli_fetch_assoc($getdata);
                ?>
                <form method="POST" action="update.php?pid=<?php echo $pid; ?>" enctype="multipart/form-data">
                    <!-- form input field -->
                    <div class="form-row">
                        
                        <div class="form-group col-12">
                            <label>Product Name:</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <input type="text" name="prodname" class="form-control" required value="<?php echo $result['prodname']; ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>Product Description:</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <input type="text" name="descp" class="form-control" required value="<?php echo $result['descp']; ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>Product Generation:</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <input type="text" name="generation" class="form-control" required value="<?php echo $result['generation']; ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>Select Manufacture</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <select name="manufacture_name" class="form-control">
                                <option value="" selected><?php echo $result['manufacture_name']; ?></option>
                                <?php
                                    $msql = "SELECT manufacture_name FROM tbl_manufacture";
                                    $msql_run = mysqli_query($conn, $msql);
                                    while($mrow = mysqli_fetch_assoc($msql_run)){
                                        echo "<option value='" .$mrow['manufacture_name']. "'>" .$mrow['manufacture_name']. "</option>";
                                    };
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label>Select Type</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <select name="prod_type" class="form-control">
                                <option value="" selected><?php echo $result['prod_type']; ?></option>
                                <?php
                                    $psql = "SELECT prodname FROM tbl_product";
                                    $psql_run = mysqli_query($conn, $psql);
                                    while($prow = mysqli_fetch_assoc($psql_run)){
                                        echo "<option value='" .$prow['prodname']. "'>" .$prow['prodname']. "</option>";
                                    };
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label>Product Model:</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <input type="text" name="model" class="form-control" required value="<?php echo $result['model']; ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>Product Unit Price:</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <input type="text" name="unitprice" class="form-control" required value="<?php echo $result['unitprice']; ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>Product Wholesale Price:</label>
                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                            <input type="text" name="wholesale" class="form-control" required value="<?php echo $result['wholesale']; ?>">
                        </div>
                        <div class="form-group col-12">
                            <label>Upload Image:</label> <br>
                            <input type="file" name="img" required value="<?php echo $result['img']; ?>">
                        </div>
                    </div>
                    <!-- form footer -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="action" value="updateproduct">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->





