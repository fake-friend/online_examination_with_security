<?php 
session_start();
if($_SESSION['student_name'] && $_SESSION['gmail'])
{
    $name=$_SESSION['student_name'];
    $gmail=$_SESSION['gmail'];   
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
</head>
<body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" onclick="show()" id="sidebarCollapse" class="btn btn-primary">
	                <i class="fa fa-bars"></i>
	                <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>
		
                <div class="p-4">		
		    	<h1> <a href="index.php" class="logo"> <?php echo $name;?> <span> <?php echo  $gmail;?></span></a> </h1>
		
                <ul class="list-unstyled components mb-5">
		            <li class="active">
			            <a href="cards.php" target="frame"><span class="fa fa-home mr-3"></span> Home</a>
		            </li>

		            <li>
		                <a href="studentlogin.php" target="frame"><span class="fa fa-briefcase mr-3"></span> Exams</a>
		            </li>
		  
		            <li>
		                <a href="#" target="frame"><span class="fa fa-cogs mr-3"></span> Results</a>
            		</li>

		            <li>
		                <a href="#" target="frame"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
		            </li>

                    <li>
			            <a href="#" target="frame"><span class="fa fa-user mr-3"></span> Staffs</a>
		            </li>

                    <li>
                        <div class="logout">
                            <form action="slogout.php" method="post">
                            <button type="submit" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-log-out"></span> Log out</button>
                            </form>
                        </div>
                    </li>
		        </ul>

	            <div class="mb-5">
					<h3 class="h6 mb-3">Subscribe for newsletter</h3>
					<form action="#" class="subscribe-form">
	                    <div class="form-group d-flex">
	            	        <div class="icon"><span class="icon-paper-plane"></span></div>
	                        <input type="text" class="form-control" placeholder="Enter Email Address">
	                     </div>
	                </form>
			    </div>
	            </div>
    	    </nav>
<!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                <iframe src="" id="frame" name="frame" frameborder="0" width="1040" height="600"></iframe> 
            </div>
        </div>
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/popper.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>
    <script>
        var side=document.getElementById('sidebar');
        var frm=document.getElementById('frame');
        function show()
        {
            if(side.className=="")
            {
                frm.classList.add('frame');
            }
            else
            {
                frm.classList.remove('frame');
            }
        }
     </script>
</body>
</html>
<?php 
}
else
{
    header("location:studentlogin.php");
    //echo"<script>alert('ooooooooo');</script>";
}
?>