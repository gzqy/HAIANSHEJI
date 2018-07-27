  <!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':''; 
require_once template('feed/form_l');   
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" href="{$img_url}css/xc.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_sySc.css"> 

 <div class="faer_top" >
            <div class="fixednav">
                 <a href="" title="{$met_webname}"></a>  
            </div>
</div>
<div style="display:none">
 { $met_foot_txt}
</div>   
 
<body>
  <header>
    <div class="banner">
      <div class="banntit"><p>规划设计</p></div>
    </div>
    <div class="bannblue"><div class="bannin"><span>乡村振兴规划设计</span><span><i class="fontdot"></i>
    乡村振兴战略规划</span><span><i class="fontdot"></i>美丽乡村建设规划</span><span><i class="fontdot">  
    </i>乡村振兴计划实施</span><span><i class="fontdot"></i>乡村旅游规划设计</span><span><i class="fontdot"></i>乡村文旅规划设计</span>
    <span><i class="fontdot"></i>田园综合体规划设计</span><span><i class="fontdot"></i>新农村建设规划设计</span></div></div>
    <div class="bannp"><hr/><p>北京海岸设计创立于1999年，精英设计师300人组成</p> <hr/>
    <hr/><p>以归本主义为核心设计理念，对每个项目进行原创设计 <hr/></p></div>
    <span class="btnbgbig"></span>
    <span class="btnbgsml"></span>
     <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button>立即预约</button> </a>
    
  </header>

  <div class="zxclassification">
    <div class="classifcationtit">
      <em>乡村振兴战略</em>
      <span>RURAL REVITALIZATION OF  CLASSIFICATION</span>
    </div>
    <div class="classifcatont">
      <ul class="classcontlft">
        <li class="colrd8d5">乡村度假<br>规划</li>
        <li>乡村旅游<br>规划</li>
        <li>美丽乡村<br>打造</li>
        <li class="colrd8d5">田园养老<br>规划</li>
      </ul>
      <ul class="classcontctn">
        <img src="{$img_url}xc/classcontctnimg.jpg">
      </ul>
      <ul class="classcontrgt">
        <li class="colrd8d5">乡村景观<br>规划</li>
        <li>文创农业<br>规划</li>
        <li>乡村综合体<br>规划</li>
        <li class="colrd8d5">田园综合体<br>规划</li>
      </ul>
    </div>
  </div>
  
  <!-- 乡村振兴战略原则 -->
  <div class="zxrevitalizationbox">
    <em class="revitalizationtit">
      乡村振兴战略原则
    </em>
    <ul class="revitalizationul">
      <li>
        <img src="{$img_url}xc/revitalization01.jpg" alt="">
        <div class="revitaltop">
          <i>01</i>
          <div class="likehrbox"></div>
          <span>政府引导，主体多元化</span>
        </div>
        <div class="revitaldown">
          <p>统筹协调社会各方力量共同参与，建立多层次、多渠道协同推进机制</p>
          <hr class="revitalhtop">
          <hr class="revitalhdon">
          <hr class="revitalhlft">
          <hr class="revitalhrgt">
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/revitalization02.jpg" alt="">
        <div class="revitaltop">
          <i>02</i>
          <div class="likehrbox"></div>
          <span>以农业为主，利益均衡化</span>
        </div>
        <div class="revitaldown">
          <p>以农民首要受益主题，实现乡村旅游业参与主体的利益均衡</p>
          <hr class="revitalhtop">
          <hr class="revitalhdon">
          <hr class="revitalhlft">
          <hr class="revitalhrgt">
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/revitalization03.jpg" alt="">
        <div class="revitaltop">
          <i>03</i>
          <div class="likehrbox"></div>
          <span>因地制宜，产品特色化</span>
        </div>
        <div class="revitaldown">
          <p>优化区域布局，加强分类指导，促进个性化发展，积极培育有浓郁地方特色的乡村旅游产品</p>
          <hr class="revitalhtop">
          <hr class="revitalhdon">
          <hr class="revitalhlft">
          <hr class="revitalhrgt">
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/revitalization04.jpg" alt="">
        <div class="revitaltop">
          <i>04</i>
          <div class="likehrbox"></div>
          <span>市场导向，经营产业化</span>
        </div>
        <div class="revitaldown">
          <p>充分发挥龙头带动作用，促进各类经营主体规模化发展，规范化管理和网络化运营</p>
          <hr class="revitalhtop">
          <hr class="revitalhdon">
          <hr class="revitalhlft">
          <hr class="revitalhrgt">
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/revitalization05.jpg" alt="">
        <div class="revitaltop">
          <i>05</i>
          <div class="likehrbox"></div>
          <span>统筹发展，城乡一体化</span>
        </div>
        <div class="revitaldown">
          <p>统筹城乡旅游开发与消费，形成城乡之间互用资源、互动发展的良好格局</p>
          <hr class="revitalhtop">
          <hr class="revitalhdon">
          <hr class="revitalhlft">
          <hr class="revitalhrgt">
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/revitalization06.jpg" alt="">
        <div class="revitaltop">
          <i>06</i>
          <div class="likehrbox"></div>
          <span>保护生态，发展持续化</span>
        </div>
        <div class="revitaldown">
          <p>坚持开发与保护并重，避免急功近利、盲目发展</p>
          <hr class="revitalhtop">
          <hr class="revitalhdon">
          <hr class="revitalhlft">
          <hr class="revitalhrgt">
        </div>
      </li>
    </ul>
    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="revitalbtn">提交需求</button></a>
  </div>

  <!-- 乡村振兴类型 -->
  <div class="zxtypebox">
    <div class="zxtypetit">
      <em>乡村振兴规划</em>
      <span>RURAL REVITALIZATION OF TYPE</span>
    </div>
    <ul class="zxtypebont">
      <li>
        <img src="{$img_url}xc/typebg01.png"/>
        <span>观光型乡村</span>
      </li>
      <li>
        <img src="{$img_url}xc/typebg02.png"/>
        <span>休闲型乡村</span>
      </li>
      <li>
        <img src="{$img_url}xc/typebg03.png"/>
        <span>度假型乡村</span>
      </li>
      <li>
        <img src="{$img_url}xc/typebg04.png"/>
        <span>体验型乡村</span>
      </li>
      <li>
        <img src="{$img_url}xc/typebg05.png"/>
        <span>购物型乡村</span>
      </li>
      <li>
        <img src="{$img_url}xc/typebg06.png"/>
        <span>综合性乡村</span>
      </li>
    </ul>
  </div>

  <!-- 乡村振兴运营模式 -->
  <div class="zxpatternbox">
    <div class="zxtypetit">
      <em>乡村振兴运营模式</em>
      <span>RURAL REVITALIZATION OF TYPE</span>
    </div>
    <ul class="zxpatternbont">
      <li>
        <img src="{$img_url}xc/patternbg01.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon01.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">产业发展模式</em>
        <div class="patterlidown posiabsocenter">
          <p>主要针对东部沿海等经济相对发达地区的乡村，其特点是产业优势和特色明显，产业化水平高。
