 <!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':''; 
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);
echo <<<EOT
-->
{$methtml_head} 

<link rel="stylesheet" type="text/css" href="{$img_url}css/jiudian.css"/> 

<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">


<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>



<div class="faer_top" >
            <div class="fixednav">
                 <a href="{$index_url}" title="{$met_webname}">  
         
            </div>
        </div>
 
 <div style="display:none">
 { $met_foot_txt}
 </div>
<!--
EOT;
// require_once template('modular/head/more_nav');
echo <<<EOT
-->
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
        
        <div class="bigpicbox"> 
          <div class="topcallbtn">
           <img src="{$img_url}jiudian/banner-4.png" alt="" class="banner-4">
            <img src="{$img_url}jiudian/banner-5.png" alt="" class="banner-5">
          <span>全国免费咨询热线：400-879-1110</span>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class='btn'>一键预约设计师</button></a>
          </div>
        </div>

      
         <div class="boxcont1">
          <div class="box1linebox">
            <h2><div class="lebor"></div>酒店<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273855638'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1273855638%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>的类型</h2>
             <div class="huahuacomb">
                  <hr>
                  <h4>全球化的视野、专业的设计能力、国际化的服务标准和别具匠心的构思</h4>
           
            </div>
                <div class="box1centerimgbox">
                   <div class="box1centerimg">
                    <div class="box0001">
                      <span>酒店<br>设计</span>
                      <hr>
                      <p>酒店设计<br/>
                        是依据可行性报告和定位报告的指引<br/>
                        以及业主的要求<br/>
                        形成规划方案和建筑方案<br/>
                        是一门科学与文化结合的高尚艺术<br/>
                        优秀的设计师通过科学和艺术的结合<br/>
                        赋予建筑空间灵魂与生命<br/>
                        引导和提高人们对美的认识和追求
                        </p>
                    </div>
                  </div>
                </div>
                <ul class="box1line b1ulleft">
                  <li>
                      <i class="box1iconfont icon-iconfontjiudian"></i><em>商务酒店设计</em>
                      <p>主要以接待从事商务活动的客人为主，是为商务活动服务酒店设计类型，此类酒店的设施齐全、服务功能较为完善。</p>
                  </li>
                  <li>
                      <i class="box1iconfont icon-icshehuaxingjiudian"></i><em>度假酒店设计</em>
                      <p>以接待休假的客人为主，酒店业是旅游业发展的三大支柱之一，度假酒店更是与旅游密切相关的一种酒店形式。</p>
                  </li>
                  <li>
                      <i class="box1iconfont icon-jiudian"></i><em>民宿酒店设计</em>
                      <p>此类酒店设计既享受酒店提供的殷勤服务，又可享受居家的快乐，如您愿意亦可以自己烹饪美味家肴。</p>
                  </li>
                  <li>
                      <i class="box1iconfont icon-gongyuguanli"></i><em>主题酒店设计</em>
                      <p>以特定主题为酒店设计基点，体现出其独特的建筑风格和装饰艺术，以个性化主题服务，让顾客获得不一样的欢乐和刺激。</p>
                  </li>
                </ul>
                <ul class="box1line b1ulright">
                  <li>
                      <i class="box1iconfont icon-binguanjiudian"></i><em>星级酒店设计</em>
                      <p>由国家（省级）旅游局评定，达到一定条件及规模的能够以夜为时间单位向旅游客人提供配有餐饮及相关服务的住宿设施。</p>
                  </li>
                  <li>
                      <i class="box1iconfont icon-hunyanjiudian"></i><em>精品酒店设计</em>
                      <p>以接待会议旅客为主的酒店设计 ，除食宿娱乐外还为会议代表提供接送站、会议资料打印、录像摄像、旅游等服务。</p>
                  </li>
                  <li>
                      <i class="box1iconfont icon-mianxingtubiao1jiudian"></i><em>连锁酒店设计</em>
                      <p>多为旅游出差者预备，其价格低廉，服务方便快捷，功能简化，总体节奏较快，例如各种快捷酒店、连锁酒店等等。</p>
                  </li>
                  <li>
                      <i class="box1iconfont icon-xianluxiangqingjiudian"></i><em>艺术酒店设计</em>
                      <p>针对某些特殊的消费群体，这类酒店设计多为装饰大胆、手法新奇，如艺术酒店、设计酒店等。</p>
                  </li>
                </ul>  
          </div>
        </div>

        <div class="boxcont2"id="productstwo">
                    <div class="cont2">
                                  <div class="cont2tit">山东·归隐酒店设计</div>
                                  <div class="cont2cent">
                                      <div class="cont2centlt">
                                          <ul class="imginfo">
                                              <li>
                                                  
                                                    <img src="{$img_url}jiudian/guiyin1.jpg"  alt="酒店设计" />
                                                    
                                              </li>
                                               <li>
                                                  
                                                    <img src="{$img_url}jiudian/guiyin2.jpg"  alt="酒店设计" />
                                                  
                                              </li>
                                               <li>
                                                  
                                                    <img src="{$img_url}jiudian/guiyin3.jpg"  alt="酒店设计" />
                                                  
                                              </li> <li>
                                                  
                                                    <img src="{$img_url}jiudian/guiyin4.jpg"  alt="酒店设计" />
                                                  
                                              </li> <li>
                                                  
                                                    <img src="{$img_url}jiudian/guiyin5.jpg"  alt="酒店设计" />
                                                  
                                              </li>
                                            </ul>
                                            <ul class="imgbgcolor">
                                                <li class="defoutimg"></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                      </div>
                                      <div class="cont2centrt">
                                          <pre>
