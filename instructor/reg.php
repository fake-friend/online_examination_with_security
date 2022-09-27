<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
$conn=mysqli_connect($h1,$u,$p,$db);
echo "Connected";
if($conn==false){
    die('could not connect:'.mysqli_connect_error());
} 
$instid=$_POST['instid'];
$instname=$_POST['instname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$file1=$_POST['file1'];
$favques=$_POST['favques'];
$dept=$_POST['dept'];
$postdes=$_POST['postdes'];
$batch=$_POST['batch'];
$gend=$_POST['gend'];
$cla=$_POST['cla'];
$un=$_POST['un'];
$youremail=$_POST['your_email'];
$confirm_psw=$_POST['confirm-psw'];
$v1="INSERT INTO instructor(instructor_id,instructor_name,dob,phone_number,favques,department,post,batch,gender,class,username,gmail,password) VALUES ('$instid','$instname','$dob','$phone','$favques','$dept','$postdes','$batch','$gend','$cla','$un','$youremail','$confirm_psw')";
mysqli_query($conn,$v1);
echo"inserted";
mysqli_close($conn);
?>




