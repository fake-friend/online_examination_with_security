<?php
$exam_table = $_GET['examtable'];
$student_department = $_GET['department'];
$student_year= $_GET['year'];
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        td,
        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <br><br>
    <table class="table align-middle mb-0 bg-white table-hover">
        <thead class="bg-light">
            <tr>
                <th>Serial Number</th>
                <th>Student Name</th>
                <th>Student Roll No</th>
                <th>Student Department</th>
                <th>Year</th>
                <th>Subjects</th>
                <th>Subject Code</th>
                <th>Exam Title</th>
                <th>Total Marks</th>
                <th>Secured Marks</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();
            $instructor_id = $_SESSION['instructor_id'];
            $instructor_name = $_SESSION['instructor_name'];
            $instructor_gmail=$_SESSION['instructor_gmail'];
            $connection = mysqli_connect('localhost', 'root', '', 'exam_management');
            if ($connection) {
                $select = "SELECT student_name,roll_number,student_department,year,subject, subject_code,exam_title,total_marks,secured_marks from result 
                where instructor_id='$instructor_id' and instructor_name='$instructor_name' and instructor_gmail='$instructor_gmail' and
                unique_exam_name='$exam_table' and year='$student_year' and student_department='$student_department'";
                $result = mysqli_query($connection, $select);
                if (mysqli_num_rows($result) > 0) {
                    $count = 1;
                    while ($row = mysqli_fetch_array($result)) {
            ?>

                        <tr>
                            <!--serial number-->
                            <td>
                                <?php echo ($count); ?>
                            </td>
                            <!--student name-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[0]); ?></p>
                                </div>
                            </td>
                            <!--Student roll no-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[1]); ?></p>
                                </div>
                            </td>
                            <!-- Student department-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[2]); ?></p>
                                </div>
                            </td>
                            <!--year-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[3]); ?></p>
                                </div>
                            </td>
                            <!--subjects-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[4]); ?></p>
                                </div>
                            </td>
                            <!--subject code-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[5]); ?></p>
                                </div>
                            </td>
                            <!--exam title-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[6]); ?></p>
                                </div>
                            </td>
                            <!--total marks-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[7]); ?></p>
                                </div>
                            </td>
                            <!--secured marks-->
                            <td>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo ($row[8]); ?></p>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $count = $count + 1;
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="10">no results found</td>
                    </tr>
            <?php

                }
            } else {
                die('something went wrong' . mysqli_connect_error());
            }
            ?>