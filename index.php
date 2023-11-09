<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "insert into `registration` (username,gender,email,number,password)
  values('$username','$gender','$email','$number',' $password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
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
      <input type="text" class="form-control" placeholder="enter your username" name="username" autocomplete="off">
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
      <input type="text" class="form-control" placeholder="enter your email" name="email" autocomplete="off" >
  </div>
  <div class="form-group">
    <label >phone number</label>
      <input type="text" class="form-control" placeholder="enter your phone number" name="number" autocomplete="off" >
  </div>
  <div class="form-group">
    <label >password</label>
      <input type="text" class="form-control" placeholder="enter your password" name="password" autocomplete="off" >
  </div>
  <button class="btn btn-primary" name="submit">Submit</button>

</form>
    </div>


  </body>
</html>
