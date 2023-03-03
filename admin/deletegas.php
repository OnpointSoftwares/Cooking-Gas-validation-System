<?php
include ('db.php');


if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from gases where gasid='$id'";
mysqli_query($bd,$sql);
}

header ("location: gases.php");
?>