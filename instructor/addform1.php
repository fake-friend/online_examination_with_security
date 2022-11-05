<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
$conn=mysqli_connect($h1,$u,$p,$db);
//echo "Connected";
if($conn==false){
    die('could not connect:'.mysqli_connect_error());
} 
$iid=$_POST['iid'];
$iname=$_POST['iname'];
$idep=$_POST['idep'];
$sub=$_POST['sub'];
$scode=$_POST['scode'];
$year=$_POST['year'];
$s1="INSERT INTO instructorsubject(instructor_id,instructor_name,department,subject,subjectcode,Year) VALUES ('$iid','$iname','$idep','$sub','$scode','$year')";
$s2=mysqli_query($conn,$s1);
if($s2)
{
     header("location:subject.html.");
}
else
{
     echo "error".$s1."sql error". mysqli_error($conn);
}
