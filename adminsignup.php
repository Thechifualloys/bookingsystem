<?php

$success = 0;
$user = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect7.php';
    $username = $_POST['username'];

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "select * from `admins` where username='$username'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $user = 1;
        } else {
            if ($password === $cpassword) {

                $sql = "insert into `admins`(username,password)
        values('$username','$password')";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    $success = 1;
                }
            } else {
                $invalid = 1;
            }
        }
    }

}

?>


<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <title>admin signup</title>
  <link rel="icon" href="images3/logo.png.png" type="image/png" />
  <meta name="viewport" content="width-device, initial-scale" />
  <link rel="stylesheet" href="adminsignup.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <script
    src="https://kit.fontawesome.com/bf0f5073ef.js"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png.png" type="image/png" />
</head>
<body>
  <div class="container">
    <form class="form" id="login" autocomplete="off" method="post" action="adminsignup.php">
      <h1 class="form__title">Create Account</h1>
      <div class="form__message form__message--error"></div>
      <div class="form__input-group">
        <input
          type="text"
          class="form__input"
          autocomplete="off"
          placeholder="Username"
          name="username"
        />
        <div class="form__input-error-message"></div>
      </div>




      <div class="form__input-group">
        <input
          type="password"
          class="form__input"

          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters"

          placeholder="Password"
          name="password"
          required
        />
      </div>


      <div class="form__input-group">
        <input
          type="password"
          class="form__input"

          placeholder="confirm password"
          name="cpassword"
        />
      </div>

      <button type="submit" class="form__button">signup</button>
  <p class="form__text" >
        <a class="form__link" href="adminlogin.php"
          >Already have an account? login</a
        >
      </p>


    </form>
    <?php
if ($user) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no sorry</strong> username already taken.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if ($invalid) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no sorry</strong> Password does not match.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong> you have successfully signed up.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

?>

  </div>
  <script src="adminsignup.js"></script>
</body>
