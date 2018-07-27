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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$img_url}css/spring.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}css/caf.css"/>
    <link rel="stylesheet" href="{$img_url}css/wq/shudian.css">
    <link rel="stylesheet" href="{$img_url}css/wq/normalize.css">

    <link rel="stylesheet" href="{$img_url}css/wq/swiper.min.css">
    <title>温泉度假</title>
    <link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
    <link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
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
    <header class="banner-header">
        <div class="headerbox">
            <div class="header-img">
                <!-- <img src="{$img_url}img/wq/温泉度假设计.png" alt=""> -->
                <p>温泉度假设计</p>
            </div>
            <p>
                <img src="{$img_url}img/wq/txtu.png" alt="">
            </p>
            <div class="Sincerely">
                <span>温泉度假村</span>
                <b>丨</b>
                <span>旅游度假村</span>
                <b>丨</b>
                <span>度假村酒店</span>
                <b>丨</b>
                <span>民宿度假村</span>
                <b>丨</b>
                <span>景区度假村</span>
            </div>
            <div class="user">
                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
          
                 
            </div>
        </div>
        <div class="headertwo">
            <em>选择度假村类型</em>
            <div class="archives"></div>
            <hr>
            <p>Selective type</p>
        </div>
        <div class="vacation">
            <div class="left-img">
                <div class="top-1 living">
                    <p class="mask"></p>
                    <div class="preparation">
                        <em style="font-family:'Algerian'">01</em>
                        <b class="concise"></b>
                        <span>温泉度假村</span>
                        
                        <a  class="hvr-radial-out" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
                    </div>
                    
                </div>
                <div class="top-2 top-1 living-1">
                    <p class="mask"></p>
                    <div class="preparation">
                        <em>04</em>
                        <b class="concise"></b>
                       <span>度假村酒店</span>
                        <a  class="hvr-radial-out" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
                    </div>
                </div>
            </div>
            <div class="in-img">
                <div class="top-3 top-1">
                    <p class="mask-1"></p>
                    <div class="preparation-1">
                        <em>03</em>
                        <b class="morality"></b>
                        <span>民宿度假村</span>
                        <a  class="hvr-radial-out" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
                    </div>
                </div>
            </div>
            <div class="right-img">
                <div class="top-4 top-1 living-2">
                    <p class="mask"></p>
                    <div class="preparation">
                        <em>02</em>
                        <b class="concise"></b>
                        <span>旅游度假村</span>
                        <a  class="hvr-radial-out" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
                    </div>
                </div> 
                <div class="top-5 top-1 living-3">
                    <p class="mask"></p>
                    <div class="preparation">
                        <em>05</em>
                        <b class="concise"></b>
                        <span>景区度假村</span>
                        <a  class="hvr-radial-out" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="headertwo-1">
            <em>度假村景观规划</em>
            <div class="archives"></div>
            <hr>
            <p>Landscape Planning</p>
        </div>
    </header>
    <div class="Scenery">
        <div class="natural">
            <div class="Carousel">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{$img_url}img/wq/sket.jpg" /></div> 
                        <div class="swiper-slide"><img src="{$img_url}img/wq/rman.jpg" /></div>
                        <div class="swiper-slide"><img src="{$img_url}img/wq/land.png" /></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="carouseltxt">
                <ul>
                    <li>尊重把握项目地块地形环境和自然生态特色，努力创造产品与自然相融，人与环境和谐的度假休闲消费空间。</li>
                    <li>科学系统利用温泉水资源，确立定位准确、规模适宜的水资源综合利用规划，着眼资源保护和利用，成本和效益的平衡</li>
                    <li>致力度假休闲产品的市场研究和着地，努力开发创新性差异化的温泉沐浴形式和产品形态，创造性地满足休闲养生消费需求。</li>
                    <li>适应项目地形的气候环境条件，巧妙利用地形、建筑、园建植被等要素，并采用室内外相结合、季节性服务等方式，保障项目产品的四季经营。</li>
                    <li>注重项目和温泉产品主题文化的挖掘，充分结合项目地域文化和温泉沐浴文化，以及项目风土地貌等特征，形成有品味有内涵、有特色的差异性项目产品，摒弃同质化竞争和克隆性产品。</li>
                    <div class="More heartbeat hvr-radial-out"><a href="{$index_url}product/list-151-cn.html">查看更多</a></div>
                </ul>
            </div>
        </div>
    </div>
    <div class="headertwo-1">
            <em>多样度假村景区模式</em>
            <div class="archives"></div>
            <hr>
            <p>Variousness</p>
    </div>
    <div class="Pattern">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <ul>
                        <li>
                            <img src="{$img_url}img/wq/qcom.png" alt="">
                            <div>
                                <p>生态庄园模式</p>
                                <span>Ecological Manor</span>
                            </div>
                        </li>
                        <li><img src="{$img_url}img/wq/liks-2.png" alt="">
                            <div>
                                <p>会议中心模式</p>
                                <span>Meeting</span>
                            </div>
                        </li>
                        <li><img src="{$img_url}img/wq/liks-3.png" alt="">
                            <div>
                                <p>康复基地模式</p>
                                <span>Rehabilitation base</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="headertwo-1">
        <em>归本主义，向纯粹而生</em>
        <div class="archives"></div>
        <hr>
        <p>Return to Humanism</p>
    </div>
    <div class="pure">
        <div class="perfect">
            <div class="college">
                <img src="{$img_url}img/wq/team.jpg" alt="">
                <img src="{$img_url}img/wq/Explode.jpg" alt="" style="display: none;">
                <img src="{$img_url}img/wq/doctrine.jpg" alt="" >
            </div>
            <div class="relationship">
                <div class="chart">
                    <div class="word">海岸设计</div>
                    <div class="long" >1.”北京海岸设计”成立于1999年，至今已发展成为中国极具规模和影响力的综合性设计公司。
                        北京海岸设计现有精英设计团队300余人，足迹遍布大江南北。
                    </div>
                </div>
                <div class="chart">
                    <div class="word">郭准先生</div>
                    <div class="long" >1.郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸。
                        他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的，
                        因为目的不在于追求耀眼的视觉效果，而是追求表现生活在其中人的活动本身。
                    </div>
                </div>
                <div class="chart">
                    <div class="word">归本主义</div>
                    <div class="long" >1.归本主义是“华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、发光的实体、光亮的黑暗、
                        模糊的清晰、浩瀚的荒僻。”在生活体验中，不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="headertwo-1">
            <em>温泉酒店成功案例</em>
            <div class="archives"></div>
            <hr>
            <p>Eatablisbed Case</p>
    </div>
    <div class="Boutique-text">
            <div class="detection Plug-1">
                <div class="demo">
                    <img src="{$img_url}img/wq/1.png" alt="">
                    <div class="disk">
                        <a href="{$img_url}" >
                            <p class="hvr-radial-out"><a href="{$index_url}product/89-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>陕西西安H度假村</span> <br>
                        <em>设计面积：1012m²</em>
                    </p>
                    <a href="{$index_url}product/89-cn.html" target="_blank">
                        <div class="discipline">
                            <!-- <img src="{$img_url}img/wq/youj.png" alt=""> -->
                            <i class="replace"></i>
                            <span class="hide"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="detection Plug-1">
                <div class="demo">
                    <img src="{$img_url}img/wq/2.png" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/91-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>田森田里酒店大学城度假村</span> <br>
                        <em>设计面积：8807m²</em>
                    </p>
                    <a href="{$index_url}product/91-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
            <div class="detection Plug-2">
                <div class="demo">
                    <img src="{$img_url}img/wq/mslj.jpg" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/88-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>济南公寓式度假村</span> <br>
                        <em>设计面积：1122m²</em>
                    </p>
                    <a href="{$index_url}product/88-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
            <div class="detection Plug-2">
                <div class="demo">
                    <img src="{$img_url}img/wq/4.png" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/408-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>浣花草堂民宿度假村</span> <br>
                        <em>设计面积：5000m²</em>
                    </p>
                    <a href="{$index_url}product/408-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
            <div class="detection Plug-3">
                <div class="demo">
                    <img src="{$img_url}img/wq/bjlz.jpg" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/90-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>北京湾流寓度假村</span> <br>
                        <em>设计面积：11400m²</em>
                    </p>
                    <a href="{$index_url}product/90-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
            <div class="detection Plug-3">
                <div class="demo">
                    <img src="{$img_url}img/wq/ltfu.jpg" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/283-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>新晋府田里酒店设计</span> <br>
                        <em>设计面积：1122m²</em>
                    </p>
                    <a href="{$index_url}product/283-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
            <div class="detection Plug-4">
                <div class="demo">
                    <img src="{$img_url}img/wq/7.png" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/88-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>济南公寓式酒店设计</span> <br>
                        <em>设计面积：2000m²</em>
                    </p>
                    <a href="{$index_url}product/88-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
            <div class="detection Plug-4">
                <div class="demo">
                    <img src="{$img_url}img/wq/xshg.jpg" alt="">
                    <div class="disk">
                        <a href="{$img_url}">
                            <p class="hvr-radial-out"><a href="{$index_url}product/87-cn.html" target="_blank">查看详情</a></p>
                        </a>
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">
                            <em class="hvr-radial-out">立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="Research">
                    <p>
                        <span>昆明朴舍酒店设计</span> <br>
                        <em>设计面积：2000m²</em>
                    </p>
                    <a href="{$index_url}product/87-cn.html" target="_blank"><div class="discipline">
                        <img src="{$img_url}img/wq/youj.png" alt="">
                        <span class="hide"></span>
                    </div></a>
                </div>
            </div>
    </div>
    <div class="More heartbeat "><a href="{$index_url}product/list-150-cn.html">查看更多</a></div>
    <div class="group">
        <div class="just">
            <div class="politeness">
                <em>海岸设计</em>
                <p>海岸的客户群涵盖了业界众多知名企业及集团：漫咖啡、咖啡陪你、咖啡之翼、
                    麻辣诱惑、海底捞火锅、汉拿山、鸿坤、逸美时光、太平洋咖啡、山西田森集团釜山料理、恒大集团、苏宁、华远地产等。
                </p>
                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" class="hvr-radial-out">立即咨询</a>
            </div>
        </div>
    </div>
    <div class="headertwo-1">
            <em>温泉设计的精品案例</em>
            <div class="archives"></div>
            <hr>
            <p>Eatablisbed Case</p>
    </div>
    <div class="Volcano">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="Sketch">
                        <img src="{$img_url}img/wq/sprin.png" alt="">
                    </div>
                    <ul>
                        <li>山东淄博唐庄度假村</li>
                        <li>1.尊重把握项目地块地形环境和自然生态特色，努力创造产品与自然相融，人与环境和谐的度假休闲消费空间。</li>
                        <li>2.科学系统利用温泉水资源，确立定位准确、规模适宜的水资源综合利用规划，着眼资源保护和利用，成本和效益的平衡。</li>
                        <li>3.致力度假休闲产品的市场研究和着地，努力开发创新性、差异化的温泉沐浴形式和产品形态，创造性地满足休闲养生消费需求</li>
                        <li>4.适应项目地形的气候环境条件，巧妙利用地形、建筑、园建植被等要素，并采用室内外相结合、季节性服务等方式，保障项目产品的四季经营。</li>
                    </ul>
                    <div class="fictitious">
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" class="hvr-radial-out">
                             <em>立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="Sketch">
                        <img src="{$img_url}img/wq/task.png" alt="">
                    </div>
                    <ul>
                        <li>隐逸水镇度假村设计</li>
                        <li>1.隐逸水镇，一个桃花源般的旅行圣地,日出而作，日落而息最传统自然的生活方式，已然变成都市中上班族们的向往。</li>
                        <li>2.日出而作，日落而息。最传统自然的生活方式，已然变成都市中上班族们的向往。纯净的空气、清澈的小溪、原生态的食物。</li>
                        <li>3.隐逸水镇位于云南省文山州丘北县，由北京海岸倾力打造。整个水镇是集水上乐园、民宿、餐饮、婚礼、野宿于一体的旅行圣地。</li>
                        <li>4.游走于天地间，感受万物灵气。在这里，呼吸那不曾沾染尘埃的空气，体验那如诗如画的景致，领略那绿色生态的意义。</li>
                    </ul>
                    <div class="fictitious">
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" class="hvr-radial-out">
                            <em>立即咨询</em>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="Sketch">
                        <img src="{$img_url}img/wq/just.png" alt="">
                    </div>
                    <ul>
                        <li>云南设计案例集锦</li>
                        <li>1.如果这人间有一抹春色让人流连，那一定是七彩云南。这是一个盛产仙境的地方，无数的人情风景让游客们的痴迷于此。</li>
                        <li>2.朴，木素也，本真而平实，有天然、未经雕饰之美。舍，居室也，澄净而释然，有脱俗、远离喧嚣之境。此为朴舍之意。</li>
                        <li>3.这里充满着乌托邦似的纯净和自由，走入开放式的空间，那一份被阳光笼罩的美感和满眼的绿水青山，即可令你放下心中重担，你会发现：山致远，心幽静。</li>
                        <li>4.原木的结构，让人感觉简单、淳朴。平凡的材料，简约的搭配，让人享受安静的休闲时光。</li>
                    </ul>
                    <div class="fictitious">
                        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" class="hvr-radial-out">
                            <em>立即咨询</em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
  <!-- 标题6 -->
    <div class="headertwo-1">
            <em>海岸书店设计 · 预约触手可及</em>
            <div class="archives"></div>
            <hr>
            <p>立即预约</p>
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
	
