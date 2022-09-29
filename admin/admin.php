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

    <!--cdn link for no copy paste for the website-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../no-tab-no-cp.js"></script>

    <style>
        nav
        {
            height: 643px;
        }
        iframe
        {
            position: absolute;
            margin-top: -620px;
            margin-left: 300px;
        }
        .frame1
        {
            margin-left: 40px;
            width: 1300px;
        }
        .logout
        {
            cursor: pointer;
            position: absolute;
            margin-left: 60px;
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
            <h1><a class="logo"><?php echo $username;?> <span><?php echo $email ?></span></a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="department-show.php" target="frame"><span class="fa fa-home mr-3"></span> Departments</a>
                </li>
                <li>
                    <a href="" target="frame"><span class="fa fa-user mr-3"></span>Instructor</a>
                </li>
                <li>
                    <a href="instructor_management.php" target="frame"><span class="fa fa-briefcase mr-3"></span>Instructor<br>&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cogs mr-3"></span></a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-paper-plane mr-3"></span></a>
                </li>
                <br><br>
                <li>
                    <div class="logout">
                        <form action="logout.php" method="post">
                            <button type="submit" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-log-out"></span> Log out</button>
                        </form>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <iframe src="" id="frame" name="frame" frameborder="0" width="1040" height="600">
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