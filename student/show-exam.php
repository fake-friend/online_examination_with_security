<?php
include_once('../dbconfig.php');
$connection1=mysqli_connect('localhost','root','','exam_management');
if($connection1 && $connection)
{
    
}
else
{
    die('something went wrong with database'.mysqli_connect_error());
}
?>