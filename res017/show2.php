<!--<?php
$methtml_head  = metlabel_html5();//基于Html5
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表）

$navnow = $classnow==10001?'class="navblue"':'';
echo <<<EOT
-->
{$methtml_head}
<body>
<link rel="stylesheet" type="text/css" href="{$img_url}css/index.css"/>

<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 --> 
<script type="text/javascript" src="{$img_url}js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="{$img_url}js/index.js"></script> 

 
<script src="{$img_url}src/js/jquery.swipebox.js"></script><!-- 点击幻灯片 -->


 
   
   
<div id="moquu_wxin" class="moquu_wxin"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="moquu_wxinh"></div></a></div>
<div id="moquu_wshare" class="moquu_wshare" ><a href="javascript:void(0)"><div class="moquu_wshareh";
}'></div></a></div>
                
 
        <div class="faer_top" >
            <div class="fixednav">
                 <a href="{$index_url}" title="{$met_webname}"> 
					<img src="{$lang_more_log}" alt="{$met_webname}" style="margin:{$lang_LogoTop}px 0px 0px {$lang_LogoLeft}px;" title="{$met_webname}" />
				
                <ul class="nav">  
 
 
                     <li class="navblue" id="firstnav"><a href="#productsone">精品案例</a></li>
                     <li  id="secondnav"><a href="#productstwo">服务流程</a></li>
                     <li id="thirdnav"><a href="#productsthree">案例解析</a></li>
                     <li id="forthnav"><a href="#productsfour">服务品牌</a></li>
                     <li id="fifthnav"><a href="#productsfive">最新案例</a></li>
                     <li id="sixthnav"><a href="#productssix">了解海岸</a></li>
                     <li  id="seventhnav"><a href="#productsseven">提交需求</a></li>

        </ul>
                <div class="navphone">{$lang_topip8}</div>
            </div>
        </div> 

 <!-- 提交需求列表弹框 -->
        <div class="boxbig"><!-- 弹框 -->
              <div class="box1">
                  <a href="javascript:;" onclick="jQuery('.boxbig').hide()" class="close">×</a>
                  <!-- <p>18年不断积累，我们已经做到领先，值得您的青睐</p > -->
                    <div class="iptbox">
                          <em>10秒提交设计需求</em>
                          <span>海岸为您推荐最合适的设计师</span>
<!--
EOT;
require template('feed/feedback5'); 
$metfeedback1=metlabel_feedback5(166);
echo <<<EOT
-->
              {$metfeedback1}
                 
                          <p>*我们将严格保护您的隐私，请放心填写</p >
                    </div>
              </div>
        </div>

 
      
   
<!--
EOT;
?>