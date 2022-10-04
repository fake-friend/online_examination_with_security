<?php

session_start();
$name=$_SESSION['instructor_name'];

$instd=$_SESSION['instructor_id'];


?>
<html>
<body>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <form class="needs-validation"  action="addform1.php" method="post"novalidate>
        <div class="alert alert-danger d-none">Please review the problems below:</div>
      
        <div class="mb-3">
          <label for="iid" class="form-label">Instructor ID</label>
          <input type="text" class="form-control" id="iid" name="iid" value="<?php echo $instd?> " required>
          <div class="invalid-feedback">Name can't be blank</div>
          <div class="valid-feedback">Looks good!</div>
          
        </div>
      
        <div class="mb-3">
          <label for="iname" class="form-label">Instructor Name</label>
          <input type="text" class="form-control"  id="iname" name="iname"value="<?php echo $name?> " autocomplete="email" required>
          <div class="invalid-feedback">Email can't be blank</div>
          <div class="valid-feedback">Looks good!</div>
          
        </div>
      
        <div class="mb-3">
          <label for="sub" class="form-label">Subjects </label>
          <input type="text" class="form-control" id="sub" name="sub" placeholder="Enter your subjects"  required>
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
            <input class="form-check-input" type="radio" name="year" id="1st year" value="1st year" >
            <label class="form-check-label" for="1st year">I YEAR</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="year" id="2nd year" value="2nd year">
            <label class="form-check-label" for="2nd year">II YEAR</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="year" id="3rd year" value="3rd year" >
            <label class="form-check-label" for="3rd year">III YEAR</label>
          </div>
          </fieldset>
          
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>
  </body>
  </html>