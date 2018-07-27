// JavaScript Document

$( document ).ready(function() {
   	var boot= $('.downtable');
    var bootwen=$('.downtbctn');
    var Iforder=$('#lforder');
    var bclose=$('.close0');
    /*底部关闭按钮的设置*/
    bclose.bind('click',function(){
    	Downclose(boot, bootwen, Iforder, bclose);	
    });

	Iforder.bind('click',function(){
		openNow(boot, bootwen, Iforder, bclose);
    	
	});
  });

$(function(){
	$('.boxbig').click(function(event){
    var _con = $(this);
    if(_con.is(event.target) && _con.has(event.target).length === 0)
    {
      $(this).hide();
    }
  });
});

// 上谷郡轮播效果Start 
$(function(){
	var _picCurrentIndex=0;
	var _picPreIndex=-1;
	var _piccount;
	var _automove;
	//实现图片轮换的初始状态，第一张图片显示，其他图片隐藏
	_piccount=$('.cont2centlt .imginfo li').length;
	$('.cont2centlt .imginfo li').hide().eq(_picCurrentIndex).show();
	
	$('.imgbgcolor li').hover(function(){
		clearInterval(_automove);
		$('.imgbgcolor li.defoutimg').removeClass('defoutimg');
		$(this).addClass('defoutimg');
		var _index=$('.imgbgcolor li').index($(this));
		if(_index==_picCurrentIndex) return false;
		movenext(_index);
	},function(){
		_automove=setInterval(automove,5000);
	});
	
	/**
	图片自动切换效果
	**/
	_automove=setInterval(automove,5000);
	function automove(){
		var _index=(_picCurrentIndex+1)%_piccount;
		$('.imgbgcolor li.defoutimg').removeClass('defoutimg');
		$('.imgbgcolor li').eq(_index).addClass('defoutimg');
		 movenext(_index);
	}
	/**
	该函数用于图片轮换效果的切换
	**/
	function movenext(_index){
		
		_picPreIndex=_picCurrentIndex;
		_picCurrentIndex=_index;
		$('.cont2centlt .imginfo li').eq(_picCurrentIndex).fadeIn(1000);
		$('.cont2centlt .imginfo li').eq(_picPreIndex).fadeOut(1000);
	}
})
// stop

/* 控制底部横幅关闭展开*/
function Downclose(downtable,downbtn,Iforder,close)
{
	downtable.css("width","30px").css('border-radius','0 10px 10px 0');
	downbtn.hide();
	close.hide();
	Iforder.addClass('order');
}
function openNow(downtable,downbtn,Iforder,close)
{
	Iforder.removeClass('order');
	downbtn.show();
    downtable.css('width','100%').css('border-radius','0');;
    close.show();
} 

