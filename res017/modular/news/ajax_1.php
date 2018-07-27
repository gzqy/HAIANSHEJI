<?php
$i=0;
foreach($news_list as $key=>$val){
	$i++;
	$k=$news_headlines?$news_headlines_num:0;//从指定条数
	if($i>$k){
		if(!$val['issue'])$val['issue'] = $met_webname;
echo <<<EOT
-->
					<li>
						<h4>
							<a href="{$val[url]}" title="{$val[title]}" {$metblank}>
								{$val['title']}
							</a>
						</h4>
						<p class="des">{$val['description']}...</p>
						<p class="info">
							<span>{$val['updatetime']}</span>
							<span>{$val['issue']}</span>
							<span><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{$val['hits']}</span>
						</p>
					</li>
<!--
EOT;
	}
}
?>