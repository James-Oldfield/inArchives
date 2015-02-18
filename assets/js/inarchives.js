/*! inArchives - v0.1.0 - 2015-02-18
 * http://james-oldfield.co
 * Copyright (c) 2015; * Licensed GPLv2+ */
( function( window, undefined ) {
	'use strict';

	var counter = countdown(  new Date(2015, 2, 10) ).toString();
	document.getElementById('countdown').innerHTML = counter;

	window.setInterval(addToPage, 1000);

	function addToPage() {
		counter = countdown(  new Date(2015, 2, 10) ).toString();
		document.getElementById('countdown').innerHTML = counter;
	}

 } )( this );