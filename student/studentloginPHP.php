<?php 
include('dbconnection.php');
if(isset($_POST['uname']))
{
$username=$_POST['uname'];
$pw=$_POST['pw'];
$sql="SELECT * FROM student WHERE username='".$username."' AND pass_word='".$pw."' limit 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1 && is_array($row))
{  
    $_SESSION["pw"]=$row["pass_word"];
    $_SESSION["uname"]=$row["username"];
    //echo "<script>alert('login unsucessful :( Sign up if you are a new user!!');</script>";
    echo "<script> location.href='http://localhost/online_examination_with_security/student/Student_sidebar/index.html'</script>";
}
else
{
	echo "<script>alert('ooooooooooooooooooo ---login unsucessful :( Sign up if you are a new user!!');</script>";
    exit();
}
}
?>