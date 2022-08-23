<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
if($conn==false){
    die('could not connect:'.mysqli_error());
} 

$instid=$_POST['instid'];
$instname=$_POST['instaname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$inputGroupFile01=$_POST['inputGroupFile01'];
$favques=$_POST['favques'];
$dept=$_POST['dept'];
$postdes=$_POST['postdes'];
$batch=$_POST['batch'];
$gend=$_POST['gend'];
$cla=$_POST['cla'];
$un=$_POST['un'];
$youremail=$_POST['youremail'];
$confirm-psw=$_POST['confirm-psw'];


$v1='insert into instructor(id,instructor_id,dob,phone_number,file,favques,department,post,batch,gender,class,username,gmail,password) values ('$instid','$instname','$dob','$phone','$inputGroupFile01','$favques','$dept','$postdes','$batch','$gend','$cla','$un','$youremail','$confirm-psw')';
mysqli_query($conn,$v1);
mysqli_rollback($conn);
echo"inserted";
mysqli_close($conn);
?>




