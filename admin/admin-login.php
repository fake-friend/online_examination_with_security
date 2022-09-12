<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>
        body
        {
            background-color: #38476f;
        }
        .container
        { 
            background-color: aliceblue;
            width: 400px;
            margin-top: 5%;
            padding: 50px 40px;
            border-radius: 40px;
        }
        .form-group,label
        {
            padding: 3px;
            font-weight: bold;
        }
        input[type="checkbox"]
        {
            cursor: pointer;
        }
        .capt
        {
          padding: 10px;
        }
        img
        {
          border-radius: 20px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#error").fadeOut(3000);
        });
    </script>
</head>
<body>
      
      <div class="alert alert-warning" id="error" role="alert">
        <?php 
            if(isset($_GET['message']))
            {
              echo($_GET['message']);
            } 
        ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="container border">
        <form method="post" action="admin-confirm.php" class="needs-validation" novalidate>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this Email field.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this Password field.</div>
            </div>
            <div class="form-group">
              <div class="capt">
               <center><img src="captcha.php" alt=""></center> 
              </div>
            </div>
            <div class="form-group">
                <label for="captcha">captcha:</label>
                <input type="text" class="form-control" name="captcha" id="cap" placeholder="Enter Captcha" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this Captcha field.</div>
            </div>
            <div class="form-group">
                <div class="showpassword">
                    <input type="checkbox" name="show" onclick="showss()" id="show">&nbsp;&nbsp;show password
                </div>
            </div>
            <br>
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
          </form>
    </div>
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
        
        function showss()
        {
          var s=document.getElementById("pwd");
          if(s.type === "password")
          {
            s.type="text";
          }
          else
          {
            s.type="password";
          }
        }
        </script>
</body>
</html>