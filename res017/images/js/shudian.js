// 滚动相关事件
$(function(){
    $(".banner span:nth-of-type(1)").addClass('bannerspananimate');
    $(".banner span:nth-of-type(2)").addClass('bannerspananimate');
    $("span.nullinn:nth-of-type(3)").addClass('bannerspananimate2');
    $("span.nullinn:nth-of-type(4)").addClass('bannerspananimate2');
    var ct= $('.chaintitle').eq(0).children();
		ct.eq(0).addClass('slidb');
		ct.eq(1).addClass('slidb');
		ct.eq(4).addClass('slidb');
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if(st>150){
			$(".chain0>ul>li:first-child").animate({top:'0px',opacity:'1'}, 800);
			$(".chain0>ul>li:nth-child(2)").animate({top:'0px',opacity:'1'}, 800);
		}
		if(st>260){
			$(".chain0>ul>li:nth-child(3)").animate({top:'210px',opacity:'1'}, 800);
			$(".chain0>ul>li:last-child").animate({top:'210px',opacity:'1'}, 800);
		}
        if(st>=7000){
            $('.upper').addClass("upper1");
            $('.down').addClass("down1");
        }
        if(st>=7500){
            $('.upper-1').addClass("down1");
            $('.down-1').addClass("upper1");
        }
        if(st>=8000){
            $('.upper-2').addClass("upper1");
            $('.down-2').addClass("down1");
        }
        if(st>=4000){
			$('.spanworry01').addClass('spanworry');
			$('.spanworry02').addClass('spanworry1');
			$('.divworry03').addClass('move');
		}
		if(st>=6100){
			$('.chainx').addClass("hover");
		}
		if(st>=4500){

			$('.chainae').addClass("hover");
		}
		// console.log(st);

		// contents title
		if(st>1300){
			var ct1 = $('.chaintitle').eq(1).children();
			ct1.eq(0).addClass('slidb');
			ct1.eq(1).addClass('slidb');
			ct1.eq(4).addClass('slidb');
		}
		if(st>3000){
			var ct2 = $('.chaintitle').eq(2).children();
			ct2.eq(0).addClass('slidb');
			ct2.eq(1).addClass('slidb');
			ct2.eq(4).addClass('slidb');
		}
		if(st>4200){
			var ct3 = $('.chaintitle').eq(3).children();
			ct3.eq(0).addClass('slidb');
			ct3.eq(1).addClass('slidb');
			ct3.eq(4).addClass('slidb');
		}
		if(st>6000){
			var ct4 = $('.chaintitle').eq(4).children();
			ct4.eq(0).addClass('slidb');
			ct4.eq(1).addClass('slidb');
			ct4.eq(4).addClass('slidb');
		}
		if(st>6600){
			var ct5 = $('.chaintitle').eq(5).children();
			ct5.eq(0).addClass('slidb');
			ct5.eq(1).addClass('slidb');
			ct5.eq(4).addClass('slidb');
		}
		if(st>8440){
			var ct6 = $('.chaintitle').eq(6).children();
			ct6.eq(0).addClass('slidb');
			ct6.eq(1).addClass('slidb');
			ct6.eq(4).addClass('slidb');
		}

		/* we manner */
		if(st>2400){
			$('.qlfinn').addClass('qlfinn_b');
			$('.qrgttopinn').addClass('qrgttopinn_b');
		}
	})
})

