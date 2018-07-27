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
{$methtml_head} 
<link rel="stylesheet" type="text/css" href="{$img_url}css/liansuo.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_tianyuan.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">   
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_two.css">   
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/liansuo.js"></script>

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
	<div class="headercontent">
		<img src="{$img_url}liansuo/tag1.png" class="bantag1" alt="品牌连锁店设计">
		<img src="{$img_url}liansuo/tag2.png" class="bantag2" alt="为客户提供一站式解决方案">
		<img src="{$img_url}liansuo/tag3.png" class="bantag3" alt="19年设计行业领先品牌，280余位设计精英团队">
		<ul class="banlistbox hoverbger">
			<li><div class="mycircle"></div>连锁店面设计</li>
			<li><div class="mycircle"></div>品牌店面设计</li>
			<li><div class="mycircle"></div>餐饮店面设计</li>
			<li><div class="mycircle"></div>高端店铺设计</li>
			<li><div class="mycircle"></div>高端体验店设计</li>
		</ul>
	</div>
	<div class="bannerbtnbox boxsizing">
		<div class="banbtnbgline"></div>
		<a href="javascript:;" onclick="jQuery('.boxbig').show()"><button class="bannerbtn">立即预约</button></a>
	</div>
</header>
<!-- 标题1 -->
<div class="chaintitle">
	<div class="englishfon slidb"><img src="{$img_url}liansuo/chainengtit00.png"/></div>
	<div class="chinesefon slidb">连锁店设计原则</div>
	<div class="zsblock"></div>
	<hr/>
	<p class="ability slidb">帮助零售连锁品牌解决问题，打破传统壁垒，缔造新零售概念店，创造商业成功和社会价值</p>
</div>
<div class="chain0">
	<ul>
		<li>
			<i><img src="{$img_url}liansuo/chain0icon01.png" alt="整体性"></i>
			<em>整体性</em>
			<p>连锁店装修时首先要注意充分考虑到墙面和室内的其他部分的统一性，使整个墙面和整个空间形成统一的整体。</p>
		</li>
		<li>
			<i><img src="{$img_url}liansuo/chain0icon02.png" alt="独特性"></i>
			<em>独特性</em>
			<p>做到与众不同、标新立异，使顾客一看到店铺就具有心灵上的震撼感和情感的共鸣，敢用夸张的形象、文字来体现店铺的独特风格。</p>
		</li>
		<li>
			<i><img src="{$img_url}liansuo/chain0icon03.png" alt="艺术性"></i>
			<em>艺术性</em>
			<p>墙面的装饰效果能够很好的渲染和美化室内的环境，影响着室内空间的气氛，创造室内空间良好的艺术效果。</p>
		</li>
		<li>
			<i><img src="{$img_url}liansuo/chain0icon04.png" alt="物理性"></i>
			<em>物理性</em>
			<p>墙面在连锁店装修中占据的空间较大，要求也较高，因此在处理保暖和防火等要求时也需要特别的注意。  </p>
		</li>
	</ul>
