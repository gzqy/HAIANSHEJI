<?php
if($lang_home_team_ok){

//让内容支持图片懒加载

echo <<<EOT
-->
    <div class="met-index-team met-index-body">
        <div class="team_bg">
        <img src="{$lang_team_bg}" class="bg_img">
        <div class="container ">
         <div class="slider" id="exampleResponsive">
<!--
EOT;
foreach ($nav_list3[$team['id']] as $key=>$val) {
echo <<<EOT
-->
            <div class="team_item"   >
            <a href="{$val['url']}"><img src="{$val['columnimg']}" alt=""></a>
            <div class="team_cont">
            <p class="team_title">{$val['name']}</p>
            <p class="team_keywords">{$val['keywords']}</p>
            <p class="team_desc">{$val['description']}</p>
            <a href="{$val['url']}" class="team_more">{$lang_team_more}</a>
            </div>
            </div>

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
?>

