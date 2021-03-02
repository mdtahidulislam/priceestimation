<?php
// db connection
include_once('config.php');
    $pdata = count($_POST["prodname"]);
    if ($pdata > 0) {
    //get input fileds
    $prodname = $_POST['prodname'];
    $description = $_POST['descp'];
    $generation = $_POST['generation'];
    $model = $_POST['model'];
    $unitprice = $_POST['unitprice'];
    $wholesaleprice = $_POST['wholesaleprice'];
    // insert query
    $pquery = "INSERT INTO tbl_product (prodname, descp,  generation, model, unitprice, wholesaleprice) 
              VALUES('$prodname', '$description', '$model', '$unitprice', '$wholesaleprice')";
    $pquery_run = mysqli_query($conn, $pquery);
     echo "Data inserted successfully..";
    } else {
      echo "Please Enter Product...";
    }
    header("Location: product.php"); // for stop form resubmission
?>

