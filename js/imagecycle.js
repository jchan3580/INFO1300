/*
* INFO 1300
*/

// global variables
var index = 0;
var pic = ["apple_fest.jpeg", "DSC_0510.JPG", "DSC_0687.JPG"];
/* apple_fest Photo from: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust
* DSC_0510.JPG and DSC_0687.JPG both taken by Amy Zhong
* 
*/
var main = document.getElementByID('main_img');

// functions
function change(command) {

	"use strict";

	// when previous button is clicked
	if (command == 0) {
		// when current image is not first image in the array
		if (index > 0) {
			main_img.src = 'images/' + pic[index-1];
			index = index-1;
		// when current image is first image in the array, loop around to the last image in array
		} else {
			index = pic.length-1;
			main_img.src = 'images/' + pic[index];
		}
	}

	// when next button is clicked
	if (command == 1) {
		// when current image is not the last image in the array
		if (index < pic.length-1){
			main_img.src = 'images/' + pic[index+1];
			index = index+1;
		// when current image is last image in the array, next image loops to the first image in array
		} else {
			index = 0;
			main_img.src = 'images/' + pic[index];
		}
	}
}