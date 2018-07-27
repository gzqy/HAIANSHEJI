<!--<?php
require_once template('head');
echo <<<EOT
-->


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
    	<script language="JavaScript" type="text/javascript"> 
		function changeBtnable(){
		    $("#btn").removeAttr("disabled");
		}
		function changeBtndisable(){
		    $("#btn").attr("disabled","true");
		}
		function checkInput(){
		    var text = $(".para249").val();
		 	 var tex = $(".para250").val();
		  　　var r = /^\+?[1-9][0-9]*$/;　　//判断是否为正整数 
		    if(text.length !== 11 ||  r.test(tex) == false){    	
		    	changeBtndisable();	
		    }
		}	
	
	 </script> 
	<script type="text/javascript">
	$(function(){
		$(".para249").blur(function(e){
			var txt =$(this).val();//当前值
			if(txt==null||txt.length <7)//判断是否为空或输入长度小于6个字符
			{	
				$(this).attr('placeholder','请输入正确的手机号');	
			}
			else{
				var attr = document.getElementsByClassName("para249");
			
				 $(this).removeAttr("style")
				}
	         });
			$(".para250").blur(function(e){	
			var txt =$(this).val();//当前值
			　var r = /^\d+.*?/;　　//判断是否为正整数 			
			if(txt==null || r.test(txt) == false )//判断是否为空或输入长度小于6个字符
			{			
				$(this).attr('placeholder','请输入项目面积');	   
			}
			else{
				$(this).removeAttr("style")
				}
	         });

		       $(".para252").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入正确的数字');
						  
						}else{
						
							}
		         });

		      $(".para248").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null || txt.length <2 )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入您的名字');
						    
						}else{
							
							}
		         });
		});
	</script>
