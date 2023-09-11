<?php

$connection = mysql_connect('localhost','root');

mysqli_select_db($connection,"jayanth");

$email = $_POST['email']; 
$password = $_POST['password'];

$query = "INSERT INTO 'jayanth'('email','passwprd') VALUES ('$email','$password')";

mysqli_query($connection,$query);

echo "COMPLETE JOINING";

?>