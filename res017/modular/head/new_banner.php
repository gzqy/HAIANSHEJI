<?php
if($index){
echo <<<EOT
-->
<div class="wrapper">
<section id="tz-slider-wrapper"  class="sliderwrapper clearfix ">
    <div class="container-fluid">
        <div class="row" id="slider">
            <div id="tz-slider" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="tz-module module  " id="Mod168">
                    <div class="module-inner">
                        <div class="module-ct">

                        <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:640px;">
                                  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;max-height:640px;height:640px;">
                                    <ul>	<!-- SLIDE  1-->
<!--
EOT;
if($lang_banner1_ok){
echo <<<EOT
-->  
                                                              	
<!--
EOT; 
}
if($lang_banner2_ok){
echo <<<EOT
--> 
                                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500"  data-saveperformance="off" >
                                            <!-- MAIN IMAGE -->
                                            <img src="{$lang_banner2_img}"  alt="02_bg"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption tp-fade"
                                                data-x="center" data-hoffset="0"
                                                data-y="0" 
                                                data-speed="300"
                                                data-start="700"
                                                data-easing="Power4.easeInOut"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-end="330"
                                    data-endspeed="300"
                                                style="z-index: 2;"><img src="{$img_url}haian-core/picture/banner01title.png" alt="">
                                            </div>

                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption pacifico1 skewfromleft tp-resizeme"
                                                data-x="center" data-hoffset="0"
                                                data-y="310" 
                                                data-speed="800"
                                                data-start="1500"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-end="330"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 2;">{$lang_banner2_desc}
                                            </div>
                                            
                                            <div class="tp-caption minidesc sfl tp-resizeme minefirstbanner minefirstban1btn"
                                                data-x="center" data-hoffset="-100"
                                                data-y="500" 
                                                data-speed="500"
                                                data-start="1200"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D"  target="_blank" style="color:#fff" class="show" title="在线咨询客服雨萱">马上咨询</a>
                                            </div>

                                            <div class="tp-caption minidesc sfl tp-resizeme minefirstbanner minefirstban2btn"
                                                data-x="center" data-hoffset="110"
                                                data-y="500" 
                                                data-speed="500"
                                                data-start="1200"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a style="color: #fff;" href="javascript:;" onclick="jQuery('.boxbig').show()" class="show" title="">立即预约</a>
                                            </div>
                                        </li>                                   
                                    	
<!--
EOT;
}
 if($lang_banner3_ok){
echo <<<EOT
-->
                                        <!-- SLIDE  3-->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                                            <!-- MAIN IMAGE -->
                                            <img src="{$lang_banner3_img}"  alt="02_bg"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption tp-fade"
                                                data-x="center" data-hoffset="0"
                                                data-y="0" 
                                                data-speed="800"
                                                data-start="700"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-end="330"
                                                data-endspeed="300"
                                                data-endeasing="Power4.easeIn"
                                                style="z-index: 2;"><img src="{$img_url}haian-core/picture/banner02title1.png" alt="">
                                            </div>

                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption new_title skewfromleftshort tp-resizeme"
                                                data-x="center" data-hoffset="0"
                                                data-y="260" 
                                                data-speed="800"
                                                data-start="1500"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 2;color:#fff"> {$lang_banner3_desc}
                                            </div>

                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption big_title sfr tp-resizeme minesecondbanbtn"
                                                data-x="center" data-hoffset="0"
                                                data-y="440" 
                                                data-speed="800"
                                                data-start="1700"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 2;"><a href="javascript:;" onclick="jQuery('.boxbig').show()"  style="color: #fff;" class="show" title=""><img src="{$img_url}haian-core/picture/banner2btn.png" alt=""></a>
                                            </div>
                                        </li>
                                        
<!--
EOT;
}
 if($lang_banner4_ok){
echo <<<EOT
-->

                                        <!-- SLIDE  2-->
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                                            <!-- MAIN IMAGE -->
                                            <img src="{$lang_banner4_img}"  alt="03_bg"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption tp-fade"
                                                data-x="center" data-hoffset="0"
                                                data-y="160"
                                                data-speed="800"
                                                data-start="700"
                                                data-easing="Power4.easeOut"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                data-endeasing="Power4.easeIn"
                                                style="z-index: 2;"><img src="{$img_url}haian-core/picture/banner03title1.png" alt="">
                                            </div>

                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption new_title skewfromleftshort tp-resizeme"
                                                data-x="center" data-hoffset="0"
                                                data-y="303" 
                                                data-speed="800"
                                                data-start="1500"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="300"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 2;">{$lang_banner4_desc}
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption skewfromright tp-resizeme bannerbtn03"
                                                data-x="center" data-hoffset="0"
                                                data-y="500" 
                                                data-speed="800"
                                                data-start="0"
                                                data-easing="Power4.easeOut"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-elementdelay="0.1"
                                                data-endelementdelay="0.1"
                                                data-endspeed="100"
                                                data-endeasing="Power1.easeIn"
                                                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="javascript:;" onclick="jQuery('.boxbig').show()"  class="show" title="">立即预约</a>
                                            </div>
                                        </li>
                                    
<!--
EOT;
}
echo <<<EOT
-->
                                    </ul>
                                    <div class="tp-bannertimer"></div>	
                                </div>
                        </div>
			
	              </div>
		     </div>
		</div>
	  </div>
	</div>
</section>
</div>
<!--
EOT;
}else if(!$index){
    $h=$id?'h2':'h1';
echo <<<EOT
-->
<div class="met-banner-ny vertical-align text-center" style="background-color:{$lang_page_top_bgcolor};">
<!--
EOT;
if($lang_banner_text_ok){
echo <<<EOT
-->
                            <{$h} class="vertical-align-middle" style="color:{$lang_page_top_hcolor};">{$class_list[$classnow][name]}</{$h}>
<!--
EOT;
}
echo <<<EOT
-->
</div>
<!--
EOT;
}
?>