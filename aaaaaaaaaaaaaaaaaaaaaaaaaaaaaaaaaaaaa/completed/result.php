<?php
$quizques=mysqli_connect('localhost','root','','quiz_test');
$quizresult=mysqli_connect('localhost','root','','quiz_result');
if($quizques)
{
    $sum=0;
    $question1=$_POST['1'];
    $question2=$_POST['2'];
    $question3=$_POST['3'];
    $query='select answer from test1';
    $result=mysqli_query($quizques,$query);
    while($row=mysqli_fetch_array($result))
    {
        if(strcmp($question1,$row[0])==0)
        {
            $sum=$sum+1;
        }
        if(strcmp($question2,$row[0])==0)
        {
            $sum=$sum+1;
        }
        if(strcmp($question3,$row[0])==0)
        {
            $sum=$sum+1;
        }
    }
    
    $inser="INSERT INTO tamil(name,rollnumber,year,quiz,mark) VALUE('harish','20suca31','3','test1','$sum')";
    $r=mysqli_query($quizresult,$inser);
    echo ($question1);
    echo ($question2);
    echo ($question3);
    mysqli_close($quizresult);
}
?>