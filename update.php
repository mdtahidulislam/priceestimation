<?php include('header.php'); ?>

<?php 
    // connect DB
    //$id = $_GET['id'];
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    include_once('config.php');
    //$id = 'id';
    $query = "SELECT * FROM product_type WHERE id = '{$id}'";
    $getdata = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($getdata);
?>

<?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $prod_type = $_POST['producttype'];
        $query = "UPDATE product_type
        SET product_type = '$prod_type'
        WHERE id = $id
        ";
        $updaterow = mysqli_query($conn, $query);
        header("Location:index.php");
    }
?>


<!-- product type update form -->
<section class="pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form name="product_type" id="product_type" action="update.php" method="post">
                    <fieldset>
                    <legend>Product Type</legend>
                    <div id="dynamic_field">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                Product Type: <input type="text" name="producttype" required value="<?php echo $result['product_type']; ?>" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- 
                        <input type="button" name="add" id="add" class="btn btn-primary mr-3" value="Add More Type">
                        <button type="button" name="add" id="add" class="btn btn-primary">Add More Type</button> -->
                        <input type="hidden" name="action"  value="updatetype">
                        <input type="submit" class="btn btn-success" name="update" id="update" value="Update">
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>


    

<!-- footer area -->
<?php include('footer.php'); ?>