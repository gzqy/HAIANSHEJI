<?php
if($lang_home_pro_ok){
echo <<<EOT
-->
	<!-- 项目案例 -->
	<div class="projectcasebox">
		<div class="cortit">
			{$lang_home_pro_title}
			<hr>
			<p>{$lang_home_pro_desc}</p>
		</div>
		<dl class="projectcasetit">
<!--
EOT;
	if($nav_list2[$product['id']]){	
		foreach($nav_list2[$product['id']] as $key => $val){
echo <<<EOT
-->
		<dt><a href="{$val[url]}" title="{$val[name]}" target="_blank" data_id="{$val[id]}">{$val[name]}</a></dt>	
<!--
EOT;
		}
	}
	foreach($nav_list3[147] as $key => $val){
echo <<<EOT
-->
		<dt class="sy_column_3"><a href="{$val[url]}" title="{$val[name]}" target="_blank" data_pa="147" data_id="{$val[id]}">{$val[name]}</a></dt>
<!--
EOT;
	}
echo <<<EOT
-->
		</dl>
		<ul class="projectcasecont">
			
		</ul>
		<div class="linkcallbox">
			<a href="{$index_url}product/" target="_blank"><button></button></a>
		</div>
	</div>
	<li id="li_clone" style="display:none">
		<i><img></i>
		<div class="projectitltbox">
			<span></span>
			<a><button>查看详情</button></a>
		</div>
	</li>
<!--
EOT;
}
?>