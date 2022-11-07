<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <style>
        .container-md{
            margin-top:100px;
        }
        .form-front{
            border:2px solid black;
            margin-right:   20%;
            margin-left: 20%;
        }
        .form-control{
            text-align: center;
            width: 300px;
            margin-left: 27%;
        }
        
        </style>
</head>

</html>
<?php
include_once('../dbconfig.php');
session_start();
$email=$_SESSION['gmail'];
?>
<html>
    <body>
        <div class="container-md text-center">
            <div class="form-front">
                <form action="forgototp.php" method="post">
                    <fieldset>
                        <br><br>
                        <label for="fmail">Enter your login email</label>
                        <input type="email" class="form-control" name="fmail" id="fmail"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com">
                    </fieldset>
                    <br>
                    <input type="submit" class="btn btn-primary" value="submit">
                    <br><br>
                </form>
            </div>
        </div>
    </body>
</html>