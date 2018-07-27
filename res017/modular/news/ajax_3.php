<?php
foreach($news_list as $key=>$val){
	$original='data-original';
	$srcset='data-srcset';
	if($key<1){
		$original='src';
		$srcset='srcset';
	}
	$height=$key>0?" style='height:300px;'":'';
	if(!$val['issue']) $val['issue'] = $met_webname;
	$val['imgurl_xs'] = "{$thumb_src}dir={$val[imgurl]}&x=500";
echo <<<EOT
-->
					<div class="widget widget-article widget-shadow">
						<div class="widget-header">
							<a href="{$val[url]}" title="{$val[title]}" {$metblank}>
								<img class="cover-image" {$original}="{$val[imgurl]}" {$srcset}='{$val['imgurl_xs']} 400w,{$val[imgurl]}' sizes='(max-width:479px) 400px'{$height} alt="{$val[title]}">
							</a>
						</div>
						<div class="widget-body">
							<h4 class="widget-title">
								<a href="{$val[url]}" title="{$val[title]}" {$metblank}>{$val[title]}</a>
							</h4>
							<p class="widget-metas">
								{$val['updatetime']}
								<span>{$val['issue']}</span>
								<span><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{$val['hits']}</span>
							</p>
							<p class="margin-bottom-0">{$val['description']}...</p>
						</div>
					</div>
<!--
EOT;
}
?>