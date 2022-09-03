<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
$conn=mysqli_connect($h1,$u,$p,$db);
echo "Connected";
if($conn==false){
    die('could not connect:'.mysqli_error());
} 
$firstname=$_POST['firstname'];
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$file1=$_POST['file1'];
$favques=$_POST['favques'];
$dept=$_POST['dept'];
$rno=$_POST['rno'];
$shift=$_POST['shift'];
$batch=$_POST['batch'];
$first1name=$_POST['first1name'];
$your_email=$_POST['your_email'];
$confirm_psw=$_POST['confirm-psw'];
$v1="INSERT INTO student(name,fathers_name,dob,phonenumber,file,favqus,department,roll number,batch,shift,semester,username,gmail,password) VALUES ('$firstname','$fname','$dob','$phone','$file1','$favques','$dept','$rno','$shift','$batch','$first1name','$your_email','$confirm_psw')";
mysqli_query($conn,$v1);
mysqli_rollback($conn);
echo"inserted";
mysqli_close($conn);
?>





