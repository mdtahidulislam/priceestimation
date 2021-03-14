<?php include('config.php'); ?>

<?php
    // manufacture selection
    if (isset($_POST['manu_id']) && !empty($_POST['manu_id'])) {
        $manu_id = $_POST['manu_id'];
        $sql = "SELECT * FROM product_type WHERE mid = $manu_id"; 
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            echo '<option value="">Select Type</option>';
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<option value="' .$row['id']. '">' .$row['product_type']. '</option>';
            }
        } else {
            echo '<option value="">Type Not Available</option>';
        }
    }

    // type selection
    if (isset($_POST['prod_type']) && !empty($_POST['prod_type'])) {
        $psql = "SELECT p.*, t.product_type
                      FROM tbl_product as p,
                           product_type as t
                      WHERE p.prod_type = t.product_type
                      "; 
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            echo '<option value="">Select Product</option>';
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<option value="' .$row['pid']. '">' .$row['prodname']. '</option>';
            }
        } else {
            echo '<option value="">Product Not Available</option>';
        }
    }
?>