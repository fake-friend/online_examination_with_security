<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!--cdn link for no copy paste for the website-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--function for no copy paste on the website using jquery-->
    <script type="text/javascript">
        $(document).ready(function() {
        $('body').bind('cut copy paste', function(event) {
        event.preventDefault();
        });
        });
    </script>

    <script src="../script.js"></script>
    <link rel="stylesheet" href="../login-style.css">
    
</head>
<body>

    <div class="container"> 
        <div class="row"> 
            <div class="col-md-12"> 
                <div class="card">
                     <form id="form" method="POST" action="admin-confirm.php" onsubmit="login(); return false;"  class="box needs-validation" method="post" action=""> 
                        <h1>Login</h1> 

                        <div class="form-group">
                            <input type="text" id="unm" value="" name="email" placeholder="Email" onkeyup="login()">
                            <span id="text1"></span> 
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="pw" placeholder="Password" onkeyup="login()" autocomplete="current-password">
                            <i class="far fa-eye" id="togglePassword" onclick="eye()"></i>
                            <span id="text2"></span> 
                        </div>

                        <div class="form-group">
                            <img src="captcha.php" alt=""> 
                            <input type="text" name="captcha" id="captcha" placeholder="captcha" onkeyup="login()">
                            <span id="text3"></span>
                        </div>
                        <input type="submit" name="" value="LOGIN" > 
                     </form>
                </div> 
            </div>
         </div>
    </div>
</body>
</html>