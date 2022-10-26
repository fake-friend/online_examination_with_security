<?php
session_start();
$name=$_SESSION['instructor_name'];
$maill=$_SESSION['gmail'];
$instd=$_SESSION['instructor_id']
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" onclick="show()" class="btn btn-primary">
	                    <i class="fa fa-bars"></i>
	                    <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>

		<div class="p-4">
			<h1><a href="index.html" class="logo"><?php echo $name ?><span><?php echo $maill ?></span></a></h1>

		    <ul class="list-unstyled components mb-5">
		        <li class="active">
			        <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
		        </li>
		        <li>
			        <a href="../subject.html" target="frame"><span class="fa fa-user mr-3"></span> Subjects</a>
		        </li>
		        <li>
		            <a href="#"><span class="fa fa-briefcase mr-3"></span> Exam Management</a>
		        </li>
		  
		        <li>
		            <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
		        </li>
		        <li>
		            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
		        </li>
		    </ul>

	        <div class="mb-5">				
	            <div class="form-group d-flex">
                    <div class="logout">
                        <form action="../logout.php" method="post">
                            <button type="submit" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-log-out"></span> Log out</button>
                        </form>
                    </div>
			    </div>
	        </div>

        </div>
    </nav>
</div>

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

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>