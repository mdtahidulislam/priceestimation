<div class="modal fade" id="edit<?php echo urldecode($row['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
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
                $id = $row['id'];
                //$query = "SELECT * FROM product_type WHERE id = $id";
                $query = "SELECT p.*, m.manufacture_name, m.mid 
                        FROM product_type as p,
                             tbl_manufacture as m
                        WHERE p.id = m.mid";
                $getdata = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($getdata);
                ?>
                <form method="POST" action="update.php?id=<?php echo $result['id']; ?>" enctype="multipart/form-data">
                    <!-- form input field -->
                    <div class="form-row">
                        <div class="form-group col-12">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            Product Type: <input type="text" name="producttype" required value="<?php echo $result['product_type']; ?>" class="form-control"/>
                        </div>
                        <div class="form-group col-12">
                            <label>Select Manufacture</label>
                            <select name="mid" class="form-control">
                                <option value="" selected><?php echo $result['manufacture_name']; ?></option>
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
                    <!-- form footer -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="action" value="updatetype">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->