规划路径：初步构建美丽乡村旅游产业链，针对每一个乡村特色，衍伸特色休闲农业产业，加速产业带动效应。</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">立即预约</button></a>
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/patternbg02.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon02.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">生态保护型</em>
        <div class="patterlidown posiabsocenter">
          <p>生态保护特点是自然条件优越，水资源和森林资源丰富，具有传统的田园风光和乡村特色，生态环境优势明显，把生态环境优势变为经济优势的潜力大，
适宜发展生态旅游
规划路径：构建旅游引导的农业生态示范区。</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">立即预约</button></a>
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/patternbg03.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon03.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">城郊集约性</em>
        <div class="patterlidown posiabsocenter">
          <p>城市郊区特点是经济条件较好，公共设施和基础设施较为完善，农业集约化、规模化经营水平高，土地产出率高，农民收入水平相对较高。
规划路径：在一、二线城市周边规划以品质乡村旅游为导向的新型城镇化和新农村社区建设示范项目</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">立即预约</button></a>
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/patternbg04.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon04.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">资源整合性</em>
        <div class="patterlidown posiabsocenter">
          <p>主要在沿海和水网地区的传统渔区，或者在我国牧区半牧区县(旗、市)，或者其他农业资源发达地区，产业以渔业或者牧业，或其他农业资源为主。
