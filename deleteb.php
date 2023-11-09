<?php
include 'connect4.php';
if (isset($_GET['cancelid'])) {
    $id = $_GET['cancelid'];

    $sql = "delete from `bookdetails` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "cancelled successfully";
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
