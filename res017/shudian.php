 <!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
require_once template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require_once template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);  
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" href="{$img_url}css/shudian.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_tianyuan.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_two.css"> 
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/shudian.js"></script>
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
		<div class="banner">
			<span>书店</span><span>设计</span>
			<span class="nullinn"></span>
			<span class="nullinn"></span>
			<div class="bannercir">
				<p class="yearbann">1999-2018</p>
				<p class="designfont">DESIGN</p>
			</div>
			<img src="{$img_url}shudian/banneropac.jpg">
		</div>
		<div class="banxuxian"></div>
		<ul class="banlistbox overhid">
				<li><div class="mycircle"></div>创意书店</li>
				<li><div class="mycircle"></div>主题书店</li>
				<li><div class="mycircle"></div>特色书店</li>
				<li><div class="mycircle"></div>个性书店</li>
				<li><div class="mycircle"></div>儿童书店</li>
				<li><div class="mycircle"></div>图书馆</li>
			</ul>
		<div class="bannerbtnbox">
			<a href="javascript:;" onclick="jQuery('.boxbig').show()"><button class="bannerbtn">立即预约</button></a>
		</div>
	</header>
  <!-- 标题1 -->
 <div class="chaintitle">
    <div class="englishfon "><img src="{$img_url}shudian/chainengtit00.png"/></div>
    <div class="chinesefon ">书店设计原则</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability ">书店不仅是销售图书的卖场，还是一个充满着人文气息、节奏上不疾不徐、细节上周到细致、能够带来全方位购书享受的空间</p>
 </div>
 <div class="chain0">
    <ul>
        <li>
            <i><img src="{$img_url}shudian/chain0icon01.png" alt="书店区域"></i>
            <em>书店区域</em>
            <p>每个书店所处的地理位置、环境和读者结构不一样，各书店服务区的读者购买习惯可能是不一样的，要考虑读者选购习惯，同时要根据这个习惯设计读者的购书路线。</p>
        </li>
        <li>
            <i><img src="{$img_url}shudian/chain0icon02.png" alt="书架摆放"></i>
            <em>书架摆放</em>
            <p>书架摆放要合理，尽量不要让读者走重复路线，还要考虑在主通道两侧位置合理布置主打商品，因为主打品种占图书销售额比例是比较大的，把这些图书陈列到主通道上。</p>
        </li>
        <li>
            <i><img src="{$img_url}shudian/chain0icon03.png" alt="休息座位"></i>
            <em>休息座位</em>
            <p>书墩是一个很好的促销方式，但摆得过多过滥，反而适得其反，在主通道上适当摆放一些畅销或是特色图书可以引导读者按照设计路线去行走，同时促进图书销售额。</p>
        </li>
        <li>
            <i><img src="{$img_url}shudian/chain0icon04.png" alt="背景音乐"></i>
            <em>背景音乐</em>
            <p>音乐在卖场中扮演着十分重要的角色，但只能作为背景乐而发挥作用，千万不能让它“喧宾夺主”。</p>
        </li>
    </ul>
  </div>
  <div class="chain2">
    <div class="chain2bgbox">
      <div class="chain2bg"></div> 
    </div>
    <div class="chain2bgbox">
      <ul class="chain2mainbox">
        <li>
          <div class="ch2libgbox"></div>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
              <i class="ch2liicon"><img src="{$img_url}shudian/chain2liimg1.png" alt="北京海岸设计"></i>
              <em class="ch2liem">书籍区</em>
              <hr class="ch2lihr">
              <!-- <span class="ch2litxt">不出效果？</span> -->
              <p class="overhid">书店设计中不同的位置，书店产品的配置，比例不一样。切合实际的规划功能区域，既能呈现书籍的种类，又能凸显书籍区阅览的独特性。</p>
              <span class="before"></span>
          </div></a>
        </li>
        <li>
          <div class="ch2libgbox"></div>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
            <i class="ch2liicon"><img src="{$img_url}shudian/chain2liimg2.png" alt="北京海岸设计"></i>
            <em class="ch2liem">休闲区</em>
            <hr class="ch2lihr">
            <!-- <span class="ch2litxt">不能传播需求？</span> -->
            <p class="overhid">作为阅读体验的延伸，书店设计以浓郁的咖啡、精致的西点、清新的茶饮为主要形态，为消费者提供了一个慢呆书适的阅读环境和交流空间。</p>
            <span class="before"></span>
          </div></a>
        </li>
        <li>
          <div class="ch2libgbox"></div>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
            <i class="ch2liicon"><img src="{$img_url}shudian/chain2liimg3.png" alt="北京海岸设计"></i>
            <em class="ch2liem">精品区</em>
            <hr class="ch2lihr">
            <!-- <span class="ch2litxt">不出效果？</span> -->
            <p class="overhid">这里是一个大众的艺术舞台，这里有时尚前沿的艺术作品，也有两两自己的文创产品，效率手册、咖啡杯、情绪包、手工布袋、吉祥物、果壳…</p>
            <span class="before"></span>
          </div></a>
        </li>
        <li>
          <div class="ch2libgbox"></div>
          <a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
            <i class="ch2liicon"><img src="{$img_url}shudian/chain2liimg4.png" alt="北京海岸设计"></i>
            <em class="ch2liem">社交沙龙</em>
            <hr class="ch2lihr">
          <!--  <span class="ch2litxt">不出效果？</span> -->
            <p class="overhid">为了给更多的人带来对生活的理解和启发，这里定期推出各种文化体验活动，如主题沙龙、免费看电影、绘画比赛、艺术展等社群活动，打造了一个文化生活载体、社交共享平台。</p>
            <span class="before"></span>
          </div></a>
        </li>
      </ul>
      <!-- <div class="chain2leftbox"></div> -->
    </div>
  </div>
  <!-- 标题2 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit01.png"/></div>
    <div class="chinesefon">一站式全程服务</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability">书店设计，以书为媒介，衍生出书籍内容周边的文创产品，让书籍成为最好的导购员，书店设计让文创产品的历史、渊源、构成和成品独具光环 </p>
  </div>
  <div class="chain1">
    <div class="chain1main overhid tbox" id="index_tbox">
        <div class="vtl vtl1 overhid">
          <div class="v1rows1 overhid tbox1 d dl">
              <div class="v1row1main overhid">
                <em class="c1boxmainem">整体规划</em>
                <p>OVERALL</p>
                <p class="c1amlspan">PLANNING</p>
              </div>
          </div>
          <div class="v1rows2 overhid hoverbger tbox5 d dl">
              <img src="{$img_url}shudian/111.jpg" class="cmainimg" alt="书店设计">
              <!-- <div class="blackbgabox"></div> -->
              <div class="v1row2main overhid">
                <em class="c1boxmainem">书店设计</em>
                <p>Bookstore Design</p>
              </div>
          </div>
        </div>

        <div class="vtl vtl2 overhid">
          <div class="v2rows1 overhid hoverbger tbox2 d dt">
              <img src="{$img_url}shudian/222.jpg" class="cmainimg" alt="*书店设计*">
              <div class="yellowrbgabox"></div>
              <div class="v2row1main overhid">
                <em class="c1boxmainem blackfont">书店设计布局</em>
                <p class="blackfont">SHELF</p>
                <p class="c1amlspan blackfont">LAYOUT</p>
              </div>
          </div>
          <div class="v2rows2 overhid hoverbger tbox6 d db">
              <img src="{$img_url}shudian/333.jpg" class="cmainimg" alt="*书店设计*">
              <!-- <div class="blackbgabox"></div> -->
              <div class="v2row2main overhid">
                <em class="c1boxmainem">书籍陈列</em>
                <p>DISPLAY</p>
                <p>AND BOOKS</p>
              </div>
          </div>
          <div class="v2rows3 overhid hoverbger tbox7 d">
              <img src="{$img_url}shudian/444.jpg" class="cmainimg" alt="书店设计">
              <div class="blackbgaabox"></div>
              <div class="v2row3main overhid">
                <em class="c1boxmainem">照明</em>
                <p>LIGHTING</p>
              </div>
          </div>
          <div class="v2rows4 overhid tbox8 d db">
              <div class="yellowbox"></div>
              <div class="v2row3main overhid">
                <em class="c1boxmainem blackfont">形象墙</em>
                <p class="blackfont">IMAGE WALL</p>
              </div>
          </div>
        </div>

        <div class="vtl vtl3 overhid">
          <div class="v3rows1 overhid hoverbger tdec tbox3 d dt">
              <img src="{$img_url}shudian/555.jpg" class="cmainimg" alt="*图片占位*">
              <div class="v3row1main overhid">
                <em class="c1boxmainem">空间设计</em>
                <p>SPACE DESIGN</p>
              </div>
          </div>
        </div>

        <div class="vtl vtl4 overhid">
          <div class="v4rows1 overhid tbox4 d dr">
              <!-- <div class="redbox"></div> -->
              <img src="{$img_url}shudian/666.jpg" class="cmainimg" alt="*图片占位*">
              <div class="v4row1main overhid">
                <em class="c1boxmainem blackfont">书店招牌设计</em>
                <p class="blackfont">SIGNAGE DESIGN</p>
              </div>
          </div>
          <div class="v4rows2 overhid tbox9 d dr">
              <div class="bg2b2b2bbox"></div>
              <div class="v4row1main overhid">
                <em class="c1boxmainem">休闲空间</em>
                <p>LEISURE SPACE</p>
              </div>
          </div>
        </div>
    </div>
    <div class="chain1bottombox overhid">
      <div class="c1decoratebox1"></div>
      <img src="{$img_url}shudian/chain1downtxt.png" alt="我们关注当代的建筑设计、室内环艺、环境文化问题，并希望通过归本主义设计理念
