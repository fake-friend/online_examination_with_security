<?php
include('../dbconfig.php');
echo "Connected";
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$favques=$_POST['favques'];
$gender=$_POST['gender'];
$rno=$_POST['rno'];
$shift=$_POST['shift'];
$file=$_FILES['file']['name'];
$dept=$_POST['dept'];
$batch=$_POST['batch'];
$uname=$_POST['uname'];
$your_email=$_POST['your_email'];
$confirm_psw=$_POST['confirm-psw'];
$v="INSERT INTO student(student_name,dob,phonenumber,favqus,gender,department,roll_number,batch,shift,upload,username,gmail,pass_word) 
VALUES('$sname','$dob','$phone','$favques','$gender','$dept','$rno','$batch','$shift','$file','$uname','$your_email','$confirm_psw')";
if(mysqli_query($connection,$v))
{
     echo 'All Your Details Are Saved!.<br>';
   // echo "<script> location.href='http://localhost/online_examination_with_security/student/studentlogin.html'</script>";
}
else
{
     echo "error".$v."sql error". mysqli_error($connection);
}
if(isset($_POST['submit']))
     {
        $allow=array("jpg"=>"image/jpeg");
        $name=$_FILES["file"]["name"];
        $type=$_FILES["file"]["type"];
        $ext=pathinfo($name,PATHINFO_EXTENSION);
        if(!array_key_exists($ext,$allow)) die("please select valid file format");
        if(in_array($type,$allow))
        {
            if(file_exists("upload/".$_FILES["file"]["name"]))
            {
                echo "This file is already exists";
            }
            else
            {  
                $destination="upload/".$_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],$destination);
                echo "uploaded successfully";
            }
        }
        else
        {
            echo "file not uploaded";
        }
    }
mysqli_close($connection);
?>