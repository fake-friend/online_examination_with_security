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
    $date=date('d-m-y h:i:s',time());
    $device_query="update instructor set devices='0' where gmail='$gmail'";
    mysqli_query($connection,$device_query);
    mysqli_query($connection, "UPDATE instructortrackloguser SET logouttime = $date WHERE email = '$gmail'");                                                                                                                                                                                                                                                              
    mysqli_close($connection);
}
session_unset();
session_destroy();
echo "<script> location.href='http://localhost/online_examination_with_security/instructor/instructorlogin.php'</script>";
?>