<!--<?php
$methtml_head  = metlabel_html5();//基于Html5
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表）

$navnow = $classnow==10001?'class="navblue"':'';
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);
echo <<<EOT
-->
{$methtml_head}
<body>
<link rel="stylesheet" type="text/css" href="{$img_url}css/huis.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6_new.css"/>
<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 -->
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css"> 
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/huis.js"></script> 

 
<script src="{$img_url}src/js/jquery.swipebox.js"></script><!-- 点击幻灯片 -->   
<!--<div id="moquu_wxin" class="moquu_wxin"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="moquu_wxinh"></div></a></div>
<div id="moquu_wshare" class="moquu_wshare" ><a href="javascript:void(0)"><div class="moquu_wshareh";
}'></div></a></div>-->
                
 
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
  <div class="boxbig">
    <div class="cengrequired">
      <div class="requirelf"></div>
      <div class="requirergt">
        <div class="reqireda">
          <a class="reqiredacli" href="javascript:void(0);">发布需求</a><a href="javascript:void(0);">获取报价</a>
        </div>  
        {$metfeedback2}
        <p><span>*</span>我们将严格保护您的隐私，请放心填写，该服务不产
          生任何费用，有任何疑问请致电<span>400-879-1110</span></p>
        {$metfeedback1}
        <p style="display:none" class="form_dtwo"><span>*</span>我们将严格保护您的隐私，请放心填写，该服务不产
          生任何费用，有任何疑问请致电<span>400-879-1110</span></p>
      </div>
      <div class="requiretop">
        <img class="requireclose" src="{$img_url}openwin/grayclose.png" alt="关闭">
        <div class="closehr"></div>
        <div class="closetip"></div>
      </div>
    </div>
  </div>

<!-- 轮播部分 --> 
       
<div class="huisuobigpicbox">
    <div class="banner_area">
      <div class="banner_globel">
        <div class="bg_top bg_top_animate"></div>
        <div class="bg_center bg_center_animate"></div>
        <div class="bg_bottom bg_bottom_animate">咨询热线：400-879-1110</div>
      </div>
      <div class="banner_button bg_button_animate">
        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
          <div class="b_button"></div>
        </a>
      </div>
    </div>
</div>
<!-- 设计服务四大方向 -->
<div class="firstbox">
      <ul class="firstboxul">
        <li><img src="" alt="会所设计"  title="会所设计" /><span>-逼格更高-</span></li>
        <li><img src="" alt="会所设计"  title="会所设计" /><span>-创意更足-</span></li>
        <li><img src="" alt="会所设计"  title="会所设计" /><span>-空间更巧-</span></li>
        <li><img src="" alt="会所设计"  title="会所设计" /><span>-造价更省-</span></li>
      </ul>