该酒店设计以归本主义为设计理念
用木的温厚营造出舒适的居住环境
内部的结构设计
将建筑划分为不同风格的居住空间
酒店延续着色彩拼撞的情绪
不同的色块对比冲撞在一起
同时喷涂一些不同色彩缀点其中
自然独特的设计反映在每一处细节
<br /> 
超五星级的服务与设施
并未扰乱亘古的宁静
提振了整个空间的活力
在放肆与克制之间总能找到恰当的平衡点
                                          </pre>
                                      </div>
                                  </div>
                    </div>
        </div>

 <div class="listenq">
      <div class="listenleft">
        <div class="lsnbor"></div>
        <h2 class="lsneng">hotel design</h2>
        <h2 class="lsncn">设计特点</h2>
        <p class="lsnp">中国的酒店设计业发展可以说是蒸蒸日上，最近的几十年也算是发展极为迅速，那么将来会怎么发展呢？看了很多关于酒店设计的文章，感觉中国的酒店设计将会进入“十个现代化” 。</p>
        <img class="lsnimg" src="{$img_url}jiudian/lsnarrow.png"/>
        <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><button class="sjbtn">马上咨询</button></a>
        <h3 class="lsnengh3">hotel</h3>
      </div>
      <div class="listenright"></div>
      <div class="lsncenter">
        <div class="lsnwh">
        <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
             <img  class="lsnbtm" src="{$img_url}jiudian/lsnhori.png"/>
            <i class="iconfont icon-wangluo"></i>
            <p class="lsnwen">网络化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
             <img  class="lsnbtm" src="{$img_url}jiudian/lsnhori.png"/>
            <i class="iconfont icon-zhuti"></i>
            <p class="lsnwen">主题化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
          <img  class="lsnbtm" src="{$img_url}jiudian/lsnhori.png"/>
            <i class="iconfont icon-aixinjuanzeng"></i>
            <p class="lsnwen">亲情化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
             <img  class="lsnbtm" src="{$img_url}jiudian/lsnhori.png"/>
            <i class="iconfont icon-deng"></i>
            <p class="lsnwen">家居化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
             <img  class="lsnbtm" src="{$img_url}jiudian/lsnhori.png"/>
            <i class="iconfont icon-xinshouzhinanxuanzhong"></i>
            <p class="lsnwen">人性化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
             <img  class="lsnbtm" src="{$img_url}jiudian/lsnhori.png"/>
           <i class="iconfont icon-shishangdaren"></i>
            <p class="lsnwen">时尚化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
            <i class="iconfont icon-bangzhuzhongxin_jingjijizhufang"></i>
            <p class="lsnwen">经济化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <img  class="lsnrgt" src="{$img_url}jiudian/lsnverti.png"/>
             <i class="iconfont icon-jiandankuaijie"></i>
            <p class="lsnwen">简约化</p>
        </div>
         <div class="lsnwh">
         <div class="mymeng"></div>
            <i class="iconfont icon-taocan"></i>
            <p class="lsnwen">精细化</p>
        </div>
      </div>
      <div class="lsnbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button>立即预约</button></a></div>
    </div>


       <!-- 酒店分类 -->
        <div class="bigHotel clsplay">
          <div class="meng"></div>
          <div class="nomeng">
            <img class="tuceng" src=""/>
             <img  class="bigicon01" src="{$img_url}jiudian/close.png" alt="关闭">
             <img class="bigicon02" src="{$img_url}jiudian/left.png" alt="上一页"><img class="bigicon03" src="{$img_url}/jiudian/right.png" alt="下一页">
              <div class="hoteldata"><span class="hotelname">唐庄艺术酒店</span><span class="hotelcount">3/7</span></div>
             
          </div>
       </div>

    

      <div class="boxcont4">
                <div class="cont4">
                      <div class="cont4lt">
                           <div class="c4conimgbox juck">
                                <div class="placeshow">田森   田里酒店设计</div>
                                <div class="c4conimgshow smc4img">
                                    <a href="{$img_url}pic/tians.png"  class="swipebox" title="">
                                        <img src="{$img_url}pic/tians.png"  alt="酒店设计"  title="酒店设计" />
                                    </a>
                                </div>
                           </div>
                           <div class="c4contxtbox juak">
                                <fieldset class="fie1"><legend>海岸设计·归本主义</legend></fieldset>
                                <p> 
