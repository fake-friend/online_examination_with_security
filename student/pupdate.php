<?php 
include_once('../dbconfig.php');
session_start();
$_SESSION['gmail']=$email;
if($connection)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $pass=$_POST['confirm-psw'];
        $device_query="UPDATE student SET pass_word=$pass WHERE gmail='$email'";
        mysqli_query($connection,$device_query);
        mysqli_close($connection);
        header("location:student-login.php");
    }
    else{

        
    }
}
?>