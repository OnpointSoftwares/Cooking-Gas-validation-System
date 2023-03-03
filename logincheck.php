        <?php
        include ('db.php');
/*$a="administrator";
$b="12345";
$username=$_POST['username'];
$password=$_POST['password'];
if($username==$a && $password==$b)
{
    header("location:dashboard.php");
}*/
    $UserName=$_POST['Username'];
$Password=$_POST['Password'];

$login_query=mysqli_query($bd,"select * from users where username='$UserName' and password='$Password'");

$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);


if ($count > 0){

/* set the session */
session_start();
$_SESSION['currentuser']=$row['username'];
header('location:userPage/');
}

else{
   ?>
                <!-- Show an error alert -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> Incorrect information.
                </div>
                <?php

}
?>