规划路径：构建休闲农业综合体。</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">规划设计</button></a>
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/patternbg05.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon05.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">高效农业性</em>
        <div class="patterlidown posiabsocenter">
          <p>主要在我国的农业主产区，其特点是以发展农业作物生产为主，农田水利等农业基础设施相对完善，农产品商品化率和农业机械化水平高，人均耕地资源丰富，农作物秸秆产量大。
规划路径：建立现代都市型生态科技农业产业示范园。</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">立即预约</button></a>
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/patternbg06.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon06.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">休闲旅游型</em>
        <div class="patterlidown posiabsocenter">
          <p>休闲旅游型美丽乡村模式主要是在适宜发展乡村旅游的地区，其特点是旅游资源丰富，住宿、餐饮、休闲娱乐设施完善齐备，交通便捷，距离城市较近，适合休闲度假，发展乡村旅游潜力大。</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">立即预约</button></a>
        </div>
      </li>
      <li>
        <img src="{$img_url}xc/patternbg07.jpg" alt="">
        <i class="posiabsocenter"><img src="{$img_url}xc/patternicon07.png" alt=""></i>
        <span class="posiabsocenter"></span>
        <em class="posiabsocenter">文化传承型</em>
        <div class="patterlidown posiabsocenter">
          <p>是在具有特殊人文景观，包括古村落、古建筑、古民居以及传统文化的地区，其特点是乡村文化资源丰富，具有优秀民俗文化以及非物质文化，文化展示和传承的潜力大。
