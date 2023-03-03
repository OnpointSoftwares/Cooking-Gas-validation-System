<?php
session_start();
if (!isset($_SESSION['currentuser'])){

header('location:index.php');
}
$currentuser_session=$_SESSION['currentuser'];
?>