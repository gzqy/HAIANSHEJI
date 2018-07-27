<?php
if($lang_haian_top_ok){
if($lang_news_list1_open=1){

$tem_news[0]           = tmpcentarr($lang_home_news_id);

$tem_news[0]['name']   = $class_list[2]['name'];

$tem_news[0]['url']    = $class_list[2]['url'];

$tem_news[0]['list']   = methtml_getarray($lang_home_news_id,$lang_home_news_type,'','',$lang_haian_news_num);
}

if($lang_news_list2_open=1){

$tem_news[1]           = tmpcentarr($lang_home_design_id);

$tem_news[1]['name']   = $class_list[117]['name'];

$tem_news[1]['url']    = $class_list[117]['url'];

$tem_news[1]['list']   = methtml_getarray($lang_home_design_id,'','','',$lang_haian_news_num);

}

if($lang_news_list3_open=1){

$tem_news[2]           = tmpcentarr($lang_home_haianNews_id);

$tem_news[2]['name']   = $class_list[116]['name'];

$tem_news[2]['url']    = $class_list[116]['url'];

$tem_news[2]['list']   = methtml_getarray($lang_home_haianNews_id,'','','',$lang_haian_news_num);

}


echo <<<EOT
-->
 <div class="gdtitlinebox">
    <div class="titlinectn">
      <div class="titleimgbox"><img src="{$img_url}tianyuan/06.png" alt="更多案例详情"></div>
      <p class="titlep">海岸动态</p>
    </div>
  </div>
	<div class="met-index-news met-index-body" style="background-color: #fff !important">
		<div class="tem_inner">
			<!--<p class="neWeb_new_desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_news_subtitle}</p>-->
			<ol class="tem_index_news_tab">

<!--
EOT;
$i = 0;
foreach($tem_news as $key=>$val){
	$i++;
	$now = $i == 1?'class="flex-active"':'';
echo <<<EOT
-->
			<li {$now}>
				<h3>{$val[name]}</h3>
			</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ol>
			<div class="tem_index_news_slides">
				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<div class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
<!--
EOT;
$i = 0;
foreach($tem_news as $key=>$val){
	$i++;
	$none = $i>1?'met_none':'';
	
echo <<<EOT
-->
						<ul class="tem_index_news_list {$none}" style="float: left; display: block;">
<!--
EOT;
$i = 0;
foreach($val['list'] as $key=>$val2){
	$i++;
	$val2['imgurl']="{$thumb_src}dir=../{$val2['imgurl']}&x=160&y=115";
	$val2['description'] = utf8substr($val2['description'],0,56);
	$to = $i%2==0?'class="tem_even"':'';//判断是否为偶数
echo <<<EOT
-->
			<li>

				<dl {$to}>

					<dt><a href="{$val2[url]}" title="{$val2[title]}"  target="_blank"><img src="{$val2['imgurl']}" /></a></dt>

					<dd>

						<div class="tem_index_news_list_txt">

							<a href="{$val2[url]}" title="{$val2[title]}"  target="_blank">

							<h3>{$val2['title']}</h3>							

							<p>{$val2['description']}</p>

							</a>

						</div>

					</dd>

				</dl>

			</li>
<!--
EOT;
	}
echo <<<EOT
-->
			<li class="tem_index_more"><a href="{$val[url]}" title="浏览更多{$val[name]}" target="_blank">浏览更多{$val[name]}</a></li>
		</ul>	
	
<!--
EOT;
}
echo <<<EOT
-->
					</div>
				</div>
			<div class="met_clear"></div>
			</div>
		</div>
	</div>
<!--
EOT;
}
?>