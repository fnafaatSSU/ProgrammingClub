<?php
//Step1
$databaseHost = '3.tcp.ngrok.io';
$databaseName = 'phpmyadmin';
$databaseUsername = 'DSResearch';
$databasePassword = 'SalemState2021!!';
 $db = mysqli_connect('3.tcp.ngrok.io','phpmyadmin','SalemState2021!!','DSResearch')
 or die('Error connecting to MySQL server.');
 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 print 'PHP connect to MySQL Successfully'

?>



