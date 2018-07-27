<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
echo <<<EOT
-->
<!DOCTYPE html>
<html lang="en" style="font-size: 12px;">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
		<link rel="stylesheet" href="{$img_url}css/rz/common.css">
		<link rel="stylesheet" href="{$img_url}css/mform.css">

		<link rel="stylesheet" href="{$img_url}css/rz/soft-styles.css">
		<link rel="stylesheet" href="{$img_url}css/rz/swiper.min.css">
		<script src="{$img_url}js/ruanzhuang/jquery-1.11.0.min.js"></script>
		<script src="{$img_url}js/ruanzhuang/swiper.min.js"></script>
		<script src="{$img_url}js/ruanzhuang/publicRem.js"></script>
    <title>软装设计</title>
    
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
</head>
<body>
	<div class="softdesign-section">
		<div class="banner">
			<div class="content">
				<img class="title-logo" src="{$img_url}img/ruanzhuang/soft-title.png" alt="">
				<span class="phone">
					<img src="{$img_url}img/ruanzhuang/tell.png" alt="">
					<span class="tel">400-879-1110</span>
				</span>
				<span class="original">归本主义设计缔造者</span>
				<span class="year" style="font-size: .75rem;">19年设计行业领先品牌，300位设计团队精英</span>
			</div>
			<div class="sign">
				<a  href="#div1"><span class="order">立即预约</span></a>
			</div>
		</div>
		<!-- form表单 -->
		<div></div>
		<div class="soft-desgin">
			<div class="title">软装设计</div>
			<div class="content">
				<div class="item">
					<span class="tip">加强空间的美观度</span>
					<span class="discribe">在房屋装修中，软装占比70%，硬装占30%，设计需要把控整体风格色彩，专业配饰搭配才能打造出空间的和谐美。</span>
				</div>
				<div class="item">
					<span class="tip">优化空间的功能性</span>
					<span class="discribe">软装不仅局限于配饰摆放，也平衡空间功能性，根据客户生活方式设计卧室客厅衣帽间等九大空间，凸显功能性，使空房间充分利用。</span>
				</div>
				<div class="item">
					<span class="tip">节省装修配饰效率</span>
					<span class="discribe">每一产品均有多种款式、风格、颜色、质地等，“如何搭配怎么选”耗掉业主时间于经历，软装设计无需东奔西跑，省效率。</span>
				</div>
				<div class="item">
					<span class="tip">控制预算</span>
					<span class="discribe">软装设计根据业主预算范围搭配产品，为业主提供产品价格明细，且合作品牌价格均低于市场价，有利于资金管控。</span>
				</div>
			</div>
		</div>
		<div class="soft-service">
			<div class="title">海岸·软装服务领域</div>
			<div class="content">
				<div class="leftside">
					<a href="{$index_url}product/list-178-cn.html">
					<div class="contact">
						<img src="{$img_url}img/ruanzhuang/soft-serviec-icon5.png" alt="">
						<span class="area">办公/</span>
						<span class="discribe">商业空间软装设计</span>
					</div>
					</a>
				</div>
				<div class="rightside">
					<div class="row">
							
							<div class="contact">
							<a href="{$index_url}product/list-145-cn.html">
								<img src="{$img_url}img/ruanzhuang/soft-serviec-icon1.png" alt="">
								<span class="area">餐饮/</span>
								<span class="discribe">咖啡馆软装设计</span>
								</a>
							</div>
						
							<div class="contact">
							<a href="{$index_url}product/list-150-cn.html">
								<img src="{$img_url}img/ruanzhuang/soft-serviec-icon2.png" alt="">
								<span class="area">酒店/</span>
								<span class="discribe">会所软装设计</span>
									</a>
							</div>

					</div>
					<div class="row">
								
						<div class="contact">
						<a href="{$index_url}product/list-154-cn.html">
							<img src="{$img_url}img/ruanzhuang/soft-serviec-icon3.png" alt="">
							<span class="area">别墅/</span>
							<span class="discribe">公寓软装设计</span>
								</a>
						</div>
		
						<div class="contact">
						<a href="{$index_url}product/list-182-cn.html">
							<img src="{$img_url}img/ruanzhuang/soft-serviec-icon4.png" alt="">
							<span class="area">售楼处/</span>
							<span class="discribe">样板房软装设计</span>
								</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="soft-onestop">
			<div class="title">一站式全程服务</div>
			<div class="content">
				<div class="leftside">
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_1.png" alt="">
						<div class="discribe">
							<p class="english">Bookstore</p>
							<p class="english">Design</p>
							<p class="chinese">书店设计</p>
						</div>
					</div>
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_2.png" alt="">
						<div class="discribe">
								<p class="english">LIGHTING</p>
								<p class="chinese">照明设计</p>
						</div>
					</div>
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_3.png" alt="">
						<div class="discribe">
							<p class="english">IMAGE</p>
							<p class="english">WALL</p>
							<p class="chinese">形象墙设计</p>
						</div>
					</div>
				</div>
				<div class="midside">
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_4.png" alt="">
						<div class="discribe">
							<p class="english">SHELF</p>
							<p class="english">LAYOUT</p>
							<p class="chinese">布局设计</p>
						</div>
					</div>
					<div class="item">
						<!-- <img src="{$img_url}img/ruanzhuang/onestop-bg_9.jpg" alt=""> -->
						<div class="discribe">
							<p class="main-chinese">整体规划</p>
							<p class="main-english">OVERALL PLANNING</p>
						</div>
					</div>
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_5.png" alt="">
						<div class="discribe">
							<p class="english">SIGNAGE</p>
							<p class="english">DESIGN</p>
							<p class="chinese">招牌设计</p>
						</div>
					</div>
				</div>
				<div class="leftside">
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_6.jpg" alt="">
						<div class="discribe">
							<p class="english">SPACE</p>
							<p class="english">DESIGN</p>
							<p class="chinese">空间设计</p>
						</div>
					</div>
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_7.png" alt="">
						<div class="discribe">
								<p class="english">DISPLAY</p>
								<p class="english">AND BOOKS</p>
								<p class="chinese">书籍陈列</p>
						</div>
					</div>
					<div class="item">
						<img src="{$img_url}img/ruanzhuang/onestop-bg_8.png" alt="">
						<div class="discribe">
							<p class="english">LEISURE</p>
							<p class="english">SPACE</p>
							<p class="chinese">休闲空间设计</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="soft-know">
			<p class="title">了解海岸设计</p>
			<div class="attitude">
				<div class="content">
					<img src="{$img_url}img/ruanzhuang/soft-book.png" alt="">
					<div class="discribe">
						<p class="tip">我们的态度</p>
						<p class="txt">将每一个项目都做成精品，否定平凡的设计创作</p>
						<a href="#div1" class="order">立即预约</a>
					</div>
				</div>
			</div>
			<div class="module">
				<div class="item">
					<p class="tip">从案例开始</p>
					<p class="theme">十八年来，秉持匠人精神成就每一个商业艺术品</p>
					<a href="#div1" class="link">查看案例</a>
				</div>
				<div class="item">
					<p class="tip">从策划开始</p>
					<p class="theme">多元化的思维和卓越的创意</p>
					<a href="#div1" class="link">立即预约</a>
				</div>
				<div class="item">
					<p class="tip">从团队开始</p>
					<p class="theme">海岸成立于1999年，拥有精英团队设计师300余人</p>
					<a href="#div1" class="link">立即预约</a>
				</div>
			</div>
		</div>
		<div class="soft-appreciation">
			<div class="title">软装设计案例赏析</div>
			<div class="content">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="{$img_url}img/ruanzhuang/soft-hotpot-case.jpg" alt="">
							<a href="{$index_url}product/showproduct.php?id=442&lang=cn"><p class="discribe">花巢火锅店软装</p></a>
						</div>
						<div class="swiper-slide">
							<img src="{$img_url}img/ruanzhuang/soft-tea-case.jpg" alt="">
							<a href="{$index_url}product/showproduct.php?id=285&lang=cn"><p class="discribe">冉时光茶餐厅软装</p></a>
						</div>
						<div class="swiper-slide">
							<img src="{$img_url}img/ruanzhuang/soft-coffee-case.jpg" alt="">
							<a href="{$index_url}product/showproduct.php?id=359&lang=cn"><p class="discribe">北京漫咖啡软装</p></a>
						</div>
						<div class="swiper-slide">
							<img src="{$img_url}img/ruanzhuang/soft-lotus-case.jpg" alt="">
							<a href="{$index_url}product/showproduct.php?id=365&lang=cn"><p class="discribe">芙蓉壹号软装</p></a>
						</div>
						<div class="swiper-slide">
							<img src="{$img_url}img/ruanzhuang/soft-congratulations-case.jpg" alt="">
							<a href="{$index_url}product/showproduct.php?id=475&lang=cn"><p class="discribe">恭喜里软装</p></a>
						</div>
					</div>
					<!-- <div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div> -->
					<div class="control">
					  <span class="prev">上一个案例</span>
					  <a href="#div1" class="order">立即预约</a>
						
						<span class="next">下一个案例</span>
					</div>
				</div>
			</div>
		</div>
		<div class="soft-trust">
			<div class="title">选择海岸就是选择信任</div>
			<div class="content">
				<div class="row">
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case01.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case02.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case03.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case04.jpg" alt=""></div>
				</div>
				<div class="row">
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case05.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case06.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case07.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case08.jpg" alt=""></div>
				</div>
				<div class="row">
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case09.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case10.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case11.jpg" alt=""></div>
					<div class="case"><img src="{$img_url}img/ruanzhuang/soft-case12.jpg" alt=""></div>
				</div>
			</div>
		</div>
		<div class="soft-case">
			<div class="title">软装设计案例赏析</div>
			<div class="content">
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case1.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=358&lang=cn">西十二街软装</a>
						<a href="">北京</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case2.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=364&lang=cn">啡影1890软装</a>
						<a href="">云南</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case3.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=357&lang=cn">良子健身软装</a>
						<a href="">北京</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case4.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=361&lang=cn">兜友咖啡软装</a>
						<a href="">保定</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case5.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=363&lang=cn">阳光翡丽湾售楼处</a>
						<a href="">杭州</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case6.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=362&lang=cn">小菊咖啡软装</a>
						<a href="">北京</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case7.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=360&lang=cn">归隐酒店客房软装</a>
						<a href="">山东</a>
					</span>
				</div>
				<div class="item">
					<img src="{$img_url}img/ruanzhuang/soft-design-case8.jpg" alt="">
					<span>
						<a href="{$index_url}product/showproduct.php?id=442&lang=cn">花巢火锅店软装</a>
						<a href="">上海</a>
					</span>
				</div>
			</div>
		</div>
	<!-- form表单 -->
	<div id="div1"></div>
	<div id="onlineBooking2">
    <div class="onlineTitle">在线预约设计</div>
    <div id="inputGroup2">
