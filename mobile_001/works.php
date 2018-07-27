<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>北京海岸设计官网-手机版</title>
    <link rel="stylesheet" type="text/css" href="{$img_url}css/haianmobles.css" />
    <link rel="stylesheet" type="text/css" href="{$img_url}css/swiper.min.css" />
    <script src="{$img_url}js/haianphone.js" type="text/javascript" charset="utf-8"></script>
    <script src="{$img_url}js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        changeRem();
        function changeRem() {
            var html = document.querySelector('html');
            var width = html.getBoundingClientRect().width;
            var xianzhiwidth = document.getElementsByClassName("xianzhiwidth");
            if( width > 768 ){
            	width = 768;
            }
            html.style.fontSize = width / 10 +'px';
        }
        window.onresize = changeRem;
    </script>
</head>
<body>
<div class="bodybox">
	<div class="topnavbox">
		<img src="{$img_url}img/tophaianlogo.png" alt="北京海岸设计" />
		<div class="navrgt">
			<i><a href="{$img_url}javascript:;" onclick="jQuery('.searchbox').show()" class="show"><img src="{$img_url}img/navsearch.png" alt="北京海岸设计-搜索" /></a></i>
			<i><a href="{$img_url}javascript:;" onclick="jQuery('.navlistbox').show()" class="show"><img src="{$img_url}img/navlist.png" alt="北京海岸设计-下拉框" /></a></i>
		</div>
	</div>
	<header class="swiper-container" id="headerbnrcontainer">
		<!--<div>-->
		    <ul class="swiper-wrapper headerwrapper">
		        <li class="swiper-slide">
		        	<div class="headlicenterone">
		        		<img class="headli01title" src="{$img_url}img/headli01title.png" alt="海岸设计" />
		        		<img class="hengtiao" src="{$img_url}img/hengtiao1.png" alt="海岸设计" />
		        		<p class="chinesep">我们与众不同，只为设计而存在</p>
		        		<img class="englishp" src="{$img_url}img/englishp1.png" alt="Haian design of the Beijing,We are out of the ordinary,only for the design,Change everything you think you know about design." />
		        		<button>立即预约</button>
		        	</div>
					<img src="{$img_url}img/bannerbg1.jpg" alt="北京海岸设计" />
		        </li>
		        <li class="swiper-slide">
		        	<div class="headlicentertwo">
		        		<p class="huxiaobo">业务涵盖文旅产业·园区规划·酒店·商业体·咖啡馆·餐饮·办公空间等</p>
		        		<p class="huxiaobo">十九年品质经验<br /><span class="red">设计与施工</span>一体化</p>
		        		<button>1999-2018</button>
		        	</div>
					<img src="{$img_url}img/bannerbg2.jpg" alt="北京海岸设计" />
		        </li>
		        <li class="swiper-slide">
		        	<div class="headlicenterthree">
		        		<span class="li-two-down1 leftcenter"></span>
		        		<span class="li-two-down2 leftcenter"></span>
		        		<img class="leftcenter" src="{$img_url}img/litwotop.png" alt="归本主义缔造者" />
		        		<img class="li03imgtwo leftcenter" src="{$img_url}img/litwotitle.png" alt="北京海岸设计" />
		        		<div class="litwobtnbox leftcenter">
		        			<button>马上咨询</button>
		        			<button>立即预约</button>
		        		</div>
		        		<p class="lanting leftcenter">全领域尽纵横，您与极致设计只差一个海岸</p>
		        	</div>
					<img src="{$img_url}img/bannerbg3.jpg" alt="北京海岸设计" />
		        </li>
		        <li class="swiper-slide bannerclassli">
		        	<span class="leftcenter">
		        		<p class="leftcenter">
		        			<em class="leftcenter">酒店设计</em>
		        			<button class="leftcenter">了解更多 <img src="{$img_url}img/bannergt.png" alt="了解更多" /></button>
		        		</p>
		        	</span>
		        	<img src="{$img_url}img/bannerbg4.jpg" alt="酒店设计" />
		        </li>
		        <li class="swiper-slide bannerclassli">
		        	<span class="leftcenter">
		        		<p class="leftcenter">
		        			<em class="leftcenter">咖啡餐饮</em>
		        			<button class="leftcenter">了解更多<img src="{$img_url}img/bannergt.png" alt="了解更多" /></button>
		        		</p>
		        	</span>
		        	<img src="{$img_url}img/bannerbg5.jpg" alt="咖啡餐饮" />
		        </li>
		        <li class="swiper-slide bannerclassli">
		        	<span class="leftcenter">
		        		<p class="leftcenter">
		        			<em class="leftcenter">商业空间</em>
		        			<button class="leftcenter">了解更多<img src="{$img_url}img/bannergt.png" alt="了解更多" /></button>
		        		</p>
		        	</span>
		        	<img src="{$img_url}img/bannerbg6.jpg" alt="商业空间" />
		        </li>
		        <li class="swiper-slide bannerclassli">
		        	<span class="leftcenter">
		        		<p class="leftcenter">
		        			<em class="leftcenter">田园综合体</em>
		        			<button class="leftcenter">了解更多<img src="{$img_url}img/bannergt.png" alt="了解更多" /></button>
		        		</p>
		        	</span>
		        	<img src="{$img_url}img/bannerbg7.jpg" alt="田园综合体" />
		        </li>
		        <li class="swiper-slide bannerclassli">
		        	<span class="leftcenter">
		        		<p class="leftcenter">
		        			<em class="leftcenter">特色小镇</em>
		        			<button class="leftcenter">了解更多<img src="{$img_url}img/bannergt.png" alt="了解更多" /></button>
		        		</p>
		        	</span>
		        	<img src="{$img_url}img/bannerbg8.jpg" alt="特色小镇" />
		        </li>
		    </ul>
		    <!-- 如果需要分页器 -->
		    <div class="swiper-pagination"></div>
		<!--</div>-->
	</header>
	<section class="bannerdown">
		<ul>
			<li><i><img src="{$img_url}img/bannerdown01icon.png" alt="北京海岸设计" /></i><em>建筑外观与<br>室内设计</em></li>
			<li><i><img src="{$img_url}img/bannerdown02icon.png" alt="北京海岸设计" /></i><em>品牌VI设计<br>&nbsp;</em></li>
			<li><i><img src="{$img_url}img/bannerdown03icon.png" alt="北京海岸设计" /></i><em>软装设计与<br>定制</em></li>
			<li><i><img src="{$img_url}img/bannerdown04icon.png" alt="北京海岸设计" /></i><em>工程施工及<br>工程监理</em></li>
		</ul>
	</section>
	<!--郭老师、归本主义、九一律-->
	<section class="sectiontwobox">
		<ul>
			<li><img src="{$img_url}img/sectiontwoboxli01bg.jpg" alt="北京海岸设计-郭准先生" /><em><span></span>郭准先生</em><a href="{$img_url}#">立即了解</a></li>
			<li><img src="{$img_url}img/sectiontwoboxli02bg.jpg" alt="北京海岸设计-归本主义" /><em><span></span>归本主义</em><a href="{$img_url}#">立即了解</a></li>
			<li><img src="{$img_url}img/sectiontwoboxli03bg.jpg" alt="北京海岸设计-九一律" /><em><span></span>九一律</em><a href="{$img_url}#">立即了解</a></li>
		</ul>
	</section>
	<!--侧边固定浮框-->
	<div class="unilateralnav">
		<a href="{$img_url}#"> <img src="{$img_url}img/unilateralnavchat.png" alt="北京海岸设计-联系我们" /> </a>
		<a href="{$img_url}#"> <img src="{$img_url}img/unilateralnavtop.png" alt="北京海岸设计-返回顶部" /> </a>
	</div>
	<!--底部固定标签栏-->
	<ul class="bottomnav">
		<li><i><img src="{$img_url}img/bottomnavhotel.png" alt="首页" /></i>首页</li>
		<li><i><img src="{$img_url}img/bottomnavcase.png" alt="首页" /></i>设计案例</li>
		<a href="{$img_url}javascript:;" onclick="jQuery('.quotationForm').show()"><li><i><img src="{$img_url}img/bottomnavtable.png" alt="首页" /></i>提交需求</li></a>
		<li><i><img src="{$img_url}img/bottomnavcallus.png" alt="首页" /></i>电话咨询</li>
	</ul>
		
	<!--获取报价表单-->
	<div class="quotationForm">
		<div class="box1">
                  <a href="{$img_url}javascript:;" onclick="jQuery('.quotationForm').hide()" class="close">×</a>
                  <!-- <p>18年不断积累，我们已经做到领先，值得您的青睐</p>
                    <form class="iptbox">
                    	<div class="iptboxcenter">
                          <em>海岸设计专属服务</em>
                          <span>全国免费咨询电话：400-879-1110</span>
                          <input type="text" placeholder="您的称呼" />
                          <input type="text" placeholder="手机号码" />
                          <div class="plceadarea">
                              <input type="text" placeholder="项目面积" />
                              <select name="">
									<option selected="selected" value="">请选择省份</option>
									<option value="北京">北京</option>
									<option value="天津">天津</option>
									<option value="河北">河北</option>
									<option value="山西">山西</option>
									<option value="内蒙古">内蒙古</option>
									<option value="辽宁">辽宁</option>
									<option value="吉林">吉林</option>
									<option value="黑龙江">黑龙江</option>
									<option value="上海">上海</option>
									<option value="江苏">江苏</option>
									<option value="浙江">浙江</option>
									<option value="安徽">安徽</option>
									<option value="福建">福建</option>
									<option value="江西">江西</option>
									<option value="山东">山东</option>
									<option value="河南">河南</option>
									<option value="湖北">湖北</option>
									<option value="湖南">湖南</option>
									<option value="广东">广东</option>
									<option value="广西">广西</option>
									<option value="海南">海南</option>
									<option value="重庆">重庆</option>
									<option value="四川">四川</option>
									<option value="贵州">贵州</option>
									<option value="西藏">西藏</option>
									<option value="陕西">陕西</option>
									<option value="云南">云南</option>
									<option value="甘肃">甘肃</option>
									<option value="青海">青海</option>
									<option value="宁夏">宁夏</option>
									<option value="新疆">新疆</option>
									<option value="台湾">台湾</option>
									<option value="香港">香港</option>
									<option value="澳门">澳门</option>
							  </select>
                          </div>
                          <textarea value="请简述您的项目详情，我们会第一时间联系您" >
                             
                          </textarea>
                          <button>免费获取项目报价</button>
                        </div>
                    <p>今日已有  <span class="red">36</span> 人申请</p>
                    </form> -->



        </div>
	</div>
	<section class="formsection">

		<p>&nbsp;*请填写个人信息</p>
