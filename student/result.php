<?php
session_start();
$connection=mysqli_connect('localhost','root','','exam_management');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($connection)
    {
        $student_name=$_SESSION['student_name'];
        $roll_number=$_SESSION['roll_number'];
        $department=$_SESSION['department'];
        $gmail=$_SESSION['gmail'];
        $year=$_SESSION['years'];
        $instructor_id=$_SESSION['instructor_id'];
        $instructor_name=$_SESSION['instructor_name'];
        $marks=0;
        $examtable=$_GET['examtable'];
        $query="select question_number, answer from ".$examtable;
        $query1="select ";
        $result=mysqli_query($connection,$query);
        $number=mysqli_num_rows($result);
        while($number!=0 && $row=mysqli_fetch_array($result))
        {
            if(strcmp($_POST[$row[0]],$row[1])==0)
            {
                $marks=$marks+1;
            }
            $number=$number-1;
        }
        
    }
    else
    {
        die('something went wrong with the database');
    }
}
?>