<!--
EOT;
$met_foot_nav = methtml_footnav();//底部导航标签（次导航）
$met_foot_txt = metlabel_foot();//底部信息标签  
echo <<<EOT
--> 
<div class="hos">
<div class="footcenter">
  <div class="footuplistbox">
      <dl>
        <dt class="footdtfocus">快速导航</dt>
        <dt>海岸设计</dt>
      </dl> 
      <ul>
<!--
EOT;
foreach($nav_list2[181] as $val){
  if($val[name]=='咖啡馆设计')continue;
echo <<<EOT
-->        
      <a href="{$val[url]}" target="_blank" alt="{$val[name]}"><li>{$val[name]}</li></a>
<!--
EOT;
}
echo <<<EOT
-->              
      </ul>
      <ul class="clsplay">
       <a href="{$index_url}product/list-151-cn.html" target="_blank"> <li>温泉设计</li></a>
     
    
      </ul>
  </div>
</div>
<footer>
  <div class="footertop">
        <div class="footertitle">
            <em>联系我们</em><span>Contact us</span>
        </div>
        <div class="footermain">
            <div class="ftmainlft">
                 
                  <em><i class="fticon fticon4"></i>haianzhuangshi@sina.com </em>
                  <em><i class="fticon fticon1"></i>www.haianzhuangshi.com</em>
                  <em><i class="fticon fticon2"></i>北京市朝阳区北汽双井文创园3号楼E座108号</em>
            </div>
             <div class="footzxlg">
                <img src="{$img_url}jiudian/zuoji-1.png"></img>
                <img src="{$img_url}jiudian/free_phone.png"></img>
                <img src="{$img_url}jiudian/telphone.png"></img> 
            </div>
            <ul class="ftmainrgt">
                  <li><img src="{$img_url}pic/erweima1.jpg" alt="扫一扫，免费通话" /><span>扫一扫，免费通话</span></li>
                  <li><img src="{$img_url}pic/erweima2.jpg" alt="微信公众号" /><span id="weixincenter">微信公众号</span></li>
            </ul>
        </div>
  </div>
  <div class="footerdown">
    <div class="ftdown_all">
        <p>CopRright &copy; 1999-2017 北京海岸设计 All Rrights Reserved  &nbsp;&nbsp;&nbsp;&nbsp;京ICP备13049424号</p >
        <p>海岸声明：本站内容 图像资料版权均属北京海岸设计任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p >
        <div class="cnzz">{$lang_foot_cnzz}</div>
    </div>     
  </div>
