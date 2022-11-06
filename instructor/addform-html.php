<?php
session_start();
$name = $_SESSION['instructor_name'];
$instd = $_SESSION['instructor_id'];
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
  <form class="needs-validation" action="addform-php.php" method="post" novalidate>
    <div class="alert alert-danger d-none">Please review the problems below:</div>

    <div class="mb-3">
      <label for="iid" class="form-label">Instructor ID</label>
      <input type="text" class="form-control" id="iid" name="iid" value="<?php echo $instd ?> ">
      <div class="invalid-feedback">Name can't be blank</div>
      <div class="valid-feedback">Looks good!</div>
    </div>

    <div class="mb-3">
      <label for="iname" class="form-label">Instructor Name</label>
      <input type="text" class="form-control" id="iname" name="iname" value="<?php echo $name ?> ">
      <div class="invalid-feedback">Email can't be blank</div>
      <div class="valid-feedback">Looks good!</div>
    </div>

    <div class="mb-3">
      <label for="idep" class="form-label">Department</label>
      <select name="idep" id="idep" class="form-control">

        <option value="Tamil">Tamil</option>
        <option value="English">English</option>
        <option value="Economics">Economics</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Commerce">Commerce</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Botany">Botany</option>
        <option value="Zoology">Zoology</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Biotech">Biotech</option>
        <option value="CA/IT">CA/IT</option>
        <option value="Psycology">Psycology</option>
      </select>
      <div class="invalid-feedback">Dept can't be blank</div>
      <div class="valid-feedback">Looks good!</div>
    </div>

    <div class="mb-3">
      <label for="sub" class="form-label">Subjects </label>
      <input type="text" class="form-control" id="sub" name="sub" placeholder="Enter your subjects" required>
      <div class="invalid-feedback">Please provide a valid value.</div>
      <div class="valid-feedback">Looks good!</div>
    </div>

    <div class="mb-3">
      <label for="scode" class="form-label">Subject Code</label>
      <input type="text" class="form-control" id="scode" name="scode" placeholder="Enter your subject code" value="" required>
      <div class="invalid-feedback">Name can't be blank</div>
      <div class="valid-feedback">Looks good!</div>

    </div>

    <fieldset class="mb-3">
      <legend class="col-form-label pt-0">Choose a Year</legend>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="year" id="1st year" value="I">
        <label class="form-check-label" for="1st year">I YEAR</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="year" id="2nd year" value="II">
        <label class="form-check-label" for="2nd year">II YEAR</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="year" id="3rd year" value="III">
        <label class="form-check-label" for="3rd year">III YEAR</label>
      </div>
    </fieldset>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="subject.php"> <button type="button" class="btn btn-primary">Back</button></a>
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