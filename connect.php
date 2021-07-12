<?php

$localhost = "localhost";
$username = "admin";
$password = "admin";
$dbname = "samueldb";

$con = new mysqli($localhost, $username, $password, $dbname);

if ($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
