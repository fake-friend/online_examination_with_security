<?php
$connection=mysqli_connect("localhost","root","","online_examination_with_security");
session_start();
if($connection)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
            $email=$_POST['email'];
            $password=$_POST['pwd'];
                
            $query='SELECT instructor_id, instructor_name, passwords, devices from instructor where gmail='.'"'.$email.'"';

            $result=mysqli_query($connection,$query);
            $query1='SELECT department from instructor where gmail='.'"'.$email.'"';
            $res=mysqli_query($connection,$query1);
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_row($result);
                if(strcmp($password,$row[2])==0)
                {
                    if($row[3]==0)
                    {   
                        $_SESSION['instructor_name']=$row[1];
                        $_SESSION['dept']=$row[4];
                        $iname=$_SESSION['instructor_name'];
                        $_SESSION['gmail']=$email;
                        $imail=$_SESSION['gmail'];
                        $_SESSION['instructor_id']=$row[0];
                        $device_query="update instructor set devices='1' where gmail='$email'";
                        mysqli_query($connection,$device_query);
                        $date=date('m/d/Y h:i:s a',time()); 
                        $track_query="INSERT INTO instructortrackloguser(insname,email,logintime,logouttime) VALUES ('$iname','$imail','$date',null)";
                        mysqli_query($connection,$track_query);
                        mysqli_close($connection);

                        echo "<script> location.href='http://localhost/online_examination_with_security/instructor/instructor_sidebar/index1.php'</script>";
                    }
                    else
                    {
                        header("location:instructorlogin.php?message=you cannot login into multiple devices at a time!!!");
                    }
                }
                else
                {
                    header("location:instructorlogin.php?message=please check your email id or password");
                }
            }
            else
            {
                header("location:instructorlogin.php?message=please check your email id or password");
            }  
        }   
    }
else
{
    die("could not connect to database".mysqli_connect_error());
}
mysqli_close($connection);
?>