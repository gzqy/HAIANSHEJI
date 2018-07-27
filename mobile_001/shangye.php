<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
echo <<<EOT
-->
<html lang="en" style="font-size: 12px;">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
		<link rel="stylesheet" href="{$img_url}css/comform.css">
		<link rel="stylesheet" href="{$img_url}css/syz/styles.css">
		<link rel="stylesheet" href="{$img_url}css/syz/swiper.min.css">
		<link rel="stylesheet" href="{$img_url}css/syz/common.css">
		<script src="{$img_url}js/syz/jquery-1.11.0.min.js"></script>
		<script src="{$img_url}js/syz/swiper.min.js"></script>
		<script src="{$img_url}js/syz/publicRem.js"></script>
		<script>
			$(function(){
				$('.item_oval').on('click', (event) => {
						$(event.currentTarget).each((index, element) => {
							let _this = element;
							console.log(_this);
							$(_this).children('.out').addClass('in').removeClass('out').siblings('.list').addClass('out').removeClass('in');
						});
				});
			});		
		</script>
	
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		  <script language="JavaScript" type="text/javascript"> 


		function changeBtnable(){
		    $("#btn").removeAttr("disabled");
		}
		function changeBtndisable(){
		    $("#btn").attr("disabled","true");
		}
		function checkInput(){
		    var text = $(".para242").val();
		 	 var tex = $(".para243").val();
		  　　var r = /^\+?[1-9][0-9]*$/;　　//判断是否为正整数 
		    if(text.length !== 11 ||  r.test(txt) == false){
		    	
		    	
		    	changeBtndisable();
		    	
		    }
		}	
	
	 </script> 
	<script type="text/javascript">
	


	$(function(){
		
		$(".para242").blur(function(e){
			
		
			var txt =$(this).val();//当前值

			

			if(txt==null||txt.length <10)//判断是否为空或输入长度小于6个字符
			{
				
				$(this).attr('placeholder','请您输入正确的手机号');
				
			  
			  
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para242");
			$(this).removeAttr("style")
		
				}
	         });


			$(".para243").blur(function(e){
		
		
			var txt =$(this).val();//当前值
			　var r = /^\d+.*?/;　　//判断是否为正整数 
				
			if(txt==null || r.test(txt) == false )//判断是否为空或输入长度小于6个字符
			{
				
				$(this).attr('placeholder','请您输入正确的面积');
			
			   
			    var attr = document.getElementsByClassName("para243");
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para243");
				console.log(attr);
			
				$(this).removeAttr("style")
				}
	         });

		       $(".para252").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请您输入正确的数字');
						    var attr = document.getElementsByClassName("para252");
							attr.attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
						}else{
							var attr = document.getElementsByClassName("para252");
							 $(this).removeAttr("style")
							}
		         });

		      $(".para241").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null || txt.length <2 )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请您输入您的名字');
						    var attr = document.getElementsByClassName("para241");
							$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
						}else{
							var attr = document.getElementsByClassName("para241");
							$(this).removeAttr("style")
							}
		         });
			 
		
		});
	</script>
    <title>商场综合体</title>
    {$lang_foot_cnzz}
	</head>
<body>
	<div class="marketplace-section">
		<div class="cmprehensive_banner">
			<div class="content">
				<p class="top_bar"></p>
				<img  class="en" src="{$img_url}img/syz/comprehensive_ban_en.png" alt="">
				<img  class="logo" src="{$img_url}img/syz/comprehensive_ban_logo.png" alt="">
				<p class="brand">19年行业领先品牌，300位设计团队精英</p>
				<p class="bot_bar"></p>
				<p class="tel">全国免费热线：400-879-1110</p>
				<a href="#div1" class="order">立即预约</a>
			</div>
		</div>
		<!-- form表单 -->
		   
     <div id="div1"></div> 
    	<div class="excellent_case">
     	
        <div class="titlef">
          在线预约设计
        
        
      </div>
        <!--免费获取报价-->

        <div id="onlineBooking">
            <div id="inputGroup">
