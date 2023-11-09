<?php
session_start();
session_destroy();
header('location:http://localhost/registration/adminpage/landing.php');
