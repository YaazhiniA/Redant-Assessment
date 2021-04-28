<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'gatepasssystem'
$conn = mysqli_connect($servername, $username, $password."$dbname");
if(!$conn){
    die('unable to connect to database');
}
   
?>   