<?php
session_start();
if ($_SESSION['student_name'] && $_SESSION['student_gmail']) {
    $name = $_SESSION['student_name'];
    $gmail = $_SESSION['student_gmail'];
    $department=$_SESSION['student_department'];
    $roll_number=$_SESSION['roll_number'];
    $year=$_SESSION['years'];
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Student</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

        <style>
            nav 
            {
                height: 657px;
            }

            iframe {
                position: absolute;
                margin-top: -620px;
                margin-left: 300px;
            }

            .frame1 {
                margin-left: 40px;
                width: 1300px;
            }

            .logout {
                cursor: pointer;
                position: absolute;
                margin-left: 60px;
            }
        </style>
    </head>

    <body>
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" onclick="show()" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="p-4">
                <h1> <a class="logo"> <?php echo $name ?> <span> <?php echo  $gmail ?></span><span><?php echo $department ?></span><span><?php echo $year; ?> YEAR </span><span><?php echo $roll_number; ?></span></a> </h1>

                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="subjects.php" target="frame"><span class="fa fa-book mr-3"></span> Subjects</a>
                    </li>

                    <li>
                        <a href="show-exam.php" target="frame"><span class="fa fa-pencil-square-o mr-3"></span> Exams</a>
                    </li>

                    <li>
                        <a href="#" target="frame"><span class="fa fa-certificate mr-3"></span> Results</a>
                    </li>

                    <li>
                        <a href="show-colleague.php" target="frame"><span class="fa fa-handshake-o mr-3"></span> colleague</a>
                    </li>
                    <br><br>

                    <li>
                        <div class="logout">
                            <form action="student-logout.php" method="post">
                                <button type="submit" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-log-out"></span><i class="fa fa-sign-out"></i> Log out</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content  -->

        <script src="js/js/jquery.min.js"></script>
        <script src="js/js/popper.js"></script>
        <script src="js/js/bootstrap.min.js"></script>
        <script src="js/js/main.js"></script>

        <iframe src="subjects.php" id="frame" name="frame" frameborder="0" width="1040" height="600">
        </iframe>

        <script>
            var side = document.getElementById('sidebar');
            var frm = document.getElementById('frame');

            function show() {
                if (side.className == "") {
                    frm.classList.add('frame1');
                } else {
                    frm.classList.remove('frame1');
                }
            }
        </script>
    </body>

    </html>
<?php
} else {
    header("location:student-login.php?message=need to login");
}
?>