专业的技术为您提出独特、合理、有效的设计方案">
      <div class="c1decoratebox2">
        
      </div>
    </div>
  </div>
  <div class="blackyellowblock">
      <div class="qlfblock">
        <div class="qlfinn">
          <h3>我们的态度</h3><p>将每一个项目都做成精品，否定平凡的设计创作</p> 
          <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即预约</a>
          <img src="{$img_url}shudian/433851310949894276.png" alt="" style="margin-top:26px;"> 
        </div>
        <img class="bticonq" src="{$img_url}shudian/qlf.jpg">
      </div>
      <div class="qrgttopblock"><div class="qrgttopinn"><h4>了解我们从案例开始</h4><p>十九年来<br/>
        秉持匠人精神成就每一个商业艺术品</p><a href="{$index_url}product/list-155-cn.html" target="_blank">更多书店设计案例</a></div></div>
      <div class="qbtrgtblock"><div class="qbtrgtinn">
          <h4>了解我们<br/>从团队开始</h4>
          <div class="fourspan"><span>十九年设计逐梦之旅</span>
          <span>覆盖全国超过200个城市</span>
          <span>二百多位精英设计师</span>
          <span>服务面积超过9999999㎡</span></div>
      </div></div>
      <div class="qbtlfblock">
        <div class="qbtlfinn">
          <div class="lampline"></div>
          <img class="lamptai" src="{$img_url}shudian/lamp.png">
          <h1>了解我们<br/>从策划方案开始</h1>
          <p>多元化的思维和卓越的创意</p>
        </div>
      </div>
    </div>
  </div>
  <!-- 标题 设计案例赏析 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit05.png"/></div>
    <div class="chinesefon">海岸书店设计案例赏析</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability">分享原创精选受欢迎的书店设计案例，专注于打造最美好的书店设计！</p>
  </div>
  <div class="storefront">
      <div class='catcoff'><img class="catcoffimg" src="{$img_url}shudian/bookstore1.jpg"/><div class="lfrgticon"><span class="qprebtn"></span><span class="qnextbtn"></span></div></div>
      <div class="catcoffrgt">
        <div class="addricon"><img src="{$img_url}shudian/locationico.png"/>北京·朝阳门</div>
        <h2>新华书店设计</h2>
        <hr>
        <a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}shudian/rgtarrow.png"/></a>
        <p>莎士比亚说过，书籍是全世界的营养品。生活里没有书籍，就好像大地没有阳光；智慧里没有书籍，就好像鸟儿没有翅膀。
        在本案的书店设计中，以清晰简洁为主，原木书架从入口延伸到书店深处，通透明亮的玻璃窗将室外景色引入室内，
        书籍堆砌而成的背景墙也为空间增添了一丝书香气息。不规则的几何造型装饰从地面通到天花板，
        在书本的精致之外，还有了一种别样的时尚，这种碰撞带来的趣味，给人与众不同的文化体验。
        书店，是一个知识流动的场所，一个人文互动的平台。在阅读区，书柜之间的空处摆放着同样材质的原木色桌子，
        还有一些风格个性的椅子，展现书店设计特色的同时还满足了人们可随处坐着看书的要求。</p>
      </div>
      <div class="catcoffrgt clsplay">
        <div class="addricon"><img src="{$img_url}shudian/locationico.png"/>北京·朝阳门</div>
        <h2>知一书店设计</h2>
        <hr>
        <a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}shudian/rgtarrow.png"/></a>
        <p>书店与咖啡馆的结合司空见惯，不过，当归本主义不拘一格的书店设计与天马行空的创意碰撞在一起时，
        带给人的期待值远远超过了1+1大于2的效果。空间内简洁的线条和强烈的色调对比，配合不落俗套的挂饰和家具
        ，把酷和帅气全面的呈现出来，给人耳目一新的感觉。面积绿植的运用，自然气息浓郁，原木书架或沿墙而置，
        或嵌于墙上，或自吊顶垂落而下，在空间延展开来，浪漫悠闲的空间里散发着淡淡的书香气息，让人心旷神怡。
        锈铁与混凝土地面使空间色调趋于宁静，为顾客营造出一个安逸、平和的港湾。整个空间的陈设繁多却不拥挤，
        随手拿起一本书，就着暖暖的阳光，一杯咖啡，组成最惬意的生活。</p>
      </div>
      <div class="catcoffrgt clsplay">
        <div class="addricon"><img src="{$img_url}shudian/locationico.png"/>北京·朝阳门</div>
        <h2>朔州大学书店设计</h2>
        <hr>
        <a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}shudian/rgtarrow.png"/></a>
        <p>在书店设计里融入文学艺术，建筑才能有足够厚重的历史感，每个细节中都留有书香韵味，
        归本主义风格的室内设计和颇具艺术氛围的布置让人赏心悦目，
        将饱满的空间布局和富有层次感的空间节奏裸露出来，流畅而便捷的动线引导沉静的空间，
        不觉中自然沉醉于书香空间里。针对大学校园内浓厚的学术气息，有意将书店的格调做到文艺清新
        ，浪漫自然。清水混凝土抹成的地面，钢铁吊顶，镂空钢铁书架穿插空间的始末。书香四溢的建筑空间，
        诗意的浪漫光影，简洁的设计，就是一间书店的魅力，是留住历史岁月的最好见证。</p>
      </div>
      <div class="catcoffrgt clsplay">
        <div class="addricon"><img src="{$img_url}shudian/locationico.png"/>北京·朝阳门</div>
        <h2>新华阅读课厅设计</h2>
        <hr>
        <a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}shudian/rgtarrow.png"/></a>
        <p>看书是一种享受，基于对现代阅读文化的思考、观察和理解，运用极简流畅的线条，
        搭配上自然质朴的原始材料，遵循归本主义的同时构造出文化风味十足的建筑空间。
        空间以黑色，白色作为主色调，配上简洁的原木色，低调、稳重的同时营造静谧的舒适感，
        楼梯旁的墙壁，用黑色的字体作为内容，与整体风格完美结合。每一个细节都力求精雕细琢，从顶部天花设计，
        到左右书架摆放，在有限的空间里给读者无尽的视觉美感。于时间里，每个人都在走向未来的旅程；
        于设计中，每个人都在感受全新的空间魅力。新华阅读客厅，不辜负读者的每一次阅读。</p>
      </div>
      <div class="catcoffrgt clsplay">
        <div class="addricon"><img src="{$img_url}shudian/locationico.png"/>北京·朝阳门</div>
        <h2>悦阅书店设计</h2>
        <hr>
        <a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}shudian/rgtarrow.png"/></a>
        <p>书是知识，是智慧，是思想，是需要被尊重的物品，以归本主义理念为核心，
        同时将漫咖啡元素注入其中，达到书店与人、书、自然相互交融的效果，
        让人们产生一种愉悦、留恋、眷念的生活方式的共鸣。书店设计中，设计师在书架的排列摆放上做足了文章
        ，除了固定的沿墙高架式书架外，更多地采用组合书架。柔和的灯光倾泻而下，打在书架上，
        折射出别样的精致，而书籍在光影缱绻中亦变得更加精美，让人生出阅览的欲望。几笔线条勾勒的水泥地面、
        白色钢管吊顶、各式镂空书架穿插空间的始末。空间四处优雅的放着各式桌椅，
        读者可以在这里点上一杯浓浓香气的咖啡，看着自己挑选的书籍，沉浸在书中的世界。</p>
      </div>
      <!-- 大蒙版 -->
      <div class="bigHotel clsplay">
        <div class="meng"></div>
        <div class="nomeng">
          <img class="tuceng" src=""/>
           <img  class="bigicon01" src="{$img_url}shudian/close.png" alt="关闭">
           <img class="bigicon02" src="{$img_url}shudian/left.png" alt="上一页"><img class="bigicon03" src="{$img_url}shudian/right.png" alt="下一页">
           <div class="hoteldata"><span class="hotelname">唐庄艺术酒店</span><span class="hotelcount">3/7</span></div>
        </div>
      </div>
    </div>
 <!-- 横幅过渡区 -->   
    <div class="blacklittlephone"><div class="inner1200"><span class="spanworry01">打破传统书店、图书馆模式，阅读+咖啡+生活（文传产品）</span>
    <span class="spanworry02">全国免费咨询热线</span><div class="divworry03"><i><img src="{$img_url}shudian/calling.gif" alt="拨打电话"></i>400-879-1110</div></div></div>
 <!-- 选择海岸 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit04.png"/></div>
    <div class="chinesefon">选择海岸就是选择信任</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability">您看到的是名字和标志，我们获得的是信任和满意。展示，不是为了炫耀，而是，让您放心选择！</p>
  </div>
  <div class="chain04">
    <div class="qchain001 chainae">
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo01.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo02.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo03.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo04.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo05.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo06.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo07.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo08.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo09.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo10.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo11.jpg"/></div>
      <div class="concatimg coff coff1"><img src="{$img_url}shudian/otherlogo12.jpg"/></div>
    </div>
    <div class="wrapfont">
      <img src="{$img_url}shudian/chain1downtxt1.png">
      <!--<div class="yellowborbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
        懒得看了？直接找设计师吧</a></div>-->
    </div>
  </div>
  <div class="figurewall">
      <div class="figurewallinn">
        <div class="qlffontbk">
            <span>Let</span><br/>
            <span class="yellowfont">us</span><br/>
            <span>do a lot</span><br/>
            <span>of</span><br/>
            <span>things</span><br/>
            <span class="yellowfont">together</span>
        </div>
        <div class="qrgtfontbk">
          <p class="pfont1">让我们一起做一番事情</p>
          <p class="pfont2 pmargin2">携手共进谱写合作共赢  美·利  世界新篇章</p>
          <p class="pfont3 pmargin3">我们深谙如何创造</p>
          <p class="pfont2 pmargin2"><span class="yellowfont">有效、可盈利</span>的零售体验</p>
          <p class="pfont3 pmargin4">能为客户提供全方位的服务</p>
          <p class="pfont2 pmargin2">最终打造成功的<span class="yellowfont">品牌环境</span></p>
          <p class="pfont3 pmargin6">专业的服务，从来电咨询开始！</p>
          <div class="specialbtn"><span>免费咨询热线</span><span><!-- 400-879-1110 --></span></div>
        </div>
      </div>
    </div>
  <!-- 标题3 -->
  <div class="chaintitle" id="chain3downtitle">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit03.png"/></div>
    <div class="chinesefon">我们一路走过</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability">北京海岸设计是您最专业的设计服务管家</p>
  </div>
  <!-- <div class="iconbox">
    
  </div> -->
  <div class="chain03">
    <div class="walkalong chainx">
      <div class="walkbox coff coff1"><div class="walkcir"><i class="iconfont icon-fuwu1"></i><p>为客户提供<span> 一站式全程服务</span></p></div></div>
      <div class="walkbox coff coff2"><div class="walkcir"><i class="iconfont icon-hangyeicon"></i><p>行业经验<span>从1999年成立服务至今</span></p></div></div>
      <div class="walkbox coff coff3"><div class="walkcir"><i class="iconfont icon-jingyantubiao"></i><p>经验丰富<span>280余位专职行业精英</span></p></div></div>
      <div class="walkbox coff coff4"><div class="walkcir"><i class="iconfont icon-zhouqi"></i><p>设计周期<span>保质保量高效率出图</span></p></div></div>
      <div class="walkbox coff coff5"><div class="walkcir"><i class="iconfont icon-qian"></i><p>预算合理<br/><span>开创有新意<br/>节约成本的实现方式 </span></p></div></div>
      <div class="walkbox coff coff6"><div class="walkcir"><i class="iconfont icon-xiangyingkuaisu"></i><p>快速响应<span>提交需求立即回电</span></p></div></div>
    </div>
     
    <div class="yellowborbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
      懒得看了？直接找设计师吧</a>
      <!--<hr class="hrtopright">
      <hr class="hrtopleft">
      <hr class="hrdownright">
      <hr class="hrdownleft">
      <hr class="hrright">
      <hr class="hrleft">-->
    </div>
  </div>

 <!-- 标题2 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit02.png"/></div>
    <div class="chinesefon">海岸书店设计案例</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability">高效的生产能力，快速的应变能力，完善的售后保障，是我们赢得客户信任的关键！</p>
  </div>
  <ul class="chain3">
    <li class="upper ">
      <img src="{$img_url}shudian/c3centent01.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">新华书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：北京 <br>
           项目类型：书店设计 <br>
           设计面积：1000㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>新华书店</em>
        <span>1000㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/news/431-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="down ">
      <img src="{$img_url}shudian/c3centent02.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">田森图书馆</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：山西 <br>
           项目类型：书店设计 <br>
           设计面积：1500㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>田森图书馆</em>
        <span>1500㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/service/156-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="upper ">
      <img src="{$img_url}shudian/c3centent03.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">悦阅书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：湖南 <br>
           项目类型：书店设计 <br>
           设计面积：600㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>悦阅书店</em>
        <span>600㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/news/653-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="down ">
      <img src="{$img_url}shudian/c3centent04.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">朔州大学书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：山西 <br>
           项目类型：书店设计 <br>
           设计面积：309㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>朔州大学书店</em>
        <span>309㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/301-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="upper-1 ">
      <img src="{$img_url}shudian/c3centent05.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">黑河图书馆</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
           <p>项目地址： 黑龙江 <br>
           项目类型：书店设计 <br>
           设计面积：3400㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>黑河图书馆</em>
        <span>3400㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/53-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="down-1 ">
      <img src="{$img_url}shudian/c3centent06.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">单向空间书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
         <p>项目地址： 北京 <br>
           项目类型：书店设计 <br>
           设计面积：171㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>单向空间书店</em>
        <span>171㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/302-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="upper-1 ">
      <img src="{$img_url}shudian/c3centent07.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">新华阅读客厅</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：山西 <br>
           项目类型：书店设计 <br>
           设计面积：304㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>新华阅读客厅</em>
        <span>304㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/251-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="down-1 ">
      <img src="{$img_url}shudian/c3centent08.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">知一书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：黑龙江 <br>
           项目类型：书店设计 <br>
           设计面积：785㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>知一书店</em>
        <span>785㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/299-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="upper-2 ">
      <img src="{$img_url}shudian/c3centent09.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">悦阅书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：湖南 <br>
           项目类型：书店设计 <br>
           设计面积：600㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>悦阅书店</em>
        <span>600㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/news/653-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="down-2 ">
      <img src="{$img_url}shudian/c3centent10.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">知一书店</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：黑龙江 <br>
           项目类型：书店设计 <br>
           设计面积：785㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>知一书店</em>
        <span>785㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/299-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="upper-2 ">
      <img src="{$img_url}shudian/c3centent11.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">黑河图书馆</em>
        <div class="c3liupcent">
           <hr class="c3centerhr">
           <p>项目地址： 黑龙江 <br>
           项目类型：书店设计 <br>
           设计面积：3400㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>黑河图书馆</em>
        <span>3400㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/53-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li class="down-2 ">
      <img src="{$img_url}shudian/c3centent12.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">新华书店</em>
        <div class="c3liupcent">
            <hr class="c3centerhr">
          <p>项目地址：北京 <br>
           项目类型：书店设计 <br>
           设计面积：1000㎡<br>
          </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>新华书店</em>
        <span>1000㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/news/431-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
  </ul> 

  <!-- 标题6 -->
  <div class="chaintitle anli_d">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit06.png"/></div>
    <div class="chinesefon">海岸书店设计 · 预约触手可及</div>
    <div class="zsblock"></div>
    <hr/>
    <p class="ability">欢迎您提交需求，收到您的需求我们会在第一时间内给您反馈！</p>
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
    
  <div class="navigation">
    <ul class="nit">
      <li class="nit-li active">快速导航</li>
      <li>海岸设计</li>
    </ul>
    <ul class="gation">