<!--
EOT;
require_once template('feed/feedback_wq'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}  
                    </div>
  <!-- form表单 -->   



		<div class="synthesis-design-service">
			<div class="title">
				<span class="item">商业综合体设计服务领域</span>
			</div>
			<p class="describe">还原商业空间的本质体现其独有的风格、个性、及商业价值
			</p>
			<div class="colum">
				<span class="item">
					<img class="num" src="{$img_url}img/syz/market-num1.png" alt="">
					<span class="tip">商业综合体设计</span>
				</span>
				<span class="item">
					<img class="num" src="{$img_url}img/syz/market-num2.png" alt="">
					<span class="tip">城市副中心</span>
        </span>
        <span class="item">
          <img class="num" src="{$img_url}img/syz/market-num3.png" alt="">
          <span class="tip">交通枢纽</span>
        </span>
        <span class="item">
          <img class="num" src="{$img_url}img/syz/market-num4.png" alt="">
          <span class="tip">CBD</span>
        </span>
				</div>
		</div>
		<div class="market_design_content">
			<div class="title">
				<span class="item">商场设计内容</span>
			</div>
			<p class="describe">从整体策略布局到细节打磨，从设计理念到施工落地
					理性与灵性交融，释放商业无限可能
			</p>
			<div class="banner_bg ">
				<div class="banner_slide ">
					<div class="swiper-container design-banner">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img class="pic" src="{$img_url}img/syz/market_content_planing1.png" alt="">
								<p class="tip">整体规划设计</p>
								<p class="describe">以专业经验对商业用地进行规划，为发展商团队提供合理的商业 布局方案，为后续招商、设计工作和项目成功运营奠定基础</p>
								<div class="item">
									<span class="prev"><img src="{$img_url}img/syz/market_content_left.png" alt=""></span>
									<span class="content"><img src="{$img_url}img/syz/market_content_planing2.png" alt=""></span>
									<span class="next"><img src="{$img_url}img/syz/market_content_right.png" alt=""></span>
								</div>
							</div>
							<div class="swiper-slide">
								<img class="pic" src="{$img_url}img/syz/market_content_bulid1.png" alt="">
								<p class="tip">建筑外观设计</p>
								<p class="describe">通过综合体各部分的合理规划布局和深入的建筑设计，从城市尺度塑造商业节奏和整体形象</p>
								<div class="item">
									<span class="prev"><img src="{$img_url}img/syz/market_content_left.png" alt=""></span>
									<span class="content"><img src="{$img_url}img/syz/market_content_bulid2.png" alt=""></span>
									<span class="next"><img src="{$img_url}img/syz/market_content_right.png" alt=""></span>
								</div>
							</div>
							<div class="swiper-slide">
								<img class="pic" src="{$img_url}img/syz/market_content_space1.png" alt="">
								<p class="tip">商业空间设计</p>
								<p class="describe">准确的商业环境调研和科学分析、掌握影响购物中心发展的静态和动态变量，是做好成功商业规划的前提</p>
								<div class="item">
									<span class="prev"><img src="{$img_url}img/syz/market_content_left.png" alt=""></span>
									<span class="content"><img src="{$img_url}img/syz/market_content_space2.png" alt=""></span>
									<span class="next"><img src="{$img_url}img/syz/market_content_right.png" alt=""></span>
								</div>
							</div>
							<div class="swiper-slide">
								<img class="pic" src="{$img_url}img/syz/market_content_light1.png" alt="">
								<p class="tip">灯光设计</p>
								<p class="describe">用灯光营造及提升商业氛围，通过灯光对建筑、室内空间、景观等进行强化或再塑，加强载体表现力，树立现代商业新标杆</p>
								<div class="item">
									<span class="prev"><img src="{$img_url}img/syz/market_content_left.png" alt=""></span>
									<span class="content"><img src="{$img_url}img/syz/market_content_light2.png" alt=""></span>
									<span class="next"><img src="{$img_url}img/syz/market_content_right.png" alt=""></span>
								</div>
							</div>
							<div class="swiper-slide">
								<img class="pic" src="{$img_url}img/syz/market_content_view1.png" alt="">
								<p class="tip">导视系统设计</p>
								<p class="describe">借助由形象LOGO、导向标识及广告系统组成的视觉设计，紧随信息科技的发展，率先进入多媒体信息数据交互的领域</p>
								<div class="item">
									<span class="prev"><img src="{$img_url}img/syz/market_content_left.png" alt=""></span>
									<span class="content"><img src="{$img_url}img/syz/market_content_view2.png" alt=""></span>
									<span class="next"><img src="{$img_url}img/syz/market_content_right.png" alt=""></span>
								</div>
							</div>
						</div>
						<div class=" nextbtn"></div>
						<div class="prevbtn"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="market_position">
			<div class="upper">
				<p class="title">商场形象定位</p>
				<div class="content">
					<p>商场的形象定位，实际上是商场经营企业的形象定位</p>
					<p>它随着商场的经营运作而持续存在并发挥作用，</p>
					<p>通过对商业中心品牌的定位界定商业文化内涵，建立超前的品牌形象</p>
					<p>引领购物时尚、反映地域特色、精选服务对象、创新组合业态、综合形象鲜明且易推广传播等</p>
					<p>从战略高度上系统设计和推出专业化商场规划设计/商业广场设计是完全必要的选择</p>
				</div>
			</div>
			<div class="lower">
				<div class="item">
					<img src="{$img_url}img/syz/market_position_icon1.png" alt="">
					<span>商业综合体策划</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/syz/market_position_icon2.png" alt="">
					<span>商业体业态定位</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/syz/market_position_icon3.png" alt="">
					<span>建筑、景观规划设计</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/syz/market_position_icon4.png" alt="">
					<span>室内空间设计</span>
				</div>
			</div>
		</div>
	  <div class="synthesis-principle">
			<div class="title">
				<span class="item">商场设计规划原则</span>
			</div>
			<p class="describe">基于人文、艺术、商业等融合风格呈现建造，链接每一环独有的命脉</p>
			<div class="content">
        <p>地下商城：力求通过高差、出入口、局部广场下沉营造负1层商业门面的价值最大化。</p>
        <p>步行街系统沿景观轴线东西向依次布局，传统商业街区的提升和升华，有机融合到综合体功能的各个细节中。</p>
        <p>核心主力店，应注意与项目总体建筑风格的统一，店内考虑水平与垂直动线有机结合，达成商业动线规划的完整。</p>
        <p>住宅、公寓。所有住宅楼的底层（即建筑的第5层）架空为花园。</p>
        <p>停车场所主要设置在两住宅裙楼下的负2层，设不同出入口。设备用房放于负2层，商业储藏室布置于负1层。</p>
        <p>项目环四周设计步行街道，以解决部分交通组织需要，并同时最大可能制造临街商铺。</p>
        <p>景观设计中，不仅注重文化标志，更应一人文本，注重盲道、残疾人通道的无障碍设计，人行和交通道路、社区服务设施、街区照明设施、步行街环境等等。</p>
			</div>
		</div>
		<div class="market_system">
			<div class="system_bg">
				<p class="title">海岸商业空间策略设计系统</p>
				<div class="content">
					<p>商业，可以是感性与天马行空的想象</p>
					<p>商业，可以是理性尺度与态度的宣扬商业</p>
					<p>商业，正因个性释放而拥有无限可能</p>
				</div>
			</div>
			<div class="system_slide">
				<div class="swiper-container system_banner">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img  class="system_logo" src="{$img_url}img/syz/grinding_value.png" alt="">
								<div class="describe">
									<p class="caption">打磨价值</p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>领先施工工艺工法</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>严谨科学施工管理</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>设计效果完美呈现</span></p>
								</div>
							</div>
							<div class="swiper-slide">
								<img  class="system_logo" src="{$img_url}img/syz/construction_building.png" alt="">
								<div class="describe">
									<p class="caption">建构价值</p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>系统化整合设计</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>艺术化视觉张力</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>情感化个性体验</span></p>
								</div>
							</div>
							<div class="swiper-slide">
								<img  class="system_logo" src="{$img_url}img/syz/finding_value.png" alt="">
								<div class="describe">
									<p class="caption">发现价值</p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>消费环境洞察</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>竞争环境分析</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>商业趋势观察</span></p>
									<p><img src="{$img_url}img/syz/market_mark.png" alt=""><span>差异化价值定位</span></p>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
			</div>
		</div>
		<div class="market-case">
				<div class="title">
					<span class="item">海岸商场设计案例赏析</span>
				</div>
				<p class="describe">九一律为设计指针，对每个项目进行原创设计
						全国免费咨询热线：400-879-1110
				</p>
				<div class="content">
					<div class="colum">
