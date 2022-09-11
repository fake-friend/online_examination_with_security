<?php
include_once("../dbconfig.php");
session_start();
if($connection)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=$_POST['email'];
        $password=$_POST['pwd'];
        $captcha=$_POST['captcha'];
        if(strcmp($captcha,$_SESSION['captcha'])==0)
        {
            $query='SELECT name, password, devices from admin where email='.'"'.$email.'"';
            $result=mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_row($result);
                if(strcmp($password,$row[1])==0)
                {
                    if($row[2]==0)
                    {
                        $_SESSION['name']=$row[0];
                        $_SESSION['email']=$email;
                        $device_query="update admin set devices='1' where email='$email'";
                        mysqli_query($connection,$device_query);
                        mysqli_close($connection);
                        header("location:admin.php");
                    }
                    else
                    {
                        header("location:admin-login.php?message=you cannot login into multiple devices at a time!!!");
                    }
                }
                else
                {
                    header("location:admin-login.php?message=please check your email id or password");
                }
            }
            else
            {
                header("location:admin-login.php?message=please check your email id or password");
            }  
        }
        else
        {
            header("location:admin-login.php?messge=please enter correct captcha!!!");
        }
    }
}
else
{
    die("could not connect to database".mysqli_connect_error());
}
mysqli_close($connection);
?>