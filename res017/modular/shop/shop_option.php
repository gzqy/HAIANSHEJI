<?php
if($goods['original']){
	$goods['original_html'] = "<del>{$_M['word']['app_shop_original']}{$goods['original_str']}</del>";
}
$shopmax = $goods['stock'];
if($goods['stock_show']){
	$goods['stock_html'] = "{$_M['word']['app_shop_stock']} {$goods['stock']} {$_M['word']['app_shop_piece']}";
}
if($goods['purchase']){
	$goods['purchase_html'] = "<span class=\"badge badge-radius badge-default\">{$_M['word']['app_shop_purchase']} {$goods['purchase']} {$_M['word']['app_shop_piece']}</span></del>";
	$shopmax = $goods['purchase'];
}
echo <<<EOT
-->
<script>var stockjson = {$stockjson};</script>
			<div class="shop-product-intro grey-500">
				<div class="padding-20 bg-grey-100">
					<span id="price" class="red-600">{$goods['price_str']}</span>{$goods['original_html']}
				</div>
<!--
EOT;
foreach($goods['selectpara'] as $keyselect=>$valselect){
echo <<<EOT
-->	
						<div class="form-group margin-top-15">
							<label class="control-label font-weight-unset">{$valselect['name']}</label>
							<div class="selectpara-body">
<!--
EOT;
	$i = 0;
	foreach($valselect['value'] as $keyvalue=>$valvalue){
		$class = '';
		if($i == 0)$class = "btn-danger";
		$i++;
echo <<<EOT
-->	
								<a href="javascript:;" data-val="{$valvalue}" class="selectpara btn btn-squared btn-outline btn-default {$class} margin-right-10">{$valvalue}</a>
<!--
EOT;
	}
echo <<<EOT
-->
							</div>
						</div>
<!--
EOT;
}
echo <<<EOT
-->	
				<div class="form-group margin-top-15">
					<label class="control-label font-weight-unset">{$_M['word']['app_shop_number']}</label>
					<div class="width-150">
						<input type="text" class="form-control text-center" data-min="1" data-max="{$shopmax}" data-plugin="touchSpin" name="buynum" id="buynum" autocomplete="off" value="1">
					</div>
					<p>{$goods['stock_html']}{$goods['purchase_html']}</p>
				</div>
				<div class="form-group margin-top-30 purchase-btn">
					<a href="{$_M['url']['shop_tocart_now']}&pid={$goods['pid']}" class="btn btn-lg btn-squared btn-danger margin-right-20 product-buynow">{$_M['word']['app_shop_buyimmediately']}</a>
					<div class="visible-xs-block height-10"></div>
					<a href="{$_M['url']['shop_tocart']}&pid={$goods['pid']}" class="btn btn-lg btn-squared btn-primary product-tocart"><i class="icon fa-cart-plus font-size-20" aria-hidden="true"></i>{$_M['word']['app_shop_tocart']}</a>
				</div>
			</div>
<!--
EOT;
?>