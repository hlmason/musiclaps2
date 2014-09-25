$(document).ready(function() {

	var newProjectDropdownMenu = $('ul#newProjectDropdownMenu');
	var newProjectCaret = $('#newProjectCaret');

	var newProject = $('section#newProject');
	var addPart = $('section#addPart');
	var addPartToGroup = $('section#addPartToGroup');


	// $('a#newProjectLink').mouseenter (function() {
	// 	newProjectCaret.addClass('upside-down');
	// 	newProjectDropdownMenu.show();
	// });

	$('a#newProjectLink').on('click', function() {
		if ( newProjectDropdownMenu.is(':hidden') ) {
			newProjectCaret.addClass('upside-down');
			newProjectDropdownMenu.show();
		} else {
			newProjectCaret.removeClass('upside-down');
			newProjectDropdownMenu.hide();
		}		
	});

	newProjectDropdownMenu.mouseleave (function() { // Makes dropdown menu go away without having to click
		newProjectCaret.removeClass('upside-down');
		newProjectDropdownMenu.hide();		
	});
	
	$('a#recordingPlayerLink').on('click', function() {
		window.location.href = 'new-project-recording-player.php';
	});
	$('a#uploadMP3Link').on('click', function() {
		window.location.href = 'new-project-upload-mp3.php';
	});


	newProject.hide();
	addPart.hide();
	addPartToGroup.hide();

	$('input').on('click', function() {
		if ( $('input[value="newProject"]').is(':checked') ) {
			addPart.hide();
			addPartToGroup.hide();
			newProject.fadeIn('fast');
		} else if ( $('input[value="addPart"]').is(':checked') ) {
			newProject.hide();
			addPartToGroup.hide();
			addPart.fadeIn('fast');
		} else if ( $('input[value="addPartToGroup"]').is(':checked') ) {
			addPart.hide();
			newProject.hide();
			addPartToGroup.fadeIn('fast');
		}
	});

});