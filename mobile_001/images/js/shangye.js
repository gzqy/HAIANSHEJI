/* 动态控制banner区双线进场效果 */
var translate;
var hr_one = $('.headertxt .hrone');
var hr_two = $('.headertxt .hrtwo');
translate  = ($(window).width() - $('.headertxt .hrone').width()) / 2; 
tr_change  = translate - translate / 4;
hr_one.css('left',tr_change + 'px');
hr_two.css('right',tr_change + 'px');
$(window).ready(function(){
	hr_one.css({left:translate + 'px',opacity:1});
	hr_two.css({right:translate + 'px',opacity:1});
});

/* windows page scroll */
 $(function(){
		$(".headeroneem").css('opacity', 1);
		setTimeout(function() {
			$(".headertwoem").animate({left: '50%', opacity: 1},1200);
			$("header>p").animate({left: '50%', opacity: 1}, 500);
			setTimeout(function() {
				$('.titleone').addClass('titleturn');
			}, 	300);
		}, 	500);
		$('.headerthreeem').css({top:'486px',opacity:1})
		$('header button').css({top:'584px',opacity:1})
		setTimeout(function() {
			$(".headertwoem").animate({left: '50%', opacity: 1}, 500);
			setTimeout(function() {
				$('.titleone').addClass('titleturn');
			}, 	300);
		}, 	500);
	$(document).scroll(function(){
		$this=$(document);
		if($this.scrollTop()>100){
			$('.designlftone').animate({left: 0, opacity: 1}, 500);
			$('.designctntop').animate({top: 0, opacity: 1}, 500);
			$('.designctndwnlft').animate({top: '224px', opacity: 1}, 500);
			$('.designctndwnrgt').animate({top: '224px', opacity: 1}, 500);
			$('.designrgtone').animate({left: '972px', opacity: 1}, 500);
		}
		if($this.scrollTop()>580){
			$('.titletwo').addClass('titleturn');
		}
		if($this.scrollTop()>700){
			$('.designcontentbox li:first-child').animate({marginLeft: 0,opacity:1}, 0);
			setTimeout(function() {
				$('.designcontentbox li:nth-child(2)').animate({marginLeft: '12px',opacity:1}, 0);
				setTimeout(function() {
					$('.designcontentbox li:nth-child(3)').animate({marginLeft: '12px',opacity:1}, 0);
				}, 200);
					setTimeout(function() {
						$('.designcontentbox li:nth-child(4)').animate({marginLeft: '12px',opacity:1}, 0);
						setTimeout(function() {
							$('.designcontentbox li:last-child').animate({marginLeft: '12px',opacity:1}, 0);
						}, 100);
					}, 100);
			}, 200);
		}
		if($this.scrollTop()>1350){
			$('.imageboxone').addClass('imgboxturn');
		}
		if($this.scrollTop()>1700){
			$('.positionimageul').animate({top: '436px', opacity: 1}, 300);
		}
		if($this.scrollTop()>1600){
			var li = $('.positionimageul>li');
			var num = 0;
			var time = setInterval(function(){
				if(num>li.length){
					clearInterval(time);
				}
				$('.positionimageul>li').eq(num).css({top:"10px",opacity:1});
				num++;
			},300);
		}
		if($this.scrollTop()>2100){
			$('.titlethree').addClass('titleturn');
		}
		if($this.scrollTop()>2250){
			$('.planprinciplelft').animate({left: 0,opacity:1}, 600);
			$('.planprinciplergt').animate({right: 0,opacity:1}, 600);
		}
		if($this.scrollTop()>3000){
			$('.imageboxtwo').addClass('imgboxturn');
		}
		if($this.scrollTop()>3230){
			$('.positionstrategyul>li:first-child').animate({left: 0, opacity: 1}, 0);
			setTimeout(function() {
				$('.positionstrategyul>li:nth-child(2)').animate({left: '399.6px', opacity: 1}, 0);
				setTimeout(function() {
					$('.positionstrategyul>li:last-child').animate({left: '799.2px', opacity: 1}, 0);
				}, 200);
			}, 200);
		}
		if($this.scrollTop()>3650){
			$('.titlefour').addClass('titleturn');
		}
		if($this.scrollTop()>3900){
			$('.classiccase>li:first-child').addClass('classiccasetopliturn');
			setTimeout(function() {
				$('.classiccase>li:nth-child(2)').addClass('classiccasetopliturn');
				setTimeout(function() {
					$('.classiccase>li:nth-child(3)').addClass('classiccasetopliturn');
				}, 100);
			}, 100);
		}
		if($this.scrollTop()>4350){
			$('.classiccase>li:nth-child(4)').addClass('classiccasedownliturn');
			setTimeout(function() {
				$('.classiccase>li:nth-child(5)').addClass('classiccasedownliturn');
				setTimeout(function() {
					$('.classiccase>li:last-child').addClass('classiccasedownliturn');
				}, 100);
			}, 100);
		}
		if($this.scrollTop()>5005){
			$('.imageboxthree').addClass('imgboxturn');
		}
		if($this.scrollTop()>5300){
			$('.professionalul').animate({top: '400px', opacity: 1}, 300);
			setTimeout(function() {
				$('.professionalul>li:first-child').addClass('professionalliturn');
				setTimeout(function() {
					$('.professionalul>li:nth-child(2)').addClass('professionalliturn');
					setTimeout(function() {
						$('.professionalul>li:nth-child(3)').addClass('professionalliturn');
						setTimeout(function() {
							$('.professionalul>li:nth-child(4)').addClass('professionalliturn');
							setTimeout(function() {
								$('.professionalul>li:last-child').addClass('professionalliturn');
							}, 100);
						}, 100);
					}, 100);
				}, 100);
			}, 100);
		}
		if($this.scrollTop()>5650){
			$('.titlefive').addClass('titleturn');
		}
		if($this.scrollTop()>5900){
			$('.advantageul').animate({paddingTop: '0', opacity: 1}, 300);
			setTimeout(function() {
				$('.advantageul>li:first-child').addClass('advantageulturn');
				setTimeout(function() {
					$('.advantageul>li:nth-child(2)').addClass('advantageulturn');
					setTimeout(function() {
								$('.advantageul>li:last-child').addClass('advantageulturn');
					}, 200);
				}, 200);
			}, 200);
		}
		if($this.scrollTop()>6400){
			$('.aboutuscontant>ul>li>em').animate({left: 0, opacity: 1}, 200);
			$('.aboutuscontant>ul>li>p').animate({left: 0, opacity: 1}, 200);
			$('.aboutuscontant>i>img').animate({left: '60px', opacity: 1}, 0);
			$('.aboutuscontant span').animate({right: '65px', opacity: 1}, 0);
		}
		if($this.scrollTop()>7050){
			$('.titlesix').addClass('titleturn');
			if($('.met-index-news').hasClass('met_index_news_show')==false){
				$('.met-index-news').addClass('met_index_news_show');
			}
		}
		if($this.scrollTop()>7760){
			$('.titleseven').addClass('titleturn');
		}
	});
	// 商场设计内容
	$(".designcontentbox li").hover(function(){
		$this=$(this);
		$this.addClass('designcontentfocuson').siblings().removeClass('designcontentfocuson');
		});
});


