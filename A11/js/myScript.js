/*
 * ICS 415 - Assignment 11
 * jQuery FAQ Page
 * Author: James Knight
 */


$(document).ready(function() {
	$("li").click(function(){
		$(this).toggleClass("active");
		$(this).next("div").stop('true','true').slideToggle("slow");
	});
});
