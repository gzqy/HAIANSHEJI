$(document).ready(function() {
	/*产品列表页*/
	if($('.met-product').length){
		/*图片高度预设*/
		imageSize('.met-product .met-page-ajax');
		//图片懒加载
		if($(".met-product [data-original]").length){
			var animonscroll_pro_open=1;
			$(".met-product [data-original]").lazyload({
				load:function(){
					//产品列表页瀑布流
					if(animonscroll_pro_open && $('#met-grid').length){
						MetAnimOnScroll();
						animonscroll_pro_open=0;
					}
				}
			});
		}
	}

	/*产品详情页产品轮播图*/
	var showpro_list='.met-showproduct-list',
		showpro_list_slide=showpro_list+' .slick-slide';
	if($(showpro_list_slide).length>1){
		var slickdots=showpro_list+' ul.slick-dots',
			slickdots_div=showpro_list+' ul.slick-dots div',
			slickdots_li=showpro_list+' ul.slick-dots li',
			showpro_index=0;
		//生成缩略图
		$(showpro_list).on('init', function(event, slick){
			var showpro_list_slide_true=showpro_list_slide+':not(.slick-cloned)';
			for (var i = 0; i < $(showpro_list_slide_true).length; i++) {
				var thumbsrc=$(showpro_list_slide_true+':eq('+i+')').data('exthumbimage'),
	    			thumbalt=$(showpro_list_slide_true+':eq('+i+') img').attr('alt'),
	    			showpro_thumb='<img src="'+thumbsrc+'" alt="'+thumbalt+'" />';
				$(slickdots_li).eq(i).html(showpro_thumb);
			}
			$(slickdots).wrapInner('<div></div>');
			$(slickdots_div).width($(slickdots_li).length*74-10);
		})
		//开始轮播
		$(showpro_list).slick({
	        dots: true,
	        speed: 500,
	        prevArrow:'<button type="button" class="slick-prev"><i class="icon pe-angle-left vertical-align-middle"></button>',
	        nextArrow:'<button type="button" class="slick-next"><i class="icon pe-angle-right vertical-align-middle"></i></button>',
		})
		$(showpro_list).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
			paginationScroll(nextSlide);
			showpro_index=nextSlide;
		});
		$(showpro_list).on('setPosition', function(event, slick) {
			$(showpro_list_slide+'.slick-active+.slick-slide img').each(function(){
				if($(this).attr('data-lazy')) $(this).attr({src:$(this).data('lazy')}).removeAttr('data-lazy').removeClass('slick-loading');
            })
		});
		if($('#showpro-gallery').length && deviceType=='p'){
			$(showpro_list).slick('slickSetOption','swipe',false);
		}
		$(window).resize(function() {
			paginationScroll(showpro_index);
		});
		//缩略图滚动
        function paginationScroll(index){
			var slickdots_w = $(slickdots).width(),
				slickdots_div_w = $(slickdots_div).width(),
				deviation = parseInt(index * 74- slickdots_w / 2 +32);
			if (slickdots_div_w > slickdots_w) {
				var translateX = deviation > 0 ? -deviation : 0;
				if (deviation + slickdots_w >= slickdots_div_w) translateX = -parseInt(slickdots_div_w - slickdots_w);
  				if($('html').hasClass('no-csstransitions')){
  					$(slickdots_div).stop().animate({left:translateX},500);// IE9兼容
  				}else{
  					$(slickdots_div).css({transform: 'translateX(' + translateX + 'px)'});
  				}
			}
		}
	}

	/*产品详情页标准模式*/
	if($('.met-showproduct.pagetype1').length){
		//产品画廊加载
		$('#showpro-gallery').galleryLoad();
		//选项卡点击切换触发图片延迟加载
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			var href = $(this).attr('href');
			$(href).find('img:eq(0)').trigger('scroll');
		})
		/*选项卡滚动条（移动端）*/
		navtabSwiper(".met-showproduct-navtabs");
		/*推荐产品*/
		var prohot='.product-hot .mob-masonry';
		if($(prohot).length){
			/*图片高度预设*/
			imageSize(prohot);
			//推荐产品图片懒加载
			var animonscroll_prohot_open=1;
			$(prohot+' img').lazyload({
				load:function () {
					Breakpoints.on('xs sm',{
						enter: function(){
							if(animonscroll_prohot_open){
								$(prohot).masonry({itemSelector: "li"});
								animonscroll_prohot_open=0;
							}
						}
					});
				}
			});
		}
	}

	/*产品详情页时尚模式*/
	var showprotype2='.met-showproduct.pagetype2';
	if($(showprotype2).length){
		window.navbar = $(showprotype2+' .navbar');
		var navbar_t = navbar.offset().top;
		$(window).scroll(function (){
			var st = $(this).scrollTop();
			//标题工具栏固定
			if(st>navbar_t){
				navbar.addClass('navbar-fixed-top animation-slide-top');
			}else{
				navbar.removeClass('navbar-fixed-top animation-slide-top');
			}
			//选项卡自动选中
			navbar.find('.navbar-right li a').each(function(){
				var topsize = pro_topsize($(this));
				//30为区域上下内边距，根据需要调整
				if(st>=(topsize-30)) pro_active($(this));
			});
		});
		//选项卡点击事件
		$(document).on('click', showprotype2+' .navbar .navbar-right li a', function(e) {
			e.preventDefault();
			var thisobj=$(this);
			$('html,body').animate({'scrollTop':pro_topsize($(this))},300,function () {
				pro_active(thisobj);
			});//页面滑动到指定位置
		})
		/*选项卡滚动条（移动端）*/
		$(showprotype2+' .navbar .navbar-toggle').one("click", function () {
            setTimeout(function(){
				navtabSwiper(".met-showproduct-navtabs");
			},0)
        });
	}
})
/*选中选项卡*/
function pro_active(dom){
	navbar.find('.navbar-right li').removeClass('active');
	dom.parent('li').addClass('active');
}
/*获取选项卡内容距离顶部的位置*/
function pro_topsize(dom){
	var oftop = $(dom.attr("href")).offset().top,topsize = oftop - 100;
	if(navbar.hasClass('navbar-fixed-top')){
		topsize = topsize + 50;
	}else{
		if(Breakpoints.is('xs')){
			topsize = topsize - navbar.find(".navbar-collapse-toolbar").height();
		}
	}
	if(topsize<0)topsize = 10;
	return topsize;
}
/*瀑布流配置*/
function MetAnimOnScroll(okno){
	new AnimOnScroll( document.getElementById( 'met-grid' ), {
		minDuration : 0.4,
		maxDuration : 0.7,
		viewportFactor : 0.2
	});
}