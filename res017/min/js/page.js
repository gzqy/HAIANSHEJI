$(document).ready(function() {
	/*翻页ajax加载*/
	if($(".met-page-ajax").length){
		if($(".met_pager a").length==1)$(".met_pager").addClass('hide');
		if($(".met-page-ajax-body").hasClass("visible-xs-block")){
			Breakpoints.get('xs').on({
				enter: function(){
					metpageajax();
				}
			});
		}else{
			metpageajax();
		}
	}
})
/*分页脚本*/
function metpageajax(){
	var pagebtn    	= $("#met-page-btn"),pageul = $(".met-page-ajax");
	window.pagemax 	= $(".met_pager a").length-1;
	window.page 	= pagebtn.data("page");
	if(window.pagemax <= window.page)pagebtn.addClass('hide');
	pagebtn.click(function(){
		var dom = $(this);
		if(!dom.hasClass("disabled")){
			page++;
			var l = Ladda.create(dom[0]);
				l.start();
			$.ajax({
				url: dom.data("url")+'&page='+page,
				type: 'POST',
				success: function(data) {
					pageul.append(data);
					pagespecial();/*特殊处理*/
					l.stop();
					if(pagemax <= page)dom.addClass('hide');
				}
			});
		}
	});
}
/*无刷新分页获取到数据追加到页面后，可以在此方法继续处理*/
function pagespecial(){
	/*图片高度预设*/
	imageSize(".met-page-ajax","li.page"+page+" [data-original]");
	// 图片延迟加载
    $(".met-page-ajax li.page"+page+" [data-original]").lazyload();
	$('html,body').stop().animate({scrollTop:$(window).scrollTop()+1},10);
	//产品模块瀑布流
	if($('#met-grid').length) MetAnimOnScroll();
}