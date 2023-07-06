<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "shiksha_samiti";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con){
    die("Connection failed due to ". mysqli_connect_error());
}

?>