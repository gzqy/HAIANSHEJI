<?php
if($lang_home_news_ok){
$news=tmpcentarr($lang_home_news_id);
echo <<<EOT
-->
	<div class="met-index-news met-index-body">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_home_news_title}</h3>
			<p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_news_subtitle}</p>
			<p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_news_desc}</p>
			<ul class="blocks-2" data-scale='0.6'>
<!--
EOT;

	$list=methtml_getarray($lang_home_news_id,$lang_home_news_type,'','',$lang_home_news_num,'','',1);
	$i=0;
	foreach($list as $key=>$val){
		if(!$val['issue'])$val['issue'] = $met_webname;
		$val['imgurl'] = "{$thumb_src}dir={$val['imgurl']}&x=200&y=120";
		$val['description'] = utf8substr($val['description'],0,56);
		$i++;
		$animate=$i%2==0?'fadeInLeft':'fadeInRight';
echo <<<EOT
-->
				<li class="invisible animation-delay-300" data-plugin="appear" data-animate="{$animate}" data-repeat="false">
					<div class="media media-lg">
<!--
EOT;
if($lang_home_news_img){
echo <<<EOT
-->
						<div class="media-left">
							<a href="{$val[url]}" title="{$val[title]}" {$metblank}>
								<img class="media-object" data-original="{$val[imgurl]}" style='height:80px;' alt="{$val[title]}">
							</a>
						</div>
<!--
EOT;
}
echo <<<EOT
-->
						<div class="media-body">
							<h4 class="media-heading" style="margin-top:8px">
							<!-- <span class="news_time">{$val['updatetime']}</span> -->
								<a href="{$val[url]}" title="{$val[title]}" {$metblank} >
									{$val['title']}
								</a>
							</h4>
								<p class="des" style="margin-top:12px">{$val['description']}...</p>
								<p class="info">
								</p>
						</div>
					</div>
				</li>
<!--
EOT;
	}
echo <<<EOT
-->
			</ul>
			<a href="{$news['url']}"  class="more" title="{$news['name']}" {$metblank}></a>
		</div>
	</div>
<!--
EOT;
}
?>