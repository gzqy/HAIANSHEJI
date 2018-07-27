/*
 * M['weburl'] 		//网站网址
 * M['lang']  		//网站语言
 * M['tem']  		//模板目录路径
 * M['classnow']  	//当前栏目ID
 * M['id']  		//当前页面ID
 * M['module']  	//当前页面所属模块
 * lazyloadbg       //延迟加载背景图片，base64：默认灰色
 * deviceType       //设备判断（p：PC,t：平板，m：手机）
*/
$(document).ready(function() {
    if(M['classnow']==10001){
        /*图片懒加载*/
        $(".met-index-body [data-original]").lazyload();
        /*产品列表*/
        if($(".met-index-product").length){
            //内滚导航条（移动端）
            navtabSwiper('.met-index-product .nav-tabs');
        }
        if($('.met-index-news ul.blocks-2').length) imageSize('.met-index-news ul.blocks-2');
    }
})