<!--
EOT;
foreach($nav_list2[181] as $val){
  if($val['name']=='书店设计')continue;

echo <<<EOT
-->
      <li><a href="{$val[url]}" target="_blank" alt="{$val[name]}">{$val[name]}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
    </ul>
    <ul class="gation clsplay">
<!--
EOT;
$met_link=methtm_link('text','','','',1);
echo <<<EOT
-->
       {$met_link}
    </ul>
  </div>
  <div class="qboot">
    <div class="qbootinn">
      <div class="bootlf"><img src="{$img_url}shudian/bootlogo.png"/><p>WEB：www.beijinghaian.com<br/>
        E -MAIL：ceo@beijinghaian.com <br/>
        地址：北京市朝阳区北汽双井文创园3号楼E座108</p></div>
      <div class="bootmid">
        <img src="{$img_url}shudian/bootqrcode.jpg"/>
        <p class="bootp1 bootmid1">扫一扫，免费通话</p>
        <p class="bootp2">海岸官方公众号</p>
        <p class="bootp3">在线服务客服</p>
        </div>
      <div class="bootrgt"><h3><img src="{$img_url}shudian/boot400.png"/></h3><p>全国免费热线</p><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="bootredbtn">立即预约</div></a></div>
      <div></div>
    </div>
  </div>
  <div class="footer">
      <div class="footer1">
        <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>京ICP备13049424号</span></p>
        <p>海岸声明：本站内容 图像资料版权均属「北京海岸设计」所有，任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布，违者本公司将依法追究其法律责任！</p> 
        <div class="cnzz">{$lang_foot_cnzz}</div>
      </div>  
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
<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
          
<!--
EOT;
?>