/*分类酒店detail*/
$(function(){
		var jd_img_path="../jiudian/img/";
		var $bigHotel=$(".bigHotel");
		var $tuceng=$(".tuceng");
		var imgarr=new Array(new Array(jd_img_path+'tangzhuang1.jpg',jd_img_path+'tangzhuang2.jpg',jd_img_path+'tangzhuang3.jpg',jd_img_path+'tangzhuang4.jpg',jd_img_path+'tangzhuang5.jpg',jd_img_path+'tangzhuang6.jpg')
		,new Array(jd_img_path+'dongfang1.jpg',jd_img_path+'dongfang2.jpg',jd_img_path+'dongfang3.jpg',jd_img_path+'dongfang4.jpg',jd_img_path+'dongfang5.jpg',jd_img_path+'dongfang6.jpg',jd_img_path+'dongfang7.jpg')
		,new Array(jd_img_path+'wanliu1.jpg',jd_img_path+'wanliu2.jpg',jd_img_path+'wanliu3.jpg',jd_img_path+'wanliu4.jpg',jd_img_path+'wanliu5.jpg',jd_img_path+'wanliu6.jpg')
		,new Array(jd_img_path+'jinshan1.jpg',jd_img_path+'jinshan2.jpg',jd_img_path+'jinshan3.jpg',jd_img_path+'jinshan4.jpg',jd_img_path+'jinshan5.jpg',jd_img_path+'jinshan6.jpg')
		,new Array(jd_img_path+'pushe1.jpg',jd_img_path+'pushe2.jpg',jd_img_path+'pushe3.jpg',jd_img_path+'pushe4.jpg',jd_img_path+'pushe5.jpg',jd_img_path+'pushe6.jpg')
		,new Array(jd_img_path+'tiansen1.jpg',jd_img_path+'tiansen2.jpg',jd_img_path+'tiansen3.jpg',jd_img_path+'tiansen4.jpg',jd_img_path+'tiansen5.jpg',jd_img_path+'tiansen6.jpg',jd_img_path+'tiansen7.jpg',jd_img_path+'tiansen8.jpg')
		,new Array(jd_img_path+'in1.jpg',jd_img_path+'in2.jpg',jd_img_path+'in3.jpg',jd_img_path+'in4.jpg',jd_img_path+'in5.jpg',jd_img_path+'in6.jpg',jd_img_path+'in7.jpg'));
     	var hotelnamearr=new Array('唐庄艺术酒店','东方酒店','北京湾流公寓','晋善地产公寓','昆明 朴舍酒店','田森 田里酒店','青岛 IN酒店');
    	var boot= $('.downtable');
    	var bootwen=$('.downtbctn');
    	var Iforder=$('#lforder');
    	var bclose=$('.close0');
	/*前四个*/
	$(".c3conimg a").click(function(){
		Downclose(boot, bootwen, Iforder, bclose);
		var index=$(this).parent().index('.c3conimg');
		var whichimgarr=imgarr[index];
		$bigHotel.removeClass('clsplay');
		var current=0;
		
		var imgsize=whichimgarr.length-1;
		$tuceng.attr('src',whichimgarr[current]);
		$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
		$(".hotelname").html(hotelnamearr[index]);
		/*上一页*/
		$(".bigicon02").click(function(){
			current=preimg(current,imgsize);
			$tuceng.attr('src',whichimgarr[current]);
			$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
			$(".hotelname").html(hotelnamearr[index]);
		});
		/*下一页*/
		$(".bigicon03").click(function(){
			current=nextimg(current,imgsize);
			$tuceng.attr('src',whichimgarr[current]);
			$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
			$(".hotelname").html(hotelnamearr[index]);
		});
		return false;
	});
	/*后三个*/

	$(".c4conimgshow a").click(function(){
		Downclose(boot, bootwen, Iforder, bclose);
		var index=$(this).parent().index('.c4conimgshow')+4;
		var whichimgarr=imgarr[index];
		$bigHotel.removeClass('clsplay');
		var current=0;
		
		var imgsize=whichimgarr.length-1;
		$tuceng.attr('src',whichimgarr[current]);
		$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
		$(".hotelname").html(hotelnamearr[index]);
		/*上一页*/
		$(".bigicon02").click(function(){
			current=preimg(current,imgsize);
			$tuceng.attr('src',whichimgarr[current]);
			$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
			$(".hotelname").html(hotelnamearr[index]);
		});
		/*下一页*/
		$(".bigicon03").click(function(){
			current=nextimg(current,imgsize);
			$tuceng.attr('src',whichimgarr[current]);
			$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
			$(".hotelname").html(hotelnamearr[index]);
		});
		return false;
	});


	/*关闭按钮*/
		$(".bigicon01").click(function(){
			openNow(boot, bootwen, Iforder, bclose);
			$bigHotel.addClass('clsplay');
			return false;
		});
		
	function nextimg(i,size){
		if(i==size){
			i=0;
			return i;
		}
		i++;
		return i;
	};
	function preimg(i,size){
		if(i===0){
			return size;
		}
		i--;
		return i;
	};
	
});

