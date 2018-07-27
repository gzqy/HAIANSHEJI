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
<link rel="stylesheet" type="text/css" href="{$img_url}css/caf.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6_new.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css">
<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 --> 
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/caf.js"></script> 
<script src="{$img_url}src/js/jquery.swipebox.js"></script><!-- 点击幻灯片 -->   
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
<!-- banner -->
<div class="bigpicbox">
  <div class="bannerimg">
    <img src="{$img_url}cafe/banner_01.jpg" />
    <img src="{$img_url}cafe/banner_02.jpg" />
    <img src="{$img_url}cafe/banner_03.jpg" />
    <img src="{$img_url}cafe/banner_04.jpg" />
    <img src="{$img_url}cafe/banner_05.jpg" />
    <img src="{$img_url}cafe/banner_06.jpg" />
    <img src="{$img_url}cafe/banner_07.jpg" />
  </div>
  <div class="bcontent">
    <p class="pone">—— &nbsp;&nbsp;北京海岸成立于<strong>1999</strong>年&nbsp; 拥有精英设计师<strong>200</strong>余人&nbsp;&nbsp; ——</p>
    <em class="emone"><img src="{$img_url}cafe/bannerlogo.png"></em>
    <div class="b-z">
      <div class="zi zione"><img src="{$img_url}cafe/liansuo.png" /></div>
          <div class="zi"><img src="{$img_url}cafe/zhuti.png" /></div>
          <div class="kafei">
                    <img src="{$img_url}cafe/cafeCup.png" />
                    <img src="{$img_url}cafe/kafeitu.png">
                </div>
         <div class="zi zione"><img src="{$img_url}cafe/xiuxian.png"  /></div> 
          <div class="zi"><img src="{$img_url}cafe/tese.png" /></div>
    </div>
    <button><a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立 即 预 约</a></button>
  </div>
</div>   
<!-- 设计服务四大方向 -->
<div class="firstbox">
      <ul class="firstboxul">  
        <li><span>-逼格更高-</span></li>
        <li><span>-创意更足-</span></li>
        <li><span>-空间更巧-</span></li>
        <li><span>-造价更省-</span></li>
      </ul>