<!--
EOT;
require_once template('feed/feedback_12'); 
$metfeedback6=metlabel_feedback12(226);
echo <<<EOT
-->  
    {$metfeedback6}

			<!--<form >
			<div class="formlongkuang"><i><img src="{$img_url}img/imformatphopleicon.png" alt="北京海岸设计" /></i><input type="text" placeholder="您的姓名"/></div>
			<div class="formlongkuang"><i><img src="{$img_url}img/imformatphoneicon.png" alt="北京海岸设计" /></i><input type="text" placeholder="您的电话"/></div>
			<div class="formhang"><div class="formshortkuang">
			<input type="text" placeholder="项目面积"/></div>
			<select class="formshortkuang" class="msgSel" name="para186">
				<option selected="selected" value="">省份</option>
				<option value="北京">北京</option>
				<option value="天津">天津</option>
				<option value="河北">河北</option>
				<option value="山西">山西</option>
				<option value="内蒙古">内蒙古</option><option value="辽宁">辽宁</option>
				<option value="吉林">吉林</option><option value="黑龙江">黑龙江</option>
				<option value="上海">上海</option><option value="江苏">江苏</option>
				<option value="浙江">浙江</option><option value="安徽">安徽</option>
				<option value="福建">福建</option><option value="江西">江西</option>
				<option value="山东">山东</option><option value="河南">河南</option>
				<option value="湖北">湖北</option><option value="湖南">湖南</option>
				<option value="广东">广东</option><option value="广西">广西</option>
				<option value="海南">海南</option><option value="重庆">重庆</option>
				<option value="四川">四川</option><option value="贵州">贵州</option>
				<option value="西藏">西藏</option><option value="陕西">陕西</option>
				<option value="云南">云南</option><option value="甘肃">甘肃</option>
				<option value="青海">青海</option><option value="宁夏">宁夏</option>
				<option value="新疆">新疆</option><option value="台湾">台湾</option>
				<option value="香港">香港</option><option value="澳门">澳门</option>
			</select>
			</div>
			<textarea name="para184" class="formtextarea" placeholder="请简述您的需求，我们会第一时间回复您！ "></textarea>
		<a class="yvyuenow heartbeat" href="{$img_url}#">我要预约设计师</a>
		</form>-->
	</section>
