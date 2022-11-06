<?php
include_once('../dbconfig.php');
if(!$connection)
{
    die('could not connect:'.mysqli_connect_error());
} 
$iid=$_POST['iid'];
$iname=$_POST['iname'];
$idep=$_POST['idep'];
$sub=$_POST['sub'];
$scode=$_POST['scode'];
$year=$_POST['year'];
$s1="INSERT INTO instructorsubject(instructor_id,instructor_name,department,subject,subjectcode,Year) VALUES ('$iid','$iname','$idep','$sub','$scode','$year')";
$s2=mysqli_query($connection,$s1);
if($s2)
{
     header("location:subject.php");
}
else
{
     echo "error".$s1."sql error". mysqli_error($conn);
}
?>