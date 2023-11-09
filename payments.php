<?php

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect3.php';

    $email = $_POST['email'];

    $amount = $_POST['amountperunit'];
    $roomunits = $_POST['roomunits'];

    $sql = "select * from `payments` where email='$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $user = 1;
        } else {
            $sql = "insert into `payments`(email,amountperunit,roomunits)
        values('$email','$amount','$roomunits')";
            $result = mysqli_query($con, $sql);
            if ($result) {

                $success = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    }

}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>payments</title>
    <link rel="stylesheet" href="bookmain.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png.png" type="image/png" />
  </head>

  <body>
    <!-- This is main Form Area Start ++ -->
    <div class="bf-container">
      <!-- Main form Body Start -->
      <div class="bf-body">
        <!-- Form haed -->
        <div class="bf-head">
          <h1>lipa na mpesa</h1>
          <p>safe and secure, we value your privacy</p>
        </div>
        <!-- Form haed -->

        <!-- Form Body Box -->
        <form class="bf-body-box" action="payments.php" method="post">
          <div class="bf-row">

            <div class="bf-col-6">
              <p>Email Address</p>
              <input
                type="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                name="email"
                id="email"
                placeholder="Email Address"
                required
              />
            </div>
          </div>

          <div class="bf-row">
          <select class="cs-select cs-skin-border" name="amountperunit">
        <option value="" disabled selected>Choose room type</option>
        <option value="9,900" name="bedsitter ">bedsitter ksh9,900</option>
        <option value="10,900" name="furnished hostel ">furnished hostel ksh10,900</option>
        <option value="13,500" name="one bedroom ">one bedroom ksh13,500</option>
        <option value="19,500" name="two bedroom ">two bedroom ksh19,500</option>


   </select>
   </div>

          <div class="bf-row">
            <div class="bf-col-12">
              <label for="hostel rooms">room units</label>
              <input
                type="number"
                min="1"
                value="1"
                max="10"
                value="10"
                name="roomunits"
              />
            </div>
          </div>

          <h1>Use the mpesa tillnumber below </h1>
         <h2>350774</h2>
         <h3>regikom hostels</h3>


          <div class="bf-row">
            <div class="bf-col-3">
              <input type="submit" class="bf-col-12" value="send " />
            </div>
          </div>
        </form>
        <!-- Form Body Box -->


        <?php
if ($user) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no sorry</strong> you can not pay twice! contact our surport desk for help.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong>your payment is being confirmed, we will contact you shortly. It might take 5 hours.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

?>
        <!-- This Is For Footer Start -->
        <div class="bf-footer">
          <li>
            <a  href="http://localhost/registration/signup1/homepage1.php"
              >back to home</a
            >
          </li>
        </div>
        <!-- This Is For Footer End -->
      </div>
      <!-- Main form Body End -->
    </div>
    <!-- This is main Form Area  End -->
  </body>
</html>
