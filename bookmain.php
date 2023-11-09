<?php

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect3.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];
    $roomtype = $_POST['roomtype'];
    $roomunits = $_POST['roomunits'];

    $sql = "select * from `bookdetails` where email='$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $user = 1;
        } else {
            $sql = "insert into `bookdetails`(username,email,checkindate,checkoutdate,roomtype,roomunits)
        values('$username','$email','$checkindate','$checkoutdate','$roomtype','$roomunits')";
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
    <title>Booking Form</title>
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
          <h1>Book Now</h1>
          <p>safe and secure, we value your privacy</p>
        </div>
        <!-- Form haed -->

        <!-- Form Body Box -->
        <form class="bf-body-box" action="bookmain.php" method="post">
          <div class="bf-row">
            <div class="bf-col-6">
              <p>Your username</p>
              <input
                type="text"
                name="username"
                id="username"
                placeholder="Your Name"
                required
              />
            </div>
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
            <div class="bf-col-6">
              <p>Check In Date</p>
              <input type="date" name="checkindate" id="date" min="2022-11-14" required />
            </div>
            <div class="bf-col-6">
              <p>Chech Out Date</p>
              <input type="date" name="checkoutdate" id="date" min="2022-12-14" required />
            </div>
          </div>

          <div class="bf-row">
          <select class="cs-select cs-skin-border" name="roomtype">
        <option value="" disabled selected>Choose room type</option>
        <option value="bedsitter" name="bedsitter">bedsitter</option>
        <option value="furnished hostel" name="furnished hostel">furnished hostel</option>
        <option value="one bedroom" name="one bedroom">one bedroom</option>
        <option value="two bedroom" name="two bedroom">two bedroom</option>


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

          <div class="bf-row">
            <div class="bf-col-3">
              <input type="submit" class="bf-col-12" value="book" />
            </div>
          </div>
        </form>
        <!-- Form Body Box -->


        <?php
if ($user) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no sorry</strong> you can not book twice! contact our surport desk for help.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong> you have successfully booked the hostel, we will contact you shortly.
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
