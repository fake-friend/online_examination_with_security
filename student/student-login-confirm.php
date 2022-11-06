<?php 
include_once('../dbconfig.php');
session_start();
if($connection)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=$_POST['email'];
        $pw=$_POST['pw'];  
        $query='SELECT student_name,department, pass_word, devices,years from student WHERE gmail='.'"'.$email.'"';
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_row($result);
            if(strcmp($pw,$row[2])==0)
            {
                if($row[3]==0)
                {
                    $_SESSION['student_name']=$row[0];
                    $_SESSION['department']=$row[1];
                    $_SESSION['gmail']=$email;
                    $_SESSION['years']=$row[4];
                    $device_query="update student set devices='1' where gmail='$email'";
                    mysqli_query($connection,$device_query);
                    mysqli_close($connection);
                    header('location:index.php');
                }
                else
                {
                    header("location:student-login.php?message=you cannot login into multiple devices at a time!!!");
                }
            }
            else
            {
                header("location:student-login.php?message=please check your email id or password");
            }
        }
        else
        {
            header("location:student-login.php?message=please check your email id or password");
        }  
    }
}
else
{
    die("could not connect to database".mysqli_connect_error());
}
mysqli_close($connection);
?>
