// JavaScript Document

//	jQuery Tweet Scroller 
//	file name: rotate.js 
//	author: Pote
//	url: http://acpote.com
//	post url: http://acpote.com/blog/creating-rotating-twitter-feed-jquery 

$('document').ready(function() {

	setInterval("scrollTwt()", 4000);}); //every four seconds, run function
	
	function scrollTwt() {
		// sort list of elements
		var oCurTwt = $('ul#twitter_update_list li.current'); // set current li as variable
		var oNxtTwt = oCurTwt.next(); // set next li in variable
		if (oNxtTwt.length == 0) // if there are no li's left
		oNxtTwt = $('ul#twitter_update_list li:first'); // set first li as next
		// the fades
		oCurTwt.fadeOut('fast').removeClass('current'); //fade out current item
		oNxtTwt.fadeIn('slow').addClass('current'); // fade in next item

	}