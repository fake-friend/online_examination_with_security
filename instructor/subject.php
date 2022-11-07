<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .row {
            padding-left: 450px;
            padding-top: 25px;
        }

        td,
        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <a href="addform-html.php" class="btn btn-primary a-btn-slide-text">
                <span input type="submit" class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                <span><strong>Add</strong></span>
            </a>
        </div>
    </div>
    <?php
    echo  "<br><br>";

    ?>

    <table class="table align-middle mb-0 bg-white table-hover">
        <thead class="bg-light">
            <tr>
                <th>Serial Number</th>
                <th>Instructor ID</th>
                <th>Instructor Name</th>
                <th>Department</th>
                <th>Subjects</th>
                <th>Subject Code</th>
                <th>Year</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();

            include_once('../dbconfig.php');
            if ($connection) {
                $count = 1;
                $name = $_SESSION['instructor_name'];
                $query = 'select * from instructorsubject where instructor_name=' . '"' . $name . '"';
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <tr>
                        <!--serial number-->
                        <td>
                            <?php echo ($count); ?>
                        </td>
                        <!--instructor id-->
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo ($row[1]); ?></p>
                            </div>
                        </td>
                        <!--instructor name-->
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo ($row[2]); ?></p>
                            </div>
                        </td>
                        <!-- Department-->
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo ($row[3]); ?></p>
                            </div>
                        </td>
                        <!--subject-->
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo ($row[4]); ?></p>
                            </div>
                        </td>
                        <!--subjectCode-->
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo ($row[5]); ?></p>
                            </div>
                        </td>
                        <!--year-->
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo ($row[6]); ?></p>
                            </div>
                        </td>
                        <!--delete-->
                        <td>
                            <form action="delete-subject.php?department=<?php echo($row[3]);?>&subjectcode=<?php echo($row[5]);?>" method="POST">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>

            <?php
                    $count = $count + 1;
                }
            } else {
                die('could not connect with database' . mysqli_connect_error());
            }
            ?>
        </tbody>
    </table>

</body>

</html>