<?php

$con = new mysqli('localhost', 'root', 'localhost@2022', 'bookings');

if (!$con) {
    die(mysqli_error($con));
}
