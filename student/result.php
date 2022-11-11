<?php
session_start();
$connection=mysqli_connect('localhost','root','','exam_management');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($connection)
    {
        $instructor_id=$_GET['insid'];
        $instructor_name=$_GET['insnm'];
        $instructor_gmail=$_GET['insgmail'];
        $instructor_department=$_GET['insdept'];
        $subject=$_GET['subject'];
        $subjectcode=$_GET['subjectcode'];
        $title=$_GET['title'];
        $examtable=$_GET['examtable'];  

        $student_name=$_SESSION['student_name'];
        $roll_number=$_SESSION['roll_number'];
        $department=$_SESSION['student_department'];
        $gmail=$_SESSION['student_gmail'];
        $year=$_SESSION['years'];

        $securedmarks=0;
        $query="select question_number, answer from ".$examtable;
        $result=mysqli_query($connection,$query);
        $number=mysqli_num_rows($result);
        $totalmarks=mysqli_num_rows($result);
        while($number!=0 && $row=mysqli_fetch_array($result))
        {
            if(strcmp($_POST[$row[0]],$row[1])==0)
            {
                $securedmarks=$securedmarks+1;
            }
            $number=$number-1;
        }
        $query1="INSERT INTO result(student_name,roll_number,student_department,student_gmail,year,instructor_id,instructor_name,instructor_department,instructor_gmail,subject,subject_code,exam_title,unique_exam_name,total_marks,secured_marks) VALUES('$student_name','$roll_number','$department','$gmail','$year','$instructor_id','$instructor_name','$instructor_department','$instructor_gmail','$subject','$subjectcode','$title','$examtable','$totalmarks','$securedmarks')";
         $check=mysqli_query($connection,$query1);
         if($check)
         {
            header('location:index.php');
         }
        
    }
    else
    {
        die('something went wrong with the database');
    }
}
?>