<?php

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect3.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];
    $roomunits = $_POST['roomunits'];

    $sql = "select * from `bookdetails` where email='$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            $user = 1;
        } else {
            $sql = "insert into `bookdetails`(username,email,checkindate,checkoutdate,roomunits)
        values('$username','$email','$checkindate','$checkoutdate','$roomunits')";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking3.css">
    <title>Regikom Booking</title>
    <link rel = "icon" href = "images2/logo.png.png" type = "image/png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<script src="https://kit.fontawesome.com/bf0f5073ef.js" crossorigin="anonymous"></script>
<link rel="icon" href="images/logo.png.png" type="image/png" />
</head>

<body class="main_bg">








    <div class="form">
        <div class="form-text">
            <h2>Book Now</h2>
            <p>Safe and secure, we value your privacy.</p>
        </div>
        <div class="main-form">

         <form action="booking.php" method="post">
         <div class="book">
            <form class="book-form" action="booking.php" method="post">
                <div>
                    <span>Your username ?</span>
                    <input type="text" name="username" placeholder="Write your username here..." required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="email"  placeholder="Write your email here..." required>
                </div>
                <div class="form-item">
                    <label for="checkin-date">check in date: </label>
                    <input type= "date" id="date" name="checkindate" min="2022-10-27">


                </div>
                <div class = "form-item">
                    <label for = "checkout-date">check out date: </label>
                    <input type = "date" id="date" name="checkoutdate" min="2022-10-27">
                </div>
                <div class = "form-item">
                    <label for = "hostel rooms">room units</label>
                    <input type = "number" min = "1" value = "1" max = "10" value = "10"  name="roomunits">

                </div>
                <div class = "form-item">
                    <input type = "submit" class = "btn" value = "book">
                </div>
                <li><a href="http://localhost/registration/signup1/homepage1.php">back to home</a></li>

            </div>
            </form>
            <?php
if ($user) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no sorry</strong> you cant book twice! contact our surport desk for help.
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


        </div>



        </div>
    </div>
    <script src="booking3.js"></script>

 <script>



 </script>

</body>

</html>
