<?php
session_start();
$instructor_id = $_GET['instid'];
$instructor_name = $_GET['instnm'];
$gmail = $_SESSION['gmail'];
$department = $_GET['department'];
$subject = $_GET['subject'];
$subject_code = $_GET['subjectcode'];
$year = $_GET['year'];
date_default_timezone_set("Asia/Kolkata");
$unique=date("Y_m_d")."_".date("h_i_s");
?>

<html>
<head>
    <style>
        .mb-3 {
            width: 450px;
            padding-left: 25px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br><br>
    <form class="needs-validation" action="create-exam-php.php" method="post" enctype="multipart/form-data" novalidate>
        <div class="alert alert-danger d-none">Please review the problems below:</div>

        <div class="mb-3">
            <label for="iid" class="form-label">Instructor ID</label>
            <input type="text" class="form-control" id="iid" name="iid" value="<?php echo $instructor_id ?> ">
            <div class="invalid-feedback">Name can't be blank</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="iname" class="form-label">Instructor Name</label>
            <input type="text" class="form-control" id="iname" name="iname" value="<?php echo $instructor_name ?> ">
            <div class="invalid-feedback">Email can't be blank</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="iname" class="form-label">Gmail</label>
            <input type="text" class="form-control" id="igmail" name="igmail" value="<?php echo $gmail ?> ">
            <div class="invalid-feedback">Email can't be blank</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="iname" class="form-label">Department</label>
            <input type="text" class="form-control" id="idept" name="idept" value="<?php echo $department ?> ">
            <div class="invalid-feedback">Email can't be blank</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="sub" class="form-label">Subject</label>
            <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $subject ?> ">
            <div class="invalid-feedback">Please provide a valid value.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="scode" class="form-label">Subject Code</label>
            <input type="text" class="form-control" id="scode" name="scode" value="<?php echo $subject_code ?> ">
            <div class="invalid-feedback">Name can't be blank</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="scode" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" value="<?php echo $year ?> ">
            <div class="invalid-feedback">Name can't be blank</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="sub" class="form-label">Exam Title </label>
            <input type="text" class="form-control" id="examtitle" name="examtitle" placeholder="Enter your Exam title" required>
            <div class="invalid-feedback">Please provide a valid value.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="sub" class="form-label">Select Date </label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
            <div class="invalid-feedback">Please provide a valid value.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <label for="sub" class="form-label">Duration in Minutes </label>
            <input type="number" class="form-control" id="duration" name="duration" required>
            <div class="invalid-feedback">Please provide a valid value.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept=".csv" name="file1" id="file" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="sub" class="form-label">Unique Exam Name</label>
            <input type="text" class="form-control" id="uniqueen" name="uniqueen" value="<?php echo($instructor_id.$instructor_name.$subject.$year.$unique); ?>">
            <div class="invalid-feedback">Please provide a valid value.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="subjectshowup.php"> <button type="button" class="btn btn-primary">Back</button></a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
<script>
    // Disable form submissions if there are invalid fields
    (function() {
        "use strict";
        window.addEventListener("load", function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener("submit", function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                }, false);
            });
        }, false);
    })();
</script>

</html>