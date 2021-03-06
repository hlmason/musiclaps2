<?php
	require_once('controllers/require/config.php');

	$page_title = 'Play with the World Today';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
?>

	<div id="wrapper">

		<h1 class="landing-page">
			Online <a href="<?php echo BASE_URL; ?>views/collaborations/index-logged-in.php">Music Collaboration</a> Made Simple
		</h1>
		<div id="landing-page-hero">
			<div id="musical-notes-map"></div>
			<script>musicianSilhouetteRandomizer()</script><!-- Randomly rotates through silhouette images of musicians on landing page -->
		</div>
		
		<div class="container" id="stage">
			<div id="stage-inner">
				<div class="row">
					<div class="col-sm-4" id="education">
						<a href="#music-ed"><span><img src="<?php echo BASE_URL; ?>assets/images/landing-pg/music-book.png" alt="Book with music note"></span><br>
						Education</a><!-- Visible at viewport widths >= 768px -->
					</div>
					<div class="col-sm-4">
						<p>
							<sup>...... </sup> Record a Demo&nbsp;<sup> ......</sup>
						</p>
					</div>
					<div class="col-sm-4" id="contests">
						<a href="#contests-and-auditions"><span><img src="<?php echo BASE_URL; ?>assets/images/landing-pg/trophy.png" alt="Trophy"></span><br>
						Contests</a><!-- Visible at viewport widths >= 768px -->
					</div>
				</div>
				<div class="row">		
					<ul>
						<li><a href="<?php echo BASE_URL; ?>views/live-player/index-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/landing-pg/play-btn.png" alt="Play button"></a></li>
						<li><a href="<?php echo BASE_URL; ?>views/live-player/index-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/landing-pg/pause-btn.png" alt="Pause button"></a></li>
						<li><a href="<?php echo BASE_URL; ?>views/live-player/index-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/landing-pg/stop-btn.png" alt="Stop button"></a></li>
						<li><a href="<?php echo BASE_URL; ?>views/live-player/index-logged-in.php"><img src="<?php echo BASE_URL; ?>assets/images/landing-pg/record-btn.png" alt="Record button"></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container wmuSlider">
		    <div class="row wmuSliderWrapper">
		    	<article>
		            <img src="assets/images/sample-album-covers/electric-ladyland.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/in-a-sentimental-mood.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/miseducation-of-lauryn-hill.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/suburbs.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/21.jpg"><!-- Placeholder -->
		        </article>
		    	<article>
		            <img src="assets/images/sample-album-covers/at-folsom-prison.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/help.png"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/fire-of-unknown-origin.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/bodyguard.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/mandatory-fun.jpg"><!-- Placeholder -->
		        </article>
		        <article>
		            <img src="assets/images/sample-album-covers/dark-side-of-the-moon.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/dreamboat-annie.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/rumours.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/damn-the-torpedoes.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/nebraska.jpg"><!-- Placeholder -->
		        </article>
		        <article>
		        	<img src="assets/images/sample-album-covers/lungs.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/colour-the-small-one.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/im-over-it.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/holy-fire.jpg"><!-- Placeholder -->
		            <img src="assets/images/sample-album-covers/mobius-strips.jpg"><!-- Placeholder -->
		        </article>
		    </div>
		</div>
		<script>
			var options = { slideshow: false, animation: 'slide' };
			$('.wmuSlider').wmuSlider(options);
		</script>

		<section id="technology">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<h2>Technology</h2>
						<p><!-- Keep to approximately 45-75 characters per line -->
							Musiclaps makes music collaboration easy by enabling you to record and upload tracks using just your computer.  You can then share your work so that others can listen and collaborate by recording their tracks on top of yours.<br><br>

							Take your musical creations to the next level with Musiclaps!<br>
						</p>
						<ul>
							<li class="first-list-item"><a href="<?php echo BASE_URL; ?>views/live-player/index-logged-in.php">Try a soundcheck</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>assets/images/landing-pg/collaborate.png" alt="Silhouette of two people with music notes between them">
					</div>
				</div>
			</div>
		</section>

		<section id="backstage">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">					
						<h2>Backstage</h2>
						<p><!-- Keep to approximately 45-75 characters per line -->
							Music collaboration would not exist without people.  You will find these individuals here in our backstage section.
						</p>
						<ul>
							<li class="first-list-item"><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Find a gig</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Find a player</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Read or post a blog</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Post a gig, question, or killer riff!</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>assets/images/landing-pg/backstage.png" alt="Backstage pass">
					</div>
				</div>
			</div>
		</section>

		<section class="music-ed">
			<div class="container">
				<div class="row">
					<a id="music-ed"><div class="col-md-7 col-md-offset-1"></a>		
						<h2>Music Education</h2>
						<p><!-- Keep to approximately 45-75 characters per line -->
							Experience the future of music education using Musiclaps.
						</p>
						<ul>
							<li class="first-list-item"><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Little Kids rock song of the week!</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Rockstar GarageBand Composition</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Online Video Teacher-Private Lessons</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>assets/images/landing-pg/music-book.png" alt="Book with music note">
					</div>
				</div>
			</div>
		</section>

		<section class="contests-and-auditions">
			<div class="container">
				<div class="row">
					<a id="contests-and-auditions"><div class="col-md-7 col-md-offset-1"></a>					
						<h2>Contests and Auditions</h2>
						<p><!-- Keep to approximately 45-75 characters per line -->
							Compete in one of our contests.
						</p>
						<ul>
							<li class="first-list-item"><a href="assets/contests/musiclaps-contest.pdf" target="blank">In-House Contest</a></li>
							<li><a href="assets/contests/red-hot-chili-peppers.pdf" target="blank">Band Promotion Contest</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Content Dev Contest</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">SpoofTube Contest</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Monday Open Mics</a></li>
							<li><a href="<?php echo BASE_URL; ?>views/under-construction/index-logged-in.php">Wednesday Battles</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL; ?>assets/images/landing-pg/trophy.png" alt="Trophy">
					</div>
				</div>
			</div>
		</section>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>