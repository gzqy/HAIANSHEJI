<?php
$paddingb=count($displaylist)?'slick-dotted':'';
echo <<<EOT
-->
	<div class='met-showproduct-list text-center {$paddingb}'>
			<div class='slick-slide' data-exthumbimage="{$product[imgurl]}">
                <span>
                    <img src="{$product[imgurl]}" class="img-responsive" alt="{$product[title]}" />
                </span>
            </div>
<!--
EOT;
foreach($displaylist as $key=>$val){
    $src='data-lazy';
    $exthumbimage="{$thumb_src}dir={$val[imgurl]}&x=60&y=60";
    if($key==0){
        $src='src';
        $exthumbimage=$val[imgurl];
    }
echo <<<EOT
-->
            <div class='slick-slide' data-exthumbimage="{$exthumbimage}">
            	<span>
                    <img {$src}="{$val[imgurl]}" class="img-responsive" alt="{$val[title]}" />
                </span>
            </div>
<!--
EOT;
}
echo <<<EOT
-->
	</div>
<!--
EOT;
?>