</div>
<!-- 标题1 -->
<div class="chain2">
	<div class="chain2bgbox">
		<div class="chain2bg"></div>
	</div>
	<div class="chain2bgbox">
		<ul class="chain2mainbox">
			<li>
				<div class="ch2libgbox"></div>
				<div class="ch2licenter">
					<i class="ch2liicon"><img src="{$img_url}liansuo/chain2liimg1.png" alt="北京海岸设计"></i>
					<em class="ch2liem">连锁店设计难度大</em>
					<hr class="ch2lihr">
					<span class="ch2litxt">不出效果？</span>
					<p class="overhid">根据客户的项目特性，切合实际的规划功能区域，打造独树一帜的空间风格。既能呈现空间使用率，又能凸显重要区域的独特性。</p>
					<a href='http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D' target='_blank'><span class="before"></span></a>
				</div>
			</li>
			<li>
				<div class="ch2libgbox"></div>
				<div class="ch2licenter">
					<i class="ch2liicon"><img src="{$img_url}liansuo/chain2liimg2.png" alt="北京海岸设计"></i>
					<em class="ch2liem">室内空间没创新</em>
					<hr class="ch2lihr">
					<span class="ch2litxt">不能传播需求？</span>
					<p class="overhid">以归本主义为核心对每个项目进行原创设计从设计图效果图到最终效果让客户全程参与设计，按需求量身设计海岸给您想要的完美空间 。</p>
					<a href='http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D' target='_blank'><span class="before"></span></a>
				</div>
			</li>
			<li>
				<div class="ch2libgbox"></div>
				<div class="ch2licenter">
					<i class="ch2liicon"><img src="{$img_url}liansuo/chain2liimg3.png" alt="北京海岸设计"></i>
					<em class="ch2liem">钱花了设计成果不满意</em>
					<hr class="ch2lihr">
					<span class="ch2litxt">不出效果？</span>
					<p class="overhid">海岸创立于1999年，被认为是设计行业第一品牌，精英设计师280人，分为18个战区进行流程化标准化作业，优秀的执行是结果的保障。</p>
					<a href='http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D' target='_blank'><span class="before"></span></a>
				</div>
			</li>
			<li>
				<div class="ch2libgbox"></div>
				<div class="ch2licenter">
					<i class="ch2liicon"><img src="{$img_url}liansuo/chain2liimg4.png" alt="北京海岸设计"></i>
					<em class="ch2liem">您担心的问题</em>
					<hr class="ch2lihr">
					<span class="ch2litxt">我们都为您想到了！</span>
					<p class="overhid">我们的设计，更专业、更专注。从全案设计→方案效果图→3D立体效果展现→店面实施→完美呈现落地效果，进行全方位设计配套服务。</p>
					<a href='http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D' target='_blank'><span class="before"></span></a>
				</div>
			</li>
		</ul>

	</div>
</div>
<!-- 标题2 -->
<div class="chaintitle">
	<div class="englishfon"><img src="{$img_url}liansuo/chainengtit01.png"/></div>
	<div class="chinesefon">一站式全程服务</div>
	<div class="zsblock"></div>
	<hr/>
	<p class="ability">一个成功的品牌连锁店升级是从设计开始的，无设计、不生活</p>
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
					<img src="{$img_url}liansuo/111.jpg" class="cmainimg" alt="*图片占位*">
					<div class="v1row2main overhid">
						<em class="c1boxmainem">门面设计</em>
						<p>FACADE DESIGN</p>
					</div>
			</div>
		</div>
		<div class="vtl vtl2 overhid">
			<div class="v2rows1 overhid hoverbger tbox2 d dt">
				<img src="{$img_url}liansuo/222.jpg" class="cmainimg" alt="*图片占位*">
				<div class="redrbgabox"></div>
				<div class="v2row1main overhid">
					<em class="c1boxmainem">店内布局</em>
					<p>STORE</p>
					<p class="c1amlspan">LAYOUT DESIGN</p>
				</div>
			</div>
			<div class="v2rows2 overhid hoverbger tbox6 d db">
					<img src="{$img_url}liansuo/333.jpg" class="cmainimg" alt="*图片占位*">
					<div class="v2row2main overhid">
						<em class="c1boxmainem">商品陈列</em>
						<p>GOODS ON</p>
						<p>DESIGN</p>
					</div>
			</div>
			<div class="v2rows3 overhid hoverbger tbox7 d">
					<img src="{$img_url}liansuo/444.jpg" class="cmainimg" alt="*图片占位*">
					<div class="blackbgaabox"></div>
					<div class="v2row3main overhid">
						<em class="c1boxmainem">照明</em>
						<p>LIGHTING</p>
					</div>
			</div>
			<div class="v2rows4 overhid tbox8 d db">
					<div class="redbox"></div>
					<div class="v2row3main overhid">
						<em class="c1boxmainem">形象墙</em>
						<p>IMAGE WALL DESIGN</p>
					</div>
			</div>
		</div>
		<div class="vtl vtl3 overhid">
			<div class="v3rows1 overhid hoverbger tbox3 d dt">
				<img src="{$img_url}liansuo/555.jpg" class="cmainimg" alt="*图片占位*">
				<div class="v3row1main overhid">
					<em class="c1boxmainem">店内环境</em>
					<p>STORE ENVIRONMENT</p>
				</div>
			</div>
		</div>
		<div class="vtl vtl4 overhid">
			<div class="v4rows1 overhid tbox4 d dr">
				<img src="{$img_url}liansuo/666.jpg" class="cmainimg" alt="*图片占位*">
				<div class="v4row1main overhid">
					<em class="c1boxmainem">招牌设计</em>
					<p>TRADEMARK DESIGN</p>
				</div>
			</div>
			<div class="v4rows2 overhid tbox9 d dr">
				<div class="bg2b2b2bbox"></div>
				<div class="v4row1main overhid">
					<em class="c1boxmainem">橱窗设计</em>
					<p>THE WINDOW DESIGN</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 标题3 -->	
