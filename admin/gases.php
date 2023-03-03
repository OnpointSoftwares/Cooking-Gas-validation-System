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
    <a href="messages.php"><li>Messages</li></a>

</ul>    
</div>
<div class="primcontnt">
<!--primary content-->
<h2 align="center"> Gas Validation System</h2>
<a style="color:blue; text-decoration:underline;" href="addgas.php">Add Gas</a>
<form method="post" action="findgases.php">
    <strong>Find Gas:</strong><br/>
    <input type="text" name="serialcode" placeholder="Enter Gas Serial Number " style="width:200px;height:50px;border:solid 1px;" autofocus/>
</form>
<table cellpadding="5" cellspacing="5" id="msgtable" border="2px">
<thead>
<tr>
<th align="left"><b> Gas Code </b></th>
<th align="left"><b> Gas Name </b></th>
<th align="left"><b> Gas Weight </b></th>
<th><b> Action</b> </th>
								
</tr>
</thead>
<tbody>
<?php

/*include the file the holds the database connection details*/
include('db.php');

/*query the database (using the select sql statement)*/
$result = mysqli_query($bd,"SELECT * FROM gases");

/*fetch rows from the database*/
while($row = mysqli_fetch_array($result))
{


									
echo '<td>'.$row['gasSerialNumber'].'</td>';
echo '<td>'.$row['gasname'].'</td>';
echo '<td>'.$row['gasweight'].'</td>';							
echo '<td style="background-color:#f9341e; color: white;"> <a href="deletegas.php?id='.$row['gasid'].'" title="Click to Delete">DELETE</a></td>';
echo '</tr>';
}
?> 
</tbody>
</table>

</div>
</div>
</div>






</div>
</body>
</html>