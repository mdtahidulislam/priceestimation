<?php include('config.php'); ?>

<?php
    // type selection based on manufacture
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

    // product selection based on type
    if (isset($_POST['type_id']) && !empty($_POST['type_id'])) {
        $type_id = $_POST['type_id'];
        $psql = "SELECT * FROM tbl_product WHERE prod_type = $type_id"; 
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