一个舒缓的空间，没有多余的装饰，暖榻自能拂去心灵的尘埃，寻回那份积极乐观的态度，麻绳与雕花原木相连，洒脱成列悬挂室内，诠释着纯粹的质感空间，加入古老磨盘、老房梁、旧木雕花等老物件，给酒店蒙上了淡淡的时光之纱，此酒店设计保留原有水泥墙面，同时打造现代吊顶墙面，形成粗犷与精致的对比。
                                </p>
                           </div>
                      </div>
                      <div class="cont4lt right">
                           <div class="c4contxtbox rose" id="paddchange">
                                <fieldset class="fie1"><legend>海岸设计·归本主义</legend></fieldset>
                                <p class="c4contxtmain">
                                这里是一个交流、思绪碰撞的地方，一个充满青春气息的地方， 一个有情怀、有魅力的地方，一个满足吃，住，玩的地方。 当灵魂的空间重归原始的那一瞬间，浮躁的心情慢慢沉淀， 退去硬朗的外表，还给“家”一个纯粹的空间。
                                </p>
                           </div>
                           <div class="c4conimgbox rosa">
                                <div class="placeshow">昆明   朴舍酒店设计</div>
                                <div class="c4conimgshow smc4img">
                                    <a href="{$img_url}pic/kunm.png"  class="swipebox" title="">
                                        <img src="{$img_url}pic/kunm.png"  alt="酒店设计"  title="酒店设计" />
                                    </a>
                                </div>
                           </div>
                      </div>
                      <div class="cont4down">
                           <div class="c4conimgboxdown">
                                <div class="placeshow">青岛   IN 酒店设计</div>
                                <div class="c4conimgshow lgc4img">
                                    <a href="{$img_url}pic/qingd.png"  class="swipebox" title="">
                                        <img src="{$img_url}pic/qingd.png"  alt="酒店设计"  title="酒店设计" />
                                    </a>
                                </div>
                           </div>
                           <div class="c4condowntxtbox">
                                <fieldset class="fie2"><legend>海岸设计·归本主义</legend></fieldset>
                                <p>
       在某一瞬间，重遇了自己，那一刻你才懂得，走遍世界，也不过是为了找到一条重回内心的路。此酒店设计采用最简单的建筑材料，以凸显简洁明亮的设计空间，大面积绿色的应用、颜色跳跃的布艺沙发以及现代主义的灯饰，为空间营造出年轻活力的轻松氛围，温暖的阳光从通透的玻璃天窗缓缓洒落，慵懒的斜倚沙发，读一本趣味的书，美好的一天从此开始，阳光、空气、绿植，纯净的大自然让你无限接近自我。背包客们在这样创意的集体宿舍中，相互尊重，结伴寻梦，旅行也变得轻松美妙。IN酒店，是你自由路上的家。
                              </p>
                           </div>
                      </div>
                      <div class="cont4btn">
                        <div class="btn_body"><a href="javascript:;" onclick="jQuery('.boxbig').show()">一键预约设计师</a></div>
                      </div>
                </div>
      </div>
        <div class="boxcont3">            
                    <ul class="cont3">
                          <li class="c3contxt">
                                <div class="c3maintitle">唐庄艺术酒店设计</div>
                                <div class="c3maintip">复古又摩登的视觉效果</div>
                                <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="c3btn">立即预约</div></a>
                                <a href="{$index_url}product/showproduct.php?lang=cn&id=84" target="_blank"><div class="c3btn c3btnrgt">查看详情</div></a>
                          </li>
                          <li class="c3conimg">
                                <a>
                                            <img src="{$img_url}pic/meet.png"  alt="酒店设计"  title="酒店设计" />
                                </a>
                          </li>
                          <li class="c3conimg">
                                <a>
                                            <img src="{$img_url}pic/jins.jpg"  alt="酒店设计"  title="酒店设计" />
                                </a>
                          </li>
                          <li class="c3contxt">
                                <div class="c3maintitle">东方酒店设计</div>
                                <div class="c3maintip">温暖而舒适的空间感受</div>
                              <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="c3btn">立即预约</div></a>
                                <a href="{$index_url}product/showproduct.php?lang=cn&id=265" target="_blank"><div class="c3btn c3btnrgt">查看详情</div></a>
                          </li>
                          <li class="c3contxt">
                                <div class="c3maintitle">北京湾流公寓设计</div>
                                <div class="c3maintip">建筑与自然的全新融合</div>
                                <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="c3btn">立即预约</div></a>
                                <a href="{$index_url}product/showproduct.php?lang=cn&id=90" target="_blank"><div class="c3btn c3btnrgt">查看详情</div></a>
                          </li>
                          <li class="c3conimg">
                                <a>
                                            <img src="{$img_url}pic/guiy.jpg"  alt="酒店设计" />
                                </a>
                          </li>
                          <li class="c3conimg">
                                <a>
                                            <img src="{$img_url}pic/tanz.png"  alt="酒店设计" />
                                </a>
                          </li>
                          <li class="c3contxt">
                                <div class="c3maintitle">晋善地产公寓设计</div>
                                <div class="c3maintip">神秘花园的视觉格言</div>
                                <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="c3btn">立即预约</div></a>
                                <a href="{$index_url}product/showproduct.php?lang=cn&id=368" target="_blank"><div class="c3btn c3btnrgt">查看详情</div></a>
                          </li>
                    </div>      
      </div>

      <div class="boxcont6">
                <div class="cont6">
                        <div class="cont6up">
                              <div class="c6upbox c6up3bgi">
                                <pre>
  在国家大力提倡节能环保的大背景下，
  节能与环保已经成为建筑设计未来发展的大趋势。
  近年来，随着国家经济的发展，人们生活水平提高，
  住房条件不断地改善，
  酒店设计不仅要考虑美观舒适，还要在考虑到
  设计的个性的同时，
  兼顾以人为本环保与节能的室内设施的设计和运用。
                                </pre>
                              </div>
                              <div class="c6upbox c6up2bgi">
                                <pre>
