<?php
session_start();
$connection=mysqli_connect("localhost","root","","online_examination_with_security");
if($connection)
{
    $gmail=$_SESSION['gmail'];
    $device_query="UPDATE student SET devices=0 WHERE gmail='$gmail'";
    mysqli_query($connection,$device_query);
    mysqli_close($connection);
}
session_unset();
session_destroy();
header("location:studentlogin.php");
?>
