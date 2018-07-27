<?php 
require_once template('head_haian');
echo <<<EOT
-->
<!-- 侧边导航开始 -->
<div class="besidenavbox">
    <dl class="besideyiji">
<!--
EOT;

   foreach($nav_list2[181] as $val2){
echo <<<EOT
-->
    <dt><a href="{$val2['url']}" target="_blank">
<!--
EOT;
	if ($val2['name'] == '特色小镇设计'){
echo <<<EOT
-->		
	特色小镇
<!--
EOT;
	}else   if ($val2['name'] == '田园综合体设计'){
echo <<<EOT
-->		
	田园综合体
<!--
EOT;
	}else   if ($val2['name'] == '乡村振兴设计'){
echo <<<EOT
-->		
	 乡村振兴
<!--
EOT;
	}else   if ($val2['name'] == '办公空间设计'){
echo <<<EOT
-->		
	 办公空间
<!--
EOT;
	}else{

echo <<<EOT
-->

    {$val2['name']}
    </a></dt>
<!--
EOT;
		}
    }
echo <<<EOT
-->

    </dl>
    <a>
    <div class="besideturntop">
        <em>TOP</em>
        <span></span>
        <div class="turntopbgbox">
            
        </div>
    </div>
    </a>
</div>
<!-- 侧边导航结束 -->
	<div class="met-index-news met-index-body" style="padding-bottom:50px;padding-top:35px"> 
		<div class="container"> 
			<div class="row">
<!--
EOT;
$productsfivec=tmpcentarr($lang_productsfivec);
foreach($nav_list2[181] as $key=>$val){ 
echo <<<EOT
-->  
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 single-blog-post"  data-plugin="appear" data-animate="slide-bottom" data-repeat="false" style="width:25%;margin-bottom:20px">
					<div class="img-holder" style="border:1px solid #fff;background-color:#ffffff;box-shadow: 0 1px 1px rgba(0,0,0,.05);overflow:hidden">
					<a href="{$val[url]}" target="_blank">
					
<!--
EOT;
	if ($val['columnimg'] == ''){
echo <<<EOT
-->					
	<img class="cover-image cover-image0" 	src="../upload/201711/1511856852.jpg"
	 style="height:194.23px;width:305px"></a>
<!--
EOT;
	}else  {
echo <<<EOT
-->		
	<img class="cover-image cover-image0" 	src="{$val[columnimg]}"
	 style="height:194.23px;width:305px"></a>
<!--
EOT;
	}
echo <<<EOT
-->	

						
						 <h4 style="padding: 10px;margin-bottom: -1px;border-bottom: 1px solid #E0E0E0;transition: all 0.6s cubic-bezier(0.215,0.61,0.355,1) 0s;"><a href="{$val[url]}" title="{$val[name]}" target="_blank" style="color:#464646">{$val[name]}</a></h4>
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
<!--
EOT;
require_once template('foot');
?>