<!--
EOT;
$desc = array(
  "6000㎡",
  "6000㎡",
  "30000㎡",
  "6000㎡",
  "14285㎡",
  "12000㎡"
 
);
$city = array(
  "苏州",
  "兰州",
  "鹤壁",
  "苏州",
  "淮安",
  "云南"
);
if($lang_shang_ok){
foreach(methtml_getarray($lang_shang,'',hits,'','6','','','','16') as $key=>$val){
echo <<<EOT
-->
						<span class="item">
							<img src="{$val[imgurl]}" alt="">
							<span class="describe">
								<div class="vessel">
									<p class="tip">{$val[title]}</p>
									<p class="address">
										<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt=""> 地址 : {$city[$key]}<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">设计面积 :{$desc[$key]}
									</p>
									<p class="link"><a href="{$val[url]}">展示详情 | <img class="arrow" src="{$img_url}img/syz/market_case_arrow.png" alt=""> </a></p>
								</div>
							</span>
						</span>

<!--
EOT;
}
}
echo <<<EOT
-->
						<!--<span class="item">
							<img src="{$img_url}img/syz/market-case2.jpg" alt="">
							<span class="describe">
								<div class="vessel">
									<p class="tip">蜗牛生活体验馆</p>
									<p class="address">
										<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">地址 : 兰州<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">设计面积 : 6000㎡
									</p>
									<p class="link"><a href="">展示详情 | <img class="arrow" src="{$img_url}img/syz/market_case_arrow.png" alt=""> </a></p>
								</div>
							</span>
						</span>
						<span class="item">
							<img src="{$img_url}img/syz/market-case3.jpg" alt="">
							<span class="describe">
								<div class="vessel">
									<p class="tip">南瓜公社商业体</p>
									<p class="address">
										<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">地址 : 鹤壁<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">设计面积 : 30000㎡
									</p>
									<p class="link"><a href="">展示详情 | <img class="arrow" src="{$img_url}img/syz/market_case_arrow.png" alt=""> </a></p>
								</div>
							</span>
						</span>
						<span class="item">
							<img src="{$img_url}img/syz/market-case4.jpg" alt="">
							<span class="describe">
								<div class="vessel">
									<p class="tip">SE商业综合体</p>
									<p class="address">
										<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">地址 : 苏州<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">设计面积 : 6000㎡
									</p>
									<p class="link"><a href="">展示详情 | <img class="arrow" src="{$img_url}img/syz/market_case_arrow.png" alt=""> </a></p>
								</div>
							</span>
						</span>
						<span class="item">
							<img src="{$img_url}img/syz/market-case5.jpg" alt="">
							<span class="describe">
								<div class="vessel">
									<p class="tip">淮安商业综合体</p>
									<p class="address">
										<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">地址 : 淮安<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">设计面积 : 14285㎡
									</p>
									<p class="link"><a href="">展示详情 | <img class="arrow" src="{$img_url}img/syz/market_case_arrow.png" alt=""> </a></p>
								</div>
							</span>
						</span>
						<span class="item">
							<img src="{$img_url}img/syz/market-case6.jpg" alt="">
							<span class="describe">
								<div class="vessel">
									<p class="tip">云创谷商业综合体</p>
									<p class="address">
										<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">地址 : 黑龙江<img class="icon_li" src="{$img_url}img/syz/market_case_li.png" alt="">设计面积 : 12000㎡
									</p>
									<p class="link"><a href="">展示详情 | <img class="arrow" src="{$img_url}img/syz/market_case_arrow.png" alt=""> </a></p>
								</div>
							</span>
						</span>-->
					</div>
				</div>
		</div>
		<div class="market-quality">
			<p class="title">品质源于专业</p>
			<p class="describe">自信源于我们对产品质量的一贯苛求，我们四大保障的保障
					升华后的空间让您更为满意</p>
			<div class="content">
				<div class="item_oval">
					<img class="list icon" src="{$img_url}img/syz/market_profession_team.png" alt="">
					<span class="tip">优秀团队</span>
					<div class="list suggest out">
						<p class="inside">成立于1999年资深行业经验</p>
					</div>
				</div>
				<div class="item_oval">
					<img class="list icon" src="{$img_url}img/syz/market_profession_design.png" alt="">
					<span class="tip">实力设计</span>
					<div class="list suggest out">
						<p class="inside">行业大咖设计拒绝伪资深</p>
					</div>
				</div>
				<div class="item_oval">
					<img class="list icon" src="{$img_url}img/syz/market_profession_orginal.png" alt="">
					<span class="tip">保证原创</span>
					<div class="list suggest out">
						<p class="inside">以归本主义风格100%原创</p>
					</div>
				</div>
				<div class="item_oval">
					<img class="list icon" src="{$img_url}img/syz/market_profession_brand.png" alt="">
					<span class="tip">品牌定制</span>
					<div class="list suggest out">
						<p class="inside">高端私人订制尽显品牌个性</p>
					</div>
				</div>
				<div class="item_oval">
					<img class="list icon" src="{$img_url}img/syz/market_profession_gold.png" alt="">
					<span class="tip">金牌服务</span>
					<div class="list suggest out">
						<p class="inside">多年完美良心服务满意为止</p>
					</div>
				</div>
			</div>
		</div>
		<div class="market-advantage">
			<div class="title">
				<span class="item">我们的优势</span>
			</div>
			<p class="describe">九一律为设计指针，对每个项目进行原创设计
					全国免费咨询热线：400-879-1110
			</p>
			<div class="container">
					<div class="content">
						<img src="{$img_url}img/syz/market-planing.png" alt="">
						<p class="title">商场规划设计</p>
						<p class="describe">海岸无论在材料选配、施工环节tt，都注重节能环保新材料、新技术的应用。是国内少数能将采光设计、节能设计、生态感应等方面的专业团队。
						</p>
					</div>
					<div class="content">
						<img src="{$img_url}img/syz/market-service.png" alt="">
						<p class="title">一站式服务体系</p>
						<p class="describe">提供一站式设计服务， 包括前期可行性研究、初期预算、 方案设计，效果图设计与施工工艺、整体智能方案。
						</p>
					</div>
					<div class="content">
						<img src="{$img_url}img/syz/market-construction-mechanism .png" alt="">
						<p class="title">专业的施工机制</p>
						<p class="describe">海岸无论在材料选配、施工环节，都注重节能环保新材料、新技术的应用。是国内少数能将采光设计、节能设计、生态感应等方面的专业团队。
						</p>
					</div>
			</div>
		</div>
		<div class="market-know">
			<div class="shade">
				<div class="shade-content">
					<div class="swiper-container know-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<p class="title">郭准先生</p>
								<p class="describe">郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸，为了追寻自己的设计理念，他在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角落。从建筑的角度感受不同的人类文化，特别是在欧美、日韩，他虔诚的寻访了建筑巨匠们的足迹，深入大师们的实际作品内部，感悟其中奥妙所在，探寻大师们伟大思想的形成历程。在消化历代建筑大师的精华，思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。</p>
							</div>
							<div class="swiper-slide">
								<p class="title">关于海岸</p>
								<p class="describe">有一面旗帜，有一个核心人物，有一彪整齐的人马，用爱和智慧在阳光照耀的地方播种荣光，这就是海岸——斗志昂扬的钢铁军团。海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。
										他们是这样的一群人——有梦想又实干，敢于冒险又充满创意，洞察世事又见解独到，酷爱竞争又心怀慈悲，是这样的一群人，肩负着归本主义远播四方的使命，担当着海岸的全部荣光。</p>
							</div>
							<div class="swiper-slide">
								<p class="title">归本主义</p>
								<p class="describe">归本主义作品植根于世界性的各种风格流派中并具有文化品质，凝聚了东西方双重文化的精神。以全球建筑时代的视点俯视世界建筑潮流，在多元浩繁的建筑风格间隙中建立和发展独立体系，以尺度数码简练精致地表现意匠、尊重人性、传达情感、形成意境，简洁洗练的构成、轻快细腻的质感、温馨雅致的格调、清风明月的纯静，这是归本主义作品的品质。归本主义作品语言的结构问题不在于具体的风格，每个作品均是在特定的社会条件下因特殊的用途而建立。</p>
							</div>
						</div>
					</div>
					<p class="know-haian"><a href="{$index_url}about/112-cn.html">了解海岸</a></p>
				</div>
			</div>
		</div>
		<div class="market_appreciation">
			<div class="title">
				<span class="item">海岸商场设计案例赏析</span>
			</div>
			<p class="describe">九一律为设计指针，对每个项目进行原创设计
					全国免费咨询热线：400-879-1110
			</p>
			<div class="slide">
				<div class="swiper-container appreciation_banner">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=55&lang=cn"><img src="{$img_url}img/syz/market_taiyuan.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=273&lang=cn"><img src="{$img_url}img/syz/market_anhuai.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=279&lang=cn"><img src="{$img_url}img/syz/market_hlj.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=55&lang=cn"><img src="{$img_url}img/syz/market_lanzhou.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=233&lang=cn"><img src="{$img_url}img/syz/market_sjz.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=250&lang=cn"><img src="{$img_url}img/syz/market_suzhou.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=212&lang=cn"><img src="{$img_url}img/syz/market_hebi.jpg" alt=""></a></div>
							<div class="swiper-slide"><a  href="{$index_url}product/showproduct.php?id=345&lang=cn"><img src="{$img_url}img/syz/market_tangs.jpg" alt=""></a></div>
						</div>
						<div class="next"></div>
						<div class="prev"></div>
				</div>
			</div>
		</div>	
	<!-- form表单 -->  
     	<div id="div1"></div> 
    	<div class="excellent_case"> 	
        <div class="titlef">
          在线预约设计
      </div>
        <!--免费获取报价-->

        <div id="onlineBooking">
            <div id="inputGroup">
