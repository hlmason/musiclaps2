<div class="modal fade" id="registrationFull" tabindex="-1" role="dialog" aria-labelledby="registrationFullLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header" id="registration-full-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h2 class="modal-title registration-full-modal-heading" id="registrationFullLabel">Email Registration</h2>
			</div>
			
			<form class="registrationForm" id="resetForm" action="" method="post">	
				<div class="modal-body" id="registration-full-modal-body">
					<div id="validationErrorMessages"></div>	
					<div>
						<label id="email-label" for="email"><span class="musiclaps-blue">*</span> Email Address</label>
						<input id="email" type="email" name="email">
					</div>
					
					<div>
						<label for="userid"><span class="musiclaps-blue">*</span> Username</label>
						<input id="userid" type="text" name="userid">
					</div>
					
					<div>
						<label for="password"><span class="musiclaps-blue">*</span> Password <span class="glyphicon glyphicon-question-sign glyphiconQuestionSignRegistration"></span></label>
						<div class="password-req" id="passwordReq">Passwords must contain 6 to 12 characters and at least 1 letter and 1 number</div>
						<input id="password" type="password" name="password">
					</div>
					
					<div>
						<label for="confirm_password"><span class="musiclaps-blue">*</span> Confirm Password</label>
						<input id="confirm_password" type="password" name="confirm_password">
					</div>

					<div>
						<label id="birth-date-label-modal" for="birth_date_registration"><span class="musiclaps-blue">*</span> Birth Date</label>
						<select class="birth-date-field" id="birth_date_registration" name="birthday">
							<!-- Birth date form -->
						<?php
							include(ROOT_PATH . 'views/include/birth-date-form.php');
						?>
					<!-- End of birth date form -->

					<div>
						<label id="gender-label" for="gender"><span class="musiclaps-blue">*</span> Gender</label>
						<select id="gender" name="gender">
							<option value=""></option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
					
					<div>
						<label id="zip-or-postal-code" for="zip_or_postal_code"><span class="musiclaps-blue">*</span> Zip/Postal Code</label><!-- Note: 'zip-or-postal-code' must be an id to work -->
						<input id="zip_or_postal_code" type="text" name="zipcode">
					</div>
					
					<div>
						<img id="captcha-img" src="<?php echo BASE_URL; ?>assets/images/header-and-footer/captcha.png" alt="Captcha"><!-- Hard-coded placeholder -->
						<label for="captcha"><span class="musiclaps-blue">*</span> Please type in the text</label>
						<input id="captcha" type="text" name="captcha">
					</div>
					
					<div id="agree-checkbox">
						<input type="checkbox" name="tos" value="agree">&nbsp; I agree to the Musiclaps <a href="<?php echo BASE_URL; ?>views/terms/" target="blank">Terms of Service</a> and <a href="<?php echo BASE_URL; ?>views/privacy/" target="blank">Privacy Policy</a>.
					</div>
				</div>
				
				<div class="modal-footer registration-modal-footer">
					<input type="submit" value="Register">
					<input type="hidden" name="register" value="register">
				</div>
			</form>
		</div>
	</div>
</div>
