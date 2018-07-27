<!--<?php
if($mbpagelist){
    //无刷新翻页获取数据
    require_once template('modular/news/ajax_'.$lang_news_listtype);
}else{
    $bannernone  =$lang_news_listtype<3?$lang_news_headlines:'';
    $sidebarnone = 1;
    require_once template('head');
    $type3=$lang_news_listtype==3?'type-3':'';
    $scale=$lang_news_listtype<3?$met_newsimg_y/$met_newsimg_x:.5;
echo <<<EOT
-->
<section class="met-news animsition {$type3}">
    <div class="container">
        <div class="row">
<!--
EOT;
$classNow=$class_list[$classnow][index_num];
if($classNow==2){
$service_column_res=listcolumnRes($lang_service_column_xs,$lang_service_column_sm,$lang_service_column_md,$lang_service_column_xlg);
echo <<<EOT
-->
<ul class="service_list {$service_column_res} clearfix">
<!--
EOT;
foreach ($nav_list2[$classnow] as $key=>$val) { 
echo <<<EOT
-->
<li class="service_item">
<a href="{$val[url]}" title="{$val[name]}" {$metblank}>
<img src="{$val[columnimg]}" alt="{$val[name]}">
<h4>{$val[name]}</h4>
<p>{$val[description]}</p>
</a>
</li>
<!--
EOT;
}
echo <<<EOT
-->
</ul>
<!--
EOT;
}else{
echo <<<EOT
-->
            <div class="col-md-9 met-news-body">
                <div class="row">
                    <div class="met-news-list">
<!--
EOT;
    if($lang_news_listtype<3 && $lang_news_headlines){
        //头条
        require_once template('modular/news/headlines');
    }
echo <<<EOT
-->
                        <ul class="met-page-ajax" data-scale='{$scale}'>
<!--
EOT;
    require_once template('modular/news/ajax_'.$lang_news_listtype);
echo <<<EOT
-->
                        </ul>
<!--
EOT;
    //分页
    $pagetxt = $lang_news_moretxt;
    require_once template('modular/page');
echo <<<EOT
-->
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
<!--
EOT;
}
echo <<<EOT
-->
        </div>
    </div>
</section>
<!--
EOT;
    require_once template('foot');
}
?>