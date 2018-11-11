$(window).scroll(function() {    

	var scroll = $(window).scrollTop();
		mixes = $('#mixes').offset();
		blog = $('#blog').offset();
		contact = $('#contact').offset();
		gallery = $('#gallery').offset();

	if ( $('body').hasClass('front') ) {

		if (scroll >= 200) {
			$('body').addClass('active');
		} else {
			$('body').removeClass('active nav-open');
		}

	    if (mixes.top - 150 <= scroll) { // mixes block
	    	$('div.sections section#mixes').addClass('active');
	    	$('div.sections section').not('#mixes').removeClass('active');
	    	$('nav.navigation ul li a.mixes').addClass('active');
	    	$('nav.navigation ul li a').not('.mixes').removeClass('active');
	    }

	    if (blog.top - 150 <= scroll) { // blog block
	    	$('div.sections section#blog').addClass('active');
	    	$('div.sections section').not('#blog').removeClass('active');
	    	$('nav.navigation ul li a.blog').addClass('active');
	    	$('nav.navigation ul li a').not('.blog').removeClass('active');
	    }

	    if (contact.top - 150 <= scroll) { // contact block
	    	$('div.sections section#contact').addClass('active');
	    	$('div.sections section').not('#contact').removeClass('active');
	    	$('nav.navigation ul li a.contact').addClass('active');
	    	$('nav.navigation ul li a').not('.contact').removeClass('active');
	    }

	    if (gallery.top - 150 <= scroll) { // gallery block
	    	$('div.sections section#gallery').addClass('active');
	    	$('div.sections section').not('#gallery').removeClass('active');
	    	$('nav.navigation ul li a.gallery').addClass('active');
	    	$('nav.navigation ul li a').not('.gallery').removeClass('active');
	    }
	}

 });

$(document).ready(function () {

	setTimeout(function () {
		$('body').addClass('ready');
	}, 500);
	
	if ($('h1.heading').text() === 'Contact') {
		$('nav.navigation ul li a.contact').addClass('active');
	}

    $('nav.navigation.home a').click(function(){ // banner scroll to
    	var $href = $(this).attr('href');
			$anchor = $($href).offset();
	    $('html, body').animate({ scrollTop: $anchor.top - 50 }, 500);
	    if ( $('body').hasClass('nav-open') ) {
	    	$('body').toggleClass('nav-open');
	    }
	    return false;
	});

	$('.intro ul li a').click(function(){ // intro scroll to
		var $href = $(this).attr('href');
			$anchor = $($href).offset();
	    $('html, body').animate({ scrollTop: $anchor.top - 250 }, 1000);
	    return false;
	});

	$('.block input[type="text"], .block textarea').blur(function () {
		if ($(this).val()) {
			$(this).parent().addClass('active');
		} else { 
			$(this).parent().removeClass('active');
		}
	});

	$('div.nav-toggle').click(function () {
		$('body').toggleClass('nav-open');
	});

	var $masonry = $('.masonry').masonry({
		itemSelector: '.masonry figure',
		gutter:10
	});

	$masonry.imagesLoaded( function() {
	  $masonry.masonry();
	});

	$('.show-tracklist').click(function (e) {
		e.preventDefault();
		var thisTracklist = $(this).parent().next('.mix-tracklist');

		$('.show-tracklist').not(this).removeClass('opened');
		$(this).toggleClass('opened');
		
		if ($(thisTracklist).hasClass('opened')) {
			$('.mix-tracklist').removeClass('opened');
		} else {
			$('.mix-tracklist').removeClass('opened');
			thisTracklist.toggleClass('opened');
		}
		
	});

	$('.tracks-btn').click(function (e) {
		e.preventDefault();
		$(this).toggleClass('opened');
		$('.tracks').toggleClass('opened');
	});

	$('.all').click(function (e) {
		e.preventDefault();
		$('.list').addClass('all-mixes');
		$(this).addClass('all-mixes');
	});

	var nowPlayingLatest = $('body.front .now-playing .title a').attr('data-latest');

	$('#djmnAudio').jPlayer({
			ready:function() {
				$(this).jPlayer( "setMedia", {
					mp3: nowPlayingLatest
				});
			},
	        swfPath: "http://jplayer.org/latest/js",
	        supplied: "mp3",
	        cssSelectorAncestor: '.now-playing',
	        cssSelector: {
				play: '.play',
				pause: '.pause',
				stop: '.stop',
				seekBar: '.seek-bar',
				playBar: '.play-bar',
				mute: '.mute',
				unmute: '.unmute',
				volumeBar: '.volume-bar',
				volumeBarValue: '.volume-bar-value',
				volumeMax: '.volume-max',
				currentTime: '.current',
				duration: '.duration',
				repeat: '.repeat',
				repeatOff: '.repeat-off',
				gui: '.gui',
			},
		});

	$('.mix-play').click(function (e) {

		e.preventDefault();

		var mp3Link = $(this).attr('data-src');
			mixName = $(this).attr('data-name');
			mixEpisode = $(this).attr('data-ep');
			mixURL = $(this).attr('data-url');

			stripCoverBraces = $(this).attr('data-cover');
			mixCover = stripCoverBraces.substring(1, stripCoverBraces.length-1);
			stripTrackBraces = $(this).attr('data-tracks');
			mixTracks = stripTrackBraces.substring(1, stripTrackBraces.length-1);
			
			if (mixEpisode != '') {
				mixEpisode = ' Episode ' + mixEpisode;
			}
			

		$('body').addClass('playing');

		$('.now-playing .cover').empty().append(mixCover);
		$('.now-playing .name a').attr('href',mixURL).empty().append(mixName + mixEpisode);
		$('.now-playing .tracks .list').empty().append(mixTracks);


        $('#djmnAudio').jPlayer("setMedia", {
            mp3: mp3Link
        }).jPlayer('play');


	});

});

