// JavaScript Document

// 底部横幅
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
//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=300){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    })  
});

/* 控制底部横幅关闭展开*/
function Downclose(downtable,downbtn,Iforder,close)
{
	downtable.css("width","30px").css('border-radius','0 10px 0 0').css('transition','0s all');
	downbtn.hide();
	close.hide();
	Iforder.addClass('order');
}
function openNow(downtable,downbtn,Iforder,close)
{
	Iforder.removeClass('order');
	downbtn.show();
    downtable.css('width','100%').css('transition','.5s all').css('border-radius','0');
    close.show();
} 

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

//banner部分
$(function(){
	setTimeout(function() {
			$(".bantag1").animate({top:'95px',left:'108px'}, 500);
			$(".bantag2").animate({right:'130px'}, 500);
			$(".bantag3").animate({left:'500px'}, 500);
			// setTimeout(function() {
			// 		setTimeout(function() {
			// 			$(".bantag2").animate({top:'378px',left:'514px'}, 1500);
			// 		}, 800);
			// 	$(".bantag3").animate({top:'446px',right:'175px'}, 1000);
			// 	$(".banlistbox").fadeIn('2000');
			// }, 1000);
	 }, 0);
});
//按钮部分
$(function(){
	$(document).scroll(function(event) {
		if($(this).scrollTop()>90){
			$(".chain0>ul>li:first-child").animate({top:'0px',opacity:'1'}, 800);
			$(".chain0>ul>li:nth-child(2)").animate({top:'0px',opacity:'1'}, 800);
		}
		if($(this).scrollTop()>300){
			$(".chain0>ul>li:nth-child(3)").animate({top:'210px',opacity:'1'}, 800);
			$(".chain0>ul>li:last-child").animate({top:'210px',opacity:'1'}, 800);
		}
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
$(function(){
	$(document).scroll(function(event) {
		if($(this).scrollTop()>5800){
			// alert("arba");
			$(".hrtopright2").animate({width:'0px'}, 800);
			$(".hrdownleft2").animate({width:'0px'}, 800);
			setTimeout(function() {
				$(".hrright2").animate({height:'0px'}, 400);
				$(".hrleft2").animate({height:'0px'}, 400);
				setTimeout(function() {
					$(".hrdownright2").animate({width:'0px'}, 700);
					$(".hrtopleft2").animate({width:'0px'}, 700);
				}, 400);
			}, 700);
			
		}
	});

});
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
	var c2liemtop=$(".c3centertxtbox em").css("marginTop");
	var c2liemtopnum=c2liemtop.substr(0,c2liemtop.length-2);
	$(".chain3 li").hover(function() {
		var c2liemtop=$(this).children('.c3centertxtbox').children('em').margin-top;
		$(this).children('.c3centertxtbox').find('.c3liupcent').addClass('disnone').siblings('.c3lidowncent').removeClass('disnone');
		$(this).children('.c3centertxtbox').children('em').css('marginTop', (c2liemtopnum-60)+"px");
	},function(){
		$(this).children('.c3centertxtbox').find('.c3lidowncent').addClass('disnone').siblings('.c3liupcent').removeClass('disnone');
		// $(this).children('.c3centertxtbox').children('em').css('margin-top', '0px');
		$(this).children('.c3centertxtbox').children('em').css('margin-top', c2liemtop);
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
		$this.find('i').css({color:'#da132a'});
	});
})

/*左边动态效果*/
/*$(function(){
	$('.qlfblock').hover(function(){
		$this=$(this);
		$this.append('<div class="redblockcen"></div>');
		$(".bticonq").css({transform:'scale(.8,.8)',webkitTransform:'scale(.8,.8)'});
	},function(){
		$(".bticonq").css({transform:'scale(1,1)',webkitTransform:'scale(1,1)'});
		$('.redblockcen').remove();
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
	var ls_img_path = '../templates/res017/images/liansuo/';
	$('.qbootinn p').hover(function(){
		var index=$(this).index('.qbootinn p');
		$this=$(this);
		$this.addClass('bootmid1').siblings('p').removeClass('bootmid1');
		if(index==1){
			$('.bootmid img').attr({src:ls_img_path+'bootqrcode.jpg'});
		}else if(index==2){
			$('.bootmid img').attr({src:ls_img_path+'callback.jpg'});
		}
	})
})
/*滑到效果*/
$(function(){
	$('.qlffontbk span').css({marginLeft:'-587px',opacity:0});
	$('.qrgtfontbk p,.qrgtfontbk div').css({marginLeft:'519px',opacity:0})
	$(document).scroll(function(){
		if($(document).scrollTop()>5400){
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
	var ls_img_path = '../templates/res017/images/liansuo/';
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
			src: ls_img_path+'somecoff'+(coffindex+1)+'.jpg'
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
			src: ls_img_path+'somecoff'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
	});


});

/*点击打开大图轮播*/

// $(function(){
// 		var ls_img_path = '../templates/res017/images/liansuo/';
// 		var $bigHotel=$(".bigHotel");
// 		var $tuceng=$(".tuceng");
// 		var imgarr=new Array(ls_img_path+'somecoff1.jpg',ls_img_path+'somecoff2.jpg',ls_img_path+'somecoff3.jpg',ls_img_path+'somecoff4.jpg',ls_img_path+'somecoff5.jpg');
//      var hotelnamearr=new Array('漫猫咖啡','逸美时光咖啡','咖啡陪你','@SOME咖啡','田森田里酒店');
// 	/*前四个*/
// 	$("a.maskbigico").click(function(){
// 		var index=$(this).parent().index('.catcoffrgt');
// 		var whichimgarr=imgarr[index];
// 		$bigHotel.removeClass('clsplay');
// 		var current=0;
		
// 		var imgsize=imgarr.length-1;
// 		$tuceng.attr('src',whichimgarr);
// 		$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
// 		$(".hotelname").html(hotelnamearr[index]);
// 		/*上一页*/
// 		$(".bigicon02").click(function(){
// 			current=preimg(current,imgsize);
// 			$tuceng.attr('src',imgarr[current]);
// 			$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
// 			$(".hotelname").html(hotelnamearr[current]);
// 		});
// 		/*下一页*/
// 		$(".bigicon03").click(function(){
// 			current=nextimg(current,imgsize);
// 			$tuceng.attr('src',imgarr[current]);
// 			$(".hotelcount").html(""+(current+1)+"/"+(imgsize+1)+"");
// 			$(".hotelname").html(hotelnamearr[current]);
// 		});
// 		return false;
// 	});
	
// 	/*关闭按钮*/
// 		$(".bigicon01").click(function(){
// 			$bigHotel.addClass('clsplay');
// 			return false;
// 		});
		
// 	function nextimg(i,size){
// 		if(i==size){
// 			i=0;
// 			return i;
// 		}
// 		i++;
// 		return i;
// 	};
// 	function preimg(i,size){
// 		if(i===0){
// 			return size;
// 		}
// 		i--;
// 		return i;
// 	};
	
// });
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
$(window).scroll(function(){
	if($('#index_tbox').length>0){
    	var m = $(window).scrollTop();  
        if(m >= 100){
            //dump(m);
            //dump($(window).height());
            //dump(m >= $(window).height()/2+1060);
        	var per=$(window).height()/2+850;
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
$(function(){
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		// console.log(st);
		if($(window).scrollTop()>1200){
			$('.englishfon').addClass('slide');
			$('.chinesefon').addClass('slide');
			$('.ability').addClass('slide');
		}
		if($(window).scrollTop()>2600){
			$('.qlfinn').addClass('qlfinn_b');
			$('.qrgttopinn').addClass('qrgttopinn_b'); 
		}
		 if($(window).scrollTop()>2900){
			$('.englishfon').addClass('slida');
			$('.chinesefon').addClass('slida');
			$('.ability').addClass('slida');
		}
		if($(window).scrollTop()>4100){
			$('.englishfon').addClass('slidc');
			$('.chinesefon').addClass('slidc');
			$('.ability').addClass('slidc');
		}
		if($(window).scrollTop()>5800){
			$('.englishfon').addClass('slidf');
			$('.chinesefon').addClass('slidf');
			$('.ability').addClass('slidf');
		}
		if($(window).scrollTop()>6500){
			$('.englishfon').addClass('slidu');
			$('.chinesefon').addClass('slidu');
			$('.ability').addClass('slidu');
		}
		if($(window).scrollTop()>3900){
			$('.spanworry01').addClass('spanworry3');
			$('.spanworry02').addClass('spanworry1');
			$('.divworry03').addClass('move');
		}
		if($(window).scrollTop()>7800){
			$('.englishfon').addClass('slidg');
			$('.chinesefon').addClass('slidg');
			$('.ability').addClass('slidg');
		}	
		if(st>=6100){
			$('.chainx').addClass("hover");
		}
		if(st>=4400){
			$('.chainae').addClass("hover");
		}
		if(st>=6800){
			$('.upper').addClass("upper1");
			$('.down').addClass("down1");
		}
		if(st>=7100){
			$('.upper-1').addClass("down1");
			$('.down-1').addClass("upper1");
		}
		if(st>=7400){
			$('.upper-2').addClass("upper1");
			$('.down-2').addClass("down1");
		}
	})
})

$(function(){
	$('.ch2licenter').on({
		mouseover : function(){
			$(this).find('.before').removeClass().addClass('after');
		},
		mouseout : function(){
			$(this).find('.after').removeClass().addClass('before');
		}
	})
})

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