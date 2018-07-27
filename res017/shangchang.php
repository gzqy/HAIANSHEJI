<!--<?php 
$methtml_head  = metlabel_html5();//基于Html5
$met_foot_txt  = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0); 
$navnow = $classnow==10001?'class="navblue"':''; 
require_once template('feed/form_l');   
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" type="text/css" href="{$img_url}css/shangchang.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_sySc.css"> 
	<header>
		<img src="{$img_url}mall/bannerenglishtxt.png" alt="The planning and design of shopping malls">
    <em class='headeroneem'><img src="{$img_url}mall/banneronetxt.png" alt="19年行业领先品牌，300位设计团队精英"></em>
    <em class='headertwoem'><img src="{$img_url}mall/bannertitle.png" alt="商场规划设计"></em>
    <p>商业广场设计 / 购物广场设计 / 百货广场设计 / 商业街规划</p>
    <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
    <span><i><img src="{$img_url}mall/headerdownicon.png" ></i></span>
	</header>
<div class="headerdown">
      <div class="platetitlebox titleone">
        <em>商场设计服务领域</em>
        <p>还原商业空间的本质体现其独有的风格、个性、及商业价值</p>
      </div>
      <!-- 商场设计服务领域 -->
      <div class="malldesignservices">
          <div class="designlftone">
              <div class="designfenmainshu">
                  <i><img src="{$img_url}mall/degnnumber01.png" alt="商业综合体设计"></i>
                  <em>商业综合体设计</em>
                  <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
              </div>
          </div>
          <div class="designctntop">
              <div class="designfenmainheng">
                  <i><img src="{$img_url}mall/degnnumber02.png" alt="商场设计"></i>
                  <em>商场设计</em>
                  <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
              </div>
          </div>
          <div class="designctndwnlft">
              <div class="designfenmainshu designfenmainshuxiao">
                  <i><img src="{$img_url}mall/degnnumber03.png" alt="购物中心设计"></i>
                  <em>购物中心设计</em>
                  <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
              </div>
          </div>
          <div class="designctndwnrgt">
              <div class="designfenmainshu designfenmainshuxiao">
                  <i><img src="{$img_url}mall/degnnumber04.png" alt="商业空间设计"></i>
                  <em>商业空间设计</em>
                  <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
              </div>
          </div>
          <div class="designrgtone">
              <div class="designfenmainshu">
                  <i><img src="{$img_url}mall/degnnumber05.png" alt="精品超市设计"></i>
                  <em>精品超市设计</em>
                  <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
              </div>
          </div>
      </div>


      <div class="platetitlebox titletwo">
        <em>商场设计内容</em>
        <p>理性与灵性交融，释放商业无限可能，从整体策略布局到细节打磨，从设计理念到施工落地</p>
      </div>
      <!-- 商场设计内容 -->
      <ul class="designcontentbox">
        <li class="designcontentfocuson">
            <img src="{$img_url}mall/dgncontentbg01.jpg" alt="整体规划设计">
            <i class="dgncontenticon"><img src="{$img_url}mall/dgncontenticon01.png" alt="整体规划设计"></i>
            <span class="dgncontentnumdan"><img src="{$img_url}mall/dgncontentnumicon01.png" alt="整体规划设计"></span>
            <h3>整体规划设计</h3><em>planning</em>
            <p>以专业经验对商业用地进行规划，为发展商团队提供合理的商业
