<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Audition Projects';
	
	include(ROOT_PATH . 'models/new-db-connection.php');
	include(ROOT_PATH . 'include/header-logged-in.php');
	include(ROOT_PATH . 'include/profile/user-menu.php');

?>
		
			<div class="row col-lg-10 col-lg-offset-1">				
					
				<div class="row col-xs-12 col-md-9 projects-container">

					<!-- Project listings -->
					<?php
						include(ROOT_PATH . 'include/profile/project-listings.php');
					?>
					<!-- End of Project listings -->


						<!-- Project form -->
						<?php
							include(ROOT_PATH . 'include/profile/project-form.php');
						?>
						<!-- End of project form -->


					<!-- "Change Sound Image" form -->
					<?php
						include(ROOT_PATH . 'include/profile/change-sound-img-form.php');
					?>
					<!-- End of "Change Sound Image" form -->

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