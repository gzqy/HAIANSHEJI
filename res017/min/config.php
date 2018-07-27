<?php
require_once template('min/compress.class');
$tmppath=$metcompress->tmppath;
$tmpvendor="{$tmppath}min/static/vendor/";
$tmpwidget="{$tmppath}min/widget/";
$tmpjs="{$tmppath}min/js/";

//$config  内置UI
//$paths[] 自定义引用文件
$config = array(
	//表单验证
	'formvalidation'			=> true,
	//按钮加载状态
	'ladda'						=> true,
	//响应式表格
	'tablesaw'					=> true
);
//导航下拉菜单鼠标经过
$config['bootstrap_hover_dropdown'] = true;
//底部导航右侧微信弹框
$config['webuiPopover'] = true;//webui弹出
//底部语言切换国旗图标
$config['flag-icon'] = true;
//瀑布流
$config['masonry'] = true;
//瀑布流增强
$paths[] = "{$tmpwidget}masonry-extend/imagesloaded.js";
$paths[] = "{$tmpwidget}masonry-extend/classie.js";
$paths[] = "{$tmpwidget}masonry-extend/AnimOnScroll.js";
//商城模块支持
$paths[] = "{$tmpjs}shop.js";
$config['asscrollable'] = true;//滚轴
$config['bootstrap-touchspin'] = true;//商品数量调整
$config['alertify'] = true;//alert美化
//滑动插件
$paths[] = "{$tmpwidget}swiper/swiper-3.3.1.min.css";
$paths[] = "{$tmpwidget}swiper/swiper-3.3.1.jquery.min.js";
//图片懒加载
$paths[] = "{$tmpwidget}lazyload/jquery.lazyload.min.js";
//图片画廊
$paths[] = "{$tmpwidget}lightGallery/css/lightgallery.min.css";
$paths[] = "{$tmpwidget}lightGallery/js/lightgallery-all.min.js";
//等高
$paths[] = "{$tmpvendor}matchheight/jquery.matchHeight-min.js";
//slick
$paths[] = "{$tmpwidget}slick/slick.css";
$paths[] = "{$tmpwidget}slick/slick-theme.css";
$paths[] = "{$tmpwidget}slick/slick.min.js";
//表单验证
$paths[] = "{$tmpjs}form.js";
//招聘模块
$paths[] = "{$tmpjs}job.js";
//图片模块
$paths[] = "{$tmpjs}img.js";
//产品模块
$paths[] = "{$tmpjs}product.js";
//文章模块
$paths[] = "{$tmpjs}news.js";
//分页
$paths[] = "{$tmpjs}page.js";
//首页
//出现
$config['appear'] = true;
//分类筛选动画效果
$paths[] = "{$tmpvendor}isotope/isotope.pkgd.min.js";
$paths[] = "{$_M['url']['static']}js/components/filterable.min.js";
$paths[] = "{$tmpjs}index.js";
//公共
$paths[] = "{$tmpjs}editor.js";
$paths[] = "{$tmpjs}own.js";
$paths[] = "{$tmpjs}sys.js";//访问统计等系统支持
//样式
$paths[] = "{$tmppath}min/css/animate.css";
//样式
$paths[] = "{$tmppath}min/css/metinfo.css";
/*字体图标*/
$paths[] = "{$tmpvendor}7-stroke/7-stroke.min.css";

//UI注册
$metcompress->config = $config;
//缓存
// $metcompress->cache = false;
if($metcompress->cache){
	$metcompress->uiVersion[css]='?2017072101';
	$metcompress->uiVersion[js]='?2017072101';
}
//执行合并
$resui = $metcompress->getUi($paths);
?>