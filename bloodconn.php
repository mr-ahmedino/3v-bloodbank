<?php
$servername="localhost";
$username="root";
$password="";
$dbname="donorinfo";
$bloodconn=new mysqli($servername,$username,$password,$dbname);
if(mysqli_connect_error()){
    die("Failed to connect with MySQL:".mysqli_error());
}
?>