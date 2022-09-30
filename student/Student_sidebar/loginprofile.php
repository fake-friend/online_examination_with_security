<?php  
    if(isset($_SESSION['uname']))
    {
    include('../../dbconfig.php');
    $sql="SELECT * FROM student WHERE username='".$_SESSION['uname']."' limit 1";
    $result=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($result))
    {
       $file="http://localhost/online_examination_with_security/student/upload/".$row[4];
       echo "<img src=".$file.">"."<br>";
       //echo "<h1>".$row[1]."</h1>"; 
    }
    echo "<br>"."<span id='uname'>".$_SESSION['uname']."</span>";
    //echo "<br>"."<span id='mail'>".$_SESSION['email']."</span>"."<br>";
    }
    else
    {
     // header("location:index.php");
     echo "Errorrrrr!!";
    }
    //echo "";
    //.$row[1]."<br>"  echo "</table>";"<br>".$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].    
?>