</div>  
       <div class="f7clor" id="productsthree">
                    <div class="boxtitle"> 
                        <h1 class="title">北京海岸设计</h1>
                        <p class="msgOne">带您沉浸能讲故事，有深度，有记忆点的好设计，有时间您来吗</p>
                      </div>
                    <div class="thidboxcont">
                        <div class="thidlftbox" id="csepicbox1"> 
                          <a href="{$index_url}product/92-cn.html" target="_blank"> 
                            <img src="{$img_url}pic/hs_1.jpg" alt="会所设计"  title="会所设计" /> 
                          </a>  
			                  </div>
                        <div class="thidlftbox clsplay" id="csepicbox2">
                          <a href="{$index_url}product/325-cn.html" target="_blank">  
                            <img src="{$img_url}pic/hs_2.jpg" alt="会所设计"  title="会所设计" />
                          </a> 
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox3"> 
                          <a href="{$index_url}product/370-cn.html" target="_blank">
                            <img src="{$img_url}pic/hs_3.jpg" alt="会所设计"  title="会所设计" />
                          </a>   
                        </div> 
                         <div class="thidlftbox clsplay" id="csepicbox4"> 
                          <a href="{$index_url}product/486-cn.html" target="_blank">
                            <img src="{$img_url}pic/hs_4.jpg" alt="会所设计"  title="会所设计" />
                          </a>   
                        </div>
                         <div class="thidlftbox clsplay" id="csepicbox5"> 
                          <a href="{$index_url}product/324-cn.html" target="_blank">
                            <img src="{$img_url}pic/hs_5.jpg" alt="会所设计"  title="会所设计" />
                          </a>   
                        </div>
                    <div class="thidrgtbox">
                              <div class="thrgtup">
                                    <div class="thrgbtnbox" id="thlftnpre"><img src="{$img_url}img/btnlefse.png" alt="" /></div>
                                    <div class="updbebox" id="csetblebox1">
                                          <span>千色水会</span>
                                          <ul> 
                                            <li>项目地址：广西·玉林</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：2429㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox2">
                                          <span>内向足疗馆</span>
                                          <ul>
                                            
                                            <li>项目地址：黑龙江·哈尔滨</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1000㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                    <div class="updbebox clsplay" id="csetblebox3">
                                          <span>良子足浴</span>
                                          <ul>
                                            
                                            <li>项目地址：北京·通州</li>
                                            <li>项目类型：室内设计</li> 
                                            <li>使用面积：1428㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox4">
                                          <span>蜜儿派母婴体验店</span>
                                          <ul>
                                            
                                            <li>项目地址：河北·唐山</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：875㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox5">
                                          <span>檀邑溪谷旅游度假村</span>
                                          <ul>
                                            
                                            <li>项目地址：河北 ·张家口</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1714㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div> 
                                    <div class="thrgbtnbox" id="thlftnnext"><img src="{$img_url}img/btnrgtse.png" alt="会所设计"  title="会所设计" /></div>
                              </div>
                              <div class="thrgtdown" id="csetxtbox1">以归本主义为设计理念，围绕着砖、石、钢、木、玻璃、混凝土几个元素展开。在整体空间的打造上突破了以往的循规蹈矩，避免运用那些典型的浮夸元素，用务实的设计质疑了当下奢华的概念，为建筑创造了一种独特的设计语言。未加修饰的水泥与......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox2">内向足疗馆位于有“文化之都”美誉的哈尔滨，由郭准先生亲自主笔。空间设计以归本主义理念为出发点，充分利用当地的自然资源和特色，让东方元素加入现代简约，动感流畅的线条、简单色彩的修饰、自然材质的彰显流动的韵律与意境，让内向足疗馆......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox3">采用“森林”作为项目的设计主题，以原始的水泥、原木为材料，以追求自然、纯净的空间美感为目的。在布局上，将空间化整为零，营造开阔，大气的室内效果。大量运用装饰品的时尚化手法展现当代审美感知，将简素、知性的气质在陈设中充分体现出来......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox4">白色和黑色的结合为整个空间提供明快干净的氛围，从原木楼梯到绿植点缀，从不规则天花装饰到自然采光的处理，每一个细节都更加注重孕妈们的体验感受。在灯光的运用上也倾向于暖色调的设计，使整个体验店的视觉效果温暖而柔和，让每一进店的......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox5">从材质的选择上，整个度假村没有经过刻意雕琢，裸露的砖石、古朴的桌椅、粗犷的铁艺……不加一点矫饰，和谐地溶入周围无边无际的绿意中。原始的色彩,低调的装饰,流畅的动线,虽素面朝天,却能展现出,天然材料的本质美。部分空间采用或藏或露......</div>
                        </div>
                    </div>    
      </div> 
      <div class="bankline"></div>
    <div class="bakclor"id="productsone">
                  <div class="boxtitle"> 
                        <h1 class="title">想要座无虚席？</h1>
                        <p class="msgTwo">谁说只有饿了才进店消费，很多时候只是想进店看看“海岸设计”</p>
                      </div>
                    <div class='container'>
                        <div class="boxbtn" id="boxbtnl"><img src="{$img_url}img/btnleft.png" alt="会所设计"  title="会所设计" /></div>
                         <div class="cntarbox">
                              <ul id="mainlist">  
