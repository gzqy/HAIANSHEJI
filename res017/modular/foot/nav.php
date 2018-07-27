<?php

echo <<<EOT
-->
<div class="met-footnav text-center met-index-body">
    <div class="container">
		<div class="row mob-masonry">
<!--
EOT;
$i=0;
foreach($navfoot_list as $val){
$i++;
$sublist = $val['classtype']==1?$nav_list2[$val['id']]:($val['classtype']==2?$nav_list3[$val['id']]:'');
echo <<<EOT
-->
			<div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
			<a href="{$val[url]}" title="{$val[name]}" {$metblank}>
				<h4>{$val[name]}</h4>
				<ul>
<!--
EOT;
foreach($sublist as $sub){
echo <<<EOT
-->
					<li><a href="{$sub[url]}" {$sub[new_windows]} title="{$sub[name]}">{$sub[name]}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
				</ul>
				</a>
			</div>
<!--
EOT;
if($i>=4)break;
}

$col=count($navfoot_list)>0?'col-md-3':'col-md-12';

echo <<<EOT
-->
				<div class="{$col} col-ms-12 col-xs-12 info masonry-item">
				<h3 data-plugin="appear" data-animate="fade" data-repeat="false">
				{$lang_foot_info_name}</h3>
				<div class="clearfix">
				<p class="animation-delay-100" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_foot_info_location}</p>
				<p class="animation-delay-200" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_foot_info_postcode}</p>
				<p class="animation-delay-300" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_foot_info_tel}</p>
				<p class="animation-delay-400" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_foot_info_phone}</p>
				<p class="animation-delay-500" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_foot_info_fax}</p>
				<p class="animation-delay-600" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_foot_info_mail}</p>
				</div>
<!--
EOT;
require_once template('modular/foot/social');//社交元素
echo <<<EOT
-->
			</div>
	</div>
</div>
</div>
<!--
EOT;
?>