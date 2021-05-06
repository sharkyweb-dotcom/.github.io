<?php


if(!isset($_POST['submit']))
{
    echo "error, submit the form";
}

/*
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
# if(empty($name)||empty($visitor_email))
{
    echo "name, email: mandarory";
    exit;
} */ 

$quiz = $_POST['quiz'];
$quiz2 = $_POST['quiz2'];
$quiz3 = $_POST['quiz3'];


$email_from = "finnharcher@gmail.com";
$email_subject = "IT WORKED";
$email_body = "$quiz \n $quiz2 \n $quiz3";

$to = "finnharcher@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
?>