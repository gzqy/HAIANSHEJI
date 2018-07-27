<?php
echo <<<EOT
-->
	<div class="content content-1">
		<div class="container">
			<div class="row">
				<div class="met-editor lazyload clearfix">
					{$product[content]}
				</div>
			</div>
		</div>
	</div>
<!--
EOT;
$i=1;
foreach($productTablist as $key=>$val){
	$i++;
echo <<<EOT
-->
	<div class="content content-{$i}" id="content-{$i}">
		<div class="container">
			<div class="row">
				<div class="met-editor lazyload clearfix">
					{$val[content]}
				</div>
			</div>
		</div>
	</div>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
$i++;
if(count($product_paralist)){
echo <<<EOT
-->
	<div class="content content-{$i}" id="content-{$i}">
		<div class="container">
			<ul class="blocks blocks-md-4 blocks-sm-3">
<!--
EOT;
foreach($product_paralist as $key=>$val){
echo <<<EOT
-->
				<li class="margin-bottom-15 blue-grey-500">
					{$val[name]} : {$product[$val[para]]}
				</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>
		</div>
	</div>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
?>