布局方案，为后续招商、设计工作和项目成功运营奠定基础。</p>
            <span class="dgncontentlinedan"><img src="{$img_url}mall/stripline.png" alt="整体规划设计"></span>
        </li>
        <li>
            <img src="{$img_url}mall/dgncontentbg02.jpg" alt="建筑外观设计">
            <i class="dgncontenticon"><img src="{$img_url}mall/dgncontenticon02.png" alt="建筑外观设计"></i>
            <span class="dgncontentnumsua"><img src="{$img_url}mall/dgncontentnumicon02.png" alt="建筑外观设计"></span>
            <h3>建筑外观设计</h3><em>appearance</em>
            <p>通过综合体各部分的合理规划布局和深入的建筑设计，从城市尺度塑造商业节奏和整体形象</p>
            <span class="dgncontentlinesua"><img src="{$img_url}mall/stripline.png" alt="建筑外观设计"></span>
        </li>
        <li>
            <img src="{$img_url}mall/dgncontentbg03.jpg" alt="商业空间设计">
            <i class="dgncontenticon"><img src="{$img_url}mall/dgncontenticon03.png" alt="商业空间设计"></i>
            <span class="dgncontentnumdan"><img src="{$img_url}mall/dgncontentnumicon03.png" alt="商业空间设计"></span>
            <h3>商业空间设计</h3><em>Commercial</em>
            <p>准确的商业环境调研和科学分析、掌握影响购物中心发展的静态和动态变量，是做好成功商业规划的前提</p>
            <span class="dgncontentlinedan"><img src="{$img_url}mall/stripline.png" alt="商业空间设计"></span>
        </li>
        <li>
            <img src="{$img_url}mall/dgncontentbg04.jpg" alt="灯光设计">
            <i class="dgncontenticon"><img src="{$img_url}mall/dgncontenticon04.png" alt="灯光设计"></i>
            <span class="dgncontentnumsua"><img src="{$img_url}mall/dgncontentnumicon04.png" alt="灯光设计"></span>
            <h3>灯光设计</h3><em>lighting</em>
            <p>用灯光营造及提升商业氛围，通过灯光对建筑、室内空间、景观等进行强化或再塑，加强载体表现力，树立现代商业新标杆</p>
            <span class="dgncontentlinesua"><img src="{$img_url}mall/stripline.png" alt="灯光设计"></span>
        </li>
        <li>
            <img src="{$img_url}mall/dgncontentbg05.jpg" alt="导视系统设计">
            <i class="dgncontenticon"><img src="{$img_url}mall/dgncontenticon05.png" alt="导视系统设计"></i>
            <span class="dgncontentnumdan"><img src="{$img_url}mall/dgncontentnumicon05.png" alt="导视系统设计"></span>
            <h3>导视系统设计</h3><em>Signage system</em>
            <p>借助由形象LOGO、导向标识及广告系统组成的视觉设计，紧随信息科技的发展，率先进入多媒体信息数据交互的领域</p>
            <span class="dgncontentlinedan"><img src="{$img_url}mall/stripline.png" alt="导视系统设计"></span>
        </li>
      </ul>
      <!-- 商场形象定位 -->
      <div class="forimagepos">
        <div class="positionimagebox imageboxone">
          <span class="potiondetop"></span>
          <hr class="potiondehr">
          <span class="potiondedwn"></span>
          <em>商场形象定位</em>
          <p>商场的形象定位，实际上是商场经营企业的形象定位<br>  
  它随着商场的经营运作而持续存在并发挥作用，通过对商业中心品牌的定位界定商业文化内涵，建立超前的品牌形象<br> 
  引领购物时尚、反映地域特色、精选服务对象、创新组合业态、综合形象鲜明且易推广传播等<br> 
  从战略高度上系统设计和推出专业化商场规划设计/商业广场设计是完全必要的选择</p>
          <ul class="positionimageul">
            <li>
                <span></span><i class="positionimagelicon"><img src="{$img_url}mall/positionimagelicon01.png" alt=""></i>
                <em>商业综合体策划</em>
                <p>结合基地环境，综合考虑技术经济条件和建筑艺术要求，规划总体平面设计；通过平面以及立体方向，进行交通流线式布局；商场一体化布置，形成商业聚集效应，实现整体功能布局，使商业价值最大化。</p>
                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><button>马上预约<i><img src="{$img_url}mall/postonimgtriangle.png" ></i></button></a>
            </li>
            <li>
                <span></span><i class="positionimagelicon"><img src="{$img_url}mall/positionimagelicon02.png" alt=""></i>
                <em>商业体业态定位</em>
                <p>商业体空间整合、规划商业体整体定位和特色、规划其中业态功能布局（购物、娱乐、餐饮黄金划分）、业态创新组合，结合当地经济发展水平和当地的商家资源，进行科学合理配置。</p>
                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" ><button>马上预约<i><img src="{$img_url}mall/postonimgtriangle.png" ></i></button></a>
            </li>
            <li>
                <span></span><i class="positionimagelicon"><img src="{$img_url}mall/positionimagelicon03.png" alt=""></i>
                <em>建筑、景观、规划设计</em>
                <p>根据城市人文风情、定制专属规划、设计特色建筑、宏观建设景观、微观建设亮点，让人邂逅一场建筑的“色诱”。</p>
                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><button>马上预约<i><img src="{$img_url}mall/postonimgtriangle.png" alt=""></i></button></a>
            </li>
            <li>
                <span></span><i class="positionimagelicon"><img src="{$img_url}mall/positionimagelicon04.png" alt=""></i>
                <em>室内空间设计</em>
                <p>装饰材料选材，低价受用；最大程度的利用空间、获取更舒适的体验环境；构建内涵、趣味、文化、时尚等各种不同风格空间，奇思妙想，满足您的需求。</p>
                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><button>马上预约<i><img src="{$img_url}mall/postonimgtriangle.png" ></i></button></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="platetitlebox titlethree">
        <em>商场设计规划原则</em>
        <p>基于人文、艺术、商业等融合风格呈现建造，链接每一环独有的命脉</p>
      </div>
      <div class="planprinciple">
        <div class="planprinciplelft">
          <img src="{$img_url}mall/planprinciplelftpic.jpg" alt="">
          <p>       建立独特而鲜明的购物广场设计、百货商场设计、商业街规划形象不仅是竞争市场的制胜关健，而且是快速提升企业知名度和美誉度的重要手段。海岸捕捉时代的元素、历史的印记，实现着生活的美好，让每位到店的顾客留下美好的记忆成为城市生活中不可缺失的组成部分。
  所有的商场规划设计都要实现它的功能。不同的空间对通道设置、楼层业态安排、平行交通组织、垂直交通组织公共空间的尺度控制，有着不同的要求。</p>
        </div>
        <div class="planprinciplergt">
          <img src="{$img_url}mall/planprinciplelistline.png" alt="">
          <dl>
            <dt>１、人流动线的规划原则 </dt>
            <dt>２、商场电梯布局的规划原则</dt>
            <dt>３、铺位布局规划原则</dt>
            <dt>４、商场内外部景观及商业小品设计原则 </dt>
            <dt>５、商场外立面设计原则</dt>
            <dt>６、商场停车规划设计原则</dt>
            <dt>７、商场广告位的规划设计原则 </dt>
          </dl>
        </div>
      </div>



      <!-- 海岸商业空间策略设计系统 -->
      <div class="forpositionstrateg">
        <div class="positionimagebox imageboxtwo">
          <span class="potiondetop"></span>
          <hr class="potiondehr">
          <span class="potiondedwn"></span>
          <em>海岸商业空间策略设计系统</em>
          <pre>商业，可以是感性与天马行空的想象                    商业，可以是理性尺度与态度的宣扬                    商业，正因个性释放而拥有无限可能</pre>
          <ul class="positionstrategyul">
            <li>
              <em>发现价值</em>
              <i><img src="{$img_url}mall/strategylicon01.png" alt=""></i>
              <ul>
                <li>消费环境洞察</li>
                <li>竞争环境分析</li>
                <li>商业趋势观察</li>
                <li>差异化价值定位</li>
              </ul>
            </li>
            <li>
              <em>建构价值</em>
              <i><img src="{$img_url}mall/strategylicon02.png" alt=""></i>
              <ul>
                <li>系统化整合设计</li>
                <li>艺术化视觉张力</li>
                <li>情感化个性体验</li>
              </ul>
            </li>
            <li>
              <em>打磨价值</em>
              <i><img src="{$img_url}mall/strategylicon03.png" alt=""></i>
              <ul>
                <li>领先施工工艺工法</li>
                <li>严谨科学施工管理</li>
                <li>设计效果完美呈现</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>




      <!-- 商场设计精品案例 -->
      <div class="platetitlebox titlefour">
        <em>商场设计精品案例</em>
        <p>归本主义 - 最专业最受欢迎的设计案例，专注于打造最美好的设计，欢迎垂询：400-879-1110</p>
      </div>
      <ul class="classiccase">
        <li>
          <div class="casetoppicbox">
              <!-- http://www.haianzhuangshi.com/product/39-cn.html -->
              <a href="{$index_url}product/39-cn.html" target="_blank" title="蜂巢商场设计" alt="蜂巢商场设计"><img src="{$img_url}mall/casetoppic01.jpg" alt="北京海岸设计"></a>
              <i><img src="{$img_url}mall/linkicon.png" alt="链接图标"></i>
          </div>
          <span class="orangebgspan"></span>
          <em>蜂巢商场设计</em>
          <ul>
            <li>地址 : 河北</li>
            <li>设计面积 : 120000㎡</li>
          </ul>
          <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><p><span class="whitebgspan"></span>点击咨询&nbsp;&nbsp;| <img src="{$img_url}mall/jiantou.png" ></p></a>
        </li>
        <li>
          <div class="casetoppicbox">
              <!--http://www.haianzhuangshi.com/product/37-cn.html -->
              <a href="{$index_url}product/37-cn.html" target="_blank" title="蜗牛生活商场设计" alt="蜗牛生活商场设计"><img src="{$img_url}mall/casetoppic02.jpg" alt="北京海岸设计"></a>
              <i><img src="{$img_url}mall/linkicon.png" alt="链接图标"></i>
          </div>
          <span class="orangebgspan"></span>
          <em>蜗牛生活体验馆商场设计</em>
          <ul>
            <li>地址 : 甘肃兰州</li>
            <li>设计面积 : 6000㎡</li>
          </ul>
          <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><p><span class="whitebgspan"></span>点击咨询&nbsp;&nbsp;| <img src="{$img_url}mall/jiantou.png" ></p></a>
        </li>
        <li>
          <div class="casetoppicbox">
              <!-- http://www.haianzhuangshi.com/product/475-cn.html -->
              <a href="{$index_url}product/475-cn.html" target="_blank" title="南瓜公社商场设计" alt="南瓜公社商场设计"><img src="{$img_url}mall/casetoppic03.jpg" alt="北京海岸设计"></a>
              <i><img src="{$img_url}mall/linkicon.png" alt="链接图标"></i>
          </div>
          <span class="orangebgspan"></span>
          <em>南瓜公社商场设计</em>
          <ul>
            <li>地址 : 河南鹤壁</li>
            <li>设计面积 : 30000㎡</li>
          </ul>
          <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><p><span class="whitebgspan"></span>点击咨询&nbsp;&nbsp;| <img src="{$img_url}mall/jiantou.png" ></p></a>
        </li>
        <li>
          <div class="casetoppicbox">
              <!-- http://www.haianzhuangshi.com/product/104-cn.html -->
              <a href="{$index_url}product/105-cn.html" target="_blank" title="SE商场设计" alt="SE商场设计"><img src="{$img_url}mall/casetoppic04.jpg" alt="北京海岸设计"></a>
              <i><img src="{$img_url}mall/linkicon.png" alt="链接图标"></i>
          </div>
          <span class="orangebgspan"></span>
          <em>SE商场设计</em>
          <ul>
            <li>地址 : 苏州</li>
            <li>设计面积 : 6000㎡</li>
          </ul>
          <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><p><span class="whitebgspan"></span>点击咨询&nbsp;&nbsp;| <img src="{$img_url}mall/jiantou.png" ></p></a>
        </li>
        <li>
          <div class="casetoppicbox">
              <!-- http://www.haianzhuangshi.com/product/54-cn.html -->
              <a href="{$index_url}product/54-cn.html" target="_blank" title="淮安商场设计" alt="淮安商场设计"><img src="{$img_url}mall/casetoppic05.jpg" alt="北京海岸设计"></a>
              <i><img src="{$img_url}mall/linkicon.png" alt="链接图标"></i>
          </div>
          <span class="orangebgspan"></span>
          <em>淮安商场设计</em>
          <ul>
            <li>地址 : 江苏淮安</li>
            <li>设计面积 : 14285㎡</li>
          </ul>
          <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><p><span class="whitebgspan"></span>点击咨询&nbsp;&nbsp;| <img src="{$img_url}mall/jiantou.png" ></p></a>
        </li>
        <li>
          <div class="casetoppicbox">
              <!-- http://www.haianzhuangshi.com/product/347-cn.html -->
              <a href="{$index_url}product/347-cn.html" target="_blank" title="云创谷商场设计" alt="云创谷商场设计"><img src="{$img_url}mall/casetoppic06.jpg" alt="北京海岸设计"></a>
              <i><img src="{$img_url}mall/linkicon.png" alt="链接图标"></i>
          </div>
          <span class="orangebgspan"></span>
          <em>云创谷商场设计</em>
          <ul>
            <li>地址 : 黑龙江</li>
            <li>设计面积 : 120000㎡</li>
          </ul>
          <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><p><span class="whitebgspan"></span>点击咨询&nbsp;&nbsp;| <img src="{$img_url}mall/jiantou.png" ></p></a>
        </li>
      </ul>



      <!-- 品质源于专业 -->
      <div class="forprofessional">
        <div class="positionimagebox imageboxthree">
          <span class="potiondetop"></span>
          <hr class="potiondehr">
          <span class="potiondedwn"></span>
          <em>品质源于专业</em>
          <pre>自信源于我们对产品质量的一贯苛求，我们四大保障的保障，升华后的空间让您更为满意</pre>
          <ul class="professionalul">
            <li>
                <span>
                    <img src="{$img_url}mall/professionaliicon01.png" alt="">
                    <p>成立于1999年<br>资深行业经验</p>
                </span>
                <em>优秀团队</em>
            </li>
            <li>
                <span>
                    <img src="{$img_url}mall/professionaliicon02.png" alt="">
                    <p>行业大咖设计<br>拒绝伪资深</p>
                </span>
                <em>实力设计</em>
            </li>
            <li>
                <span>
                    <img src="{$img_url}mall/professionaliicon05.png" alt="">
                    <p>以归本主义风格<br>100%原创</p>
                </span>
                <em>保证原创</em>
            </li>
            <li>
                <span>
                    <img src="{$img_url}mall/professionaliicon03.png" alt="">
                    <p>高端私人订制<br>尽显品牌个性</p>
                </span>
                <em>品牌定制</em>
            </li>
            <li>
                <span>
                    <img src="{$img_url}mall/professionaliicon04.png" alt="">
                    <p>多年完美良心服务<br>满意为止</p>
                </span>
                <em>金牌服务</em>
            </li>
          </ul>
        </div>
      </div>

      <!-- 我们的优势 -->
      <div class="platetitlebox titlefive">
        <em>我们的优势</em>
        <p>北京海岸设计以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计 ... 全国免费咨询热线：400-879-1110</p>
      </div>
      <ul class="advantageul">
        <li>
            <i><img src="{$img_url}mall/advantagelicon01huang.png" alt=""><img src="{$img_url}mall/advantagelicon01hui.png" alt=""></i>
            <em>商场规划设计</em>
            <p>海岸汇聚跨领域的国际精英人才，每一个海岸设计人都是久经沙场的圣斗士，他们具有广博的知识构成，优秀的沟通能力，前瞻和敏锐的目光。</p>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
        </li>
        <li>
            <i><img src="{$img_url}mall/advantagelicon02huang.png" alt=""><img src="{$img_url}mall/advantagelicon02hui.png" alt=""></i>
            <em>一站式服务体系</em>
            <p>提供一站式设计服务， 包括前期可行性研究、初期预算、 方案设计，效果图设计与施工工艺、整体智能方案。</p>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
        </li>
        <li>
            <i><img src="{$img_url}mall/advantagelicon03huang.png" alt=""><img src="{$img_url}mall/advantagelicon03hui.png" alt=""></i>
            <em>专业的施工机制</em>
            <p>海岸无论在材料选配、施工环节，都注重节能环保新材料、新技术的应用。是国内少数能将采光设计、节能设计、生态感应等方面的专业团队。</p>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a>
        </li>
      </ul>

      <!-- 关于我们 -->
      <div class="aboutusbigbox">
          <div class="aboutusmain">
              <div class="aboutuscontant">
                  <ul>
                      <li>
                          <em>归本主义</em>
                          <p>归本主义作品植根于世界性的各种风格流派中并具有文化品质，凝聚了东西方双重文化的精神。以全球建筑时代的视点俯视世界建筑潮流，在多元浩繁的建筑风格间隙中建立和发展独立体系，以尺度数码简练精致地表现意匠、尊重人性、传达情感、形成意境，简洁洗练的构成、轻快细腻的质感、温馨雅致的格调、清风明月的纯静，这是归本主义作品的品质。
