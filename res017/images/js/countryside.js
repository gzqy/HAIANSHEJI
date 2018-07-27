/*banner 动效*/
// $(function(){
// 	$(".outer").animate({width:'730px' , height: '730px',top:'62px',left:'35px'}, 1000);
// 	$(".inner").animate({width:'502px' , height: '490px',left:'148px',top:'184px'}, 1000);
// 	$(".middle").animate({width:'612px' , height: '612px',top:'119px',left:'92px'}, 1000);
// 	$(".quote").animate({opacity: 1,width:"800px",height:"800px",top:'27px',left:'2px'},1000);
// 	setTimeout(function() {
// 		$(".centerwhite").animate({opacity:1,top:'0px',left:'-564px'},1000,function(){
// 			$(".quote,.inner").addClass('qrotate');
// 			setTimeout(function() {
// 				$(".quote,.inner").css({
// 					transform: 'rotate(0)',
// 					webkitTransform: 'rotate(0)',
// 					webkitTransition: 'all 1s linear',
// 					transition: 'all 1s linear'
// 				});
// 				setTimeout(function() {
// 					$(".quote,.inner").removeClass('qrotate').removeClass('qbackrott');
// 				}, 1000);
// 			}, 1000);
// 		});
// 	}, 1000);
// });
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
		top: '318px',
		opacity: 0
	});
	$('.bannp>p').eq(0).css({
		left: '-255px',
		opacity: 0
	});
	$('.bannp>p').eq(1).css({
		right: '-255px',
		opacity: 0
	});
	$('.bannp>hr').css({
		opacity: 0
	});
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
				top: '389px',
				opacity:1
			},1000,function(){
				$('.bannp>p').eq(0).animate({
					left: '131px',
					opacity: 1
				},1000);
				$('.bannp>p').eq(1).animate({
					right: '82px',
					opacity: 1
				},1000);
				setTimeout(function() {
					$('.bannp>hr').animate({
						opacity: 1
					},1000);
				}, 1000);
			});
		});
	});
	}, 300);

});
/*老体字hover切换*/
$(function(){
	$(".laotia img").hover(function(){
		$_this=$(this);
		var index=$_this.index();
		$(".laotitogg").eq(index).show().siblings(".laotitogg").hide();
		$_this.attr('src','tianyuan/oldchar0'+(index+1)+'_black.png');
		for(var i=0;i<$(".laotia img").length;i++){
			if(i!==index){
				$(".laotia img").eq(i).attr('src','tianyuan/oldchar0'+(i+1)+'.png');
			}
		}
	},function(){
		$_this=$(this);
		var index=$_this.index();
		$(".laotitogg").eq(index).show().siblings(".laotitogg").hide();
	});
});
/*第一部分指定高度添加类*/
/*$(function(){
	$(document).scroll(function(event) {
		/* Act on the event */
		// console.log($(this).scrollTop());
		/*if($(this).scrollTop()>300){
			$(".whatimg3").addClass('g1whatimgbox')
		}
		if($(this).scrollTop()>5155){
             $(".tuwenline").addClass('rotatebig');
		}
	});
});*/
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
				showPics(index);
			});

			//右按钮
			$(".lunborgtbtn").click(function() {
				// alert("aebrfab");
				index += 1;
				if(index == len) {index = 0;}
				showPics(index);
			});

			//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
			$(".hengfocus ul").css("width",sWidth * (len));
			
			//显示图片函数，根据接收的index值显示相应的内容
			function showPics(index) { //普通切换
				var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
				$(".hengfocus ul").stop(true,false).animate({"left":nowLeft},500); //通过animate()调整ul元素滚动到计算出的position
				//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
				// $("#focus .btn span").stop(true,false).animate({"opacity":"0.5"},300).eq(index).stop(true,false).animate({"opacity":"0.9"},300); //为当前的按钮切换到选中的效果
				
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
	var imgsarr=new Array('g4b1proshow1.jpg.','g4b1proshow1.jpg','g4b1proshow1.jpg','g4b1proshow1.jpg','g4b1proshow1.jpg');
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
		console.log(currentindex);
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
	function qini(len=7){
		$blings.append("<div class='bling'></div>");
		var $this=$blings.find('.bling');
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
	var imgsarr2=new Array('g4b1proshow2.jpg.','g4b1proshow2.jpg','g4b1proshow2.jpg','g4b1proshow2.jpg','g4b1proshow2.jpg');
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
	var imgsarr3=new Array('g4b1proshow2.jpg.','g4b1proshow2.jpg','g4b1proshow2.jpg','g4b1proshow2.jpg','g4b1proshow2.jpg');
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
})
