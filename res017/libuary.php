<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);
echo <<<EOT
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{$img_url}css/fr_feed.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}css/haian-core.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}css/settings.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}css/ruanzhuang.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}css/dynamic-captions.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">

     
    <link rel="stylesheet" href="{$img_url}css/library.css">
    <link rel="stylesheet" href="{$img_url}css/tushu/swiper.min.css">
    <script src="{$img_url}js/tushu/jquery-1.9.1.min.js"></script>
     <script src="{$img_url}js/tushu/library.js"></script>
    <script src="{$img_url}js/tushu/swiper.min.js"></script>
    <script type="text/javascript" src="{$img_url}js/tianyuan.js"></script>  
    <title>图书馆</title>
</head>
<body>
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
    <!-- 头部banner -->
    <header class="headimg">
        <div class="headContent">
            <div class="headtext">
                <p>图书馆设计</p>
                <ul>
                    <li><i></i>国家图书馆设计</li>
                    <li><i></i>学校图书馆设计</li>
                    <li><i></i>儿童图书馆设计</li>
                    <li><i></i>盲人图书馆设计</li>
                    <li><i></i>图书馆规划设计</li>
                </ul>
                <div class="typeTitle">
                    <b class="line"></b>
                    <span>海岸设计创立于1999年，19年设计行业领导者！</span>
                    <b class="line"></b>
                </div>
                <div class="Surround heartbeat">
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                </div>
            </div>
        </div>
    </header>

    <div class="clouds">
        <p>为什么选择我们</p>
        <hr>
    </div>
    <!-- 为什么选择我们 -->
    <div class="leaves">
        <ul>
            <li class="one-img slide-1">
                <img src="{$img_url}img/tushu/one1.png" alt="">
                <div class="files">
                    <div class="inside">
                        <p>OUR ADVANTAGES <br>
                            <span>我们的优势</span>
                        </p>
                        <em>400-879-1110</em>
                        <a class="heartbeat">全国免费咨询热线</a><br>
                        <b>经验</b><b>风格</b><b>团队</b><b>周期</b>
                    </div>
                </div>
            </li>
            <li class="two-img slide-2">
                <img src="{$img_url}img/tushu/two2.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            为客户提供<br>
                            <span>一站式全程服务</span>
                        </p>
                        <div class="corner">
                            <b></b>
                            <em>为客户提供</em>
                        </div>
                    </div>
                </div>
            </li>
            <li class="two-img slide-3">
                <img src="{$img_url}img/tushu/three3.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            300余位<br>
                            <span>专业行业精英</span>
                        </p>
                        <div class="corner-1">
                            <b></b>
                            <em>经验丰富</em>
                        </div>
                    </div>
                </div>
            </li>
            <li class="two-img slide-4">
                <img src="{$img_url}img/tushu/fore4.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            开创有新意节<br>
                            <span>约成本的实现方式</span>
                        </p>
                        <div class="corner-1">
                            <b></b>
                            <em>预算合理</em>
                        </div>
                    </div>
                </div>
            </li>
            <li class="two-img slide-5">
                <img src="{$img_url}img/tushu/five5.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            从1999年<br>
                            <span>成立服务至今</span>
                        </p>
                        <div class="corner-1">
                            <b></b>
                            <em>行业经验</em>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clouds">
        <p>图书馆分区划分</p>
        <hr>
    </div>

    <div class="vide">
        <div class="vide-text">
            <div class="vide-yuan">
                <p class="textss"></p>
                <!-- <img src="{$img_url}img/tushu/textss.jpg" alt=""> -->
            </div>
            <p>内外分区</p>
              <div class="dbx"></div>
        </div>
        <div class="vide-text" id="cos">
            <div class="vide-yuan">
                <p class="rest"></p>
                <!-- <img src="{$img_url}img/tushu/nth.jpg" alt=""> -->
            </div>
            <p>闹静分区</p>
              <div class="dbx"></div>


        </div>
        <div class="vide-text">
            <div class="vide-yuan">
                <p class="Season"></p>
                <!-- <img src="{$img_url}img/tushu/last.jpg" alt=""> -->
            </div>
            <p>水平分区和垂直分区</p>
              <div class="dbx"></div>
        </div>
        
    </div>
    

    <div class="join">

        <div class="metro">
                <div>1.传统的图书馆功能单一而固定，由内而外，借书空间，
                    阅览空间彼此分开，各成一体。书库的功能就是用来藏书的，
                    现在随着社会的进步和科技的发展，功能朝着多层次、灵活性、
                    综合性、高效型发展。
                </div>
                <div class="ton">2.内外分区即使将读者活动路线、工作人员的工作
                    路线和书籍的加工运送路线合理地加以组织区分，使流线简捷明确，避免
                    彼此穿行、迂回曲折和互相干扰。
                </div>
                <div>3.内外分区是现代图书馆合理使用的最主要的要求。如果处理不好，必将带来
                    管理上、使用上的不便，但是内外分区并不意味着这两个区域
                    截然分开。
                </div>
        </div>
        <div class="metro">
                <div>
                    1.图书馆建筑的一些用房在操作过程中
                    会产生噪声，如装订室、印刷间、打字
                    室等；有的在使用过程中人多嘈杂，
                    如报告厅、展览厅及对外商业用房等。
                </div>
                <div class="ton">
                        2.有的房间则需要高度安静，
                        如采编部 门业务办公室及阅览区；而报刊阅览、
                        儿童阅览就相对嗜杂；因此需要将它们 分开布置，以便减少干扰。
                </div>
                <div>
                    3.从“闹”和“静”的角度分析，图书 馆
                设计一般将内部加工区与读者使用区 分开
                ，阅览区和公共活动区分开，而各 区内部也应迸行一些必要的分区如在公
                共图书馆中，要将成人阅览与儿童阅览
                区分开。
                </div>
        </div>
        <div class="metro">
            <div>
                1.在建筑布局时，要根据图书馆内各部分空间的使用
                特点划分为不同的区域，进行合理的分区。是各区之间既有
                联系，又有分隔，互不干扰。
            </div>
            <div class="ton">
                2.分区方式一般采用水平分区与垂直分区或者两者兼用。
                垂直分区就是将不同的区域放置在不同的楼层上。
                人流量多的在较低层，人流量少的在较高层。
            </div>
            <div>
                3.水平分区，就是将各种不同性质、不同要求的部分布置
                于同一平面的不同区域。一般总是将内部用布置在后，
                读者在内区布置在前，外区布置在后，即
                前后分区；此外，还有左右分区的布局做法。
            </div>
        </div>
    </div>
    <!-- 图书馆类型 -->
    <div class="clouds">
        <p>图书馆类型</p>
        <hr>
    </div>
    <div class="Highway">
        <ul class="Highway-xi search">
            <li>国家图书馆</li>
            <li>公共图书馆</li>
            <li>大学图书馆</li>
            <li>科学图书馆</li>
            <li>专业图书馆</li>
            <li>技术图书馆</li>
        </ul>
        <div class="Bluetooth">
            <div class="ko">
                <p>400-879-1110</p>
                <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
            </div>
        </div>
        <ul class="Highway-xi search-1">
            <li>工会图书馆</li>
            <li>军事图书馆</li>
            <li>儿童图书馆</li>
            <li>盲人图书馆</li>
            <li>少数民族图书馆</li>
            <li>高等院校图书馆</li>
        </ul>
    </div>
    <div class="clouds">
        <p>图书馆布局方式</p>
        <hr>
    </div>
    
    <div class="ployment">
        <div class="graduation">
            <div class="scar">
                <img src="{$img_url}img/tushu/super.jpg" alt="">
            </div>
            <div class="complex">
                <ul>
                    <li>
                        <div class="droid">
                            <img src="{$img_url}img/tushu/lost-1.png" alt="">
                        </div>
                        <div class="example">
                            <p class="focus">集中式</p>
                            <hr>
                            <p>把书库、阅览、出纳、目录和内部办公管理等四大部分集中组合在一栋建筑物里。</p>
                            <p>优点：布局紧凑集中，工作联系方便，节约用地，管网经济。</p>
                            <p>缺点：处理不好，易导致读者和工作人员之间相互干扰，自然采光、通风受到限制。</p>
                        </div>
                    </li>
                    <li>
                        <div class="droid">
                            <img src="{$img_url}img/tushu/droid (2).png" alt="">
                        </div>
                        <div class="example change">
                            <p class="signal">分散式</p>
                            <hr>
                            <p>把书库、阅览、出纳、目录和内部办公管理等四大部分集中组合在一栋建筑物里。</p>
                            <p>优点：布局紧凑集中，工作联系方便，节约用地，管网经济。</p>
                            <p>缺点：处理不好，易导致读者和工作人员之间相互干扰，自然采光、通风受到限制。</p>
                        </div>
                    </li>
                    <li>
                        <div class="droid">
                            <img src="{$img_url}img/tushu/yuan-1.png" alt="">
                        </div>
                        <div class="example change">
                            <p class="signal">混合式</p>
                            <hr>
                            <p>把书库、阅览、出纳、目录和内部办公管理等四大部分集中组合在一栋建筑物里。</p>
                            <p>优点：布局紧凑集中，工作联系方便，节约用地，管网经济。</p>
                            <p>缺点：处理不好，易导致读者和工作人员之间相互干扰，自然采光、通风受到限制。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clouds">
        <p>海岸经典案例</p>
        <hr>
    </div>

    <div class="Expression">
        <div class="Cheerful">
            <div class="level">
                <div class="weather">
                    <p>北京新华书店设计</p>
                    <em>总设计师：郭准先生</em>
                </div>
                <ul>
                    <li>项目地址：北京</li>
                    <li>项目类型：室内设计</li>
                    <li>使用面积：1000m²</li>
                    <li>设计风格：归本主义</li>
                </ul>
                <div class="soldiers">
                    <a href="{$index_url}product/showproduct.php?lang=cn&id=328" target="_blank">查看详情</a>
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                </div>
            </div>
        </div>
        <div class="Respond">
            <div class="level-1">
                <div class="weather">
                    <p>单向空间书店设计</p>
                    <em>总设计师：郭准先生</em>
                </div>
                <ul>
                    <li>项目地址：北京</li>
                    <li>项目类型：室内设计</li>
                    <li>使用面积：1500m²</li>
                    <li>设计风格：归本主义</li>
                </ul>
                <div class="soldiers">
                    <a  href="{$index_url}product/showproduct.php?lang=cn&id=302" target="_blank">查看详情</a>
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                </div>
            </div>
        </div>
        <div class="foam">
            <div class="level">
                <div class="weather">
                    <p>田森图书馆设计</p>
                    <em>总设计师：郭准先生</em>
                </div>
                <ul>
                    <li>项目地址：宾广场CBD</li>
                    <li>项目类型：室内设计</li>
                    <li>使用面积：1500m²</li>
                    <li>设计风格：归本主义</li>
                </ul>
                <div class="soldiers">
                    <a  href="{$index_url}product/showproduct.php?lang=cn&id=270" target="_blank">查看详情</a>
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                </div>
            </div>
        </div>
    </div>

    <div class="brief">
        <div class="about">
            <p>关于海岸</p>
            <div class="Vinegar"></div>
            
            <em>一个归本主义作品，讲述一个故事，留下一个印象，播种一个梦想。欢迎咨询：400-879-1110</em>
        </div>
        <div class="character">
            <img src="{$img_url}img/tushu/guolaoshi_03.png" alt="">
            <p>郭准先生</p>
        </div>
    </div>
    
    <div class="retreat-text">
        <p>
            郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸，
            为了追寻自己的设计理念，他在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角落。
            从建筑的角度感受不同的人类文化，特别是在欧美、日韩，他虔诚的寻访了建筑巨匠们的足迹，
            深入大师们的实际作品内部，感悟其中奥妙所在，探寻大师们伟大思想的形成历程。在消化历代建筑大师的精华，
            思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。
        </p>
        <a href="javascript:qipn_side.nb();">立即预约</a>
    </div>

    <div class="clouds">
        <p>海岸动态</p>
        <hr>
    </div>

    <div>

