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
<link rel="stylesheet" type="text/css" href="{$img_url}css/cany.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6_new.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css">
<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 --> 
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/cany.js"></script> 

 
<script src="{$img_url}src/js/jquery.swipebox.js"></script><!-- 点击幻灯片 -->   

                
 
        <div class="faer_top" >
            <div class="fixednav">
                <a href="{$index_url}" title="{$met_webname}"> 
                <img src="{$lang_more_log}" alt="{$met_webname}" style="margin:{$lang_LogoTop}px 0px 0px {$lang_LogoLeft}px;" title="{$met_webname}" />
  
                <ul class="nav">  
                     <li class="navblue">
                      <a href="javascript:void(0);" onclick="go_top();">HOME</a>
                     </li>
                     <li><a href="#productsO">设计类型</a></li>
                     <li><a href="#productstwo">案例解析</a></li>
                     <li><a href="#productsthree">精品案例</a></li>
                     <li><a href="#productsfour">服务流程</a></li>
                     <li><a href="#productsfive">了解海岸</a></li>
                     <li><a href="#productssix">服务品牌</a></li>
                     <li><a href="#productsseven">海岸动态</a></li>
                     <li><a href="#productseight">最新案例</a></li>

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
<div class="bigpicbox">
  <div class="banner">
    <em class="emone"><img src="{$img_url}canyin/bannerlogo.png" /></em>
    <em class="emtwo"><img src="{$img_url}canyin/banner-zi.png" /></em>
    <p class="pone">主题餐厅设计 | 特色餐厅设计 | 品牌餐厅设计 | 餐厅店面设计</p>
  <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><button>立即咨询详情</button></a>
<div class="ptwo">
  <p>北京海岸设计成立于1999年</p>
  <p>拥有精英团队设计师300余人</p>
</div>
  </div>
</div>
<!-- 设计服务四大方向 -->
<div class="firstbox">
  <ul class="firstboxul">
    <li><img alt="餐饮设计"  title="餐饮设计" /><span>-逼格更高-</span></li>
    <li><img alt="餐饮设计"  title="餐饮设计" /><span>-创意更足-</span></li>
    <li><img alt="餐饮设计"  title="餐饮设计" /><span>-空间更巧-</span></li>
    <li><img alt="餐饮设计"  title="餐饮设计" /><span>-造价更省-</span></li>
  </ul>
</div> 
<!-- 餐饮设计类型 -->
        <div class="boxone">
        <a class="target_fix" id="productsO"></a>
          <div class="boxTitle"> 
                <h1 class="title">餐饮设计类型</h1>
                <p class="msgOne">业务覆盖全国70%省份 ，累计设计餐厅50,000m²......全国免费咨询热线400-879-1110</p>
            </div>
            <div class="boxcontent">
              <ul>
                <li>
                  <div class="quan"><img src="{$img_url}canyin/liansuoct.png" alt="连锁餐厅" /></div>
                  <p>连锁餐厅设计</p>
                </li> 
                <li>
                  <div class="quan"><img src="{$img_url}canyin/zhutict.png" alt="主题餐厅" /></div>
                  <p>主题餐厅设计</p>
                </li>
                <li>
                  <div class="quan"><img src="{$img_url}canyin/xiuxianct.png" alt="休闲餐厅" /></div>
                  <p>休闲餐厅设计</p>
                </li>
                <li>
                  <div class="quan"><img src="{$img_url}canyin/tesexiaodian.png" alt="特色小店" /></div>
                  <p>特色小店设计</p>
                </li>
                <li>
                  <div class="quan"><img src="{$img_url}canyin/xict.png" alt="西餐厅" /></div>
                  <p>&nbsp;西餐厅设计&nbsp;</p>
                </li>
                <li>
                  <div class="quan"><img src="{$img_url}canyin/huoguo.png" alt="火锅店" /></div>
                  <p>&nbsp;火锅店设计</p>
                </li>
              </ul>
            </div>
            <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><button>立即咨询</button></a>
        </div>
