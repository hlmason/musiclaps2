<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Official Site of Musiclaps">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Musiclaps | Congratulations</title>
	<link rel="icon" href="../favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="228x228" href="../favicon-228.png">
	<link rel="apple-touch-icon-precomposed" sizes="195x195" href="../favicon-195.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="../favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="../favicon-128.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="96x96" href="../favicon-96.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../favicon-72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../favicon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="48x48" href="../favicon-48.png">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> --><!-- Link left in for testing purposes -->
	<link rel="stylesheet" type="text/css" href="../walkthrough/assets/css/tutorial.css"><!-- Julie's Captivate -->
	<link rel="stylesheet" type="text/css" href="../assets/stylesheets/application.css">
	<!-- [if lt IE 9]> -->
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- [endif] -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../assets/javascripts/customized.bootstrap.min.js"></script>
	<script src="../assets/javascripts/index.js"></script>
	<script src="../assets/javascripts/modal.js"></script>
	<script src="../assets/javascripts/wmuSlider.min.js"></script>
	<script src="../walkthrough/assets/js/standard.js"></script><!-- Julie's Captivate -->
	<script src="../assets/javascripts/public-project.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
	            <button class="navbar-toggle" id="navbarToggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
	            </button>
	            <h4 id="menuJS" data-toggle="collapse" data-target=".navbar-collapse">Menu</h4>
				
				<a class="navbar-brand" href="../">
					<img src="../assets/images/header-and-footer/musiclaps-logo.png" alt="Musiclaps logo">
				</a>
			</div>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="musicDropdownLink" data-toggle="dropdown">Music<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" id="musicDropdownMenu" role="menu" aria-labelledby="musicDropdownLink">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/new-arrivals/">New Arrivals
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/recommended/">Recommended
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/staff-picks/">Staff Picks
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/collaborations/">Collaborations
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/all-music/">All Music
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="peopleDropdownLink" data-toggle="dropdown">People<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" id="peopleDropdownMenu" role="menu" aria-labelledby="peopleDropdownLink">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/players-wanted/">Players Wanted
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/under-construction/">Players Available
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/forum/">Forum
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/under-construction/">Collab Cafe
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" id="ourStoryDropdownLink" data-toggle="dropdown">Our Story<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" id="ourStoryDropdownMenu" role="menu" aria-labelledby="ourStoryDropdownLink">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/under-construction/">Technology
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/under-construction/">Company
									</a>
								</li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="../views/under-construction/">Contact
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>

				<form class="search" action="" method="get">
					<span class="glyphicon glyphicon-search" id="glyphiconSearch"></span><input class="search" id="searchJS" type="text" name="search" placeholder="Search">
				</form>
				
				<ul id="flags">
					<li><a><img id="usa-flag" src="../assets/images/header-and-footer/usa-flag.jpg" alt="American flag"></a></li>
					<li><a><img src="../assets/images/header-and-footer/japan-flag.jpg" alt="Japanese flag"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="logged-out">
					<li><a class="loginJS">Log in</a></li>
					<li><a class="registerJS">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Register modal -->
	<div class="modal fade" id="registerJS" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="modal-header" id="register-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h2 class="modal-title register-modal-heading" id="registerLabel">Register</h2>
				</div>

				<!-- Visible at viewport widths >= 768px -->
				<div class="modal-body" id="sn-login-modal-body-sm">
					<h4>Login using:</h4>
					<ul>
						<!-- TODO: Edit markup for functional login -->
						<li><a><img class="facebook-icon" src="../assets/images/global/facebook-icon.png" alt="Facebook icon"></a></li>
						<li><a><img class="twitter-icon" src="../assets/images/global/twitter-icon.png" alt="Twitter icon"></a></li>
						<li><a><img class="google-icon" src="../assets/images/global/google-icon.jpg" alt="Google icon"></a></li>
						<li><a><img id="microsoft-icon" src="../assets/images/header-and-footer/microsoft-icon.jpg" alt="Microsoft icon"></a></li>
					</ul>
				</div>

				<!-- Visible at viewport widths <= 767px -->
				<div class="modal-body" id="sn-login-modal-body-xs">
					<ul>
						<!-- TODO: Edit markup for functional login -->
						<li class="first-list-item"><form><img class="facebook-icon" src="../assets/images/global/facebook-icon.png" alt="Facebook icon"><input type="submit" value="Log in with Facebook"></form></li>
						<li><form><img class="twitter-icon" src="../assets/images/global/twitter-icon.png" alt="Twitter icon"><input type="submit" value="Log in with Twitter"></form></li>
						<li><form><img class="google-icon" src="../assets/images/global/google-icon.jpg" alt="Google icon"><input type="submit" value="Log in with Google"></form></li>
						<li><form><img id="microsoft-icon" src="../assets/images/header-and-footer/microsoft-icon.jpg" alt="Microsoft icon"><input type="submit" value="Log in with Microsoft"></form></li>
					</ul>
				</div>
				
				<div class="modal-footer" id="register-modal-footer">
					<button id="registrationFullJS" type="button">Register with Email</button>
			    </div>

			</div>
		</div>
	</div>
	<!-- End of register modal -->


	<!-- Email registration modal -->
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
								<option value=""></option>
								<option value="jan">Jan</option>
								<option value="feb">Feb</option>
								<option value="mar">Mar</option>
								<option value="apr">Apr</option>
								<option value="may">May</option>
								<option value="jun">Jun</option>
								<option value="jul">Jul</option>
								<option value="aug">Aug</option>
								<option value="sep">Sep</option>
								<option value="oct">Oct</option>
								<option value="nov">Nov</option>
								<option value="dec">Dec</option>
							</select> /
							
							<select>
								<option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select> /
							
							<select>
								<option value=""></option><!-- There must be a better way to do this but I don't know it! -->
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
							</select>
						</div>
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
							<img id="captcha-img" src="../assets/images/header-and-footer/captcha.png" alt="Captcha"><!-- Hard-coded placeholder -->
							<label for="captcha"><span class="musiclaps-blue">*</span> Please type in the text</label>
							<input id="captcha" type="text" name="captcha">
						</div>
						
						<div id="agree-checkbox">
							<input type="checkbox" name="tos" value="agree">&nbsp; I agree to the Musiclaps <a href="../views/terms/" target="blank">Terms of Service</a> and <a href="../views/privacy/" target="blank">Privacy Policy</a>.
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
	<!-- End of email registration modal -->


	<!-- Login modal -->
	<div class="modal fade" id="loginJS" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">

				<div class="modal-header" id="login-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h2 class="modal-title login-modal-heading" id="loginLabel">Log in</h2>
				</div>

				<!-- Visible at viewport widths >= 768px -->
				<div class="modal-body" id="sn-login-modal-body-sm">
					<h4>Login using:</h4>
					<ul>
						<!-- TODO: Edit markup for functional login -->
						<li><a><img class="facebook-icon" src="../assets/images/global/facebook-icon.png" alt="Facebook icon"></a></li>
						<li><a><img class="twitter-icon" src="../assets/images/global/twitter-icon.png" alt="Twitter icon"></a></li>
						<li><a><img class="google-icon" src="../assets/images/global/google-icon.jpg" alt="Google icon"></a></li>
						<li><a><img id="microsoft-icon" src="../assets/images/header-and-footer/microsoft-icon.jpg" alt="Microsoft icon"></a></li>
					</ul>
				</div>

				<!-- Visible at viewport widths <= 767px -->
				<div class="modal-body" id="sn-login-modal-body-xs">
					<ul>
						<!-- TODO: Edit markup for functional login -->
						<li class="first-list-item"><form><img class="facebook-icon" src="../assets/images/global/facebook-icon.png" alt="Facebook icon"><input type="submit" value="Log in with Facebook"></form></li>
						<li><form><img class="twitter-icon" src="../assets/images/global/twitter-icon.png" alt="Twitter icon"><input type="submit" value="Log in with Twitter"></form></li>
						<li><form><img class="google-icon" src="../assets/images/global/google-icon.jpg" alt="Google icon"><input type="submit" value="Log in with Google"></form></li>
						<li><form><img id="microsoft-icon" src="../assets/images/header-and-footer/microsoft-icon.jpg" alt="Microsoft icon"><input type="submit" value="Log in with Microsoft"></form></li>
					</ul>
				</div>

				<form action="" method="post">
					<div class="modal-body" id="login-modal-body">
						<input type="text" name="userid" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<div class="error-message">	

						</div>
					</div>
					<div class="modal-footer">
						<a>Forgot Password</a>
						<input type="submit" name="login" value="Log in">
				    </div>
				</form>

			</div>
		</div>
	</div>
	<!-- End of login modal -->

	<div id="wrapper">
		<div class="container">
	    <img src="images/colored_notes_border.png" width="800" height="100" alt=""/>
	     	<div id="contentwrap">
	       		<div id="content" style="height:400px;">
	              <p>Congratulations! </p>
	                <p>
	                You completed the walkthrough.</p><p> Please wait while we re-direct you to the
	                  <?php 
					  $answer = $_POST['answer'];
					  if ($answer == "profile") {
						  echo "sign up page.";
						//re-direct to signup page
						 echo "<script language='javascript'>
						 	$('#registerJS').modal('show');
						 </script>";

					  	  } else {
							  echo "soundcheck.";
							  //re-direct to soundcheck
	                          echo 
	                          	"<script language='javascript'>
		                          	setTimeout(function() {
		                          		window.location.replace('../views/live-player/index.html');
		                          	}, 5000);
								</script>";
						  }
					?>
	                  
	                </p>
	               
	             </div>
	           <img src="images/colored_notes_border.png" width="800" height="100" alt=""/> 
		   </div>
		</div>

		
		<div class="space-above-footer"></div>
	</div>

	<footer class="navbar-default">
		<div class="container">
			<a class="navbar-brand" href="../">
				<img src="../assets/images/header-and-footer/musiclaps-logo.png" alt="Musiclaps logo">&nbsp; &copy; 2015
			</a>
			<ul class="nav navbar-nav navbar-left">
				<li><a href="../views/under-construction/">Company</a></li>
				<li><a href="../views/under-construction/">Press</a></li>
				<li><a href="../views/under-construction/">Contact</a></li>
				<li><a href="../views/privacy/">Privacy</a></li>
				<li><a href="../views/terms/">Terms</a></li>
				<li><a href="../views/faqs/">FAQs</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="//www.facebook.com/Musiclaps" target="blank"><img class="facebook-icon" src="../assets/images/global/facebook-icon.png" alt="Facebook icon"></a></li>
				<li><a href="//twitter.com/musiclaps" target="blank"><img class="twitter-icon" src="../assets/images/global/twitter-icon.png" alt="Twitter icon"></a></li>
				<li><a href="//www.youtube.com/user/Musiclaps" target="blank"><img id="youtube-icon" src="../assets/images/header-and-footer/youtube-icon.png" alt="YouTube icon"></a></li>
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
	<script src="../assets/javascripts/header.js"></script>
	<script src="../assets/javascripts/forum.js"></script>
	<script src="../assets/javascripts/user-menu.js"></script>
	<script src="../assets/javascripts/live-player.js"></script>
	<script src="../assets/javascripts/players-wanted.js"></script>
</body>
</html>