</div>
       <div class="f7clor" id="productsthree">
                      <div class="boxtitle"> 
                        <h1 class="title">北京海岸设计</h1>
                        <p class="msgOne">带您沉浸能讲故事、有深度、有记忆点的好设计，有时间您来吗</p>
                      </div>
                   <div class="thidboxcont">
                    <div class="thidboxcont">
                        <div class="thidlftbox" id="csepicbox1">
                          <a href="{$index_url}product/showproduct.php?id=151&lang=cn" target="_blank">  
                            <img src="{$img_url}pic/wk_1.jpg" alt="咖啡厅设计" title="咖啡厅设计" /> 
                          </a>
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox2"> 
                          <a href="{$index_url}product/showproduct.php?id=359&lang=cn" target="_blank"> 
                            <img src="{$img_url}pic/wk_2.jpg" alt="咖啡厅设计" title="咖啡厅设计" /> 
                          </a>
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox3">
                          <a href="{$index_url}product/showproduct.php?id=115&lang=cn" target="_blank">  
                            <img src="{$img_url}pic/wk_3.jpg" alt="咖啡厅设计" title="咖啡厅设计" />
                          </a>  
                        </div> 
                         <div class="thidlftbox clsplay" id="csepicbox4">
                          <a href="{$index_url}product/showproduct.php?id=113&lang=cn" target="_blank">  
                            <img src="{$img_url}pic/wk_4.jpg" alt="咖啡厅设计" title="咖啡厅设计" />
                          </a>  
                        </div>
                         <div class="thidlftbox clsplay" id="csepicbox5">
                          <a href="{$index_url}news/shownews.php?id=520&lang=cn" target="_blank">  
                            <img src="{$img_url}pic/wk_5.jpg" alt="咖啡厅设计" title="咖啡厅设计" />
                          </a>  
                        </div>
                    <div class="thidrgtbox">
                              <div class="thrgtup">
                                    <div class="thrgbtnbox" id="thlftnpre"><img src="{$img_url}img/btnlefse.png"  alt="咖啡厅设计"  title="咖啡厅设计" /></div>
                                   
                                    <div class="updbebox" id="csetblebox1">
                                          <span>番禺煮糖间</span>
                                          <ul>
                                            
                                            <li>项目地址：广东</li>
                                            <li>项目类型：咖啡厅设计</li>
                                            <li>使用面积：3670㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox2">
                                          <span>漫咖啡</span>
                                          <ul>
                                            
                                            <li>项目地址：北京</li>
                                            <li>项目类型：咖啡厅设计</li>
                                            <li>使用面积：664㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                    <div class="updbebox clsplay" id="csetblebox3">
                                          <span>咖啡陪你</span>
                                          <ul>
                                            
                                            <li>项目地址：北京</li>
                                            <li>项目类型：咖啡厅设计</li>
                                            <li>使用面积：743㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox4">
                                          <span>漫猫咖啡</span>
                                          <ul>
                                            
                                            <li>项目地址：北京</li>
                                            <li>项目类型：咖啡厅设计</li>
                                            <li>使用面积：1000㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox5">
                                          <span>泰迪陪你咖啡</span>
                                          <ul>
                                            
                                            <li>项目地址：江西</li>
                                            <li>项目类型：咖啡厅设计</li>
                                            <li>使用面积：477㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>

                                    <div class="thrgbtnbox" id="thlftnnext"><img src="{$img_url}img/btnrgtse.png"  alt="咖啡厅设计"  title="咖啡厅设计" /></div>
                              </div>
                              <div class="thrgtdown" id="csetxtbox1">在考察完煮糖间的实际情况之后，结合归本主义理念，保留了原有工业遗址基础，将其打造为一个复合多元化的咖啡馆。采用“以旧修旧”的设计手法，用更直接的建造方法及低精细度的材料和工艺来进行改造。刻意将原始的天花构造、蒸汽管道及通风管道......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox2">在整体砖混结构的基础之上，大胆的使用了原始材料和原顶配黑塑造出归本独有的顶面；一系列精心挑选的绿植、配饰、桌椅为空间增添了无穷的魅力；大范围的玻璃幕墙映衬着蓝天白云，室内室外从不存在清晰的界限。将归本主义、欧美风情、原始大自然......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox3">俯视整体空间，色彩采用宁静舒适的色调，质感材料的运用转化为视觉上的享受，独特的铁艺护栏，创意感十足。充满街头气息的涂鸦风尚一直是年轻人的钟爱，郭准先生将街头元素融入归本主义理念中，打造个性化咖啡空间。绿色植物一直是生命的象征......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox4">设计师郭准先生大胆开拓建筑风格，独创的归本主义设计理念，逆袭刻板的规则，大量运用自然元素、木质地板、红砖石、通透玻璃、芬芳花草，还有裸露的清水混凝土构架，灵动的笔触将众多元素结合瞬间凝结为建筑的永恒之美。儒雅的气息扑面而来......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox5">以原木、绿植、原藤为主元素，从大自然中汲取配色灵感，用不同的处理方式来展现空间的可塑性，使其逐渐成为融合的、独特的审美特征，自然随性的风格设计让来客好似置身于别墅之中。原木色板条拼接的地面、裸露的混凝土吧台、可爱有趣的陈设品......</div>
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
                        <div class="boxbtn" id="boxbtnl"><img src="{$img_url}img/btnleft.png" alt="餐饮设计"  title="餐饮设计" /></div>
                         <div class="cntarbox">
                              <ul id="mainlist">                              
