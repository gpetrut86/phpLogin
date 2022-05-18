<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "phpProject";


$conn =  mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);


if (!$conn) {
    die("Cnnection failed: " . mysqli_connect_errno());
}
