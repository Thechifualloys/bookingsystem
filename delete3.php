<?php
include 'connect9.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `payments` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "deleted successfully";
        header('location:display3.php');
    } else {
        die(mysqli_error($con));
    }
}
