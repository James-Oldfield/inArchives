/*! inArchives - v0.1.0 - 2015-02-18
 * http://james-oldfield.co
 * Copyright (c) 2015; * Licensed GPLv2+ */
( function( window, undefined ) {
	'use strict';


		window.setInterval(addToPage, 1000);

	function addToPage() {
		var counter = countdown(  new Date(2015, 2, 10) ).toString();
		// console.log(counter);
	}

 } )( this );