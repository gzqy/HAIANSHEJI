// JavaScript Document
 
$(document).ready(function(){
    $('#cont2').css('height',$('.cont2').css('width'));
})
 
$( document ).ready(function() {
   var boot= $('.downtable');
   var bootwen=$('.downtbctn');
   var lforder=$('#lforder');
   var bclose=$('.close0');
    /*底部关闭按钮的设置*/
    bclose.bind('click',function(){
    	/*boot.animate({*/
    		boot.css("width","30px").css('border-radius','0 10px 10px 0');
    	/*},500,"swing",function(){*/
    		bootwen.hide();
    		bclose.hide();
    		lforder.addClass('order');
    		
    });

	lforder.bind('click',function(){
		lforder.removeClass('order');
		bootwen.show();
    	boot.css('width','100%').css('border-radius','0');;
    		bclose.show(); 
    	
	});

  });
/* 点击弹框消失 */
$(function(){
	$('.boxbig').click(function(event){
    var _con = $(this);
    if(_con.is(event.target) && _con.has(event.target).length === 0)
    {
      $(this).hide();
    }
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
    })  
});

//hover边框逐渐加粗
$(function(){
	var $left = $('#left');
    var $right = $('#right');
    var $li = $('.classifyrgtul li');
    var $tabLi = $('.classifylftul li');
    var index = 0;
    var newDate = 0;
    var arrW=[],arrH=[],arrL=[],arrT=[],arrZ=[],arrS=[],arrO=[];
	
    $tabLi.click(function(){
		if(new Date() - newDate>400){
			newDate = new Date();
			var nowIndex = $(this).index();
			$(this).addClass('on').siblings().removeClass('on');
			// $(this).parent().next().children().eq(nowIndex).addClass('show').siblings().removeClass('show');
			
			var x = nowIndex - index;
			if ( x == 1 || x == -($li.length-1) )
			{
			   fn( true );
			   index = nowIndex;
			}
			else if ( x == -1 || x == $li.length-1 )
			{
			   fn( false );
			   index = nowIndex;
			}
			else if ( nowIndex != index )
			{
				$li.each(function(i){
				  arrW[i] = $(this).css('width');
				  arrH[i] = $(this).css('height');
				  arrL[i] = $(this).css('left');
				  arrT[i] = $(this).css('top');
				  arrZ[i] = $(this).css('zIndex');
				  arrS[i] = $(this).find('span').css('display');
				  arrO[i] = $(this).css('opacity');
				});
			  
				
				$li.each(function(i){
					var a = i - (nowIndex - index);
					if(a<0)a+=$li.length;
					if(a>=$li.length)a-=10;
					$(this).find('span').css('display' , arrS[a]);
					$(this).css('zIndex' , arrZ[a]).stop().animate({
						width : arrW[a],
						height : arrH[a],
						left : arrL[a],
						top : arrT[a],
						opacity : arrO[a]
					},300);
				});
				index = nowIndex;
			}
		}
    });

	function fn( x ){
		nextDate = new Date();
		$li.each(function(i){
			arrW[i] = $(this).css('width');
			arrH[i] = $(this).css('height');
			arrL[i] = $(this).css('left');
			arrT[i] = $(this).css('top');
			arrZ[i] = $(this).css('zIndex');
			arrS[i] = $(this).find('span').css('display');
			arrO[i] = $(this).css('opacity');
		});
		setTimeout(function(){
			$li.each(function(i){
				if ( x ){
					var a = i-1;
					if(a<0)a=$li.length-1;
				}else{
					var a = i+1;
					if(a==$li.length)a=0;
				}
			
				$(this).css('zIndex' , arrZ[a]).animate({
					width : arrW[a],
					height : arrH[a],
					left : arrL[a],
					top : arrT[a],
					opacity : arrO[a]
				},200);
			});
		},200)
	}
});

/*集装箱建筑发展前景*/
$(document).scroll(function(){
    $this=$(document);
    if($this.scrollTop()>4000){
      $('.newaddprospectsbox img').eq(0).stop(true).animate({top:0,opacity:1}, 500);
      $('.newaddprospectsbox img').eq(1).addClass('transcale');
      $('.newaddprospectsbox img').eq(2).stop(true).animate({top:'372px',opacity:1}, 500);
      $('.prospectsfirstp').stop(true).animate({right: 0}, 500);
      $('.prospectssecondp').stop(true).animate({left: 0}, 500);
    }
});
 
