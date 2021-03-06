		
		<div class="space-above-footer"></div>
	</div>

	<footer class="navbar-default">
		<div class="container">
			<a class="navbar-brand" href="<?php echo BASE_URL; ?>">
				<?php
					$date = date_default_timezone_set('America/Los_Angeles'); // Required to use PHP date() function below
				?>
				<img src="<?php echo BASE_URL; ?>assets/images/header-and-footer/musiclaps-logo.png" alt="Musiclaps logo">&nbsp; &copy; <?php echo date('Y'); ?>
			</a>
			<ul class="nav navbar-nav navbar-left">
				<li><a class="<?php if ($page_title == "Company") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>views/under-construction/">Company</a></li>
				<li><a class="<?php if ($page_title == "Press") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>views/under-construction/">Press</a></li>
				<li><a class="<?php if ($page_title == "Contact") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>views/under-construction/">Contact</a></li>
				<li><a class="<?php if ($page_title == "Privacy Policy") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>views/privacy/">Privacy</a></li>
				<li><a class="<?php if ($page_title == "Terms of Service") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>views/terms/">Terms</a></li>
				<li><a class="<?php if ($page_title == "FAQs") { echo "active"; } ?>" href="<?php echo BASE_URL; ?>views/faqs/">FAQs</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="//www.facebook.com/Musiclaps" target="blank"><img class="facebook-icon" src="<?php echo BASE_URL; ?>assets/images/global/facebook-icon.png" alt="Facebook icon"></a></li>
				<li><a href="//twitter.com/musiclaps" target="blank"><img class="twitter-icon" src="<?php echo BASE_URL; ?>assets/images/global/twitter-icon.png" alt="Twitter icon"></a></li>
				<li><a href="//www.youtube.com/user/Musiclaps" target="blank"><img id="youtube-icon" src="<?php echo BASE_URL; ?>assets/images/header-and-footer/youtube-icon.png" alt="YouTube icon"></a></li>
			</ul>
		</div>
	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
		WebFont.load({
		    google: {
		      families: ['Roboto Condensed', 'Roboto:300,400,700']
		    }
		});
	</script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/header.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/forum.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/user-menu.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/live-player.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/players-wanted.js"></script>
</body>
</html>