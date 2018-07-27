<?php
echo <<<EOT
-->
<div class="foot_info_icon">
<!--
EOT;
if($lang_foot_info_sinaok){
echo <<<EOT
-->
				<a href="{$lang_foot_info_sina}" rel="nofollow" target="_blank"><i class="fa fa-weibo "></i></a>

<!--
EOT;
}
if($lang_foot_info_qqok){
$qqurl = "http://crm2.qq.com/page/portalpage/wpa.php?uin={$lang_foot_info_qq}&aty=0&a=0&curl=&ty=1";
if($lang_foot_info_qqtype==1)$qqurl="http://wpa.qq.com/msgrd?v=3&uin={$lang_foot_info_qq}&site=qq&menu=yes";
echo <<<EOT
-->
				<a href="{$qqurl}" rel="nofollow" target="_blank">
					<i class="fa fa-qq"></i>
				</a>
<!--
EOT;
}
if($lang_foot_info_wxok){
echo <<<EOT
-->
				<a id="met-weixin"><i class="fa fa-weixin "></i></a>
				<div id="met-weixin-content" class="hide">
					<div class="text-center met-weixin-img"><img src="{$lang_foot_info_wx}" /></div>
				</div>
<!--
EOT;
}
if($lang_foot_info_twitterok){
echo <<<EOT
-->
				<a href="{$lang_foot_info_twitter}" rel="nofollow" target="_blank"><i class="icon fa-twitter"></i></a>
<!--
EOT;
}
if($lang_foot_info_googleok){
echo <<<EOT
-->
				<a href="{$lang_foot_info_google}" rel="nofollow" target="_blank"><i class="icon fa-google-plus"></i></a>
<!--
EOT;
}
if($lang_foot_info_facebookok){
echo <<<EOT
-->
				<a href="{$lang_foot_info_facebook}" rel="nofollow" target="_blank"><i class="icon fa-facebook-official"></i></a>
<!--
EOT;
}
if($lang_foot_info_emailok){
echo <<<EOT
-->
				<a href="mailto:{$lang_foot_info_email}" rel="nofollow"><i class="icon fa-envelope"></i></a>
<!--
EOT;
}
echo <<<EOT
-->
</div>
<!--
EOT;
?>