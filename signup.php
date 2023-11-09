<?php
include 'connect1.php';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into `studentdetails` (firstname,lastname,gender,email,number,username,password)
  values('$firstname','$lastname','$gender','$email','$number','$username','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header('location:homepage.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <title>Login / Sign Up Form</title>
  <link rel="icon" href="images3/logo.png.png" type="image/png" />
  <meta name="viewport" content="width-device, initial-scale" />
  <link rel="stylesheet" href="signup.css" />
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
</head>
<body>
  <div class="container">
    <form class="form" id="login">
      <h1 class="form__title">Login</h1>
      <div class="form__message form__message--error"></div>
      <div class="form__input-group">
        <input
          type="text"
          class="form__input"
          autofocus
          placeholder="Username or email"
        />
        <div class="form__input-error-message"></div>
      </div>
      <div class="form__input-group">
        <input
          type="password"
          class="form__input"
          autofocus
          placeholder="Password"
        />
        <div class="form__input-error-message"></div>
      </div>
      <a
        href="file:///C:/Users/pc/regikom%20test%20%20code/booking%20page/index.html"
      >
        <button class="form__button" type="submit">Continue</button></a
      >
      <p class="form__text">
        <a href="#" class="form__link">Forgot your password?</a>
      </p>
      <p class="form__text">
        <a class="form__link" href="./" id="linkCreateAccount"
          >Don't have an account? Create account</a
        >
      </p>
    </form>
    <form
      method="post"
      class="form form--hidden"
      id="createAccount"
    >
      <h1 class="form__title">Create Account</h1>
      <div class="form__message form__message--error"></div>
      <div class="form__input-group">
        <input
          type="text"
          minlength="2"
          maxlength="20"
          id="signupUsername"
          class="form__input"
          autofocus
          placeholder="first name"
          name="firstname"
        />
      </div>
      <div class="form__input-group">
        <input
          type="text"
          minlength="2"
          maxlength="20"
          id="signupUsername"
          class="form__input"
          autofocus
          placeholder="last name"
          name="lastname"
        />
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
        </div>
      </div>

      <div class="form__input-group">
        <input
          type="email"
          class="form__input"
          autofocus
          placeholder="email"
          name="email"
        />
      </div>
      <div class="form__input-group">
        <input
          type="numbers"
          class="form__input"
          autofocus
          placeholder="phone number"
          name="number"
        />
      </div>
      <div class="form__input-group">
        <input
          type="text"
          minlength="2"
          maxlength="20"
          id="signupUsername"
          class="form__input"
          autofocus
          placeholder="Username"
          name="username"
        />
      </div>
      <div class="form__input-group">
        <input
          type="password"
          class="form__input"
          autofocus
          placeholder="Password"
          name="password"
        />
      </div>
      <div class="form__input-group">
        <input
          type="password"
          class="form__input"
          autofocus
          placeholder="Confirm password"
        />
        <div class="form__input-error-message"></div>
      </div>
      <button class="form__button" name="submit">submit</button>
      <p class="form__text">
        <a class="form__link" href="./" id="linkLogin"
          >Already have an account? log-in</a
        >
      </p>
    </form>
  </div>
  <script src="signup.js"></script>
</body>