<!--
EOT;
 require_once template('modular/index/newWeb/neWeb_lb');
echo <<<EOT
--> 

    </div>

    <div class="clouds">
        <p>海岸案例</p>
        <hr>
    </div>

    <div class="Carousel">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{$img_url}img/tushu/Carousel_16.jpg" />
                    <div>
                        <em>新华书店</em>
                        <p>郭准先生以清晰简洁为主，原木书架从入口延伸到书店深处，
                            通透明亮的玻璃窗将室外景色引入室内，书籍堆砌而成的背景墙也为空间增添了一丝书香气息。
                            不规则的几何造型装饰从地面通到天花板，在书本的精致之外，还有了一种别样的时尚，
                            这种碰撞带来的趣味给人与众不同的文化体验。
                        </p>
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                        <a href="{$index_url}product/showproduct.php?lang=cn&id=464" target="_blank">案例详询</a>
                    </div>
                </div> 
                <div class="swiper-slide">
                    <img src="{$img_url}img/tushu/danxiangkongjian_04.jpg" />
                    <div>
                        <em>单向空间</em>
                        <p>归本主义 在建筑设计里融入文学艺术，建筑才能有足够厚重的历史感，
                            每个细节中都留有书香韵味。设计师郭准先生深得文学和历史的熏陶，
                            在他的设计之下书店有着耐人寻味的别样格调。运用归本主义极简的美学理念，
                            将饱满的空间布局和富有层次感的空间节奏裸露出来，流畅而便捷的动线引导沉静的空间。
                        </p>
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                        <a href="{$index_url}product/showproduct.php?lang=cn&id=328" target="_blank">案例详询</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{$img_url}img/tushu/shuozhoudaxue_04.jpg" />
                    <div>
                        <em>朔州大学书店</em>
                        <p>这间由郭准先生设计的书店位于山西的朔州大学，
                            归本主义风格的室内设计和颇具艺术氛围的布置让人赏心悦目。
                            他针对大学校园内浓厚的学术气息，有意将书店的格调做到文艺清新，浪漫自然。
                            清水混凝土抹成的地面，钢铁吊顶，镂空钢铁书架穿插空间的始末。就是一间书店的魅力，是留住历史岁月的最好见证。
                        </p>
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                        <a  href="{$index_url}product/showproduct.php?lang=cn&id=301" target="_blank">案例详询</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{$img_url}img/tushu/xinhuayuedu_04.jpg" />
                    <div>
                        <em>新华阅读客厅</em>
                        <p>空间以黑色，白色作为主色调，配上简洁的原木色，低调、
                            稳重的同时营造静谧的舒适感。楼梯旁的墙壁，用黑色的字体作为内容，与整体风格完美结合。
                            他对每一个细节都力求精雕细琢，从顶部天花设计，到左右书架摆放，
                            在有限的空间里给读者无尽的视觉美感。他对每一个细节都力求精雕细琢。
                        </p>
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                        <a href="{$index_url}product/showproduct.php?lang=cn&id=251" target="_blank">案例详询</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{$img_url}img/tushu/zhiyisudian_04.jpg" />
                    <div>
                        <em>知一书店</em>
                        <p>知一书店坐落于雪城牡丹江市，采用了郭准先生的归本主义设计理念。
                            空间内简洁的线条和强烈的色调对比，配合不落俗套的挂饰和家具，把酷
                            和帅气全面的呈现出来，给人耳目一新的感觉。书店与咖啡馆的结合司空见惯。
                            不过，当归本主义不拘一格的设计与郭准先生天马行空的创意碰撞在一起。
                        </p>
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a>
                        <a href="{$index_url}product/showproduct.php?lang=cn&id=299" target="_blank">案例详询</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            
        </div>
        <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>
  
        <!--底部-->
    <!-- 标题6 -->

     <div class="clouds">
                <p>海岸动态</p>
                <hr>
            </div>
     <div class="chain06">
    <div class="qbtform">