规划路径：注重村落整体保护和传统建筑保护，创建文化传承型乡村。</p>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="patternbtn">立即预约</button></a>
        </div>
      </li>
    </ul>
   <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"> <button class="patterndownbtn">立即预约</button></a>
  </div>


  <!-- 乡村振兴规划体系 -->
  <div class="xcsystembox">
    <div class="zxtypetit colorwhite">
      <em>乡村振兴计划</em>
      <span>RURAL REVITALIZATION OF THE PLANNING SYSTEM</span>
    </div>
    <div class="xcsystemcenter">
      <ul>
        <li>
          <em>明确一个定位</em>
          <span><i></i>以旅游为引导的多种产业融合开发建设</span>
          <span><i></i>核心问题是通过系统操作提升本区域土地的综合经济价值和社会价值</span>
        </li>
        <li>
          <em>两个难题</em>
          <span><i></i>土地指标：通过科学客观的方法论导出合理的建设指标，通过GIS分析导出适建性指标，通过政府协调相应的土地建设指标。</span>
          <span><i></i>基础建设水、电、道路......</span>
        </li>
        <li>
          <em>解决三个问题</em>
          <span><i></i>合理产业结构支撑的系列产品体系设计硬件开发建设指导思想</span>
          <span><i></i>全面系统的开发运营模式设计</span>
          <span><i></i>合理产业结构支撑的系列产品体系设计</span>
        </li>   
        <li>
          <em>统筹四个维度</em>
          <span><i></i>文化维度:泛养生文化</span>
          <span><i></i>产业维度、社会维度</span>
          <span><i></i>生态维度：生态文明、生态系统</span>
        </li>
      </ul>
      <!-- 上部分hr -->
      <hr class="systophr systophr01">
      <hr class="systophr systophr02">
      <hr class="systophr systophr03">
      <hr class="systophr systophr04">
      <!-- 中间竖线hr -->
      <hr class="sysshuhr sysshuhr01">
      <hr class="sysshuhr sysshuhr02">
      <hr class="sysshuhr sysshuhr03">
      <hr class="sysshuhr sysshuhr03">
      <!-- 底部横线hr -->
      <hr class="sysbothr sysbothr01">
      <hr class="sysbothr sysbothr02">
      <hr class="sysbothr sysbothr03">
      <hr class="sysbothr sysbothr04">
    </div>
    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="systembtn">立即预约</button></a>
  </div>

  <!-- 海岸介绍板块 -->
  <div class="haianintroducebox">
    <div class="zxtypetitbig colordeepgreen">
      <em>海岸介绍</em>
      <span>THE COAST IS INTRODUCED</span>
    </div>
    <img src="{$img_url}xc/guozhunpic.jpg" alt="">
    <div class="introdutxtcent">
      <em>海岸设计</em>
      <span>关<br>于<br>我<br>们</span>
      <p>北京海岸设计由郭准先生创立于1999年,是一家以归本主义设计理论为指导,专注于咖啡厅装修设计、施工、监理一体化服务的专业化企业.经过十余年漫长设计岁月的洗礼、积累与沉淀,海岸创始人郭准先生创立了属于海岸独有的设计风格——归本主义。海岸将致力于把归本主义流派与学说发扬光大，为人类的生活环境增加一道不同的风景，也籍此赢得客户、造福员工、发展海岸。</p>
      <a href="http://www.haianzhuangshi.com/about/112-cn.html"  target="_blank"><button>查看更多&nbsp;&nbsp;&nbsp;&nbsp;<i><img src="{$img_url}xc/chakantriangle.png" alt=""></i></button></a>
    </div>
  </div>

  <!-- 海岸服务案例 -->
  <div class="xcservicecasebox">
      <em class="revitalizationtit colordeepgreen">
        海岸乡村振兴战略计划案例
      </em>
             <div id="wrapfirst">
              <!-- <div class="tabfirstbox"> -->
                <div id="tabfirst">
                  <li class="on posiabsocenter">
                      <p>项目名称：五山别院<br>
                      项目地址：四川攀枝花<br>
                      项目类型：乡村振兴计划<br>
                      使用面积：110亩<br></p>
                  </li>
                  <li class="posiabsocenter">地址 : 河北<br>
            项目分类 : 乡村振兴计划<br>
            设计面积 : 1054.11亩
                  </li>
                  <li class="posiabsocenter">地址 : 云南省文山壮族苗族自治州<br>
            项目类型：乡村振兴计划<br>
            设计面积 : 50亩
                  </li>
                  <li class="posiabsocenter">项目名称：塞北小镇<br>
            项目地址：河北张家口<br>
            项目类型：乡村振兴计划<br>
            项目面积：约300平方公里
                  </li>
                  <li class='posiabsocenter'>
                    地址 : 山西<br>
                        项目类型：乡村振兴计划<br>
                        设计面积 : 5平方公里<br>
            设计师：郭准先生<br>
          </li>
                </div>
              <!-- </div> -->
                <div id='picfirst'>
                  <li class='l1'><img src="{$img_url}xc/anlicase1box05.jpg" alt="" /></li>
                  <li class='l2'><img src="{$img_url}xc/anlicase1box04.png" alt="" /></li>
                  <li class='l3'><img src="{$img_url}xc/anlicase1box03.png" alt="" /></li>
                  <li class='l9'><img src="{$img_url}xc/anlicase1box02.png" alt="" /></li>
                  <li class='l0'><img src="{$img_url}xc/anlicase1box01.png" alt="" /></li>
                </div>
                <div id="tabplace">
                    <li class="on posiabsocenter">
                        <span>四川</span>
                    </li>
                    <li class="posiabsocenter">
                        <span>河北</span>
                    </li>
                    <li class="posiabsocenter">
                        <span>云南省</span>
                    </li>
                    <li class="posiabsocenter">
                        <span>河北张家口</span>
                    </li>
                    <li class="posiabsocenter">
                        <span>山西</span>
                    </li>
                </div>
                <div id="btnfirst">
                  <div id="leftfirst"></div>
                  <div id="rightfirst"></div>
                </div>
              </div>  
              <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="haianintroducebtn">立即预约</button></a>
  </div>



  <!-- 乡村振兴的解决办法 -->
  <div class="xcsolutionbox">
    <div class="zxtypetit colorwhite">
      <em>乡村振兴的解决方法</em>
      <span>实现就地城镇化，建设美丽乡村，建设农民幸福生活美好新家园！</span>
    </div>
    <ul class="solutionul">
      <li>
        <em>农业</em>
        <span>相互关系</span>
        <p class="soluonp posiabsocenter">1.引入旅游产业，增强产业活力使农业多产化<br><br>2.为旅游拓展新领域</p> 
        <button class="solulibtn posiabsocenter">解决办法</button>        
      </li>      
      <li>
        <em>农民</em>
        <span>相互关系</span>
        <p class="soluonp posiabsocenter">1.多方增加农民收入及就业渠道使农民市民化<br><br>2.为旅游提供服务劳动力</p> 
        <button class="solulibtn posiabsocenter">解决办法</button>       
      </li>
      <li>
        <em>农村</em>
        <span>相互关系</span>
        <p class="soluonp posiabsocenter">1.改善农村条件，使农村景区化<br><br>2.为旅游提供开展空间</p> 
        <button class="solulibtn posiabsocenter">解决办法</button>        
      </li>
    </ul>
    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="soludownbtn">立即预约</button></a>
  </div>

  <!-- 乡村振兴构建要素 -->
  <div class="xcbuildelementsbox">
    <div class="zxtypetit colordeepgreen">
      <em>乡村振兴构建要素</em>
      <span>RURAL REVITALIZATION OF BUILDING ELEMENTS</span>
    </div>
    <ul class="buildelemtsul">
      <li>
        <i><img src="{$img_url}xc/buildelemtsicon01.png" alt=""></i>
        <span>文旅</span>
        <p>提升农业综合生产能力，发展现代农业促进产业<br>融合，提高农业综合效益和现代化水平，包含“<br>现代农业生产型产业园”、“休闲农业”<br>