采光设计“通过光，我们感受到季节的变化，
由于光的指引，我们得以知熟悉这个世界......”
1.人眼在自然环境中辨认能力强，舒适度好，
不易引起视觉疲劳，有利于视觉健康；
2.通过自然采光的亮度强弱变化、光影的移动，
在室内生活的人们可以感知昼夜的更替和四季的循环，
有利于心理健康；
                                </pre>
                              </div>
                              <div class="c6upbox c6up1bgi">
                                <pre>
在当今时代，人们对于住所的要求
已经不仅仅是满足日常的临时住所，
人们更多多的是追求一种精神享受。
储藏空间在设计中，是一个不容回避的问题，
合理储物空间的设计安排，
能够为居住者营造一个更生活化和人性化的居住氛围。
                                </pre>
                              </div>
                        </div>
                        <div class="cont6down">
                              <div class="c6dnbox c6dn1bgi">
                                <pre>
随着科学技术的发展社会的进步
人们对物质生活以及精神生活得要求越来越高
社会竞争日益激烈社会压力也不断加大
我们身边的环境也伴随着发生变化
一个高品质环境的好坏
也就影响着我们的交际活动
                                </pre>
                              </div>
                              <div class="c6dnbox c6dn2bgi">
                                <pre>
环境是影响学习效率的重要因素之一
人与人之间的相互关系
是环境的重要组成部分
良好的环境可以激发人学习的积极性和创造力
                                </pre>
                              </div>
                              <div class="c6dnbox c6dn3bgi">
                                <pre>
