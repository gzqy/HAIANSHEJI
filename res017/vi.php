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
<link rel="stylesheet" type="text/css" href="{$img_url}css/vi.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_tianyuan.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">   
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_two.css">   
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/vi.js"></script>  

 <div class="faer_top" >
            <div class="fixednav">
                <a href="" title="{$met_webname}">  
            </div>
        </div>
<div style="display:none">
 { $met_foot_txt}
 </div>
 <header>
		<div class="banner">
			<img class="banlogo" src="{$img_url}vi/vilog.png"/>
			<h3>海岸设计</h3>
			<hr class="bannhr bannhr1"/>
			<hr class=" bannhr bannhr2"/>
			<p>与海岸合作过的客户都说;”你们做的项目很精致，视觉效果很好“这源于我们对品牌的敏感及对艺术的把控。 </p>
			<ul class="banlist">
				<li><span class="listcir"></span>品牌定位/策划</li>
				<li><span class="listcir"></span>品牌VI系统设计</li>
				<li class="nomargin"><span class="listcir"></span>企业LOGO设计</li>
				<li><span class="listcir"></span>卡通人物/吉祥物设计</li>
				<li><span class="listcir"></span>&nbsp;导视系统设计/标志标识</li>
			</ul>
			<div class="bannbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即预约</button></a></div>
		</div>
	</header>
	<div class="qv2">
		<h4>VI是企业的风格调性，是企业的脸面</h4>
		<div class="reddiscard">
			<p>vi是企业的风格调性</p>
			<p>是企业品牌形象的核心</p>
			<p>是企业视觉符号的差异</p>
		</div>
		<h5>VI是企业战略定位在视觉上的体验，是构成品牌形象元素核心要素的基因。</h5>
	</div>
	<div class="qstrength">
		<h2>我们的实力</h2>
		<div class="strenhr"><hr class='qstrenlf'><hr class="qstrenrgt"></div>
		<p>海岸以创造品牌生命力、销售力为市场目标，用今天可行的方式设计未来，海岸是策略上的专家，是创意的探索者，以归本主义对每个项目进行原创设计。</p>
		<div class="pinkwing">
			<div class="pinklist"><div class="lfhr"></div><div class="rgthr"></div><div class="tphr"></div><div class="bthr"></div><div class="pinkcir"><i class="iconfont icon-jingyantubiao"></i></div><h3>经验</h3><p>每一个品牌项目的设计，
			我们都会赋予他准确的文化、理念、精神、与价值定位
