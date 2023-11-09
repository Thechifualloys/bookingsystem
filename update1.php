<?php
include 'connect8.php';
$id = $_GET['updateid'];
$sql = "Select * from `admins` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];

$password = $row['password'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];

    $sql = "update `admins` set id=$id, username='$username',password='$password' where id=$id ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
        header('location:display1.php');
    } else {
        die(mysqli_error($con));
    }
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

    <title>user administration</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >username</label>
      <input type="text" class="form-control" placeholder="enter your username" name="username" autocomplete="off" value=<?php echo $username; ?>>
  </div>


  <div class="form-group">
    <label >password</label>
      <input type="text" class="form-control" placeholder="enter your password" name="password" autocomplete="off" value=<?php echo $password; ?> >
  </div>
  <button class="btn btn-primary" name="submit">Update</button>

</form>
    </div>


  </body>
</html>
