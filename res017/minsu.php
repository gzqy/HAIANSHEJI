<!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt  = metlabel_foot();
 $topnav          = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
 $navnow = $classnow==10001?'class="navblue"':''; 
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" type="text/css" href="{$img_url}css/minsu.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_two.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_tianyuan.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/minsu.js"></script>  
<script src="{$img_url}js/slider.js"></script>
<!--
EOT;
echo <<<EOT
-->
 <div class="faer_top" >
            <div class="fixednav">
                 <a href="" title="{$met_webname}">  
				 
            </div>
        </div>
<div style="display:none">
 { $met_foot_txt}
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
  <header> 
    <div class="headercenter">
      <img class="bantitletese" src="{$img_url}minsu/bannertitletese02.png" alt="民宿设计">
      <div class="categorybox">
        <img class="ban_t_f" src="{$img_url}minsu/ban_t_f.png" alt="民宿设计">
        <div class="cate_h">
          <img src="{$img_url}minsu/cate_h.png" alt="民宿设计">
        </div>
      </div>
      <div class="introductionbox">
        <ul class="introduction">
          <li>民宿酒店设计</li>
          <li><img src="{$img_url}minsu/ban_j.png" alt="民宿设计"></li>
          <li>民宿民居设计</li>
          <li><img src="{$img_url}minsu/ban_j.png" alt="民宿设计"></li>
          <li>生态景观设计</li>
          <li><img src="{$img_url}minsu/ban_j.png" alt="民宿设计"></li>
          <li>民俗文旅设计</li>
          <li><img src="{$img_url}minsu/ban_j.png" alt="民宿设计"></li>
          <li>特色民宿设计</li>
        </ul>
      </div>
      <div class="headerbtnbox">
        <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button class="headerbtn">立即预约</button></a>
      </div>
      
    </div>
  </header>
  <div class="receiptor">
    <div class="p1200">
      <h2 class="teh2">民宿的发展历程</h2>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg2" src="{$img_url}minsu/rec001.png">
        <img class="receipimg1" src="{$img_url}minsu/receip001.png">
        <!-- <h3>产品主体化</h3> -->
        <p>英国出现了B&B型家庭旅馆，被称为最早的民宿设计型旅馆。</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg2" src="{$img_url}minsu/rec002.png">
        <img class="receipimg1" src="{$img_url}minsu/receip002.png">
        <!-- <h3>品质精品化</h3> -->
        <p>美国民宿设计以家居形式/青年旅社的形式兴起。</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg2" src="{$img_url}minsu/rec003.png">
        <img class="receipimg1" src="{$img_url}minsu/receip003.png">
        <!-- <h3>业态多元化</h3> -->
        <p>台湾因景区发展迅速，住宿设施不足，民宿因运而生。</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg2" src="{$img_url}minsu/rec004.png">
        <img class="receipimg1" src="{$img_url}minsu/receip004.png">
        <!-- <h3>经营连锁化</h3> -->
        <p>台湾、英国等地开始成立各类协会及相关部门引导民宿发展。</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg2" src="{$img_url}minsu/rec005.png">
        <img class="receipimg1" src="{$img_url}minsu/receip005.png">
        <!-- <h3>管理规范化</h3> -->
        <p>法国台湾修订法规，对民宿的设立标准进行规范。</p>
      </div>
      <div class="receip receip001">
        <div class="receip004"></div>
        <div class="receip002"></div>
        <div class="receip003"></div>
        <img class="receipimg2" src="{$img_url}minsu/rec006.png">
        <img class="receipimg1" src="{$img_url}minsu/receip006.png">
        <!-- <h3>运营专业化</h3> -->
        <p>旅游全球化的发展态势下，民宿设计业也向着专业化、高端化方向发展。</p>
      </div>
    </div>
  </div>
  <h2 class="tehnew">民宿发展的重要意义</h2>
  <div class="swot">
    <div class="p1200">
      <div class="swotbor lfswot">
        <h3>从旅游角度来讲</h3>
        <p>随着交通的发展和自驾车的普及、自驾游、深度游、自由游、体验游逐渐成为流行和风尚，民宿是以知识经济为基础，以自然生态环境为依托的创意生活品类，迎合了游客自由体验的需求，民宿设计价值也随之体现</p>
      </div>
      <div class="swotbor rgtswot">
        <h3>从经济角度来说</h3>
        <p>民宿提升农家乐产业，好的民宿设计是可以推动农村经济结构转变的强力助力，增加农民收入，带动整体产业链</p>
      </div>
      <div class="swotbor lfbswot">
        <h3>从文化角度来说</h3>
        <p>民宿发展有利于发掘和保护当地人文历史、自然生态，用现代的文化创意手段来延续传承当地文化民俗，通过民宿设计，重塑乡村的魅力和提升乡村的文化竞争力</p>
      </div>
      <div class="swotbor rgtbswot">
        <h3>从社会角度来说</h3>
        <p>民宿设计是携带现代城市文明基因向农村地区延伸的桥梁,符合现代人的兴趣、梦想、生活理念和审美需求，促进农民素质的提高，农民生活方式的改变，农村社会价值观的提升，因此发展民宿必将成为新当前生态农业与旅游融合发展的抓手</p>
      </div>
      <div class="censwot">
      </div>
      <div class="censwotinn">
        <div class="recteng recteng01">S</div>
        <div class="recteng recteng02">W</div>
        <div class="recteng recteng03">O</div>
        <div class="recteng recteng04">T</div>
      </div>
    </div>
  </div>
  <div class="principle">
    <div class="p1200">
      <h2 class="teh2">民宿的运营模式</h2>
      <div class="pricinn">
        <div class="pricilf prici001">
          <div class="fanshape fanshape1"><img src="{$img_url}minsu/markit001.png" title="民宿设计"></div>
          <h3>自发型</h3>
          <hr>
          <p>由居民依托自家房屋自发开发民宿的类型，业主提供全部的资金来源并作为家庭副业进行独立经营，同时由政府进行管理、推广、协调，并允许</p>
        </div>
        <div class="pricirgt prici002">
          <div class="fanshape fanshape2"><img src="{$img_url}minsu/markit002.png" title="民宿设计"></div>
          <h3>主导型</h3>
          <hr>
          <p>由当地统一引导当地居民改造自家房屋、开发民宿的类型，业主在当地的支持下提供部分的资金来源并作为家庭副业或主业进行经营，统一进行</p>
        </div>
        <div class="pricilf prici003">
          <div class="fanshape fanshape3"><img src="{$img_url}minsu/markit003.png" title="民宿设计"></div>
          <h3>协会型</h3>
          <hr>
          <p>由业主（村委会）成立民宿协会，自行开发管理，居民以服务入股的民宿经营模式，由业主、政府、协会共同提供资金来源，业主在政府的引导</p>
        </div>
        <div class="pricirgt prici004">
          <div class="fanshape fanshape4"><img src="{$img_url}minsu/markit004.png" title="民宿设计"></div>
          <h3>开发商型</h3>
          <hr>
          <p>由开发商租赁或购买村落房屋，进行整体开发、独立或分散经营的民宿经营模式，开发商提供资金来源，本地居民作为主业参与服务经营，并在政府的引导、规范、管理下由开发商进行统一的开发和经营</p>
        </div>
      </div>
    </div>
  </div>
  <div class="intension">
    <div class="p1146">
      <h2 class="teh2">民宿的产品模式</h2>
      <div class="intenlf">
        <div class="arrowtp"></div>
        <div class="arrowrgt"></div>
        <div class="arrowbt"></div>
        <div class="arrowlf"></div>
        <div class="tophr"></div>
        <div class="lefthr"></div>
        <div class="intenbor intenbor1">
         <div class="intenud"> </div>
          <h4 class="zhh4in">基本</h4>
          <h4 class="engh4in">basic</h4>
        </div>
        <div class="intenbor intenbor2">
         <div class="intenud"></div>
          <h4 class="zhh4in">特色</h4>
          <h4 class="engh4in">feature</h4>         
        </div>
        <div class="intenbor intenbor3">
         <div class="intenud"></div>
          <h4 class="zhh4in">副业</h4>
          <h4 class="engh4in">avocation</h4>         
        </div>
        <div class="intenbor intenbor4">
         <div class="intenud"> </div>
          <h4 class="zhh4in">旅游</h4>
          <h4 class="engh4in">Tourism</h4>
        </div>
      </div>
      <div class="intenrgt">
        <ul class="ulinten">
          <li>
            <!-- <img src="{$img_url}minsu/listicon.png"> -->
            <h3 class="intenh3">基本产品</h3>
            <p class="intenp">提供最基本的符合标准的住宿、餐饮服务，包括各种主题或者类型的民宿以及特色早餐。</p>
          </li>
          <li>
            <!-- <img src="{$img_url}minsu/listicon.png"> -->
            <h3 class="intenh3">特色产品</h3>
            <p class="intenp">结合民宿主人的爱好，打造创意民宿的休闲体验活动，比如工艺品DIY、休闲娱乐中心、音乐室、沙画制作、品茶等。</p>
          </li>
          <li>
            <!-- <img src="{$img_url}minsu/listicon.png"> -->
            <h3 class="intenh3">副业产品</h3>
            <p class="intenp">提供住宿以外的餐饮、购物、休闲等配套产品，比如咖啡厅、餐厅、特产销售等。</p>
          </li>
          <li>
            <!-- <img src="{$img_url}minsu/listicon.png"> -->
            <h3 class="intenh3">旅游产品</h3>
            <p class="intenp">配合当地特点，开发相应旅游产品，增强体验性与吸引力，比如农耕体验、垂钓、温泉浴、滑草、古建筑观光、景区游览等。</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="yuanshan">
  <div class="yuanshantop">
    <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>我要发布需求</button></a>
    <p>打造具有明确产业定位、文化内涵、旅游特征和一定社区功能的综合开发体系</p>
    <p>免费咨询热线：400-879-1110</p>
  </div>
    <div class="p1200">
      <div class="typelog">
        <img src="{$img_url}minsu/typenewbg.jpg" title="民宿设计" alt="特色小镇">
        <div class="imgzhezhao">
          <div class="typenewtopbox">
            <span>民宿热度</span>
            <p>
            民宿旅游风潮兴起<br>有效释放快节奏生活下产生的<br>压力特色产品<br>创造出的商机越来越诱人<br>每一间民宿都孕育着一个新的机会<br>显示了当下民宿创业的热度
            </p>
          </div>
        </div>
        <!-- <img class="typelogo" src="{$img_url}minsu/typelogo.png" title="民宿设计"> -->
        <h3>民宿的类型</h3>
        <p>民宿是指利用自用住宅空闲房间，或者闲置的房屋，结合当地人文、自然景观、生态、环境资源及农林渔牧生产活动，以家庭副业方式经营，提供旅客乡野生活之住宿处所。现在民宿基本上从吸引特色上、建筑上、功能上来分类。</p>
        <a href="{$index_url}product/list-154-cn.html" target="_blank"><button>查看案例</button></a>
      </div>
      <div class="typety">
        <em>按吸引特色分</em>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety001.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>纯住宿型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>一般临近景区，依托周边景区的人气而发展，具有干净清爽、价格低廉等特点。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety002.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>生态景观型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="ptwo">结合自然的景观或是精心规划的人工造景，如万家灯火的夜景、满天星斗、庭园景观、草原花海或是高山大海等。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety003.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>个性体验型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="pthree">自身也是旅游吸引物，通常结合周边资源，打造温泉养生、乡村运动等特色主题，提供农业体验、生态观光多项服务。</p>
          </div>
        </div>
        <div class="typetylist nthtypetylist">
          <img src="{$img_url}minsu/typety004.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>服务制胜型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>以顾客至上，提升服务质量，争创优质服务为理念，打造亲人的民宿设计建筑。</p>
          </div>
        </div>
        <em>按建筑分</em>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety005.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>院落式的古民居</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>以院落为核心的传统民居环境，具有浓厚民俗风情特点的民宿设计。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety006.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>非院落式的古民居</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>保留传统的古民居形式，对其进行内部升级改造，打造原汁原味的古民居民宿设计形式。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety007.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>异国建筑类</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="pnine">提炼吸取各国的建筑风格，打造具有浓厚异域风情的民宿设计风格。</p>
          </div>
        </div>
        <div class="typetylist nthtypetylist">
          <img src="{$img_url}minsu/typety008.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>现代建筑类</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p>符合现代人的审美体验，以现代的设计手法，凸显低调而宁静的特点。</p>
          </div>
        </div>
        <em>按功能分</em>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety009.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>民俗体验型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="pfour">以地理人文景观为特点，为游客提供休闲度假场所。</p>
          </div>
        </div>
        <div class="typetylist">
          <img src="{$img_url}minsu/typety010.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>度假休闲型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="pfive">海滨、草原、海岛、森林、雪山、温泉等拥有独特旅游资源的地方，可以满足游客放松休闲需求的场所。</p>
          </div>
        </div>
        <div class="typetylist ">
          <img src="{$img_url}minsu/typety011.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>艺术体验型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="psix">会体现出强烈的店主风格，有较多的设计元素，酒店本身能给用户带来猎奇的心理，或能提供一些个性化产品或体验活动的地方。</p>
          </div>
        </div>
        <div class="typetylist nthtypetylist">
          <img src="{$img_url}minsu/typety012.png" title="民宿设计" alt="北京海岸设计民宿设计">
          <p>自助体验型</p>
          <div class="tymeng">
            <div class="tymenginn"></div>
            <p class="pseven">强调自助互助、实惠、不浪费，以社群生活和文化交流著称，顾客多为背包客、夫妻或者结伴而行的游客。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="devframework">
    <div class="p1200">
      <h2 class="teh2">我国民宿态势</h2>
      <div class="frame001">
        <hr>
        <div class="bigbig bigbig1">
          <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}minsu/11.jpg" title="民宿设计"></div>
            <div class="rgtbig">萌芽阶段、21世纪初期发展阶段、2010年以后拓展升级阶段</div>
          </div>
          <div class="bashcir"></div>
        </div>
          <div class="dotk dotk1">
            <div  class="dotpp dotpp1">发展阶段</div>
        </div>
          <div class="dotdot dot001"></div>
        <div class="bigbig bigbig2 cosplay">
          <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}minsu/22.jpg" title="民宿设计"></div>
            <div class="rgtbig">建筑体量小、行业力度弱、营业份额小、小众（个性化）市场</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div class="dotk dotk2">
        <div  class="dotpp dotpp2">现状特征</div>
        </div>
          <div class="dotdot dot002"></div>
        <div class="bigbig bigbig3 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}minsu/33.jpg" title="民宿设计"></div>
            <div class="rgtbig">体验慢生活的人群 —— 关注放松释压、慢节奏、休闲娱乐......</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div class="dotk dotk3">
        <div  class="dotpp dotpp3">主流市场特征</div>
        </div>
          <div class="dotdot dot003"></div>
        <div class="bigbig bigbig4 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}minsu/44.jpg" title="民宿设计"></div>
            <div class="rgtbig">中产阶级消费升级，构成了整个消费服务行业增长的核心驱动力。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div class="dotk dotk4">
        <div  class="dotpp dotpp4">关注新的消费群体</div>
        </div>
          <div class="dotdot dot004"></div>
        <div class="bigbig bigbig5 cosplay">
        <div class="verline"></div>
          <div class="topbig">
            <div class="lfbig"><img src="{$img_url}minsu/55.jpg" title="民宿设计"></div>
            <div class="rgtbig">看似黄金时代，更需理性的思考，非标住宿也应有自己的标准化。</div>
          </div>
          <div class="bashcir"></div>
        </div>
        <div class="dotk dotk5">
        <div  class="dotpp dotpp5">发展中的思考</div>
        </div>
          <div class="dotdot dot005"></div>
    </div>
  </div>
  <div class="devpqvshi">
    <h2 class="teh2">民宿将会是呈几大趋势</h2>
    <div class="devpulbox">
      <div class="devpudown">
        <hr class="decptopshu1">
        <hr class="decptopshu2">
        <hr class="decpheng1">
        <hr class="decpheng2">
        <hr class="decpheng3">
        <hr class="decpdwnshu1">
        <hr class="decpdwnshu2">
      </div>
      <ul class="devpuup">
        <li><em><img src="{$img_url}minsu/fazhantit1.png" title="民宿设计" alt="民宿设计"></em><p>随着民宿市场竞争的加剧，未来民宿设计将逐渐摆脱早期单一依托景区的发展模式，而围绕某个主题进行差异化打造。随着产业规模的扩大，民宿也必将会呈群集式发展，而不单单是某个民宿设计项目的单体的主体化问题。</p></li>
        <li><em><img src="{$img_url}minsu/fazhantit2.png" title="民宿设计" alt="民宿设计"></em><p>随着市场的成熟，大资本将会大量涌入民宿这个产业，民宿设计产品将会朝精品化、豪华化、高端化演进。这是民宿产业大洗牌的开始，也是民宿产业进入大发展的时候，也就是量变到质变的过程。</p></li>
        <li><em><img src="{$img_url}minsu/fazhantit3.png" title="民宿设计" alt="民宿设计"></em><p>从单一到多元化，是民宿设计行业发展的必然规律。未来的民宿设计将会不断延伸产业链，在住宿和早餐的基础上，拓展出向导服务、特产销售、休闲娱乐等增值服务，乃至意想不到地往跨界发展起来。</p></li>
        <li><em class="devpuemdown"><img src="{$img_url}minsu/fazhantit4.png" title="民宿设计" alt="民宿设计"></em><p>在民宿发展到一定阶段，经营者将着手打造自身的独特民宿设计品牌，并逐渐扩大经营范围，实现连锁化经营，甚至会有国际型企业进入这个行业，也是民宿设计产业品牌化的开始。</p></li>
        <li><em class="devpuemdown"><img src="{$img_url}minsu/fazhantit5.png" title="民宿设计" alt="民宿设计"></em><p>目前国内的民宿发展尚缺乏统一的标准，这个有待未来政府将出台相应的法律法规和管理细则，推进民宿开发、民宿设计产业与管理的规范化发展。</p></li>
        <li><em class="devpuemdown"><img src="{$img_url}minsu/fazhantit6.png" title="民宿设计" alt="民宿设计"></em><p>未来，不管是在民宿开发模式上，还是在推广民宿设计模式上，民宿设计都会慢慢形成自己的专业化作业，借助互联网的力量，形成线下跟线上的互动，把社会资源进行更良性的整合，为我们的出行提供各种个性化的服务。</p></li>
      </ul>
    </div>
  </div>
  <div class="why001">
    <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>我有疑问</button></a>
    <p>归本主义设计风格缔造者，以九一律为设计指针，对每个项目进行原创设计</p>
    <p>免费咨询热线：400-879-1110</p>
  </div>
   <div class="addretown">
      <div class="townover town001">
        <span class="firtownspan">河</span><span class="sectownspan">北</span><span class="thirtownspan">上谷郡精品民宿</span>
      <p>怀来县小南辛堡镇自古人杰地灵，此地秦分天下为三十六郡时，为“上谷郡”，是中原农耕文明与北方游牧文明的分界点，也是蓟城（今北京）的西北屏障。本项目占地为原村民宅基地，以现代建筑设计形式、独特的民宿设计改造了老宅，但又保留了周围生态环境，是天然的生命涵养地。在内心深处，每个人都有自己的部落格，安置着自己的一点小喜欢，或喜欢中国风特色，或醉心于淳朴的大自然，能够让一颗流离失所的心，找到归属感，这就是民宿设计的魅力所在。</p>
      <a href="{$index_url}product/253-cn.html" target="_blank"><button class="townoverfirstbtn">详情&nbsp;&nbsp;<img src="{$img_url}minsu/doublegt.png"></button></a>
      <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button class="townoversecondbtn">立即预约</button></a>
      <div class="verline01"></div>
      <div class="cir00 cir001"></div>
      <div class="cir00 cir002"></div>
      <div class="cir00 cir003"></div>
      <div class="cir00 cir004"></div>
      <img src="{$img_url}minsu/contcase1.png" title="民宿设计">
      </div>
      <div class="townover town002">
        <span class="firtownspan">北</span><span class="sectownspan">京</span><span class="thirtownspan">拾伍M小院</span>
      <p>拾伍M小院位于北京顺义，基于已有的院落格局，在维持原本的房屋结构下，通过民宿设计细节上的调整，改变院落的整体风格利用微地形起伏将室外设计成日式庭院的模样，弯弯曲曲的地面采用石板铺就，就连绿色生机的草坪也在此刻散发着自然味道。屋顶利用光影效果进行采光，餐厅采用通透的玻璃将室内外的景色融为一体，从地面生长到二楼的大树尽可能延伸视线，门口错落有致的窗户在保证通风的同时增强隐私感。优美的居住环境，简易的民宿空间设计，即使没有奢侈的装饰，生活也可以变得惊艳质感。</p>
      <a href="{$index_url}product/215-cn.html" target="_blank"><button class="townoverfirstbtn">详情&nbsp;&nbsp;<img src="{$img_url}minsu/doublegt.png"></button></a>
      <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button class="townoversecondbtn">立即预约</button></a>
      <div class="verline01"></div>
      <div class="cir00 cir001"></div>
      <div class="cir00 cir002"></div>
      <div class="cir00 cir003"></div>
      <div class="cir00 cir004"></div>
      <img src="{$img_url}minsu/contcase2.png" title="民宿设计">
      </div>
      <div class="townover town003">
        <span class="firtownspan">河</span><span class="sectownspan">北</span><span class="thirtownspan">杨家大院</span>
      <p>杨家大院是一家集住宿与餐饮为一体的休闲场所，在遵循归本主义的民宿设计理念下将欧式的高贵美与中式的古典美在此相融合，其中1200㎡ 的现代欧式别墅奢华大气，3500㎡四合院典雅精致。看惯了高楼林立的城市以及琳琅满目的橱窗，不如推开那扇垂花门走进一个如诗如画、如痴如醉的世外雅境吧！在这里，放下所有烦恼，看庭前花开花落，望窗外云卷云舒。</p>
      <a href="http://www.bjhaian.com/product/showproduct.php?id=40" target="_blank"><button class="townoverfirstbtn">详情&nbsp;&nbsp;<img src="{$img_url}minsu/doublegt.png"></button></a>
      <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button class="townoversecondbtn">立即预约</button></a>
      <div class="verline01"></div>
      <div class="cir00 cir001"></div>
      <div class="cir00 cir002"></div>
      <div class="cir00 cir003"></div>
      <div class="cir00 cir004"></div>
      <img src="{$img_url}minsu/contcase3.png" title="民宿设计">
      </div>
    <div class="townbtm">
      <div class="verline001"></div>
    </div>
   </div>
    <div class="why001">
    <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>我要发布需求</button></a>
    <p>海岸涵盖文旅产业设计、创业园区规划、文创园设计、酒店设计、乡村振兴规划、商业体、咖啡馆、餐饮、办公空间、民宿设计等，海岸的客户群涵盖了业界众多知名企业以及一大批极具实力的财团</p>
    <p>免费咨询热线：400-879-1110</p>
  </div>
    <div class="haianfaqi">
    <div class="faqileft">
      <!-- < img src="" alt="北京海岸设计"> -->
      <div class="borderlineshow"></div>
      <div class="haianintroduced">
        <em>海岸设计</em>
        <span>haian design</span>
        <p>北京海岸设计由郭准先生创立于1999年<br>
        是一家以归本主义设计理论为指导<br>
        专注于咖啡厅装修设计、施工、监理一体化服务的专业化企业<br>
        经过十余年漫长设计岁月的洗礼、积累与沉淀<br>
        海岸创始人郭准先生创立了属于海岸独有的设计风格<br>
        归本主义<br>
        海岸将致力于把归本主义流派与学说发扬光大<br>
        为人类的生活环境增加一道不同的风景<br>
        也籍此赢得客户、造福员工、发展海岸</p >
      </div>
    </div>
    <ul class="faqiright">
      <li>
        <i><img src="{$img_url}minsu/faqibgguozhun.png" title="民宿设计" alt="北京海岸设计郭准"></i>
        <p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人<br>
        1999年创立北京海岸<br>
        他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的<br>
        因为目的不在于追求耀眼的视觉效果<br>
        而是追求表现生活在其中人的活动本身
        </p >
      </li>
      <li>
        <i><img src="{$img_url}minsu/faqibgguiben.png" title="民宿设计" alt="北京海岸设计归本主义"></i>
        <p>  归本主义是华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、<br>
        发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻<br>
        在生活体验中<br>
        不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考<br>
        </p >
      </li>
    </ul>
  </div>
