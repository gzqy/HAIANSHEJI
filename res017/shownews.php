<?php
$bannernone  = 1;
$sidebarnone = 1;
require_once template('head');
//让内容支持图片懒加载
$news['content'] = $metcompress->lazyload($news['content']);
if(!$news['issue'])$news['issue'] = $met_webname;
echo <<<EOT
-->
<section class="met-shownews animsition">
	<div class="container">
		<div class="row">
			<div class="col-md-9 met-shownews-body">
				<div class="row">
					<div class="met-shownews-header">
						<h1>{$news[title]}</h1>
						<div class="info">
							<span>
								{$news['updatetime']}
							</span>
							<span>
								{$news['issue']}
							</span>
							<span>
								<i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{$news['hits']}
							</span>
						</div>
					</div>
					<div class="met-editor lazyload clearfix">
						{$news[content]}
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
require_once template('modular/news/bar'); 
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