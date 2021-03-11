<?php 
    // db connection
    include_once('config.php');

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'updatetype') {
            $id = $_POST['id'];
            $prod_type = $_POST['producttype'];
            $query = "UPDATE product_type
            SET product_type = '$prod_type'
            WHERE id = $id
            ";
            $updaterow = mysqli_query($conn, $query);
            header("Location:type.php");
        } else if($_POST['action'] == 'updateproduct'){
            $pid = $_POST['pid'];
            $prodname = $_POST['prodname'];
            $description = $_POST['descp'];
            $generation = $_POST['generation'];
            $model = $_POST['model'];
            $unitprice = $_POST['unitprice'];
            $wholesaleprice = $_POST['wholesale'];
            // for image upload
            $permited = array('jpg', 'jpeg', 'png', 'gif', 'svg'); // img extension
            $file_name = $_FILES['img']['name']; // img name
            $file_size = $_FILES['img']['size']; // img size
            $file_tmp = $_FILES['img']['tmp_name']; // img temporary path link
            $folder = "uploads/";
            move_uploaded_file($file_tmp, $folder.$file_name);
            $puquery = "UPDATE tbl_product
            SET prodname = '$prodname',
                descp = '$description',
                generation = '$generation',
                model = '$model',
                unitprice = '$unitprice',
                wholesale = '$wholesaleprice',
                img = '$file_name'
            WHERE pid = $pid
            ";
            $updateprow = mysqli_query($conn, $puquery);
            header("Location: product.php");
        } else if($_POST['action'] == 'updatemanufacture'){
            $mid = $_POST['mid'];
            $manufacture_name = $_POST['manufacture_name'];
            $muquery = "UPDATE tbl_manufacture
            SET manufacture_name = '$manufacture_name'
            WHERE mid = $mid
            ";
            $updatemrow = mysqli_query($conn, $muquery);
            header("Location: manufacture.php");
        }
    }
?>