<!-- =========================================================================================================================== -->
       <div class="f7clor" >
        <a class="target_fix" id="productstwo"></a>
                    <div class="boxtitle"> 
                        <h1 class="title">北京海岸设计</h1>
                        <p class="msgOne">带您沉浸能讲故事、有深度、有记忆点的好设计，有时间您来吗</p>
                      </div>
                     <div class="thidboxcont">
                        <div class="thidlftbox" id="csepicbox1"> 
                          <a href="{$index_url}product/85-cn.html" target="_blank" >
                            <img src="{$img_url}pic/ro_1.jpg" alt="餐饮设计"  title="餐饮设计" />
                          </a>
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox2">
                          <a href="{$index_url}product/266-cn.html" target="_blank">
                            <img src="{$img_url}pic/ro_2.jpg" alt="餐饮设计"  title="餐饮设计" />
                          </a> 
                        </div>
                        <div class="thidlftbox clsplay" id="csepicbox3">
                          <a href="{$index_url}product/256-cn.html" target="_blank">
                            <img src="{$img_url}pic/ro_3.jpg" alt="餐饮设计"  title="餐饮设计" />
                          </a>
                        </div> 
                        <div class="thidlftbox clsplay" id="csepicbox4">
                          <a href="{$index_url}product/390-cn.html" target="_blank">
                            <img src="{$img_url}pic/ro_4.jpg" alt="餐饮设计"  title="餐饮设计" />
                          </a>
                        </div> 
                        <div class="thidlftbox clsplay" id="csepicbox5">
                          <a href="{$index_url}product/456-cn.html" target="_blank">
                            <img src="{$img_url}pic/ro_5.jpg" alt="餐饮设计"  title="餐饮设计" />
                          </a>
                        </div> 
                    <div class="thidrgtbox">
                              <div class="thrgtup">
                                    <div class="thrgbtnbox" id="thlftnpre"><img src="{$img_url}img/btnlefse.png" alt="餐饮设计"  title="餐饮设计" /></div>
                                    <div class="updbebox" id="csetblebox1">
                                          <span>归隐酒店SHANG</span>
                                          <ul> 
                                            <li>项目地址：山东·潍坊</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：6016㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox2">
                                          <span>田里酒店餐厅设计</span>
                                          <ul>
                                            
                                            <li>项目地址：山西·榆次</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：8807㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                    <div class="updbebox clsplay" id="csetblebox3">
                                          <span>娄三少春饼店</span>
                                          <ul>
                                            
                                            <li>项目地址：北京</li>
                                            <li>项目类型：室内设计</li> 
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox4">
                                          <span>隐逸水镇餐厅设计</span>
                                          <ul>
                                            
                                            <li>项目地址：云南省文山壮族苗族自治州丘北县</li>
                                            <li>项目类型：室内外建筑</li>
                                            <li>使用面积：50亩</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div>
                                     <div class="updbebox clsplay" id="csetblebox5">
                                          <span>红树林和风阁居酒屋</span>
                                          <ul>
                                            
                                            <li>项目地址：山东青岛</li>
                                            <li>项目类型：室内设计</li>
                                            <li>使用面积：893㎡</li>
                                            <li>主创团队：北京海岸设计</li>
                                            <li>总设计师：郭准先生</li>
                                            <li>设计风格：归本主义</li>
                                          </ul>
                                    </div> 

                                    <div class="thrgbtnbox" id="thlftnnext"><img src="{$img_url}img/btnrgtse.png" alt="餐饮设计"  title="餐饮设计" /></div>
                              </div>
                              <div class="thrgtdown" id="csetxtbox1">大量几何切割设计结合绿植营造出了“山”的效果，通过对光线的把控，使室内气氛给人以安逸感，原木与绿色植物的应用将自然气息环绕在人们周围。整个大厅的设计正迎合了归隐酒店的独特风格，给人以归隐山林的感觉，放松、自由、亲近自然......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox2">步入田里酒店，宾客将会体验一场以时空为线索，由自然和心灵构成的艺术之旅。室内运用了大量的归本主义风格家具、吊挂艺术装置、雕塑、艺术画件及摆件概念等，多元化的大堂空间，是书咖、是艺术区、是文青聚集地、是音乐吧，犹如一个文化园......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox3">原木和水泥，让设计“活”起来, 精美的瓷器、生机的绿植、以及错落有致的鸟笼装饰，整个空间弥漫着浓郁的北京味道。空间主色调以原木色为主，在简约的设计下，每一处的细节装饰更加深入人心。简洁自然的空间结构可以让人感到自由与轻松......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox4">将丰富的哲理与生活态度蕴含在室内空间当中，以原木、植物、铁艺等不同设计元素为主题，对空间进行重新解构与创新演绎，赋予空间新的生命力。同时选用适合的光环境来衬托出餐厅的文化内涵，真实再现食物色泽，以此在细节上凸显新的印记......</div>
                              <div class="thrgtdown clsplay" id="csetxtbox5">归本主义的设计理念，以木、石、竹等自然材质为主，用拟意的手法，表达玄妙深邃的意境，另整个空间宁静，简朴。飞石布局，取意枯山水庭院，日式氛围浓郁。悠悠然静坐，时间仿佛在此刻静止，梦回千年。日式风情的门帘和大面积的细竹屏风......</div>
                        </div>
                    </div>    
      </div>
