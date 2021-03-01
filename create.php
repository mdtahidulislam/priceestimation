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
?>