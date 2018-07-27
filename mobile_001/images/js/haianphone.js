window.onload = function() {
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if(st>580){
			$(".unilateralnav a:last-child").css({'display': 'block'});
		}else{
			$(".unilateralnav a:last-child").css({'display': 'none'});
		}
	})

	//为什么选择海岸轮播背景
	var mySwiperr = new Swiper('.choseusbgimglun' , {
		loop: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false /*点击之后是否停止自动轮播*/
	});
//	mySwipers.pagination.$el.addClass('MyClass'); //为分页器增加样式
  	var mySwiper = new Swiper ('#swipercontainer', {
		slidesPerView : 1.1,
		spaceBetween : 5,
		freeMode : true,
		resistanceRatio : 0,
	    	loop: true,
			/*居中*/
	    	centeredSlides: true,
	  });
	  var mytwoSwiper = new Swiper ('#swipertwocontainer', {
		slidesPerView : 1.8,
		spaceBetween : 1.5,
		freeMode : true,
	    loop: true,
	    /*居中*/
	    centeredSlides: true,
		resistanceRatio : 0,
	  });
	  var mySwiper = new Swiper ('#swiperbusinesbox', {
	
	  });
	  var mySwiper = new Swiper ('.swiperspacebox1', {

		slidesPerView : 2.3,
		spaceBetween : 10,
		freeMode : true,
		resistanceRatio : 0,
	  });
	  var mySwiper = new Swiper ('.swiperspacebox2', {
		slidesPerView : 2.3,
		spaceBetween : 10,
		freeMode : true,
		resistanceRatio : 0,
	  });
	  var mySwiper = new Swiper ('.swiperspacebox3', {
		slidesPerView : 2.3,
		spaceBetween : 10,
		freeMode : true,
		resistanceRatio : 0,
	  });
	    var mySwiperr = new Swiper ('#swipercustomerbox');
	    $('#customerprev').click(function(){
		    mySwiperr.slidePrev();
		  })
		$('#customernext').click(function(){
		    mySwiperr.slideNext();
		  })
	  var mySwiperc = new Swiper ('.secondcase-box',{
//			resistanceRatio : 0,
			  on: {
			    slideChangeTransitionEnd: function(){
			      //alert(this.activeIndex);//切换结束时，告诉我现在是第几个slide
//			      $('.secondcase-txtbox li').index(activeIndex).removeClass('disnone');
			    },
			  },
	  })
	    $('#caseprevbtn').click(function(){
		    mySwiperc.slidePrev();
		  })
		$('#casenextbtn').click(function(){
		    mySwiperc.slideNext();
		  })
	  
	   //商业空间选项卡
	  function setBusCurrentSlide(busele, busindex) {
					$(".busswiper .swiper-slide").removeClass("busspaceselected");
					busele.addClass("busspaceselected");
				}

				var busswiper = new Swiper('.busswiper', {
					slidesPerView : 3.5,
					paginationClickable: true,//此参数设置为true时，点击分页器的指示点分页器会控制Swiper切换。
					resistanceRatio : 0,
					freeMode: true,//默认为false，普通模式：slide滑动时只滑动一格，并自动贴合wrapper，设置为true则变为free模式，slide会根据惯性滑动且不会贴合。
					loop: false,//是否可循环
					onTab: function(swiper) {
						var n = busswiper.clickedIndex;
					}
				});
				busswiper.slides.each(function(busindex, val) {
					var busele = $(this);
					busele.on("click", function() {
						setBusCurrentSlide(busele, busindex);
						busswiper2.slideTo(busindex, 500, false);
						//mySwiper.initialSlide=busindex;
					});
				});

				var busswiper2 = new Swiper('.busswiper2', {
					//freeModeSticky  设置为true 滑动会自动贴合  
					direction: 'horizontal',//Slides的滑动方向，可设置水平(horizontal)或垂直(vertical)。
					loop: false,
					resistanceRatio : 0,
//					effect : 'fade',//淡入
					//effect : 'cube',//方块
					//effect : 'coverflow',//3D流
//					effect : 'flip',//3D翻转
					autoHeight: true,//自动高度。设置为true时，wrapper和container会随着当前slide的高度而发生变化。
					onSlideChangeEnd: function(swiper) {  //回调函数，swiper从一个slide过渡到另一个slide结束时执行。
						var n = swiper.activeIndex;
						setBusCurrentSlide($(".busswiper .swiper-slide").eq(n), n);
						busswiper.slideTo(n, 500, false);
					}
				});
			
	  //海岸动态选项卡
	  function setCurrentSlide(ele, index) {
					$(".swiper1 .swiper-slide").removeClass("haiandynamicselected");
					ele.addClass("haiandynamicselected");
				}

				var swiper1 = new Swiper('.swiper1', {
					slidesPerView: 5.5,
					resistanceRatio : 0,
					paginationClickable: true,//此参数设置为true时，点击分页器的指示点分页器会控制Swiper切换。
					
					freeMode: true,//默认为false，普通模式：slide滑动时只滑动一格，并自动贴合wrapper，设置为true则变为free模式，slide会根据惯性滑动且不会贴合。
					loop: false,//是否可循环
					onTab: function(swiper) {
						var n = swiper1.clickedIndex;
					}
				});
				swiper1.slides.each(function(index, val) {
					var ele = $(this);
					ele.on("click", function() {
						setCurrentSlide(ele, index);
						swiper2.slideTo(index, 500, false);
						//mySwiper.initialSlide=index;
					});
				});

				var swiper2 = new Swiper('.swiper2', {
					//freeModeSticky  设置为true 滑动会自动贴合  
					direction: 'horizontal',//Slides的滑动方向，可设置水平(horizontal)或垂直(vertical)。
					loop: false,
					resistanceRatio : 0,
//					effect : 'fade',//淡入
					//effect : 'cube',//方块
					//effect : 'coverflow',//3D流
//					effect : 'flip',//3D翻转
					autoHeight: true,//自动高度。设置为true时，wrapper和container会随着当前slide的高度而发生变化。
					onSlideChangeEnd: function(swiper) {  //回调函数，swiper从一个slide过渡到另一个slide结束时执行。
						var n = swiper.activeIndex;
						setCurrentSlide($(".swiper1 .swiper-slide").eq(n), n);
						swiper1.slideTo(n, 500, false);
					}
				});
				
	  //四块交互
	  $(".fourblank li").on("touchstart",function(){
	  		$(this).siblings().find('p').css({opacity: '0'});
	  		$(this).find('p').css({opacity: '1'});
	  });
		//十二格交互
		$(".navlinkbox li").on("touchstart",function(){
	  		$(this).addClass('navlinkselected');
	  });
		$(".navlinkbox li").on("touchend",function(){
	  		$(this).removeClass('navlinkselected');
	  });
	  //空间设计点击切换
	  $(".bottomshadowcontent dl dt").on("touchstart",function(){
	  		var dtindex=$(".bottomshadowcontent dl dt").index(this);
	  		$(this).addClass('shadowcontentsecond').siblings().removeClass('shadowcontentsecond');
	  		$(this).parent().parent().children('article').eq(dtindex).show().siblings('article').hide();
//	  		alert(dtindex);
	  });
	  $(".changetxtbtnbox button").on("touchstart",function(){
	  		var changeindex = 0 ;
	  		$(this).parent().parent().find()
	  });
	  //为什么选择海岸
	  $(function(){
			var index=0;
		    var max=$(".fourservicebox dt").length-1;
		    $(".fourservicebox dt").on("touchstart",function(){
		    	var fourrserv=$(".fourservicebox dt").index(this);
		    	$(".fourservicebox dd").eq(fourrserv).removeClass('disnone').siblings('dd').addClass('disnone');
		    });
		   /*下一张*/
		   
	  });
}

				