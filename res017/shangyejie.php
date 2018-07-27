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
<head>
	<meta charset="UTF-8">
	<title>商业街规划设计</title>
	<link rel="stylesheet" href="{$img_url}css/bizstreet.css">
	<link rel="stylesheet" href="{$img_url}css/zhe.css">
	<link rel="stylesheet" href="{$img_url}css/syj/swiper.min.css">
	<link rel="stylesheet" href="{$img_url}css/syj/style.css">	
	<script type="text/javascript" src="{$img_url}js/syj/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="{$img_url}js/syj/bizstreet.js"></script>
	<script src="{$img_url}js/syj/swiper.min.js"></script>
	<script src="{$img_url}js/syj/carousel_focus.min.js"></script>
	<script src="{$img_url}js/syj/index.js"></script>
	<script type="text/javascript" src="{$img_url}js/tianyuan.js"></script>  
	<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
	<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
	<script src="{$img_url}js/tushu/swiper.min.js"></script>

</head>
<!-- liangmeilicss -->
<style type="text/css">
</style>
<body>
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

	<header class="heaImg">
		<h2 class="psitcenter top-head">商业街规划设计</h2>
		<p class="psitcenter top-text">19年行业领先品牌，300位设计精英</p>
		<ul class="psitcenter top-right">
			<li><span></span>商业街规划设计</li>
			<li><span></span>商业街区规划设计</li>
			<li><span></span>商业街景观规划设计</li>
			<li><span></span>商业步行街规划设计</li>
		</ul>
	<a href="javascript:;" class="psitcenter" onclick="jQuery('.boxbig').show()">立即预约</a>

	</header>
	<div class="titlebank color333r">
		<em class="psitcenter">为什么选择我们</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>
		<p class="psitcenter color2c">北京海岸设计以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计</p>
	</div>
	<!-- 为什么选择我们 -->
	<section>
		<ul class="chose-content">
			<li class="slide-1">
				<img src="{$img_url}img/biz/choseli01bg.jpg" alt="我们的优势">
				<span></span>
				<p class="chousefirstp">OUR ADVANTAGES</p>
				<em class="psitcenter">我们的优势</em>
				<h3>400-879-1110</h3>
				<p class="chousesecondp psitcenter">全国免费咨询热线</p>
				<dl class="psitcenter">
					<dt>经验</dt>
					<dt>风格</dt>
					<dt>团队</dt>
					<dt>周期</dt>
				</dl>
			</li>
			<li class="slide-2">
				<img src="{$img_url}img/biz/choseli02bg.jpg" alt="为客户提供">
				<span></span>
				<p class="psitcenter">为客户提供<br>一站式全程服务</p>
				<em><hr>为客户提供</em>
			</li>
			<li class="slide-3">
				<img src="{$img_url}img/biz/choseli03bg.jpg" alt="经验丰富">
				<span></span>
				<p class="psitcenter">300余位<br>专职行业精英</p>
				<em><hr>经验丰富</em>
			</li>
			<li class="slide-4">
				<img src="{$img_url}img/biz/choseli04bg.jpg" alt="预算合理">
				<span></span>
				<p class="psitcenter">开创有新意节<br>约成本的实现方式</p>
				<em><hr>预算合理</em>
			</li>
			<li class="slide-5">
				<img src="{$img_url}img/biz/choseli02bg.jpg" alt="行业经验">
				<span></span>
				<p class="psitcenter">从1999年<br>成立服务至今</p>
				<em><hr>行业经验</em>
			</li>			
		</ul>
	</section>
	<!-- 商业街分类 -->
	<section class="classification">
		<div class="titlebank">
			<em class="psitcenter">商业街分类</em>
			<span class="psitcenter"><i class="psitcenter"></i></span>
			<p class="psitcenter">北京海岸设计以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计</p>
		</div>
		<ul class="classificationul">
			<li><span></span><em class="psitcenter">经济类型</em></li>
			<li><span></span><em class="psitcenter">文化类型</em></li>
			<li><span></span><em class="psitcenter">娱乐类型</em></li>
			<li><span></span><em class="psitcenter">休闲类型</em></li>
			<li><span></span><em class="psitcenter">保护类型</em></li>
			<li><span></span><em class="psitcenter">环保类型</em></li>
			<li><span></span><em class="psitcenter">交通类型</em></li>
		</ul>
			<a href="javascript:;"  class="classbtn" onclick="jQuery('.boxbig').show()">立即预约</a>
	</section>