<div class="blackredblock">
	<div class="qlfblock">
		<div class="qlfinn">
			<h3>我们的态度</h3><p>将每一个项目都做成精品，否定平凡的设计创作</p>
			<a>了解更多</a> 
			<img src="{$img_url}liansuo/417580417301050416.png" alt="" style="margin-top:100px;"> 
		</div>
		<img class="bticonq" src="{$img_url}liansuo/qlf.jpg">
	</div>
	<div class="qrgttopblock"><div class="qrgttopinn"><h4>了解我们从案例开始</h4><p>十九年来<br/>
		秉持匠人精神成就每一个商业艺术品</p><a href="{$index_url}product/" target="_blank">更多设计案例</a></div>
	</div>
	<div class="qbtrgtblock">
		<div class="qbtrgtinn">
			<h4>了解我们<br/>从团队开始</h4>
			<div class="fourspan"><span>十九年设计逐梦之旅</span>
			<span>覆盖全国超过200个城市</span>
			<span>二百多位精英设计师</span>
			<span>服务面积超过9999999㎡</span></div>
		</div>
	</div>
	<div class="qbtlfblock">
		<div class="qbtlfinn">
			<div class="lampline"></div>
			<img class="lamptai" src="{$img_url}liansuo/lamp.png">
			<h1>了解我们<br/>从策划方案开始</h1>
			<p>多元化的思维和卓越的创意</p>
		</div>
	</div>
</div>
<!-- 标题4 -->
<div class="chaintitle1">
	<div class="englishfon"><img src="{$img_url}liansuo/chainengtit05.png"/></div>
	<div class="chinesefon">店面设计案例</div>
	<div class="zsblock"></div>
	<hr/>
	<p class="ability">分享原创精选受欢迎的店面设计案例，专注于打造最美好的设计！</p>
</div>
<!-- 大蒙版 -->
<div class="bigHotel clsplay">
	<div class="meng"></div>
	<div class="nomeng">
	<img class="tuceng" src=""/>
		<img  class="bigicon01" src="{$img_url}liansuo/close.png" alt="关闭">
		<img class="bigicon02" src="{$img_url}liansuo/left.png" alt="上一页"><img class="bigicon03" src="{$img_url}liansuo/right.png" alt="下一页">
		<div class="hoteldata"><span class="hotelname">唐庄艺术酒店</span><span class="hotelcount">3/7</span></div>
		
	</div>
