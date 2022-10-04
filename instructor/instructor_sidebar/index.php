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
body{
	    margin-top:0px;
	}
.card-big-shadow {
    max-width: 320px;
    position: relative;
}
.coloured-cards .card {
    margin-top: 30px;
}
.card[data-radius="none"] {
    border-radius: 0px;
}
.card {
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
    color: #FFFFFF;
}
.card.card-just-text .content {
    padding: 50px 65px;
    text-align: center;
}
.card .content {
    padding: 20px 20px 10px 20px;
}
.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category, .card .label {
    font-size: 14px;
    margin-bottom: 0px;
}
.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
.card .description {
    font-size: 16px;
    color: #66615b;
}
.content-card{
    margin-top:30px;    
}
a:hover, a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #b8d8d8;
}
.card[data-color="blue"] .description {
    color: #506568;
}

.card[data-color="green"] {
    background: #d5e5a3;
}
.card[data-color="green"] .description {
    color: #60773d;
}
.card[data-color="green"] .category {
    color: #92ac56;
}

.card[data-color="yellow"] {
    background: #ffe28c;
}
.card[data-color="yellow"] .description {
    color: #b25825;
}
.card[data-color="yellow"] .category {
    color: #d88715;
}

.card[data-color="brown"] {
    background: #d6c1ab;
}
.card[data-color="brown"] .description {
    color: #75442e;
}
.card[data-color="brown"] .category {
    color: #a47e65;
}

.card[data-color="purple"] {
    background: #baa9ba;
}
.card[data-color="purple"] .description {
    color: #3a283d;
}
.card[data-color="purple"] .category {
    color: #5a283d;
}

.card[data-color="orange"] {
    background: #ff8f5e;
}
.card[data-color="orange"] .description {
    color: #772510;
}
.card[data-color="orange"] .category {
    color: #e95e37;
}
</style>
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
		<div class="p-4">
			<h1><a href="index.html" class="logo"> <?php echo $name ?> <span><?php echo $maill ?></span></a></h1>
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
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						
	            <div class="form-group d-flex">
	            	<form action="../logout.php" method="post">
                        <input type="submit" value="logout">
                   </form>
	          
			</div>
	      </div>
</div>
    	</nav>

        <!-- Page Content  -->
     <!-- <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sidebar #05</h2>
<div class="grey-bg container-fluid">
    <section id="minimal-statistics">
      <div class="container bootstrap snippets bootdeys">
        <div class="row">
           <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                        <div class="content">
                            <h6 class="category">Best cards</h6>
                            <h4 class="title"><a href="#">Blue Card</a></h4>
                            <p class="description">What moment. </p>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                        <div class="content">
                            <h6 class="category">Best cards</h6>
                            <h4 class="title"><a href="#">Green Card</a></h4>
                            <p class="description">What  moment. </p>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                        <div class="content">
                            <h6 class="category">Best cards</h6>
                            <h4 class="title"><a href="#">Yellow Card</a></h4>
                            <p class="description">What moment. </p>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                        <div class="content">
                            <h6 class="category">Best cards</h6>
                            <h4 class="title"><a href="#">Brown Card</a></h4>
                            <p class="description">What moment. </p>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                        <div class="content">
                            <h6 class="category">Best cards</h6>
                            <h4 class="title"><a href="#">Purple Card</a></h4>
                            <p class="description">What moment. </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                        <div class="content">
                            <h6 class="category">Best cards</h6>
                            <h4 class="title"><a href="#">Orange Card</a></h4>
                            <p class="description">What moment. </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
      </div>
    </div>

      </div>
		</div>-->
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
