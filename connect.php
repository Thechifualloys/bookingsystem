<?php

$con = new mysqli('localhost', 'root', 'localhost@2022', 'signupdetails');

if (!$con) {
    die(mysqli_error($con));
}
