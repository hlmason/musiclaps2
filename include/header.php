<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Official Site of Musiclaps">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="228x228" href="<?php echo BASE_URL; ?>favicon-228.png">
	<link rel="apple-touch-icon-precomposed" sizes="195x195" href="<?php echo BASE_URL; ?>favicon-195.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo BASE_URL; ?>favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASE_URL; ?>favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php echo BASE_URL; ?>favicon-128.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo BASE_URL; ?>favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASE_URL; ?>favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="96x96" href="<?php echo BASE_URL; ?>favicon-96.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASE_URL; ?>favicon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo BASE_URL; ?>favicon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="48x48" href="<?php echo BASE_URL; ?>favicon-48.png">
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/stylesheets/main.css">
	<title>Musiclaps | <?php echo $pageTitle; ?></title>
	<!-- [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/javascripts/customized.bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/index.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/wmuSlider.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/modal.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/live-player.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/players-wanted.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/javascripts/profile/public-project.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header"><!-- For Firefox and IE -->
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
	            </button>
				<a class="navbar-brand" href="<?php echo BASE_URL; ?>">
					<img src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/musiclaps-logo.png" alt="Musiclaps logo">
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="musicDropdownMenu" data-toggle="dropdown">Music
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="musicDropdownMenu">
								<li role="presentation"><a class="<?php if ($page == "New Arrivals") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>new-arrivals/">New Arrivals</a></li>
								<li role="presentation"><a class="<?php if ($page == "Recommended") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>recommended/">Recommended</a></li>
								<li role="presentation"><a class="<?php if ($page == "Staff Picks") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>staff-picks/">Staff Picks</a></li>
								<li role="presentation"><a class="<?php if ($page == "Collaborations") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>collaborations/">Collaborations</a></li>
								<li role="presentation"><a class="<?php if ($page == "All Music") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>all-music/">All Music</a></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="peopleDropdownMenu" data-toggle="dropdown">People
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="peopleDropdownMenu">
								<li role="presentation"><a class="<?php if ($page == "Players Wanted") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>players-wanted/">Players Wanted</a></li>
								<li role="presentation"><a class="<?php if ($page == "Players Available") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction.php">Players Available</a></li>
								<li role="presentation"><a class="<?php if ($page == "Collab Cafe") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction.php">Collab Cafe</a></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="ourStoryDropdownMenu" data-toggle="dropdown">Our Story
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="ourStoryDropdownMenu">
								<li role="presentation"><a class="<?php if ($page == "Technology") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction.php">Technology</a></li>
								<!-- <li role="presentation"><a class="<?php if ($page == "FAQs (Forum)") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>forum">FAQs (Forum)</a></li> -->
								<li role="presentation"><a class="<?php if ($page == "Company") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction.php">Company</a></li>
								<li role="presentation"><a class="<?php if ($page == "Contact") { echo "active"; } ?>" role="menuitem" tabindex="-1" href="<?php echo BASE_URL; ?>under-construction.php">Contact</a></li>
							</ul>
						</div>
					</li>
				</ul>

				<input id="search" type="text" name="search" placeholder="Search"><span class="glyphicon glyphicon-search"></span>
				
				<ul id="flags">
					<li><a><img id="usa-flag" src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/usa-flag.jpg" alt="American flag"></a></li>
					<li><a><img src="<?php echo BASE_URL; ?>assets/images/nav-and-footer/japan-flag.jpg" alt="Japanese flag"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="logged-out">
					<li><a class="loginJS">Log in</a></li>
					<li><a class="registerJS">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Register modal -->
	<?php
		include(ROOT_PATH . 'include/modals/register.php');
	?>
	<!-- End of register modal -->


	<!-- Email registration modal -->
	<?php
		include(ROOT_PATH . 'include/modals/registration-full.php');
	?>
	<!-- End of email registration modal -->


	<!-- Login modal -->
	<?php
		include(ROOT_PATH . 'include/modals/login.php');
	?>
	<!-- End of login modal -->