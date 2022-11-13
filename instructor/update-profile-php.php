<?php
session_start();
include_once('../dbconfig.php');
if($connection)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $instid=$_SESSION['instructor_id'];
        $instname=$_POST['instname'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $file=$_GET['photo'];
        $dept=$_POST['dept'];
        $postdes=$_POST['postdes'];
        $batch=$_POST['batch'];
        $gend=$_POST['gend'];
        $un=$_POST['un'];
        $youremail=$_POST['your_email'];
        $confirm_psw=$_POST['confirm-psw'];
        if(!empty($_FILES['file1']))
        {
            $allow=array("jpg"=>"image/jpeg","png"=>"image/png");
            $name=$_FILES["file1"]["name"];
            $type=$_FILES["file1"]["type"];
            $ext=pathinfo($name,PATHINFO_EXTENSION);
            if(!array_key_exists($ext,$allow)) die("please select valid file format");
            if(in_array($type,$allow))
            {
                if(file_exists("upload/".$_FILES["file1"]["name"]))
                {
                    echo "This file is already exists";
                    header('location:update-profile-html.php?message=This file is already exists');
                }
                else
                {  
                    $destination="upload/".$_FILES["file1"]["name"];
                    $old="upload/".$file;
                    move_uploaded_file($_FILES["file1"]["tmp_name"],$destination);
                    unlink($old);
                    $file=$_FILES["file1"]["name"];
                    echo "uploaded successfully";
                }
            }
            else
            {
                echo "file not uploaded";
            }
        }
        $update="UPDATE instructor SET instructor_name='$instname', dob='$dob',phone_number='$phone',files='$file',department='$dept',post='$postdes',batch='$batch',gender='$gend',username='$un',gmail='$youremail',passwords='$confirm_psw' where instructor_id='$instid'";
        $result=mysqli_query($connection,$update);
        if($result)
        {
            $_SESSION['instructor_gmail']=$youremail;
            header('location:index.php');
        }
    }
}
else
{
    die('could not connect with database'.mysqli_connect_error());
}
?>