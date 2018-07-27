/* JavaScript Document */

// 横幅表单元素展示调整
var input_178 = $('.slide_form input[name="para178"]');
var input_180 = $('.slide_form input[name="para180"]');
var input_179 = $('.slide_form input[name="para179"]');
input_178.attr('placeholder','称呼');
input_180.attr('placeholder','面积');
input_179.attr('placeholder','手机号码');
/* 底部横幅 */
$(window).ready(function(){

	/* scroll display */
	$(this).scroll(function(){
		if(($(this)).scrollTop()>490){
			$('.slide_fo_a').slideDown(500);
			$('.slide_order').show();
		}else{
			$('.slide_fo_a').slideUp(500);
			$('.slide_order').hide();
		}
	});

	/* click slide_close element */
	$('.slide_close').click(function(event){
		event = event?event:window.event;
		event.stopPropagation();
		$(this).parent().next().slideUp(500,function(){
			if($('.slide_jt').hasClass('change'))
			{
				$('.slide_jt').removeClass('change');
				$('.slide_jt').addClass('updown');
			}
			$('.slide_close').parents('.slide_fo_a').animate({width:"0%"},500,function(){
				$('.slide_close').hide();
				$('.slide_close').next().hide();
				$('.slide_order').show();
				$('.slide_order').animate({width:"156px"},300);
			});
		});
	});

	/* click slide_c_a self fadeIn */
	$('.slide_order').click(function(event){
		event = event?event:window.event;
		event.stopPropagation();
		$(this).animate({width:'0%'},300,function(){
			$('.slide_order').hide();
			$('.slide_fo_a').animate({width:"100%"},300,function(){
				$('.slide_c_a').children('.slide_close').show();
				$('.slide_c_a').children('.center').show();
				if($('.slide_jt').hasClass('change') == false){
					$('.slide_jt').addClass('change');
					$('.slide_jt').removeClass('updown');
					$('.slide_c_a').next().slideDown(500,function(){
						$('.slide_f_a').show();
					});
				}
			});
		});
	});

	/* click slide_jt */
	$('.slide_jt').click(function(event){
		event = event?event:window.event;
		event.stopPropagation();
		if($(this).hasClass('change'))
		{
			$(this).parents('.slide_c_a').next().slideUp(500,function(){
				$('.slide_f_a').hide();
			});
			$(this).removeClass('change');
			$(this).addClass('updown');
		}else{
			$(this).parents('.slide_c_a').next().slideDown(500,function(){
				$('.slide_f_a').show();
			});
			$(this).addClass('change');
			$(this).removeClass('updown');
		}
	});

	/* pulice-1 map change */
	$('.pulice').hover(function(){
		$(this).prev().addClass('ti');
	},function(){
		$(this).prev().removeClass('ti');
	});

	/* select value on change */
	$('.slide_form select').change(function(){
		$(this).css('color','#000');
	});
});