</div>
<div class="chain05">
	<div class="storefront">
		<div class='catcoff'><img class="catcoffimg" src="{$img_url}liansuo/somecoff1.jpg"/><div class="lfrgticon"><span class="qprebtn"></span><span class="qnextbtn"></span></div></div>
		<div class="catcoffrgt">
			<div class="addricon"><img src="{$img_url}liansuo/locationico.png"/>北京·朝阳门</div>
			<h2>漫猫咖啡</h2>
			<hr>
			<a class="maskbigico" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">获取报价&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}liansuo/rgtarrow.png"/></a>
			<p>漫猫咖啡MANCAT隶属上海皓元实业有限公司，于2014年3月创建咖啡品牌。以猫为主题，通过将猫爪印，猫涂鸦等猫元素与水泥、耐候钢、玻璃、木头等归本元素相结合，关于猫的一切元素贯穿整个空间，动线明朗，局部涂鸦处理弱化了室内的大柱子，再随处添加艺术涂鸦和时尚元素进行点缀，配以绿植及柔和丰富多彩的灯饰让空间更加温馨浪漫、更加丰富。在归本主义的大框架之下，各种材料相互融合，不仅充分凸显出每一种材料的气质，也让整个空间在复古和自然的风潮中散发出硬朗的旧工业气息。</p>
		</div>
		<div class="catcoffrgt clsplay">
			<div class="addricon"><img src="{$img_url}liansuo/locationico.png"/>北京·朝阳门</div>
			<h2>逸美时光咖啡</h2>
			<hr>
			<a class="maskbigico" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">获取报价&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}liansuo/rgtarrow.png"/></a>
			<p>逸美时光咖啡在2013年在全国已发展50多家加盟店，主要打造传统欧式复合型休闲咖啡厅。
			将粗糙的结构语言变为高尚的形式，以老榆木桌椅、 欧式沙发、石灰红砖墙、生态树、特色休闲书吧、涂鸦画、未经处理的钢材、 玻璃，凸显原生态。
			在简单古朴的元素中增添欧洲、地中海、韩式田园、东南 亚风格的树脂、玻璃、水晶、铁艺、布艺、亚克力、铜、雕刻等各种灯饰，以传达自然、浪漫的感觉
			，用心的细节体验随处彰显，细微事物藏着文化与工艺的精华，大体量的家具与陈设配饰，将阔大的空间布置的有血有肉，身形具备，拉近人与艺术的距离。</p>
		</div>
		<div class="catcoffrgt clsplay">
			<div class="addricon"><img src="{$img_url}liansuo/locationico.png"/>北京·朝阳门</div>
			<h2>咖啡陪你</h2>
			<hr>
			<a class="maskbigico" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">获取报价&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}liansuo/rgtarrow.png"/></a>
			<p>原木与钢木装点内部环境，简洁的材料呈现出丰富的空间变化与层次感，各种不同的元素，绿植、书架、各式水晶灯，活跃的色彩木条搭配出心情的愉悦。
			从整体到局部无不体现出亲近自然，关怀宾客的理念，空间在归本主义的大结构之下，结合“阿拉比卡”咖啡的生长特点，
			通过大量的生态木和粗线条刻画出它的生机勃勃，展现出自然与空间的和谐一体。归本主义的设计风格，
			不经意间渗透到咖啡陪你的每一个角落，简约自然，原始裸露，大自然的清新舒适，这种设计手法，给人沉静的力量，
			将外界的纷扰隔绝在浪漫诗意的空间对话关系之外。</p>
		</div>
		<div class="catcoffrgt clsplay">
			<div class="addricon"><img src="{$img_url}liansuo/locationico.png"/>北京·朝阳门</div>
			<h2>@SOME咖啡</h2>
			<hr>
			<a class="maskbigico" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">获取报价&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}liansuo/rgtarrow.png"/></a>
			<p>在空间设计中，将内部设计作为建筑自然延续的一部分，在保留建筑创意和现代性的同时，
			增添“钢、木、砖、石、玻璃、混凝土”元素，延续了归本主义设计理念，
			以简练精致的线条表现艺匠、以温馨雅致的格调形成意境、以轻快细腻的质感传达情感，
			将原建筑的设计魅力发挥到极致，意在简约自然中营造心灵与自然的完美契合。
			简单的线条勾勒流畅的视觉空间，随性灵巧的装饰携带天然的芬芳气息，回归原生态的美酒加咖啡奢华享乐氛围中，
			亦不失文艺怀旧的清新味道，让消费者体验到了别具一格的咖啡文化与魅力。</p>
		</div>
		<div class="catcoffrgt clsplay">
			<div class="addricon"><img src="{$img_url}liansuo/locationico.png"/>北京·朝阳门</div>
			<h2>田森田里酒店</h2>
			<hr>
			<a class="maskbigico" href="javascript:void(0);" onclick="jQuery('.boxbig').show()">获取报价&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}liansuo/rgtarrow.png"/></a>
			<p>边边角角，条条框框，有意无意间，都在体现对极致生活的追求。
			东西方文化与新旧元素进行融合，展现一个品牌应有的格调与极致，设计可以像音乐，
			又或者像诗歌，田里酒店想要传达更多的是情感，一种氛围的营造。除了具备传统酒店应有的功能外，
			田里还专门设有商务会议和商业空间，这让空间多了一份人文与社交气息，更贴近艺术和生活。
			钢筋水泥结构搭配绿植，使得整个空间具备了独特的气质，也在形态上显得更加立体和艺术，非常有趣。
			田里，不仅仅是一个酒店，更是一个充满艺术气息的文化园。</p>
		</div>
	</div>
	
	<!-- 大块 -->
	
</div>
<!-- 联系电话 -->
<div class="blacklittlephone">
	<div class="inner1200">
		<span class="spanworry01">还在为连锁店面设计而担心吗？你想了解怎样的空间格局吗？</span>
		<span class="spanworry02">请联系海岸设计</span>
		<div class="divworry03"><i><img src="{$img_url}liansuo/calling.gif" alt="拨打电话"></i>400-879-1110</div>
	</div>
