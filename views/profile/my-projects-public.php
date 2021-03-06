<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Public Projects';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
	include(ROOT_PATH . 'views/include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9 projects-container">

					<!-- Project listings -->
					<?php
						include(ROOT_PATH . 'views/include/profile/project-listings.php');
					?>
					<!-- End of project listings -->


						<!-- Project form -->
						<?php
							include(ROOT_PATH . 'views/include/profile/project-form.php');
						?>
						<!-- End of project form -->


					<!-- "Change Project Image" form -->
					<?php
						include(ROOT_PATH . 'views/include/profile/change-project-img-form.php');
					?>
					<!-- End of "Change Project Image" form -->

				</div>
				<?php
					include(ROOT_PATH . 'views/include/profile/recommended.php');
				?>

			</div>
			<div class="col-lg-1"></div>	
		
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer-logged-in.php');
	?>