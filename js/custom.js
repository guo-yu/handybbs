// IT IS A require.async TPL
//	require.async('mp3' , function () {
//		audiojs.events.ready(function() {
//		    audiojs.createAll();
//		});
//	});

// feel free to write some sth cool...
define(function(require) {
	// require libs
	require('jq');
	$(document).ready(function() {
		$('.active-nav').toggle(function () {
			$(this).addClass('actived');
			$(this).find('i').removeClass().addClass('icon-circle-arrow-up');
			$('nav').slideDown('fast');
		}, function () {
			$(this).removeClass('actived');
			$(this).find('i').removeClass().addClass('icon-circle-arrow-down');
			$('nav').slideUp('fast');
		});
		$('.side-cnt li').prepend('<i class="icon-chevron-right"></i>')
	});
});