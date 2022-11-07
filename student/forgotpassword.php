
		
	<html>
    <body>
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