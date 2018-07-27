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
		<link rel="stylesheet" href="{$img_url}css/wl/common.css">
		<link rel="stylesheet" href="{$img_url}css/comform.css">
		<link rel="stylesheet" href="{$img_url}css/cfoot.css">
		<link rel="stylesheet" href="{$img_url}css/wl/styles.css">
		<link rel="stylesheet" href="{$img_url}css/wl/swiper.min.css">
		<script src="{$img_url}js/wl/jquery-1.11.0.min.js"></script>
		<script src="{$img_url}js/wl/swiper.min.js"></script>
		<script src="{$img_url}js/wl/publicRem.js"></script>
		<title>文化旅游</title>
		<script>
			$(function(){
				$('.list_content .list:gt(0)').hide();
				$('.tab_title .item .polygon:gt(0)').hide();
				$('.tab_title .item').unbind('click').on('click', function(){
					let _index = $(this).index();
					$('.tab_title .item .polygon').eq(_index).show().parent().siblings().children('.polygon').hide();
					$('.list_content .list').eq(_index).show().siblings().hide();
				});
			});
		</script>
</head>
<body>
  <div class="textbrigade_section">
    <div class="banner">
      <div class="content">
				<div class="logo">
					<img class="title" src="{$img_url}img/wl/textbrigade_logo.png" alt="">
					<p class="planing">产业规划</p>
				</div>
				<p class="kind">
					<span class="item">休闲农业规划</span>
					<span class="item">乡村旅游规划</span>
					<span class="item">农业地产规划</span>
					<span class="item">旅游度假规划</span>
					<span class="item">区域综合开发</span>
				</p>
				<div class="suggest">
					<div class="case"><span class="cutoff"></span><img class="txt" src="{$img_url}img/wl/textbrigade_text1.png" alt=""></div>
					<div class="case"><img class="txt" src="{$img_url}img/wl/textbrigade_text2.png" alt=""><span class="cutoff"></span></div>
					<div class="case"><span class="cutoff"></span><img class="txt" src="{$img_url}img/wl/textbrigade_text3.png" alt=""></div>
					<div class="case"><img class="txt" src="{$img_url}img/wl/textbrigade_text4.png" alt=""><span class="cutoff"></span></div>
				</div>
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
		<div class="textbrigade_prospect">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_1.png" alt="">
					<span class="tip">文化旅游产业的前景</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="item"><img src="{$img_url}img/wl/tb_prospect_case1.jpg" alt=""></div>
				<div class="item"><img src="{$img_url}img/wl/tb_prospect_case2.jpg" alt=""></div>
				<div class="item"><img src="{$img_url}img/wl/tb_prospect_case3.jpg" alt=""></div>
				<div class="item"><p class="describe">“一带一路”是十八大以来提出的国家后续发展的宏大构想，随着“一带一路”国家级顶层规划的提出，参与的交流合作也明显增多，社会经济效益不断凸显。互联互通，旅游先通，旅游成为“一带一路”沿线各国民心相通的纽带和桥梁。

					</p></div>
			</div>
		</div>
		<div class="textbrigade_policy">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_2.png" alt="">
					<span class="tip">功能区域构成</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="item"><p>发展阶段</p></div>
				<div class="item"><p>市场规模</p></div>
				<div class="item"><p>市场空间</p></div>
				<div class="item"><p>区域分布</p></div>
				<div class="item"><p>行业发展趋势</p></div>
			</div>
			<div class="caption">
				<div class="content">
          <img class="grade" src="{$img_url}img/wl/gdlinetit_3.png" alt="">
					<span class="tip trend_tip">文旅发展趋势</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="trend">
				<div class="tab_title">
					<div class="item"><p>文旅全球化</p><em class="polygon"></em></div>
					<div class="item"><p>文旅区域化</p><em class="polygon"></em></div>
					<div class="item"><p>文旅全球化</p><em class="polygon"></em></div>
				</div>
				<div class="list_content">
					<div class="list">
						以市场技术到自主创新，建设科技强国，从产品、科技到文化等。内容业态：生活方式的国际化，文旅内容的国际化。全球链接：全球化的IP和IP的国际化，如东方好莱坞等。文旅成为国际交往和文化复兴的重要载体，如文化资源开发等
					</div>
					<div class="list">
						<p>从资源开发到文旅项目的区域化扩散，强调功能和体验的开发</p>
						<p>区域旅游格局的变化：旅游集散地－旅游目的地－旅游飞地</p>
						<p>旅游目的地的文旅产品打造：功能、文化、科技、情感体验四位一体</p>
					</div>
					<div class="list">
						从文旅项目开发到文旅产业化运营：文旅服务商是资源组织者入口，文旅地产商建载体，文旅运营商做内容，文旅关联产业包括规划设计、旅游金融、衍生品开发等文旅+产业的三个效应：文旅产品开发、文旅衍生产品开发以及文旅营造环境带来的产业效应文旅+产业的和N个领域：现代农业、健康产业、体育产业、文化创意、会展商贸、科教产业、数字创意、通航产业、经典产业......
					</div>
				</div>
			</div>
			<div class="develope"></div>
		</div>
		<div class="system_scheme">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_4.png" alt="">
					<span class="tip">文旅项目系统构建方案</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="item">
					<p class="num">1</p>
					<p class="tip">要素整理</p>
					<p class="brief">文化要素对接旅游产品；旅游产品融入文化要素。</p>
				</div>
				<div class="item">
					<p class="num">2</p>
					<p class="tip">价值提升</p>
					<p class="brief">通过文化和旅游两大产业的融合发展，提升两者价值功能。</p>
				</div>
				<div class="item">
					<p class="num">3</p>
					<p class="tip">横向拓展</p>
					<p class="brief">向IT方向拓展开发新的互动及手工制造业方向脱产旅游商品。</p>
				</div>
				<div class="item">
					<p class="num">4</p>
					<p class="tip">纵向延伸</p>
					<p class="brief">在文化创意、文艺表演等形式衍生新市场，如动漫的多元衍生品。</p>
				</div>
			</div>
		</div>
		<div class="common_type">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_5.png" alt="">
					<span class="tip">文旅常见类型</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num1.png" alt="">
					<span class="tip">故居类旅游</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num2.png" alt="">
					<span class="tip">文化商业街区</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num3.png" alt="">
					<span class="tip">遗址类旅游地</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num4.png" alt="">
					<span class="tip">文化主题公园</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num5.png" alt="">
					<span class="tip">古城镇旅游地</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num6.png" alt="">
					<span class="tip">文化旅游综合体</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num7.png" alt="">
					<span class="tip">民俗文化旅游地</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num8.png" alt="">
					<span class="tip">文化创意产业园区</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num9.png" alt="">
					<span class="tip">宗教文化旅游地</span>
				</div>
				<div class="item">
					<img class="num" src="{$img_url}img/wl/tb_type_num10.png" alt="">
					<span class="tip">文化旅游新区</span>
				</div>
			</div>
		</div>
		<div class="service_case">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_6.png" alt="">
					<span class="tip">海岸服务案例</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="case">
					<div class="item">
            <div class="pic"><a href=""><img src="{$img_url}img/wl/tb_service_case1.jpg" alt=""></a></div> 
            <div class="details">
              <p class="title">六度别院设计</p>
              <p class="suggest">在六度别院，有原始质朴材料和细心精致的设计，逃离都市喧嚣，感受自然带来的轻松与惬意，郭准先生想用这种低调的建筑表现方式，把自然与家结合起来。</p>
              <div class="address">
                <p class="area">云南</p>
                <a href="" class="order">立即预约</a>
              </div>
            </div>
					</div>
				</div>
				<div class="case">
					<div class="item">
						<div class="pic"><a href=""><img src="{$img_url}img/wl/tb_service_case2.jpg" alt=""></a></div> 
						<div class="details">
							<p class="title">青绿元生态小镇设计</p>
							<p class="suggest">依托塔尔寺、背靠青海湖的地理特，形成了文化旅游交汇处，独特的地理位置，依山望水的清幽环境，犹如明珠般点缀在山水间，生产、生活、生态的自然景观，宛如画卷在眼前。</p>
							<div class="address">
								<p class="area">青海</p>
								<a href="" class="order">立即预约</a>
							</div>
						</div>
					</div>
				</div>
				<div class="case">
					<div class="item">
						<div class="pic"><a href=""><img src="{$img_url}img/wl/tb_service_case3.jpg" alt=""></a></div> 
						<div class="details">
							<p class="title">隐逸水镇设计</p>
							<p class="suggest">在这里呼吸那不曾沾染尘埃的空气，体验那如诗如画的景致，桃花源般的隐逸水镇，桃花源般的世外生活，愿你我都能拥有一处世外桃源，亲手种下十里桃花，留下这一生的韶华与牵挂。</p>
							<div class="address">
								<p class="area">云南</p>
								<a href="" class="order">立即预约</a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="know_haian">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_7.png" alt="">
					<span class="tip">了解海岸</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="title">了解海岸</div>
				<div class="content">
					<div class="swiper-container know_banner">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{$img_url}img/wl/tb_knowuspic01.jpg" alt="">
								<p>海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。海岸每年完成400余项目，一直保持着180个左右的项目在进行中。</p>
							</div>
							<div class="swiper-slide">
								<img src="{$img_url}img/wl/tb_knowuspic02.jpg" alt=""> 
								<p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸。 他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的，因为目的不在于追求耀眼的视觉效果，而表现生活在其中人的活动本身。</p> 
							</div>
							<div class="swiper-slide">
								<img src="{$img_url}img/wl/tb_knowuspic03.jpg" alt="">
								<p>归本主义是“华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻。” 在生活体验中，不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考。</p>
							</div>
						</div>
						<div class="prev"><img src="{$img_url}img/wl/tb_banner_left.png" alt=""></div>
						<div class="next"><img src="{$img_url}img/wl/tb_banner_right.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
		<div class="client">
			<div class="caption">
				<div class="content">
					<img class="grade" src="{$img_url}img/wl/gdlinetit_8.png" alt="">
					<span class="tip">海岸合作客户</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container_bg">
				<div class="container">
					<p class="title">合作客户</p>
					<div class="brand">
						<div class="item"><img src="{$img_url}img/wl/tb_client1.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client2.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client3.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client4.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client5.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client6.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client7.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client8.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client9.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client10.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client11.jpg" alt=""></div>
						<div class="item"><img src="{$img_url}img/wl/tb_client12.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
		<div class="excellent_case">
			<div class="caption">
				<div class="content">
          <a href=""><img class="grade" src="{$img_url}img/wl/gdlinetit_9.png" alt=""></a>
					<span class="tip">海岸精品案例</span>
				</div>
				<div class="cutoff"></div>
			</div>
			<div class="container">
				<div class="swiper-container case_banner">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
              <a href=""><img src="{$img_url}img/wl/tb_swiper5.jpg" alt=""></a>
							<p>六度别院 | 云南 | 2000㎡</p>
						</div>
						<div class="swiper-slide">
              <a href=""><img src="{$img_url}img/wl/tb_swiper3.jpg" alt=""></a>
							<p>五山别院 | 四川 | 110亩</p>
						</div>
						<div class="swiper-slide">
              <a href=""><img src="{$img_url}img/wl/tb_swiper4.jpg" alt=""></a>
							<p>青绿元 | 云南 | 200亩</p>
						</div>
						<div class="swiper-slide">
              <a href=""><img src="{$img_url}img/wl/tb_swiper1.jpg" alt=""></a>
							<p>塞北农旅 | 河北 | 1054.11亩</p>
						</div>
						<div class="swiper-slide">
              <a href=""><img src="{$img_url}img/wl/tb_swiper2.jpg" alt=""></a>
							<p>隐逸水镇 | 云南 | 50亩</p>
						</div>
					</div>
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
		var swiper = new Swiper('.case_banner', {
			slidesPerView :"auto",
      centeredSlides: true,
      grabCursor: true,
      loop: true,
    });
		var swiper1 = new Swiper('.know_banner', {
			navigation: {
				nextEl: '.next',
				prevEl: '.prev',
			},
			autoplay: {
				reverseDirection: true,
				delay: 1300,
				disableOnInteraction: false,
				reverseDirection: false,
			},
      loop: true,
  	});
	</script>
</body>
</html>


<!--
EOT;
?>