<html>
<head>
<title>unique transport company</title>
<link href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="wrapper">

<div class="header">
<!--header here-->
<!--<span class="hspan">UTC<small>.com</small></span><br/>-->
<span align="center"><img src="images/lpg-gas1.jpg" width="400px" height="150px"/></span>
<div id="menu">
    <table cellpadding="15px" align="center">
        <tr>
<td><a href="index.php"><strong>HOME</strong></a></td>
<td><a href="gasvalidation.php"><strong>GAS VALIDATION</strong></a></td>
<td><a href="contactus.php"><strong>CONTACT US</strong></a></td>
<td><a href="aboutus.php"><strong>ABOUT US</strong></a></td>
</tr>
</table>
</div>
</div>

<div class="content">
<!--content here-->
<div class="bkcode">
<?php
include ('db.php');

$bcode = $_POST['serial'];
/*query the database (using the select sql statement)*/
$result = mysqli_query($bd,"select * from gases where gasSerialNumber ='$bcode' ");
$rowcount= mysqli_num_rows($result);

if($rowcount > 0){

/*fetch rows from the database*/
while ($row = mysqli_fetch_array($result))
{
$confirmation = $row['gasSerialNumber'];
$name=$row['gasname'];
$weight=$row['gasweight'];

} 

echo '<table cellpadding="20px">';
echo '<tr>';
echo '<td>';
echo '<b>Gas Serial Number:</b>'."\t".$confirmation.'<br/>';
echo '<br/>';
echo '<b>Gas Name:</b>'."\t".$name.'<br/>';
echo '<br/>';
echo '<b>Gas Weight:</b>'."\t".$weight.'<br/>';
echo '<br/>';
echo '<td class="code">';
echo '<span style="font-size: 50px;"><b>YOUR GAS SERIAL IS:</b>'."\n".$confirmation.'</span><br><p style="color:green;font-size:70px;border:3px solid green">&check; Successful</p>';
echo '</td>';
echo '</tr>';
echo '</table>';
}
else{
echo "Not Found!!";
echo "<p style='color:red;font-size:70px;border:3px solid red;padding:40px'>&times; Failed!!</p>";
}


?>
</div>
<div id="conv">
    <table cellpadding="30px" align="center" id="convtab">
        <tr>
            <td><a href="customercare.php">CUSTOMER CARE</a></td>
            <td><a href="faqs.php">FAQs</a></td>
            <td><a href="termsnconditions.php">TERMS AND CONDITIONS</a></td>
            <td>FOLLOW AND CONTACT US ON:&nbsp
                    <a href="#"><img src="images/fb.jpeg"/></a>&nbsp&nbsp
                    <a href="#"><img src="images/twitter.jpg"/></a>&nbsp&nbsp
                    <a href="#"><img src="images/instagram.png"/></a></td>
       </tr>
       </table>             
                
</div>


</div>




<div class="footer">
<!--footer here-->
<p align="center">&copy 2022, All rights reserved <br/>
</p>
</div>

</div>
</body>
</html>