// /*banner 动效*/
// $(function(){
// 	$(".bantitletese").animate({top:'134px',left:'203px'}, 1000);
// 	$(".bantitlesml").animate({right:'133px',top:'267px'}, 1000);
// 	$(".introductionbox").animate({left:'165px'}, 1000);
// 		setTimeout(function() {
// 			$(".category").addClass('transformturnto1');
// 		}, 400);
// });
// $(function(){
// 	$('.banndownarr').click(function(){
// 		var screenH=$(window).height();
// 		$(document).scrollTop(screenH);
// 	})
// });

/* banner button hover */
// $(function(){
// 	$('.headerbtn').hover(function(){
// 		$(this).css('background','rgb(255,255,255)').parent().prev().css('animation','0s');
// 	},function(){
// 		$(this).css('background','rgba(255,255,255,.62)').parent().prev().css('animation','updown 1.3s infinite');
// 	});
// });
 

/* 底部横幅 */
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
             if($(window).scrollTop() <=280){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    })  
});



/*圆hover变红*/
$(function(){
	$(".walkcir").bind('mouseover',function(){
		$(this).find('p').css({color:'#fff'});
		$(this).find('p>span').css({opacity:1});
		$(this).find('i').css({color:'#fff'});
		// $this.find("p").css('top')
	});
	$(".walkcir").bind('mouseout',function(){
		$(this).find('p').css({color:'#242424'});
		$(this).find('p>span').css({opacity:0});
		$(this).find('i').css({color:'#da132a'});
	});
});

/* 点击空白处关闭 */
$(function(){
	$('.boxbig').click(function(e){
		var _con = $(this);
		if(_con.is(e.target) && _con.has(e.target).length === 0)
		{
			$(this).hide();
		}
	});
});

/*翻书设计简化*/
$(function(){
	var index=$(".cont3mainbox").index(".cont3mainbox:visible");
    $(".ct3rgt").click(function(){
    	index++;
	    if(index>4){
	    	index=0;
	    }
    	$(".cont3mainbox").eq(index).show().siblings(".cont3mainbox").hide();
    });
   /* 左箭头*/
     $(".ct3lft").click(function(){
    	/*var index=$(".cont3mainbox").index(".cont3mainbox:visible");*/
    	index--;
    	if(index<0){
    		index=4;
    	}
    	$(".cont3mainbox").eq(index).show().siblings(".cont3mainbox").hide();
    });
});
/* 按钮线条显出 */ 
// $(function(){
// 	$(document).scroll(function(event) {
// 		if($(this).scrollTop()>9000){
// 			// alert("arba");
// 			$(".hrtopright").animate({width:'0px'}, 800);
// 			$(".hrdownleft").animate({width:'0px'}, 800);
// 			setTimeout(function() {
// 				$(".hrright").animate({height:'0px'}, 400);
// 				$(".hrleft").animate({height:'0px'}, 400);
// 				setTimeout(function() {
// 					$(".hrdownright").animate({width:'0px'}, 700);
// 					$(".hrtopleft").animate({width:'0px'}, 700);
// 				}, 400);
// 			}, 700);
// 		}
// 	});

