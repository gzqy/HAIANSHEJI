$(document).ready(function() {
	if($('.met-img').length){
		//图片高度预设
		imageSize('.met-img .met-page-ajax');
		//图片懒加载
		$(".met-img [data-original]").lazyload();
	}
	if($(".met-img-showbtn").length){
		$(document).on('click',".met-img-showbtn",function(){
			var imglist = $(this).data("imglist"),
				dyarr = new Array(),
				arlt = imglist.split('|');
			$.each(arlt,function(name,value) {
				if(value!=''){
					var st = value.split('*'),key=name;
					dyarr[key] = new Array();
					dyarr[key]['src'] = st[1];
					dyarr[key]['thumb'] = st[1];
					dyarr[key]['subHtml'] = st[0];
				}
			})
			//点击进入画廊
			$(this).galleryLoad(dyarr);
		});
	}
})
