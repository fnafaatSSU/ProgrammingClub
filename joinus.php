<?php

require('db_connection.php');

echo "Please wait....Loading ";

extract($_POST);

$sql = "INSERT into users (name,email,message,created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";
$success = $mysqli->query($sql);

if (!$success) 
{
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$conn->close();

?>