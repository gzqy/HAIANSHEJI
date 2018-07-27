<?php
if($lang_home_product_ok){

	$home_procolumn_res=listcolumnRes($lang_home_procolumn_xs,$lang_home_procolumn_sm,$lang_home_procolumn_md,$lang_home_procolumn_xlg);
	$scale=$met_productimg_y/$met_productimg_x;
	$home_procolumn_res=slickcolumnRes($lang_home_procolumn_xs,$lang_home_procolumn_sm,$lang_home_procolumn_md,$lang_home_procolumn_xlg);
echo <<<EOT
-->
	<div class="met-index-product met-index-body">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_home_product_title}</h3>
				<p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_product_subtitle}</p>
				<p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_product_desc}</p>
				<div class='invisible animation-delay-300' data-plugin="appear" data-animate="fadeInUp" data-repeat="false">
				<ul class="nav nav-tabs">


<!--
EOT;
	foreach($nav_list2[$product['id']] as $key=>$val){
echo <<<EOT
-->
				<li>
				<a href="{$val[url]}" title="{$val[name]}">{$val[name]}</a>
				</li>
<!--
EOT;
	}
echo <<<EOT
-->
				</ul>
				</div>
                  <div class="slider index_product animation-delay-400" id="product_list" data-show="{$home_procolumn_res}" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" >
<!--
EOT;
$i=1;
foreach($nav_list2[$product['id']] as $key=>$col){
$list=methtml_getarray($col['id'],$lang_home_product_type,'','',$lang_home_product_num,'','',1);
foreach($list as $key=>$val){
$val['imgurl']="{$thumb_src}dir={$val[imgurl]}&x={$val[img_x]}&y={$val[img_y]}";
$i++;
if($_M['url']['shop']){
$val['shopinfo'] = get_goods($val['id']);
$val['price_str_html'] = "<p class='margin-bottom-0 margin-top-5 red-600'>{$val['shopinfo']['price_str']}</p>";}
echo <<<EOT
-->
                   <div data-type="list_{$val[class2]}" >
                   <div class="widget widget-shadow">
                   <figure class="widget-header cover">
					<a href="{$val[url]}" title="{$val[title]}" {$metblank}>
					<div class="mask">
					</div>
                    <img class="img-responsive" alt="{$val[title]}" src="{$val['imgurl']}"/>
                    </a>
					</figure>
					<h4 class="widget-title">
					<a href="{$val[url]}" title="{$val[title]}" {$metblank}>{$val[title]}</a>
					<p>{$val[keywords]}</p>
					{$val['price_str_html']}
					</h4>
					</div>
                    </div>
<!--
EOT;
}
}
echo <<<EOT
-->

              <!-- End Example Lazy Loading -->
		</div>
		
		<a href="{$class_list[$product['id']][url]}" class="index_more"></a>
		<a href="{$class_list[$product['id']][url]}" class="more">{$lang_index_product_more}</a>
	</div>
</div>
<!--
EOT;
}
?>