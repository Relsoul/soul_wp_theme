$(function(){

$('#soul_nav').find("ul").hide();

 		$('#soul_nav > li').hover(function() {
 			$(this).children('ul').stop().show(200);//二级菜单
 			
 			$(this).children('ul').children('li').hover(function(){
 			$(this).children('ul').stop(true,true).show(200);//三级菜单
 			},function(){
 				$(this).children('ul').stop().hide(200);
 			})	// alert('s')

 		}, function() {
 			$('#soul_nav').find("ul").stop().hide(200);
 		});





})