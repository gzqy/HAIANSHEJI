/*banner 动效*/
$(function(){
	$('.banntit').css({top:'130px',opacity:0});
	$('.banntit>p').css({bottom:'-2px',opacity:0});
	$('.bannpp').css({top:'254px',opacity:0});
	$('.bannblue').css({top:'468px',opacity:0});
	$('.banntit').animate({top: '183px', opacity: 1}, 800,function(){
		$('.banntit>p').animate({
			bottom: '6px',
			opacity: 1},
			800);
		$('.bannpp').animate({top:'388px',opacity:1},800,function(){
			$('.bannblue').animate({top:'468px',opacity:1},800);
		});
	});
});
$( document ).ready(function() { 
    var boot= $('.downtable');
   var bootwen=$('.downtbctn');
   var lforder=$('#lforder');
   var bclose=$('.close0');
    /*底部关闭按钮的设置*/
    bclose.bind('click',function(){
    	/*boot.animate({*/
    		boot.css("width","30px").css('transition','0s all').css('border-radius','0 10px 0 0');
    	/*},500,"swing",function(){*/
    		bootwen.hide();
    		bclose.hide();
    		lforder.addClass('order');
    		
    });

	lforder.bind('click',function(){
		lforder.removeClass('order');
		bootwen.show();
    	boot.css('width','100%').css('transition','.5s all').css('border-radius','0');
    		bclose.show(); 
    	
	});
  });
//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=280){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    });  
 });

/*鼠标浮上去图片变淡*/
$(function(){
	$(".g3box2caseimg").hover(function(){
		$(this).parent().find('img').addClass('opacti');
		$(this).parent().siblings().find('img').addClass('opacti');
	},function(){
		$(this).parent().find('img').removeClass('opacti');
		$(this).parent().siblings().find('img').removeClass('opacti');
	});
});
$(function(){
	$(".g3b5pic").hover(function(){
		$(this).parent().find('img').addClass('opacti');
		$(this).parent().siblings().find('img').addClass('opacti');
	},function(){
		$(this).parent().find('img').removeClass('opacti');
		$(this).parent().siblings().find('img').removeClass('opacti');
	})
});
/*老体字hover切换*/
$(function(){
	var laotialj = "../templates/res017/images/yuanlin/";
	$(".laotia img").hover(function(){
		$_this=$(this);
		var index=$_this.index();
		$('.qgarden3>.funct02').eq(index).css('opacity', '1').siblings('.funct02').css('opacity', '0');;
		$(".laotitogg").eq(index).show().siblings(".laotitogg").hide();
		$_this.attr('src',laotialj+'oldchar0'+(index+1)+'_black.png');
		for(var i=0;i<$(".laotia img").length;i++){
			if(i!==index){
				$(".laotia img").eq(i).attr('src',laotialj+'oldchar0'+(i+1)+'.png');
			}
		}
	},function(){
		$_this=$(this);
		var index=$_this.index();
		$(".laotitogg").eq(index).show().siblings(".laotitogg").hide();
	});
});
/*第一部分指定高度添加类*/
$(function(){
	$(document).scroll(function(event) {
		/* Act on the event */
		// console.log($(this).scrollTop());
		if($(this).scrollTop()>300){
			$(".whatimg3").addClass('g1whatimgbox')
		}
		if($(this).scrollTop()>5155){
             $(".tuwenline").addClass('rotatebig');
		}
	});
});
/*绿色边框的hover事件*/
$(function(){
	$(".greenborder").hover(function(){
			var $_this=$(this);
			var title=$_this.find("h2").text();
			$_this.append('<div class="grayrgttit"></div>');
			$(".grayrgttit").text(title);
			$(".grayrgttit").animate({
				left: '719px',
				opacity: 1},
				500);
			$_this.find('h2').hide().end().siblings('.greenborder').find('h2').show();
			$_this.find('p').animate({
					width:'717px',
					top: '35px'},
					500);						
		
	},function(){
			var $_this=$(this);
			$_this.find('p').stop(true,false);
			// $(".grayrgttit").stop(true,false);
			$_this.find('h2').show();
			$(".grayrgttit").eq(0).remove();
			$_this.find('p').css({'width':'853px','top':'54px'});
			
	});
})