</footer> 
</div>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script src="{$img_url}js/wq/jquery-1.9.1.min.js"></script>
    <script src="{$img_url}js/wq/spring.js"></script>
    <script src="{$img_url}js/wq/swiper.min.js"></script>
    <script type="text/javascript" src="{$img_url}js/caf.js"></script> 
           
    <script type="text/javascript" src="{$img_url}fStyle/openwin.js">

    <script>
        var mySwiper = new Swiper(".Carousel .swiper-container",{
            autoplay: {
                delay: 3000,
            },
            paginationClickable: true,
                pagination: {
                el: '.swiper-pagination',
            },
        })
        // var mySwiper = new Swiper(".Pattern .swiper-container",{
        //     autoplay: {
        //         delay: 3000,
        //     },
        //     paginationClickable: true,
        //         pagination: {
        //         el: '.swiper-pagination',
        //     },
        // })
        var mySwiper = new Swiper(".Volcano .swiper-container",{
            autoplay: {
                delay: 3000,
            },
            paginationClickable: true,
                pagination: {
                el: '.swiper-pagination',
            },
        })
    </script>
     <script>
        var mySwiper = new Swiper(".Carousel .swiper-container",{
            autoplay: {
                delay: 3000,
            },
            paginationClickable: true,
                pagination: {
                el: '.swiper-pagination',
            },
        })
        // var mySwiper = new Swiper(".Pattern .swiper-container",{
        //     autoplay: {
        //         delay: 3000,
        //     },
        //     paginationClickable: true,
        //         pagination: {
        //         el: '.swiper-pagination',
        //     },
        // })
        var mySwiper = new Swiper(".Volcano .swiper-container",{
            autoplay: {
                delay: 3000,
            },
            paginationClickable: true,
                pagination: {
                el: '.swiper-pagination',
            },
        })
    </script>
</body>
</html>




<!--
EOT;
?>