“社区支持农业”<br>
三重含义。</p>
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="buildelemtslibtn">立即预约</button></a>
      </li>
      <li>
        <i><img src="{$img_url}xc/buildelemtsicon02.png" alt=""></i>
        <span>农业</span>
        <p>保持农村田园风光，打造符合生态的<br>农业旅游产品+度假产品，需考虑功<br>能配搭规模配搭、空间配搭，丰富文<br>化生活内容，多样业态规划，形成旅<br>游度假目的地。</p>
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="buildelemtslibtn middlegreenlinebtn">立即预约</button></a>
      </li>
      <li>
        <i><img src="{$img_url}xc/buildelemtsicon03.png" alt=""></i>
        <span>地产</span>
        <p>提升农业综合生产能力，发展现代农业促进产业<br>融合，提高农业综合效益和现代化水平，包含“<br>现代农业生产型产业园”、“休闲农业”<br>
“社区支持农业”<br>
三重含义。</p>
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="buildelemtslibtn">立即预约</button></a>
      </li>
    </ul>
  </div>
  
  <!-- 关于海岸服务 -->
  <div class="xcservicebox">
    <div class="zxtypetit colordeepgreen">
      <em>乡村振兴构建要素</em>
      <span>RURAL REVITALIZATION OF BUILDING ELEMENTS</span>
    </div>
    <div class="garden5">
    <!-- <div class="main markdown"><i class="icon iconfont icon-shendurz"></i></div> -->
                <ul class="cont2ulbox">
                    <li><img src="{$img_url}xc/c2li1.png" alt="" /><em>为客户提供</em><span>一站式全程服务</span></li>
                    <li><img src="{$img_url}xc/b5icon2b.png" alt="" /><em>客户涵盖</em><span>业界众多知名企业</span></li>
                    <li><img src="{$img_url}xc/c2li3.png" alt="" /><em>经验丰富</em><span>280余位专职行业精英</span></li>
                    <li><img src="{$img_url}xc/b5icon4b.png" alt="" /><em>设计周期短</em><span>保质保量高效率出图</span></li>
                    <li><img src="{$img_url}xc/c2li4.png" alt="" /><em>每年完成</em><span>四百余项目</span></li>
                    <li><img src="{$img_url}xc/c2li2.png" alt="" /><em>服务涵盖</em><span>建筑外观、室内设计等</span></li>
                    <li><img src="{$img_url}xc/b5icon7b.png" alt="" /><em>行业经验</em><span>从1999年成立服务至今</span></li>
                    <li><img src="{$img_url}xc/b5icon8b.png" alt="" /><em>服务至今</em><span>对每个项目进行原创设计</span></li>
                    <li><img src="{$img_url}xc/b5icon9b.png" alt="" /><em>快速响应</em><span>提交需求立即回电</span></li>
                    <li><img src="{$img_url}xc/b5icon10b.png" alt="" /><em>预算合理</em><span>开创有新意节约成本的实现方式</span></li>
                </ul>
                <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button>立即预约</button></a>
      </div>
  </div>
  
  <!-- 案例切换展示区1 -->
  <div class="boxcont7">
                 <div id="wrap">

                    <div id="tab">
                      <li class='on'>
                            <h3>隐逸水镇</h3>
                            <div class="b7duoline"> 地址 : 云南省文山壮族苗族自治州<br>
                          项目类型：乡村振兴计划<br>
                          设计面积 : 50亩
                            </div>
                            <p>
                          隐逸水镇位于云南省文山州丘北县，由北京海岸倾力打造。整个水镇是集水上乐园、民宿、餐饮、婚礼、野宿于一体的旅行圣地。
