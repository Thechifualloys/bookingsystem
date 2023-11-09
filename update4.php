<?php
include 'connect9.php';
$id = $_GET['updateid'];
$sql = "Select * from `availability` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$roomtype = $row['roomtype'];
$availability = $row['availability'];

if (isset($_POST['submit'])) {

    $roomtype = $_POST['roomtype'];
    $availability = $_POST['availability'];

    $sql = "update `availability` set id=$id , roomtype='$roomtype', availability='$availability' where id=$id ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "updated successfully";
        // header('location:display.php');
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
    <label >rootype </label>
      <input type="text" class="form-control" placeholder="enter roomtype" name="roomtype" autocomplete="off" value=<?php echo $roomtype; ?> >
  </div>

  <div class="form-group">
    <label >availability </label>
      <input type="text" class="form-control" placeholder="availability" name="availability" autocomplete="off" value=<?php echo $availability; ?> >
  </div>

  <button class="btn btn-primary" name="submit">change</button>

</form>
    </div>


  </body>
</html>
