<!--<?php
if($mbpagelist){
    //无刷新翻页获取数据
    require_once template('modular/img/ajax');
}else{
    $bannernone  = 1;
    $sidebarnone = 1;
    require_once template('head');
    $fluid = $lang_img_listtype==0?'-fluid':'';
    $nospace=$lang_img_listtype==0?'no-space':'';
    $scale=$met_img_y/$met_img_x;
echo <<<EOT
-->
<div class="met-img animsition">
    <div class="container{$fluid}">
        <div class="row">
            <ul class="{$img_column_res}{$nospace} met-page-ajax" data-scale='{$scale}'>
<!--
EOT;
    require_once template('modular/img/ajax');
echo <<<EOT
-->
            </ul>
<!--
EOT;
    $pagenorerresh = true;
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