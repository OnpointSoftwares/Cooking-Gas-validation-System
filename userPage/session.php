<?php
session_start();
if (!isset($_SESSION['currentuser'])){

header('location:../login.php');
}
$currentuser_session=$_SESSION['currentuser'];
?>