<!-- 商业街发展趋势 -->
<div class="business">
	<div class="titlebank">
		<em class="businessTitle">商业街分类</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>
		<p class="businessInfo">北京海岸设计以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计</p>
	</div>

	<div class="businessCenter">
		<div class="businessImg">
			<img src="{$img_url}img/biz/developmentbg01.jpg">
		</div>
		<div class="businessText">
			<!-- <div class="businessTextTitle">
				<div class="num">1</div>
				<div class="heading">将成为我国商业街发展主流方向</div>
				<div class="rightBtn">
					<img src="{$img_url}img/biz/05.png">
				</div>
			</div> -->
			<ul class="centerList">
				<li>
					<div class="lottery convention">
						<div class="nub">01</div>
						<div class="the">将成为我国商业街发展主流方向</div>
						<div class="Arrow"><img src="{$img_url}img/biz/05.png" alt=""></div>
					</div>
					<div class="tax cpm">
						<img src="{$img_url}img/biz/jiequ.png">街区化
					</div>
				</li>
				<li>
					<div class="lottery">
						<div class="nub">02</div>
						<div class="the">将成为我国商业街发展主流方向</div>
						<div class="Arrow"><img src="{$img_url}img/biz/05.png" alt=""></div>
					</div>
					<div class="tax">
							<img src="{$img_url}img/biz/jiequ.png">街区化
					</div>
				</li>
				<li>
					<div class="lottery">
						<div class="nub">03</div>
						<div class="the">将成为我国商业街发展主流方向</div>
						<div class="Arrow"><img src="{$img_url}img/biz/05.png" alt=""></div>
					</div>
					<div class="tax">
						<img src="{$img_url}img/biz/lixing.png">理性化
					</div>
				</li>
				<li>
					<div class="lottery">
						<div class="nub">04</div>
						<div class="the">将成为我国商业街发展主流方向</div>
						<div class="Arrow"><img src="{$img_url}img/biz/05.png" alt=""></div>
					</div>
					<div class="tax">
						<img src="{$img_url}img/biz/fuhe.png">复合化
					</div>
				</li>
				<li>
					<div class="lottery">
						<div class="nub">05</div>
						<div class="the">将成为我国商业街发展主流方向</div>
						<div class="Arrow"><img src="{$img_url}img/biz/05.png" alt=""></div>
					</div>
					<div class="tax">
						<img src="{$img_url}img/biz/guihua.png">街区化
					</div>
				</li>
			</ul>
		</div>



	</div>
</div>
	<div  class="businessBtns"><a href="javascript:;"  style="color:black" onclick="jQuery('.boxbig').show()">立即预约</a></div>

<!-- 商业规划要素 -->
<div class="element">
	<div class="titlebank">
		<em class="businessTitle white">商业街规划要素</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>
		<p class="businessInfo white">北京海岸设计以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计</p>
	</div>
	<div class="elementList">
		<ul class="ListCenter">
			<li class="hvr-radial-out">
				<span></span>
				<font>空间形态</font>
			</li>
			<li class="hvr-radial-out">
				<span class="listTwo"></span>
				<font>功能结构</font>
			</li>
			<li class="hvr-radial-out">
				<span class="listThree"></span>
				<font>距离长短</font>
			</li>
			<li class="hvr-radial-out">
				<span class="listFovr"></span>
				<font>尺度宽窄</font>
			</li>
			<li class="hvr-radial-out">
				<span class="listFive"></span>
				<font>建筑高低</font>
			</li>
		</ul>
	</div>
	
	<a href="javascript:;" class="elementBtn"  onclick="jQuery('.boxbig').show()">立即预约</a>
</div>

