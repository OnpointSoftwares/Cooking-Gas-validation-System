<?php
include ('session.php');
?>

<html>
<head>
<title>Gas Validation System</title>
<link href="astyle.css" rel="stylesheet"/>
</head>
<body>
<div class="wrapper">



<div class="content">
<!--content here-->
<div class="header">
<?php
   $date = date("M d, Y", strtotime ("+1 hour"));
   echo $date;
?>
<span class="logout">
    <a href="logout.php">log out</a></span>
</div>
<div class="container">
<div class="nav">
<!--navigation here-->
<ul>
    <a href="dashboard.php"><li>Dashboard</li></a>
    <a href="gases.php"><li>Gases</li></a>
    <a href="messages.php"><li>Messages</li></a>

</ul>    
</div>
<div class="primcontnt">
<!--primary content-->
<h4 align="center" style="text-decoration:underline;">GAS DETAILS</h4>
<?php
include('db.php');
$confirmation = $_GET ['bk'];
$result = mysqli_query($bd,"select * from gases where gasSerialNumber = '$confirmation'");

/*fetch rows from the database*/
while ($row = mysqli_fetch_array($result))
{
$confirmation = $row['gasSerialNumber'];
$gasname=$row['gasname'];
$gasweight=$row['gasweight'];

} 

echo '<table cellpadding="20px">';
echo '<tr>';
echo '<td>';
echo '<b>Serial:</b>'."\t".$confirmation.'<br/>';
echo '<br/>';
echo '<b>Gas Name:</b>'."\t".$gasname.'<br/>';
echo '<br/>';
echo '<b>Gas Weight:</b>'."\t".$gasweight.'<br/>';
echo '<br/>';
echo '<td class="code">';
echo '<span style="font-size: 50px;"><b>YOUR GAS SERIAL CODE IS:</b>'."\n".$confirmation.'</span>';
echo '</td>';
echo '</tr>';
echo '</table>';



?>
</div>
</div>
</div>






</div>
</body>
</html>