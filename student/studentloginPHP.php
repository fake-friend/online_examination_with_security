<?php 
$connection=mysqli_connect("localhost","root","","online_examination_with_security");
session_start();
if($connection)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       
        $email=$_POST['email'];
        $pw=$_POST['pw'];  
        $query='SELECT student_name, pass_word, devices FROM student WHERE gmail='.'"'.$email.'"';
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_row($result);
            if(strcmp($pw,$row[1])==0)
            {
                if($row[2]==0)
                {
                    $_SESSION['student_name']=$row[1];
                    $_SESSION['gmail']=$email;
                    $device_query="update student set devices='1' where gmail='$email'";
                    mysqli_query($connection,$device_query);
                    mysqli_close($connection);
                    //header("location:index.php");
                    echo "<script> location.href='http://localhost/online_examination_with_security/student/Student_sidebar/index.php'</script>";
                }
                else
                {
                    header("location:studentlogin.php?message=you cannot login into multiple devices at a time!!!");
                }
            }
            else
            {
            header("location:studentlogin.php?message=please check your email id or password");
            }
        }
        else
        {
            header("location:studentlogin.php?message=please check your email id or password");
        }  
    }
}
else
{
    die("could not connect to database".mysqli_connect_error());
}
mysqli_close($connection);

/*session_start();
if(isset($_POST['uname']))
{
include('../dbconfig.php');
$username=$_POST['uname'];
$pw=$_POST['pw'];
$sql="SELECT * FROM student WHERE username='".$username."' AND pass_word='".$pw."' limit 1";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1 && is_array($row))
{  
    $_SESSION["pw"]=$row["pass_word"];
    $_SESSION["uname"]=$row["username"];
    //echo "<script>alert('login unsucessful :( Sign up if you are a new user!!');</script>";
    echo "<script> location.href='http://localhost/online_examination_with_security/student/Student_sidebar/index.php'</script>";
}
else
{
	echo "<script>alert('ooppssss-----login unsucessful :( Sign up if you are a new user!!');</script>";
    exit();
}
}*/
?>