// 第六屏效果
 $(function(){
        var $left = $('#leftone');
        var $right = $('#rightone');
        var $li = $('#pic li');
        var $tabLi = $('#tab li');
        var index = 0;

        $li.append('<span></span>');
        $('#pic li span').eq(0).css('display' , 'none');
        
        var arrW=[],arrH=[],arrL=[],arrT=[],arrZ=[],arrS=[],arrO=[];
        var nowTime = 0;
        $right.click(function(){
          if ( new Date() - nowTime > 500 )
          {
            nowTime = new Date();
            index ++;
            index %= $li.length;
            $tabLi.eq(index).addClass('on').siblings().removeClass('on');
            fn( $(this).index() );
          }
          
        });

        $left.click(function(){
          if ( new Date() - nowTime > 500 )
          {
            nowTime = new Date();
            index --;
            if(index<0)index=$li.length-1;
            $tabLi.eq(index).addClass('on').siblings().removeClass('on');
            fn( $(this).index() );
          }
        });

        $tabLi.click(function(){
          $(this).addClass('on').siblings().removeClass('on');
          var nowIndex = $(this).index();
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
              $(this).animate({
                width : 0,
                height : 0,
                opacity : 0,
                left : '485px',
                top : '135px'
              },300);
            });
            setTimeout(function(){
              $li.each(function(i){
                var a = i - (nowIndex - index);
                if(a<0)a+=$li.length;
                if(a>=$li.length)a-=10;
                $(this).find('span').css('display' , arrS[a]);
                $(this).css('zIndex' , arrZ[a]).animate({
                  width : arrW[a],
                  height : arrH[a],
                  left : arrL[a],
                  top : arrT[a],
                  opacity : arrO[a]
                },500);
              });
              index = nowIndex;
            },300);
          }

          
        });

        function fn( x ){
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
            if ( x )
            {
              var a = i-1;
              if(a<0)a=$li.length-1;
            }
            else
            {
              var a = i+1;
              if(a==$li.length)a=0;
            }
            
            $(this).find('span').css('display' , arrS[a]);
            $(this).css('zIndex' , arrZ[a]).animate({
              width : arrW[a],
              height : arrH[a],
              left : arrL[a],
              top : arrT[a],
              opacity : arrO[a]
            },500);
          });
        }


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
$(function(){	
	
$('.c5mainbotm .c5blockbox ul').mouseout(function(){
		
$(this).children().animate({'height': '30px'});
	});

	$('.c5mainbotm .c5blockbox ul li').mouseover(function(){
		
$(this).css('color', '#c66218');
		$(this).stop(true).animate({'height': '93px'}).siblings().animate({'height': '30px'});
	}).mouseout(function(){
		
$(this).css('color', '#171717');
	});
});



/*3个案例图片*/
$(function(){
var _ul=$(".designer-over ul");
	var _ulLi=$(".designer-over ul li");
	_ul.css("width",_ulLi.length*352+'px');
	_ulLi.eq(1).find(".designer-img").addClass("designeractive"); 
	$("#_deleft").click(function(){
		var _newulLi=$(".designer-over ul li");
		var lastItem = _newulLi.last();		        
		$(".designer-over").find('ul').prepend(lastItem);
		_ul.css("left","-352px");
		_ul.stop().animate({left:0},"200",function(){	
											
		});  
	})
	$("#_deright").click(function(){
		var _newulLi=$(".designer-over ul li");
		_ul.stop().animate({left:-352},"100",function(){
			 var firstItem = _newulLi.first();
			 $(this).css("left","0px");
			 $(".designer-over").find('ul').append(firstItem);
		});  
	});
});
$(function(){
	$(".cont1_l").hover(function(){
		$(this).find('span').hide();
		$(this).find('div').show();
	},function(){
		$(this).find('div').hide();
		$(this).find('span').show();
	});
});
/*四大优势 top背景替换*/
$(function(){	
	$(".c5blockbox").hover(function() {
		$(this).addClass('c5onfocus');
		$(this).find('.c5toplogobox').css({
			'height': '192px',
		});
		$(this).find('.c5toplogobox img').css({'float': 'right'});
	}, function() {
		$(this).removeClass('c5onfocus');
		$(this).find('.c5toplogobox').css({
			'height': '152px',
		});
		$(this).find('.c5toplogobox img').css({'float': 'left'});
	});
});
/*四大优势 列表箭头*/
// $(function(){	
// 	$(".c5mainulbox li:not('.c5lifourth')").mouseover(function(){
// 	    $(this).siblings().stop().animate();
// 	    $(this).animate({'height': '110px'}, 500);
// 	    $(this).css('color', '#c66218');
// 		});
// 		$(".c5mainulbox li").mouseout(function(){
// 		    $(this).css({'height': '40px','overflow':'hidden'});
// 		    $(this).css('color', '#171717');
// 		});
// });
// $(function(){	
// 	$(".c5lifourth").mouseover(function(){
// 	    $(this).siblings().stop().animate();
// 	    $(this).animate({'height': '110px'}, 500);
// 	    $(this).css('color', '#c66218');	
// 		});
		// $("c5lifourth").mouseout(function(){
		//     $(this).css({'height': '30px','overflow':'hidden'});
		//     $(this).css('color', '<div id="171717"></div>');
		// });
// });
// $(function(){	
// 	$(".c5lifourth").hover(function() {
// 		 $(this).attr("id", "c5lionfous").siblings().removeAttr("id", "c5lionfous");
// 		 // $(this).prev(img).show();
// 	});
// });

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
// $(function(){
// 	var $num = $(".cont3boxl");
// 	$(".c3sml").hover(function(){
// 		var index = $(this).index(".cont3boxr ul li");
// 		$(this).addClass('onc3focus').siblings().removeClass('onc3focus');
// 		$num.eq(index).show().siblings('.cont3boxl').hide();
// 	});
// });
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
// $(function(){
// 	$(".cont4flow li").hover(function(){
// 		$(this).addClass('flowll').siblings().removeClass('flowll');
// 		$(this).siblings().show(300).parent().siblings().find(".mo2").hide();
	
