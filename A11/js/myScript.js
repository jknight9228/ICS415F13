/*
 * ICS 415 - Assignment 11
 * jQuery FAQ Page
 * Author: James Knight
 */


$(document).ready(function () {

		$('.faqs dd').hide();
		$('.faqs dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){ 
		$(this).next().slideToggle('normal'); 
		}); 
	
});