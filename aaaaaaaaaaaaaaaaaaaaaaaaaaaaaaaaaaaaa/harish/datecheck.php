<?php
$connecticon=mysqli_connect('localhost','root','','exam_management');
$query='select start_time from exams where instructor_id=102';
$result=mysqli_query($connecticon,$query);
$row=mysqli_fetch_array($result);
date_default_timezone_set("Asia/Kolkata");
$unique=date("Y-m-d").'T'.date("H:i");
echo ' TODAY TIME '.$unique;
echo('<br>');
echo ' database time '.$row[0];
if($row[0]<$unique)
{
    echo('hiiii');
}
if(strcmp($row[0],$unique)==0)
{
    echo('byeee');
}
?>