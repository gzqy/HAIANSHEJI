// 侧边栏top点击回置顶部
$(function(){
	$('.reqireda>a').css('height','32px');
	$('.besideturntop').click(function() {
		 $('html,body').animate({scrollTop:0},'slow');
	});
	$('script').remove('#jquery');

	$(document).scroll(function(){
		if($(this).scrollTop()>=200){
			$('.besidenavbox').fadeIn(300);
		}else{
			$('.besidenavbox').fadeOut(10);
		}	
	});
});
