<!--<?php
$sideok=$sidebar!=''&&$sidebar!='<ul class="list-none navnow"></ul>'?1:0;
echo <<<EOT
-->
<div class="sidebar">
<!--
EOT;
if(!$ContentsPage){
echo <<<EOT
-->
    <div class="sb_nav">
			<h3 class='title'>
<!--
EOT;
if($sideok){
echo <<<EOT
-->
			<p class="moresidebar">{$lang_colmnmore}</p>
<!--
EOT;
}
echo <<<EOT
-->
			{$class_list[$classnow][name]}
			</h3>
    </div>
<!--
EOT;
}
echo <<<EOT
-->
    <div class="sb_box">
<!--
EOT;
?>