</div>
<!-- 标题5 -->
<div class="chaintitle">
	<div class="englishfon"><img src="{$img_url}liansuo/chainengtit04.png"/></div>
	<div class="chinesefon">选择就是信任</div>
	<div class="zsblock"></div>
	<hr/>
	<p class="ability">您看到的是名字和标志，我们获得的是信任和满意。展示，不是为了炫耀,而是，让你放心选择！</p>
</div>
<div class="chain04">
	<div class="qchain001 chainae">
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo01.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo02.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo03.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo04.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo05.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo06.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo07.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo08.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo09.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo10.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo11.jpg"/></div>
		<div class="concatimg coff coff1"><img src="{$img_url}liansuo/otherlogo12.jpg"/></div>
	</div>
	<div class="Absorbed">
		<img src="{$img_url}liansuo/wrapfont01.png" alt="">
	</div>
</div>
<!-- 团队 -->
<div class="figurewall">
	<div class="figurewallinn">
		<div class="qlffontbk">
				<span>Let</span><br/>
				<span class="redfont">us</span><br/>
				<span>do a lot</span><br/>
				<span>of</span><br/>
				<span>things</span><br/>
				<span class="redfont">together</span>
		</div>
		<div class="qrgtfontbk">
			<p class="pfont1">让我们一起做一番事情</p>
			<p class="pfont2 pmargin2">携手共进谱写合作共赢  美·利  世界新篇章</p>
			<p class="pfont3 pmargin3">我们深谙如何创造</p>
			<p class="pfont2 pmargin2"><span class="redfont">有效、可盈利</span>的零售体验</p>
			<p class="pfont3 pmargin4">能为客户提供全方位的服务</p>
			<p class="pfont2 pmargin2">最终打造成功的<span class="redfont">品牌环境</span></p>
			<p class="pfont3 pmargin6">专业的服务，从来电咨询开始！</p>
			<div class="specialbtn"><span>免费咨询热线</span><span><!-- 400-879-1110 --></span></div>
		</div>
	</div>
</div>	
<!-- 标题6 -->
<div class="chaintitle" id="chain3downtitle">
	<div class="englishfon"><img src="{$img_url}liansuo/chainengtit03.png"/></div>
	<div class="chinesefon">我们一路走过</div>
	<div class="zsblock"></div>
	<hr/>
	<p class="ability">北京海岸设计是您最专业的设计服务管家</p>
</div>
<div class="chain03">
	<div class="walkalong chainx">
		<div class="walkbox coff coff1"><div class="walkcir"><i class="iconfont icon-fuwu1"></i><p>为客户提供<span> 一站式全程服务</span></p></div></div>
		<div class="walkbox coff coff2"><div class="walkcir"><i class="iconfont icon-hangyeicon"></i><p>行业经验<span>从1999年成立服务至今</span></p></div></div>
		<div class="walkbox coff coff3"><div class="walkcir"><i class="iconfont icon-jingyantubiao"></i><p>经验丰富<span>280余位专职行业精英</span></p></div></div>
		<div class="walkbox coff coff4"><div class="walkcir"><i class="iconfont icon-zhouqi"></i><p>设计周期<span>保质保量高效率出图</span></p></div></div>
		<div class="walkbox coff coff5"><div class="walkcir"><i class="iconfont icon-qian"></i><p>预算合理<br/><span>开创有新意<br/>节约成本的实现方式 </span></p></div></div>
		<div class="walkbox coff coff6"><div class="walkcir"><i class="iconfont icon-xiangyingkuaisu"></i><p>快速响应<span>提交需求立即回电</span></p></div></div>
	</div>
	<a href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><div class="redborbtn">
		懒得看了？直接找设计师吧
		<hr class="hrtopright">
		<hr class="hrtopleft">
		<hr class="hrdownright">
		<hr class="hrdownleft">
		<hr class="hrright">
		<hr class="hrleft">
	</div></a>
	
</div>
<!-- 海岸服务案例 -->
<div class="chaintitle">
	<div class="englishfon"><img src="{$img_url}liansuo/chainengtit02.png"/></div>
	<div class="chinesefon">海岸服务的案例</div>
	<div class="zsblock"></div>
	<hr/>
	<p class="ability">高效的生产能力，快速的应变能力，完善的售后保障，是我们赢得客户信任的关键！</p>