<!--海岸优势-->
	<section>
		<div class="titleheauy">
			<h2><span class="red">海岸</span>优势</h2>
			<hr />
			<p>北京海岸设计以归本主义为核心设计理念，以九一律为设计指针<br />对每个项目进行原创设计 </p>
		</div>
		<ul class="haian-advantage xianzhiwidth">
			<li><img src="{$img_url}img/advantagelibg01.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon01.png" alt="" /></i><em>十九年行业<br />经验</em></li>
			<li><img src="{$img_url}img/advantagelibg02.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon02.png" alt="" /></i><em>客户涵盖众多知名企业</em></li>
			<li><img src="{$img_url}img/advantagelibg03.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon03.png" alt="" /></i><em>归本主义设计风格</em></li>
			<li><img src="{$img_url}img/advantagelibg04.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon04.png" alt="" /></i><em>一站式配套<br />服务</em></li>
			<li><img src="{$img_url}img/advantagelibg05.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon05.png" alt="" /></i><em>服务涵盖设计施工规划</em></li>
			<li><img src="{$img_url}img/advantagelibg06.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon06.png" alt="" /></i><em>汇集一流的<br />设计团队</em></li>
			<li><img src="{$img_url}img/advantagelibg07.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon07.png" alt="" /></i><em>设计周期短</em></li>
			<li><img src="{$img_url}img/advantagelibg08.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon08.png" alt="" /></i><em>预算精准<br />合理</em></li>
			<li><img src="{$img_url}img/advantagelibg09.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon09.png" alt="" /></i><em>快速服务<br />响应</em></li>
			<li><img src="{$img_url}img/advantagelibg10.png" alt="十九年行业经验" /><i><img src="{$img_url}img/advantagelicon10.png" alt="" /></i><em>合作共赢</em></li>
		</ul>
	</section>
