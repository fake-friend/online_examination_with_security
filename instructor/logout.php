<?php
include_once("../dbconfig.php");
session_start();
if ($connection) 
{
    $gmail = $_SESSION['gmail'];
    $device_query = "update instructor set devices='0' where gmail='$gmail'";
    mysqli_query($connection, $device_query);
    mysqli_close($connection);
}
session_unset();
session_destroy();
header('location:instructor-login.php');
?>