<!--
EOT;
$desc = array(
  "项目类型：餐饮设计<br>项目面积：1050㎡<br>项目地址：内蒙古<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：614㎡<br>项目地址：内蒙古<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：486㎡<br>项目地址：黑龙江<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：320㎡<br>项目地址：天津<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：700㎡<br>项目地址：云南<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：543㎡<br>项目地址：甘肃<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：893㎡<br>项目地址：山东青岛<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：774㎡<br>项目地址：上海<br>总设计师：郭准"
);
foreach(methtml_getarray($lang_productsfivec,'',hits,'','8','','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
-->
                                <li>
                                  <a class='normal' href='{$val[url]}' target="_blank">
                                   <img src="{$val[imgurl]}" alt="餐饮设计"  title="餐饮设计" />
                                  </a>
                                  <div class='info'>
                                    <h3>{$val[title]}</h3>
                                    <p>{$desc[$key]}</p>
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
$desc2 = array(
  "项目类型：餐饮设计<br>项目面积：1050㎡<br>项目地址：内蒙古<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：614㎡<br>项目地址：内蒙古<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：320㎡<br>项目地址：天津<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：486㎡<br>项目地址：黑龙江<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：700㎡<br>项目地址：云南<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：543㎡<br>项目地址：甘肃<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：893㎡<br>项目地址：山东青岛<br>总设计师：郭准",
  "项目类型：餐饮设计<br>项目面积：774㎡<br>项目地址：上海<br>总设计师：郭准"
);
foreach(methtml_getarray($lang_productsfivec,'',time,'','8','','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
-->
                                <li>
                                  <a class='normal' href='{$val[url]}'>
                                   <img src="{$val[imgurl]}" alt="餐饮设计"  title="餐饮设计">
                                  </a>
                                  <div class='info'>
                                    <h3>{$val[title]}</h3>
                                    <p>{$desc2[$key]}</p>
                                  </div>
                                </li>                             
<!--
EOT;
}
echo <<<EOT
--> 
                              </ul>  

                            </div>
                        <div class="boxbtn" id="boxbtnr"><img src="{$img_url}img/btnrgt.png" alt="餐饮设计"  title="餐饮设计" /></div>
                    </div>           
        </div>    
        </div>
       <div class="fcclor" id="productstwo">            
                      <div class="boxtitle"> 
                        <h1 class="title">海岸咖啡厅设计</h1>
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
                            <div class="secdboxcont"><img src="{$valz[imgurls]}" alt="{$valz[name]}" alt="咖啡厅设计"  title="咖啡厅设计" /></div>
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
                            <img src="{$lang_productssix2}" id="haian1"  alt="咖啡厅设计"  title="咖啡厅设计" />
                            <img src="{$lang_productssix5}" id="haian2"  alt="咖啡厅设计"  title="咖啡厅设计" />
                            <img src="{$lang_productssix8}" id="haian3"  alt="咖啡厅设计"  title="咖啡厅设计" />
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
                                  <li><img src="{$img_url}pic/coffeecust1.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust2.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust3.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust4.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust5.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust6.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust7.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust8.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust9.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust10.png"alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust11.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust12.png" alt="咖啡厅设计"  title="咖啡厅设计" /></li>  
                                </ul>
                           </div>
                    </div> <!-- fordown.png -->
                    <div class="customslogn">19年来，平均每一个省份，就有<span>20</span>个海岸设计案例</div>
        </div>
<!-- ====================================================海岸咖啡厅设计案例================================================================== -->
<div class="fcfclor" id="productsfive">
                     <div class="boxtitle"> 
                        <h1 class="title">咖啡厅设计案例</h1>
                        <p class="msgfour">更多人喜欢的设计 —— “海岸设计”</p>
                      </div>
                     <div class="nowjingdian">
                                          <div class="nowjd_title"><div class="nowjd_titlergt"><img src="{$img_url}img/changeyipi.png" />换一批</div></div>
                          <div class="main_lft">
                                      
                                          <div class="xxcenter" id="xxc1">
                                            <ul>

<!--
EOT;
  $productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'','','',8,'','','','16') as $key=>$val){

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
  $productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'',hits,'',8,'','','','16') as $key=>$val){

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
                                           <div class="xxcenter" id="xxc3">
                                            <ul>

<!--
EOT;
  $productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'',time,'',8,'','','','16') as $key=>$val){  
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
                                <a href="{$index_url}product/list-174-cn.html" target="_blank">
                                <input type="button"  value="更多咖啡厅设计案例" ></a>
                            </div>
          </div> 
          
<!--
EOT;
require_once template('foot_cafe'); 
?>