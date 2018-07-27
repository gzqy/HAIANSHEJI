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
<link rel="stylesheet" type="text/css" href="{$img_url}css/jzx.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6_new.css"/>
<link rel="stylesheet" href="{$img_url}src/css/swipebox.css"><!-- 点击全屏显示图片 -->
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css">
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/jzx.js"></script>  

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
        <!-- 轮播部分 -->
        <div class="bigpicbox">
          <div class="b_top">
            <div class="b_top_title_top">FOUNDED IN 1999</div>
            <div class="b_top_title_cnt"></div>
            <div class="b_top_title_btm">
              <div class="btn_child btn_o"><div class="btm_point"></div><span>精英设计师300余人</span></div>
              <div class="btn_child btn_t"><div class="btm_point"></div><span>19个战区协同打造</span></div>
            </div>
          </div>
          <div class="b_center"></div> 
          <div class="topcallbtn">
            <span> <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
	立即预约</a></span>
          </div>
        </div>

 <!-- 第二屏 --> 
 <div class="boxtitle">
  <img src="{$img_url}pic/ourcustomer.png" alt="我们的客户" />
 </div>
          <div class="boxcont1">
          <div class="cont1">
            <div class="cont1_bg">
            </div>
            <div class="cont1_l1txt">
              <div class="top_dk"></div>
              <div class="txtitle">
                <img src="{$img_url}pic/egtitle1.png" />
              </div>
              <div class="txtintcot1">
                    音乐会讲故事西安就是一座充满了故事的城市<br />
                    从前他有厚重的历史、有古都的气派<br />
                    未来他却是一座充 满了音乐的时尚之都、浪漫之都
              </div>
              <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" title="集装箱设计" alt="集装箱设计" target="_blank"><div class="txtintbtn">
                    立即预约
              </div></a>
            </div>
            <div class="zuj zu1"></div>
            <div class="cont1_l1pic swiphide cont1_l">
              <a href="{$index_url}product/245-cn.html" target="_blank" class="swipebox" title="MA咖啡厅集装箱设计">
                <img src="{$img_url}jzx/yinyue.png" id="swipeboximg" alt="MA咖啡厅集装箱设计" title="集装箱设计"/>
                <span id="horicon1"><img src="{$img_url}pic/local.png" alt="集装箱设计" title="集装箱设计"/>西安</span>
                <div id="horshowicon1"><img src="{$img_url}pic/locallink.png" alt="集装箱设计" title="集装箱设计"/></div>
              </a>
            </div>
            <div class="zuj zu2 zu2_o"></div>
            <div class="cont1_l2pic swiphide cont1_l">
              <a href="{$index_url}product/52-cn.html" target="_blank" class="swipebox" title="MA咖啡厅集装箱设计">
                <img src="{$img_url}jzx/wency.png" id="swipeboximg" alt="MA咖啡厅集装箱设计" title="集装箱设计"/>
                <span id="horicon2"><img src="{$img_url}pic/local.png" alt="MA咖啡厅集装箱设计" title="集装箱设计"/>山西</span>
                <div id="horshowicon2"><img src="{$img_url}pic/locallink.png" alt="MA咖啡厅集装箱设计" title="集装箱设计"/></div>
              </a>
            </div>
            <div class="cont1_l2txt">
              <div class="botm_wk o"></div>
              <div class="txtitle">
                <img src="{$img_url}jzx/egtitle2.png" alt="" title="集装箱设计"/>
              </div>
              <div class="txtintcot2">
                    看似随意叠加的几组集装箱形成两层楼高的错落空间<br/>
                    些许粗犷的外表，自然地融进周边环境<br/>
                    建筑内部巧妙引导光线将整体划分为一个个有趣的小空间
              </div>
              <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" title="集装箱设计" alt="集装箱设计" target="_blank"><div class="txtintbtn" id="more1">
                    立即预约
              </div>
            </div>
            <div class="cont1_l3txt">
              <div class="botm_wk t"></div>
              <div class="txtitle2">
                <img src="{$img_url}jzx/egtitle3.png" alt="" title="集装箱设计"/>
              </div>
              <div class="txtintcot2">
                    这里是创意乐园和灵感聚集地，启成艺术梦想<br/>
                    集装箱的别致风格和张扬的艺术</br>
                    在这里得到释放，逛画廊、看艺术、喝咖啡
              </div>
              <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" title="集装箱设计" alt="集装箱设计" target="_blank"><div class="txtintbtn" id="more2">
                    立即预约
              </div></a>
            </div>
            <div class="zuj zu2 zu2_t"></div>
            <div class="cont1_l3pic swiphide cont1_l">
              <a href="{$index_url}product/48-cn.html" target="_blank" class="swipebox" title="Box街区集装箱设计">
                <img src="{$img_url}jzx/xinj.png" id="swipeboximg" alt="Box街区集装箱设计" />
                <span id="horicon3"><img src="{$img_url}pic/local.png" alt="Box街区集装箱设计" />青海</span>
                <div id="horshowicon3"><img src="{$img_url}pic/locallink.png" alt="Box街区集装箱设计" /></div>
              </a>
            </div>
          </div>
        </div>      

 <!-- 新增第二屏 -->
  <div class="boxtitle">
    <img src="{$img_url}pic/ourclassify.png" alt="我们的设计" title="集装箱设计"/>
  </div> 
  <div class="boxaddclassify">
      <ul class="classifylftul"> 
        <li class="on">
          <i><img src="{$img_url}pic/classifyiclft01.png" alt="居住空间1" /title="集装箱设计"></i>
          <span>居住空间</span>
          <p>集装箱住宅/集装箱公寓/集装箱宾馆<br />集装箱旅社/集装箱酒店</p>
        </li>
        <li>
          <i><img src="{$img_url}pic/classifyiclft02.png" alt="商业空间2" title="集装箱设计"/></i>
          <span>商业空间</span>
          <p>集装箱餐厅/集装箱咖啡馆/集装箱超市<br />集装箱购物中心/集装箱度假村</p>
        </li>
        <li>
          <i><img src="{$img_url}pic/classifyiclft03.png" alt="公共空间3" title="集装箱设计"/></i>
          <span>公共空间</span>
          <p>集装箱建筑/集装箱办公楼/集装箱学校<br />集装箱图书馆</p>
        </li>
      </ul>
      <ul class="classifyctnul">
        <span></span>
        <span class="show"></span>
        <span></span>
      </ul>
      <ul class="classifyrgtul">
        <li class='l1'><img src="{$img_url}pic/classifycaseimg01.jpg" alt="1" title="集装箱设计"/></li>
        <li class='l2'><img src="{$img_url}pic/classifycaseimg02.jpg" alt="2" title="集装箱设计"/></li>
        <li class='l3'><img src="{$img_url}pic/classifycaseimg03.jpg" alt="3" title="集装箱设计"/></li>
      </ul>
  </div>

 <!-- 第三屏 --> 

 <div class="boxtitle">
                    <img src="{$img_url}pic/ourstory.png" alt="我们的故事" />
        </div>
        <div class="boxcont2"id="productstwo">
                    <div class="cont2"><!-- 
                            <div class="cont2_box"> -->
                                  <div class="cont2l">
                                            <div class="cont2lcont" id="b2lfirst">
                                                  <span>海岸设计</span>
                                                  <div class="ctn2hr" ></div>
                                                 <p>海岸由郭准先生创立于1999年，业务涵盖文旅产业、园区规划、酒店、商业体、咖啡馆、餐饮、办公空间等。<br />
													海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。<br />
														海岸由精英设计师280余人组成，分为22个战区进行专业化配合作业。海岸每年完成400余项目，一直保持着180个左右的项目在进行中。<br /> 
													海岸的服务涵盖了建筑外观与室内设计、工程施工及工程监理、软装设计及定制、VI设计。<br /> 
													海岸的客户群涵盖了业界众多知名企业：<br />
													漫咖啡、咖啡陪你、漫猫咖啡、SOME COFFEE、逸美时光、塞纳左岸咖啡、SPR咖啡、太平洋咖啡、扬州后院咖啡、梦咖啡、海底捞、釜山料理、汉拿山、青年餐厅、新石器烤肉、麻辣诱惑、魏老香、良子健身…… 
													以及一大批极具实力的财团：
													万科地产、苏宁集团、恒大地产、今典集团、壹万贰集团、华远地产、田森集团、兴发集团、天普集团、辰能集团、万香集团、新源地产集团……</p>
                                            </div>
                                            <div class="cont2lcont" id="b2lseond">
                                                  <span>海岸介绍</span>
                                                  <div class="ctn2hr" ></div>
                                                 <p>1.海岸设计由知名建筑师郭准先生创立于1999年，已经在业界历练十九个年头；<br />
													2.海岸设计开创了一个设计流派，以独创的归本主义理论为核心设计理念；<br />
													3.海岸设计位于北京资产大厦双井文创园E座108车间；<br />
												4.海岸设计现有资深设计师组成的稳定设计团队280余人；并拥有一支1000余人技术力量雄厚且有丰富经验的专业施工及管理团队；<br />
												郭准先生是归本主义的缔造者，同时他还大胆开辟新的路径。他的作品里充满了乐观、轻盈及喜悦，又同时具备独特性与普遍性。基于这些理由，他将结构、空间及形式融为一体以创造温馨场所的能力，也基于他对景观的敏感，将精神内涵融入归本主义风格的努力，以及他作品中所散发出的诗意之美。</p>
                                            </div>
                                            <div class="ctn2txtdownbtn">
                                                  <div class="downbtn downonfocus" id="downbtn1"></div>
                                                  <div class="downbtn" id="downbtn2"></div>
                                            </div>
                                  </div>
                                 <div class="cont2r">
                                            <img src="{$img_url}jzx/cont2_1.jpg" alt="音乐创客街区" />
                                            <div class="cont2rsmlcont">
                                                  <div class="smlcontdown">
                                                        <span>音乐创客街区</span>
                                                        <div class="ctn2hr" ></div>
                                                        <p>归本主义音乐+创客+集装箱 音乐会讲故事西安就是一座充满了故事的城市从前他有厚重的历史、有古都的气派未来他却是一座充满了音乐的时尚之都、浪漫之都。街区上，集装箱的模数以不规则组合模式与功能相结合。或叠加，或折叠，或旋转，穿插有度，配合光影纬度的变化渲染不同主题的梦想。<br />
                                                  </div>
                                                  <div class="smlcontup">
                                                        <span>音乐创客街区</span>
                                                       <a href="{$index_url}product/245-cn.html" target="_blank" title="音乐创客街区" alt="音乐创客街区"> <div class="uptxtbtn">进入<div class="tpbor"></div><div class="rgtbor"></div><div class="btbor"></div><div class="lfbor"></div></div></a>
                                                  </div>
                                            </div>
                                  </div>
                                  <div class="cont2r">
                                            <img src="{$img_url}jzx/cont2_2.jpg" alt="蜂巢集装箱" />
                                            <div class="cont2rsmlcont">
                                                  <div class="smlcontdown">
                                                        <span>蜂巢集装箱</span>
                                                        <div class="ctn2hr" ></div>
                                                        <p>采用的是具有标志性的街区元素，多元化、年轻态、环保性是其主要特点。郭准先生的设计初衷是想把艺术、自然、人文混搭，让顾客逛街的时候又像在逛艺术馆又像行走在大自然中。如果你是个爱潮流的人，来这里，就是享受潮流。<br />
                                                  </div>
                                                  <div class="smlcontup">
                                                        <span>蜂巢集装箱</span>
                                                        <a href="{$index_url}product/42-cn.html" target="_blank" title="蜂巢集装箱街区设计" alt="蜂巢集装箱街区设计"><div class="uptxtbtn">进入<div class="tpbor"></div><div class="rgtbor"></div><div class="btbor"></div><div class="lfbor"></div></div></a>
                                                  </div>
                                            </div>
                                  </div>
                                  <div class="cont2l1">
                                            <img src="{$img_url}jzx/cont2_3.jpg"  />
                                            <div class="cont2rsmlcont">
                                                  <div class="smlcontdown">
                                                        <span>IN酒店（门头集装箱）</span>
                                                        <div class="ctn2hr" ></div>
                                                        <p> 累了就来到IN酒店，这是一个年轻化的住宿空间，会带给你一份都市里的宁静，空间的主角是旅行的你，为年轻的心灵寻找多一倍梦想。设计师为了拉近住客彼此之间的距离，通过局部的建筑结构将公共空间联通为自由的连续空间。公共区包括咖啡厅、餐厅、酒吧、放映室、游戏室、休息室和厨房，以及可供学习的自习区域。年轻人在这样的空间居住，会感到非常舒适自在。生活是流动的，生命才能流动，才能五光十色。<br /> 
                                                  </div>
                                                  <div class="smlcontup">
                                                        <span>IN酒店（门头集装箱）</span>
                                                        <a href="{$index_url}product/" target="_blank" title="IN酒店（门头集装箱）设计" alt="IN酒店（门头集装箱）设计"><div class="uptxtbtn">进入<div class="tpbor"></div><div class="rgtbor"></div><div class="btbor"></div><div class="lfbor"></div></div></a>
                                                  </div>
                                            </div>
                                  </div>
                                <div class="cont2r">
                                            <img src="{$img_url}pic/cont2_4.png" alt="新晋府样板间" />
                                            <div class="cont2rsmlcont">
                                                  <div class="smlcontdown">
                                                        <span>新晋府样板间</span>
                                                        <div class="ctn2hr" ></div>
                                                        <p>集装箱错落叠加，展现出让人惊讶的平衡感，搭配吊足人胃口。同时，在建筑内部巧妙的引导光线，自然地将整体划分为一个个有趣的小空间。超大的落地窗、极佳的视野、通透的光影……俨然就是融入自然中的一件艺术佳品！ 看似随意叠加的几组集装箱 形成两层楼高的错落空间 些许粗犷的外表 自然地融进周边环境 给人随意自在。<br />
                                                  </div>
                                                  <div class="smlcontup">
                                                        <span>新晋府样板间</span>
                                                        <a href="{$index_url}product/52-cn.html" target="_blank" title="新晋府样板间集装箱设计" alt="新晋府样板间集装箱设计"><div class="uptxtbtn">进入<div class="tpbor"></div><div class="rgtbor"></div><div class="btbor"></div><div class="lfbor"></div></div></a>
                                                  </div>
                                            </div>
                                  </div>
                                  <div class="cont2r">
                                            <img src="{$img_url}jzx/cont2_4.jpg" alt="BOX街区集装箱设计" />
                                            <div class="cont2rsmlcont">
                                                  <div class="smlcontdown">
                                                        <span>BOX街区</span>
                                                        <div class="ctn2hr" ></div>
                                                        <p>是否厌倦了一成不变的生活节奏，是时候带着期待出发，在这里寻找好久不见的自己。设计师运用集装箱、绿植和玻璃、混凝土等归本主义元素打造出一个趋向于年轻人的休闲娱乐场所。不论是灵动安静的植物园、空间形式千变万化的集装箱还是充满创意的涂鸦，无不赋予了配套一种充满娱乐的休闲氛围，用别出新裁的创意创造出了独特的归本主义风格。<br />
                                                  </div>
                                                  <div class="smlcontup">
                                                        <span>BOX街区</span>
                                                        <a href="{$index_url}product/48-cn.html" target="_blank" title="BOX街区集装箱设计" alt="BOX街区集装箱设计"><div class="uptxtbtn">进入<div class="tpbor"></div><div class="rgtbor"></div><div class="btbor"></div><div class="lfbor"></div></div></a>
                                                  </div>
                                            </div>
                                  </div>
                            <!-- </div> -->
                    </div>

 </div>
 <!-- 新增第四屏 集装箱建筑发展前景 -->
  <div class="boxtitle">
    <img src="{$img_url}pic/ourprospects.png" alt="我们的设计" title="集装箱设计"/>
  </div>
  <div class="newaddprospectsbox">
      <img src="{$img_url}pic/prospectsimg01.jpg" alt="集装箱设计" title="集装箱设计"/>
      <img src="{$img_url}pic/prospectsimg02.jpg" alt="集装箱设计" title="集装箱设计"/>
      <img src="{$img_url}pic/prospectsimg03.jpg" alt="集装箱设计" title="集装箱设计"/>
      <p class="prospectsfirstp">传统的住房观念已经不合时宜，这也激发了人们对自我居住空间的全新思考。集装箱建筑它绿色环保，省时省力，非常灵活多变，相对传统住房能提供给住家更多的选择，个人、家庭、甚至是一个社区都能各取所需，一个钢铁盒子做成的房子也能充满时尚气息，对环境非常友好。</p>
      <p class="prospectssecondp">集装箱建筑，是一种又一次撞击时尚潮流的建筑体系，可随时随地移动到各地，为人们带来更方便的舒适生活。通过太阳能光电板可供室内用电，太阳能热水器可供暖、供水，室内淋浴、生活用水的排放由污水处理系统进行净化，以便再次利用。</p>
      <span class="bgborder"></span>
  </div>

 <!-- 第四屏 --> 

   <div class="boxtitle">
                    <img src="{$img_url}pic/ourdesign.png" alt="我们的设计" title="集装箱设计"/>
        </div>
      <div class="boxcont3">            
                    <div class="cont3">
                          <div class="cont3rigbig">
                                    <img src="{$img_url}pic/bj1.png" alt="" />
                          </div>
                          <div class="cont3boxl" id="cont3boxl1">
		<div class="cont3rigbig">
                                    <img src="{$img_url}pic/sm1.jpg" alt="" />
                          </div>
                                <div class="b3boxtitle">音乐创客集装箱街区</div>
                                <div class="b3boxplace">西安曲江</div>
                                <ul class="b3boxtabe">
                                     <li>项目名称：音乐创客集装箱</li>
                                      <li>项目地址：西安曲江</li>
                                      <li>项目类型：集装箱设计</li>
                                      <li>使用面积：1200㎡</li>
                                      <li>主创团队：北京海岸设计</li>
                                      <li>总设计师：郭准先生</li>
                                      <li>设计风格：归本主义</li>
                                </ul>
                                <div class="midtxt">
                                    音乐会讲故事,西安是一座充满了故事的城市，时尚之都、浪漫之都。
                                </div>
                          </div>
                          <div class="cont3boxl" id="cont3boxl2">
		<div class="cont3rigbig">
                                    <img src="{$img_url}pic/sm3.jpg" alt="" title="集装箱设计"/>
                          </div>
                                <div class="b3boxtitle">山东IN酒店</div>
                                <div class="b3boxplace">山东</div>
                                <ul class="b3boxtabe">
                                     <li>项目名称：山东IN酒店</li>
                                      <li>项目地址：山东</li>
                                      <li>项目类型：集装箱设计</li>
                                      <li>使用面积：2000㎡</li>
                                      <li>主创团队：北京海岸设计</li>
                                      <li>总设计师：郭准先生</li>
                                      <li>设计风格：归本主义</li>
                                </ul>
                                <div class="midtxt">
                                    风格温馨、年轻活泼，好像回到了学生时代的宿舍，令人倍感亲切。
                                </div>
                          </div>
                          <div class="cont3boxl" id="cont3boxl3">
		<div class="cont3rigbig">
                                    <img src="{$img_url}pic/sm4.jpg" alt="" title="集装箱设计"/>
                          </div>
                                <div class="b3boxtitle">青海Box街区集装箱</div>
                                <div class="b3boxplace">青海</div>
                                <ul class="b3boxtabe">
                                      <li>项目名称：Box街区集装箱</li>
                                      <li>项目地址：青海</li>
                                      <li>项目类型：集装箱设计</li>
                                      <li>使用面积：200亩</li>
                                      <li>主创团队：北京海岸设计</li>
                                      <li>总设计师：郭准先生</li>
                                      <li>设计风格：归本主义</li>
                                </ul>
                                <div class="midtxt">
                                   生活最美妙的事情莫过于找一个小镇以最舒服的姿态蜷缩在时光中。
                                </div>
                          </div>
                          <div class="cont3boxl" id="cont3boxl4">
 		<div class="cont3rigbig">
                                    <img src="{$img_url}pic/sm2.jpg" alt="" title="集装箱设计"/>
                          </div>
                                <div class="b3boxtitle">蜂巢集装箱</div>
                                <div class="b3boxplace">河北</div>
                                <ul class="b3boxtabe">
                                      <li>项目名称：蜂巢集装箱</li>
                                      <li>项目地址：河北</li>
                                      <li>项目类型：集装箱设计</li>
                                      <li>使用面积：120000㎡</li>
                                      <li>主创团队：北京海岸设计</li>
                                      <li>总设计师：郭准先生</li>
                                      <li>设计风格：归本主义</li>
                                </ul>
                                <div class="midtxt">
                                   艺术、自然、人文混搭，逛街时像在逛艺术馆又像行走在大自然中。
                                </div>
                          </div>
                          <div class="cont3boxr">
                                <ul>
                                      <li class="c3sml onc3focus" id="c3sml1"><img src="{$img_url}pic/sm1.jpg" alt="" title="集装箱设计"/></li>
                                      <li class="c3sml" id="c3sml2"><img src="{$img_url}pic/sm3.jpg" alt="" title="集装箱设计" /></li>
                                      <li class="c3sml" id="c3sml3"><img src="{$img_url}pic/sm4.jpg" alt="" title="集装箱设计" /></li>
                                      <li class="c3sml" id="c3sml4"><img src="{$img_url}pic/sm2.jpg" alt="" title="集装箱设计" /></li>
                                </ul>
                          </div>      
                          
                          

                    </div>
                    <div class="cont3_contentus">
                         <div class="ordernowbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                          立即预约</a></div>
                          <a href="tel:010-5290-6570"><div class="orderphonenum"><img src="{$img_url}pic/newaddphonumber.png" alt=""></div></a>
                    </div>
      </div>

 <!-- 第五屏 --> 

      <!-- 新增海岸发起 -->
      <div class="haianfaqi">
        <div class="faqileft">
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
            <i><img src="{$img_url}pic/faqibgguozhun.png" alt="北京海岸设计郭准"></i>
            <p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人<br>
            1999年创立北京海岸<br>
            他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的<br>
            因为目的不在于追求耀眼的视觉效果<br>
            而是追求表现生活在其中人的活动本身
            </p >
          </li>
          <li>
            <i><img src="{$img_url}pic/faqibgguiben.png" alt="北京海岸设计归本主义"></i>
            <p>  归本主义是华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、<br>
            发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻<br>
            在生活体验中<br>
            不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考<br>
            </p >
          </li>
        </ul>
      </div>

<!-- 第六屏 合作商户--> 
<!-- 选择就是信任 -->
<div class="boxtitle">
  <img src="{$img_url}pic/ourcustomer.png" alt="合作商家" />
</div>
<div class="boxcont5">
    <ul class="boxcont5ul">
     <li><img src="{$img_url}pic/customerslogo01.jpg" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo02.jpg" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo03.png" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo04.png" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo05.png" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo06.jpg" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo07.jpg" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo08.jpg" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo09.jpg" alt="集装箱设计" /></li>
     <li><img src="{$img_url}pic/customerslogo10.jpg" alt="集装箱设计" /></li>
    </ul>
    <button><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">一键预约设计师</a></button>
</div>

         
 <script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
          
<!--
EOT;
require_once template('modular/news_specialTop_jzx');
require_once template('foot_jzx');
?>