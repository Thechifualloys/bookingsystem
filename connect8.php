<?php

$con = new mysqli('localhost', 'root', 'localhost@2022', 'admin');

if (!$con) {
    die(mysqli_error($con));
}
