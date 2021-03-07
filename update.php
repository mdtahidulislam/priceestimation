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
        } else {
            
            echo "Data not updatedy..";
            header("Location: demo.php");
        }
        
    }


?>

