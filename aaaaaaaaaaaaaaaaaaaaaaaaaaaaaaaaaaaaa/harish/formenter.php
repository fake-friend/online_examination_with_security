<?php
include_once('../../dbconfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($connection) {
        $count = 0;
        $question = $_POST['ques'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        $opt4 = $_POST['opt4'];
        $ans=$_POST['ans'];
        while (!empty($question[$count]) && !empty($opt1[$count]) && !empty($opt2[$count]) && !empty($opt3[$count]) && !empty($opt4[$count])) {
            $insert="INSERT INTO questions(question,a,b,c,d,answer) VALUES('$question[$count]','$opt1[$count]','$opt2[$count]','$opt3[$count]','$opt4[$count]','$ans[$count]')";
            mysqli_query($connection,$insert);
            $count=$count+1;
        }
    }
    else
    {
        die('something went wrong with database'. mysqli_connect_error());
    }
}
