<?php
	require_once('../include/config.php');

	$pageTitle = 'Messages';
	$page = 'Messages';
	
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/db-connection.php');
	include(ROOT_PATH . 'controllers/get-profile.php');
	include(ROOT_PATH . 'include/nav-logged-in.php');

?>

			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-sm-9">

					<section class="row col-xs-12" id="messages-header">
						<a href="<?php echo BASE_URL; ?>profile/messages.php">
							<span class="glyphicon glyphicon-envelope"></span>
							<h3>Messages</h3>
						</a>
						<a href="<?php echo BASE_URL; ?>profile/messages.php"><span class="glyphicon glyphicon-refresh"></span></a>
						<a href="#"><span class="glyphicon glyphicon-arrow-up"></span></a>
						<button type="button" id="addFriendButton">Add New Friend</button>
					</section>

					<div class="add-friend-container row col-xs-12" id="addFriendContainer">
						<label id="add-friend-label" for="add_friend">Member's Username</label>
						<input class="add-friend-field" id="add_friend" type="text" name="add_friend">
						<input class="add-friend-submit" type="submit" value="Add">
					</div>

					<div id="friends">
						<div class="row col-xs-12">
							<div class="username-and-img">
								<img class="first-img" id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="first-h5">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
						</div>

						<div class="row col-xs-12">
							<div class="username-and-img">
								<img class="first-img" id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5 class="first-h5">$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
							<div class="username-and-img">
								<img id="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><!-- Hard-coded placeholder -->
								<h5>$username</h5><!-- Hard-coded placeholder -->
								<span class="glyphicon glyphicon-trash" id="glyphiconTrash"></span><!-- Hard-coded placeholder -->
							</div>
						</div>
					</div>
				</div>
				<?php
					include(ROOT_PATH . 'include/profile/recommended.php');
				?>		
			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'include/footer-logged-in.php');
	?>