小溪自上而下流淌，不经意间将安静区和喧闹区分割开来，玩耍与休息在这里互不干扰，如此甚好。
                            </p>
                      </li>
                      <li>
                            <h3>番茄小镇</h3>
                            <div class="b7duoline"> 地址 : 山西<br>
                                  项目类型：乡村振兴计划<br>
                                  设计面积 : 5平方公里<br>
                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            夏去秋至，果实开始丰满，微风撩拨着花瓣上羞涩可人的露珠，梧桐叶纷纷下落，金黄的稻穗在秋风中跌宕起伏，站在小镇屋顶，闭上双眼展开双手感受这风吹麦浪的交响曲。闻着阵阵麦香。
深红的果实在枝头吵闹，秋季看似冷酷，但是番茄小镇却能在冷酷的季节给人们带来无限的喜悦！
                            </p>
                      </li>
                      <li>
                            <h3>塞北小镇</h3>
                            <div class="b7duoline">项目名称：塞北小镇<br>
                          项目地址：河北张家口<br>
                          项目类型：乡村振兴计划<br>
                          项目面积：约300平方公里
                            </div>
                            <p>
                            步入塞北大门，首先便看到一个雪人造型的吉祥物以及一分为二的建筑体。如果说洋溢着青春可爱气息的雪人代表着塞北的冬天，那草坪和玻璃幕相结合的建筑，
便天生属于这片草地。狼山，一个野性十足的公园。凶猛的铁狼屹立在入口，仿佛窥视着每一位入侵者，园区内隐藏的铁狼也在寻找时机准备出击。
弯弯曲曲的小径，带领每一位探险者踏上未知的道路...
                            </p>
                      </li>
                      <li>
                            <h3>塞北农旅</h3>
                            <div class="b7duoline"> 地址 : 河北<br>
                          项目类型：乡村振兴计划<br>
                          设计面积 : 1054.11亩
                            </div>
                            <p>
                           野奢酒店(Rustic luxury hotel)，从字义上解释，就是山野与奢华的完美结合。郭准先生将建筑、景观与自然相融合，使之成为自然的一部分，
通过“野”与“奢”的极致对比和碰撞交融，在最原始或最荒野的地方创造最奢华的住宿条件。野奢酒店的存在，
将人们对于大自然的亲近和依赖、追求天人合一的极致梦想淋漓尽致地表达了出来。
                            </p>
                      </li>
                      <li>
                            <h3>五山别院</h3>
                            <div class="b7duoline">项目地址：四川攀枝花<br>
                                  项目类型：乡村振兴计划<br>
                                  使用面积：110亩<br>
                            </div>
                            <p>
                            依托田园综合体，可以探索多元化的聚居模式，既保持田园特色，又实现现代居住功能。借助聚居功能，田园综合体也将成为实现城乡基础设施和公共服务均等化的最佳空间
