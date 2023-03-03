<?php
include ('session.php');

?>


<?php
  $db = new mysqli('localhost','root','','utcdb');
  
  $query = "SELECT id,origin FROM origin";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $origins[] = array("id" => $row['id'], "val" => $row['origin']);
  }

  $query = "SELECT id, originid, destination FROM destination";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $destination[$row['originid']][] = array("id" => $row['id'], "val" => $row['destination']);
  }

  $Origins = json_encode($origins);
  $Destination = json_encode($destination);


?>


<html>
<head>
<title>Gas Validation System</title>
<link href="astyle.css" rel="stylesheet"/>
</head>
<body onload='loadorigins()'>
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

<h4>Add New Gas</h4>
<?php $SESSION['serial']=rand(); ?>
<form action="procaddgas.php" method="post">
	GasName:<br><input type="text" name="name" style="width:200px;height:30px;"><br>
  Gas Weight:<br><input type="text" name="weight" style="width:200px;height:30px;"><br>
	Gas Serial Number:<br><input type="text" name="serial" value="<?php echo 'AX'.rand();?>" id="serial" style="width:200px;height:30px;"><br>
	<input type="submit" value="Submit" name="Origin" style="margin-top: 20px">
</form>
<hr>
</div>
</div>

</body>
</html>