<?php
session_start();
$connection=mysqli_connect("localhost","root","","online_examination_with_security");
if($connection)
{
    $email=$_SESSION['email'];
    $device_query="update student set devices='0' where email='$email'";
    mysqli_query($connection,$device_query);
    mysqli_close($connection);
}
session_unset();
session_destroy();
//header("location:studentlogin.php");
echo "<script> location.href='http://localhost/online_examination_with_security/student/studentlogin.php'</script>";
?>
