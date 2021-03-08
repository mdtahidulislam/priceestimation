<div class="modal fade" id="medit<?php echo urldecode($mrow['mid']); ?>" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-left" id="myModalLabel">Edit</h4> -->
                <h5 class="modal-title">Edit Manufacture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $mid = $mrow['mid'];
                $query = "SELECT * FROM tbl_manufacture WHERE mid = $mid";
                $getdata = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($getdata);
                ?>
                <form method="POST" action="update.php?mid=<?php echo $result['mid']; ?>" enctype="multipart/form-data">
                    <!-- form input field -->
                    <div class="form-row">
                        <div class="form-group col-12">
                            <input type="hidden" name="mid" value="<?php echo $mid; ?>">
                            Manufacture Name: <input type="text" name="manufacture_name" required value="<?php echo $result['manufacture_name']; ?>" class="form-control"/>
                        </div>
                    </div>
                    <!-- form footer -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="action" value="updatemanufacture">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->