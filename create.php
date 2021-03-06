<?php 
    // db connection
    include_once('config.php');

    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'addtype') {
            $prodType   = $_POST["producttype"];
            $query = "INSERT INTO product_type(product_type) VALUES ('$prodType')";
            $result = mysqli_query($conn, $query);
            echo "Data inserted successfully..";
            header("Location: index.php");
        } else if($_POST['action'] == 'addproduct'){
            //get input fileds
            $prodname = $_POST['prodname'];
            $description = $_POST['descp'];
            $generation = $_POST['generation'];
            $model = $_POST['model'];
            $unitprice = $_POST['unitprice'];
            $wholesaleprice = $_POST['wholesale'];
            // insert query
            $pquery = "INSERT INTO tbl_product (prodname, descp,  generation, model, unitprice, wholesale) 
                    VALUES('$prodname', '$description', '$generation', '$model', '$unitprice', '$wholesaleprice')";
            $pquery_run = mysqli_query($conn, $pquery);
            echo "Data inserted successfully..";
            header("Location: product.php");
        }
        
    }


?>

