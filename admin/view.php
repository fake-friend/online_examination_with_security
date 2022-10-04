<?php
include_once('../dbconfig.php');
if($connection)
{
    $fellow=$_GET['fellow'];
    $query='select * from'.$fellow;
    $result=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($result))
    {
        
    }
} 
else
{
    die('something happened with database'.mysqli_connect_error());
}
?>