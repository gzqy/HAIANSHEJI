<?php
$bannernone  = 1;
$sidebarnone = 1;
require_once template('head');
$imgshow=methtml_imgdisplay('img');
//让内容支持图片懒加载
$img['content'] = $metcompress->lazyload($img['content']);
if(!$img['issue'])$img['issue'] = $met_webname;
echo <<<EOT
-->
<section class="met-shownews animsition">
	<div class="container">
		<div class="row">
			<div class="col-md-9 met-shownews-body">
				<div class="row">
					<div class="met-shownews-header">
						<h1>{$img[title]}</h1>
						<div class="info">
							<span>
								{$img['updatetime']}
							</span>
							<span>
								{$img['issue']}
							</span>
							<span>
								<i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{$img['hits']}
							</span>
						</div>
					</div>
					<div class="met-editor lazyload clearfix">
<!--
EOT;
if($displaylist){
	foreach($displaylist as $key=>$val){
echo <<<EOT
-->
					<p class='text-center'>
						<img data-original="{$val[imgurl]}" alt='{$val[title]}'/>
					</p>
					<p class='text-center'>{$val[title]}</p>
<!--
EOT;
	}
}else{
echo <<<EOT
-->
					<p class='text-center'>
						<img data-original="{$img[imgurl]}" alt='{$img[title]}'/>
					</p>
					<p class='text-center'>{$img[title]}</p>
<!--
EOT;
}
echo <<<EOT
-->
						{$img[content]}
						<div class="center-block met_tools_code">{$lang_sharecode}</div>
					</div>
					<div class="met-shownews-footer">
<!--
EOT;
$previousdisabled = $nextinfo['url']=='#'?'disabled':'';
$nextdisabled = $preinfo['url']=='#'?'disabled':'';
echo <<<EOT
-->
						<ul class="pager pager-round">
							<li class="previous {$previousdisabled}">
								<a href="{$nextinfo[url]}" title="{$nextinfo[title]}">
									{$lang_preinfo}
									<span aria-hidden="true" class='hidden-xs'>：{$nextinfo[title]}</span> 
								</a>
							</li>
							<li class="next {$nextdisabled}">
								<a href="{$preinfo[url]}" title="{$preinfo[title]}">
									{$lang_nextinfo}
									<span aria-hidden="true" class='hidden-xs'>：{$preinfo[title]}</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
<!--
EOT;
require_once template('modular/img/bar');
echo <<<EOT
-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--
EOT;
require_once template('foot'); 
?>