<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Players Wanted';
	
	include(ROOT_PATH . 'views/include/header-logged-in.php');
?>

	<div id="wrapper">
		<div class="container">

			<div id="players-wanted-page">

				<div class="row">
					<div class="col-xs-1"></div>

					<div class="col-xs-10">
						<section id="categories-container">
							<div class="categories" id="karaokeContainer">
								<h4>Karaoke</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="bandMembersContainer">
								<h4>Band Members</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">1</h4>
							</div>

							<div class="categories" id="arrangersContainer">
								<h4>Arrangers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="lyricsContainer">
								<h4>Lyric Writers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="composersContainer">
								<h4>Composers</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">0</h4>
							</div>

							<div class="categories" id="othersContainer">
								<h4>Other</h4>
								<img src="<?php echo BASE_URL; ?>assets/images/live-player-pg/rainbow-music-notes.png" alt="#"><!-- Placeholder -->
								<h4 class="last-h4">1</h4>
							</div>
						</section>
					</div>	

					<div class="col-xs-1"></div>
				</div>

				<div class="row">
					<div class="col-xs-1"></div>
				 
				 	<div class="players-wanted-container" id="karaokeSongsWantedContainer">
						<section class="col-xs-10">
							<h3>Karaoke Songs Wanted</h3>
							<button class="post-new-request postNewRequest" type="button">Post New Request</button>
						</section>
					</div>

					<div class="players-wanted-container" id="bandMembersWantedContainer">
						<section class="col-xs-10">
							<h3>Band Members Wanted</h3>
							<button class="post-new-request postNewRequest" type="button">Post New Request</button>

							<div class="table-scroll-x-axis">
								<table><!-- Hard-coded placeholder -->
									<thead>
										<tr class="thead-tr">
											<th></th>
											<th>Requester</th>
											<th></th>
											<th>Posted</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#</td><!-- Hard-coded placeholder -->
											<td>
												<a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><span class="username">$username</span></a>
											</td><!-- Hard-coded placeholder -->
											<td>$Request Title</td><!-- Hard-coded placeholder -->
											<td>$# days/months ago</td><!-- Hard-coded placeholder -->
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					</div>

					<div class="players-wanted-container" id="arrangersWantedContainer">
						<section class="col-xs-10">
							<h3>Arrangers Wanted</h3>
							<button class="post-new-request postNewRequest" type="button">Post New Request</button>
						</section>
					</div>

					<div class="players-wanted-container" id="lyricWritersWantedContainer">
						<section class="col-xs-10">
							<h3>Lyric Writers Wanted</h3>
							<button class="post-new-request postNewRequest" type="button">Post New Request</button>
						</section>
					</div>

					<div class="players-wanted-container" id="composersWantedContainer">
						<section class="col-xs-10">
							<h3>Composers Wanted</h3>
							<button class="post-new-request postNewRequest" type="button">Post New Request</button>
						</section>
					</div>

					<div class="players-wanted-container" id="othersWantedContainer">
						<section class="col-xs-10">
							<h3>Others Wanted</h3>
							<button class="post-new-request postNewRequest" type="button">Post New Request</button>

							<div class="table-scroll-x-axis">
								<table><!-- Hard-coded placeholder -->
									<thead>
										<tr class="thead-tr">
											<th></th>
											<th>Requester</th>
											<th></th>
											<th>Posted</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>#</td><!-- Hard-coded placeholder -->
											<td>
												<a href="<?php echo BASE_URL; ?>views/profile/public-profile-logged-in.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><span class="username">$username</span></a>
											</td><!-- Hard-coded placeholder -->
											<td>$Request Title</td><!-- Hard-coded placeholder -->
											<td>$# days/months ago</td><!-- Hard-coded placeholder -->
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					</div>

					<div class="players-wanted-container" id="noListingsContainer">
						<section class="row col-xs-12">
							<h4 class="no-listings" id="noListings">Currently there are no listings</h4>
						</section>
					</div>

					<div class="col-xs-1"></div>
				</div>

				<div class="row">
					<div class="col-xs-2"></div>
					
					<div class="col-xs-8">
						<section id="newRequestContainer">
							<div id="glyphicon-and-h4-title">
								<span class="glyphicon glyphicon-pencil"></span>
								<h4 id="new-request">&nbsp; New Request</h4>
							</div>
							
							<form action="" method="post">
								<div>
									<label id="request-title-label" for="request_title">Title</label>
									<input class="request-title" id="request_title" type="text" name="request_title">
								</div>
								
								<div>
									<label for="request_description">Description</label>
									<textarea id="request_description" name="request_description"></textarea>
								</div>

								<input id="post-request" type="submit" value="Post">
							</form>
						</section>
					</div>
					
					<div class="col-xs-2"></div>
				</div>

			</div>

		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>