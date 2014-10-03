$(document).ready(function() {

	var passwordReq = $('#passwordReq');
	var registerOrLogin = $('#registerOrLogin'); // Modal
	var register = $('#registerJS'); // Modal
	var login = $('#loginJS'); // Modal

	passwordReq.hide();

	$('.registerJS').on('click', function() { // This is a link on header.php and index.php, and a button on register-or-login.php
		if ( registerOrLogin.is(':visible') ) { // This modal is on the Live Player page
			registerOrLogin.modal('hide');
			register.modal('show');
		} else {
			register.modal('show');
		}
	});
		$('button#registrationFullJS').on('click', function() {
			register.modal('hide');
			$('#registrationFull').modal('show');
		});
		// Express registration per Bart's request.  Not sure where/how this is going to be integrated.
		// $('#registrationExpressJS').on('click', function() {
		// 	$('#registrationExpress').modal('show');
		// });
			$('.glyphicon-question-sign').hover(function() {
				passwordReq.fadeIn('slow');
			});

	$('.loginJS').on('click', function() { // This is a link on login.php and a button on register-or-login.php
		if ( registerOrLogin.is(':visible') ) { // This modal is on the Live Player page
			registerOrLogin.modal('hide');
			login.modal('show');
		} else {
			login.modal('show');

		}
	});

	$('button#registerOrLoginJS').on('click', function() { // This modal is on the Live Player page
		registerOrLogin.modal('show');
	});

});