环境氛围通过眼、脑和我们的生活经验
所产生的一种对光的视觉效应
不同的氛围给人的感受也不经相同
一个好的氛围环境
也能为我们更大限度的留住更多的人心
                                </pre>
                              </div>
                        </div>
                </div>
      </div> 
 <div class="boxcont5">
                <div class="cont5">
                      <div class="c5maintop">
                            北京海岸设计
                             <hr />
                              <p>专心、专注 设计旅行中的家
                            </p>
                      </div>
                      <div class="c5mainbotm" id="fonsi12">
                            <div class="c5blockbox">
                                  <div class="c5toplogobox">
                                    <img src="{$img_url}pic/c5boxlogo2.png" alt="酒店设计"  title="酒店设计" />
                                  </div> 
                                  <ul class="c5mainulbox">
                                      <li >海岸设计由知名建筑师郭准先生创立于1999年，已经在业界历练十九个年头。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>海岸设计开创了一个设计流派，以独创的归本主义理论为核心设计理念。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>海岸设计位于北京资产大厦双井文创园E座108车间。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>海岸设计现有资深设计师组成的稳定设计团队280余人；并拥有一支1000余人技术力量雄厚且有丰富经验的专业施工及管理团队。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                       
                                  </ul>
                            </div>
                            <div class="c5blockbox">
                                  <div class="c5toplogobox">
                                    <img src="{$img_url}pic/c5boxlogo4.png" alt="酒店设计"  title="酒店设计" />
                                  </div> 
                                  <ul class="c5mainulbox">
                                      <li>海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>一个归本主义作品  讲述一个故事   留下一个印象。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>震撼人心的归本主义作品   是第一印象的建筑外观  是走进建筑内部的空间感受。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>不刻意的去显摆 不去模仿追逐别人  不做多余的事情 那么  我们的归本主义作品就会流露出 自然 脱俗 简单的美。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      
                                  </ul>
                            </div>
                            <div class="c5blockbox">
                                  <div class="c5toplogobox">
                                    <img src="{$img_url}pic/c5boxlogo1.png" alt="酒店设计"  title="酒店设计" />
                                  </div> 
                                  <ul class="c5mainulbox">
                                      <li>19年来。平均每个省份，就有20个海岸设案例，多年的设计经验。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>高级设计需求，设计师拥有扎实的美术功底。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>海岸由精英设计师300余人组成，分为18个战区进行专业化配合设计。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li  class="c5lifourth">海岸每年完成400余项目，一直保持着180个左右的项目在进行中。</li>
                                  </ul>
                              
                            </div>
                            <div class="c5blockbox">
                                  <div class="c5toplogobox">
                                    <img src="{$img_url}pic/c5boxlogo3.png" alt="酒店设计"  title="酒店设计" />
                                  </div> 
                                  <ul class="c5mainulbox">
                                      
                                      <li>海岸与顾客进行充分的沟通，了解顾客的常规需求。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li>海岸为顾客去掉不必要的高成本设计。<img src="{$img_url}pic/lidown.png" alt="" /></li>
                                      <li  class="c5lifourth">海岸全程根据顾客需求，为每个顾客设计进行最专业的细节设计。</li>
                                  </ul>
                              
                            </div>
                      </div>
                </div>
      </div>