<!-- 商业精品案例 -->
<div class="boutique">
	<div class="titlebank">
		<em class="businessTitle ">商业街精品案例</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>
		<p class="businessInfo ">归本主义-最专业最受欢迎的案例，专注打造最美好的设计，欢迎咨询：400-879-1110</p>
	</div>
	<div class="boutiqueList">
		<ul class="boutiqueCenter">
			<li class="boutiqueImgOne">
				<p class="boutiqueText">蜂巢综合体</p>
				<p class="designer">总设计师：郭淮先生</p>
				<a href="{$index_url}product/showproduct.php?lang=cn&id=38" target="_blank" style="color:#fff">
					<div class="zhe">

						<div class="hive">
							<div class="hiveImg" >
							</div>
							<div class="hiveTitle">蜂巢综合体</div>
							<div class="address">
								<span style="padding-right: 23%">项目地址：河北</span>
								<span>设计面积：12万平方米</span>
								<a href="javascript:;"   onclick="jQuery('.boxbig').show()" class="hiveBtn">立即预约</a>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="boutiqueImgOne">
				<p class="boutiqueText">南彩酒店综合体</p>
				<p class="designer">总设计师：郭淮先生</p>
				<a href="{$index_url}product/showproduct.php?lang=cn&id=450" target="_blank" style="color:#fff">
					<div class="zhe">
						<div class="hive">
							<div class="hiveImg">
							</div>
							<div class="hiveTitle">南彩酒店综合体</div>
							<div class="address">
								<span style="padding-right: 23%">项目地址：北京</span>
								<span>设计面积：35641㎡</span>
								<a href="javascript:;"   onclick="jQuery('.boxbig').show()" class="hiveBtn">立即预约</a>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="boutiqueImgOne">
				<p class="boutiqueText">淮安广场设计</p>
				<p class="designer">总设计师：郭淮先生</p>
				<a href="{$index_url}product/showproduct.php?lang=cn&id=54" target="_blank" style="color:#fff">
					<div class="zhe">
						<div class="hive">
							<div class="hiveImg">
							</div>
							<div class="hiveTitle">淮安广场设计</div>
							<div class="address">
								<span style="padding-right: 23%">项目地址：江苏淮安</span>
								<span>设计面积：14285㎡</span>
								<a href="javascript:;"   onclick="jQuery('.boxbig').show()" class="hiveBtn">立即预约</a>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="boutiqueImgOne">
				<p class="boutiqueText">SE商场设计</p>
				<p class="designer">总设计师：郭淮先生</p>
				<a href="{$index_url}product/showproduct.php?lang=cn&id=105" target="_blank" style="color:#fff">
					<div class="zhe">
						<div class="hive">
							<div class="hiveImg">
							</div>
							<div class="hiveTitle">SE商场设计</div>
							<div class="address">
								<span style="padding-right: 23%">项目地址：河北</span>
								<span>设计面积：12万平方米</span>
								<a href="javascript:;"   onclick="jQuery('.boxbig').show()" class="hiveBtn">立即预约</a>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="boutiqueImgOne">
				<p class="boutiqueText">南瓜公社设计</p>
				<p class="designer">总设计师：郭淮先生</p>
				<a href="{$index_url}product/showproduct.php?lang=cn&id=475" target="_blank" style="color:#fff">
					<div class="zhe">
						<div class="hive">
							<div class="hiveImg">
							</div>
							<div class="hiveTitle">南瓜公社设计</div>
							<div class="address">
								<span style="padding-right: 23%">项目地址：河北</span>
								<span>设计面积：12万平方米</span>
								<a href="javascript:;"   onclick="jQuery('.boxbig').show()" class="hiveBtn">立即预约</a>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="boutiqueImgOne">
				<p class="boutiqueText">云创谷商业综合体</p>
				<p class="designer">总设计师：郭淮先生</p>
				<a href="{$index_url}product/showproduct.php?lang=cn&id=347" target="_blank" style="color:#fff">
					<div class="zhe">
						<div class="hive">
							<div class="hiveImg">
							</div>
							<div class="hiveTitle">云创谷商业综合体</div>
							<div class="address">
								<span style="padding-right: 23%">项目地址：河北</span>
								<span>设计面积：12万平方米</span>
								<a href="javascript:;"   onclick="jQuery('.boxbig').show()" class="hiveBtn">立即预约</a>
							</div>
						</div>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="brief">
	<div class="about">
		<p>关于海岸</p>
		<div class="Vinegar"></div>
		
		<em>一个归本主义作品，讲述一个故事，留下一个印象，播种一个梦想。欢迎咨询：400-879-1110</em>
	</div>
	<div class="character">
		<img src="{$img_url}img/biz/guolaoshi_03.png" alt="">
		<p>郭准先生</p>
	</div>
</div>

<div class="retreat-text">
        <p>
            郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸，
            为了追寻自己的设计理念，他在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角落。
            从建筑的角度感受不同的人类文化，特别是在欧美、日韩，他虔诚的寻访了建筑巨匠们的足迹，
            深入大师们的实际作品内部，感悟其中奥妙所在，探寻大师们伟大思想的形成历程。在消化历代建筑大师的精华，
            思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。
        </p>
        <a href="javascript:;"  onclick="jQuery('.boxbig').show()">立即预约</a>
</div>

   <div class="clouds">
        <p>海岸动态</p>
        <hr>
    </div>

    <div >

<!--
EOT;
 require_once template('modular/index/newWeb/neWeb_lb');
echo <<<EOT
--> 

    </div>