以便他能更好的承载企业未来发展所需的重任.</p></div>
			<div class="pinklist"><div class="lfhr"></div><div class="rgthr"></div><div class="tphr"></div><div class="bthr"></div><div class="pinkcir"><i class="iconfont icon-tuandui"></i></div><h3>团队</h3><p>海岸由郭准先生创立于1999年，被认为是设计行业第一品牌。精英设计师280人，分为18个战区进行标准化作业，优秀的执行是结果的保障。</p></div>
			<div class="pinklist"><div class="lfhr"></div><div class="rgthr"></div><div class="tphr"></div><div class="bthr"></div><div class="pinkcir"><i class="iconfont icon-pinzhibaozhang"></i></div><h3>品质</h3><p>以归本主义为核心对每个项目进行原创设计，具有营销价值，完美打造睿智，亲和力鲜明的品牌VI设计。</p></div>
			<div class="pinklist"><div class="lfhr"></div><div class="rgthr"></div><div class="tphr"></div><div class="bthr"></div><div class="pinkcir"><i class="iconfont icon-fuwu"></i></div><h3>服务</h3><p>我们的VI设计更专业，更高效，为您进行有计划有步骤的策划设计，方案细化，完整的售后服务，和您一起把控每个细节。</p></div>
		</div>
	</div>
	<div class="qchapter">
		<h2 class="qengh2">OUTSTANDING CASE</h2>
		<h2 class="qzhh2">优秀案例</h2>
		<hr class="chapterhr1">
		<hr class="chapterhr2">
		<p>海岸始终为企业提供个性化的品牌设计服务，在我们服务过的各行企业中，大部分现已成为该行业的领军品。
			在我们服务过的各行企业中，大部分现已成为该行业的领军品牌。</p>
	</div>
	<div class="outstandcase">
		<div class="qosc">
			<ul class="qosclist">
				<li><div class="outbgho"><h2>归隐酒店</h2></div><img src="{$img_url}vi/vicase01.jpg"/></li>
				<li><div class="outbgho"><h2>隐逸水镇</h2></div><img src="{$img_url}vi/vicase02.jpg"/></li>
				<li><div class="outbgho"><h2>八月半</h2></div><img src="{$img_url}vi/vicase03.jpg"/></li>
				<li><div class="outbgho"><h2>驿途</h2></div><img src="{$img_url}vi/vicase04.jpg"/></li>
				<li><div class="outbgho"><h2>靓影服饰</h2></div><img src="{$img_url}vi/vicase05.jpg"/></li>
				<li><div class="outbgho"><h2>Oct.22咖啡</h2></div><img src="{$img_url}vi/vicase06.jpg"/></li>
				<li><div class="outbgho"><h2>缇喀</h2></div><img src="{$img_url}vi/vicase07.jpg"/></li>
				<li><div class="outbgho"><h2>IN酒店</h2></div><img src="{$img_url}vi/vicase08.jpg"/></li>
				<li><div class="outbgho"><h2>盛东实业</h2></div><img src="{$img_url}vi/vicase09.jpg"/></li>
				<li><div class="outbgho"><h2>假日咖啡</h2></div><img src="{$img_url}vi/vicase10.jpg"/></li>
				<li><div class="outbgho"><h2>曼珀尔</h2></div><img src="{$img_url}vi/vicase11.jpg"/></li>
				<li><div class="outbgho"><h2>花巢浪漫火锅</h2></div><img src="{$img_url}vi/vicase12.jpg"/></li>
			</ul>
			<button><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></button>
		</div>
	</div>
	<!-- 我们能做什么 -->
	<div class="qwcd">
		<h2 class="wcdeng">WHAT CAN WE DO</h2>
		<h2 class="wcdzh">我们能做什么</h2>
		<div class="wcdcir wcdcir1"></div>
		<div class="wcdcir wcdcir2"></div>
		<div class="wcdcir wcdcir3"></div>
		<div class="wcdcir wcdcir4"></div>
		<div class="wcdcir wcdcir5"></div>
		<div class="wcdcir wcdcir6"></div>
		<hr class="wcdhr1">
		<hr class="wcdhr2">
		<div class="wcdxc">
			<div class="wcdredcir"></div>
			
			<img class="wcdtrang1" src="{$img_url}vi/trangle1.png">
			<img class="wcdtrang2" src="{$img_url}vi/trangle1.png">
			<img class="wcdtrang3" src="{$img_url}vi/trangle1.png">
			<div class="wcdimg"><img src="{$img_url}vi/wcdwhat1.jpg"><h3 class="whitebg">品牌vI设计</h3>
			<div class="opabgblack"><img src="{$img_url}vi/01_03.png"><h3>品牌VI设计</h3>
			<p>1.logo设计2.基础部分设计（标志规范、标准字体规范、标准色规范、象形图形规范、印刷字体规范），
			3.应用部分设计（办公系统、行业应用系统、广告系统、部分导视系统、服装系统）。</p></div></div>
			<div class="wcdimg"><img src="{$img_url}vi/wcdwhat2.jpg"><h3 class="whitebg">LOGO设计</h3>
			<div class="opabgblack"><img src="{$img_url}vi/02_03.png"><h3>LOGO设计</h3>
			<p>包含图形设计，中文字体设计，英文字体设计、slogan组合设计。</p></div></div>
			<div class="wcdimg"><img src="{$img_url}vi/wcdwhat3.jpg"><h3 class="whitebg">导视系统设计</h3>
			<div class="opabgblack"><img src="{$img_url}vi/03_03.png"><h3>导视系统设计</h3>
			<p>包含室内及室外导视系统设计，标识牌设计，动线指示牌设计。以上五项服务您可以菜单式勾选</p></div></div>
			<div class="wcdimg"><img src="{$img_url}vi/wcdwhat4.jpg"><h3 class="whitebg">品牌策划定位</h3>
			<div class="opabgblack"><img src="{$img_url}vi/06_03.png"><h3>品牌策划定位</h3>
			<p>包含品牌定位、企业文化、品牌故事、中英文命名、logo定位、slogan的建立</p></div></div>
			<div class="wcdimg"><img src="{$img_url}vi/wcdwhat5.jpg"><h3 class="whitebg">吉祥物设计</h3>
			<div class="opabgblack"><img src="{$img_url}vi/05_03.png"><h3>吉祥物设计</h3>
			<p>包含吉祥物正面、侧面、背面主形象设计，吉祥物释义说明，吉祥物应用设计。</p></div></div>
			<div class="wcdimg"><img src="{$img_url}vi/wcdwhat6.jpg"><h3 class="whitebg">落地及效果</h3>
			<div class="opabgblack"><img src="{$img_url}vi/04_03.png"><h3>落地及效果</h3>
			<p>整套VIS及导视系统，提供合作的制作厂家，全程跟踪后期制作，包含特殊工艺、材质、尺寸等，保证完美落地。注：费用及安装另算，根据制作厂家报价而定。</p></div></div>
		</div>
	</div>
	<!-- 发展趋势 -->
	<div class="devtend">
		<div class="dev1200">
			<div class="devlist">
				<h3>development tendency</h3>
				<h3></h3>
				<h2>发展趋势</h2>
				<img src="{$img_url}vi/devredline.png"/>
				</div>
				<div class="cont2centlt">
				<ul class="imgbgcolor">
						<li class="defoutimg"></li>
						<li></li>
						<li></li>
						<li></li>
						<li class="nomargin"></li>
					</ul>
					<ul class="imginfo">
						<li>能够拥有一个琅琅上口，简洁明快的企业标识来代表企业名称，品牌名称和徽标固然是一件大多数企业所期待的。
				但是在现实中，这种充满了艺术性和创造性的标识并不是可以轻易获得的，
				它往往需要企业管理者和企业形象识别设计师付出艰辛的劳动才有可能获得。在企业标识设计过程中，
				一般应坚持以下几个羁绊原则：</li>
						<li>简洁醒目，易读易记：简洁醒目的识别标识给信息接受者以强烈的视觉冲击力，易读易记更是在纷繁世界中区分信息的基本要求。</li>
						<li>构思巧妙，暗示属性：一个与众不同的企业标识设计，在设计上还应该充分体现企业的内涵,体现企业品牌的特点,暗示产品的优良属性。</li>
						<li>富蕴内涵，情意浓重：品牌大多都有其独特的含义和解释或释疑。有的就是地名，有的是一种产品的功能，有的或是一个典故。富蕴内涵，情意浓重的标识，能唤起消费者和社会公众美好的联想，从而使其倍受青睐。</li>
						<li>避免雷同，超越时空：标识设计雷同是实施企业形象运营的大忌，因为企业要树立自己的企业形象和品牌，就要不断提高知名度，超越竞争对手。雷同的标识只能会使消费者对企业形象含糊，从而有损企业自身。
