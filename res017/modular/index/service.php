<?php
if($lang_home_service_ok){

$service_column_res=slickcolumnRes($lang_home_service_column_xs,$lang_home_service_column_sm,$lang_home_service_column_md,$lang_home_service_column_xlg);
echo <<<EOT
-->
	<div class="met-index-service met-index-body">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_home_service_title}</h3>
      <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_service_subtitle}</p>
			<p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_service_desc}</p>

                  <div class="slider invisible animation-delay-300" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" id="serviceSlick" data-show="{$service_column_res}">
<!--
EOT;

    foreach($nav_list2[$service['id']] as $key=>$val){
    $val[description] = utf8substr($val[description],0,50);
echo <<<EOT
-->
                    <div class="service_item">
<!--
EOT;
if($lang_home_service_link){
echo <<<EOT
-->
<a href="{$val[url]}" title="{$val[name]}">
<!--
EOT;
        }
if($lang_home_service_img_type){
if($val[columnimg]){
echo <<<EOT
-->
                      <img class="img-responsive" alt="{$val[name]}" src="{$val[columnimg]}"
                      />
<!--
EOT;
}
}else{
echo <<<EOT
-->
<span class="index_service_icon">
<i class="fa fa-{$val[namemark]}" aria-hidden="true" style="font-size:{$lang_home_service_font}px"></i>
</span>
<!--
EOT;
}
echo <<<EOT
-->
                      <h4>{$val[name]}</h4>
                      <p>{$val[description]}...</p>
<!--
EOT;
if($lang_home_service_link){
echo <<<EOT
-->
                    </a>
<!--
EOT;
        }
echo <<<EOT
-->
                    </div>
<!--
EOT;
        }
echo <<<EOT
-->
                  </div>





		</div>
	</div>
<!--
EOT;
}
?>