<!--
EOT;
require_once template('feed/feedback_wq'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}  
                    </div>
    <!-- form表单 --> 
    <!-- 底部 -->
<!--
EOT;
require_once template('foot_com');
echo <<<EOT
-->

	<!-- 底部 -->
	</div>
	<script>
		var swiper1 = new Swiper('.know-swiper', {
			// autoplay: {
			// 	reverseDirection: true,
			// 	delay: 1400,
			// 	disableOnInteraction: false,
			// 	reverseDirection: false,
			// },
    	loop : true,
		});
		var swiper2 = new Swiper('.appreciation_banner', {
			navigation: {
				nextEl: '.prev',
				prevEl: '.next',
			},
			// autoplay: {
			// 	reverseDirection: true,
			// 	delay: 1400,
			// 	disableOnInteraction: false,
			// 	reverseDirection: false,
			// },
    	loop : true,
		});
		var swiper3 = new Swiper('.design-banner', {
			navigation: {
				nextEl: '.next',
				prevEl: '.prev',
			},
			// autoplay: {
			// 	reverseDirection: true,
			// 	delay: 1400,
			// 	disableOnInteraction: false,
			// 	reverseDirection: false,
			// },
    	loop : true,
  	});
		var swiper4 = new Swiper('.system_banner', {
      pagination: {
        el: '.swiper-pagination',
      },
			// autoplay: {
			// 	reverseDirection: true,
			// 	delay: 1400,
			// 	disableOnInteraction: false,
			// 	reverseDirection: false,
			// },
			loop : true,
    });
	</script>
</body>
</html>
<!--
EOT;
?>