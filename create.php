<?php 
    // db connection
    include_once('config.php');

    // get user data & insert into DB
    $userData = count($_POST["producttype"]);
    if ($userData > 0) {
        for ($i=0; $i < $userData; $i++) { 
            $prodType   = $_POST["producttype"][$i];
            $query = "INSERT INTO product_type(product_type) VALUES ('$prodType')";
            $result = mysqli_query($conn, $query);
        }
        echo "Data inserted successfully..";
    } else {
        echo "Please Enter Product Type...";
    }
    header("Location: index.php"); // for stop form resubmission


/** 
 *  ################### for product input page ###################
*/

    if(isset($_POST['psubmit'])){
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

