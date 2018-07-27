<?php
if($index||$met_bannerpagetype){
	$bn = array('ok','img','link','title','titlecolor','desc','desccolor','position','btn_title');//字段
	//第一个为变量关键词
	//第二个参数为需要获取哪些字段
	//第三个参数为
	$banner = $metcompress->increase('banner',$bn,10);
}else{
	$banner = array();
	$i=0;
	foreach($met_flashimgall as $key=>$val){
		$banner[$i]['img'] = $val['img_path'];
		$banner[$i]['title'] = $val['img_title'];
		$banner[$i]['link'] = $val['img_link'];
		$i++;
	}
}
$bnum = count($banner);
if($bnum){
	if($index){
		$bannertype=$lang_bannertype?'fixedheight':'';
		$banner_height="{$met_flasharray[$classnow][y]}|{$lang_banner_height_sm}|{$lang_banner_height_xs}";
	}else{
		$bannertype=$lang_bannersubtype?'fixedheight':'';
		$banner_height="{$met_flasharray[$classnow][y]}|{$lang_bannersub_height_sm}|{$lang_bannersub_height_xs}";
	}
echo <<<EOT
-->
<div class="met-banner {$bannertype}" data-height='{$banner_height}'>
<!--
EOT;
	foreach($banner as $key=>$val){
		if($val[ok]||$met_flashimgall){
			$src=$key<1?'src':'data-lazy';
			$val['img_xs'] = "{$thumb_src}dir={$val[img]}&x=767";
echo <<<EOT
-->
		<div class="slick-slide">
<!--
EOT;
			if($val['link']){
echo <<<EOT
-->
			<a href="{$val[link]}" target="_blank" title="{$val[title]}" {$metblank}>
<!--
EOT;
			}
echo <<<EOT
-->
			<img class="cover-image" {$src}="{$val[img]}" srcset='{$val['img_xs']} 500w,{$val[img]}' sizes="(max-width: 767px) 500px" alt="{$val[title]}">
<!--
EOT;
			if($val['title']&&$index){
echo <<<EOT
-->
			<div class="banner-text p-{$val['position']}">
				<div class='container'>
					<div class='banner-text-con'>
						<div>
							<h3 class="animation-slide-top" data-animate="slide-top" style="color:{$val[titlecolor]}">{$val['title']}</h3>
							<p class="animation-slide-bottom animation-delay-300" style="color:{$val[desccolor]}">{$val['desc']}</p>
						</div>
					</div>
				</div>
            </div>
<!--
EOT;
			}
			if(!$index){
				$h=$id?'h2':'h1';
echo <<<EOT
-->
			<div class="banner-text p-5">
				<div class='container'>
					<div class='banner-text-con'>
						<div>
<!--
EOT;
if($lang_banner_text_ok){
echo <<<EOT
-->
							<{$h} style="color:{$lang_page_top_hcolor};">{$class_list[$classnow][name]}</{$h}>
<!--
EOT;
}
echo <<<EOT
-->
						</div>
					</div>
				</div>
			</div>
<!--
EOT;
			}
			if($val['link']){
echo <<<EOT
-->
			</a>
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
</div>
<!--
EOT;
}else if(!$index){
	$h=$id?'h2':'h1';
echo <<<EOT
-->
<div class="met-banner-ny vertical-align text-center" style="background-color:{$lang_page_top_bgcolor};">
<!--
EOT;
if($lang_banner_text_ok){
echo <<<EOT
-->
							<{$h} class="vertical-align-middle" style="color:{$lang_page_top_hcolor};">{$class_list[$classnow][name]}</{$h}>
<!--
EOT;
}
echo <<<EOT
-->
</div>
<!--
EOT;
}
?>