/* 案例滚动穿插出现效果 */
$(window).scroll(function(){
    if($('#index_tbox').length>0){
        var m = $(window).scrollTop();
        if(m >= 1600){
            var per=$(window).height()/2+400;
            per=per/2;
            per=m/per-2;
            if(parseInt(per*50)<20){
                $('.tbox .d').css('opacity',0);
            }else{
                $('.tbox .d').css('opacity',per);
            };
            per=per*200;
            if(per>=150){
                per=200;
            };
            $('.tbox .dl').css('transform','translateX('+(per-200)+'px)');
            $('.tbox .dr').css('transform','translateX('+(200-per)+'px)');
            $('.tbox .dt').css('transform','translateY('+(per-200)+'px)');
            $('.tbox .db').css('transform','translateY('+(200-per)+'px)');
            $('.tbox .dl').css('-webkit-transform','translateX('+(per-200)+'px)');
            $('.tbox .dr').css('-webkit-transform','translateX('+(200-per)+'px)');
            $('.tbox .dt').css('-webkit-transform','translateY('+(per-200)+'px)');
            $('.tbox .db').css('-webkit-transform','translateY('+(200-per)+'px)');
            $('.tbox .dl').css('-moz-transform','translateX('+(per-200)+'px)');
            $('.tbox .dr').css('-moz-transform','translateX('+(200-per)+'px)');
            $('.tbox .dt').css('-moz-transform','translateY('+(per-200)+'px)');
            $('.tbox .db').css('-moz-transform','translateY('+(200-per)+'px)');
            $('.tbox .dl').css('-o-transform','translateX('+(per-200)+'px)');
            $('.tbox .dr').css('-o-transform','translateX('+(200-per)+'px)');
            $('.tbox .dt').css('-o-transform','translateY('+(per-200)+'px)');
            $('.tbox .db').css('-o-transform','translateY('+(200-per)+'px)');
            $('.tbox .dl').css('-ms-transform','translateX('+(per-200)+'px)');
            $('.tbox .dr').css('-ms-transform','translateX('+(200-per)+'px)');
            $('.tbox .dt').css('-ms-transform','translateY('+(per-200)+'px)');
            $('.tbox .db').css('-ms-transform','translateY('+(200-per)+'px)');
        };
    }
});

/* hover 剪标 */
$(function(){
	$('.ch2licenter').on({
		mouseover : function(){
			$(this).find('.before').removeClass().addClass('after');
		},
		mouseout : function (){
			$(this).find('.after').removeClass().addClass('before');
		}
	})
});

$( document ).ready(function(){ 
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
//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=600){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    });  
 });

// 弹框点击空白关闭
$(function(){
	$('.boxbig').click(function(event){
    var _con = $(this);
    if(_con.is(event.target) && _con.has(event.target).length === 0)
    {
      $(this).hide();
    }
  });
});

//按钮部分
$(function(){
	$(document).scroll(function(event) {
		if($(this).scrollTop()>3700){
			// alert("arba");
			$(".hrtopright").animate({width:'0px'}, 800);
			$(".hrdownleft").animate({width:'0px'}, 800);
			setTimeout(function() {
				$(".hrright").animate({height:'0px'}, 400);
				$(".hrleft").animate({height:'0px'}, 400);
				setTimeout(function() {
					$(".hrdownright").animate({width:'0px'}, 700);
					$(".hrtopleft").animate({width:'0px'}, 700);
				}, 400);
			}, 700);
		}
	});
});
/*按钮框线生长运动*/
// $(function(){
// 	$(document).scroll(function(event) {
// 		if($(this).scrollTop()>5800){ 
// 			$(".hrtopright2").animate({width:'0px'}, 800);
// 			$(".hrdownleft2").animate({width:'0px'}, 800);
// 			setTimeout(function() {
// 				$(".hrright2").animate({height:'0px'}, 400);
// 				$(".hrleft2").animate({height:'0px'}, 400);
// 				setTimeout(function() {
// 					$(".hrdownright2").animate({width:'0px'}, 700);
// 					$(".hrtopleft2").animate({width:'0px'}, 700);
// 				}, 400);
// 			}, 700);
			
// 		}
// 	});

// });
//鼠标悬浮里面图片放大
$(function(){
	$(".hoverbger").hover(function() {
		$(this).find('img').addClass('hoverbig');
	},function(){
		$(this).find('img').removeClass('hoverbig');
	});
});
//第二大板块dl/em变化
$(function(){
	var c2liemtop=$(".c3lidowncent em").css("height");
	var c2liemtopnum=c2liemtop.substr(0,c2liemtop.length-2);
	$(".chain3 li").hover(function() {
		$(this).children('.c3lidowncent').css('bottom', "0px");
		$(this).children('.c3lidowncenta').css('display', "block");
	},function(){
		$(this).children('.c3lidowncent').css('bottom', -c2liemtopnum+"px"); 
		$(this).children('.c3lidowncenta').css('display', "none");
	});
});
/*圆hover变红*/
$(function(){
	$(".walkcir").hover(function(){
		$this=$(this);
		$this.find('p').css({color:'#fff'});
		$this.find('p>span').css({opacity:1});
		$this.find('i').css({color:'#fff'});
		// $this.find("p").css('top')
	},function(){
		$this.find('p').css({color:'#242424'});
		$this.find('p>span').css({opacity:0});
		$this.find('i').css({color:'#ffc703'});
	});
})