/*百叶窗效果*/
$(function(){
	//获得园林图片并分到span中
	var g4b1len=$('.g4b1proshow>ul>li').length;
	var imgsrc1=new Array();
	for(var i=0;i<g4b1len;i++){
		imgsrc1[i]=$('.g4b1proshow>ul>li').eq(i).find("img").attr('src');
		$('.g4b1proshow>ul>li').eq(i).find("img").remove();
		$('.g4b1proshow>ul>li').eq(i)
		.append('<div class="appenddiv"><span></span></div>')
		.append('<div class="appenddiv"><span></span></div>')
		.append('<div class="appenddiv"><span></span></div>')
		.append('<div class="appenddiv"><span></span></div>')
		.append('<div class="appenddiv"><span></span></div>')
		.append('<div class="appenddiv"><span></span></div>')
		.append('<div class="appenddivlast"><span></span></div>');
		$('.g4b1proshow>ul>li').eq(i).find('.appenddiv,.appenddivlast')
		.eq(0).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '0 top').end().end()
		.eq(1).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '-163.5px top').end().end()
		.eq(2).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '-327px top').end().end()
		.eq(3).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '-490.5px top').end().end()
		.eq(4).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '-654px top').end().end()
		.eq(5).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '-817.5px top').end().end()
		.eq(6).find('span').css('background', 'url('+imgsrc1[i]+') no-repeat').css('backgroundPosition', '-981px top');
	} 
 
$(".cont2ulbox>li").hover(function(){
	
		$(this).addClass('cont2ulboxlibg');
		$(this).addClass('cont2ulboxlibg').css('background', 'none');
		$(this).find('img').css({'opacity':'1','transform':'scale(0.9)','margin-top':'20px'});
		$(this).find('em').css({'margin-top':'-15px','color':'#e9e9e9'});
		$(this).find('span').css({'display':'block','color':'#e9e9e9'});
	},function(){
		var laotialj = "../templates/res017/images/yuanlin/";
		var index=$(this).index()+1;
		$(this).addClass('cont2ulboxlibg').css('background', 'none');
		$(this).find('img').css({'opacity':0,'transform':'scale(1)','margin-top':'40px'});
		$(this).find('em').css({'margin-top':'0px','color':'#363636'});
		$(this).find('span').css({'display':'none','color':'#363636'});
		$(this).removeClass('cont2ulboxlibg');
		$(this).css({background: 'url('+laotialj+'b5icon'+index+'.png) no-repeat',backgroundPosition:'90px 49px'});
	});
		
	$(".lunbodownbtn").click(function(){
		var shufocus=".shufocus>ul>li";
		showPics(shufocus);
	});
	$(".lunbodownbtn1").click(function(){
		var shufocus=".shufocus1>ul>li";
		showPics(shufocus);
	});
	$(".lunbodownbtn2").click(function(){
		var shufocus=".shufocus2>ul>li";
		showPics(shufocus);
	});

	function showPics(shufocus){
		var last=$(shufocus).length-1;
		$(shufocus).eq(last).find('span').animate({left: '100%'}, 800,function(){
			$(shufocus).eq(last).insertBefore(shufocus+':first-child').find('span').css('left', '0');
		});
		
	}
});

/*更多案例切换*/
$(function(){
	var g6plen=$('.g6proshow>ul>li').length;
	var curgbp=0;
	$('.lunbolftbtn').click(function(){
		if(curgbp==0){
			curgbp=g6plen-1;
		}else{
			curgbp--;	
		}
		$('.g6proshow>ul>li').eq(curgbp).removeClass('clsplay').siblings('li').addClass('clsplay');
		$('.g6introdtxt').eq(curgbp).removeClass('clsplay').siblings('.g6introdtxt').addClass('clsplay');
		$('.g6introdname').eq(curgbp).removeClass('clsplay').siblings('.g6introdname').addClass('clsplay');
	});
	$('.lunborgtbtn').click(function(){
		if(curgbp==g6plen-1){
			curgbp=0;
		}else{
			curgbp++;
		}
		$('.g6proshow>ul>li').eq(curgbp).removeClass('clsplay').siblings('li').addClass('clsplay');
		$('.g6introdtxt').eq(curgbp).removeClass('clsplay').siblings('.g6introdtxt').addClass('clsplay');
		$('.g6introdname').eq(curgbp).removeClass('clsplay').siblings('.g6introdname').addClass('clsplay');
	});
});
/*footer导航按钮*/
$(function(){
  $('div.footleft>em').click(function(event) {
    /* Act on the event */
      $this=$(this);
      var liin=$(this).index('div.footleft>em'); 
       $this.css({backgroundColor:'#07a757',color:'#fff'}).siblings('em').css({background:'none',color:'#232323'});
       $this.css('text-align','center');
       $(" .alinkbox").eq(liin).removeClass('clsply').siblings('ul.alinkbox').addClass('clsply');
  });
});