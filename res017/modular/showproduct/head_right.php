<?php
echo <<<EOT
-->
				<p class="description">{$product[description]}</p>
<!--
EOT;
if(count($product_paralist)){
echo <<<EOT
-->	
				<div class="para">
					<div class="row">
<!--
EOT;
foreach($product_paralist as $key=>$val){
echo <<<EOT
-->						
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							{$val[name]} : {$product[$val[para]]}
						</div>
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
				<div class="tools">{$lang_sharecode}</div>
<!--
EOT;
?>