</div> 
<ul class="chain3">
		<li class="upper">
			<img src="{$img_url}liansuo/c3centent01.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>魏老香</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>魏老香创立于2004年，是一家以经营酱香型火锅为主的大型跨区域餐饮连锁品牌。</p>
					<dl class="c3cent">
						<dt>北京 马驹桥 839㎡</dt>
						<dt>北京 狼垡 357㎡</dt>
						<dt>北京 集团总部 714㎡</dt>
					</dl>
				</div>
			</div> 
		</li>
		<li class="down">
			<img src="{$img_url}liansuo/c3centent02.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>汉拿山</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>汉拿山公司成立于2001年，是多品牌、跨区域、多城市经营的大型餐饮企业。</p>
					<dl class="c3cent">
						<dt>北京 双井 643㎡</dt>
					</dl>
				</div>
			</div> 
		</li>
		<li class="upper">
			<img src="{$img_url}liansuo/c3centent03.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>漫猫咖啡</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>漫猫咖啡成立于2014年，在全国拥有几百家加盟店,进驻各地大型商圈,品牌成熟有影响力。</p>
					<dl class="c3cent moredt">
						<dt>北京（5）</dt>
						<dt>安徽（1）</dt>
						<dt>重庆（2) </dt>
						<dt>黑龙江（1）</dt>
						<dt>陕西（1）</dt>
						<dt>福建（2）</dt>
						<dt>湖南（1）</dt>
						<dt>湖北（2）</dt>
						<dt>浙江（5）</dt>
						<dt>河南（2）</dt>
						<dt>河北（1）</dt>
						<dt>江西（1）</dt>
						<dt>江苏（9）</dt>
						<dt>广东（4）</dt>
						<dt>天津（2）</dt>
						<dt>四川 (1) </dt>
						<dt>吉林 (1)</dt>
						<dt>上海 (8)</dt>
					</dl>
				</div>
			</div> 
		</li>
		<li class="down">
			<img src="{$img_url}liansuo/c3centent04.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>釜山料理</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>釜山料理是以"炭火烧烤"为主题的韩式料理连锁餐厅，成立于2005年。</p>
					<dl class="c3cent">
						<dt>江苏 无锡 749㎡</dt>
					</dl>
				</div>
			</div> 
		</li>
		<li class="upper-1">
			<img src="{$img_url}liansuo/c3centent05.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>漫咖啡</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>2011年正式推出时尚咖啡品牌漫咖啡，是专为中国消费者量身打造的高级咖啡店。</p>
					<dl class="c3cent">
						<dt>河南 周口 715㎡</dt>
						<dt>北京 朝阳门 664㎡</dt>
						<dt>北京 大悦城 664㎡</dt>
						<dt>北京 广渠门 320㎡</dt>
						<dt>北京 健德门 533㎡</dt>
					</dl>
				</div>
			</div> 

		</li>
		<li class="down-1">
			<img src="{$img_url}liansuo/c3centent06.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>拉那巴米</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>拉那巴米成立于2006年，是一家拥有先进西点技术和西点文化的烘培企业。</p>
					<dl class="c3cent">
						<dt>浙江 环球中心店 314㎡</dt>
						<dt>宁波 银泰店 164㎡</dt>
						<dt>宁波 万达店 266㎡</dt>
						<dt>宁波 世纪东方 164㎡</dt>
					</dl>
				</div>
			</div> 

		</li>
		<li class="upper-1">
			<img src="{$img_url}liansuo/c3centent07.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>良子健身</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>其服务性质是以健身、保健、休闲为主的大型连锁企业，总部设在北京，并有多家直营店。</p>
					<dl class="c3cent">
						<dt>北京 望京 1129㎡</dt>
						<dt>北京 通州 1428㎡</dt>
					</dl>
				</div>
			</div> 

		</li>
		<li class="down-1">
			<img src="{$img_url}liansuo/c3centent08.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>咖啡陪你</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>韩国最大的咖啡连锁企业，自2008年成立以来在韩国已有9百多家门店，总部位于首尔市清潭洞。</p>
					<dl class="c3cent">
						<dt>陕西 西安  1800㎡</dt>
						<dt>甘肃 兰州 543㎡</dt>
						<dt>湖南 张家界 371㎡</dt>
						<dt>深圳 (369)</dt>
						<dt>北京（3+）</dt>
					</dl>
				</div>
			</div> 

		</li>
		<li class="upper-2">
			<img src="{$img_url}liansuo/c3centent09.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>田森田里酒店</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>田里酒店是田森集团打造的系列酒店之一，是一家连锁综合服务性的酒店。</p>
					<dl class="c3cent">
						<dt>四川 绵阳 4300㎡</dt>
						<dt>山西 新晋府 8080㎡</dt>
						<dt>山西 太谷 13000㎡</dt>
						<dt>山西 桃园 3747㎡</dt>
						<dt>山西 大学城 8807㎡</dt>
					</dl>
				</div>
			</div> 

		</li>
		<li class="down-2">
			<img src="{$img_url}liansuo/c3centent10.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>@SOME咖啡</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>致力于打造集咖啡、红酒、美食、休闲于一体的特色文化主题咖啡生活馆。</p>
					<dl class="c3cent">
						<dt>陕西 西安 396㎡ </dt>
						<dt>辽宁 大连 1200㎡</dt>
						<dt>福建 福州 814㎡</dt>
						<dt>湖南 郴州 1233㎡</dt>
						<dt>江苏 常熟 771㎡</dt>
						<dt>山东 青岛 654㎡</dt>
						<dt>上海（5+）</dt>
					</dl>
				</div>
			</div> 

		</li>
		<li class="upper-2">
			<img src="{$img_url}liansuo/c3centent11.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>逸美时光咖啡</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>一家集食品研发、生产、销售和人员培训为一体的全国性连锁餐饮企业。</p>
					<dl class="c3cent moredt">
						<dt>上海（2+）</dt>
						<dt>北京（1+）</dt>
						<dt>黑龙江（2+）</dt>
						<dt>陕西（1+）</dt>
						<dt>大连（1+）</dt>
						<dt>福建（2+）</dt>
						<dt>海南（1+）</dt>
						<dt>浙江（1+）</dt>
						<dt>河南（2+）</dt>
						<dt>石家庄（1+）</dt>
						<dt>江苏（4+）</dt>
						<dt>广西（1+）</dt>
						<dt>广东（2+）</dt>
						<dt>山东（1+）</dt>
						<dt>吉林（1+）</dt>
					</dl>
				</div>
			</div>

		</li>
		<li class="down-2">
			<img src="{$img_url}liansuo/c3centent12.jpg" alt="北京海岸设计">
			<div class="c3centerredbox"></div>
			<div class="c3centertxtbox">
				<em>李嘉嘉串串香</em>
				<div class="c3liupcent">
					<hr class="c3centerhr">
					<span>HOVER VIEW</span>
				</div>
				<div class="c3lidowncent disnone">
					<p>这是一家老字号招牌火锅连锁店，百余种美味搭配主食销售的川渝特色火锅店。</p>
					<dl class="c3cent">
						<dt>北京  428㎡</dt>
					</dl>
				</div>
			</div> 

		</li>
