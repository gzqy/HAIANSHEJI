$(document).ready(function(){
	implement();
})
var rz_img_path = '../templates/res017/images/ruanzhuang/';
// 页面加载动画效果
function implement(){
	$(window).scroll(function(){
		if($(window).scrollTop()>1300){
			$('.englishfon').addClass('tireda');
			$('.chinesefon').addClass('tireda');
			$('.rowtitle').addClass('tireda');
		}
		if($(window).scrollTop()>2100){
			$('.englishfon').addClass('tiredb');
			$('.chinesefon').addClass('tiredb');
			$('.rowtitle').addClass('tiredb');
		}
		if($(window).scrollTop()>4000){
			$('.englishfon').addClass('tiredc');
			$('.chinesefon').addClass('tiredc');
			$('.rowtitle').addClass('tiredc');
		}
		if($(window).scrollTop()>4800){
			$('.spanworry01').addClass('spanworry');
			$('.spanworry02').addClass('move');
			$('.divworry03').addClass('move');
		}
		if($(window).scrollTop()>5100){
		$('.englishfon').addClass('tiredd');
			$('.chinesefon').addClass('tiredd');
			$('.rowtitle').addClass('tiredd');
		}
		if($(window).scrollTop()>6700){
			$('.englishfon').addClass('tirede');
			$('.chinesefon').addClass('tirede');
			$('.rowtitle').addClass('tirede');
		}
		if($(window).scrollTop()>7600){
		$('.englishfon').addClass('tiredf');
			$('.chinesefon').addClass('tiredf');
			$('.rowtitle').addClass('tiredf');
		}
		if($(window).scrollTop()>8500){
		$('.englishfon').addClass('tiredg');
			$('.chinesefon').addClass('tiredg');
			$('.rowtitle').addClass('tiredg');
		}
		if($(window).scrollTop()>3500){
			$('.qlfinn').animate({marginLeft:'16%'},2000);
		}
		if($(window).scrollTop()>3500){
			$('.qrgttopinn').animate({marginLeft:'0'},2000);
		}
		if($(window).scrollTop()>3500){
			$('.qbtlfinn h1').animate({marginTop:'0'},1000);
		}
		if($(window).scrollTop()>3500){
			$('.qbtlfinn p').animate({marginTop:'0'},1000);
		}
		if($(window).scrollTop()>550){
			$('.ch2licenter').fadeIn(2000);
		}else{
			$('.ch2licenter').stop(true,true).fadeOut(2000);
		}	
	})
	Modular();
	button_part();
}
// 页面加载模块动画效果
function Modular(){
	$(window).scroll(function ()
	{
		var st = $(this).scrollTop();
		if(st>=300){
        	$('.chain').addClass("hover");
		}
		if(st>=2400){
			$('.chaina').addClass("hover");
		}
		if(st>=7100){
			$('.chainx').addClass("hover");
		}
		if(st>=5200){
			$('.chainae').addClass("hover");
		}
		if(st>=7700){
			$('.upper').addClass("upper1");
			$('.down').addClass("down1");
			// $('.upper').animate({top:"300px"},800);
			// $('.down').animate({top:"300px"},800);
		}
		if(st>=8100){
			$('.upper-1').addClass("down1");
			$('.down-1').addClass("upper1");
		}
		if(st>=8300){
			$('.upper-2').addClass("upper1");
			$('.down-2').addClass("down1");
		}
	});
	//测量距离顶部的高度
		$(window).scroll(function ()
		{	
			var st = $(this).scrollTop();
			// console.log(st);
		});
}
//按钮部分
function button_part(){
	$(document).scroll(function(event) {
		if($(this).scrollTop()>7400){
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
	Growth_movement();
}
/*按钮框线生长运动*/
function Growth_movement(){
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
	suspended();
}
//鼠标悬浮里面图片放大
function suspended(){
	$(".hoverbger").hover(function() {
		$(this).find('img').addClass('hoverbig');
	},function(){
		$(this).find('img').removeClass('hoverbig');
	});
	The_dynamic();
}
/*左边动态效果*/
function The_dynamic(){
	$('.qlfblock').hover(function(){
		$this=$(this);
	//	$this.append('<div class="yellowblockcen"></div>');
		$(".bticonq").css({transform:'scale(.8,.8)',webkitTransform:'scale(.8,.8)'});
	},function(){
		$(".bticonq").css({transform:'scale(1,1)',webkitTransform:'scale(1,1)'});
		$('.yellowblockcen').remove();
	});
	right_float();
}
/*右下浮动*/
function right_float(){
	$('.qbtrgtblock').hover(function(){
		$(this).css({backgroundSize:'120% 120%'});
	},function(){
		$(this).css({backgroundSize:'100% 100%'});
	});
	Under();
}
/*底部hover*/
function Under(){
	$('.qbootinn p').hover(function(){
		var index=$(this).index('.qbootinn p');
		$this=$(this);
		$this.addClass('bootmid1').siblings('p').removeClass('bootmid1');
		if(index==1){
			$('.bootmid img').attr({src:rz_img_path+'bootqrcode.jpg'});
		}else if(index==2){
			$('.bootmid img').attr({src:rz_img_path+'callback.jpg'});
		}
	})
	Slip_effect()
}
/*滑到效果*/
function Slip_effect(){
	$('.qlffontbk span').css({marginLeft:'-587px',opacity:0});
	$('.qrgtfontbk p,.qrgtfontbk div').css({marginLeft:'519px',opacity:0})
	$(document).scroll(function(){
		if($(document).scrollTop()>6200){
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
	Dynamic_coffee();
}
/*咖啡动态*/
function Dynamic_coffee(){
	var coffindex=0;
	var cofflen=$('.catcoffrgt').length;
	$('.qprebtn').click(function(){
		$this=$(this);
		$this.css('backgroundColor','rgba(0,178,161,5)');
		$('.qnextbtn').css('backgroundColor','rgba(37,37,37,1)');
		coffindex--;
		if(coffindex<0){
			coffindex=cofflen-1;
		}
		$('.catcoffimg').attr({
			src: rz_img_path+'isoftware'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
	});
	$('.qnextbtn').click(function(){
		$this=$(this);
		$this.css('backgroundColor','rgba(0,178,161,5)');
		$('.qprebtn').css('backgroundColor','rgba(37,37,37,1)');
		coffindex++;
		if(coffindex==cofflen){
			coffindex=0;
		}
		$('.catcoffimg').attr({
			src: rz_img_path+'isoftware'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
	});
	Carousel_figure();
}
/*点击打开大图轮播*/
function Carousel_figure(){
	var $bigHotel=$(".bigHotel");
	var $tuceng=$(".tuceng");
	var imgarr=new Array(new Array(rz_img_path+'mancoff1.jpg',rz_img_path+'mancoff2.jpg',rz_img_path+'mancoff3.jpg',rz_img_path+'mancoff4.jpg',rz_img_path+'mancoff5.jpg'),
		new Array(rz_img_path+'jucoff1.jpg',rz_img_path+'jucoff2.jpg',rz_img_path+'jucoff3.jpg',rz_img_path+'jucoff4.jpg',rz_img_path+'jucoff5.jpg'),
		new Array(rz_img_path+'guihotel1.jpg',rz_img_path+'guihotel2.jpg',rz_img_path+'guihotel3.jpg',rz_img_path+'guihotel4.jpg',rz_img_path+'guihotel5.jpg'),
		new Array(rz_img_path+'rantime1.jpg',rz_img_path+'rantime2.jpg',rz_img_path+'rantime3.jpg',rz_img_path+'rantime4.jpg',rz_img_path+'rantime5.jpg'),
		new Array(rz_img_path+'zifitness1.jpg',rz_img_path+'zifitness2.jpg',rz_img_path+'zifitness3.jpg',rz_img_path+'zifitness4.jpg',rz_img_path+'zifitness5.jpg'));
 	var hotelnamearr=new Array('漫咖啡','小菊咖啡','归隐酒店','冉时光','良子健身');
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
	mouse();
}
// 鼠标移入效果
function mouse(){
	$('.chain3 li ').mouseover(function(){
		$(this).find('.Eject').css("display","block");
	});
	$('.chain3 li').mouseout(function(){
		$(this).find('.Eject').css("display","none");
	})

	$('.coff').mouseover(function(){
		$(this).find('.can').css("display","block");
		$(this).find('.can1').css("display","block");
		$(this).find('.can2').css("display","block");
		$(this).find('.can3').css("display","block");
		$(this).find('.can4').css("display","block");
	});
	$('.coff').mouseout(function(){
		$(this).find('.can').css("display","none");
		$(this).find('.can1').css("display","none");
		$(this).find('.can2').css("display","none");
		$(this).find('.can3').css("display","none");
		$(this).find('.can4').css("display","none");
	})

	$('.ch2licenter').mouseover(function(){
		$(this).find('.before').removeClass().addClass('after');
	});
	$('.ch2licenter').mouseout(function(){
		$(this).find('.after').removeClass().addClass('before');
	})

	$('.contact ').mouseover(function(){
		// $('.Contact').css({background:'red',transtion:'background 2s all'});
		// console.log(this);
		$('.hide').css("width:200px");
	})

	Bottom_effect();
}
// 底部hover效果
function Bottom_effect(){
	$(".walkcir").hover(function(){
		$this=$(this);
		$this.find('p').css({color:'#fff'});
		$this.find('p>span').css({opacity:1});
		$this.find('i').css({color:'#fff'});
		// $this.find("p").css('top')
	},function(){
		$this.find('p').css({color:'#242424'});
		$this.find('p>span').css({opacity:0});
		$this.find('i').css({color:'#00b2a1'});
	});
	Effect();
}
//页面底部的代码
function Effect(){
	$('ul.nit>li').click(function(){
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
}
//动画效果
$(window).scroll(function(){
	if($('#index_tbox').length>0){
    	var m = $(window).scrollTop();  
        if(m >= 1000){
            //dump(m);
            //dump($(window).height());
            //dump(m >= $(window).height()/2+1060);
        	var per=$(window).height()/2+650;
            per=per/2;
            per=m/per-2;
            if(parseInt(per*50)<20){
                $('.tbox .d').css('opacity',0);
            }else{
                $('.tbox .d').css('opacity',per);
            };
            per=per*200;
            if(per>=200){
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
    downtable.css('width','100%').css('transition','.5s all').css('border-radius','0');;
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

/* 修改表单二字段值 */
$('form.form_two input[name="para179"]').attr('name','para180').parent().next().next().children().attr('name','para179');
// 表单切换
$(function(){
	$('.reqireda>a').click(function(event) {
		/* Act on the event */
		var index=$(this).index();
		$(this).addClass('reqiredacli').siblings('.reqireda>a').removeClass('reqiredacli');
		$('.requireform').eq(index).show().siblings('form').hide();
		$('.requirergt>p').eq(index).show().siblings('p').hide();
		if(typeof(_script)=='undefined'){
			if(document.getElementById('number'))return;
			var _script = document.createElement('script');
			_script.setAttribute('type','text/javascript');
			_script.setAttribute('id','number');
			_script.setAttribute('src','../templates/res017/images/number/number.js');
			document.body.appendChild(_script);
		}	
	});
	$('form.requireform>.provincechoo').click(function() {
		/* Act on the event */
		if($(this).attr('src')=='openwin/trangleup.png'){

			$(this).attr('src', 'openwin/trangledown.png');
		}else{
			$(this).attr('src', 'openwin/trangleup.png');
		}
	});

	$('.requireclose').click(function(){
		$('.boxbig').hide();
	});

})