随着企业对企业识别系统设计重要性认识的提高和市场营销策略的研究，越来越多的企业把企业名称，品牌名称和徽标采用同一标识来代替，这有利于规范市场行为，提高营销效率。</li>
					</ul>
					
				</div>
		</div>

	</div>
	<div class="qchapter">
		<h2 class="qengh2">CLASSIC CASE</h2>
		<h2 class="qzhh2">经典案例</h2>
		<hr class="chapterhr1">
		<hr class="chapterhr2">
		<p>高效的生产能力快速的应变能力，完善的售后保障，是我们赢得客户信任的关键！</p>
	</div>
	<div class="classic">
		<div class="lfimgvi">
			<img class="outerimg" src="{$img_url}vi/lfblackbg.jpg">
			<img class="innerimg" src="{$img_url}vi/lfimg1.jpg">
			<img class="innerimg" src="{$img_url}vi/lfimg2.jpg">
			<img class="innerimg" src="{$img_url}vi/lfimg3.jpg">
			<img class="innerimg" src="{$img_url}vi/lfimg4.jpg">
			<img class="innerimg" src="{$img_url}vi/lfimg5.jpg">
			<img class="innerimg" src="{$img_url}vi/lfimg6.jpg">
			<div class="conclosure">
				<span><img src="{$img_url}vi/guifont.png"></span>
				<span><img src="{$img_url}vi/benfont.png"></span>
				<span><img src="{$img_url}vi/zhufont.png"></span>
				<span><img src="{$img_url}vi/yifont.png"></span>
				<hr>
			</div>
			<div class="rgtcapvi">
				<h3>归隐酒店</h3>
				<hr/>
				<p>郭准先生设计的归隐酒店logo系列，为了与其酒店文化相契合，采用了“简、淡、精、雅”的设计风格，
				如清水出芙蓉般，散发出淡雅的美。看着归隐系列的logo设计，淡雅没有任何矫饰，心也如澄澈的湖水般波澜不惊。
				淡雅的美虽不明艳动人，但随着岁月的流转，越发显得醇厚有韵味。内心也如过千般繁华，
				有一种大隐隐于市的宁静淡泊，这就是淡雅的力量。</p>
			</div>
			<div class="rgtcapvi">
				<h3>八月半</h3>
				<hr/>
				<p>通过对火锅同行业的全面分析、研究，设计团队设计出与同行业差异化的视觉形象来诠释八月半。红色和金色作为logo主色调，打造轻奢的品牌感，线描的番茄元素加强了品牌的印象和唯一性。“八月半”字体设计，圆滑、流畅，一气呵成。选用酸汤中主要原料番茄的红色，形象地突出了“火锅”的主题，寓意企业红红火火。“酸汤火锅”选用金色，与红色完美搭配，精致、创新，线描番茄的形象设计为logo整体添加了趣味感。</p>
			</div>
			<div class="rgtcapvi">
				<h3>译途</h3>
				<hr/>
				<p>人生的旅途中，大家都忙于结交朋友以为这是在丰富生命，其实
				最有价值的遇见是在某一瞬间重遇自己，那一刻才懂得走遍世界，
				也不过是为了找到一条回归内心的道路。
				驿途生活馆分为三层，涵盖服装、咖啡馆、书店、花艺、烘焙摄影、家居、健身、私人影院、美容美体、养生、数字媒体……
				这里，不仅仅是一个生活馆，更是一个人们发现美、寻找美的心灵庇护所。
				针对驿途特点，北京海岸VI团队为其量身打造了一系列的VI作品，
				希望徘徊在冰冷城市中的人能够重遇心底那个温暖的自己。</p>
			</div>
			<div class="rgtcapvi">
				<h3>靓影服装</h3>
				<hr/>
				<p>时装、色彩、艺术、靓影Showroom VIS、靓影Showroom
					品牌由北京海岸VI团队设计。我，从不因华丽而痴迷，我只为朴素驻足；
					我，从不拒绝美而诱惑，我只因专注动情；我，从不为众人而欢唱，我只对自己开怀；我，塑造自己，也塑造着世界。
					Logo中文设计，字体与曲线的融合，明确、美观赋予品牌无限的生命力。曲线宛转自然映衬出女性柔美之品牌特征，是对女性曲线美的完美诠释。标志外的圆与字体浑然一体，更有点睛之功。
					</p>
			</div>
			<div class="rgtcapvi">
				<h3>假日当磨咖啡</h3>
				<hr/>
				<p>logo标识风格追求商务、休闲于一体，整体简洁大方。热情的红色搭配商务的黑色，明快而醒目。字母与咖啡杯图形的组合，
					让消费者对于品牌行业属性的解读完全无障碍。
					细节上，咖啡杯上的表针紧扣时间主题，字母背景图形用了流线型长方体，
					让标识整体更加动感，两颗咖啡豆紧扣主题，既像两颗螺丝钉又表明了咖啡属性。</p>
			</div>
			<div class="rgtcapvi">
				<h3>重庆若藤美肤中心</h3>
				<hr/>
				<p>RATTAN（若藤科学美肤中心）是瑾焱文化传播有限公司旗下集皮肤管理中心、医美学院、护肤品专卖为一体的高端连锁医美体验中心。
				针对其特点，北京海岸VI团队为其量身打造了一系列的VI作品，愿每一个爱美的你都能变成理想中的自己。
				标识整体简洁大方，设计师将英文字体图形笔画排列，形成独具一格的视觉风尚，使标识具有鲜明的视觉冲击力。
				其中字母“R”局部笔画的几何化处理是为了与字母“A”、“N”结构呼应，双“T”上下排列也完美的展示了若藤中心建筑结构的特色</p>
			</div>
		</div>
		<div class="lfrgtbtn">
			<img class="chaplfbtn" src="{$img_url}vi/c_left1.jpg"/><img class="chaprgtbtn" src="{$img_url}vi/c_right1.jpg"/>
		</div>
	</div>

	<div class="qchapter" style="margin-bottom:25px">
		<h2 class="qengh2">DYNAMIC THE COAST</h2>
		<h2 class="qzhh2">海岸动态</h2>
		<hr class="chapterhr1">
		<hr class="chapterhr2">
		<p>归本主义 - 最专业最受欢迎的设计案例，专注于打造最美好的设计，欢迎垂询：400-879-1110</p>
	</div>
