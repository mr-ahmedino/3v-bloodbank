<?php
include('bloodconn.php');

$email_check = $_SESSION['Email'];

$ses_sql = mysqli_query($bloodconn,"SELECT Email FROM staff where Email = '$email_check'");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['Email'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    die();
}
?>