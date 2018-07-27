<!--<?php
echo <<<EOT
-->
<!--
EOT;
$foot_menu=wap_foot_menu();
if(!$map){
if($wap_footertext != "" || $lang_wap_powered != 0){
echo <<<EOT
-->
<style type="text/css">
     .foot-text{background:{$footer_color}; color:{$footer_textcolor};}
     .foot-text a{ color:{$footer_textcolor};}
</style>
	<div class="foot-text">
		
<!--
EOT;
if($lang_wap_powered){
echo <<<EOT
-->

<!--
EOT;
}
echo <<<EOT
-->
	</div>
<!--
EOT;
}
}
echo <<<EOT
-->
<div id="footnum" data-value="{$lang_footnav_ok}"></div>
{$foot_menu}
</div>
<!--
EOT;
if($sideok&&!$ContentsPage){
echo <<<EOT
-->
<div class="sidebar_jsbox none"></div>
		<div id="sidebar" class="none" data-csnow="{$csnow}" data-class3="{$class3}">
			<h3 class="title">{$sidebar_title}</h3>
			<div id="wrapper_sidebar">
				<div id="scroller_sidebar">{$sidebar}</div>
			</div>
		</div>
<!--
EOT;
}
echo <<<EOT
-->
<script src="{$img_url}js/fun.inc.js" type="text/javascript"></script>
<script>
var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?10892469efad3748c179d76426107595"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })(); </script> 
<script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=11259731"></script>

{$met_stat_js}
</body>
</html>
<!--
EOT;
?>-->