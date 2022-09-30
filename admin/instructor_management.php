<?php
include_once('../dbconfig.php');
if($connection)
{

}
else
{
    die('could not connect with database'.mysqli_connect_error());
}
?>