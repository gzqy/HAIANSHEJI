<?php
echo <<<EOT
-->
<!--
EOT;
$i=0;
foreach($img_list as $key=>$val){
	$val[imgurls] = "{$thumb_src}dir={$val[imgurl]}&x={$met_imgs_x}&y={$met_imgs_y}";
	$val['page'] = $mbpagelist?'page'.$page:'';
	$original = 'data-original';
	if($i<4&&!$mbpagelist) $original = 'src';
	$i++;
echo <<<EOT
-->
<li class="widget {$val['page']}">
	<div class="cover overlay overlay-hover">
		<img class="cover-image overlay-scale" {$original}="{$val[imgurls]}" alt="{$val[title]}" style='height:300px;'/>
		<div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
			<div class="vertical-align-middle">
				<div class="widget-time widget-divider">
					<span>{$val['updatetime']}</span>
				</div>
				<h3 class="widget-title margin-bottom-20">{$val[title]}</h3>
<!--
EOT;
	if($lang_img_listlook_style==1){
echo <<<EOT
-->
				<button type="button" class="btn btn-outline btn-inverse met-img-showbtn" data-imglist="{$val[title]}*{$val[imgurl]}|{$val[displayimg]}">{$lang_img_listlook}</button>
<!--
EOT;
	}else{
echo <<<EOT
-->
				<a href='{$val[url]}' title='{$val[title]}' class="btn btn-outline btn-inverse" {$metblank}>{$lang_img_listlook}</a>
<!--
EOT;
	}
echo <<<EOT
-->
			</div>
		</div>
	</div>
</li>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
?>