</ul> 
	

	<!-- 标题6 -->
	<div class="chaintitle">
		<div class="englishfon"><img src="{$img_url}shudian/chainengtit06.png"/></div>
		<div class="chinesefon">美 · 触手可及</div>
		<div class="zsblock"></div>
		<hr/>
		<p class="ability">欢迎您提交需求，收到您的需求我们会在第一时间内给您反馈！</p>
	</div>
	<div class="chain06">
		<div class="qbtform">
<!--
EOT;
require template('feed/feedback_slr'); 
$metfeedback4=metlabel_feed_slr(166);
echo <<<EOT
-->			
			{$metfeedback4}
		</div>

	</div>
	<!-- 底部导航栏 -->
	<div class="navigation">
    <ul class="nit">
      <li class="nit-li active">快速导航</li>
      <li>海岸设计</li>
    </ul>
    <ul class="gation">
<!--
EOT;
foreach($nav_list2[181] as $key=>$val){
  if($val['name']=='连锁店设计')continue;
echo <<<EOT
-->                
                  <a href="{$val['url']}" target="_blank" alt="{$val['name']}"><li>{$val['name']} | </li></a>
<!--
EOT;
}
echo <<<EOT
-->
    </ul>
    <ul class="gation clsplay">
      <li><a><strong>连锁店面设计</strong></a><i class="shu1"></i></li>
      <li><a><strong>品牌店面设计</strong></a><i class="shu1"></i></li>
      <li><a><strong>餐饮店面设计</strong></a><i class="shu1"></i></li>
      <li><a><strong>高端店铺设计</strong></a><i class="shu1"></i></li>
      <li style="border-right:none;"><a href=""><strong>高端体验店设计</strong></a></li>
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