归本主义作品语言的结构问题不在于具体的风格，每个作品均是在特定的社会条件下因特殊的用途而建立。</p>
                      </li>
                      <li class="disnone">
                          <em>郭准先生</em>
                          <p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸，为了追寻自己的设计理念，他在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角落。从建筑的角度感受不同的人类文化，特别是在欧美、日韩，他虔诚的寻访了建筑巨匠们的足迹，深入大师们的实际作品内部，感悟其中奥妙所在，探寻大师们伟大思想的形成历程。在消化历代建筑大师的精华，思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。</p>
                      </li>
                      <li class="disnone">
                          <em>关于海岸</em>
                          <p>有一面旗帜，有一个核心人物，有一彪整齐的人马，用爱和智慧在阳光照耀的地方播种荣光，这就是海岸——斗志昂扬的钢铁军团。海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。
他们是这样的一群人——有梦想又实干，敢于冒险又充满创意，洞察世事又见解独到，酷爱竞争又心怀慈悲，是这样的一群人，肩负着归本主义远播四方的使命，担当着海岸的全部荣光。</p>
                      </li>
                  </ul>
                  <i><img src="{$img_url}mall/aboutusjiantou.png" ></i>
                  <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><span>了解我们？</span></a>
              </div>
          </div>
      </div>




      <!-- 海岸动态 -->
      <div class="platetitlebox titlesix">
        <em>海岸动态</em>
        <p>北京海岸设计是您最专业的设计服务管家...全国免费咨询热线：400-879-1110</p>
      </div>