<!--
EOT;
require_once template('modular/news_spacialTop_vi');
echo <<<EOT
-->
	<div class="qchapter" style="margin-bottom:25px">
		<h2 class="qengh2">ABOUT THE COAST</h2>
		<h2 class="qzhh2">关于海岸</h2>
		<hr class="chapterhr1">
		<hr class="chapterhr2">
		<p>海岸以创造品牌生命力、销售力为市场目标，用今天可行的方式设计未来，海岸是策略上的专家，是创意的探索者，以归本主义对每个项目进行原创设计</p>
	</div>
	<div class="aboutusbox">
		<img src="{$img_url}vi/aboutuspic.jpg" alt="北京海岸设计精英">
		<div class="aboutusjieshao"> 
			<div class="usjieshaomain">
				<em>关于我们</em>
				<hr class="usjieshaohr">
				<p>海岸由郭准先生创立于1999年，以归本主义设计理论为指导，专注于室内设计、施工、监理一体化服务的专业化企业。
郭准先生：知名建筑师、归本主义发起人、北京海岸品牌创始人。设计埋念：北京海岸设计以归本主义为核心设计理念，
以九一律为设计指针，对每个项目进行原创设计。海岸团队：由精英设计师280人组成，分为18个战区进行专业化配合作业。
海岸每年完成400余项目一直保持着180个左右 的项目碰行中。</p>
				<a href="javascript:;" onclick="jQuery('.boxbig').show()"><button>立即提交需求 <span class="tijiaosanjiao"></span></button></a>
			</div>
		</div>
	</div>
	<div class="beinterfor">
		<div class="beinterforcent">
			<p class="beinterp">朋友，对我们的设计感兴趣吗？</p>
			<span class="beinterspan"><a href="javascript:;" onclick="jQuery('.boxbig').show()">我也要发布需求！</a></span>
		</div>
	</div>
	<footer>
		<div class="footermain">
			<div class="foottitle">
				<em>联系我们</em>
				<div class="callustriangle"></div>
				<hr class="callushr">
			</div>
			<div class="footercenter">
				 <div class="fotcentleft">
				 	<img src="{$img_url}vi/erweima.jpg" alt="北京海岸设计二维码">
				 	<p>
				 		地址：北京市朝阳区北汽双井文创园3号楼E座108车间<br>
				 		官网：http://www.haianzhuangshi.com/<br>
				 		邮箱：ceo@beijinghaian.com
				 	</p>
				 	<em>扫一扫免费回呼</em>
				 </div>
				 <div class="fotcentright">
				 	<div class="hotline">
				 		<i><img src="{$img_url}vi/footerphoneicon.gif" alt=""></i><span>全国统一免费热线</span>
				 	</div>
				 	<hr class="fotrgthr">
				 	<em>400-879-1110</em>
				 </div>
			</div>
			<div class="footerdown">
				<p>海岸声明：本站内容 图像资料版权均属「北京海岸设计」所有；任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布
	违者本公司将依法追究其法律责任！<br>京ICP备13049424号</p>
				<div class="cnzz">
        			{$lang_foot_cnzz}
      			</div>
			</div>
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
	<script src="{$img_url}js/slide_new.js" type="text/javascript"></script>  
	<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
 	<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
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
<!--
EOT;
?>