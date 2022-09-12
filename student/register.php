<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
$conn=mysqli_connect($h1,$u,$p,$db);
if($conn==false)
{
    die('could not connect:'.mysqli_connect_error());
} 
echo "Connected";
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$favques=$_POST['favques'];
$gender=$_POST['gender'];
$rno=$_POST['rno'];
$shift=$_POST['shift'];
//$file1=$_POST['file1'];
$dept=$_POST['dept'];
$batch=$_POST['batch'];
$uname=$_POST['uname'];
$your_email=$_POST['your_email'];
$confirm_psw=$_POST['confirm-psw'];
$v1="INSERT INTO student(student_name,dob,phonenumber,favqus,department,roll_number,batch,shift,username,gmail,pass_word) 
VALUES('$sname','$dob','$phone','$favques','$gender','$rno','$shift',$dept','$batch','$uname','$your_email','$confirm_psw')";
mysqli_query($conn,$v1);
echo "inserted"; 
mysqli_close($conn);
?>