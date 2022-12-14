<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>instructor register-form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Font-->
	<!-- Main Style Css -->
    <link rel="stylesheet" href="instructor-register.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
	#message 
	{
  display:none;
  background: white;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: rgb(74, 233, 74);
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: rgb(230, 17, 17);
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
<?php
session_start();
include_once('../dbconfig.php');
if($connection)
{
    $instructor_id=$_SESSION['instructor_id'];
    $instructor_name=$_SESSION['instructor_name'];
    $instructor_gmail=$_SESSION['instructor_gmail'];
    $select="SELECT * FROM instructor where instructor_id='$instructor_id' and instructor_name='$instructor_name' and gmail='$instructor_gmail'";
    $result=mysqli_query($connection,$select);
    $row=mysqli_fetch_array($result);
?>

<body>
<?php
    if (isset($_GET['message'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><center>';
        echo ($_GET["message"]);
        echo '</center><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
?>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form method="post" action="update-profile-php.php?photo=<?php echo($row[5]);?>" class="form-register" enctype="multipart/form-data" >
		        
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Personal Info</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Personal Info</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.  </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Instructor ID</legend>
											<input type="text" id="first-name" name="instid" placeholder="Instructor ID" disabled value="<?php echo($row[1]); ?>">
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Instructor Name</legend>
											<input type="text" id="fathers-name" name="instname" placeholder="Instructor Name" value="<?php echo($row[2]); ?>" >
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Date of Birth</legend>
											<input type="date" id="dob" name="dob" value="<?php echo($row[3]); ?>">
										</fieldset>
									</div>

									<div class="form-holder ">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" id="phone" name="phone" placeholder="+91 9876543210" value="<?php echo($row[4]); ?>" >
										</fieldset>
									</div>
								</div>
								 <div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Upload your profile photo:</legend>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-prepend">
													  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
													</div>
													<div class="custom-file">
					
													  <input type="file" class="custom-file-input" accept="image/*" name="file1" id="file"
														aria-describedby="inputGroupFileAddon01">
													  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
												  </div>
											  </div>
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Academia</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Academia</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
								</div>
								<div class="form-row " >
			                		<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Select your department:</legend>
											<select name="dept" id="dept">
												<option value="Dept" selected>Department</option>
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
									</fieldset>
			                		</div>
			                	</div>
								<div class="form-row">
			                		<div class="form-holder">
			                			<fieldset>
											<legend>Description / Post</legend>
											<select   id="rno" name="postdes" placeholder="Description / Post" >
												<option value="description" selected>Description / Post</option>
												<option value="Head of Department">Head of Department</option>
												<option value="Assistant Professor">Assistant Professor</option>
												</select>
										</fieldset>
			                		</div>
									
                                    
									<div class="form-holder">
			                			<fieldset>
											<legend>SF/Aided:</legend>
											<select name="batch" id="batch">
												<option value="Duration" selected>Batch:Duration</option>
												<option value="Self Financed">Self Financed</option>
												<option value="Aided">Aided</option>
										
											</select>
										</fieldset>
			                		</div>
			                	</div>

								<div class="form-row">
			                		<div class="form-holder">
			                			<fieldset>
											<legend>Gender</legend>
											<select name="gend" id="gend">
												<option value="Duration" selected>select Gender</option>
												<option value="Female">Woman</option>
												<option value="Male">Man</option>
											</select>
										</fieldset>
			                		</div>
			                	</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
						<h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Create-Profile</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Create-Profile</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
									<fieldset>
										<legend>Create Username</legend>
										<input type="text" id="user-name" name="un" placeholder="Create Username" value="<?php echo($row[10]); ?>" >
									</fieldset>
								</div>
								</div>

								<div class="form-row">
								<div class="form-holder form-holder-2">
									<fieldset>
										<legend>Your Email</legend>
										<input type="text" name="your_email" id="youremail"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" value="<?php echo($row[11]); ?>" >
									</fieldset>
								</div>
								</div>

								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>create strong password</legend>
											<input type="text" name="password" id="password"  placeholder="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required value="<?php echo($row[12]); ?>" >
					
										</fieldset>
									</div>
									
								</div>
								<div id="message">
									<h3>Password must contain the following:</h3>
									<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
									<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
									<p id="number" class="invalid">A <b>number</b></p>
									<p id="length" class="invalid">Only <b>8 characters</b></p>
									<p id="symbol" class="invalid">A <b>Special Symbols</b></p>
								  </div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>confirm password</legend>
											<input type="text" onblur="matchPassword()"name="confirm-psw" id="confirm-psw" placeholder="" value="<?php echo($row[12]); ?>" >
										</field>
									</div>
								</div>
								<button type="submit" id="submit" onclick="return validform()" value="submit" class="btn btn-success">Submit</button>
							</div>
							<script>
								var myInput = document.getElementById("password");
								var letter = document.getElementById("letter");
								var capital = document.getElementById("capital");
								var number = document.getElementById("number");
								var length = document.getElementById("length");
								var symbol = document.getElementById("symbol");
								
								// When the user clicks on the password field, show the message box
								 myInput.onfocus=function() {
								  document.getElementById("message").style.display = "block";
								}
								
								// When the user clicks outside of the password field, hide the message box
								myInput.onblur=function() {
								  document.getElementById("message").style.display = "none";
								}
								
								// When the user starts to type something inside the password field
								myInput.onkeyup = function() {
								  // Validate lowercase letters
								  var lowerCaseLetters = /[a-z]/g;
								  if(myInput.value.match(lowerCaseLetters)) {  
									letter.classList.remove("invalid");
									letter.classList.add("valid");
								  } else {
									letter.classList.remove("valid");
									letter.classList.add("invalid");
								  }
								  
								  // Validate capital letters
								  var upperCaseLetters = /[A-Z]/g;
								  if(myInput.value.match(upperCaseLetters)) {  
									capital.classList.remove("invalid");
									capital.classList.add("valid");
								  } else {
									capital.classList.remove("valid");
									capital.classList.add("invalid");
								  }
								
								  // Validate numbers
								  var numbers = /[0-9]/g;
								  if(myInput.value.match(numbers)) {  
									number.classList.remove("invalid");
									number.classList.add("valid");
								  } else {
									number.classList.remove("valid");
									number.classList.add("invalid");
								  }
								  
								  // Validate length
								  if(myInput.value.length == 8) {
									length.classList.remove("invalid");
									length.classList.add("valid");
								  } else {
									length.classList.remove("valid");
									length.classList.add("invalid");
								  }
								  
								  //var symbol=/[@]/g;
								  if(myInput.value.match('@') ){
									symbol.classList.remove("invalid");
									symbol.classList.add("valid");
								  } else {
									symbol.classList.remove("valid");
									symbol.classList.add("invalid");
								  }
								}
								function matchPassword() {  
                                  var pw1 = document.getElementById("password").value;  
                                  var pw2 = document.getElementById("confirm-psw").value;  
                                  if(pw1 != pw2)  
                                 {   
                                    alert("Password did not match");  
                                 } else {  
                                        
                                    }  
                                }
								function validform(){
									if(document. getElementById("first-name"). value. length == 0 || document. getElementById("fathers-name"). value. length == 0 || document. getElementById("dob"). value. length == 0 ||
									document. getElementById("phone"). value. length == 0 || document. getElementById("dept"). value. length == 0 || document. getElementById("rno"). value. length == 0 ||
									document. getElementById("batch"). value. length == 0 || document. getElementById("gend"). value. length == 0 || document. getElementById("user-name"). value. length == 0 ||
									document. getElementById("youremail"). value. length == 0 || document. getElementById("password"). value. length == 0 || document. getElementById("confirm-psw"). value. length == 0 ||
									document. getElementById("file"). value. length == 0)
                                    {
                                       alert("Please fill out all the fields");
									   return false;
                                    }
									
								}  
								</script>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


<?php
}
else
{
    die('something went wrong with database'.mysqli_connect_error());
}
?>