// 	});
// });

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


/*footer导航按钮*/
$(function(){
	$('ul.footul>li').click(function(){
		$this=$(this);
		var liin=$(this).index('ul.footul>li');
		console.log(liin);
		$(this).addClass('active').siblings().removeClass('active');
		$('.fast>.menuul').eq(liin).removeClass('clsply').siblings('ul.menuul').addClass('clsply');
		if(liin==0){
			$('.fast').removeClass('navigation1');
		}else if(liin==1){
			$('.fast').addClass('navigation1');
		}
	})
});
// 禁止右键及复制
$(function(){
	document.oncontextmenu=new Function("event.returnValue=false"); 
	document.onselectstart=new Function("event.returnValue=false"); 
});

// 海岸动态变化线
// $(function(){
// 	$('.tem_index_news_list dd').hover(function(){
// 		$(this).find('hr').eq(0).stop(true,true).animate({width:380},500);
// 	},function(){
// 		$(this).find('hr').eq(0).stop(true,true).animate({width:10},500);
// 	});
// });

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

//导航下拉菜单
$(function(){
	$('.dropdown').hover(
		function(event){
		$this = $(this); 
		$(this).siblings('li').removeClass('open'); 
		$this.addClass('open'); 
	},function(event){
			$this = $(this);
			$(this).removeClass('open');
		}); 
});

$(function(){
	$(document).scroll(function(){
		$this=$(document);
		if($this.scrollTop()>2000){
		  $('.listenq .listenleft').animate({top:0,opacity:1}, 800);
		  $('.listenq .lsncenter').addClass('transcale');
		  $('.listenq .listenright').animate({top:0,opacity:1}, 800);
		}
	});
})
// $(window).scroll(function (){	
// 	var st = $(this).scrollTop();
// 	console.log(st);
// });

$(function(){
	$('.banner-4').css({
		left:'155px',
		opacity:0
	});
	$('.banner-5').css({
		right:'-10px',
		opacity:0
	});
	$('.btn').css({
		top:'650px',
		opacity:0
	});

	setTimeout(function(){
		$('.banner-4').animate({
			left:'230px',
			opacity:1
		},500);
		$('.banner-5').animate({
			right:'6px',
			opacity:1
		},500);
		$('.btn').animate({
			top:'590px',
			opacity:1
		},500);
	});
});
$(function(){
	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			 
				$('.box1line li').eq(0).addClass('upper1');
				$('.b1ulright li').eq(0).addClass('upper1');
			
		}
		if($(window).scrollTop()>300){
			
				$('.box1line li').eq(1).addClass('upper1');
				$('.b1ulright li').eq(1).addClass('upper1');
						
		}
		if($(window).scrollTop()>400){
			
				$('.box1line li').eq(2).addClass('upper1');
				$('.b1ulright li').eq(2).addClass('upper1');
			
		}	
		if($(window).scrollTop()>500){
			
				$('.box1line li').eq(3).addClass('upper1');
				$('.b1ulright li').eq(3).addClass('upper1');
						
		}
		if($(window).scrollTop()>1300){
			$('.imginfo').addClass('upper3');
			$('.cont2centrt').addClass('upper4');
		}
		if($(window).scrollTop()>2700){
			$('.juck').addClass('upper5');
			$('.rose').addClass('upper5');
		}
		if($(window).scrollTop()>3000){
			$('.juak').addClass('upper5');
			$('.rosa').addClass('upper5');
		}
		if($(window).scrollTop()>3300){
			$('.c4conimgboxdown').addClass('upper5');
		}
		if($(window).scrollTop()>3800){
			$('.c4condowntxtbox').addClass('upper5')
		}
		if($(window).scrollTop()>3900){
			$('.cont4btn').addClass('upper5')
		}
		if($(window).scrollTop()>7000){
			$('.c5blockbox:first-child').animate({
				top:'0px',
				opacity:1
			},500);
			setTimeout(function(){
				$('.c5blockbox:nth-child(2)').animate({
					top:'0px',
					opacity:1
				},500);	
			},200)
			setTimeout(function(){
				$('.c5blockbox:nth-child(3)').animate({
					top:'0px',
					opacity:1
				},500);				
			},400)
			setTimeout(function(){
				$('.c5blockbox:nth-child(4)').animate({
					top:'0px',
					opacity:1
				},500);
			},600)	
		}
	})
})


