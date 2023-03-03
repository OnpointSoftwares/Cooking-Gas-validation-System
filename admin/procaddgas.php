<?php
include('db.php');

//handle first form - adding new origin
if (isset($_POST['Origin'])){

$name=$_POST['name'];
$weight=$_POST['weight'];
$serial=$_POST['serial'];
$res=mysqli_query($bd,"INSERT INTO gases (gasname, gasweight,gasSerialNumber)
VALUES
('$name','$weight','$serial')");
header("location: addroute.php");
if($res)
{
	header("location: gases.php");
}
else
{
	header("location: addroute.php");
}


}




//handle second form - adding new destination
if (isset($_POST['Destination'])){

$orgid=$_POST['originid'];
$dest=$_POST['destination'];

$res=mysqli_query($bd,"INSERT INTO gases (gasname, gasweight,gasSerialNumber)
VALUES
('$gasname','$gasweight','$gasSerialNumber')");
header("location: addroute.php");

}








//handle third form - adding route details

if (isset($_POST['RouteDetails'])){

$type=$_POST['type'];
$route=$_POST['route'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$update=mysql_query("INSERT INTO route (type, price, numseats, route, time)
VALUES
('$type','$price','$seat','$route','$time')");
header("location: route.php");

}
?>