<div class="titlebank">
		<em class="businessTitle ">海岸商业街案例赏析</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>
		<p class="businessInfo ">基于人文、艺术、商业等融合风格呈现建造，链接每一环独有的命脉</p>
	</div>
	<div class="container">
			
		<div class="box">
			<!-- 存放大图的容器-->
			<div class="all">
				<div class="top-img">
					<div class="activeimg" style="width: 2500px; left: 0px;">
						<img src="{$img_url}img/biz/nice_03.jpg">
						<img src="{$img_url}img/biz/shangxin_03.jpg">
						<img src="{$img_url}img/biz/nice-3_03.jpg">
						<img src="{$img_url}img/biz/nice-4_03.jpg">
						<img src="{$img_url}img/biz/nice-5_03.jpg">
					</div>
					<div class="left"><img src="{$img_url}img/biz/left.png"> </div>
					<div class="right"><img src="{$img_url}img/biz/right.png"></div>
				</div>
				<!-- 存放缩略图的容器-->
				<div class="bot-img">
					<ul>
						<li class="active">
							<div class="lepo"></div>
							<a href="{$index_url}product/showproduct.php?lang=cn&id=105" target="_blank"><span>苏州SE设计</span></a>
						 </li>
						<li class="">
							<div class="lepo"></div>
							<a href="{$index_url}product/showproduct.php?lang=cn&id=475" target="_blank"><span>南瓜社区</span></a>
						 </li>
						<li class="">
							<div class="lepo"></div>
							<a href="{$index_url}product/showproduct.php?lang=cn&id=385" target="_blank"><span>山西铁货</span></a>
						</li>
						<li class="">
							<div class="lepo"></div>
							<a href="{$index_url}product/showproduct.php?lang=cn&id=54" target="_blank"><span>广场外观设计</span></a>
						 </li>
						<li>
							<div class="lepo"></div>
							<a href="{$index_url}product/showproduct.php?lang=cn&id=289" target="_blank"><span>南彩酒店</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bage"></div>
	</div>
	
	<div class="titlebank">
		<em class="businessTitle ">海岸合作客户</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>
		<p class="businessInfo ">您看到的是名字和标志，我们获得的是信任和满意。展示，不是为了炫耀，而是，让您放心选择！</p>
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
	 		
	</div>
		<div class="titlebank">
		<em class="businessTitle">提交需求</em>
		<span class="psitcenter"><i class="psitcenter"></i></span>		
	</div>
    <div class="qbtform">
<!--
EOT;
require_once template('feed/feedback_slr'); 
$metfeedback4=metlabel_feed_slr(166);
echo <<<EOT
-->  
    {$metfeedback4}    
    </div>
	   <!--底部-->
<footer>
            <div class="footertop">
          <div class="nav">
              <ul class="footul">
                <li>快速导航</li>
                <li>海岸设计</li>
              </ul>
          </div>
          <ul class="menuul">
<!--
EOT;
foreach($nav_list2[181] as $key=>$val){
  if($val['id']=='198')continue;
echo <<<EOT
-->
            <li><a href="{$val['url']}" target="_blank">{$val['name']}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
          </ul>
          <ul class="menuul clsply">
<!--
EOT;
foreach($nav_list2[181] as $key=>$val){
  if($val['id']=='188')continue;
echo <<<EOT
-->
            <li><a href="{$val['url']}" target="_blank">{$val['name']}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
          </ul>
          <div class="footlf">
              <img src="{$img_url}xiaozhen/haianfooterlogo.png" alt="海岸九九">
              <p class="mt5">
                Web：www.haianzhuangshi.com<br/>
             
                E-mail：haianzhuangshi@sina.com</br>

                Address：北京市朝阳区北汽双井文创园3号楼E座108车间
            
              </p>
          </div>
          <div class="footmid">
              <div class="erweimod">
                <img src="{$img_url}xiaozhen/erweima1.png"/>
                <p>扫一扫，免费通话</p>
              </div>
              <div class="erweimod">
                <img src="{$img_url}xiaozhen/erweima2.png"/>
                <p>官方微博</p>
              </div>
          </div>
          <div class="footrgt">
            <img src="{$img_url}img/xzm.png" alt="联系我们">
            <span>400-879-1110</span>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button>立即预约</button></a>
          </div>
    </div>    
      <div class="footp">
      <hr class="footerhr">
            <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 京ICP备13049424号<br/>
            海岸声明：本站内容 图像资料版权均属「北京海岸设计」任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p>
            <div class="cnzz">{$lang_foot_cnzz}</div>
    </div>  
</footer>
    <!--底部-->
	 <script>
		var mySwiper = new Swiper(".Carousel .swiper-container",{
				direction: 'horizontal',
				autoplay:true,
				loop: true,
				paginationClickable: true,
				pagination: {
					el: '.swiper-pagination',
				},
				navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
				},
			})
		</script>
    <script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{$img_url}js/haian-core.js"></script>
    <script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
</body>
</html>
<!--
EOT;
?>