<!--
EOT;
foreach(methtml_getarray($lang_huisuop,'',hits,'','8','','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 	
                                <li>
                                  <a class='normal' href='{$val[url]}' target="_blank">
                                   <img src="{$val[imgurl]}" alt="会所设计"  title="会所设计" />
                                  </a>
                                  <div class='info'>
                                    <h3>{$val[title]}</h3>
                                    <p>{$val['desc']}</p>
                                  </div>
                                </li> 
<!--
EOT;
}
echo <<<EOT
-->                    
                              </ul> 
                              <ul id="swaplist"> 
                               
<!--
EOT;
foreach(methtml_getarray($lang_huisuop,'',time,'','8','','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
-->
                                <li>
                                  <a class='normal' href='{$val[url]}' target="_blank">
                                   <img src="{$val[imgurl]}" alt="会所设计"  title="会所设计" />
                                  </a>
                                  <div class='info'>
                                    <h3>{$val[title]}</h3>
                                    <p>{$val['desc']}</p>
                                  </div>
                                </li>                             
<!--
EOT;
}
echo <<<EOT
-->                       
                              </ul> 

                            </div>
                        <div class="boxbtn" id="boxbtnr"><img src="{$img_url}img/btnrgt.png" alt="" /></div>
                    </div> 
        </div> 
       <div class="fcclor" id="productstwo">            
                   <div class="boxtitle"> 
                        <h1 class="title">海岸会所设计</h1>
                        <p class="msgThr">只需6步流程，省去所有不必要的时间，让您尽快赚钱</p>
                      </div>
                    <ul> 
<!--
EOT;
$productstwott[1]['name']   = $lang_productstwo1t;
$productstwott[1]['description']   = $lang_productstwo1d;
$productstwott[1]['imgurls']   = $lang_top1_pic;
$productstwott[2]['name']   = $lang_productstwo2t;
$productstwott[2]['description']   = $lang_productstwo2d;
$productstwott[2]['imgurls']   = $lang_top2_pic;
$productstwott[3]['name']   = $lang_productstwo3t;
$productstwott[3]['description']   = $lang_productstwo3d;
$productstwott[3]['imgurls']   = $lang_top3_pic;
$productstwott[4]['name']   = $lang_productstwo4t;
$productstwott[4]['description']   = $lang_productstwo4d;
$productstwott[4]['imgurls']   = $lang_top4_pic;
$productstwott[5]['name']   = $lang_productstwo5t;
$productstwott[5]['description']   = $lang_productstwo5d;
$productstwott[5]['imgurls']   = $lang_top5_pic;
$productstwott[6]['name']   = $lang_productstwo6t;
$productstwott[6]['description']   = $lang_productstwo6d;
$productstwott[6]['imgurls']   = $lang_top6_pic;

foreach($productstwott as $key=>$valz){
echo <<<EOT
--> 
                        <li>
                            <div class="secdboxcont"><img src="{$valz[imgurls]}" alt="{$valz[name]}" /></div>
                            <span>{$valz[name]}</span>
                            <p>{$valz[description]}</p>
                        </li>
<!--
EOT;
}
echo <<<EOT
--> 
                    </ul>
                    <div class="sogen">{$lang_prod1}</div>
                    <div class="knowbtnbox"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                        <input type="button" value="立即预约" ></a>
                    </div>
      </div>
            <!-- </div> -->  
        <div class="bankline"></div>  
                <div class="f7clor" id="productssix">
                    <div class="boxtitle"> 
                      <h1 class="title">了解海岸</h1>
                      <p class="msgfif">秉着对您负责的态度，留点空间，请让我们自报家门</p>
                    </div>
                    <div class="anconbox">
                    <div class="f7imgbox">
                            <img src="{$lang_productssix2}" id="haian1" alt="会所设计"  title="会所设计" />
                            <img src="{$lang_productssix5}" id="haian2" alt="会所设计"  title="会所设计" />
                            <img src="{$lang_productssix8}" id="haian3" alt="会所设计"  title="会所设计" />
                        </div>
                    <div class="f7txtsbox"> 
<!--
EOT;
$towbox[1]['name']   = $lang_productssix3; 
$towbox[1]['description']   = $lang_productssix4;

$towbox[2]['name']   = $lang_productssix6; 
$towbox[2]['description']   = $lang_productssix7;

$towbox[3]['name']   = $lang_productssix9; 
$towbox[3]['description']   = $lang_productssix10; 
 
foreach($towbox as $key=>$valz){
echo <<<EOT
-->                  
                       
                            <div class="f7txtline">
                                <div class="mo1">{$valz[name]}</div>
                                <div class="mo2 clsplay">
                                     {$valz[description]}
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
      <div class="blackbgp" id="productsfour">
                    <div class="boxtitle"> 
                      <h1 class="titleThr">从1999年到现在</h1>
                      <p class="msgThr">19年口碑企业，众多品牌的一致首选</p>
                    </div>
                    <div class="biaodanbox">
                          <div class="customerlogobox">
                                <ul class="customerlist">  
                                  <li><img src="{$img_url}pic/coffeecust1.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust2.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust3.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust4.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust5.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust6.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust7.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust8.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust9.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust10.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust11.png" alt="会所设计"  title="会所设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust12.png" alt="会所设计"  title="会所设计" /></li>  
                                </ul>
                           </div>
                    </div> <!-- fordown.png -->
                    <div class="customslogn">19年来，平均每一个省份，就有<span>20</span>个海岸设计案例</div>
        </div>
<!-- =======================================================海岸会所设计案例================================================================= -->
<div class="fcfclor" id="productsfive">
                    <div class="boxtitle"> 
                        <h1 class="title">会所设计案例</h1>
                        <p class="msgfour">更多人喜欢的设计 —— “海岸设计”</p>
                      </div>
                     <div class="nowjingdian">
                                          <div class="nowjd_title"><div class="nowjd_titlergt"><img src="{$img_url}img/changeyipi.png" />换一批</div></div>
                          <div class="main_lft">
                                      
                                          <div class="xxcenter" id="xxc1">
                                            <ul>

<!--
EOT;
  $huisuop=tmpcentarr($lang_huisuop);
foreach(methtml_getarray($lang_huisuop,'','','',8,'','','','16') as $key=>$val){

$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 
                                            <a href="{$val[url]}" target="_blank"><li style="background-image:url({$val[imgurl]}); ">
                                                          <div class="txt">
                                                                      <h3>{$val[title]}</h3>
                                                                      <p>{$val['desc']}</p>
                                                          </div>
                                            </li></a>
<!--
EOT;
}
echo <<<EOT
-->
                                             
                                              </ul>
                                           </div>
                                           <div class="xxcenter" id="xxc2">
                                            <ul>

<!--
EOT;
  $huisuop=tmpcentarr($lang_huisuop);
foreach(methtml_getarray($lang_huisuop,'',time,'',8,'','','','16') as $key=>$val){

$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 
 
                                            <a href="{$val[url]}" target="_blank"><li style="background-image:url({$val[imgurl]}); ">
                                                          <div class="txt">
                                                                      <h3>{$val[title]}</h3>
                                                                      <p>{$val['desc']}</p>
                                                          </div>
                                            </li>
<!--
EOT;
}
echo <<<EOT
-->
                                              </ul>
                                           </div>
                                           <div class="xxcenter" id="xxc3">
                                            <ul>
<!--
EOT;
  $huisuop=tmpcentarr($lang_huisuop);
foreach(methtml_getarray($lang_huisuop,'',hits,'',8,'','','','16') as $key=>$val){  
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 
                                            <a href="{$val[url]}" target="_blank"><li style="background-image:url({$val[imgurl]}); ">
                                                          <div class="txt">
                                                                      <h3>{$val[title]}</h3>
                                                                      <p>{$val['desc']}</p>
                                                          </div>
                                            </li></a>
<!--
EOT;
} 
echo <<<EOT
-->

                                             
                                              </ul>
                                           </div>
                            </div>
                            <div class="knowbtnbox">
                            <a href="{$index_url}product/list-170-cn.html" target="_blank">
                                <input type="button"  value="更多会所设计案例" >
                                </a>
                            </div>
          </div>   
<!--
EOT;
require_once template('foot_huis'); 
?>