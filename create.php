<?php 
    // db connection
    include_once('config.php');

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'addtype') {
            $prodType   = $_POST["producttype"];
            $mid   = $_POST["mid"];
            $query = "INSERT INTO product_type(product_type, mid) VALUES ('$prodType', '$mid')";
            $result = mysqli_query($conn, $query);
            echo "Data inserted successfully..";
            header("Location: type.php");
        } else if($_POST['action'] == 'addproduct'){
            //get input fileds
            $prodname = $_POST['prodname'];
            $description = $_POST['descp'];
            $manufacture_name = $_POST['manufacture_name'];
            $prod_type = $_POST['prod_type'];
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


            // insert query
            $pquery = "INSERT INTO tbl_product (prodname, descp, manufacture_name, prod_type, generation, model, unitprice, wholesale, img) 
                    VALUES('$prodname', '$description', '$manufacture_name', '$prod_type', '$generation', '$model', '$unitprice', '$wholesaleprice', '$file_name')";
            $pquery_run = mysqli_query($conn, $pquery);
            echo "Data inserted successfully..";
            header("Location: product.php");
        } else if($_POST['action'] == 'addmanufacture'){
            $manufacture_name = $_POST['manufacture_name'];
            $mquery = "INSERT INTO tbl_manufacture(manufacture_name) VALUES ('$manufacture_name')";
            $mquery_run = mysqli_query($conn, $mquery);
            header("Location: manufacture.php");
        } else if ($_POST['action'] == 'usersubmit') {
            // get input field
            $manufacture = implode(" , ", $_POST['manufacture_name']);
            $prodtype = implode(" , ", $_POST['prod_type']) ;
            $prodname = implode(" , ", $_POST['prod_name']) ;

            // insert query
            $query = "INSERT INTO tbl_user_order (manufacture, producttype, productname) VALUES('$manufacture', '$prodtype', '$prodname')";
            $query_run = mysqli_query($conn, $query);
            header('Location: index.php');
        }
    }
?>

