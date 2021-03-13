<?php
    session_start();
?>
<?php include('header.php'); ?>
<?php include('config.php'); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="create.php" method="post" enctype="multipasrt/form-data">
                    <div class="form-group mt-3">
                        <label>Select Manufacture</label>
                        <select multiple name="manufacture_name[]" class="form-control" id="manufacture-name">
                            <option value="">Select Manufacture</option>
                            <?php
                                $msql = "SELECT manufacture_name FROM tbl_manufacture";
                                $msql_run = mysqli_query($conn, $msql);
                                while($mrow = mysqli_fetch_assoc($msql_run)){
                                    echo "<option value='" .$mrow['manufacture_name']. "'>" .$mrow['manufacture_name']. "</option>";
                                };
                            ?>
                        </select>
                    </div>
                    <div class="form-group prod-type">
                        <label>Select Type</label>
                        <select name="prod_type[]" class="form-control" id="prod-type" multiple>
                            <option value="">Select Type</option>
                            <?php
                                $tsql = "SELECT product_type FROM product_type";
                                $tsql_run = mysqli_query($conn, $tsql);
                                while($trow = mysqli_fetch_assoc($tsql_run)){
                                    echo "<option value='" .$trow['product_type']. "'>" .$trow['product_type']. "</option>";
                                };
                            ?>
                        </select>
                    </div>
                    <div class="form-group prod-name">
                        <label>Select Product</label>
                        <select name="prod_name[]" class="form-control" id="prod-name" multiple>
                            <option value="">Select Product</option>
                            <?php
                                $psql = "SELECT prodname FROM tbl_product";
                                $psql_run = mysqli_query($conn, $psql);
                                while($prow = mysqli_fetch_assoc($psql_run)){
                                    echo "<option value='" .$prow['prodname']. "'>" .$prow['prodname']. "</option>";
                                };
                            ?>
                        </select>
                    </div>
                    <div class="form-group user-submit mb-3">
                        <button type="submit"  class="btn btn-primary">Submit</button>
                        <input type="hidden" name="action" value="usersubmit">
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>

<?php include('footer.php'); ?>