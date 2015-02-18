/**
 * inArchives
 * http://james-oldfield.co
 *
 * Copyright (c) 2015 James Oldfield
 * Licensed under the GPLv2+ license.
 */
 
 ( function( window, undefined ) {
	'use strict';


		window.setInterval(addToPage, 1000);

	function addToPage() {
		var counter = countdown(  new Date(2015, 2, 10) ).toString();
		// console.log(counter);
	}

 } )( this );