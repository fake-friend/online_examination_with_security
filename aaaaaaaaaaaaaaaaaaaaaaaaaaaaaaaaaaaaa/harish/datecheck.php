<?php

date_default_timezone_set("Asia/Kolkata");
$unique=date("Y-m-d").date("h:i");
echo $unique;
$yes=date('2022-11-08 22:15');
echo $yes;
if(strcmp($unique,$yes)==0)
{
    echo 'now';
}
else
{
    echo 'not now';
}
?>