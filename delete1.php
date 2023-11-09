<?php
include 'connect8.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `admins` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "deleted successfully";
        header('location:display1.php');
    } else {
        die(mysqli_error($con));
    }
}