<!--
EOT;
require_once template('modular/news_specialTop_F');
echo <<<EOT
-->
     <div class="boxcont7">
                 <div id="wrap">

                    <div id="tab">
                      <li class='on'>
                            <h3>朴舍酒店设计</h3>
                            <div class="b7duoline"> 项目地址：云南<br>
                                  项目类型：酒店设计<br>
                                  使用面积：2000㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            一个舒缓的空间，没有多余的装饰，暖榻自能拂去心灵的尘埃，寻回那份积极乐观的态度，麻绳与雕花原木相连，洒脱成列悬挂室内，诠释着纯粹的质感空间
                            </p>
                      </li>
                      <li>
                            <h3>榆次田里酒店设计</h3>
                            <div class="b7duoline">项目地址：山西<br>
                                  项目类型：酒店设计<br>
                                  使用面积：8807㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            田里不只是一座酒店，而是一个充满艺术气息的文化园，由自然和心灵构成的艺术之旅，诠释出一种生活方式，连享受一杯茶的时光都会如此令人难忘
                            </p>
                      </li>
                      <li>
                            <h3>青岛IN酒店设计</h3>
                            <div class="b7duoline"> 项目地址：山东<br>
                                  项目类型：酒店设计<br>
                                  使用面积：2000㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            一个年轻化的住宿空间，让人感受到家的温暖，让旅行的你成为空间的主角，生活是流动的，生命才能流动，才能五光十色，自由洒脱的气息与IN 酒店推崇的精神内核完美的契合在一起
                            </p>
                      </li>
                      <li>
                            <h3>归隐酒店设计</h3>
                            <div class="b7duoline"> 项目地址：山东<br>
                                  项目类型：酒店设计<br>
                                  使用面积：6016㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            酒店延续着色彩拼撞的情绪，不同色块对比冲撞在一起，提升整个空间活力，用木的温厚营造出舒适的居住环境，为客人提供置身于大自然间友好、健康的休闲氛围，自然独特的设计反映在每一处细节
                            </p>
                      </li>
                      <li>
                            <h3>济南公寓酒店设计</h3>
                            <div class="b7duoline"> 项目地址：山东<br>
                                  项目类型：酒店设计<br>
                                  使用面积：1122㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            将现代风格以及都市气息结合在一起，为人们营造一个躲避城市渲闹的现代世外桃源，可以满足不同需求的客户，而同色纹路的地毯从入口处一直延续到室内的其他区域，保持了空间的连续性
                            </p>
                      </li>
                      <li>
                            <h3>MEET U酒店公寓设计</h3>
                            <div class="b7duoline"> 项目地址：上海<br>
                                  项目类型：酒店设计<br>
                                  使用面积：614㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            归本主义天然的设计理念，融入到公寓的设计里，从内带外透漏出典雅大气的风范，裸露的混凝土结构诉说着这里的历史，木材的质感传达给客人温暖、热情的讯号，绿植的点缀营造舒适自然的环境
                            </p>
                      </li>
                      <li>
                            <h3>唐庄艺术酒店设计</h3>
                            <div class="b7duoline"> 项目地址：山东<br>
                                  项目类型：酒店设计<br>
                                  使用面积：2857㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            这里有热恋般的浪漫与激情，有梦幻般的时空穿梭，有粗犷的工业质感也有田园风光，以艺术的创意巧思，展现耐人寻味的文化内涵，以低调奢华的典雅品味打动人心，传递清新的设计美学
                            </p>
                      </li>
                      <li>
                            <h3>东方酒店设计</h3>
                            <div class="b7duoline"> 项目地址：内蒙古<br>
                                  项目类型：酒店设计<br>
                                  使用面积：2130㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            略去繁杂的线条，升华空间的高度，尊享艺术文化品质，每一处都极具创意美感，当艺术优雅地融入生活，当俄式元素木屋走入酒店，那神秘中的丝丝敏感，或洋溢着热情，或权衡这安静
                            </p>
                      </li>
                      <li>
                            <h3>太谷田里酒店设计</h3>
                            <div class="b7duoline"> 项目地址：山西<br>
                                  项目类型：酒店设计<br>
                                  使用面积：11055㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            极简风，东西方文化与新旧元素进行融合，没有任何扎眼和哗众取宠的设计，自然光下的折纸将成为创造和谐紧密的建筑外轮廓，边边角角，条条框框，有意无意间，都在体现对极致生活的追求
                            </p>
                      </li>
                    </div>
                    <div id='pic'>
                      <li class='l1'><img src="{$img_url}pic/pxjd.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li class='l2'><img src="{$img_url}pic/tiansd.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li class='l3'><img src="{$img_url}pic/qingdaoin.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li><img src="{$img_url}pic/sdgy.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li><img src="{$img_url}pic/jinang.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li><img src="{$img_url}pic/MEET U.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li><img src="{$img_url}pic/tangzd.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li class='l9'><img src="{$img_url}pic/dongfd.jpg" alt="酒店设计"  title="酒店设计" /></li>
                      <li class='l0'><img src="{$img_url}pic/taigud.jpg" alt="酒店设计"  title="酒店设计" /></li>
                    </div>
                    <div id="btn">
                      <div id="leftone"></div>
                      <div id="rightone"></div>
                    </div>
                  </div>       
            <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
      </div>          
<!--
EOT;
require_once template('foot_jiudian'); 
?>