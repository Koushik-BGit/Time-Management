// JavaScript Document
$(document).ready( function(){
    $(".activities-area").mCustomScrollbar({
        axis:"y",
    });
    
    $(".proj_scroll").mCustomScrollbar({
        axis:"y",
    });

 $(".popup-btn").on('click',function(e){
	  var $thisAttr = $(this).attr('rel');
	  $(".modal").removeClass('open');
	  //$('#'+$thisAttr).fadeIn();
	  $('#'+$thisAttr).addClass('open');
	  $(".overlay").fadeIn();
	  e.stopPropagation();
	}); 
	$(".overlay, .modal-header .close, .btn-cancel").click(function(){
	  //$(".modal").fadeOut();
	  $(".modal").removeClass('open');
	  $(".overlay").fadeOut();
});





});


/*
$(window).load( function(){
	$('#grid-v').addClass('act');
	$('.view-box').addClass('girid-box');
	$('.grid-and-list-area').addClass('extra-area');
});

$('#grid-v').click( function(){
	$('#list-v').removeClass('act');
	$('.view-box').addClass('girid-box');
	$(this).addClass('act');
	$('.grid-and-list-area').addClass('extra-area');	
});
$('#list-v').click( function(){
	$('#grid-v').removeClass('act');
	$('.view-box').removeClass('girid-box');
	$(this).addClass('act');
	$('.grid-and-list-area').removeClass('extra-area');
});


$('.menu-ssearch').click( function(){
	$(this).toggleClass('close');
	$('header .sear-box').slideToggle('slow');
});

$('.submenu-main').removeClass('open');

$('nav li').hover(function(){
	$('nav li').removeClass('act');
	$(this).addClass('act');
	x=$(this).index();
	$('.submenu-main').removeClass('open');
	$('.submenu-main:eq('+x+')').addClass('open');
});


$(".plan-sideber-inner").mCustomScrollbar({
    axis:"y"
});


$(".open-plan").on('click',function(e){
  $('.plan-sideber').addClass('open');
  $(".overlay").fadeIn('slow');
}); 
$(".aside-close, .overlay").click(function(){
  $('.plan-sideber').removeClass('open');
  $(".overlay").fadeOut('slow');
});*/



