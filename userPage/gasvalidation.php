<<?php 
include 'session.php';
 ?>
<html>
<head>
<title>Gas Validation System</title>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
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
<div  id="bookspan">
<span>CHECK YOUR GAS VALIDITY<span><br/><br/>
    <form method="post" action="gasvalidity.php">
       <input type="text" name="serial" placeholder="Enter Your Gas Serial Code" style="width:500px;height:70px;" autofocus/>
    <input type="submit" value="Check Validity" style="width:200px;height:50px;font-size:23px;"/>
    </form>
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
<p align="center">&copy 2022, All rights reserved 
</p>
</div>

</div>
</body>
</html>