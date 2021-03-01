<?php
    // connect db
    include_once('config.php');
    $id = $_GET['id'];
    $query = "DELETE FROM product_type WHERE id=$id";
    $query_run = mysqli_query($conn, $query);
    header("Location: index.php");
    
?>