// 案例切换
$(function(){
	var num = 0;
	var all_num = $('.c3eg').length;
	$('#iconleft').click(function(){
		// console.log(num);
		if(num > 0){
			if(num == -(all_num-1)) num = 1;
			num--;
			$('.c3eg').eq(Math.abs(num)).removeClass('clsplay').siblings('.c3eg').addClass('clsplay');
		}else{
			if(num == -all_num) num = 0;	
			$('.c3eg').eq(Math.abs(num)).removeClass('clsplay').siblings('.c3eg').addClass('clsplay');
			num--;
		}
	});
	$('#iconrgt').click(function(){
		if(num < 0){
			if(num == all_num) num = 0;
			$('.c3eg').eq(num).removeClass('clsplay').siblings('.c3eg').addClass('clsplay');
			num++;
		}else{
			if(num == all_num-1) num = -1;
			num++;
			$('.c3eg').eq(num).removeClass('clsplay').siblings('.c3eg').addClass('clsplay');
			// console.log(num);	
		}

	});
});


// 关于我们切换
 $(function() {
 	var thirdboxnum=0;
	$(".aboutuscontant>i>img").click(function() {
		thirdboxnum++;
		$(".aboutuscontant>ul li").eq(thirdboxnum).removeClass('disnone').siblings().addClass('disnone');
		if (thirdboxnum== 2) {
			thirdboxnum=-1;
		};
	});
});

//footer点击切换选项卡

$(function() {
	$(".footuplistbox>dl>dt").click(function() {
		var footerxuanindex= $(this).index();
		$(".footuplistbox dl dt").eq(footerxuanindex).addClass('footdtfocus').siblings().removeClass('footdtfocus');
		$(".footuplistbox ul").eq(footerxuanindex).removeClass('clsplay').siblings('ul').addClass('clsplay');
	});
});

//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(this).scrollTop() <=1500){
             
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
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
    	boot.css('width','100%').css('border-radius','0');
    		bclose.show(); 
    	
	});
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