<!--
EOT;
if($met_flasharray[$classnow][wap_type]&&!$map){
echo <<<EOT
-->
<div class=" max-width: 10rem;">
<!--大图轮播-->
<div class="flexslider" style="height:{$met_flasharray[$classnow][wap_y]}px;">
  <ul class="flash_slides">
<!--
EOT;
foreach($met_flashimg as $key=>$val){
$val[html]=$val[img_link]?"<a href='{$val[img_link]}' title='{$val[title]}'><img src='{$val[img_path]}' height='{$met_flasharray[$classnow][wap_y]}' /></a>":"<img src='{$val[img_path]}' height='{$met_flasharray[$classnow][wap_y]}' />";
echo <<<EOT
-->
    <li>{$val[html]}</li>
<!--
EOT;
}
echo <<<EOT
-->
  </ul>
</div>
<!--
EOT;
}
echo <<<EOT
-->
<div class="index">
<!--
EOT;
if($map==1){
	require_once template('block/map');
}else{

if($lang_phone_OK){
   
   if($lang_phone_bg != ""){$phone_color=$lang_phone_bg;}else{$phone_color="#ea5946";}
   
echo <<<EOT
-->
      
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
		<section class="formsection">

		<p>&nbsp;*请填写个人信息</p>
<!--
EOT;
require_once template('feed/feedback_12'); 
$metfeedback6=metlabel_feedback12(226);
echo <<<EOT
-->  
    {$metfeedback6}	
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
			<span><i class="csetitspani"></i><span><a class="yanse" href="{$index_url}product/list-150-cn.html" target="_blank">&nbsp;查看更多</a></span></span>
		</div>
		<div id="swipercontainer" class="firstcaseulbox swiper-container">
			<ul class="firstcaseul clearFix swiper-wrapper">
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/509-cn.html" target="_self">
					<img src="{$img_url}img/hotelcase01.jpg" alt="酒店设计">
					<div class="firstcasebtombox">
						<em>齐丽酒店</em>
						<span>河北燕郊</span>
					</div>
				</a>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/86-cn.html" target="_self">
					<img src="{$img_url}img/hotelcase02.jpg" alt="酒店设计">
					</a>


					<div class="firstcasebtombox">
						<em>IN酒店</em>
						<span>青岛</span>
					</div>
				</li>
				<li class="swiper-slide">    
				<a href="http://m.haianzhuangshi.com/product/353-cn.html" target="_self">
					<img src="{$img_url}img/hotelcase03.jpg" alt="酒店设计">
					</a>


					<div class="firstcasebtombox">
						<em>田里酒店</em>
						<span>山西</span>
					</div>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/360-cn.html" target="_self">
					<img src="{$img_url}img/hotelcase04.jpg" alt="酒店设计">

					<div class="firstcasebtombox">
						<em>归隐酒店</em>
						<span>潍坊</span>
					</div>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/84-cn.html" target="_self">
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
			<span><i class="csetitspani"></i><span><a href="{$index_url}product/list-174-cn.html" target="_blank" class="yanse">&nbsp;查看更多</a></span></span>
		</div>
		<div id="swipersecondcasebox" class="secondcase-box swiper-container">
			<ul class="secondcase-imgbox swiper-wrapper">
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/374-cn.html" target="_self">
					<img src="{$img_url}img/cafecase01.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/272-cn.html" target="_self">
					<img src="{$img_url}img/cafecase02.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/274-cn.html" target="_self">
					<img src="{$img_url}img/cafecase03.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/285-cn.html" target="_self">
					<img src="{$img_url}img/cafecase04.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/390-cn.html" target="_self">
					<img src="{$img_url}img/cafecase05.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/200-cn.html" target="_self">
					<img src="{$img_url}img/cafecase06.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/282-cn.html" target="_self">
					<img src="{$img_url}img/cafecase07.jpg" alt="咖啡馆设计">
					</a>
				</li>
				<li class="swiper-slide">
					<a href="http://m.haianzhuangshi.com/product/393-cn.html" target="_self">
					<img src="{$img_url}img/cafecase08.jpg" alt="咖啡馆设计">
					</a>
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
			<span><i class="csetitspani"></i><span><a href="{$index_url}product/list-175-cn.html" target="_blank" class="yanse">&nbsp;查看更多</a></span></span>
		</div>
		<div id="swipertwocontainer" class="thirdcasebox swiper-container">
			<ul class="thirdcase-ul swiper-wrapper">
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/168-cn.html" target="_self">
					<img src="{$img_url}img/restrcase01.jpg" alt="餐厅设计">
					</a>
					<em>侗家食府</em>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/308-cn.html" target="_self">
					<img src="{$img_url}img/restrcase02.jpg" alt="餐厅设计">
					</a>
					<em>归隐酒店SHANG公区</em>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/403-cn.html" target="_self">
					<img src="{$img_url}img/restrcase03.jpg" alt="餐厅设计">
					</a>
					<em>红树林儿童海鲜餐厅 </em>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/503-cn.html" target="_self">
					<img src="{$img_url}img/restrcase04.jpg" alt="餐厅设计">
					</a>
					<em>江户前寿司</em>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/256-cn.html" target="_self">
					<img src="{$img_url}img/restrcase05.jpg" alt="餐厅设计">
					</a>
					<em>娄三少</em>
				</li>
				<li class="swiper-slide">
				<a href="http://m.haianzhuangshi.com/product/353-cn.html" target="_self">
					<img src="{$img_url}img/restrcase06.jpg" alt="餐厅设计">
					</a>
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
<!--
EOT;

foreach(methtml_getarray($lang_godlist6,'','','','4','','','','8') as $key=>$val){
echo <<<EOT
-->

							<!--<li><div class="imgbox">
								<a href="{$val[url]}" target="_self">							
							<img src="{$val[imgurls]}" alt="">
								</a>

								</div><span>{$val[title]}</span></li>-->
<!--
EOT;
}
echo <<<EOT
-->


							<li><div class="imgbox">
								<a href="http://m.haianzhuangshi.com/product/339-cn.html" target="_self">							
							<img src="{$img_url}img/bangong01.png" alt="">
								</a>

								</div><span>创客巢</span></li>
							<li><div class="imgbox">
								<a href="http://m.haianzhuangshi.com/product/524-cn.html" target="_self">						
							<img src="{$img_url}img/bangong02.png" alt="">
								</a>

								</div><span>上善本草堂</span></li>
							<li><div class="imgbox">
								<a href="http://m.haianzhuangshi.com/product/63-cn.html" target="_self">	
							<img src="{$img_url}img/bangong03.png" alt="">
								</a>

								</div><span>拾味馆</span></li>
							<li><div class="imgbox">
								<a href="http://m.haianzhuangshi.com/product/345-cn.html" target="_self">	
							<img src="{$img_url}img/bangong04.png" alt="">
								</a>

								</div><span>壹点一念</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$index_url}product">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=312&lang=cn" target="_blank"> 
									
							<img src="{$img_url}img/wangka01.png" alt="">
								</a>

							</div><span>大同G网咖</span></li>
							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=315&lang=cn" target="_blank"> 
							
							<img src="{$img_url}img/wangka02.png" alt="">
								</a>

							</div><span>海角七号网咖</span></li>
							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=446&lang=cn" target="_blank"> 

							<img src="{$img_url}img/wangka03.png" alt="">
								</a>

							</div><span>漫海岸网咖</span></li>
							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 

							<img src="{$img_url}img/wangka04.png" alt="">
								</a>

							</div><span>旗鱼网咖</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 
								<img src="{$img_url}img/jiubacase01.png" alt="">
								</a>
								</div><span>true color烧烤酒吧</span></li>
												

							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 
								<img src="{$img_url}img/jiubacase02.png" alt="">
								</a>
								</div><span>海角七号酒咖</span></li>
											
						
							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 
								<img src="{$img_url}img/jiubacase03.png" alt="">
								</a>
								</div><span>红树林H·Lounge酒吧</span></li>
												

							<li><div class="imgbox">
								<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 
								<img src="{$img_url}img/jiubacase04.png" alt="">
								</a>
								</div><span>马克比利时精酿酒吧</span></li>
												

						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=519&lang=cn" target="_blank"> 	
								<img src="{$img_url}img/huisuocase01.png" alt="">
							</a>
								</div><span>良子健身</span></li>
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=92&lang=cn" target="_blank"> 	
								<img src="{$img_url}img/huisuocase02.png" alt="">
							</a>
								</div><span>千色水会</span></li>
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=264&lang=cn" target="_blank"> 	
								<img src="{$img_url}img/huisuocase03.png" alt="">
							</a>
								</div><span>前沿公社红酒会所</span></li>
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=323&lang=cn" target="_blank"> 	
								<img src="{$img_url}img/huisuocase04.png" alt="">
							</a>
								</div><span>檀邑溪谷会所</span></li>
						</ul>
						<a class="findmoreclasswhite" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei.png" alt="查看更多海岸案例"></i></a>
					</div>
					<div class="busspace-content swiper-slide">
						<ul>
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=301&lang=cn" target="_blank">	
							<img src="{$img_url}img/shudiancase01.png" alt=""></a></div><span>朔州大学书店 </span></li>
							
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=270&lang=cn" target="_blank">	
							<img src="{$img_url}img/shudiancase02.png" alt=""></a> </div><span>田森图书馆</span></li>
							               
							<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=328&lang=cn" target="_blank">	
							<img src="{$img_url}img/shudiancase03.png" alt="">	</a>	</div><span>新华书店</span></li>
				
								<li><div class="imgbox">
							<a href="{$index_url}product/showproduct.php?id=428&lang=cn" target="_blank">	
							<img src="{$img_url}img/shudiancase04.png" alt=""></a></div><span>知一书店</span></li>
							
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
			<span><i class="csetitspani"></i><span><a href="{$index_url}product/list-119-cn.html" target="_blank" class="yanse">&nbsp;查看更多</a></span></span>
		</div>
		<ul class="buszongheulbox">
			<li>		
			<img src="{$img_url}img/buszongcase04.jpg" alt=""><span><a style="color:#fff" href="{$index_url}product/showproduct.php?id=347&lang=cn" target="_blank">云创谷</a></span></li>
			<li>		
			<img src="{$img_url}img/buszongcase03.jpg" alt=""><span><a style="color:#fff" href="{$index_url}product/showproduct.php?id=279&lang=cn" target="_blank">南瓜公社</a></span></li>
			<li>		
			<img src="{$img_url}img/buszongcase01.jpg" alt=""><span><a style="color:#fff" href="{$index_url}product/showproduct.php?id=54&lang=cn" target="_blank">淮安广场</span></a></li>
			<li>	
			<img src="{$img_url}img/buszongcase02.jpg" alt=""><span><a style="color:#fff" href="{$index_url}product/showproduct.php?id=289&lang=cn" target="_blank">南彩综合体</a></span></li>
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
					<em><a href="{$index_url}product/list-113-cn.html" target="_blank">特色小镇</a></em>
					<hr class="zhehr">
				</div>
			</div>
			<div class="blackzheleftbox">
				<img src="{$img_url}img/tesetianyuan.jpg" alt="田园综合体">
				<div class="lefttopblackzhe">
					<em><a href="{$index_url}product/list-151-cn.html" target="_blank">田园综合体</a></em>
					<hr class="zhehr">
				</div>
			</div>
			<div class="blackzherightbigbox">
				<div class="blackzherightbox">
					<img src="{$img_url}img/tesejingguan.jpg" alt="景观规划">
					<div class="leftdownblackzhe">
						<em><a href="{$index_url}product/list-114-cn.html" target="_blank">景观规划</a></em>
						<hr class="zhehr">
					</div>
				</div>
				<div class="blackzherightbox">
					<img src="{$img_url}img/teseminsu.jpg" alt="民宿设计">
					<div class="leftdownblackzhe">
						<em><a href="{$index_url}product/list-154-cn.html" target="_blank">民宿设计</a></em>
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
							
						</dl>
						<article>
							<div class="swiperspacebox1 bottomshadowcontent swiper-container">
								<ul class="swiper-wrapper">
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase01.jpg" alt="河北-蜂巢集装箱">
										<em>
											<a href="http://m.haianzhuangshi.com/product/42-cn.html" target="_self">
												蜂巢集装箱</a>
											</em>
										<span>河北</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase02.jpg" alt="青岛-IN酒店集装箱">
										<em>
											<a href="http://m.haianzhuangshi.com/product/49-cn.html" target="_self">
												IN酒店集装箱</a>
											</em>
										<span>青岛</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase03.jpg" alt="青海-box街区">
										<em>
											<a href="http://m.haianzhuangshi.com/product/48-cn.html" target="_self">
												box街区</a>
											</em>
										<span>青海</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase04.png" alt="山西-时代广场营销中心">
										<em>
											<a href="http://m.haianzhuangshi.com/product/385-cn.html" target="_self">
												时代广场营销中心</a>
											</em>
										<span>山西</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase05.png" alt="山西-新晋府集装箱">
										<em>
											<a href="http://m.haianzhuangshi.com/product/52-cn.html" target="_self">
												新晋府集装箱</a>
											</em>
										<span>山西</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/jizhuangxiangcase06.png" alt="西安-音乐创客集装箱街区">
										<em>
											<a href="http://m.haianzhuangshi.com/product/245-cn.html" target="_self">
												音乐创客集装箱街区</a>
											</em>
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
										<em><a href="http://m.haianzhuangshi.com/product/361-cn.html" target="_self">兜友咖啡软装</a></em>
										<span>保定</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase02.png" alt="北京-1小菊咖啡馆">
										<em><a href="http://m.haianzhuangshi.com/product/362-cn.html" target="_self">小菊咖啡馆</a></em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase03.png" alt="北京-恭喜里软装">
										<em><a href="http://m.haianzhuangshi.com/product/472-cn.html" target="_self">恭喜里软装</a></em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase04.png" alt="北京-西十二街软装">
										<em><a href="http://m.haianzhuangshi.com/product/361-cn.html" target="_self">兜友咖啡软装</a></em>
										<span>保定</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase05.png" alt="湖南-冉时光茶餐厅软装">
										<em><a href="http://m.haianzhuangshi.com/product/362-cn.html" target="_self">小菊咖啡馆</a></em>
										<span>北京</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase07.png" alt="上海-花巢火锅店软装">
										<em><a href="http://m.haianzhuangshi.com/product/473-cn.html" target="_self">花巢火锅店软装</a></em>
										<span>上海</span>
									</li>
									<li class="swiper-slide">
										<img src="{$img_url}img/ruanzhuangcase08.png" alt="云南-啡影1890软装">
										<em><a href="http://m.haianzhuangshi.com/product/364-cn.html" target="_self">啡影1890软装</a></em>
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
							<li><img src="{$img_url}haian-core/customerlogo01.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo02.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo03.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo04.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo05.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo06.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo07.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo08.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo09.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo10.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo11.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo12.jpg" alt="北京海岸设计"></li>
							





						</ul>
							<!--一屏-->
						<ul class="customerul swiper-slide">
							<li><img src="{$img_url}haian-core/customerlogo13.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo14.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo15.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo16.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo17.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo18.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo19.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo01.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo02.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo03.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo04.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo05.jpg" alt="北京海岸设计"></li>
						</ul>
							<!--一屏-->
						<ul class="customerul swiper-slide">
							<li><img src="{$img_url}haian-core/customerlogo06.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo07.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo08.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo09.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo10.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo11.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo12.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo13.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo14.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo15.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo16.jpg" alt="北京海岸设计"></li>
							<li><img src="{$img_url}haian-core/customerlogo17.jpg" alt="北京海岸设计"></li>
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


<!--
EOT;
$i=0;
$metlist_array=methtml_getarray($lang_home_haianNews_id,'','','',3);//通过数组标签获取信息数组
foreach($metlist_array as $key=>$val){//使用PHP循环语句foreach来读取数组中的信息
$i++;
echo <<<EOT
-->
	
						<li>
							<img src="{$val['imgurl']}" alt="设计动态" />
							<em>{$val[title]}</em>
							<p>{$val['description']}</p>
							<a href="{$val[url]}">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
<!--
EOT;
}
echo <<<EOT
-->
					</ul>
					<ul class="swiper-slide">
<!--
EOT;
$i=0;
$metlist_array=methtml_getarray($lang_home_design_id,com,'','',3);//通过数组标签获取信息数组
foreach($metlist_array as $key=>$val2){//使用PHP循环语句foreach来读取数组中的信息
$i++;
echo <<<EOT
-->
	
						<li>
							<img src="{$val2['imgurl']}" alt="设计动态" />
							<em>{$val2[title]}</em>
							<p>{$val2['description']}</p>
							<a href="{$val2[url]}">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
<!--
EOT;
}
echo <<<EOT
-->
						<!--<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>湘见.淮念 品牌Vi设计</em>
							<p>logo主要以带有浓厚文化气息的建筑为设计主体，在设计上采用意象的设计手法，把建筑的一角，融入进图形中，简洁、精..</p>
							<a href="{$index_url}news/798-cn.html">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>楚江春茶楼设计</em>
							<p>郭准先生从本土之中来，将归本主义朴实的匠心精神，与江汉之滨的风物灵秀之气和瑰丽奇绝的浪漫文化生动结合，创造出一个..</p>
							<a href="{$index_url}news/792-cn.html">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>轻松宠宠物店设计</em>
							<p>轻松宠宠物店位于北京，设计师郭准先生打破一般宠物店的狭小、拥挤的风格，运用归本主义设计风格，搭配原木、绿植、玻璃..</p>
							<a href="{$index_url}news/795-cn.html">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>-->
					</ul>
					<ul class="swiper-slide">
<!--
EOT;
$i=0;
$metlist_array=methtml_getarray($lang_news_id,com,'','',3);//通过数组标签获取信息数组
foreach($metlist_array as $key=>$val3){//使用PHP循环语句foreach来读取数组中的信息
$i++;
echo <<<EOT
-->
	
						<li>
							<img src="{$val3['imgurl']}" alt="设计动态" />
							<em>{$val3[title]}</em>
							<p>{$val3['description']}</p>
							<a href="{$val3[url]}">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
<!--
EOT;
}
echo <<<EOT
-->
						<!--<li>
							<img src="{$img_url}img/dgnnamicimg01.jpg" alt="设计动态" />
							<em>"唯快不破"---2018海岸19周年主题年会</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2018年北京海岸19周年“唯快不破”主题年会缓缓..</p>
							<a href="{$index_url}news/694-cn.html">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$index_url}upload/201711/1510368384.png" alt="设计动态" />
							<em>武汉建筑学院学子参访团来北京海岸参观学习</em>
							<p>武汉建筑学院学子参访团来北京海岸参观学习初冬的阳光温暖而祥和，11月9日下午，武汉建筑学院的学子参访..</p>
							<a href="{$index_url}news/616-cn.html">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>
						<li>
							<img src="{$index_url}upload/201706/1497341077233482.png" alt="设计动态" />
							<em>“海岸之夜”---2017个人形象展示大赛</em>
							<p>春风中夹杂着希望的味道，舞台上演绎着青春的模样。北京海岸举办的2017个人形象展示大赛“海岸之夜”犹如清泉般泠泠..</p>
							<a href="{$index_url}news/127-cn.html">详情<img src="{$img_url}img/dgnnamicsanjiao.png"/></a>
						</li>-->
					</ul>
				</div>
			</div>
			<a class="findmoreclassblack matop60px" href="{$img_url}#">查看更多案例&nbsp;&nbsp;<i><img src="{$img_url}img/findmorecasei1.png" alt="查看更多海岸案例"></i></a>
		</div>
	</section>
	<!--导航块-->
	<section>
		<ul class="navlinkbox">
			<a href="{$index_url}product/product.php?lang=cn&class2=150" >
			<li><img src="{$img_url}img/jiudiansheji.png" alt="酒店设计" /><em>酒店设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=145" >
			<li><img src="{$img_url}img/kafeicanyin.png" alt="咖啡餐饮设计"/><em>咖啡餐饮设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=113" >
			<li><img src="{$img_url}img/tesexiaozhensheji.png" alt="特色小镇设计" /><em>特色小镇设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=114" >
			<li><img src="{$img_url}img/jizhuangxiangsheji.png" alt="集装箱设计" /><em>集装箱设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=146" >
			<li><img src="{$img_url}img/jingguanguihua.png" alt="景观规划" /><em>景观规划</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=147" >
			<li><img src="{$img_url}img/shangyekongjian.png" alt="商业空间" /><em>商业空间</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=119" >
			<li><img src="{$img_url}img/shangyezonghetiicon.png" alt="商业综合体" /><em>商业综合体</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=154" >
			<li><img src="{$img_url}img/minsusheji.png" alt="民宿设计" /><em>民宿设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=151" >
			<li><img src="{$img_url}img/tianyuanzongheti.png" alt="田园综合体设计" /><em>田园综合体设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=182" >
			<li><img src="{$img_url}img/ruanzhuangsheji.png" alt="软装设计" /><em>软装设计</em></li>
			</a>
			<a href="{$index_url}product/product.php?lang=cn&class2=164" >
			<li><img src="{$img_url}img/pinpaivi.png" alt="品牌VI设计" /><em>品牌VI设计</em></li>
			</a>
			<a href="{$index_url}product" >
			<li><span><img src="{$img_url}img/chakanmorejia.png" alt="查看更多" /></span>查看更多</li>
			</a>
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
    
  
        

<!--
EOT;
}
if($lang_Column1_ok == 0 && $lang_Column2_ok == 0 && $lang_Column3_ok == 0 && $lang_Column4_ok == 0 && $lang_Column4_ok == 0 && $lang_Column4_ok == 0 && $lang_Column7_ok == 0 && $lang_Column8_ok == 0 && $lang_Column9_ok == 0){$Column_ok = false ;}else{$Column_ok = true ;}
if($Column_ok){
echo <<<EOT
-->	 
  <section style="margin:5px 0 7px 0;clear: both;">
 
<!--
EOT;
echo <<<EOT
-->
         </section> 
<!--
EOT;
}
}
echo <<<EOT
-->
</div>
</div>
<!--
EOT;
require_once template('foot');
?>