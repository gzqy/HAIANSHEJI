<?php
$paddingb=count($displaylist)?'slick-dotted':'';
echo <<<EOT
-->
<div class="met-showproduct-head">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class='met-showproduct-list text-center {$paddingb}' id="showpro-gallery">
						<div class='slick-slide lg-item-box' data-src="{$product[imgurl]}" data-exthumbimage="{$thumb_src}dir={$product[imgurl]}&x={$met_productdetail_x}&y={$met_productdetail_y}">
                            <span>
                                <img src="{$thumb_src}dir={$product[imgurl]}&x={$met_productdetail_x}&y={$met_productdetail_y}" class="img-responsive" alt="{$product[title]}" />
                            </span>
                        </div>
<!--
EOT;
foreach($displaylist as $key=>$val){
    $src='data-lazy';
    $exthumbimage="{$thumb_src}dir={$val[imgurl]}&x=60&y=60";
    if($key==0){
        $src='src';
        $exthumbimage="{$thumb_src}dir={$val[imgurl]}&x={$met_productdetail_x}&y={$met_productdetail_y}";
    }
echo <<<EOT
-->
                        <div class='slick-slide lg-item-box' data-src="{$val[imgurl]}" data-exthumbimage="{$exthumbimage}">
                        	<span>
                                <img {$src}="{$thumb_src}dir={$val[imgurl]}&x={$met_productdetail_x}&y={$met_productdetail_y}" class="img-responsive" alt="{$val[title]}" />
                            </span>
                        </div>
<!--
EOT;
}
echo <<<EOT
-->
				</div>
			</div>
			<div class="visible-xs-block visible-sm-block height-20"></div>
			<div class="col-md-5 product-intro">
				<h1>{$product[title]}</h1>
<!--
EOT;
if($_M['url']['shop']){
    require_once template('modular/shop/shop_option');
}else{
    require_once template('modular/showproduct/head_right');
}
echo <<<EOT
-->
			</div>
		</div>
	</div>
</div>
<!--
EOT;
?>