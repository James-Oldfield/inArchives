/**
 * inArchives
 * http://james-oldfield.co
 *
 * Copyright (c) 2015 James Oldfield
 * Licensed under the GPLv2+ license.
 */
 
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