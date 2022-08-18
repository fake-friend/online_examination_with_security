<?php
$id=$_POST['instid'];
$instna=$_POST['instaname'];
$dateofbirth=$_POST['dob'];
$phonenum=$_POST['phone'];
$profpho=$_POST['inputGroupFile01'];
$fav1=$_POST['favques'];
$depart=$_POST['dept'];
$descrip=$_POST['postdes'];
$bat=$_POST['batch'];
$gen=$_POST['gend'];
$selcal=$_POST['cla'];
$userna=$_POST['un'];
$ema=$_POST['youremail'];
$pass=$_POST['confirm-psw'];
$h1="localhost";
$u='root';
$p='';
$db='online_examination_with_security';
$conn=mysqli_connect($h1,$u,$p,$db);
if($conn==false){
    die('could not connect:'.mysqli_error());
}
$v1='insert into registerfa(id,instructor_id,dob,phone_number,file,favques,department,post,batch,gender,class,username,gmail,password) values ("id","instna","dateofbirth","phonenum","profpho","fav1","depart","descrip","bat","gen","selcal","userna","ema","pass")';
mysqli_query($conn,$v1);
mysqli_rollback($conn);
echo"inserted";
mysqli_close($conn);
?>