<!--
EOT;
require_once template('modular/news_spacialTop_sc');
echo <<<EOT
-->

      <div class="platetitlebox titleseven">
          <em>海岸商场设计案例赏析</em>
          <p>基于人文、艺术、商业等融合风格呈现建造，链接每一环独有的命脉</p>
      </div>
      <!-- 海岸商场设计案例赏析 -->
      <div class="cont3">
            <div class="cont3casebox">
                    <div class="c3eg" >
                            <img src="{$img_url}mall/caseeg1.jpg" />
                            <div class="casemain">
                                  <em>广场及外观设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商场设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>14285㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">淮安</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      夜色下的春日街头，植物、木质材料、玻璃以及锈铁的搭配“半旧时装”，无不彰显出淮安CBD建筑外观及商场设计的气质与品位。更重要的是，这样的半旧不新，让建筑的视觉性和自然感立即数倍地增强。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg2.jpg" />
                            <div class="casemain">
                                  <em>SE综合商业体设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商业体设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>6000㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">苏州</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                     人类对力量的渴望从未停止过、极简而艺术的空间、这是一场开启纯粹归本主义体验馆的门户。总设计师郭准先生将归本主义自然融入现代时尚元素中，动感。vip/静谧、休闲。前卫等等亮点你都能在这片商业体设计中体验到。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg3.jpg" />
                            <div class="casemain">
                                  <em>蜂巢商业体设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商业体设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>12000㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">石家庄</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      蜂巢商业体的设计主题采用的是具有标志性的街区元素，多元化、年轻态、环保性是其主要特点。郭准先生把艺术、自然、人文混搭，让顾客逛街的时候又像在逛艺术馆又像行走在大自然中。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg4.jpg" />
                            <div class="casemain">
                                  <em>云创谷商业综合体设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商业体设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>12000㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">黑龙江</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      郭准先生利用建筑和其外部环境之间的灰空间，打破钢筋混凝土及玻璃幕墙所带来的“硬、实”效果；
                                      同时，为商业体对城市的影响力，他将建筑和人文相结合，融入立体绿化，以改善城市生态环境，模糊城建边界，使人、建筑、城市之间和谐共生。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg5.jpg" />
                            <div class="casemain">
                                  <em>南瓜公社商场设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商场设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>7000㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">鹤壁</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      郭准先生将建筑以super fly为中心分为两侧，北侧楼以教育为主，南侧楼以娱乐休闲为主。流畅的线条，活力的色彩，每一层的设计都带给人们不同的视觉感官印象。以活泼、简洁、艺术的设计形式，展现儿童的本真印象及都市人追求的简单纯真。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg6.jpg" />
                            <div class="casemain">
                                  <em>蜗牛生活体验馆</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商业体设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>6000㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">兰州</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      蜗牛生活体验馆，是一种多元化的思考方式，郭准先生将归本主义的自然情怀与工业元素相结合，兼容创意、动感、科技与趣味性，塑造出一种整体的构图美感。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg7.jpg" />
                            <div class="casemain">
                                  <em>铁货体验馆设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商场设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>850㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">太原</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      郭准先生的设计化繁为简，直指人心。使简单且有魅力的锈铁砖石混凝土玻璃合体，棱角分明的几何图形勾画出的空间张力，浪漫主义情怀蕴涵其中的国际风格和流行艺术的结合，无一不是归本主义的实体呈现。
                                  </p>
                            </div>
                    </div>
                    <div class="c3eg clsplay">
                            <img src="{$img_url}mall/caseeg8.jpg" />
                            <div class="casemain">
                                  <em>丰南销售中心设计</em>
                                  <table>
                                    <tr>
                                      <td>项目类型：</td>
                                      <td class="marright5">商场设计</td>
                                    </tr>
                                    <tr>
                                      <td>使用面积：</td>
                                      <td class="marright5"><pre>657㎡</pre></td>
                                    </tr>
                                    <tr>
                                      <td>项目地址：</td>
                                      <td class="marright5">唐山</td>
                                    </tr>
                                    <tr>
                                      <td>总设计师：</td>
                                      <td class="marright5">郭准</td>
                                    </tr>
                                  </table>
                                  <p>
                                      此项目集咖啡馆为一体的商业销售空间，通过把前后上下左右对应的面展开，各自保持相应的角度和位置，形成动态空间。入口处的咖啡厅悬浮在水面上，整体形态如上岸的大嘴鱼，别有一番风味。
                                  </p>
                            </div>
                    </div>
                    <img id="iconleft" src="{$img_url}mall/casechangeleft_.png" alt="上一个" /><img id="iconrgt" src="{$img_url}mall/casechangergt_.png" alt="下一个" />
            </div>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>获 取<br>报 价</button></a>
      </div>
      <footer>
        <div class="footcenter">
            <div class="footuplistbox">
                <dl>
                  <dt class="footdtfocus">快速导航</dt>
                  <dt>海岸设计</dt>
                </dl> 
                <ul>
