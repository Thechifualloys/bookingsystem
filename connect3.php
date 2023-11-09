<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'localhost@2022';
$DATABase = 'bookings';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABase);

if (!$con) {

    die(mysqli_error($con));
}
