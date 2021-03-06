<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'All Music';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
?>

	<div id="wrapper">
		<div class="container" id="all-music-page">

			<div class="row ads-container">
				<div class="col-xs-12 col-sm-6">
					<img class="first-img" src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-4.jpg" alt="Advertisement"><!-- Hard-coded placeholder -->
				</div>

				<div class="col-xs-12 col-sm-6">
					<img src="<?php echo BASE_URL; ?>assets/images/ads/sample-ad-5.jpg" alt="Advertisement"><!-- Hard-coded placeholder -->
				</div>
			</div>

			<h1>Search Results</h1>

			<div class="row">
				<div class="col-xs-12 col-md-4">
					<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php">
						<section class="row projects-container first">
							<div class="col-xs-4 col-sm-2 col-md-4">
								<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
							</div>
						
							<div class="col-xs-8 col-sm-10 col-md-8">
								<h4>$project title</h4><!-- Hard-coded placeholder -->
								<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
								<h5>Plays: <span class="normal">$#</span></h5><!-- Hard-coded placeholder -->
							</div>
						</section>
					</a>
				</div>

				<div class="col-xs-12 col-md-4">
					<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php">
						<section class="row projects-container">
							<div class="col-xs-4 col-sm-2 col-md-4">
								<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
							</div>
						
							<div class="col-xs-8 col-sm-10 col-md-8">
								<h4>$super duper long project title</h4><!-- Hard-coded placeholder -->
								<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
								<h5>Plays: <span class="normal">$#</span></h5><!-- Hard-coded placeholder -->
							</div>
						</section>
					</a>
				</div>

				<div class="col-xs-12 col-md-4">
					<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php">
						<section class="row projects-container">
							<div class="col-xs-4 col-sm-2 col-md-4">
								<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
							</div>
						
							<div class="col-xs-8 col-sm-10 col-md-8">
								<h4>$project title</h4><!-- Hard-coded placeholder -->
								<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
								<h5>Plays: <span class="normal">$#</span></h5><!-- Hard-coded placeholder -->
							</div>
						</section>
					</a>
				</div>

				<div class="col-xs-12 col-md-4">
					<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php">
						<section class="row projects-container">
							<div class="col-xs-4 col-sm-2 col-md-4">
								<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
							</div>
						
							<div class="col-xs-8 col-sm-10 col-md-8">
								<h4>$project title</h4><!-- Hard-coded placeholder -->
								<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
								<h5>Plays: <span class="normal">$#</span></h5><!-- Hard-coded placeholder -->
							</div>
						</section>
					</a>
				</div>

				<div class="col-xs-12 col-md-4">
					<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php">
						<section class="row projects-container">
							<div class="col-xs-4 col-sm-2 col-md-4">
								<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
							</div>
						
							<div class="col-xs-8 col-sm-10 col-md-8">
								<h4>$super long project title</h4><!-- Hard-coded placeholder -->
								<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
								<h5>Plays: <span class="normal">$#</span></h5><!-- Hard-coded placeholder -->
							</div>
						</section>
					</a>
				</div>

				<div class="col-xs-12 col-md-4">
					<a href="<?php echo BASE_URL; ?>views/public-project/public-project-logged-in.php">
						<section class="row projects-container">
							<div class="col-xs-4 col-sm-2 col-md-4">
								<img class="projectImg" src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="Project image"><!-- Hard-coded placeholder -->
							</div>
						
							<div class="col-xs-8 col-sm-10 col-md-8">
								<h4>$project title</h4><!-- Hard-coded placeholder -->
								<h5>By: <span class="normal">$username</span></h5><!-- Hard-coded placeholder -->
								<h5>Plays: <span class="normal">$#</span></h5><!-- Hard-coded placeholder -->
							</div>
						</section>
					</a>
				</div>
			</div>

		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>