
		
	<html>
		<head>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
</head>
    <body>
	<?php
    if (isset($_GET['message'])) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><center>';
        echo ($_GET["message"]);
        echo '</center><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    ?>
        <form action="confirmation.php" method="post">

			<br><br><br>
			<div class="form-row">
				<div class="form-holder form-holder-2">
					<fieldset>
						<legend>Your Email <span id=""></span> </legend>
						<input type="email" name="email" id="email"
							pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com">
					</fieldset>
				</div>
			</div>
			<br><br>
<div class="form-row">

									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>One thing do you think of the most each day?</legend>
											<select name="favques" id="favques">
												<option value="not selected" selected>select your option</option>
												<option value="family and friends">family and friends</option>
												<option value="happiness">Happiness</option>
												<option value="peace of mind">peace of mind</option>
												<option value="career and future">career and future</option>
											</select>
										</fieldset>
									</div>
								</div>
								<br><br>
                                <div class="form-holder">
										<fieldset>
											<legend>Favourite place</legend>
											<select name="place" id="place">
												<option value="not selected" selected>select your option</option>
												<option value="India">India</option>
												<option value="USA">USA</option>
												<option value="France">France</option>
												<option value="Korea">Korea</option>
											</select>
										</fieldset>
									</div>
									<br><br>
                                    <div class="form-holder">
										<fieldset>
											<legend>Favourite language</legend>
											<select name="language" id="language">
												<option value="not selected" selected>select your option</option>
												<option value="Tamil">Tamil</option>
												<option value="English">English</option>
												<option value="French">French</option>
												<option value="Mandarin">Mandarin</option>
											</select>
										</fieldset>
									</div>
									<br><br>
									<input type="submit" value="submit">
</form>
</body>
</html>