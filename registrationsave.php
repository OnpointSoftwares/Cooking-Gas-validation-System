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
$confirmPassword=$_POST['confirmPassword'];
if($confirmPassword==$Password)
{

}
$registration_query=mysqli_query($bd,"insert into users(username,password) values('$UserName','$Password')");
if ($registration_query){

/* set the session */
session_start();
$_SESSION['statusSuccess']="&check; Successful";
header('location:registration.php');
}

else{
$_SESSION['statusFail']="&times; Failed!! Try again";
header('location:registration.php');
}
?>