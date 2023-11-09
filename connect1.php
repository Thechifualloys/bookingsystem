<?php

$con = new mysqli('localhost', 'root', 'localhost@2022', 'useraccounts');

if (!$con) {
    die(mysqli_error($con));
}