</div>
	<section class="chosesectionbg">
		<div class="titleheauy">
			<h2><span class="red">为什么</span><span class="white">选择海岸</span></h2>
			<hr />
			<p class="white">海岸由精英设计师300余人组成，海岸每年完成400余项目<br />一直保持着180个左右的项目碰行中 </p>
		</div>
		<div class="choseusbgimglunbox">
			<div class="swiper-container choseusbgimglun">
				<ul class="swiper-wrapper">
					<li class="swiper-slide"><img src="{$img_url}img/choseusbgimg01.jpg"/></li>
					<li class="swiper-slide"><img src="{$img_url}img/choseusbgimg02.jpg"/></li>
					<li class="swiper-slide"><img src="{$img_url}img/choseusbgimg03.jpg"/></li>
				</ul>
			</div>
			<span><p>作为设计行业的先行者，我们立足于北京，放眼于全球， 紧密关注国内外设计最新、最前沿的发展态势和创新趋势， 以行业研究者的视角、专业的设计能力、专注的服务于中国设计业，推动着中国设计行业的发展与创新。</p></span>
		</div>
		<dl class="fourservicebox">
			<!--<dl>-->
				<dt><span>LEADER</span><span>中国设计行业<br />领先者</span></dt>
				<dt><span>DESIGN</span><span>精于品质<br />工于设计</span></dt>
				<dt><span>SERVICE</span><span>提供一站式<br />服务</dt>
				<dt><span>WIN-WIN</span><span>坚持共赢<br />&nbsp;</dt>
				<dd>北京海岸设计——中国设计行业先行者。每年完成400余项目，一直保持着180个左右的项目在进行中。获得客户高度认可，客户重复合作率高达80%。</dd>
				<dd class="disnone">我们的自信来自品质，实力决定一切。 平均每个省份就有20个海岸设计真实案例， 结合各地市场反馈与资源优势，合理规划设计。</dd>
				<dd class="disnone">提供一站式设计服务， 包括前期可行性研究、初期预算、 方案设计，效果图设计与施工工艺、整体智能方案。</dd>
				<dd class="disnone">我们的自信来自品质，实力决定一切。 平均每个省份就有20个海岸设计真实案例， 结合各地市场反馈与资源优势，合理规划设计。</dd>
			<!--</dl>-->
		</dl>
		<!--<div class="changetxtbox">
			<img src="{$img_url}img/changetxtboxbg.jpg" alt="北京海岸设计" />
			<ul>
				<li>作为设计行业的先行者，我们立足于北京，放眼于全球</li>
				<li class="disnone">124125315，我们立足于北京，放眼于全球</li>
				<li class="disnone">dgbeb，我们立足于北京，放眼于全球</li>
			</ul>
			<div class="changetxtbtnbox">
				<button class="changetxtprevbtn">上一张</button>
				<a href="{$img_url}#" class="changetxtcallus heartbeat">立即预约</a>
				<button class="changetxtnextbtn">下一张</button>
			</div>
		</div>-->
		<!--<ul class="fourblank">
			<li>
				<span>LEADER</span>
				<i></i>
				<em>中国设计行业领先者</em>
				<p>北京海岸设计——中国设计行业先行者。每年完成400余项目，一直保持着180个左右的项目在进行中。获得客户高度认可，客户重复合作率高达80%。</p>
			</li>   
			<li>
				<span>DESIGN</span>
				<i></i>
				<em>精于品质工于设计</em>
				<p>我们的自信来自品质，实力决定一切。 平均每个省份就有20个海岸设计真实案例， 结合各地市场反馈与资源优势，合理规划设计。</p>
			</li>
			<li>
				<span>SERVICE</span>
				<i></i>
				<em>提供一站式服务</em>
				<p>提供一站式设计服务， 包括前期可行性研究、初期预算、 方案设计，效果图设计与施工工艺、整体智能方案。</p>
			</li>
			<li>
				<span>WIN-WIN</span>
				<i></i>
				<em>坚持共赢</em>
				<p>我们秉承“品质第一、客户至上”的服务宗旨， 站在客户角度，提供最具商业价值的专业服务， 将每一个设计项目做成精品。</p>
			</li>
		</ul>-->
	</section>
	<!-- 各快案例展示 -->
	<section>
		<div class="casetitle-box">
			<em>酒店设计</em>
			<span><i class="csetitspani"></i><span><a href="{$index_url}product/list-150-cn.html" target="_blank">&nbsp;查看更多</a></span></span>
		</div>
		<div id="swipercontainer" class="firstcaseulbox swiper-container">
			<ul class="firstcaseul clearFix swiper-wrapper">
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/353-cn.html" title="U°咖啡厅设计（二店）" target="_self">
					<img src="{$img_url}img/hotelcase01.jpg" alt="酒店设计">
					<div class="firstcasebtombox">
						<em>田里酒店设计</em>
						<span>山西太谷</span>
					</div>
				</a>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/86-cn.html" title="U°咖啡厅设计（二店）" target="_self">
					<img src="{$img_url}img/hotelcase02.jpg" alt="酒店设计">
					</a>


					<div class="firstcasebtombox">
						<em>IN酒店</em>
						<span>青岛</span>
					</div>
				</li>
				<li class="swiper-slide">    
				<a href="http://m.haianzhuangshi.com/product/353-cn.html" title="U°咖啡厅设计（二店）" target="_self">
					<img src="{$img_url}img/hotelcase03.jpg" alt="酒店设计">
					</a>


					<div class="firstcasebtombox">
						<em>田里酒店</em>
						<span>山西</span>
					</div>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/360-cn.html" title="U°咖啡厅设计（二店）" target="_self">
					<img src="{$img_url}img/hotelcase04.jpg" alt="酒店设计">

					<div class="firstcasebtombox">
						<em>归隐酒店</em>
						<span>潍坊</span>
					</div>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/84-cn.html" title="U°咖啡厅设计（二店）" target="_self">
					<img src="{$img_url}img/hotelcase05.jpg" alt="酒店设计">
					</a>
					<div class="firstcasebtombox">
						<em>唐庄艺术酒店</em>
						<span>淄博</span>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section>
		<div class="casetitle-box">
			<em>咖啡馆设计</em>
			<span><i class="csetitspani"></i><span>&nbsp;查看更多</span></span>
		</div>
		<div id="swipersecondcasebox" class="secondcase-box swiper-container">
			<ul class="secondcase-imgbox swiper-wrapper">
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase01.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase02.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase03.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase04.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase05.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase06.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase07.jpg" alt="咖啡馆设计">
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/cafecase08.jpg" alt="咖啡馆设计">
				</li>
			</ul>
			<ul class="secondcase-txtbox">
				<li>
					<em>咖啡陪你</em>
					<p><span>&nbsp;归本主义</span><span>北京</span></p>
				</li>
				<li class="disnone">
					<em>番禺煮糖间咖啡馆</em>
					<p><span>&nbsp;归本主义</span><span>广州</span></p>
				</li>
				<li class="disnone">
					<em>漫咖啡</em>
					<p><span>&nbsp;归本主义</span><span>河南</span></p>
				</li>
				<li>
					<em>创客咖啡</em>
					<p><span>&nbsp;归本主义</span><span>南昌</span></p>
				</li>
				<li class="disnone">
					<em>-U°咖啡馆（一店）</em>
					<p><span>&nbsp;归本主义</span><span>内蒙古</span></p>
				</li>
				<li class="disnone">
					<em>红树林咖啡馆</em>
					<p><span>&nbsp;归本主义</span><span>青岛</span></p>
				</li>
				<li>
					<em>Cafe.Oct.22</em>
					<p><span>&nbsp;归本主义</span><span>太原</span></p>
				</li>
				<li class="disnone">
					<em>泰迪陪你</em>
					<p><span>&nbsp;归本主义</span><span>雅安</span></p>
				</li>
			</ul>
			<ul class="secondcase-btnbox">
				<i class="caselftbtn" id="caseprevbtn"><img src="{$img_url}img/secondcasebtnboxlft.png" alt="咖啡馆设计"></i>
				<i class="casergtbtn" id="casenextbtn"><img src="{$img_url}img/secondcasebtnboxrgt.png" alt="咖啡馆设计"></i>
			</ul>
		</div>
	</section>
	<section>
		<div class="casetitle-box">
			<em>餐厅设计</em>
			<span><i class="csetitspani"></i><span>&nbsp;查看更多</span></span>
		</div>
		<div id="swipertwocontainer" class="thirdcasebox swiper-container">
			<ul class="thirdcase-ul swiper-wrapper">
				<li class="swiper-slide">
					<img src="{$img_url}img/restrcase01.jpg" alt="餐厅设计">
					<em>侗家食府</em>
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/restrcase02.jpg" alt="餐厅设计">
					<em>归隐酒店SHANG公区</em>
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/restrcase03.jpg" alt="餐厅设计">
					<em>红树林儿童海鲜餐厅 </em>
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/restrcase04.jpg" alt="餐厅设计">
					<em>江户前寿司</em>
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/restrcase05.jpg" alt="餐厅设计">
					<em>娄三少</em>
				</li>
				<li class="swiper-slide">
					<img src="{$img_url}img/restrcase06.jpg" alt="餐厅设计">
					<em>田里酒店餐厅 </em>
				</li>
			</ul>
		</div>
	</section>
	<section>
		<div class="casetitle-box">
			<em>商业空间</em>
		</div>
		<div id="swiperbusinesbox" class="businessspacebox">
			<div class="swiper-container busswiper">
				<dl class="swiper-wrapper">
					<dt class="swiper-slide busspaceselected">办公空间</dt>
					<dt class="swiper-slide">网咖设计<span></span></dt>
					<dt class="swiper-slide">酒吧设计<span></span></dt>
					<dt class="swiper-slide">会所设计<span></span></dt>
					<dt class="swiper-slide">书店设计<span></span></dt>
				</dl>
			</div>
			<div class="busspacecontentbox swiper-container busswiper2">
				<div class="swiper-wrapper busspacecontent">
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox"><img src="{$img_url}img/bangong01.png" alt=""></div><span>创客巢</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/bangong02.png" alt=""></div><span>黑金</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/bangong03.png" alt=""></div><span>拾味馆</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/bangong04.png" alt=""></div><span>壹点一念</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox"><img src="{$img_url}img/wangka01.png" alt=""></div><span>大同G网咖</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/wangka02.png" alt=""></div><span>海角七号网咖</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/wangka03.png" alt=""></div><span>漫海岸网咖</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/wangka04.png" alt=""></div><span>旗鱼网咖</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox"><img src="{$img_url}img/jiubacase01.png" alt=""></div><span>true color烧烤酒吧</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/jiubacase02.png" alt=""></div><span>海角七号酒咖</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/jiubacase03.png" alt=""></div><span>红树林H·Lounge酒吧</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/jiubacase04.png" alt=""></div><span>马克比利时精酿酒吧</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox"><img src="{$img_url}img/huisuocase01.png" alt=""></div><span>良子健身</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/huisuocase02.png" alt=""></div><span>千色水会</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/huisuocase03.png" alt=""></div><span>前沿公社红酒会所</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/huisuocase04.png" alt=""></div><span>檀邑溪谷会所</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox"><img src="{$img_url}img/shudiancase01.png" alt=""></div><span>朔州大学书店 </span></li>
							<li><div class="imgbox"><img src="{$img_url}img/shudiancase02.png" alt=""></div><span>田森图书馆</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/shudiancase03.png" alt=""></div><span>新华书店</span></li>
							<li><div class="imgbox"><img src="{$img_url}img/shudiancase04.png" alt=""></div><span>知一书店</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="casetitle-box">
			<em>商业综合体设计</em>
			<span><i class="csetitspani"></i><span>&nbsp;查看更多</span></span>
		</div>
		<ul class="buszongheulbox">
			<li><img src="{$img_url}img/buszongcase04.jpg" alt=""><span>云创谷</span></li>
			<li><img src="{$img_url}img/buszongcase03.jpg" alt=""><span>南瓜公社</span></li>
			<li><img src="{$img_url}img/buszongcase01.jpg" alt=""><span>淮安广场</span></li>
			<li><img src="{$img_url}img/buszongcase02.jpg" alt=""><span>南彩综合体</span></li>
		</ul>
	</section>
	<!-- 规划设计 -->
	<section>
		<div class="casetitle-box">
			<em>规划设计</em>
		</div>
		<div class="blackzhefourbox">
			<div class="blackzhetopbox">
				<img src="{$img_url}img/tesexiaozhen.jpg" alt="特色小镇">
				<div class="leftmidblackzhe zheblack">
					<em>特色小镇</em>
					<hr class="zhehr">
				</div>
			</div>
			<div class="blackzheleftbox">
				<img src="{$img_url}img/tesetianyuan.jpg" alt="田园综合体">
				<div class="lefttopblackzhe">
					<em>田园综合体</em>
					<hr class="zhehr">
				</div>
			</div>
			<div class="blackzherightbigbox">
				<div class="blackzherightbox">
					<img src="{$img_url}img/tesejingguan.jpg" alt="景观规划">
					<div class="leftdownblackzhe">
						<em>景观规划</em>
						<hr class="zhehr">
					</div>
				</div>
				<div class="blackzherightbox">
					<img src="{$img_url}img/teseminsu.jpg" alt="民宿设计">
					<div class="leftdownblackzhe">
						<em>民宿设计</em>
						<hr class="zhehr">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 空间设计 -->
	<section>
		<div class="bottomshadow">
			<div class="casetitle-box">
				<em>空间设计</em>
			</div>
			<div class="spacedesignbox">
					<div class="bottomshadowcontent">
						<dl>
							<dt class="shadowcontentsecond">集装箱设计</dt>
							<dt>软装设计</dt>
							<!--<dt>品牌VI设计</dt>-->
						</dl>
						<article>
							<div class="swiperspacebox1 bottomshadowcontent swiper-container">
								<ul class="swiper-wrapper">
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase01.jpg" alt="河北-蜂巢集装箱">
										<em>蜂巢集装箱</em>
										<span>河北</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase02.jpg" alt="青岛-IN酒店集装箱">
										<em>IN酒店集装箱</em>
										<span>青岛</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase03.jpg" alt="青海-box街区">
										<em>box街区</em>
										<span>青海</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase04.png" alt="山西-时代广场营销中心">
										<em>时代广场营销中心</em>
										<span>山西</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase05.png" alt="山西-新晋府集装箱">
										<em>新晋府集装箱</em>
										<span>山西</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase06.png" alt="西安-音乐创客集装箱街区">
										<em>音乐创客集装箱街区</em>
										<span>西安</span>
									</li>
								</ul>
								<!--<div class="swiper-scrollbar"></div>-->
								<a class="findmoreclassblack" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei1.png" alt="查看更多海岸案例"></i></a>
							</div>
						</article>
						<article>
							<div class="swiperspacebox2 bottomshadowcontent swiper-container">
								<ul class="swiper-wrapper">
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase01.png" alt="保定-兜友咖啡软装">
										<em>兜友咖啡软装</em>
										<span>保定</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase02.png" alt="北京-1小菊咖啡馆">
										<em>小菊咖啡馆</em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase03.png" alt="北京-恭喜里软装">
										<em>恭喜里软装</em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase04.png" alt="北京-西十二街软装">
										<em>兜友咖啡软装</em>
										<span>保定</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase05.png" alt="湖南-冉时光茶餐厅软装">
										<em>小菊咖啡馆</em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase06.png" alt="山东-芙蓉壹号软装">
										<em>恭喜里软装</em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase07.png" alt="上海-花巢火锅店软装">
										<em>花巢火锅店软装</em>
										<span>上海</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase08.png" alt="云南-啡影1890软装">
										<em>啡影1890软装</em>
										<span>云南</span>
									</li>
								</ul>
								<a class="findmoreclassblack" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei1.png" alt="查看更多海岸案例"></i></a>
							</div>
						</article>
						<!--<article>
							<div class="swiperspacebox3 bottomshadowcontent swiper-container">
								<ul class="swiper-wrapper">
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase01.jpg" alt="集装箱设计">
										<em>蜂巢集装箱</em>
										<span>河北</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase02.jpg" alt="新晋府集装箱">
										<em>IN酒店集装箱</em>
										<span>青岛</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase03.jpg" alt="IN酒店（门头）">
										<em>box街区</em>
										<span>青海</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase01.jpg" alt="集装箱设计">
										<em>蜂巢集装箱</em>
										<span>河北</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase02.jpg" alt="新晋府集装箱">
										<em>新晋府集装箱</em>
										<span>山西</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase03.jpg" alt="IN酒店（门头）">
										<em>IN酒店（门头）</em>
										<span>山东</span>
									</li>
								</ul>
								<a class="findmoreclassblack" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei1.png" alt="查看更多海岸案例"></i></a>
							</div>
						</article>-->
					</div>
			</div>
		</div>
	</section>
	<!--品牌VI设计-->
	<!--<section>
		<div class="brandVIbox">
			<div class="placetitle-box">
				<em><span class="red">合作</span>客户</em>
			</div>
			<div class="brandVI">
				<div id="swipersbrandVIcasebox" class="brandVI-box swiper-container">
					<ul class="brandVI-imgbox swiper-wrapper">
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase01.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase02.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase03.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase04.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase05.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase06.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase07.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase08.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase09.jpg" alt="咖啡馆设计">
						</li>
						<li class="swiper-slide">
							<img src="{$img_url}img/VIimgcase10.jpg" alt="咖啡馆设计">
						</li>
					</ul>
					<ul class="brandVI-txtbox">
						<li><em>隐逸水镇VIS</em><span>VI设计</span></li>
						<li><em>IN酒店</em><span>VI设计</span></li>
						<li><em>10假日当磨咖啡</em><span>VI设计</span></li>
						<li><em>悦阅书</em><span>VI设计</span></li>
						<li><em>花巢</em><span>VI设计</span></li>
						<li><em>红风车</em><span>VI设计</span></li>
						<li><em>蓝隅酒店</em><span>VI设计</span></li>
						<li><em>饮一堂</em><span>VI设计</span></li>
						<li><em>云上漫足</em><span>VI设计</span></li>
						<li><em>中慈国医馆</em><span>VI设计</span></li>
					</ul>
					<ul class="secondcase-btnbox">
						<i class="caselftbtn" id="caseprevbtn"><img src="{$img_url}img/secondcasebtnboxlft.png" alt="咖啡馆设计"></i>
						<i class="casergtbtn" id="casenextbtn"><img src="{$img_url}img/secondcasebtnboxrgt.png" alt="咖啡馆设计"></i>
					</ul>
				</div>
			</div>
		</div>
	</section>-->
	
	<section class="uscustomerbg">
			<div class="placetitle-box">
				<em><span class="red">合作</span>客户</em>
			</div>
			<div class="customerlunbobox">
				<i id="customerprev" ><img src="{$img_url}img/cutomleft.png" alt="北京海岸设计合作客户" /></i>
				<div id="swipercustomerbox" class="uscustomerbox swiper-container">
					<div class="customerulbox swiper-wrapper">
						<ul class="customerul swiper-slide">
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg1.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
						</ul>
							<!--一屏-->
						<ul class="customerul swiper-slide">
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
						</ul>
							<!--一屏-->
						<ul class="customerul swiper-slide">
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
							<li><img src="{$img_url}img/customliimg0.jpg"/></li>
						</ul>
					</div>
				</div>
				<i id="customernext" ><img src="{$img_url}img/cutomright.png" alt="北京海岸设计合作客户" /></i>
			</div>
	</section>
	<!--海岸动态-->
	<section>
		<div class="placetitle-box">
			<em><span class="red">海岸</span><span class="black">动态</span></em>
		</div>
		<div class="haiandynamic">
			<div class="swiper1 haiandynamicdt">
				<dl class="swiper-wrapper">
					<dt class="swiper-slide haiandynamicselected">设计动态</dt>
					<dt class="swiper-slide">最新案例</dt>
					<dt class="swiper-slide">海岸新闻</dt>
				</dl>
			</div>
			<div class=" swiper-container swiper2 haiandynamiculbox">
				<div class="haiandynamiculs swiper-wrapper">
					<ul class="swiper-slide">
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
					</ul>
					<ul class="swiper-slide">
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
					</ul>
					<ul class="swiper-slide">
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>“唯快不破"---2018海岸19周年北京海岸北京海岸</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓拉开帷幕.春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题</p>
							<a href="{$img_url}#">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
					</ul>
				</div>
			</div>
			<a class="findmoreclassblack matop60px" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei1.png" alt="查看更多海岸案例"></i></a>
		</div>
	</section>
	<!--导航块-->
	<section>
		<ul class="navlinkbox">
			<li><img src="{$img_url}img/jiudiansheji.png" alt="酒店设计" /><em>酒店设计</em></li>
			<li><img src="{$img_url}img/kafeicanyin.png" alt="咖啡餐饮设计" /><em>咖啡餐饮设计</em></li>
			<li><img src="{$img_url}img/tesexiaozhensheji.png" alt="特色小镇设计" /><em>特色小镇设计</em></li>
			<li><img src="{$img_url}img/jizhuangxiangsheji.png" alt="集装箱设计" /><em>集装箱设计</em></li>
			<li><img src="{$img_url}img/jingguanguihua.png" alt="景观规划" /><em>景观规划</em></li>
			<li><img src="{$img_url}img/shangyekongjian.png" alt="商业空间" /><em>商业空间</em></li>
			<li><img src="{$img_url}img/shangyezonghetiicon.png" alt="商业综合体" /><em>商业综合体</em></li>
			<li><img src="{$img_url}img/minsusheji.png" alt="民宿设计" /><em>民宿设计</em></li>
			<li><img src="{$img_url}img/tianyuanzongheti.png" alt="田园综合体设计" /><em>田园综合体设计</em></li>
			<li><img src="{$img_url}img/ruanzhuangsheji.png" alt="软装设计" /><em>软装设计</em></li>
			<li><img src="{$img_url}img/pinpaivi.png" alt="品牌VI设计" /><em>品牌VI设计</em></li>
			<li><span><img src="{$img_url}img/chakanmorejia.png" alt="查看更多" /></span>查看更多</li>
		</ul>
	</section>
	<footer>
		<div class="erweimabox">
			<img src="{$img_url}img/weixinma.jpg" alt="官网微信二维码" />
			<img src="{$img_url}img/weiboma.jpg" alt="官网微博二维码" />
			<em>官方微信</em><em>官方微博</em>
		</div>
		<span><img src="{$img_url}img/footerphone.png" alt="全国免费咨询热线：400-879-1110" />全国免费咨询热线：<span class="red">400-879-1110</span></span>
		<p>CopRright © 1999-2017    All Rrights Reserved.  <br />京ICP备13049424号</p>
	</footer>
    <script src="{$img_url}js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
  
</body>
</html>