// JavaScript Document

// 底部横幅
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
	downtable.css("width","30px").css('border-radius','0 10px 10px 0').css('transition','0s all');
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

/* 按钮线条显出 */ 
$(function(){
	$(document).scroll(function(event) {
		if($(this).scrollTop()>8500){
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

/* 测试滚动距离 */ 
// $(window).scroll(function()
// 	{
// 		console.log($(window).scrollTop());
// 	});


/* 点击空白处关闭弹框 */ 
$(function(){
	$('.boxbig').click(function(e){
		var _con = $(this);
		if(_con.is(e.target) && _con.has(e.target).length === 0)
		{
			$(this).hide();
		}
	});
});

$(function() {
	/*翻书设计简化*/
    	var index=$(".cont3mainbox").index(".cont3mainbox:visible");
    	var max=$(".cont3mainbox").length-1;
    	var more_array = new Array();
    	more_array[0] = '79';
    	more_array[1] = '212';
    	more_array[2] = '80';
    	more_array[3] = '44';
    	more_array[4] = '81';
    	// var url_host = $(".cont3 a").attr('href').split('/')[2];
    	// console.log('more_array are '+ more_array);
    	// var url_string = url_host +'/product/showproduct.php?lang=cn&id=';
    	// console.log(url_string);s
    $(".ct3rgt").click(function(){
    	index++;
	    if(index>max){
	    	index=0;
	    }
	    // $(".cont3 a").attr('href',url_string+more_array[index]);
	    // console.log('url is '+url_string+more_array[index]);

    	$(".cont3mainbox").eq(index).show().siblings(".cont3mainbox").hide();
    });
   /* 左箭头*/
     $(".ct3lft").click(function(){
    	/*var index=$(".cont3mainbox").index(".cont3mainbox:visible");*/
    	index--;
    	if(index<0){
    		index=max;
    	}
    	console.log(index);
    	$(".cont3mainbox").eq(index).show().siblings(".cont3mainbox").hide();
    });
});

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
		if($this.scrollTop()>1600){
			$('.intenlf').animate({left:0, opacity:1}, 1000);
			$('.intenrgt').animate({
				right: 0,
				opacity: 1},
				1000, function() {
				/* stuff to do after animation is complete */
			});
		}
		if($this.scrollTop()>2600){
			/*console.log($this.scrollTop());*/
			$('.page000>img').first().animate({
			right: '31px',
			/*bottom:'12px',*/
			opacity:1},
			700);
			/* stuff to do after animation is complete */
			$('.page000>img').eq(1).animate({
			right: '31px',
			/*bottom:'12px',*/
			opacity:1},
			700);
			$('.page000>img').eq(2).animate({
			right: '31px',
			/*bottom:'12px',*/
			opacity:1},
			700);
			$('.page000>img').eq(3).animate({
			right: '31px',
			/*bottom:'12px',*/
			opacity:1},
			700);
	
		}
		if($this.scrollTop()>4400){
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
/*开发框架*/
$(function(){
	$('.dotpp').hover(function(){
		$this=$(this);
		var index=$this.index('.dotpp');
		$this.show('fast', function() {
			$this.siblings('.dotpp').show();
			$('.bigbig').eq(index).show().siblings('.bigbig').hide();
			$('.dotdot').eq(index).css('backgroundColor','#d31515').siblings('.dotdot').css('backgroundColor', '#4b4b4b');
		});
	});
	$('.dotdot').click(function(){
		$this=$(this);
		var index=$this.index('.dotdot');
		$('.dotpp').eq(index).hide('fast', function() {
			$(this).siblings('.dotpp').show();
			$('.bigbig').eq(index).show().siblings('.bigbig').hide();
			$('.dotdot').eq(index).css('backgroundColor','#d31515').siblings('.dotdot').css('backgroundColor', '#4b4b4b');
		});
	});
});
/*内涵hover*/
$(function(){
	var lujing = "../templates/res017/images/xiaozhen/";
	$('.intenh3').hover(function(){ 
		$this=$(this);
		var index=$this.index('.intenh3')+1;
		var index2=$this.index('.intenh3');
		$('.ulinten>li').eq(index2).find('.intenh3').css({

			color:'#d31515',
			background:'url('+lujing+'redplus.png) no-repeat'
			});

		$('.intenbor'+index).css({
			background: 'url('+lujing+'intension0'+index+'.jpg) no-repeat',
		});
	},function(){
		$this=$(this);
		var index=$this.index('.intenh3')+1;
		var index2=$this.index('.intenh3');
		$('.ulinten>li').eq(index2).find('.intenh3').css(
		{
			color:'#272727',
			background:'url('+lujing+'listicon.png) no-repeat'
		});
		if(index==1||index==4){
			$('.intenbor'+index).css({
				background:'none',
				backgroundColor:'#625856'
			});
		}else if(index==2||index==3){
			$('.intenbor'+index).css({
				background:'none',
				background:'#918f8f'
			});
		}
	});
	$('.intenbor').hover(function(){
		$this=$(this);
		var index=$this.index('.intenbor');
		var index2=$this.index('.intenbor')+1;
		$('.intenbor'+index2).css({
			background: 'url('+lujing+'intension0'+index2+'.jpg) no-repeat',
		});

		$('.ulinten>li').eq(index).find('.intenh3').css({

			color:'#d31515',
			background:'url('+lujing+'redplus.png) no-repeat'
			});
	},function(){
		$this=$(this);
		var index=$this.index('.intenbor');
		var index2=$this.index('.intenbor')+1;
		if(index2==1||index2==4){
			$('.intenbor'+index2).css({
				background:'none',
				backgroundColor:'#625856'
			});
		}else if(index2==2||index2==3){
			$('.intenbor'+index2).css({
				background:'none',
				background:'#918f8f'
			});
		}
		
		$('.ulinten>li').eq(index).find('.intenh3').css(
		{
			color:'#272727',
			background:'url('+lujing+'listicon.png) no-repeat'
		});
	});
});
