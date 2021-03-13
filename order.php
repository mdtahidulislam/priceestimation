<?php
    session_start();
?>
<?php include('header.php'); ?>
<?php include('config.php'); ?>

<?php
    //$manufacture = $_SESSION['manufacture'];
    $query = "SELECT manufacture FROM tbl_user_order";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
?>
<table>
    <tr>
        <td><?php echo $row['manufacture']; ?></td>
    </tr>
</table>
<?php        
        }
    }
    
?>

<?php include('footer.php'); ?>