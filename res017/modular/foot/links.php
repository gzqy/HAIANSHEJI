<?php
echo <<<EOT
-->
<div class="met-links text-center">
    <div class="container">
		<ol class="breadcrumb">
			<li>{$lang_foot_links_title}</li>
<!--
EOT;
if($lang_link_text_ok){foreach($link_text as $val){
echo <<<EOT
-->
			<li><a href="{$val[weburl]}" title="{$val[info]}" target="_blank">{$val[webname]}</a></li>
<!--
EOT;
}}else{foreach($link_img as $val){
echo <<<EOT
-->
<li><a href="{$val[weburl]}" title="{$val[info]}" target="_blank" class="link_img"><img src="{$val[weblogo]}"></a></li>
<!--
EOT;
}}
echo <<<EOT
-->
		</ol>
	</div>
</div>
<!--
EOT;
?>