<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
require_once template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require_once template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" type="text/css" href="{$img_url}css/ruanzhuang.css"/>   
<script type="text/javascript" src="{$img_url}js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="{$img_url}js/ruanzhuang.js"></script>  
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_tianyuan.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_two.css"> 
<style>
	body{
	color:red !important;
	background-color:red !important;
	}
</style>
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
	<!-- 头部 -->
	<header>
		<div class="banner1"></div>
		<div class="banner2"></div>
		<div class="banner3"></div>
		<div class="banner4"></div>
		<div class="banner5"></div>
		<div class="banner6"></div>
		<div class="outfit">
			<div class="design">
				<img src="{$img_url}ruanzhuang/images/1/Soft_outfit.png" alt="" class="species">
			</div>
			<div>
				<p class="doctrine">归本主义设计缔造者</p>
				<p class="elite">19年设计行业领先品牌，300位设计团队精英</p>
			</div>
			<div class="make">
				<img src="{$img_url}ruanzhuang/images/1/appointment.png" alt="">
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><span>立即预约</span></a>
			</div>
		</div>
	</header>
	<!-- 标题1 -->
	<div class="chaintitle">
		<div class="chain">
				<div class="englishfon dix" ><img src="{$img_url}/ruanzhuang/images/2/351427100776926483.png" alt=""></div>
				<div class="chinesefon dis" >海岸蔚蓝·软装服务领域</div>
				<div class="zsblock"></div>
				<hr>
				<p class="rowtitle dic">从2000年至今，全国家具饰品消费量以年均30%以上的速度增长。2012年将超过1.3万亿元！</p>
		</div>
		<!-- 标题1-2 -->
	</div>
	<div style="width:1200px;max-height:500px; margin:0 auto;">
		<div class="chain">
		<div>
			<div class="coff block coff1" data-move-y="200px" data-move-x="0px" >
				<img src="{$img_url}/ruanzhuang/images/2/01.png" alt="" class="masimg">
				<div class="mask"></div>
				<div><img src="{$img_url}/ruanzhuang/images/2/10.png" alt="" class="Café"></div>
				<div class="Restaurant">
					<div class="face">餐饮/咖啡馆软装设计</div>
					<span style="display:none;" class="can">餐饮咖啡馆</span>
				</div>
			</div>
		</div>
		<div>
			<div class="coff block coff2" data-move-y="200px" data-move-x="-100px" >
				<img src="{$img_url}/ruanzhuang/images/2/02.png" alt="" class="masimg">
				<div class="mask1"></div>
				<div><img src="{$img_url}/ruanzhuang/images/2/09.png" alt="" class="Café"></div>
				<div class="Restaurant">
						<div class="face1">酒店/会所软装设计</div>
						<span style="display:none;" class="can1">酒店会所</span>
				</div>
			</div>
		</div>
		<div>
			<div class="coff block coff3"  data-move-y="200px" data-move-x="100px" >
				<img src="{$img_url}/ruanzhuang/images/2/03.png" alt="" class="masimg">
				<div class="mask2"></div>
				<div><img src="{$img_url}/ruanzhuang/images/2/07.png" alt="" class="Café"></div>
				<div class="Restaurant">
					<div class="face2">办公/商业空间软装设计</div>
					<span style="display:none;" class="can2">办公商业空间</span>
				</div>
			</div>
		</div>
		<div>
			<div class="coff block coff4" data-move-y="200px" data-move-x="200px" >
				<img src="{$img_url}/ruanzhuang/images/2/04.png" alt="" class="masimg">
				<div class="mask3"></div>
				<div><img src="{$img_url}/ruanzhuang/images/2/11.png" alt="" class="Café"></div>
				<div class="Restaurant">
					<div class="face3">别墅/公寓软装设计</div>
					<span style="display:none;" class="can3">别墅公寓</span>
				</div>
			</div>
		</div>
		<div>
			<div class="coff block coff5" data-move-y="200px" data-move-x="200px">
				<img src="{$img_url}/ruanzhuang/images/2/05.png" alt="" class="masimg">
				<div class="mask4"></div>
				<div><img src="{$img_url}/ruanzhuang/images/2/08.png" alt="" class="Café"></div>
				<div class="Restaurant">
						<div class="face4">样板房/售楼处软装设计</div>
						<span style="display:none;" class="can4">样板房售楼</span>
				</div>
			</div>
		</div>
			<div style="clear:both;"></div>
			<div class="Consultation">
				<img src="{$img_url}/ruanzhuang/images/2/735768117972434248.png" alt="">
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><p>点击咨询</p></a>
			</div>
		</div>
	</div>
	<!-- 标题2 -->
	<div class="chain2">
		<div class="chain2bgbox">
			<div class="chain2bg ch2bg1"></div>
			<div class="chain2bg ch2bg2"></div>
			<div class="chain2bg ch2bg3"></div>
			<div class="chain2bg ch2bg4"></div>
		</div>
		<div class="chain2bgbox">
			<!-- <div class="chain2leftbox"></div> -->
			<ul class="chain2mainbox">
				<li>
					<div class="ch2libgbox"></div>
					<div class="ch2licenter1">
					<a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
						<i class="ch2liicon"><img src="{$img_url}ruanzhuang/chain2liimg1.png" alt="北京海岸蔚蓝设计"></i>
						<em class="ch2liem">加强空间的美观度</em>
						<hr class="ch2lihr">
						<!-- <span class="ch2litxt">不出效果？</span> -->
						<p class="overhid">在房屋装修中，软装占比70%，硬装占30%，设计需要把控整体风格色彩，专业配饰搭配才能打造出空间的和谐美。</p>
						<span class="before"></span></a>
					</div>
				</li>
				<li>
					<div class="ch2libgbox"></div>
					<div class="ch2licenter1">
					<a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
						<i class="ch2liicon"><img src="{$img_url}/ruanzhuang/images/3/_19.png" alt="北京海岸蔚蓝设计"></i>
						<em class="ch2liem">优化空间的功能性</em>
						<hr class="ch2lihr">
						<!-- <span class="ch2litxt">不能传播需求？</span> -->
						<p class="overhid">软装不仅局限于配饰摆放，也平衡空间功能性，根据客户生活方式设计卧室客厅衣帽间等九大空间，凸显功能性，使空房间充分利用</p>
						<span class="before"></span></a>
					</div>
				</li>
				<li>
					<div class="ch2libgbox"></div>
					<div class="ch2licenter1">
					<a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
						<i class="ch2liicon"><img src="{$img_url}ruanzhuang/chain2liimg3.png" alt="北京海岸蔚蓝设计"></i>
						<em class="ch2liem">节省装修配饰效率</em>
						<hr class="ch2lihr">
						<!-- <span class="ch2litxt">不出效果？</span> -->
						<p class="overhid">每一产品均有多种款式、风格、颜色、质地等，“如何搭配怎么选”耗掉业主时间于经历，软装设计无需东奔西跑，省效率。</p>
						<span class="before"></span></a>
					</div>
				</li>
				<li>
					<div class="ch2libgbox"></div>
					<div class="ch2licenter1">
					<a href="javascript:;" onclick="jQuery('.boxbig').show()"><div class="ch2licenter">
						<i class="ch2liicon"><img src="{$img_url}/ruanzhuang/images/3/_01.png" alt="北京海岸蔚蓝设计"></i>
						<em class="ch2liem">控制预算管控装修资金</em>
						<hr class="ch2lihr">
					<!-- 	<span class="ch2litxt">不出效果？</span> -->
						<p class="overhid">软装设计根据业主预算范围搭配产品，为业主提供产品价格明细，且合作品牌价格均低于市场价，有利于资金管控。</p>
						<a href='http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D' target='_blank'><span class="before"></span></a>
						</a>
					</div>
				</li>
			</ul>
			<!-- <div class="chain2leftbox"></div> -->
		</div>
	</div>
	<!-- 标题3 -->
	<div class="chaintitle1">
		<div class="englishfon"><img src="{$img_url}ruanzhuang/chainengtit01.png"/></div>
		<div class="chinesefon">一站式全程服务</div>
		<div class="zsblock"></div>
		<hr/>
		<p class="rowtitle">欢迎您提交需求，收到您的需求我们会在第一时间内给你反馈！ </p>
	</div>
	<div class="chain1">
		<div class="chain1main overhid tbox" id="index_tbox">
				<div class="vtl vtl1 overhid">
					<div class="v1rows1 overhid bkdec tbox1 d dl" >
							<div class="v1row1main overhid">
								<em class="c1boxmainem">整体规划</em>
								<p>OVERALL</p>
								<p class="c1amlspan">PLANNING</p>
							</div>
					</div>
					<div class="v1rows2 overhid hoverbger tbox5 d dl" >
							<img src="{$img_url}/ruanzhuang/images/4/_02.jpg" class="cmainimg" alt="*图片占位*">
							<!-- <div class="blackbgabox"></div> -->
							<div class="v1row2main overhid">
								<em class="c1boxmainem">家具设计</em>
								<p>Facade Design</p>
							</div>
					</div>
				</div>

				<div class="vtl vtl2 overhid">
					<div class="v2rows1 overhid hoverbger tbox2 d dt" >
							<img src="{$img_url}ruanzhuang/222.jpg" class="cmainimg" alt="*图片占位*">
							<div class="yellowrbgabox"></div>
							<div class="v2row1main overhid">
								<em class="c1boxmainem blackfont">花艺及绿化造景</em>
								<p class="blackfont">FLORAL DESIGN</p>
								<p class="c1amlspan blackfont">AND LANSCAPING</p>
							</div>
					</div>
					<div class="v2rows2 overhid hoverbger tbox6 d db" >
							<img src="{$img_url}/ruanzhuang/images/4/_06.jpg" class="cmainimg" alt="*图片占位*">
							<!-- <div class="blackbgabox"></div> -->
							<div class="v2row2main overhid">
								<em class="c1boxmainem">家具饰品</em>
								<p>ILLUMINATION</p>
								<p>SYSTEM DESIGN</p>
							</div>
					</div>
					<div class="v2rows3 overhid hoverbger tbox7 d" style="opacity: 1.12533;">
							<img src="{$img_url}/ruanzhuang/images/4/_04.jpg" class="cmainimg" alt="*图片占位*">
							<div class="blackbgaabox"></div>
							<div class="v2row3main overhid">
								<em class="c1boxmainem">灯光装饰</em>
								<p>LIGHTING</p>
							</div>
					</div>
					<div class="v2rows4 overhid tbox8 d db" >
							<div class="yellowbox"></div>
							<div class="v2row3main overhid">
								<em class="c1boxmainem blackfont">布艺织物</em>
								<p class="blackfont">CLOTH FABRIC</p>
							</div>
					</div>
				</div>
				<div class="vtl vtl3 overhid">
					<div class="v3rows1 overhid hoverbger tdec tbox3 d dt" >
						<img src="{$img_url}/ruanzhuang/images/4/_03.jpg" class="cmainimg" alt="*图片占位*">
						<div class="v3row1main overhid">
							<em class="c1boxmainem">空间搭配设计</em>
							<p>Store  environment</p>
						</div>
					</div>
				</div>
				<div class="vtl vtl4 overhid">
					<div class="v4rows1 overhid tbox4 d dr" >
							<!-- <div class="redbox"></div> -->
							<img src="{$img_url}/ruanzhuang/images/4/_05.jpg" class="cmainimg" alt="*图片占位*">
							<div class="v4row1main overhid">
								<em class="c1boxmainem blackfont">整合装饰设计</em>
								<p class="blackfont">DECORATIVE DESIGN</p>
							</div>
					</div>
					<div class="v4rows2 overhid tbox9 d dr" >
							<div class="bg2b2b2bbox"></div>
							<div class="v4row1main overhid">
								<em class="c1boxmainem">布艺织物</em>
								<p>window display</p>
							</div>
					</div>
				</div>
		</div>
	</div>
	<!-- 海岸蔚蓝软装的发展 -->
	<div class="chaintitle">
		<div class="englishfon"><img src="{$img_url}/ruanzhuang/images/4/351427100776926483.png" alt=""></div>
		<div class="chinesefon">海岸蔚蓝软装的发展</div>
		<div class="zsblock"></div>
		<hr>
		<p class="rowtitle">随着经济全球化的发展，物质的极大丰富带给人们琳琅满目的商品和更多的选择，怎么样的搭配更协调，更高雅，<br>
			更能彰显居者的品味，成为一门艺术，于是诞生了软装饰行业。</p>
	</div>
	<ul class="chain1 chaina ">
		<li class="Development1 coff coff1" data-move-y="200px" data-move-x="0px">
			<img src="{$img_url}/ruanzhuang/images/juxing.png" alt="" style="width:240px;height:610px;">
			<div class="Development">
				<p class="regression">回归自然化</p>
				<div class="environmental">
					随着人们环保意识的增强，人们开始向往天然的材料，自然的生活方式，居尚软装则逐步在住宅中创造田园的舒适气氛，
					强调自然色彩和天然材料的应用，采用许多民间艺术手法和风格。在此基础上设计师不断在"回归自然"上下功夫，
					创造新的肌理效果，运用具象的抽象的设计手法来使人们联想自然。
				</div>
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
				<div class="contactbox">
					<p class="contact">联系我们</p>
					<span class="hide"></span>
				</div>
				</a>
			</div>
		</li>
		<li class="coff coff2" data-move-y="200px" data-move-x="-100px">
			<img src="{$img_url}/ruanzhuang/images/641927577089767055.png" alt="" style="width:240px;height:610px;">
			<div class="Development">
				<p class="natural">整体艺术化</p>
				<div class="protection">
					随着社会物质财富的丰富，人们开始更多的追求精神享受，力求从"物的堆积"中解脱出来，走出原有的条条框框，
					一步一步想着整体艺术美感，空间层次感靠拢，这就迫使软装设计师们对居室的空间、形体、色彩、虚实关系及功能组合关系的把握，
					为人们营造更充分的意境。
				</div>
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
				<div class="contactbox">
					<p class="contact">联系我们</p>
					<span class="hide"></span>
				</div>
				</a>
			</div>
		</li>
		<li class="coff coff3" data-move-y="200px" data-move-x="100px">
			<img src="{$img_url}/ruanzhuang/images/juxing.png" alt="" style="width:240px;height:610px;">
			<div class="Development">
				<p class="regression">高度现代化</p>
				<div class="environmental">
					随着科学技术的发展，高科技产品也日益走到了寻常人家，进入我们的生活中，在软装设计过程中，
					人们通过现代声、光、色技术打造出现代感极强的空间环境，让人们的生活充满现代信息技术的气息。
				</div>
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
				<div class="contactbox">
					<p class="contact">联系我们</p>
					<span class="hide"></span>
				</div>
				</a>
			</div>
		</li>
		<li class="coff coff4"data-move-y="200px" data-move-x="200px">
			<img src="{$img_url}/ruanzhuang/images/641927577089767055.png" alt="" style="width:240px;height:610px;">
			<div class="Development">
				<p class="natural">日益民族化</p>
				<div class="protection">
					科技的发展，生活水平的提高，人们一味的强调高度现代化，却慢慢忽视了身边本真的东西，
					因此软装设计开始逐步的关注传统的、特色的东西，让室内陈设的民族化趋势强了起来。
				</div>
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
				<div class="contactbox">
					<p class="contact">联系我们</p>
					<span class="hide"></span>
				</div>
				</a>
			</div>
		</li>
		<li class="coff coff5" data-move-y="200px" data-move-x="200px">
			<img src="{$img_url}/ruanzhuang/images/juxing.png" alt="" style="width:240px;height:610px;">
			<div class="Development">
				<p class="regression">个性化突出</p>
				<div class="environmental">
						工业化生活给社会留下的是千家一面的境况，随着人们生活品味的提升，开始想要打造属于自己个性化空间，
						一种设计手法是把自然引进室内，室内外通透或连成一片。
						另一种设计手法是打破水泥方盒子，斜面、斜线、或曲线装饰，以此来打破水平垂直线求得变化，打破千人一面的冷漠感。
				</div>
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
				<div class="contactbox">
						<p class="contact">联系我们</p>
						<span class="hide"></span>
				</div>
				</a>
			</div>
		</li>
	</ul>
	<div class="chain1bottombox overhid">
		<div class="c1decoratebox1">
		</div>
		<img src="{$img_url}ruanzhuang/chain1downtxt.png" alt="我们关注当代的软装设计、室内环艺、环境文化问题，
		并希望通过归本主义设计理念专业的技术为您提出独特、合理、有效的设计方案">
		<div class="c1decoratebox2"></div>
	</div>
	<!-- 标题4 -->
	<div class="blackyellowblock">
		<div class="qlfblock">
			<div class="qlfinn">
				<div style="font-size:60px; color:#fff;">我们的态度</h3><p>将每一个项目都做成精品，否定平凡的设计创作</div>
				
				<a href="http://www.haianzhuangshi.com/" target="_blank">了解更多</a>
				<img src="{$img_url}ruanzhuang/728550131246177030.png" alt="" style="margin-top:26px;">
			</div>
			<img class="bticonq" src="{$img_url}ruanzhuang/qlf.jpg">
		</div>
		<div class="qrgttopblock">
			<div class="qrgttopinn">
				
				<div>了解我们从案例开始</div>
				<p>十九年来<br/>
				秉持匠人精神成就每一个商业艺术品
				</p><a href="{$index_url}product/list-182-cn.html" target="_blank">更多书店设计案例</a>
			</div>
		</div>
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
				<img class="lamptai" src="{$img_url}ruanzhuang/lamp.png">
				<div class="understand">
					<h1>了解我们<br/>从策划方案开始</h1>
					<p>多元化的思维和卓越的创意</p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- 软装设计案例 -->
	<div class="chaintitle2">
		<div class="englishfon"><img src="{$img_url}ruanzhuang/chainengtit05.png"/></div>
		<div class="chinesefon">海岸蔚蓝软装设计案例</div>
		<div class="zsblock"></div>
		<hr/>
		<p class="rowtitle">高效的生产能力快速的应变能力，完善的售后保障，是我们赢得客户信任的关键！</p>
	</div>
	<div class="chain05">
		<div class="storefront">
			<div class='catcoff'><img class="catcoffimg" src="{$img_url}ruanzhuang/isoftware1.jpg"/><div class="lfrgticon"><span class="qprebtn"></span><span class="qnextbtn"></span></div></div>
			<div class="catcoffrgt">
				<!-- <div class="addricon"><img src="{$img_url}ruanzhuang/locationico.png"/>北京·朝阳门</div> -->
				<div>北京漫咖啡</div>
				<hr>
				<a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}ruanzhuang/rgtarrow.png"/></a>
				<p>自然与时尚的气息在此渗透充满创造与活力的港湾在此建筑，
					木质的地板与桌椅，安静成列的绚丽灯光，堆满书籍、杂志
					的书架，一如以往的简单与舒适。在氤氲情调中认识自己。
					在浪漫的爵士中融化心情，在优雅的环境中寻找温暖</p>
			</div>
			<div class="catcoffrgt clsplay">
				<!-- <div class="addricon"><img src="{$img_url}ruanzhuang/locationico.png"/>北京·朝阳门</div> -->
				<div>小菊咖啡</div>
				<hr>
				<a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}ruanzhuang/rgtarrow.png"/></a>
				<p>归本主义的软装设计是鲜活，充满动态的。它的整合赋予了空间生命力，点亮了室内设计的情愫，使得空间焕发出视觉激情。
					本案在空间设计中，由智能与自然贯穿起止，动线、装饰面与归本主义六要素交汇塑造空间身体。
					基于这个理念，在软装设计的风格上，以简约为主，力求营造一种轻松、愉快、活泼的氛围；
					在软装材质上，运用暖色皮革、原木色家具、形态不一、造型时尚的灯具来实现空间的理想景象。
					为避免空间过于单调，部分墙面做了特殊处理，图案与茶几面、落地灯调性互补，在冲突中实现了视觉平衡。
					设计师根据空间的色调，通过精心构思和布置，装饰出了与环境相协调的绿色氛围。</p>
			</div>
			<div class="catcoffrgt clsplay">
				<!-- <div class="addricon"><img src="{$img_url}ruanzhuang/locationico.png"/>北京·朝阳门</div> -->
				<div>归隐酒店</div>
				<hr>
				<a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}ruanzhuang/rgtarrow.png"/></a>
				<p>用木的温厚营造出舒适的居住环境内部的结构设计将建筑划分为不同风格的居住空间
				同时喷涂一些不同色彩缀点其中自然独特的设计反映在每一处细节超五星级的服务与设施，并未扰乱亘古的宁静
				混凝土墙面与洁白的天花连接处透露着淡淡的光泽
				原木、植物以及简易图纹系的地板与地毯流露着简约大气
				这就是归隐酒店---拒绝墨守成规
				也拒绝所有客房都呈现出同一个模样</p>
			</div>
			<div class="catcoffrgt clsplay">
				<!-- <div class="addricon"><img src="{$img_url}ruanzhuang/locationico.png"/>北京·朝阳门</div> -->
				<div>冉时光</div>
				<hr>
				<a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}ruanzhuang/rgtarrow.png"/></a>
				<p>冉时光茶餐厅，以归本主义为设计理念，旨在营造一个可以让灵魂与时光交织的地方，寻求城市中那一点浪漫。
					这里有白色的鹅卵石、无处不在的绿植、美美的花廊、浪漫的屋顶花园、暖黄的清新色调……都市让我们远离了自然，
					冉时光可以把自然再找回来。空间略去了表面繁琐的装饰，由暖黄灯光加以渲染，自然色彩赋予空间个性的表达，诠释着别样的美意。
					水晶灯、琉璃灯营造温馨和谐的气氛，让美食的情调与周围的环境完美结合。
					设计师非常善于运用花材来凸显个性，一个小小的角落，在冉时光，大到桌椅，小到花饰，再到点点的灯饰，设计匠心无处不在。
					每一件物品都是设计师为宾客展现餐厅的巧思体现。似乎都是一幅美丽的画。</p>
			</div>
			<div class="catcoffrgt clsplay">
				<!-- <div class="addricon"><img src="{$img_url}ruanzhuang/locationico.png"/>北京·朝阳门</div> -->
				<div>良子健身</div>
				<hr>
				<a class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}ruanzhuang/rgtarrow.png"/></a>
				<p>引进东南亚原生态风格，以质朴的设计手法引领着四季变化、简洁的演绎丰富了空间魔法
					令人一步入空间就好似身处于步调悠缓的南国
					为喜欢静谧、雅致之人提供一个健康、养生的休闲场所</p>
			</div>
		</div>	
	<!-- 大块 -->
	</div>
	<div class="blacklittlephone">
		<div class="inner1200">
			<span class="spanworry01">还在为室内的软装设计而担心吗？你想了解怎样的软装空间格局呢？</span>
			<span class="spanworry02">请联系海岸蔚蓝设计</span>
			<div class="divworry03">
				<i><img src="{$img_url}ruanzhuang/237993902915380192.png" alt="拨打电话"></i>
				400-879-1110
			</div>
		</div>
	</div>
	<!-- 标题5 -->
	<div class="chaintitle">
			<div class="englishfon"><img src="{$img_url}ruanzhuang/chainengtit04.png"/></div>
			<div class="chinesefon">选择就是信任</div>
			<div class="zsblock"></div>
			<hr/>
			<p class="rowtitle">您看到的是名字和标志，我们获得的是信任和满意。展示，不是为了炫耀,而是，让您放心选择！</p>
	</div>
	<div class="chain04">
		<div class="qchain001 chainae">
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo01.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="-100px"><img src="{$img_url}ruanzhuang/otherlogo02.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="100px"><img src="{$img_url}ruanzhuang/otherlogo03.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="200px"><img src="{$img_url}ruanzhuang/otherlogo04.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="200px"><img src="{$img_url}ruanzhuang/otherlogo05.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo06.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo07.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo08.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo09.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo10.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo11.jpg"/></div>
			<div class="concatimg coff coff1" data-move-y="200px" data-move-x="0px"><img src="{$img_url}ruanzhuang/otherlogo12.jpg"/></div>
		</div>
	 		<div class="chain1bottombox1">
				
				<img src="{$img_url}ruanzhuang/wrapfont01.png" alt="从专注到专业服务大步向前">
				
			</div>
	</div>
	<!-- 标题6 -->
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
					<p class="pfont3 pmargin3">精选的装修原材料</p>
					<p class="pfont2 pmargin2"><span class="yellowfont">海 岸 精 心</span>选材严格把关</p>
					<p class="pfont3 pmargin4">做到整体质感表里如一</p>
					<p class="pfont2 pmargin2">最终赢得<span class="yellowfont">客 户 满 意</span></p>
					<p class="pfont3 pmargin6">专业的服务，从来电咨询开始！</p>
					<div class="specialbtn"><span>免费咨询热线</span><span><!-- 400-879-1110 --></span></div>
				</div>
			</div>
		</div>

		<div class="chaintitle" id="chain3downtitle">
				<div class="englishfon"><img src="{$img_url}ruanzhuang/chainengtit03.png"/></div>
				<div class="chinesefon">我们一路走过</div>
				<div class="zsblock"></div>
				<hr/>
				<p class="rowtitle">北京海岸蔚蓝设计是您最专业的设计服务管家</p>
			</div>
			<div class="chain03">
				<div class="walkalong chainx">
					<div class="walkbox coff coff1">
						<div class="walkcir">
							<i class="iconfont icon-fuwu1"></i>
							<p>为客户提供<span> 一站式全程服务</span></p>
						</div>
					</div>
					<div class="walkbox coff coff2"><div class="walkcir"><i class="iconfont icon-hangyeicon"></i><p>行业经验<span>从1999年成立服务至今</span></p></div></div>
					<div class="walkbox coff coff3"><div class="walkcir"><i class="iconfont icon-jingyantubiao"></i><p>经验丰富<span>280余位专职行业精英</span></p></div></div>
					<div class="walkbox coff coff4"><div class="walkcir"><i class="iconfont icon-zhouqi"></i><p>设计周期<span>保质保量高效率出图</span></p></div></div>
					<div class="walkbox coff coff5"><div class="walkcir"><i class="iconfont icon-qian"></i><p>预算合理<br/><span>开创有新意<br/>节约成本的实现方式 </span></p></div></div>
					<div class="walkbox coff coff6"><div class="walkcir"><i class="iconfont icon-xiangyingkuaisu"></i><p>快速响应<span>提交需求立即回电</span></p></div></div>
				</div>
				<div class="yellowborbtn">
				<a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
					懒得看了？直接找设计师吧</a>
					<hr class="hrtopright">
					<hr class="hrtopleft">
					<hr class="hrdownright">
					<hr class="hrdownleft">
					<hr class="hrright">
					<hr class="hrleft">
				</div>
				
			</div>
	
			<div class="chaintitle">
		<div class="englishfon"><img src="{$img_url}ruanzhuang/chainengtit02.png"/></div>
		<div class="chinesefon">海岸蔚蓝服务的案例</div>
		<div class="zsblock"></div>
		<hr/>
		<p class="rowtitle">一个成功的软装案例是从设计开始的，无设计、不生活</p>
	</div>
	<!-- 海岸蔚蓝服务案例 -->
	<ul class="chain3">
		<li class="upper">
			<img src="{$img_url}ruanzhuang/c3centent1.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >北京漫咖啡</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">北京漫咖啡</p>
					<p class="Drop">
						项目地址：北京<br>
						项目类型：软装设计<br>
						设计面积：664㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
				
			</div>
		</li>
		<li class="down">
			<img src="{$img_url}ruanzhuang/c3centent2.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >北京小菊咖啡</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">北京小菊咖啡</p>
					<p class="Drop">
						项目地址：北京<br>
						项目类型：软装设计<br>
						设计面积：580㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
		<li class="upper">
			<img src="{$img_url}ruanzhuang/c3centent3.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >冉时光</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">冉时光</p>
					<p class="Drop"> 
						项目地址：湖南<br>
						项目类型：软装设计<br>
						设计面积：1600㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
				
			</div>
		</li>
		<li class="down">
			<img src="{$img_url}ruanzhuang/c3centent4.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >啡影1989软装</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">啡影1989软装</p>
					<p class="Drop"> 
						项目地址：云南<br>
						项目类型：软装设计<br>
						设计面积：1043㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
		<li class="upper-1">
			<img src="{$img_url}ruanzhuang/c3centent5.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >芙蓉壹号</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">芙蓉壹号</p>
					<p class="Drop"> 
						项目地址：山东<br>
						项目类型：软装设计<br>
						设计面积：513㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
					
			</div>
		</li>
		<li class="down-1">
			<img src="{$img_url}ruanzhuang/c3centent6.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >归隐客房</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">归隐客房</p>
					<p class="Drop">
						项目地址：山东<br>
						项目类型：软装设计<br>
						设计面积：6016㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
		<li class="upper-1">
			<img src="{$img_url}ruanzhuang/c3centent7.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >阳光翡丽湾售楼处</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">阳光翡丽湾售楼处</p>
					<p class="Drop">
						项目地址：浙江杭州<br>
						项目类型：软装设计<br>
						设计面积：407㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
				
			</div>
		</li>
		<li class="down-1">
			<img src="{$img_url}ruanzhuang/c3centent8.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >良子健身</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">良子健身</p>
					<p class="Drop"> 
						项目地址：北京<br>
						项目类型：软装设计<br>
						设计面积：1129㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
		<li class="upper-2">
			<img src="{$img_url}ruanzhuang/c3centent9.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >北京西十二街</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">北京西十二街</p>
					<p class="Drop">
						项目地址：北京<br>
						项目类型：软装设计<br>
						设计面积：539㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
					
			</div>
		</li>
		<li class="down-2">
			<img src="{$img_url}ruanzhuang/c3centent10.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >北京兜友咖啡设计</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">良子健身</p>
					<p class="Drop"> 
						项目地址：北京<br>
						项目类型：软装设计<br>
						设计面积：1129㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
		<li class="upper-2">
			<img src="{$img_url}ruanzhuang/c3centent4.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >啡影1989软装</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">啡影1989软装</p>
					<p class="Drop"> 
						项目地址：云南<br>
						项目类型：软装设计<br>
						设计面积：1043㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
		<li class="down-2">
			<img src="{$img_url}ruanzhuang/c3centent8.jpg" alt="北京海岸蔚蓝设计">
			<div class="Fellow">
				<p >良子健身</p>
				<div>
					<hr style="width:75%;height:3px; background:#fff; margin:0 auto;">
					<span>HOVER VIEW</span>
				</div>
			</div>
			<div class="Eject">
				<div class="whole">
					<p  class="throw">良子健身</p>
					<p class="Drop"> 
						项目地址：北京<br>
						项目类型：软装设计<br>
						设计面积：1129㎡<br>
						主创团队：北京海岸蔚蓝设计<br>
						总设计师：郭准先生
					</p>
					 
				</div>
			</div>
		</li>
	</ul>
	<div style="clear:both;"></div>
	<!-- 大蒙版 -->
	<div class="bigHotel clsplay">
		<div class="meng"></div>
		<div class="nomeng">
		<img class="tuceng" src=""/>
			<img  class="bigicon01" src="{$img_url}ruanzhuang/close.png" alt="关闭">
			<img class="bigicon02" src="{$img_url}ruanzhuang/left.png" alt="上一页"><img class="bigicon03" src="{$img_url}ruanzhuang/right.png" alt="下一页">
			<div class="hoteldata"><span class="hotelname">唐庄艺术酒店</span><span class="hotelcount">3/7</span></div>
		</div>
    </div>
 
	<!-- 标题6 -->
	<div class="chaintitle">
		<div class="englishfon"><img src="{$img_url}ruanzhuang/chainengtit06.png"/></div>
		<div class="chinesefon">海岸蔚蓝软装 · 预约触手可及</div>
		<div class="zsblock"></div>
		<hr/>
		<p>欢迎您提交需求，收到您的需求我们会在第一时间内给您反馈！</p>
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
      <li>海岸蔚蓝设计</li>
    </ul>
    <ul class="gation">
<!--
EOT;
foreach($nav_list2[181] as $kay => $val){
	if($val[name]=='软装设计')continue;
echo <<<EOT
-->
		<li><a href="{$val[url]}" target="_blank">{$val[name]}</a></li>
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
        <p class="bootp2">海岸蔚蓝官方公众号</p>
        <p class="bootp3">在线服务客服</p>
        </div>
      <div class="bootrgt"><h3><img src="{$img_url}shudian/boot400.png"/></h3><p>全国免费热线</p><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="bootredbtn">立即预约</div></a></div>
      <div></div>
    </div>
  </div>
  <div class="footer">
		<div class="footer1">
			<p>CopRright © 1999-2017 北京海岸蔚蓝设计 All Rrights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>京ICP备13049424号</span></p>
			<p>海岸蔚蓝声明：本站内容 图像资料版权均属「北京海岸蔚蓝设计」所有，任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布，违者本公司将依法追究其法律责任！</p>
			<div class="cnzz">{$lang_foot_cnzz}</div>	
		</div>	
	</div>
 <div style="display:none">
 { $met_foot_txt}
 </div>
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
<script>  
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src="{$img_url}js/slide_new.js" type="text/javascript"></script>              
<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
<!--
EOT;
?>