<div class="bankline"></div>
          <div class="bakclor">
          <a class="target_fix" id="productsthree"></a>
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
foreach(methtml_getarray($lang_productsfivec,'','','','8','','','','16') as $key=>$val){
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
          

       <div class="fcclor" >
       <a class="target_fix" id="productsfour"></a>            
        <div class="boxtitle"> 
            <h1 class="title">海岸餐饮设计</h1>
            <p class="msgThr">只需6步流程，省去所有不必要的时间，让您尽快赚钱</p>
          </div>
        <ul>
          <li>
              <div class="secdboxcont"><img src="{$img_url}canyin/deepdot1.png" alt="沟通咨询" /></div>
              <span>沟通咨询</span>
              <p>了解您的需求，提供专业建议</p>
          </li>
          <li>
              <div class="secdboxcont"><img src="{$img_url}canyin/deepdot2.png" alt="定金勘测" /></div>
              <span>定金勘测</span>
              <p>品牌的保证</p>
          </li>
          <li>
              <div class="secdboxcont"><img src="{$img_url}canyin/deepdot3.png" alt="设计意向" /></div>
              <span>设计意向</span>
              <p>确定需求与交付任务</p>
          </li>
          <li>
              <div class="secdboxcont"><img src="{$img_url}canyin/deepdot4.png" alt="效果图" /></div>
              <span>效果图</span>
              <p>确定最直观的设计效果</p>
          </li>
          <li>
              <div class="secdboxcont"><img src="{$img_url}canyin/deepdot5.png" alt="施工图" /></div>
              <span>施工图</span>
              <p>打造您店面的基石</p>
          </li>
          <li>
              <div class="secdboxcont"><img src="{$img_url}canyin/deepdot6.png" alt="项目预算" /></div>
              <span>项目预算</span>
              <p>我们来为您考虑成本</p>
          </li>
      </ul>
        <div class="sogen">{$lang_prod1}</div>
        <div class="knowbtnbox"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
            <input type="button" value="立即预约" ></a>
        </div>
      </div>
      
<!-- ===========================================================了解海岸================================================================= -->
                
                <div class="f7clor">
                <a class="target_fix" id="productsfive"></a>
                    <div class="boxtitle"> 
                      <h1 class="title">了解海岸</h1>
                      <p class="msgfif">秉着对您负责的态度，留点空间，请让我们自报家门</p>
                    </div>
                    <div class="anconbox">
                    <div class="f7imgbox">
                            <img src="{$img_url}img/chuangshiren.jpg" id="haian1" alt="餐饮设计"  title="餐饮设计" />
                            <img src="{$lang_productssix5}" id="haian2" alt="餐饮设计"  title="餐饮设计" />
                            <img src="{$lang_productssix8}" id="haian3" alt="餐饮设计"  title="餐饮设计" />
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


<!-- =========================================================从1999年到现在============================================================ -->

<div class="blackbgp">
<a class="target_fix" id="productssix"></a>
  <div class="boxtitle"> 
    <h1 class="titleThr">从1999年到现在</h1>
    <p class="msgThr">19年口碑企业，众多品牌的一致首选</p>
  </div>
  <div class="biaodanbox">
        <div class="customerlogobox">
              <ul class="customerlist">  
                <li><img src="{$img_url}pic/coffeecust1.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust2.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust3.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust4.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust5.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust6.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust7.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust8.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust9.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust10.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust11.png" alt="餐饮设计"  title="餐饮设计" /></li>
                <li><img src="{$img_url}pic/coffeecust12.png" alt="餐饮设计"  title="餐饮设计" /></li>  
              </ul>
         </div>
  </div> <!-- fordown.png -->
  <div class="customslogn">19年来，平均每一个省份，就有<span>20</span>个海岸设计案例</div>
</div>

<!-- ===========================================================海岸动态================================================================== --> 

<!--
EOT;
require_once template('modular/news_specialTop_total');
echo <<<EOT
-->

<!-- =======================================================餐饮设计案例==================================================================== -->        


        <div class="bankline"></div>
        <div class="fcfclor" >
        <a class="target_fix" id="productseight"></a>
                    <div class="boxtitle"> 
                        <h1 class="title">餐饮设计案例</h1>
                        <p class="msgfour">更多人喜欢的设计 —— “海岸设计”</p>
                      </div>
                     <div class="nowjingdian">
                                          <div class="nowjd_title"><!--<div class="nowjd_titlergt"><img src="{$img_url}img/changeyipi.png" />换一批</div>--></div>
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
                                           <div class="xxcenter" id="xxc3">
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
                            </div>
                           <div class="knowbtnbox"><a href="{$index_url}product/list-175-cn.html" target="_blank">
                                <input type="button" value="更多餐饮设计案例" ></a>
                            </div>
          </div> 
          
<!--
EOT;
require_once template('foot_canyin'); 
?>