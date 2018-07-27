<!--<?php
if($mbpagelist){
//无刷新翻页获取数据
require_once template('modular/product/ajax_'.$lang_product_listtype);
}else{
$bordernone = 1;
$product_search = $lang_product_search;
require_once template('head_product');
$fluid = $lang_product_listtype>1?'-fluid':'';
$nospace=$lang_product_listtype==2?'no-space':'';
$scale=$met_productimg_y/$met_productimg_x;
echo <<<EOT
-->
<!-- 侧边导航开始 -->
<div class="besidenavbox">
    <dl class="besideyiji">
<!--
EOT;
    foreach($nav_list2[3] as $val2){
        if(count($nav_list3[$val2['id']])){
echo <<<EOT
-->
        <dt>
            <a href="{$val2['url']}" target="_self">{$val2['name']}<i></i></a>
            <ul>
<!--
EOT;
            foreach($nav_list3[$val2['id']] as $val3){
echo <<<EOT
-->            
                <a href="{$val3['url']}" target="_self"><li>{$val3['name']}</li></a>
<!--
EOT;
            }
echo <<<EOT
-->
            </ul>
        </dt>
<!--
EOT;
        }else{
echo <<<EOT
-->
    <dt><a href="{$val2['url']}" target="_self">{$val2['name']}</a></dt>
<!--
EOT;
        }
    }

echo <<<EOT
-->
    </dl>
    <div class="besideturntop">
        <em>TOP</em>
        <span></span>
        <div class="turntopbgbox">
            
        </div>
    </div>
</div>
<!-- 侧边导航结束 -->
<div class="met-product animsition type-{$lang_product_listtype}">
	<div class="container{$fluid}">
        <div class='row'>
            <ul class="{$pro_column_res}{$nospace} met-page-ajax met-grid" id="met-grid" data-scale='{$scale}'>
<!--
EOT;
require_once template('modular/product/ajax_'.$lang_product_listtype);
echo <<<EOT
-->
            </ul>

<!--
EOT;
if(!$product_list && $content && $search=='search'){
// 没有找到搜索结果的情况
echo <<<EOT
-->
            <div class='bg-white height-400 padding-top-50 text-center'>
                <h1 class="page-search-title">
                    {$lang_SearchInfo3} "{$content}" {$lang_SearchInfo4}
                </h1>
            </div>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
$pagetxt = $lang_product_moretxt;
require_once template('modular/page');
echo <<<EOT
-->
        </div>
	</div>
</div>
<!--
EOT;
require_once template('foot');
}
?>