<!--
EOT;
require_once template('feed/feedback_slr'); 
$metfeedback4=metlabel_feed_slr(166);
echo <<<EOT
-->  
    {$metfeedback4}    
    </div>

  </div>
    <!--底部-->
<footer>
            <div class="footertop">
          <div class="nav">
              <ul class="footul">
                <li>快速导航</li>
                <li>海岸设计</li>
              </ul>
          </div>
          <ul class="menuul">
<!--
EOT;

foreach($nav_list2[181] as $key=>$val){
  if($val['id']=='198')continue;
echo <<<EOT
-->
            <li><a href="{$val['url']}" target="_blank">{$val['name']}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
          </ul>
          <ul class="menuul clsply">
          <!--
EOT;

foreach($nav_list2[181] as $key=>$val){
  if($val['id']=='188')continue;
echo <<<EOT
-->
            <li><a href="{$val['url']}" target="_blank">{$val['name']}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
      
            <!-- li><a>田园综合体</a></li  -->
       
          </ul>
          <div class="footlf">
              <img src="{$img_url}xiaozhen/haianfooterlogo.png" alt="海岸九九">
              <p class="mt5">
                Web：www.haianzhuangshi.com<br/>
             
                E-mail：haianzhuangshi@sina.com</br>

                Address：北京市朝阳区北汽双井文创园3号楼E座108车间
            
              </p>
          </div>
          <div class="footmid">
              <div class="erweimod">
                <img src="{$img_url}xiaozhen/erweima1.png"/>
                <p>扫一扫，免费通话</p>
              </div>
              <div class="erweimod">
                <img src="{$img_url}xiaozhen/erweima2.png"/>
                <p>官方微博</p>
              </div>
          </div>
          <div class="footrgt">
            <img src="{$img_url}img/xzm.png" alt="联系我们">
            <span>400-879-1110</span>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button>立即预约</button></a>
          </div>
       
    </div>    
      <div class="footp">
      <hr class="footerhr">

            <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 京ICP备13049424号<br/>
            海岸声明：本站内容 图像资料版权均属「北京海岸设计」任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p>
            <div class="cnzz">{$lang_foot_cnzz}</div>
    </div>  
</footer>
    <!--底部-->


    <script>
    var mySwiper = new Swiper(".Carousel .swiper-container",{
            direction: 'horizontal',
    	    autoplay:3000,
            loop: true,
            paginationClickable: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        })
    </script>

    <script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{$img_url}js/haian-core.js"></script>
    <script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
</body>
</html>

<!--
EOT;
?>