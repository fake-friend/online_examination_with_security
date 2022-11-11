<?php
include_once('../dbconfig.php');
if($connection)
{
    $people=$_GET['person'];
    $gmail=$_GET['gmail'];
    if(strcmp($people,'instructor')==0)
    {
        $query="select * from instructor where gmail='$gmail'";
        $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_array($result))
        {
            echo($row[12]);
        }
    }
    else
    {
        $query="select * from student where gmail='$gmail'";
        $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_array($result))
        {
            echo($row[1]);
        }
    }
} 
else
{
    die('something happened with database'.mysqli_connect_error());
}
?>