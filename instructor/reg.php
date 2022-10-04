<?php
$h1="localhost";
$u='root';
$p='';
$db="online_examination_with_security";
$conn=mysqli_connect($h1,$u,$p,$db);
echo "Connected";
if($conn==false){
    die('could not connect:'.mysqli_connect_error());
} 
$instid=$_POST['instid'];
$instname=$_POST['instname'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$file1=$_FILES['file1']['name'];
$favques=$_POST['favques'];
$dept=$_POST['dept'];
$postdes=$_POST['postdes'];
$batch=$_POST['batch'];
$gend=$_POST['gend'];
$cla=$_POST['cla'];
$un=$_POST['un'];
$youremail=$_POST['your_email'];
$confirm_psw=$_POST['confirm-psw'];
$v1="INSERT INTO instructor(instructor_id,instructor_name,dob,phone_number,files,favques,department,post,batch,gender,class,username,gmail,passwords) VALUES ('$instid','$instname','$dob','$phone','$file1','$favques','$dept','$postdes','$batch','$gend','$cla','$un','$youremail','$confirm_psw')";
$v2=mysqli_query($conn,$v1);
if($v2)
{
    // echo 'All Your Details Are Saved!.<br>';
   // echo "<script> location.href='http://localhost/online_examination_with_security/instructor/instructorlogin.php'</script>";
    header("location:instructorlogin.php");
}
else
{
     echo "error".$v1."sql error". mysqli_error($conn);
}
if(isset($_POST['submit']))
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
            }
            else
            {  
                $destination="upload/".$_FILES["file1"]["name"];
                move_uploaded_file($_FILES["file1"]["tmp_name"],$destination);
                echo "uploaded successfully";
            }
        }
        else
        {
            echo "file not uploaded";
        }
    }
mysqli_close($conn);
?>