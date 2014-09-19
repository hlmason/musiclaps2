		
		<div class="space-above-footer"></div>
	</div>

	<footer class="navbar-default">
		<div class="container">
			<a class="navbar-brand" href="<?php echo BASE_URL; ?>index-logged-in.php">
				<?php
					$date = date_default_timezone_set('America/Los_Angeles'); // Required to use PHP date() function below
				?>
				<img src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/musiclaps-logo.png" alt="Musiclaps logo">&nbsp; &copy; <?php echo date('Y'); ?>
			</a>
			<ul class="nav navbar-nav navbar-left">
				<li><a class="<?php if ($page == "About") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">About</a></li>
				<li><a class="<?php if ($page == "Press") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Press</a></li>
				<li><a class="<?php if ($page == "Contact") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>under-construction-logged-in.php">Contact</a></li>
				<li><a class="<?php if ($page == "Privacy") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>privacy/index-logged-in.php">Privacy</a></li>
				<li><a class="<?php if ($page == "Terms") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>terms/index-logged-in.php">Terms</a></li>
				<li><a class="<?php if ($page == "FAQs") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>faqs/index-logged-in.php">FAQs</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://www.facebook.com/Musiclaps" target="blank"><img class="facebook-icon" src="<?php echo BASE_URL; ?>assets/images/global/facebook-icon.png" alt="Facebook icon"></a></li>
				<li><a href="https://twitter.com/musiclaps" target="blank"><img class="twitter-icon" src="<?php echo BASE_URL; ?>assets/images/global/twitter-icon.png" alt="Twitter icon"></a></li>
				<li><a href="https://www.youtube.com/user/Musiclaps" target="blank"><img id="youtube-icon" src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/youtube-icon.png" alt="YouTube icon"></a></li>
			</ul>
		</div>
	</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
		WebFont.load({
		    google: {
		      families: ['Roboto Condensed', 'Roboto:300,400,700']
		    }
		});
	</script>
</body>
</html>