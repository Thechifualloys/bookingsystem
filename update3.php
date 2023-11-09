<?php
include 'connect9.php';
$id = $_GET['updateid'];
$sql = "Select * from `payments` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$email = $row['email'];
$paymentstatus = $row['paymentstatus'];

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $paymentstatus = $_POST['paymentstatus'];

    $sql = "update `payments` set id=$id, email='$email',paymentstatus='$paymentstatus' where id=$id ";
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
    <label >email</label>
      <input type="text" class="form-control" placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email; ?> >
  </div>

  <div class="form-group">

<select class="cs-select cs-skin-border" name="paymentstatus">
<option value="" disabled selected>payment status</option>
<option value="fully paid" name="fully paid">fully paid</option>
<option value="partially paid" name="partially paid">partially paid</option>
<option value="not paid" name="not paid">not paid</option>
</select>
</div>

  <button class="btn btn-primary" name="submit">Submit</button>

</form>
    </div>


  </body>
</html>
