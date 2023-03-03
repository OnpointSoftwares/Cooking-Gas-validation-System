<?php
include ('session.php');
?>

<html>
<head>
<title>Gas Validation System</title>
<link href="astyle.css" rel="stylesheet"/>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Print Ticket</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 500px; font-size:7px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

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
<p><span  style="border:2px inset #ECF1FD; padding:10px; background-color:burlywood;"><a href="javascript:Clickheretoprint()">Print Receipt</a></span>

<?php

/*get the query string id from the view student page*/
$Serialcode = $_POST ['serialcode'];
echo '<span  style="border:2px inset #ECF1FD; padding:10px; background-color:burlywood;"><a href="gasdetails.php?bk='.$Serialcode.'">Gas Details</a></span>
</p>';
?>
<br/>
<div id="print_content">
<img src="images/lpg-gas1.jpg" width="200px" height="100px"/>
<br/>
<br/>
<span align="center" style="text-decoration:underline; font-size:20px; padding-left:38px;"><b>DETAILS</b></span>

<?php
include ('db.php');

/*get the query string id from the view student page*/
$Serialcode = $_POST ['serialcode'];

/*query the database (using the select sql statement)*/
/*$result = mysql_query("select * from students where StudentID = '$id' ");*/
$result = mysqli_query($bd,"select * from gases where gasSerialNumber= '$Serialcode' ");

/*fetch rows from the database*/
while ($row = mysqli_fetch_array($result))
{
$confirmation = $row['gasSerialNumber'];
$name=$row['gasname'];
$weight=$row['gasweight'];
} 


echo '<table cellpadding="7px">';
echo '<tr>';
echo '<td>';
echo '<b>SERIAL CODE:</b>'."\t".$confirmation.'<br/>';
echo '<br/>';
echo '<b>Gas Name:</b>'."\t".$name.'<br/>';
echo '<br/>';
echo '<b>WEIGHT:</b>'."\t".$weight.'<br/>';
echo '<br/>';
echo '<br/>';
echo '</td>';
echo '</tr>';
echo '</table>';


?>
</div>

</div>
</div>
</div>






</div>
</body>
</html>