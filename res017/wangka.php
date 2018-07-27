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
<link rel="stylesheet" type="text/css" href="{$img_url}css/wangk.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6_new.css"/>
<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 -->
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css"> 
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/wangk.js"></script>   
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
        <div class="wangkabigpicbox">
              <img class="bannertopp" src="{$img_url}img/solgn.png" alt="海岸设计-引领网吧/网咖设计新潮流" />
              <img class="bannertitle" src="{$img_url}img/bannertitle.png" alt="个性网咖设计" />
              <span></span>
              <img class="bannerul" src="{$img_url}img/bannerul.png" alt="" />
              <div class="wangkalianxibtn"> <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                <button class="lianxibtn"><span>立</span><span>即</span><span>预</span><span>约</span><span>海</span><span>岸</span><span>设</span><span>计</span></button></a>
              </div>
        </div>
<!-- 设计服务四大方向 -->
<div class="firstbox">
      <ul class="firstboxul">
        <li><img src="" alt="" /><span>-逼格更高-</span></li>
        <li><img src="" alt="" /><span>-创意更足-</span></li>
        <li><img src="" alt="" /><span>-空间更巧-</span></li>
        <li><img src="" alt="" /><span>-造价更省-</span></li>
      </ul>
</div> 

       <div class="f7clor" id="productsthree">
                    <div class="boxtitle"> 
                        <h1 class="title">北京海岸设计</h1>
                        <p class="msgOne">带您沉浸能讲故事，有深度，有记忆点的好设计，有时间您来吗</p>
                      </div>
                       <div class="thidboxcont">
                        <div class="thidlftbox" id="csepicbox1">
                          <a href="{$index_url}product/317-cn.html" target="_blank">  
                            <img src="{$img_url}pic/wk_1.jpg" alt="网咖设计" title="网咖设计" /> 
                          </a>
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox2"> 
                          <a href="{$index_url}product/315-cn.html" target="_blank"> 
                            <img src="{$img_url}pic/wk_2.jpg" alt="网咖设计" title="网咖设计" /> 
                          </a>
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox3">
                          <a href="{$index_url}product/446-cn.html" target="_blank">  
                            <img src="{$img_url}pic/wk_3.jpg" alt="网咖设计" title="网咖设计" />
                          </a>  
                        </div> 
                        <div class="thidlftbox clsplay" id="csepicbox4">
                          <a href="{$index_url}product/394-cn.html" target="_blank">  
                            <img src="{$img_url}pic/wk_4.jpg" alt="网咖设计" title="网咖设计" />
                          </a>  
                        </div> 
                        <div class="thidlftbox clsplay" id="csepicbox5">
                          <a href="{$index_url}product/314-cn.html" target="_blank">  
                            <img src="{$img_url}pic/wk_5.jpg" alt="网咖设计" title="网咖设计" />
                          </a>  
                        </div> 
                    <div class="thidrgtbox">
                              <div class="thrgtup">
                                    <div class="thrgbtnbox" id="thlftnpre"><img src="{$img_url}img/btnlefse.png" alt="网咖设计" title="网咖设计" /></div>
                                    <div class="updbebox" id="csetblebox1">
                                          <span>冰雨网咖</span>
                                          <ul>
                                            
                                            <li>项目地址：江西·景德镇</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1814㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox2">
                                          <span>海角七号网咖</span>
                                          <ul>
                                            
                                            <li>项目地址：湖北·襄阳</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1597㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                    <div class="updbebox clsplay" id="csetblebox3">
                                          <span>漫海岸网咖</span>
                                          <ul>
                                            
                                            <li>项目地址：广东·潮州</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1243㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox4">
                                          <span>旗鱼网咖</span>
                                          <ul>
                                            
                                            <li>项目地址：辽宁·大连</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1159m2</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox5">
                                          <span>798网咖</span>
                                          <ul>
                                            
                                            <li>项目地址：河南·洛阳</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：1029㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>


                                    <div class="thrgbtnbox" id="thlftnnext"><img src="{$img_url}img/btnrgtse.png" alt="网咖设计" title="网咖设计" /></div>
                              </div>
                              <div class="thrgtdown" id="csetxtbox1">以美式自由文化精神为主线，以归本主义理念为辅线，运用网络娱乐、咖啡休闲、互动社交的组合方式，将简约时尚的地中海风情贯穿其中，整体有序的功能划分、简洁的几何线条和新颖的细节设计，曲线明朗的原木造型搭配华丽简约的窗饰，朴素与精致的反差......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox2">以归本主义为设计理念，运用大量的自然元素，营造出一种神秘时尚的艺术空间。复古的暗色系并不代表颓废，而是表达出对时代的诉求。粗糙的砖墙、裸露的天花、柱面的游戏人物设计，颠覆视觉、完爆美学。而直接裸露的天花管道，象征着自由和随性......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox3">采用水泥、锈铁、木头等自然材料的相互糅合来创造纯粹的感受。在细节的处理上，通过绿植的选择、灯光的渲染、游戏人物造型的陈列，勾画出一个完整的空间设计语言，尽显网咖的独特魅力。整个空间全部采用自然的材料，原木色材质和做旧处理的锈色铁板......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox4">在设计中，郭准先生打破常规、一改传统网咖模式，“以一块铁的视角，看待一个零件的涅槃”作为主线，将充满创意的灵感融入空间每一处细节。走进空间，加工、锻造，每一个区域划分都由独立的工厂环节组成。同时，各个功能区的连接设计又环环相扣......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox5">在空间设计中，以归本主义为设计理念，以“钢、木、砖、石、玻璃、混凝土”六大元素为设计语言，结合点线面的排列对内部空间进行“表面切割”，以色彩、灯光、图案进行填充和创意，将科技与人性化设计实现了近乎完美的演绎，力求打造一种与众不同......</div>
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
                        <div class="boxbtn" id="boxbtnl"><img src="{$img_url}img/btnleft.png" alt="网咖设计" title="网咖设计" /></div>
                         <div class="cntarbox">
                              <ul id="mainlist"> 
                               
