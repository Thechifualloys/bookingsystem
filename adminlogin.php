<?php

$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'connect7.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from `admins` where username='$username' and password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $login = 1;
            session_start();
            $_SESSION['username'] == $username;
            header('location:index.php');
        } else {

            $invalid = 1;
        }

    }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="adminsignup.css" />
    <title>Login page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png.png" type="image/png" />
  </head>
  <body>

  <?php
if ($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong> you are successfully logged in..
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>


<?php
if ($invalid) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> invalid username or password!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>



<div class="container">
   <form action="adminlogin.php" method="post">
   <h1 class="form__title">Login to admin panel</h1>
   <div class="form__message form__message--error"></div>
  <div class="form__input-group">
    <label class="form-label">username</label>
    <input type="text" class="form__input"
          autofocus placeholder="Enter your username" name="username" autocomplete="off">
          <div class="form__input-error-message"></div>
    </div>
  <div class="form__input-group">
    <label class="form-label">Password</label>
    <input type="password" class="form__input"
          autofocus placeholder="Enter your password" name="password" autocomplete="off">
          <div class="form__input-error-message"></div>
  </div>

  <button type="submit" class="form__button">login</button>
  <p class="form__text" >
        <a
          >not an admin? contact chiefadmin</a
        >
      </p>
</form>

   </div>
   <script src="adminsignup.js"></script>
  </body>
</html>