/*3个案例图片*/
$(function(){
	$(".cont1_l").hover(function(){
		$(this).find('span').hide();
		$(this).find('div').show();
		$(this).prev().hide(300);
	},function(){
		$(this).find('div').hide();
		$(this).find('span').show();
		$(this).prev().show(300);
	});
});
/*底部二维码切换*/
$(function(){
	$(".official-plat ul a").hover(function(){
		$(this).css({'opacity':'1',
					'-webkit-opacity':'1',
					'-moz-opacity': '1', 	'-khtml-opacity': '1',
					'filter':'alpha(opacity=100)','-ms-filter':'"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"',
	'filter':'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)'});
	},function(){
		$(this).css({'opacity':'.5',
					'-webkit-opacity':'.5',
					'-moz-opacity': '0.5', 	'-khtml-opacity': '0.5',
					'filter':'alpha(opacity=50)','-ms-filter':'"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"',
	'filter':'progid:DXImageTransform.Microsoft.Alpha(Opacity=50)'});
	});
});
$(function(){
	$(".cont1_l").hover(function(){
		$(this).children().find('#swipeboximg').css('transform', 'scale(1.1)');
	},function(){
		$(this).children().find('#swipeboximg').css('transform', 'scale(1)');
	});
});
/*滑动出现绿底进入按钮*/
$(function(){
	$(".cont2r").hover(function(){
		// alert("erbaserf");
		$(this).find('.smlcontdown').hide();
		$(this).find('.smlcontup').show(300);
	},function(){
		$(this).find('smlcontup').hide(300);
		$(this).find('.smlcontdown').show();
	});
});
$(function(){
	$(".cont2l1").hover(function(){
		// alert("erbaserf");
		$(this).find('.smlcontdown').hide();
		$(this).find('.smlcontup').show(300);
	},function(){
		$(this).find('smlcontup').hide(300);
		$(this).find('.smlcontdown').show();
	});
});

/*4个案例多参介绍*/
$(function(){
	var $num = $(".cont3boxl");
	$(".c3sml").hover(function(){
		var index = $(this).index(".cont3boxr ul li");
		$(this).addClass('onc3focus').siblings().removeClass('onc3focus');
		$num.eq(index).show().siblings('.cont3boxl').hide();
	});
});
/*海岸2屏介绍文字切换*/
$(function(){
	var $num = $(".cont2lcont");
	$(".downbtn").hover(function(){
		var index = $(this).index(".downbtn");
		$(this).addClass('downonfocus').siblings().removeClass('downonfocus');
		$num.eq(index).show().siblings('.cont2lcont').hide();
	});
});
/*项目预算6步*/
$(function(){
	$(".cont4flow li").hover(function(){
		$(this).addClass('flowll').siblings().removeClass('flowll');
		$(this).siblings().show(300).parent().siblings().find(".mo2").hide();
	
	});
});

// 底部二维码hover切换事件
$(document).ready(function () {
	$(".official-plat ul li:first-child").hover(function () {
		$(".weixin").show();
		$(".weibo").hide();
	});
	$("li[title='点击打开官方微博']").hover(function () {
		$(".weixin").hide();
		$(".weibo").show();
	});
	//href="#a_null"的统一设置为无效链接
	$("a[href='#productsone']").click(function () {
		return false;
	});
});
//hover边框逐渐加粗
$(function(){
	$(".uptxtbtn").hover(function(){
		$this=$(this);
		$this.find('.tpbor').css({height:'2px'}).animate({width:'144px'},600);
		$this.find('.btbor').css({height:'2px'}).animate({width:'144px'}, 600);
		setTimeout(function() {
			$this.find('.rgtbor').css({width:'2px'}).animate({height:'39px'},600);
			$this.find('.lfbor').css({width:'2px'}).animate({height:'39px'}, 600);
		}, 600);
	},function(){
		setTimeout(function() {
			$this.find('.tpbor').animate({height:'0px',width:'0px'},600);
			$this.find('.btbor').animate({height:'0px',width:'0px'},600);
			$this.find('.rgtbor').animate({width:'0px',height:'0px'},600);
			$this.find('.lfbor').animate({width:'0px',height:'0px'},600);
		},600);
	});
});

// 公司简介边框变化
$(document).scroll(function(){
	// console.log($(this).scrollTop());
	if($(this).scrollTop()>5700){
		$('.borderlineshow').css({
			transform: 'scale(1.18)',
			webkitTransform: 'scale(1.18)',
			mozTransform: 'scale(1.18)',
			msTransform: 'scale(1.18)',
			oTransform: 'scale(1.18)'
		});
	}
});

//footer点击切换选项卡

$(function() {
	$(".footuplistbox>dl>dt").click(function() {
		var footerxuanindex= $(this).index();
		$(".footuplistbox dl dt").eq(footerxuanindex).addClass('footdtfocus').siblings().removeClass('footdtfocus');
		$(".footuplistbox ul").eq(footerxuanindex).removeClass('clsplay').siblings('ul').addClass('clsplay');
	});
}); 

// 禁止右键及复制
$(function(){
	document.oncontextmenu=new Function("event.returnValue=false"); 
	document.onselectstart=new Function("event.returnValue=false"); 
});
// 海岸动态点击轮播
$(function(){
    var scroll_width = $('div.tem_inner').width();
    $('ul.tem_index_news_list').css('width',scroll_width);
    $('.tem_index_news_tab li').bind('click',function(){
        var index = $(this).index();
        $(this).children('h3').css({backgroundColor:"#8c989f",color:"#fff"}).parent().siblings().children('h3').css({backgroundColor:"#f5f5f5",color:"#444"});
        if(index>0){
            $(this).parent().next().find('.slides').css({'transform':'translate3d('+ (- scroll_width * index) +'px, 0px, 0px)','transition':'.5s all'});
        }else{
            $(this).parent().next().find('.slides').css({'transform':'translate3d(0px, 0px, 0px)','transition':'.5s all'});
        }
    });
});

