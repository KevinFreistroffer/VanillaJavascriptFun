"use strict";

var menuLinks = document.querySelectorAll('#header li a');
var mobileMainMenu = document.getElementById('mobile-main-menu');
var topBoxes = document.querySelectorAll('#top-three div.box');
var topBoxesOverlay = document.querySelectorAll('#top-three div.box-overlay');
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
    console.log(menuLinks)
});


/***************************************
 *  Toggles a single top button based on
 *  the clicked button
 * 1 toggles 2, 2 toggles 3, 3 toggles 1
 **************************************/
function toggleTopButtons( btnNumber ) {

	if ( window.getComputedStyle( topBoxesOverlay[ btnNumber -1 ], null ).getPropertyValue( "opacity" ) == 0.5 ) {
		topBoxesOverlay[ btnNumber -1].style.opacity = 1;
	}
	else {
		topBoxesOverlay[ btnNumber -1].style.opacity = 0.5;
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
		topBoxesOverlay[i].style.opacity = 0.5;
	}

}

/***************************************
 *  The showAllButtons() function
 **************************************/
function showAllButtons() {

	for( var i = 0; i < 3; i ++ ) {
		topBoxesOverlay[i].style.opacity = 1;
	}

}


/**************************
 *  Toggle Mobile Main Menu
 *************************/
function toggleMainMenu() {

	console.log( 'toggleMainMenu() called.' );

	if ( mobileMainMenu.classList.contains('open-mobile-main-menu') ) {
		mobileMainMenu.classList.remove('open-mobile-main-menu');
	}
	else {
		mobileMainMenu.classList.add('open-mobile-main-menu');
	}

}


/***************************************
 *  Auto closes mobile main menu if open 
 *  and window is resized past 700px
 **************************************/
window.onresize = function() {

		if ( window.innerWidth >= 700 && mobileMainMenu.classList.contains('open-mobile-main-menu') ) {
			mobileMainMenu.classList.remove('open-mobile-main-menu');
		}

};