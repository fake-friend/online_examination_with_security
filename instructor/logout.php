<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
$connection=mysqli_connect($h1,$u,$p,$db);
session_start();

if($connection)
{
    $gmail=$_SESSION['gmail'];
    $device_query="update instructor set devices='0' where gmail='$gmail'";
    mysqli_query($connection,$device_query);
    $date1=date('m/d/Y h:i:s a',time()); 
    mysqli_query($connection, "UPDATE instructortrackloguser SET logouttime = $date1 WHERE email = '$gmail'");                                                                                                                                                                                                                                                              
    mysqli_close($connection);
}
session_unset();
session_destroy();
echo "<script> location.href='http://localhost/online_examination_with_security/instructor/instructorlogin.php'</script>";
?>