<!--
EOT;
foreach(methtml_getarray($lang_wangka,'',hits,'','8','','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
-->
		
                                <li>
                                  <a class='normal' href='{$val[url]}' target="_blank">
                                   <img src="{$val[imgurl]}" alt="网咖设计" title="网咖设计" />
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
foreach(methtml_getarray($lang_wangka,'',time,'','8','','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
-->
    
                                <li>
                                  <a class='normal' href='{$val[url]}' target="_blank">
                                   <img src="{$val[imgurl]}" alt="网咖设计" title="网咖设计" />
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
                        <div class="boxbtn" id="boxbtnr"><img src="{$img_url}img/btnrgt.png" alt="网咖设计" title="网咖设计" /></div>
                    </div>
              
        </div>
          

       <div class="fcclor" id="productstwo">            
                    <div class="boxtitle"> 
                        <h1 class="title">海岸网咖设计</h1>
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
                            <img src="{$lang_productssix2}" id="haian1" alt="网咖设计" title="网咖设计" />
                            <img src="{$lang_productssix5}" id="haian2" alt="网咖设计" title="网咖设计" />
                            <img src="{$lang_productssix8}" id="haian3" alt="网咖设计" title="网咖设计" />
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
                                  <li><img src="{$img_url}pic/coffeecust1.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust2.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust3.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust4.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust5.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust6.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust7.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust8.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust9.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust10.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust11.png" alt="网咖设计" title="网咖设计" /></li>
                                  <li><img src="{$img_url}pic/coffeecust12.png" alt="网咖设计" title="网咖设计" /></li>  
                                </ul>
                           </div>
                    </div> <!-- fordown.png -->
                    <div class="customslogn">19年来，平均每一个省份，就有<span>20</span>个海岸设计案例</div>
        </div>
 
<!-- =====================================================海岸网咖设计案例================================================================= -->

 <div class="fcfclor" id="productsfive">
                    <div class="boxtitle"> 
                        <h1 class="title">网咖设计案例</h1>
                        <p class="msgfour">更多人喜欢的设计 —— “海岸设计”</p>
                      </div>
                     <div class="nowjingdian">
                                          <div class="nowjd_title"><div class="nowjd_titlergt"><img src="{$img_url}img/changeyipi.png" />换一批</div></div>
                          <div class="main_lft">
                                      
                                          <div class="xxcenter" id="xxc1">
                                            <ul>

<!--
EOT;
  $wangka=tmpcentarr($lang_wangka);
foreach(methtml_getarray($lang_wangka,'','','',8,'','','','16') as $key=>$val){

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
  $wangka=tmpcentarr($lang_wangka);
foreach(methtml_getarray($lang_wangka,'',time,'',8,'','','','16') as $key=>$val){

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
  $wangka=tmpcentarr($lang_wangka);
foreach(methtml_getarray($lang_wangka,'',hits,'',8,'','','','16') as $key=>$val){  
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
                           <div class="knowbtnbox"><a href="{$index_url}product/list-169-cn.html" target="_blank">
                                <input type="button" value="更多网咖设计案例" ></a>
                            </div>
          </div>

<!--
EOT;
require_once template('foot_wangka'); 
?>