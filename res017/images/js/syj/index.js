/**
 * Created by Administrator on 2018/1/10.
 * form by �úú�����
 * email 1570302023@qq.com
 *
 *
 *
 */

$(function(){

	// $('.bot-img ul li div').css('backgroundColor','rgba(0,0,0,0.5)');
  

	//轮播
	var list=$('.bot-img ul li').length;
    var timer='';
    var index=0;
    timer=setInterval(function(){ //�򿪶�ʱ��
        next();
    },3000);

	// 缩略图
    $('.bot-img ul li').click(function(){
		window.clearTimeout(timer); 
		var _this=$(this);
		index = _this.index();
		$('.activeimg').removeClass("active");
		_this.addClass("active");
        $('.activeimg').animate({left:index*-1200},"slow");
		timer=setInterval(function(){ //�򿪶�ʱ��
			next();
			
		},3000);
	});
	
	$('.bot-img ul li div').click(function(){
		var _this=$(this);
        $('.bot-img ul li div').css('backgroundColor','rgba(0,0,0,0.5)');
        $(this).css('backgroundColor','rgba(0,0,0,0)');
        _this.removeClass('lepo').siblings().addClass('lepo');
        var int=_this.index();
    })
	
    $('.activeimg').css({
        width:list*1200,
    });

	//点击下一页
	$('.right').click(function(){
		window.clearTimeout(timer); 
        next();
		timer=setInterval(function(){ //�򿪶�ʱ��
			next();
		},3000);
    })
	//点击前一页
    $('.left').click(function(){
		window.clearTimeout(timer); 
        prev();
		timer=setInterval(function(){ //�򿪶�ʱ��
			next();
		},3000);
    });

	//后一页
	function next(){
		if(index<list-1){
			index++;
			$('.activeimg').animate({left:index*-1200},"slow");
			$('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
			$('.bot-img ul li div').eq(index).addClass('lepo').siblings('div').removeClass('lepo')
		}else{
			index=0;
			$('.activeimg').animate({left:index*-1200},"slow");
			$('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
			$('.bot-img ul li div').eq(index).addClass('lepo').siblings('div').removeClass('lepo')
		}
	}
	//前一页
	function prev(){
		index--;
		if(index<0){
			index=list-1;
			$('.activeimg').animate({left:index*-1200},"slow");
			$('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
			$('.bot-img ul li div').eq(index).addClass('lepo').siblings('div').removeClass('lepo')
		}else{
			$('.activeimg').animate({left:index*-1200},"slow");
			$('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
			$('.bot-img ul li div').eq(index).addClass('lepo').siblings('div').removeClass('lepo')
		}
	}
})