<!--
EOT;
require_once template('feed/feedback_bg'); 
$metfeedback6=metlabel_feedback10(224);
echo <<<EOT
-->  
    {$metfeedback6} 
        </div>
    </div>
		<!-- 底部 -->
		    <div id="footer">
        <div id="official">
            <div class="lf wechatBox">
                <img src="{$img_url}img/bg/weixin.png" alt="" class="wechat">
                <p class="wechatPromt">官方微信</p>
            </div>
            <div class="lf tweetBox">
                <img src="{$img_url}img/bg/weibo.png" alt="" class="tweet">
                <p class="tweetPromt">官方微博</p>
            </div>

        </div>
        <div class="phone">
            <div>
                <img src="{$img_url}img/bg/dianhua.png" alt="">
            </div>
            <p>全国免费咨询热线：
                <span>400-879-1110</span>
            </p>
        </div>
        <div class="ploriginal">
            <p>CopRright © 1999-2018 | All Rrights Reserved.</p>
            <p>All Rrights Reserved. 京ICP备13049424号</p>
        </div>
    </div>
	<script>
		var swiper = new Swiper('.swiper-container', {
			navigation: {
				nextEl: '.next',
				prevEl: '.prev',
			},
			autoplay: {
			  reverseDirection: true,
			  delay: 1500,
			  disableOnInteraction: false,
			  reverseDirection: false,
			},
			loop : true,
		});
	</script>
</body>
</html>




<!--
EOT;
?>