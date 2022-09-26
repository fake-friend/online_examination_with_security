<?php 
session_start();
if($_SESSION['name'] && $_SESSION['email'])
{
    $username=$_SESSION['name'];
    $email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        nav
        {
            height: 643px;
        }
        iframe
        {
            position: absolute;
            margin-top: -580px;
            margin-left: 300px;
        }
        .frame1
        {
            margin-left: 40px;
            width: 1300px;
        }
        .login-details
        {
            position: absolute;
            top: 0;
            font-size: 15px;
            margin-left: 1200px;
        }
        .logout
        {
            cursor: pointer;
            position: absolute;
            margin-left: -100px;
            margin-top: -60px;
        }
    </style>
</head>
<body>
    <nav id="sidebar">

        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" onclick="show()" class="btn btn-primary">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="p-4">
            <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="css/style.css" target="frame"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="css/bootstrap.min.css" target="frame"><span class="fa fa-user mr-3"></span> About</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
                </li>
            </ul>

        </div>
    </nav>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
   
    <div class="login-details">
        <p><?php echo $username;?><br><?php echo $email ?></p>
        <div class="logout">
            <form action="logout.php" method="post">
                <button type="submit" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-log-out"></span> Log out</button>
            </form>
        </div>
    </div>

    <iframe src="css/style.css" id="frame" name="frame" frameborder="0" width="1035" height="570">
    </iframe>

    <script>
        var side=document.getElementById('sidebar');
        var frm=document.getElementById('frame');
        function show()
        {
            if(side.className=="")
            {
                frm.classList.add('frame1');
            }
            else
            {
                frm.classList.remove('frame1');
            }
        }
     </script>
</body>
</html>
<?php 
}
else
{
    header("location:admin-login.php");
}
?>