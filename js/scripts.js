(function( root, $, undefined ) {
	"use strict";

	$(function () {
		$('.open_nav').on('click', function(e){
			e.preventDefault();
			$(this).toggleClass('open');
			$('.nav_bar .nav').toggleClass('open');
		});
	});

} ( this, jQuery ));