/*左边动态效果*/
/*$(function(){
	$('.qlfblock').hover(function(){
		$this=$(this);
		// $this.append('<div class="yellowblockcen"></div>');
		$(".bticonq").css({transform:'scale(.8,.8)',webkitTransform:'scale(.8,.8)'});
	},function(){
		$(".bticonq").css({transform:'scale(1,1)',webkitTransform:'scale(1,1)'});
		$('.yellowblockcen').remove();
	});
})*/
/*右下浮动*/
$(function(){
	$('.qbtrgtblock').hover(function(){
		$(this).css({backgroundSize:'120% 120%'});
	},function(){
		$(this).css({backgroundSize:'100% 100%'});
	});
})
/*底部hover*/
$(function(){
	var shudianlj = "../templates/res017/images/"; 
	$('.qbootinn p').hover(function(){
		var index=$(this).index('.qbootinn p');
		$this=$(this);
		$this.addClass('bootmid1').siblings('p').removeClass('bootmid1');
		if(index==1){
			$('.bootmid img').attr({src:shudianlj+'shudian/bootqrcode.jpg'});
		}else if(index==2){
			$('.bootmid img').attr({src:shudianlj+'shudian/callback.jpg'});
		}
	})
})
/*滑到效果*/
$(function(){
	$('.qlffontbk span').css({marginLeft:'-587px',opacity:0});
	$('.qrgtfontbk p,.qrgtfontbk div').css({marginLeft:'519px',opacity:0})
	$(document).scroll(function(){
		if($(document).scrollTop()>5300){
			var len=$('.qlffontbk span').length;
			for(var i=0;i<len;i++){
					gradual(i);			
			}
			var len1=$('.qrgtfontbk p,.qrgtfontbk div').length;
			for(var j=0;j<len1;j++){
				gradual1(j);
			}
		}
	});
	function gradual(key){
		$('.qlffontbk span').eq(key).css({marginLeft:0,opacity:1});
	}
	function gradual1(key){
		$('.qrgtfontbk p,.qrgtfontbk div').eq(key).css({marginLeft:0,opacity:1});
	}
});
/*咖啡动态*/
$(function(){
	var shudianlj = "../templates/res017/images/"; 
	var coffindex=0;
	var cofflen=$('.catcoffrgt').length;
	$('.qprebtn').click(function(){
		$this=$(this);
		$this.css('backgroundColor','rgba(37,37,37,1)');
		$('.qnextbtn').css('backgroundColor','rgba(37,37,37,.5)');
		coffindex--;
		if(coffindex<0){
			coffindex=cofflen-1;
		}
		$('.catcoffimg').attr({
			src: shudianlj+'shudian/bookstore'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
	});
	$('.qnextbtn').click(function(){
		$this=$(this);
		$this.css('backgroundColor','rgba(37,37,37,1)');
		$('.qprebtn').css('backgroundColor','rgba(37,37,37,.5)');
		coffindex++;
		if(coffindex==cofflen){
			coffindex=0;
		}
		$('.catcoffimg').attr({
			src: shudianlj+'shudian/bookstore'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
	});


});

/*点击打开大图轮播*/

$(function(){
	    var shudianlj = "../templates/res017/images/";
		var $bigHotel=$(".bigHotel");
		var $tuceng=$(".tuceng");
		var imgarr=new Array(new Array(shudianlj+'shudian/xinhua1.jpg',shudianlj+'shudian/xinhua2.jpg',shudianlj+'shudian/xinhua3.jpg',shudianlj+'shudian/xinhua4.jpg',shudianlj+'shudian/xinhua5.jpg'),
			new Array(shudianlj+'shudian/zhiyi1.jpg',shudianlj+'shudian/zhiyi2.jpg',shudianlj+'shudian/zhiyi3.jpg',shudianlj+'shudian/zhiyi4.jpg',shudianlj+'shudian/zhiyi5.jpg'),
			new Array(shudianlj+'shudian/daxue1.jpg',shudianlj+'shudian/daxue2.jpg',shudianlj+'shudian/daxue3.jpg',shudianlj+'shudian/daxue4.jpg',shudianlj+'shudian/daxue5.jpg'),
			new Array(shudianlj+'shudian/yudu1.jpg',shudianlj+'shudian/yudu2.jpg',shudianlj+'shudian/yudu3.jpg',shudianlj+'shudian/yudu4.jpg',shudianlj+'shudian/yudu5.jpg'),
			new Array(shudianlj+'shudian/yy1.jpg',shudianlj+'shudian/yy2.jpg',shudianlj+'shudian/yy3.jpg',shudianlj+'shudian/yy4.jpg',shudianlj+'shudian/yy5.jpg'));
     var hotelnamearr=new Array('新华书店','知一书店','朔州大学书店','新华阅读课厅','悦阅书店');
	/*前四个*/
	$("a.maskbigico").click(function(){
		var index=$(this).parent().index('.catcoffrgt');
		var whichimgarr=imgarr[index];
		$bigHotel.removeClass('clsplay');
		var current=0;
		
		var imgsize=whichimgarr.length-1;
		$tuceng.attr('src',whichimgarr[0]);
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
/*footer导航按钮*/
$(function(){
  $('ul.navul>li').click(function(event) {
    /* Act on the event */
      $this=$(this);
      var liin=$(this).index('ul.navul>li');
      if(liin == 0){
      	if($this.siblings('div').eq(1).hasClass('clsplay')){
      		$this.siblings('div').eq(1).removeClass('clsplay');
      		$this.siblings('div').eq(2).removeClass('clsplay');
      		$this.siblings('div').eq(0).addClass('clsplay');
      		$this.siblings('div').eq(3).addClass('clsplay');
      	}else if($this.siblings('div').eq(0).hasClass('clsplay')){
      		$this.siblings('div').eq(0).removeClass('clsplay');
      		$this.siblings('div').eq(3).removeClass('clsplay');
      		$this.siblings('div').eq(1).addClass('clsplay');
      		$this.siblings('div').eq(2).addClass('clsplay');
      	}	
      }else if(liin == 1){
      	if($this.siblings('div').eq(2).hasClass('clsplay')){
      		$this.siblings('div').eq(2).removeClass('clsplay');
      		$this.siblings('div').eq(1).removeClass('clsplay');
      		$this.siblings('div').eq(3).addClass('clsplay');
      		$this.siblings('div').eq(0).addClass('clsplay');
      	}else if($this.siblings('div').eq(3).hasClass('clsplay')){
      		$this.siblings('div').eq(3).removeClass('clsplay');
      		$this.siblings('div').eq(0).removeClass('clsplay');
      		$this.siblings('div').eq(2).addClass('clsplay');
      		$this.siblings('div').eq(1).addClass('clsplay');
      	}
      }
      $(".qbootinn>ul.menuul").eq(liin).removeClass('clsplay').siblings('ul.menuul').addClass('clsplay');
      
       // $('.navline_one').css(background,url('../shudian/navline_one.png')).siblings('.navline_two').css(background,url('../shudian/navline_two.png'));
       // $(".footertop>.menuul").eq(liin).removeClass('clsply').siblings('ul.menuul').addClass('clsply');
  });
});
// 禁止右键及复制
$(function(){
	document.oncontextmenu=new Function("event.returnValue=false"); 
	document.onselectstart=new Function("event.returnValue=false"); 
});
//页面底部的代码
$(function(){
	$('ul.nit>li').click(function(event){
		$this=$(this);
		var liin=$(this).index('ul.nit>li');
		$(this).addClass('active').siblings().removeClass('active');
		$('.navigation>.gation').eq(liin).removeClass('clsplay').siblings('ul.gation').addClass('clsplay');
		if(liin==0){
			$('.navigation').removeClass('navigation1');
		}else if(liin==1){
			$('.navigation').addClass('navigation1');
		}
	})
})