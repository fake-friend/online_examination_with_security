<?php
$connection = mysqli_connect('localhost', 'root', '', 'exam_management');
if (!$connection) {
    die('something went wrong' . mysqli_connect_error());
}

    $instructor_id = $_POST['iid'];
    $instructor_name = $_POST['iname'];
    $gmail = $_POST['igmail'];
    $department = $_POST['idept'];
    $subject = $_POST['sub'];
    $subject_code = $_POST['scode'];
    $year = $_POST['year'];
    $examtitle = $_POST['examtitle'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $unique = $_POST['uniqueen'];

    $insert = "INSERT INTO exams(instructor_id,instructor_name,gmail,department,subjects,subject_code,years,exam_title,start_time,duration,unique_exam_name) VALUES ('$instructor_id','$instructor_name','$gmail','$department','$subject','$subject_code','$year','$examtitle','$date','$duration','$unique')";
    $result = mysqli_query($connection, $insert);

    if ($result) {
        //multipurpose internet mail extensions
        $create="create table ".$unique."(question_number int(3),questions varchar(200),a varchar(100),b varchar(100),c varchar(100),d varchar(100),answer varchar(100))";
        mysqli_query($connection,$create);
        if (!empty($_FILES['file1']['name'])) {
            if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
                $csvfile = fopen($_FILES['file1']['tmp_name'], 'r');
                fgetcsv($csvfile);
                while (($line = fgetcsv($csvfile)) !== false) {
                    $question_insert="insert into ".$unique."(question_number,questions,a,b,c,d,answer) values ('$line[0]','$line[1]','$line[2]','$line[3]','$line[4]','$line[5]','$line[6]')";
                    mysqli_query($connection,$question_insert);
                }
                fclose($csvfile);
            }
        } else {
            echo 'invalid file';
        }
    }
    header('location:subjectshowup.php');
?>