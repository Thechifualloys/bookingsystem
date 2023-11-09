<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `registration` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$gender = $row['gender'];
$email = $row['email'];
$number = $row['number'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "update `registration` set id=$id, username='$username',gender='$gender',email='$email',number='$number',password='$password' where id=$id ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
        header('location:display.php');
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

  <div class="form__input-groupp">
        <label for="gender">Gender</label>
        <div>
          <label for="male" class="radio-inline"
            ><input type="radio" name="gender" value="m" id="male" />Male</label
          >
          <label for="female" class="radio-inline"
            ><input
              type="radio"
              name="gender"
              value="f"
              id="female"
            />Female</label
          >
          <label for="others" class="radio-inline"
            ><input
              type="radio"
              name="gender"
              value="o"
              id="others"

            />Others</label
          >
          <div class="form__input-error-message"></div>
        </div>
      </div>
  <div class="form-group">
    <label >email</label>
      <input type="text" class="form-control" placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email; ?> >
  </div>
  <div class="form-group">
    <label >phone number</label>
      <input type="text" class="form-control" placeholder="enter your phone number" name="number" autocomplete="off" value=<?php echo $number; ?> >
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
