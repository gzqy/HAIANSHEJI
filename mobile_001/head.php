<!--<?php
require_once template('config');
$touch='$touch';
$autoplay='$autoplay';
$lazyloadimg='$lazyloadimg';
$scrollable='$scrollable';
echo <<<EOT
-->
{$methtml_head}
<link rel="stylesheet" type="text/css" href="{$img_url}css/default.css" />
<link rel="stylesheet" type="text/css" href="{$img_url}css/{$met_skin_css}" />

<!--矢量图标css begin-->
<link rel="stylesheet" href="{$img_url}awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{$weburly}public/ui/mobile/css/iconfont.css">
<!--矢量图标css end-->

<!--轮播皮肤css begin-->
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/slider/slider.css" />
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/slider/slider.default.css" /> 
<!--轮播皮肤css end-->

<!--面板皮肤css begin-->
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/panel/panel.css" />
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/panel/panel.default.css" />
<!--面板皮肤css begin-->

<!--内滚导航css begin-->
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/navigator/navigator.css" />
<!--内滚导航css end-->

<!--选项卡css begin-->
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/transitions.css" />
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/tabs/tabs.css" />
<link rel="stylesheet" type="text/css" href="{$img_url}gmu/css/widget/tabs/tabs.default.css" />
<!--选项卡css end-->

<!--核心组件js begin-->
<script type="text/javascript" src="{$img_url}gmu/js/zepto.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/extend/touch.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/extend/matchMedia.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/extend/event.ortchange.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/extend/parseTpl.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/core/gmu.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/core/event.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/core/widget.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/extend/iscroll.js"></script>

<!--面板相关 end-->
<script type="text/javascript" src="{$img_url}gmu/js/extend/throttle.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/extend/event.scrollStop.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/panel/panel.js"></script>
<!--面板相关js end-->

<!--轮播组件 begin-->
<script type="text/javascript" src="{$img_url}gmu/js/widget/slider/slider.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/slider/arrow.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/slider/dots.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/slider/$touch.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/slider/$autoplay.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/slider/$lazyloadimg.js"></script>
<!--轮播组件js end-->

<!--内滚导航js begin-->
<script type="text/javascript" src="{$img_url}gmu/js/extend/highlight.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/navigator/navigator.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/navigator/scrolltonext.js"></script>
<script type="text/javascript" src="{$img_url}gmu/js/widget/navigator/$scrollable.js"></script>
<!--内滚导航js end-->

<!--选项卡js begin-->
<script type="text/javascript" src="{$img_url}gmu/js/widget/tabs/tabs.js"></script>
<!--选项卡js end-->

<!--图片加载js begin-->
<script type="text/javascript" src="{$img_url}gmu/js/extend/imglazyload.js"></script>
<!--图片加载js end-->



 <link rel="stylesheet" type="text/css" href="{$img_url}css/mindex.css" />
 <script src="{$img_url}js/haianphone.js" type="text/javascript" charset="utf-8"></script>
 <link rel="stylesheet" type="text/css" href="{$img_url}css/swiper.min.css" />
 <script src="{$img_url}js/swiper.min.js" type="text/javascript" charset="utf-8"></script>



  
   


  


   
  





<!--
EOT;
if($map){
echo <<<EOT
-->
<!--百度地图js begin-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=fYI33qTijqASUAGSYS1gc3GD"></script>
<!--百度地图js end-->
<!--
EOT;
}
echo <<<EOT
-->
<script type="text/javascript">
var ks = {$lang_columnshowsize},
	columnshow={$lang_columnshow},
	classnow='{$classnow}',
	lang='{$lang}',
	fliptext1='{$lang_fliptext1}',
	fliptext2='{$lang_fliptext2}'
	,Empty='{$lang_Empty}'
	,member_err1='{$lang_js10}'
	,member_err2='{$lang_js8}'
	,member_err3='{$lang_js26}'
	,member_err4='{$lang_js7}'
	,falsh_y='{$met_flasharray[$classnow][wap_y]}'
	,promaximgY='{$lang_promaximgY}'
	,imgmaximgY='{$lang_imgmaximgY}'
	;
</script>
<style type="text/css">
body{ font-size:{$lang_wapfontsize}px!important;}
.flexslider li img{ height:{$met_flasharray[$classnow][wap_y]}px;}
.showproduct_slides img{ height:{$lang_promaximgY}px!important;}
.showimg_slides img{ height:{$lang_imgmaximgY}px!important;}
.dl-jqrun dt img,.dl-jqrun dt{ max-width:{$lang_imgXnum}px;}
</style>
</head>
<body>
	<div class="metcont" style="background:{$body_color};">
<!--
EOT;
if($ContentsPage){
if(!$weixin){
require_once template('mtop');
}
}else{
require_once template('top');
}
echo <<<EOT
-->
<!--
EOT;
?>