攀枝花，一座以花名命名的城市，一座山与水融合的城市，一座被誉为“花是一座城，城是一朵花”的城市。在这里，郭准先生结合巴蜀山水自然特色，打造了一处田园综合体，“五山别院”便由此产生。
                            </p>
                      </li>
                    </div>
                    <div id='pic'>
                      <li class='l1'><img src="{$img_url}xc/anlicase2box03.jpg" alt="" /></li>
                      <li class='l2'><img src="{$img_url}xc/anlicase2box02.jpg" alt="" /></li>
                      <li class='l3'><img src="{$img_url}xc/anlicase2box01.jpg" alt="" /></li>
                      <li class='l9'><img src="{$img_url}xc/anlicase2box04.jpg" alt="" /></li>
                      <li class='l0'><img src="{$img_url}xc/anlicase2box05.jpg" alt="" /></li>
                    </div>
                    <div id="btn">
                      <div id="left"></div>
                      <div id="right"></div>
                    </div>
                  </div>  
                  <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="boxcont7btn">立即预约</button></a>
      </div> 


  <footer>
    <div class="footermain">
      <div class="footleft">
        <em class="load_first">快速导航</em>
        <em>海岸设计</em>
        <ul class="alinkbox">
          <li><a href="http://www.haianzhuangshi.com/jiudian/" target="_blank">酒店设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/canyin/" target="_blank">餐厅设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/cafe/" target="_blank">咖啡厅设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/wangka/" target="_blank">网咖设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class3=177" target="_blank">酒吧设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/haian/192-cn.html" target="_blank">集装箱设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/huisuo/" target="_blank">会所设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/minsu/" target="_blank">民宿设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/xiaozhen/" target="_blank">特色小镇设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/shudian" target="_blank">书店设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/liansuo/" target="_blank">连锁店设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/tianyuan/" target="_blank">田园综合体设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/ruanzhuang/" target="_blank">软装设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/vi/" target="_blank">品牌VI设计</a></li>
          <li><a href="http://www.haianzhuangshi.com/haian/206-cn.html" target="_blank">商业综合体设计</a></li>
        </ul>
        <ul class="alinkbox clsply ul_two">
          <li>乡村振兴规划设计</li>
          <li>乡村振兴战略规划</li>
          <li>美丽乡村建设规划</li>
          <li>乡村振兴计划实施</li>
          <li>乡村旅游规划设计</li>
          <li>乡村文旅规划设计</li>
          <li>田园综合体规划设计</li>
          <li>新农村建设规划设计</li>
        </ul>
      </div>
      <ul class="footcent">
        <li>
          <em class="fotcentem">官方微信</em>
          <img src="{$img_url}yuanlin/footerweima1.jpg" alt="北京海岸公众号" title="北京海岸公众号">
        </li>
        <li>
          <em class="fotcentem">官方微博</em>
          <img src="{$img_url}yuanlin/footerweima2.jpg" alt="北京海岸官方微博" title="北京海岸官方微博"> 
        </li>
      </ul>
      <div class="footrigt">
        <a href="tel://400-879-1110"><em>400-879-1110</em></a>
        <span>全国免费热线</span><a href="javascript:;" onclick="jQuery('.boxbig').show()">
       <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"> <button>立即咨询</button></a></a>
      </div>
     <div class="footerdown">
      <p><span>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved </span><span>&nbsp;&nbsp;&nbsp;&nbsp;京ICP备13049424号</span></p>
      <p>海岸声明：本站内容 图像资料版权均属「北京海岸设计」所有；任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布；违者本公司将依法追究其法律责任！</p>
      <p>*本网页最终解释权为本公司所有</p>
      <div class="cnzz">{$lang_foot_cnzz}</div>
      </div>
      </div>
          
  </footer>
  <script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="{$img_url}js/slide_new.js"></script>
<script type="text/javascript" src="{$img_url}js/xc.js"></script>
  <script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
 <script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
  </body>
   
  
          
<!--
EOT;
?>