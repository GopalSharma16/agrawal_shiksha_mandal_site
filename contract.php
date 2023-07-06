<?php

include 'config.php';

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_queries (Name,	Email,	Phone,	Company_Name,	Subject,	Message) VALUES ('$name', '$email', '$phone', '$company', '$subject', '$message');";

    if($con->query($sql)==true){
        header("location: ./index-2.html");
    }
}


?>