<!--
EOT;
require_once template('modular/news_specialTop_F9');
echo <<<EOT
-->
  <div class="chain03">
    <div class="walkalong">
      <h2 class="tehnew">专业的设计服务管家</h2>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-fuwu1"></i><p>为客户提供<span> 一站式全程服务</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-hangyeicon"></i><p>行业经验<span>从1999年成立服务至今</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-jingyantubiao"></i><p>经验丰富<span>280余位专职行业精英</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-zhouqi"></i><p>设计周期<span>保质保量高效率出图</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-qian"></i><p>预算合理<br/><span>开创有新意<br/>节约成本的实现方式 </span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-xiangyingkuaisu"></i><p>快速响应<span>提交需求立即回电</span></p></div></div>
    </div>
    <a href="javascript:;" onclick="jQuery('.boxbig').show()""><div class="redborbtn">
      懒得看了？直接找设计师吧
      <!--<hr class="hrtopright">
      <hr class="hrtopleft">
      <hr class="hrdownright">
      <hr class="hrdownleft">
      <hr class="hrright">
      <hr class="hrleft">-->
    </div></a>
  </div>
    <!-- 大书页 -->
 <div class="boxcont3"> 
 <h2>海岸服务案例</h2>              
  <div class="cont3">
    <div class="cont3btnbox">
            <img class="ct3lft" src="{$img_url}minsu/btnleft.png" alt="北京海岸设计案例切换"  title="民宿设计"/>
     </div>
     <!-- case1 of beginning -->
                 <div class="cont3mainbox">
                        <div class="ct3maincasp">
                              <img src="{$img_url}minsu/liuduyard.jpg" alt="海岸设计案例"  title="民宿设计"/>
                        </div>
                        <div class="ct3maindetails"><a href="{$index_url}product/79-cn.html" target="_blank">详 &nbsp;情</a>
                        </div>
                        <div class="ct3mainexplain">
                              <div class="c3casetitle"><h2>六度别院</h2><i></i></div>
                              <div class="c3casemiaoshu">
                                  本项目地处云南西双版纳告庄西双景<br/>
                                  坐拥360°的自然美景<br/>
                                  为了营造身处自然的感觉<br/>
                                  在改造前保留了一些自然树木<br/>
                                  通过原始的设计材料将自然与家融为一体<br/>
                                  最终诞生了如今这个质朴、幽静、精致的六度别院<br/>
                              </div>
                              <p>                                     
                                  项目地址：云南西双版纳<br/>
                                  使用面积：1000㎡<br/>
                                  项目类型：民宿景观设计<br/>
                                  主创团队：北京海岸设计<br/>
                                  总设计师：郭准<br/>
                                  设计风格：归本主义<br/>
                              <p>
                        </div>
                 </div>
                 <!-- case1 of ending -->
                 <!-- case2 of beginning -->
   <div class="cont3mainbox clsplay">
            <div class="ct3maincasp">
                  <img src="{$img_url}minsu/shanggujun.jpg" alt="海岸设计案例"  title="民宿设计"/>
            </div>
            <div class="ct3maindetails"><a href="{$index_url}product/253-cn.html" target="_blank">
                  详 &nbsp;情
            </a></div>
            <div class="ct3mainexplain">
                  <div class="c3casetitle"><h2>上谷郡</h2><i></i></div>
                  <div class="c3casemiaoshu">                                  
                      本项目占地为原村民宅基地<br/>
                      以现代建筑设计形式改造了老宅<br/>
                      但又保留了周围生态环境<br/>
                      是天然的生命涵养地<br/>
                      在这里简单的生活不再是奢望<br/>
                      出则喧嚣拥挤的闹市<br/>
                      入则安逸静谧的隐居<br/>
                      这是生活的另一种味道<br/>
                  </div>
                  <p>                                     
                      项目地址：河北张家口<br/>
                      使用面积：600㎡<br/>
                      项目类型：民宿空间设计<br/>
                      主创团队：北京海岸设计<br/>
                      总设计师：郭准先生<br/>
                      设计理念：归本主义<br/>
                  </p>
            </div>
     </div>
     <!-- case2 of ending -->
      <!-- case3 of beginning -->
     <div class="cont3mainbox clsplay">
            <div class="ct3maincasp">
                  <img src="{$img_url}minsu/fifteenM.jpg" alt="海岸设计案例"  title="民宿设计"/>
            </div>
            <div class="ct3maindetails"><a href="{$index_url}product/215-cn.html" target="_blank">
                  详 &nbsp;情
            </a></div>
            <div class="ct3mainexplain">
                  <div class="c3casetitle"><h2> 拾伍M小院</h2><i></i></div>
                  <div class="c3casemiaoshu">                                
                      本项目位于北京顺义，<br/>
                      原本是一个普普通通的住宅<br/>
                      基于已有的院落格局<br/>
                      利用微地形起伏将室外设计成日式庭院的模样<br/>
                      在维持原本的房屋结构下<br/>
                      通过细节的调整改变院落的整体风格<br/>
                      传统小院与时尚设计在此相互融合<br/>
                      一个惊艳了时光一个温柔了岁月<br/>
                  </div>
                  <p>                                     
                      项目地址：北京顺义<br/>
                      使用面积：428㎡<br/>
                      项目类型：民宿设计<br/>
                      主创团队：北京海岸设计<br/>
                      总设计师：郭准先生<br/>
                      设计风格：归本主义<br/>
                  </p>
            </div>
     </div>
     <!-- case3 of ending -->
      <!-- case4 of beginning -->
     <div class="cont3mainbox clsplay">
            <div class="ct3maincasp">
                  <img src="{$img_url}minsu/wushanyard.jpg" alt="海岸设计案例"  title="民宿设计"/>
            </div>
            <div class="ct3maindetails"><a href="{$index_url}product/369-cn.html" target="_blank">
                  详 &nbsp;情
            </a></div>
            <div class="ct3mainexplain">
                  <div class="c3casetitle"><h2>五山别院</h2><i></i></div>
                  <div class="c3casemiaoshu">                                  
                      项目地处四川攀枝花<br/>
                      一切风格的呈现都是为了自然流露<br/>
                      深刻挖掘巴蜀山水自然特色<br/>
                      将自然赋予的美景渗透到室内外每个细节中<br/>
                      演绎了一处如虹溪诺雅般的僻静放逐之境<br/>
                      五山别院的魅力一言难尽<br/>
                      精致优雅的生活原来就在当下<br/>
                      
                  </div>
                  <p>                                     
                      项目地址：四川攀枝花<br/>
                      使用面积：110亩<br/>
                      项目类型：民宿设计<br/>
                      主创团队：北京海岸设计<br/>
                      总设计师：郭准先生<br/>
                      设计风格：归本主义<br/>
                  </p>
            </div>
     </div>
     <!-- case4 of ending -->
      <!-- case5 of beginning -->
     <div class="cont3mainbox clsplay">
            <div class="ct3maincasp">
                  <img src="{$img_url}minsu/yangjiacourtyard.jpg" alt="海岸设计案例"  title="民宿设计"/>
            </div>
            <div class="ct3maindetails"><a href="http://www.bjhaian.com/product/showproduct.php?id=40" target="_blank">
                  详 &nbsp;情
            </a></div>
            <div class="ct3mainexplain">
                  <div class="c3casetitle"><h2>杨家大院</h2><i></i></div>
                  <div class="c3casemiaoshu">                                
                      淡淡的色彩洗练的线条<br/>
                      别有洞天的精巧布局<br/>
                      曲径通幽处<br/>
                      走入庭院白墙黛瓦与绿植遥相辉映<br/>
                      增添些许自然朦胧的禅意<br/>
                      从传统中式元素中提炼出来的神韵和精华<br/>
                      唤醒了人们心中的院落情结<br/>                                 
                  </div>
                  <p>                                     
                      项目地址：河北香河<br/> 
                      使用面积：40亩<br/>
                      项目类型：民宿景观设计<br/> 
                      主创团队：北京海岸设计<br/>
                      总设计师：郭准先生<br/>
                      设计风格：归本主义<br/>
                  </p>
            </div>
     </div>
      <div class="cont3btnbox">
            <img class="ct3rgt" src="{$img_url}minsu/btnrgt.png" alt="北京海岸设计案例切换"  title="民宿设计"/>
     </div>
  </div>