// });
/*内涵特征js*/
$(function(){
	$('.intenlf').css({
		left:'600px',
		opacity: 0
	});
	$('.intenrgt').css({
		right:'600px',
		opacity: 0
	});
	/*发展模式*/
	$('.page000>img').css({
		right: '-50px',
/*		bottom:'170px',*/
		opacity:0
	});
	$(document).scroll(function(){
		$this=$(document);
		if($this.scrollTop()>1000){
			$('.intenlf').animate({left:0, opacity:1}, 1000);
			$('.intenrgt').animate({
				right: 0,
				opacity: 1},
				1000, function() {
				/* stuff to do after animation is complete */
			});
		}
		if($this.scrollTop()>2000){
			/*console.log($this.scrollTop());*/
			$('.page000>img').first().animate({
				right: '31px',
				/*bottom:'12px',*/
				opacity:1},
				700, function() {
				/* stuff to do after animation is complete */
				$('.page000>img').eq(1).animate({
				right: '31px',
				/*bottom:'12px',*/
				opacity:1},
				700, function() {
					$('.page000>img').eq(2).animate({
						right: '31px',
						/*bottom:'12px',*/
						opacity:1},
						700, function() {
							$('.page000>img').eq(3).animate({
							right: '31px',
							/*bottom:'12px',*/
							opacity:1},
							700);
						});
				});
			});
		}
		if($this.scrollTop()>20){
			$('.receip003').animate({width: '49px', height: '49px',right:'-12px',top:'27px'}, 300);
			setTimeout(function() {
				$('.receipimg2').animate({transform: 'rotate(0deg)', msTransform: 'rotate(0deg)',
				 mozTransform: 'rotate(0deg)', webkitTransform: 'rotate(0deg)', 
				 oTransform: 'rotate(0deg)', left: '110px',top:'17px'},300);
				setTimeout(function() {
					$('.receipimg2').css({transform: 'rotate(0deg)', msTransform: 'rotate(0deg)',
					 mozTransform: 'rotate(0deg)', webkitTransform: 'rotate(0deg)', 
					 oTransform: 'rotate(0deg)'});
				}, 300);
			}, 100);
		}
		if($this.scrollTop()>7900){
			// console.log($this.scrollTop());
			$('.borderlineshow').css({
				transform: 'scale(1.18)',
				webkitTransform: 'scale(1.18)',
				mozTransform: 'scale(1.18)',
				msTransform: 'scale(1.18)',
				oTransform: 'scale(1.18)'
			});
		}
	});
});
console.log($('.bashcir'));
/*开发框架*/
$(function(){
	$('.dotk:not(".dotk1")').mouseover(function(){
		$('.dotpp1').css('bottom','78px');
	});
	$('.dotk').mouseover(function(){
		$this=$(this);
		var index=$this.index('.dotk');
			$('.dotpp'+(index+1)).css('bottom','0');
			$('.dotpp'+(index+1)).parent().siblings('.dotk').children().css('bottom','78px');
			$('.bigbig').eq(index).show().siblings('.bigbig').hide();
			$('.dotdot').eq(index).css('backgroundColor','#d31515').siblings('.dotdot').css('backgroundColor', '#4b4b4b');
	});
});
/*内涵hover*/
$(function(){
	$('.intenh3').mouseover(function(){
		$this=$(this);
		var index=$this.index('.intenh3')+1;
		var index2=$this.index('.intenh3');
		$('.intenbor'+index).find('.intenud').addClass('intenudhover').parent().siblings('.intenbor').find('.intenud').removeClass('intenudhover');
		$('.ulinten>li').eq(index2).find('.intenh3').css({
			color:'#d31515',
			background:'url(../templates/res017/images/minsu/redplus.png) no-repeat'
			});

		$('.intenbor'+index).css({
			background: 'url(../templates/res017/images/minsu/intension0'+index+'.jpg) no-repeat',
		});
	});
	$('.intenh3').mouseout(function(){
		$this=$(this);
		var index=$this.index('.intenh3')+1;
		var index2=$this.index('.intenh3');
		$('.ulinten>li').eq(index2).find('.intenh3').css(
		{
			color:'#272727',
			background:'url(../templates/res017/images/minsu/listicon.png) no-repeat'
		});
		
		if(index==1||index==4){
			$('.intenlf>.intenbor'+index).css({
				background:'none',
				backgroundColor:'#625856'
			}).find('.intenud').removeClass('intenudhover');
		}else if(index==2||index==3){
			$('.intenlf>.intenbor'+index).css({
				background:'none',
				background:'#918f8f'
			}).find('.intenud').removeClass('intenudhover');
		}
		
	});

/*左边浮动*/
	$('.intenbor').hover(function(){
		$this=$(this);
		var index=$this.index('.intenbor');
		var index2=$this.index('.intenbor')+1;
		$('.intenbor'+index2).find('.intenud').addClass('intenudhover').parent().siblings('.intenbor').find('.intenud').removeClass('intenudhover');
		$('.intenbor'+index2).css({
			background: 'url(../templates/res017/images/minsu/intension0'+index2+'.jpg) no-repeat',
		});

		$('.ulinten>li').eq(index).find('.intenh3').css({

			color:'#d31515',
			background:'url(../templates/res017/images/minsu/redplus.png) no-repeat'
			});
	},function(){
		$this=$(this);
		var index=$this.index('.intenbor');
		var index2=$this.index('.intenbor')+1;
		if(index2==1||index2==4){
			$('.intenlf>.intenbor'+index2).css({
				background:'none',
				backgroundColor:'#625856'
			}).find('.intenud').removeClass('intenudhover');
		}else if(index2==2||index2==3){
			$('.intenlf>.intenbor'+index2).css({
				background:'none',
				background:'#918f8f'
			}).find('.intenud').removeClass('intenudhover');
		}

		$('.ulinten>li').eq(index).find('.intenh3').css(
		{
			color:'#272727',
			background:'url(../templates/res017/images/minsu/listicon.png) no-repeat'
		});
	});
});
/*footer导航按钮*/
$(function(){
  $('ul.footul>li').click(function(event) {
    /* Act on the event */
      $this=$(this);
      var liin=$(this).index('ul.footul>li');
       $this.css({background: '#535353',color:'#fff'}).siblings('li').css({backgroundColor:'#f1f1f1',color:'#666666'});
       $(".footertop>.menuul").eq(liin).removeClass('clsply').siblings('ul.menuul').addClass('clsply');
  });
});
// 禁止右键点击及复制
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