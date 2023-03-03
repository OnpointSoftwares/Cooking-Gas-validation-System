<?php
include ('db.php');


if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from feedbacks where feedbackid='$id'";
mysqli_query($bd,$sql);
}

header ("location: messages.php");
?>