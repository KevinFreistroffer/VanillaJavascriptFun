"use strict";

var btnOne   = document.getElementById('button-one');
var btnTwo   = document.getElementById('button-two');
var btnThree = document.getElementById('button-three');
var topBoxes = document.querySelectorAll('#top-three div.box');
var topButtons = document.querySelectorAll('#top-three div.box button');


/***************************************
 *  Fades in the top 3 boxes 1 at a time
 **************************************/
document.addEventListener("DOMContentLoaded", function(event) {

    setTimeout( function() {
    	topBoxes[0].style.opacity = 1;
    }, 300 );

    setTimeout( function() {
    	topBoxes[1].style.opacity = 1;
    }, 600 );

    setTimeout( function() {
    	topBoxes[2].style.opacity = 1;
    }, 900 );

});


/***************************************
 *  Toggles a single top button based on
 *  the clicked button
 * 1 toggles 2, 2 toggles 3, 3 toggles 1
 **************************************/
function toggleTopButtons( btnNumber ) {

	if ( window.getComputedStyle( topButtons[ btnNumber -1 ], null ).getPropertyValue( "opacity" ) == 0 ) {
		topButtons[ btnNumber -1].style.opacity = 1;
	}
	else {
		topButtons[ btnNumber -1].style.opacity = 0;
	}

}


/***************************************
 *  Hides or Shows all buttons
 *  by calling the hideAllButtons()
 *  or showAllButtons()
 *  functions
 **************************************/
function toggleAllTopButtons( toggleValue ) {

	if ( toggleValue === "hide" ) {
		hideAllButtons();
	}
	else {
		showAllButtons()
	}

}


/***************************************
 *  The hideAllButtons() function
 **************************************/
function hideAllButtons() {

	for( var i = 0; i < 3; i ++ ) {
		topButtons[i].style.opacity = 0;
	}

}

/***************************************
 *  The showAllButtons() function
 **************************************/
function showAllButtons() {

	for( var i = 0; i < 3; i ++ ) {
		topButtons[i].style.opacity = 1;
	}

}