<!--
EOT;
foreach($nav_list2[181] as $key=>$val){
  if($val['name']=='商场设计')continue;
echo <<<EOT
-->                
                  <a href="{$val['url']}" target="_blank" alt="{$val['name']}"><li>{$val['name']}</li></a>
<!--
EOT;
}
echo <<<EOT
-->
                </ul>
                <ul class="clsplay">
                  <li>商场规划设计</li>
                  <li>商场广场设计</li>
                  <li>购物广场设计</li>
                  <li>百货商场设计</li>
                  <li>商业街规划</li>
                </ul>
            </div>
          </div>
          <div class="footdownmain">
            <div class="fd_top_all">
              <div class="fd_top_left">
                <img src="{$img_url}mall/footerhaianlogo.png" alt="海岸九九">
                <p>
                  Web：http://www.haianzhuangshi.com<br/>
               
                  Add：北京市朝阳区北汽双井文创园3号楼E座108车间<br/>
                
                  E-mail：haianzhuangshi@sina.com 
                </p>
              </div>
              <div class="fd_top_main">
                <div class="erweimod">
                  <img src="{$img_url}mall/erweima1.jpg"/>
                  <p>扫一扫，免费通话</p>
                </div>
                <div class="erweimod">
                  <img src="{$img_url}mall/erweima2.jpg"/>
                  <p>微信公众号</p>
                </div>
              </div>
              <div class="fd_top_right">
                <img src="{$img_url}mall/footphone.png" alt="联系我们">
                <span>400-879-1110</span>
                <a href="javascript:;" onclick="jQuery('.boxbig').show()">
                <button>立即咨询</button></a>
              </div>
            </div>  
            <div class="fd_down_all">
              <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 京ICP备13049424号<br/>
    海岸声明：本站内容 图像资料版权均属「北京海岸设计」任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p>
              <p class="cnzz">{$lang_foot_cnzz}</p>
            </div>
          </div>
      </footer>
      <div style="display:none">
      { $met_foot_txt}
      </div>
</div>
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/slide_new.js"></script>
<script type="text/javascript" src="{$img_url}js/shangchang.js"></script>
<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>

<!--
EOT;
?>