</div>
    <footer>

    <hr class="footerhr">
        <div class="footertop">
          <div class="nav">
            <!--   <div class="lfnavline"></div> -->
              <ul class="footul">
                <li>快速导航</li>
                <li>海岸设计</li>
              </ul>
            <!--   <div class="rgtnavline"></div> -->
          </div>
          <ul class="menuul">
            <li><a href="{$index_url}haian/188-cn.html" target="_blank">咖啡厅设计</a></li>
            <li><a href="{$index_url}haian/193-cn.html" target="_blank">酒店设计</a></li>
            <li><a href="{$index_url}haian/191-cn.html" target="_blank">餐厅设计</a></li>
            <li><a href="{$index_url}haian/196-cn.html" target="_blank">田园综合体设计</a></li>
            <li><a href="{$index_url}haian/195-cn.html" target="_blank">特色小镇设计</a></li>
            <li><a href="{$index_url}haian/202-cn.html" target="_blank">软装设计</a></li>
            <li><a href="{$index_url}haian/206-cn.html" target="_blank">商业综合体设计</a></li>
            <li><a href="{$index_url}haian/208-cn.html" target="_blank">商场设计</a></li>
            <li><a href="{$index_url}haian/194-cn.html" target="_blank">民宿设计</a></li>
            <li><a href="{$index_url}haian/189-cn.html" target="_blank">网咖设计</a></li>
            <li><a href="{$index_url}product/list-177-cn.html" target="_blank">酒吧设计</a></li>
            <li><a href="{$index_url}haian/190-cn.html" target="_blank">会所设计</a></li>
            <li><a href="{$index_url}haian/199-cn.html" target="_blank">书店设计</a></li>
            <li><a href="{$index_url}product/list-114-cn.html" target="_blank">文旅设计</a></li>
            <li><a href="{$index_url}haian/192-cn.html" target="_blank">集装箱设计</a></li>
            <li><a href="{$index_url}haian/210-cn.html" target="_blank">园林设计</a></li>
            <li><a href="{$index_url}haian/204-cn.html" target="_blank">品牌VI设计</a></li>
            <li><a href="{$index_url}product/list-114-cn.html" target="_blank">文创园设计</a></li>
          </ul>
          <ul class="menuul clsply">
            <li><a><strong>民宿酒店设计</strong></a></li>
            <li><a><strong>民宿民居设计</strong></a></li>
            <li><a><strong>生态景观设计</strong></a></li>
            <li><a><strong>民宿文旅设计</strong></a></li>
            <li><a><strong>特色民宿设计</strong></a></li>
          </ul>
          <div class="footlf">
              <img src="{$img_url}minsu/haianfooterlogo.png" alt="海岸九九">
              <p>
                Web：www.haianzhuangshi.com<br/>
                E-mail：haianzhuangshi@sina.com<br/>
                Address：北京市朝阳区北汽双井文创园3号楼E座108车间
              </p>
          </div>
          <div class="footmid">
              <div class="erweimod">
                <img src="{$img_url}minsu/erweima2.jpg"/>
                <p>扫一扫，免费通话</p>
              </div>
              <div class="erweimod">
                <img src="{$img_url}minsu/erweima1.jpg"/>
                <p>微信公众号</p>
              </div>
          </div>
          <div class="footrgt">
            <img src="{$img_url}minsu/phoneicon.png" alt="联系我们">
            <span>400-879-1110</span>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
          </div>
       
    </div>    
      <div class="footp">
            <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 京ICP备13049424号<br/>
            海岸声明：本站内容 图像资料版权均属「北京海岸设计」任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p>
            <div class="cnzz">{$lang_foot_cnzz}</div>
    </div>  
    </footer>
  <script>
  var _hmt = _hmt || [];
  (function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
  })();
  </script>
  <div class="slide_order"></div>
  <div class="slide_fo_a">
    <div class="slide_c_a">
      <div class="slide_close"></div>
      <div class="center">
        <div class="slide_jt updown"></div>
        <div class="top_content">
          <span>归本主义风格</span>
          <span>打造最美好的设计</span>
        </div>
        <div class="top_left_img"></div>
      </div>
    </div>
    <div class="slide_f_a">
      <div class="center color_f">
<!--
EOT;
require_once template('feed/feedback_new_Slide');
$form_slide = metlabel_form_slide(166);
echo <<<EOT
-->      
        {$form_slide}             
      </div>
    </div>
  </div>
<script src="{$img_url}js/slide_new.js" type="text/javascript"></script>   
<script type="text/javascript" src="{$img_url}fStyle/openwin.js">        
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
          
<!--
EOT;
 
?>