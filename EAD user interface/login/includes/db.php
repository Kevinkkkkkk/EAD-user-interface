<?php
//1. open database connevtion
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ead";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// test if connection is ok
if (mysqli_connect_errno()) {
    die("database connect failed: " .
       mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")"
       );   
}
?>