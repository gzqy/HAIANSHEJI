<?php
if($lang_home_about_ok){

//让内容支持图片懒加载
$about['description'] = $metcompress->lazyload($class_list[$about['id']]['description']);
$about['columnimg'] = $metcompress->lazyload($class_list[$about['id']]['columnimg']);
$about['url'] = $metcompress->lazyload($class_list[$about['id']]['url']);
echo <<<EOT
-->
	<div class="met-index-about met-index-body">
		<div class="container ">
        <div class="about_img col-sm-12 col-md-4 col-lg-4" data-animate="zoomIn"  data-plugin="appear" data-repeat="false">
        <img data-original="{$about['columnimg']}" /></div>
        <div class="about_cont col-sm-12 col-md-8 col-lg-8">
			<h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$lang_home_about_title}</h3>
            <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false" >{$lang_home_about_subtitle}</p>
			<p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">{$lang_home_about_desc}</p>
			<div class="met-editor no-gallery lazyload clearfix invisible animation-delay-300" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">
				{$about['description']}
				
			</div>
			<div>
	            <div style="width:148px;float:left;"><a href="{$about['url']}" class="more" data-animate="bounceIn"></a></div>
	           
	            <div class="demo" style="    margin-top: 50px;" >
			        <a href="javascript:;" onclick="jQuery('.boxbig').show()" style="color: #848484;" class="show" title=""><span>立即预约</span></a>
			        <b><a href="javascript:;" onclick="jQuery('.boxbig').show()" style="color: red;" class="show" title="">立即预约</a></b>
			    </div>


	           
            </div>
            </div>
		</div>
	</div>
<!--
EOT;
}
?>