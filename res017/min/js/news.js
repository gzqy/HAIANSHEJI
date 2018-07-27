$(document).ready(function() {
	/*文章列表页*/
    /*图片高度预设*/
    imageSize('.met-news .met-news-list [data-scale]');
    var news_original='.met-news .met-page-ajax [data-original]';
	if($(news_original).length){
        //图片预加载
		$(news_original).lazyload();
	}
    /*模式3*/
    if($('.news-headlines .slick-slide').length>1){
        $('.news-headlines').slick({
            autoplay:true,
            dots: true,
            autoplaySpeed: 4000,
            speed: 500,
            swipe:false,
            prevArrow:'<button type="button" class="slick-prev"><i class="icon pe-angle-left vertical-align-middle"></button>',
            nextArrow:'<button type="button" class="slick-next"><i class="icon pe-angle-right vertical-align-middle"></i></button>',
            responsive: [{
                breakpoint: 1200,
                settings: {
                    swipe:true
                }
            }]
        });
        $('.news-headlines').on('setPosition', function(event, slick) {
            $('.news-headlines .slick-active+.slick-slide img').each(function(){
                if($(this).attr('data-lazy')) $(this).attr({src:$(this).data('lazy'),srcset:$(this).data('srcset')}).removeAttr('data-lazy').removeAttr('data-srcset').removeClass('slick-loading');
            })
        });
    }
})