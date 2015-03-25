/*! twpol - v0.1.0 - 2015-03-25
 * http://james-oldfield.co
 * Copyright (c) 2015; * Licensed GPLv2+ */
( function( window, undefined ) {
	'use strict';

	smoothScroll.init();

	var counter;
	addToPage();

	window.setInterval(addToPage, 1000);

	function addToPage() {
		counter = countdown(  new Date(2015, 3, 18, 12) ).toString();
		document.getElementById('countdown').innerHTML = counter;
	}

 } )( this );