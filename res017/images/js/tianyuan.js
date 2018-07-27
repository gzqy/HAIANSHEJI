$(function(){
	$('.banntit').css({
		top: '105px',
		opacity: 0
	});
	$('.banntit>p').css({
		bottom: '0px',
		opacity: 0
	});
	$('.bannblue').css({
		opacity: 0
	});
	$('.bannp>p').eq(0).css({
		top: '60px',
		opacity: 0
	});
	$('.bannp>hr').css({
		opacity: 0
	});
	$('.bannp>p').eq(0).animate({
		top: '0',
		opacity: 1
	},1000);
	setTimeout(function() {
		$('.bannp>hr').animate({
			opacity: 1
		},1000);
	}, 1000);
	setTimeout(function() {
		$('.banntit').animate({
		top: '190px',
		opacity: 1
	},500,function(){
		$('.banntit>p').animate({
			bottom: '6px',
			opacity: 1
		},500,function(){
			$('.bannblue').animate({
				opacity:1
			},1000);
		});
	});
	}, 300);
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
/*banner 动效*/
$(function(){
	 setTimeout(function() {
	$(".outer").animate({width:'730px' , height: '730px',top:'62px',left:'35px'}, 1000);
	$(".inner").animate({width:'502px' , height: '490px',left:'148px',top:'184px'}, 1000);
	$(".middle").animate({width:'612px' , height: '612px',top:'119px',left:'92px'}, 1000);
	$(".quote").animate({opacity: 1,width:"800px",height:"800px",top:'27px',left:'2px'},1000);
	setTimeout(function() {
		$(".centerwhite").animate({opacity:1,top:'0px',left:'-564px'},1000,function(){
			$(".quote,.inner").addClass('qrotate');
			setTimeout(function() {
				$(".quote,.inner").css({
					transform: 'rotate(0)',
					webkitTransform: 'rotate(0)',
					webkitTransition: 'all 1s linear',
					transition: 'all 1s linear'
				});
				setTimeout(function() {
					$(".quote,.inner").removeClass('qrotate').removeClass('qbackrott');
				}, 1000);
			}, 1000);
		});
	}, 1000);
}, 1500);
	
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
$(function(){
	$('.g4b1proshow').hover(function() {
	setTimeout(function() {
	$(".singlebtnbox").addClass('opacitymax');
	}, 200);
	}, function() {
	$(".singlebtnbox").removeClass('opacitymax');
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


/*banner按钮鼠标悬浮三角添加方法 动静按钮*/
$(function(){
	$(".horizonmid").hover(function(){
		$(".qgreenbtn").css({
							'animation':'btnmove 1.8s ',
							'-webkit-animation':'btnmove 1.8s ',
							'-o-animation':'btnmove 1.8s '
		});
		$(".qgreenbtnsnpa").css({'animation':'smallhandmove 1s infinite','-webkit-animation':'smallhandmove 1s infinite','-o-animation:smallhandmove':'smallhandmove 1s infinite'});
	},function(){
		$(".qgreenbtn").css({
							'animation':'btnmove 1.8s infinite',
							'-webkit-animation':'btnmove 1.8s infinite',
							'-o-animation':'btnmove 1.8s infinite'});
		$(".qgreenbtnsnpa").css({'animation':'smallhandmove 1s','-webkit-animation':'smallhandmove 1s','-o-animation:smallhandmove':'smallhandmove 1s'});
	});
})

});
/*老体字hover切换*/
$(function(){
	$(".laotia img").hover(function(){
		$_this=$(this);
		var index=$_this.index();
		$(".laotitogg").eq(index).show().siblings(".laotitogg").hide();
		$_this.attr('src','oldchar0'+(index+1)+'_black.png');
		for(var i=0;i<$(".laotia img").length;i++){
			if(i!==index){
				$(".laotia img").eq(i).attr('src','oldchar0'+(i+1)+'.png');
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


/*二屏10个li的logo变小*/
		$(function(){
			$(".cont2ulbox li").hover(function(){
				$(this).addClass('cont2ulboxlibg');
				$(this).find('img').css({'opacity':'1','transform':'scale(0.9)','margin-top':'20px'});
				$(this).find('em').css({'margin-top':'-15px','color':'#e9e9e9'});
				$(this).find('span').css({'display':'block','color':'#e9e9e9'});
			},function(){
				$(this).find('img').css({'opacity':'0','transform':'scale(1)','margin-top':'40px'});
				$(this).find('em').css({'margin-top':'0px','color':'#363636'});
				$(this).find('span').css({'display':'none','color':'#363636'});
				$(this).removeClass('cont2ulboxlibg');
			});
		});
		$(function(){
			var sWidth = $(".hengfocus").width(); //获取焦点图的宽度（显示面积）
			var len = $(".hengfocus ul li").length; //获取焦点图个数
			var index = 0;
			var picTimer;
			//左按钮
			$(".lunbolftbtn").click(function() {
				index -= 1;
				if(index == -1) {index = len - 1;}
				$('.g6introdtxt').eq(index).removeClass('shownone').siblings('.g6introdtxt').addClass('shownone');
				$('.g6introdname').eq(index).removeClass('shownone').siblings('.g6introdname').addClass('shownone');
				showPics(index);
			});

			//右按钮
			$(".lunborgtbtn").click(function() {
				// alert("aebrfab");
				index += 1;
				if(index == len) {index = 0;}
				$('.g6introdtxt').eq(index).removeClass('shownone').siblings('.g6introdtxt').addClass('shownone');
				$('.g6introdname').eq(index).removeClass('shownone').siblings('.g6introdname').addClass('shownone');
				showPics(index);
			});

			//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
			$(".hengfocus ul").css("width",sWidth * (len));
			
			//显示图片函数，根据接收的index值显示相应的内容
			function showPics(index) { //普通切换
				var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
				$(".hengfocus ul").stop(true,false).animate({"left":nowLeft},500); //通过animate()调整ul元素滚动到计算出的position 
			}
		});

		$(function(){
		
			var index = 0;
			// console.log(len);
			//上一页按钮
			$(".lunbotopbtn").click(function() {
				var $focusshufocus= $(this).parent().next('.shufocus')
				var sHeight =$focusshufocus.height(); //获取焦点图的宽度（显示面积）
				var len = $focusshufocus.find('ul li').length; //获取焦点图个数
				// var index = 0;
				$focusshufocus.find('ul').css("height",sHeight * (len));
				// var picTimer;
				index -= 1;
				if(index == -1) {index = len - 1;}
				showPics(index,sHeight);
			});

			//下一页按钮
			$(".lunbodownbtn").click(function() {
				var $focusshufocus= $(this).parent().next('.shufocus')
				var sHeight =$focusshufocus.height(); //获取焦点图的宽度（显示面积）
				var len = $focusshufocus.find('ul li').length; //获取焦点图个数
				
				$focusshufocus.find('ul').css("height",sHeight * (len));
				// var picTimer;
				index += 1;
				if(index == len) {index = 0;}
				showPics(index,sHeight);
			});

			//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
			
			
			//显示图片函数，根据接收的index值显示相应的内容
			function showPics(index,sHeight) { //普通切换

				var nowTop = -index*sHeight; //根据index值计算ul元素的left值
				// console.log(nowTop);
				$(".shufocus ul").stop(true,false).animate({"top":nowTop},500); //通过animate()调整ul元素滚动到计算出的position
				//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
				// $("#focus .btn span").stop(true,false).animate({"opacity":"0.5"},300).eq(index).stop(true,false).animate({"opacity":"0.9"},300); //为当前的按钮切换到选中的效果
				
			}
		});
		$(function(){
		
			var index = 0;
			// console.log(len);
			//上一页按钮
			$(".lunbotopbtn1").click(function() {
				var $focusshufocus= $(this).parent().parent().find('.shufocus1');
				var sHeight =$focusshufocus.height(); //获取焦点图的宽度（显示面积）
				var len = $focusshufocus.find('ul li').length; //获取焦点图个数
				// var index = 0;
				$focusshufocus.find('ul').css("height",sHeight * (len));
				// var picTimer;
				index -= 1;
				if(index == -1) {index = len - 1;}
				showPics(index,sHeight);
			});

			//下一页按钮
			$(".lunbodownbtn1").click(function() {
				var $focusshufocus= $(this).parent().parent().find('.shufocus1');
				var sHeight =$focusshufocus.height(); //获取焦点图的宽度（显示面积）
				var len = $focusshufocus.find('ul li').length; //获取焦点图个数
				
				$focusshufocus.find('ul').css("height",sHeight * (len));
				// var picTimer;
				index += 1;
				if(index == len) {index = 0;}
				showPics(index,sHeight);
			});

			//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
			
			
			//显示图片函数，根据接收的index值显示相应的内容
			function showPics(index,sHeight) { //普通切换

				var nowTop = -index*sHeight; //根据index值计算ul元素的left值
				// console.log(nowTop);
				$(".shufocus1 ul").stop(true,false).animate({"top":nowTop},500); //通过animate()调整ul元素滚动到计算出的position
				//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
				// $("#focus .btn span").stop(true,false).animate({"opacity":"0.5"},300).eq(index).stop(true,false).animate({"opacity":"0.9"},300); //为当前的按钮切换到选中的效果
				
			}
		});
		$(function(){
		
			var index = 0;
			// console.log(len);
			//上一页按钮
			$(".lunbotopbtn2").click(function() {
				var $focusshufocus= $(this).parent().next('.shufocus2')
				var sHeight =$focusshufocus.height(); //获取焦点图的宽度（显示面积）
				var len = $focusshufocus.find('ul li').length; //获取焦点图个数
				// var index = 0;
				$focusshufocus.find('ul').css("height",sHeight * (len));
				// var picTimer;
				index -= 1;
				if(index == -1) {index = len - 1;}
				showPics(index,sHeight);
			});

			//下一页按钮
			$(".lunbodownbtn2").click(function() {
				var $focusshufocus= $(this).parent().next('.shufocus2')
				var sHeight =$focusshufocus.height(); //获取焦点图的宽度（显示面积）
				var len = $focusshufocus.find('ul li').length; //获取焦点图个数
				
				$focusshufocus.find('ul').css("height",sHeight * (len));
				// var picTimer;
				index += 1;
				if(index == len) {index = 0;}
				showPics(index,sHeight);
			});

			//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
			
			
			//显示图片函数，根据接收的index值显示相应的内容
			function showPics(index,sHeight) { //普通切换

				var nowTop = -index*sHeight; //根据index值计算ul元素的left值
				// console.log(nowTop);
				$(".shufocus2 ul").stop(true,false).animate({"top":nowTop},500); //通过animate()调整ul元素滚动到计算出的position
				//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
				// $("#focus .btn span").stop(true,false).animate({"opacity":"0.5"},300).eq(index).stop(true,false).animate({"opacity":"0.9"},300); //为当前的按钮切换到选中的效果
				
			}
		});
/*百叶窗*/
$(function(){
	var len=8;
	var currentindex=0;
	var imgsarr=new Array('liudubi1.jpg','liudubi2.jpg','liudubi3.jpg','liudubi4.jpg','liudubi5.jpg');
	var imgcount=imgsarr.length;
	$blings=$(".shufocus");

	// var picwidth=$(".blings").css('width').sbustr(0,-2);
	// console.log(picwidth);
	qini(len);
	
	$(".lunbodownbtn").click(function(event) {
		/* Act on the event */
		var ind=$(this).index();
		$blings.prepend('<div class="bling"></div>');
		$_this=$blings.find('.bling').eq(0);
		//获得下一个索引
		currentindex=current(currentindex,imgcount,false);
		// console.log(currentindex);
		for(var i=0;i<len;i++){
			$_this.eq(0).append("<div class='qspan'><span></span></div>");
			$_this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr[currentindex]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
		var $_mytar=$blings.find(".bling").eq(1).find('.qspan');

		togg($_mytar,len);
		setTimeout(function() {
			$blings.find(".bling").eq(1).remove();
		}, 800);
		

	});
	$(".lunbotopbtn").click(function(event) {
		/* Act on the event */
		var ind=$(this).index();
		$blings.prepend('<div class="bling"></div>');
		$_this=$blings.find('.bling').eq(0);
		//获得下一个索引
		currentindex=current(currentindex,imgcount,true);
		for(var i=0;i<len;i++){
			$_this.eq(0).append("<div class='qspan'><span></span></div>");
			$_this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr[currentindex]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
		var $_mytar=$blings.find(".bling").eq(1).find('.qspan');

		togg($_mytar,len);
		setTimeout(function() {
			$(".bling").eq(1).remove();
		}, 800);
		
	});
	//索引变化
	function current(curindex,imgcount,pre){
		if(pre){
			//上一个
			curindex--;
			if(curindex<0){
				curindex=imgcount-1;
				return curindex;
			}
			
			return curindex;
		}else{
			//下一个
			curindex++;
			if(curindex>=imgcount){
				curindex=0;
				return curindex;
			}
			return curindex;
		}

	}
	//初始化
	function qini(){
		$blings.append("<div class='bling'></div>");
		var $this=$blings.find('.bling');
		var len = 7;
		for(var i=0;i<len;i++){
			$this.append("<div class='qspan'><span></span></div>");
			$this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr[currentindex]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
	}
	//点击事件
	function togg($_mytar,len){
		$_mytar.find('span').stop(true,true);
		for(var i=0;i<len;i++){
			$_mytar.eq(i).find('span').animate({
					left:"155px"},
					800);
		}
		
	}
})
/*第二百叶窗*/
$(function(){
	var len2=8;
	var currentindex2=0;
	var imgsarr2=new Array('qinglvy1.jpg','qinglvy2.jpg','qinglvy3.jpg','qinglvy4.jpg');
	var imgcount2=imgsarr2.length;
	$blings2=$(".shufocus1");

	// var picwidth=$(".blings").css('width').sbustr(0,-2);
	// console.log(picwidth);
	qini(len2);
	
	$(".lunbodownbtn1").click(function(event) {
		/* Act on the event */
		var ind=$(this).index();
		$blings2.prepend('<div class="bling"></div>');
		$_this=$blings2.find('.bling').eq(0);
		//获得下一个索引
		currentindex2=current(currentindex2,imgcount2,false);
		// console.log(currentindex);
		for(var i=0;i<len2;i++){
			$_this.eq(0).append("<div class='qspan'><span></span></div>");
			$_this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr2[currentindex2]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
		var $_mytar=$blings2.find(".bling").eq(1).find('.qspan');

		togg($_mytar,len2);
		setTimeout(function() {
			$blings2.find(".bling").eq(1).remove();
		}, 800);
		

	});
	$(".lunbotopbtn1").click(function(event) {
		/* Act on the event */
		var ind=$(this).index();
		$blings2.prepend('<div class="bling"></div>');
		$_this=$blings2.find('.bling').eq(0);
		//获得下一个索引
		currentindex2=current(currentindex2,imgcount2,true);
		for(var i=0;i<len2;i++){
			$_this.eq(0).append("<div class='qspan'><span></span></div>");
			$_this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr2[currentindex2]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
		var $_mytar=$blings2.find(".bling").eq(1).find('.qspan');

		togg($_mytar,len2);
		setTimeout(function() {
			$blings2.find(".bling").eq(1).remove();
		}, 800);
		
	});
	//索引变化
	function current(curindex,imgcount,pre){
		if(pre){
			//上一个
			curindex--;
			if(curindex<0){
				curindex=imgcount-1;
				return curindex;
			}
			
			return curindex;
		}else{
			//下一个
			curindex++;
			if(curindex>=imgcount){
				curindex=0;
				return curindex;
			}
			return curindex;
		}

	}
	//初始化
	function qini(len=7){
		$blings2.append("<div class='bling'></div>");
		var $this=$blings2.find('.bling');
		for(var i=0;i<len;i++){
			$this.append("<div class='qspan'><span></span></div>");
			$this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr2[currentindex2]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
	}
	//点击事件
	function togg($_mytar,len){
		$_mytar.find('span').stop(true,true);
		for(var i=0;i<len;i++){
			$_mytar.eq(i).find('span').animate({
					left:"155px"},
					800);
		}
		
	}
})
/*第三百叶窗*/
$(function(){
	var len3=8;
	var currentindex3=0;
	
	var imgsarr3=new Array('yinyis1.jpg','yinyis2.jpg','yinyis3.jpg','yinyis4.jpg','yinyis5.jpg');
	var imgcount3=imgsarr3.length;
	$blings3=$(".shufocus2");

	// var picwidth=$(".blings").css('width').sbustr(0,-2);
	// console.log(picwidth);
	qini(len3);
	
	$(".lunbodownbtn2").click(function(event) {
		/* Act on the event */
		$blings3.prepend('<div class="bling"></div>');
		$_this=$blings3.find('.bling').eq(0);
		//获得下一个索引
		currentindex3=current(currentindex3,imgcount3,false);
		for(var i=0;i<len3;i++){
			$_this.eq(0).append("<div class='qspan'><span></span></div>");
			$_this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr3[currentindex3]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
		var $_mytar=$blings3.find(".bling").eq(1).find('.qspan');

		togg($_mytar,len3);
		setTimeout(function() {
			$blings3.find(".bling").eq(1).remove();
		}, 800);
		

	});
	$(".lunbotopbtn2").click(function(event) {
		/* Act on the event */
		$blings3.prepend('<div class="bling"></div>');
		$_this=$blings3.find('.bling').eq(0);
		//获得下一个索引
		currentindex3=current(currentindex3,imgcount3,true);
		for(var i=0;i<len3;i++){
			$_this.eq(0).append("<div class='qspan'><span></span></div>");
			$_this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr3[currentindex3]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
		var $_mytar=$blings3.find(".bling").eq(1).find('.qspan');

		togg($_mytar,len3);
		setTimeout(function() {
			$blings3.find(".bling").eq(1).remove();
		}, 800);
		
	});
	//索引变化
	function current(curindex,imgcount,pre){
		if(pre){
			//上一个
			curindex--;
			if(curindex<0){
				curindex=imgcount-1;
				return curindex;
			}
			
			return curindex;
		}else{
			//下一个
			curindex++;
			if(curindex>=imgcount){
				curindex=0;
				return curindex;
			}
			return curindex;
		}

	}
	//初始化
	function qini(len=7){
		$blings3.append("<div class='bling'></div>");
		var $this=$blings3.find('.bling');
		for(var i=0;i<len;i++){
			$this.append("<div class='qspan'><span></span></div>");
			$this.find(".qspan").eq(i).find('span').css({backgroundImage:"url(tianyuan/"+imgsarr3[currentindex3]+")",backgroundPosition:"-"+i*155+"px 0"});
		}
	}
	//点击事件
	function togg($_mytar,len){
		$_mytar.find('span').stop(true,true);
		for(var i=0;i<len;i++){
			$_mytar.eq(i).find('span').animate({
					left:"155px"},
					800);
		}
		
	}
});
/*footer导航按钮*/
// $(function(){
//   $('ul.navul>li').click(function(event) {
//       $this=$(this);
//       var liin=$(this).index('ul.navul>li');
//        $this.css({background: '#1c1f1c',color:'#fff'}).siblings('li').css({backgroundColor:'#8a8a8a',color:'#363636'});
//        $(".footleft>.alinkbox").eq(liin).removeClass('clsplay').siblings('ul.alinkbox').addClass('clsplay');
//   });
// });

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
// 禁止右键及复制
$(function(){
	document.oncontextmenu=new Function("event.returnValue=false"); 
	document.onselectstart=new Function("event.returnValue=false"); 
});

/* 滚动轮播消息区块 */
$(function(){
	
	var div   = $('div.view_area');
	var ul    = $('ul.scroll_area');
	var li    = $('#message_area');
	var column_name = 'news';
	var column_listNum = 30;
	var desc = {new_id:"id",new_title:"title",new_des:"description"};
	var num_all = $('.message_area').length;
	// ajax_special();
	run();
	function run(){
	var myMar;
	var is_ok   = false;
	var i     = 0;
	var num   = 0;
	var go_time = 5000;
	myMar = setInterval(Marquee,go_time);
		function Marquee(){
		  	if(is_ok){
		    	myMar = setInterval(Marquee,go_time);
		    	is_ok = false;
		    	return;
		  	}
		  	i = num * div.height();
		  	ul.animate({top:- i},1000);
		  	if(num > num_all - 2){
		    	num = 0;
		    	clearInterval(myMar);
		    	ul.css('top',num);
		    	is_ok = false;
		    	myMar = setInterval(Marquee,go_time);
		    	return;
	  	  	}
		  	num++;
		}
	}
});
// function ajax_special(){
// 	$.ajax({
// 		type:"POST",
// 		url :"../ajax/home_special_topic.php",
// 		data:{column_name:column_name,column_listNum:column_listNum,desc:desc},
// 		success:function(data){
// 			// console.log(data);
// 			$.each(data,function(i,n){
// 				var li_new = li.clone();

// 				$("<h3>"+ n.title +"</h3>").appendTo(li_new);
// 				$("<hr/>").appendTo(li_new);
// 				$("<p>"+ n.description.substr(0,60) +" . . .</p>").appendTo(li_new);
// 				li_new.removeAttr('id').addClass('message_area');
// 				li_new.show();
// 				var a_link = $("<a href='http://www.haianzhuangshi.com/news/"+ n.id +"-cn.html' target='_blank'></a>");
// 				a_link.append(li_new);
// 				ul.append(a_link);
// 			});
// 			return num_all = ul.children().length;
// 		},
// 		error:function(data){
// 			console.log(data);
// 		},
// 		dataType:"json"
// 	});
// }


/* 横幅展示效果 */
$(function(){
	var time = 600;
	$('.space_new_ul li').hover(function(){
		var num = $(this).index();
		$(this).find('.space_new_title').children().eq(1).stop(true).animate({width:$(this).find('.space_new_title').children().eq(0).width()},time);
		
	},function(){
		var num = $(this).index();
		$(this).find('.space_new_title').children().eq(1).stop(true).animate({width:10},time);
		
	});
})

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