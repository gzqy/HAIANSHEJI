<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
echo <<<EOT
-->
{$methtml_head} 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>会所设计</title>
    <link rel="stylesheet" href="{$img_url}css/hs/index.css">
    <link rel="stylesheet" href="{$img_url}css/hs/reset.css">
	<link rel="stylesheet" href="{$img_url}css/hs/swiper.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script language="JavaScript" type="text/javascript"> 


		function changeBtnable(){
		    $("#btn").removeAttr("disabled");
		}
		function changeBtndisable(){
		    $("#btn").attr("disabled","true");
		}
		function checkInput(){
		    var text = $("#para249").val();
		 	 var tex = $("#para250").val();
		  　　var r = /^\+?[1-9][0-9]*$/;　　//判断是否为正整数 
		    if(text==null||text.length !== 11 ||  r.test(txt) == false){
		    	
		    	
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
				
			  
			  
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para249");
			
				 $(this).attr("style", "border:1px solid green;border-radius: 0.1rem;") 
				}
	         });
			 $("#para248").keyup(function(){
				 $(this).triggerHandler('blur');//模拟触犯事件
				 })
			$(".para250").blur(function(e){
		
		
			var txt =$(this).val();//当前值
			　var r = /^\d+.*?/;　　//判断是否为正整数 
				
			if(txt==null || r.test(txt) == false )//判断是否为空或输入长度小于6个字符
			{
				
				$(this).attr('placeholder','请输入正确的数字');
			
			   
			    var attr = document.getElementsByClassName("para250");
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para250");
				console.log(attr);
			
				$(this).attr("style", "border:1px solid green;border-radius: 0.1rem;") 
				}
	         });

		       $(".para252").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入正确的数字');
						    var attr = document.getElementsByClassName("para252");
							attr.attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
						}else{
							var attr = document.getElementsByClassName("para252");
							 attr.attr("style", "border:1px solid green;border-radius: 0.1rem;") 
							}
		         });
		            $(".para248").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null || txt.length <2 )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入您的名字');
						    var attr = document.getElementsByClassName("para248");
							$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
						}else{
							var attr = document.getElementsByClassName("para248");
							$(this).attr("style", "border:1px solid green;border-radius: 0.1rem;") 
							}
		         });
			 
		
		});
	</script>
</head>
<body>
    <div id="wrap">
    	<!--banner开始-->
        <div class="header">
        	<div class="box">
        		<div class="bannerlogo">
        			<img src="{$img_url}img/bannerlogo1.png"/>
        		</div>
        		<div class="banner-zi">
        			<img src="{$img_url}img/banner-zi2.png"/>
        			<img src="{$img_url}img/banner-zi1.png"/>
        		</div>
        		<div class="tele">
        			<p>咨询热线：400-879-1110</p>
        		</div>
        		<div class="bannerbt">
	        		<a  href="#div1"><button>
	        			<img src="{$img_url}img/bannerbt.png"/>
	        		</button>	</a>
	        	</div>
        	
        	</div>
            	
        </div>
<div id="div1"></div> 
        <!--免费获取报价-->
        <div class="content">
        	<div class="iform">
       			<div  class="contenttitle">
       				<p>免费获取报价</p>
       			</div>
       			<div class="icontent">
<!--
EOT;
require_once template('feed/feedback_10'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
--> 
    {$metfeedback6}
       			</div>
       			
       		</div>
       	</div>

		<!-- 会所设计经典案例 -->
		<div class="introduce">
			<p class="contenttitle">会所设计经典案例</p>
			<div class="appoint">
				<div class="appointment frist">
					<div class="draw">
						<a href="{$index_url}product/showproduct.php?id=92&lang=cn" target="_blank"> 
							<img src="{$img_url}img/img1.png" alt=""/>
						</a>
					</div>
					<div class="detail">
						<span>千色水会</span>
						<p>以归本主义为设计理念，围绕着砖、石、钢、木、玻璃、混凝土几个元素展开。在整体空间的打造上突破了以往的循规蹈矩，避免运用那些典型的浮夸元素，用务实......
						</p>
						<ul class="list-ment">
							<li>广西·玉林</li>
							<li class="heartbeat "><a  href="#div1">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=325&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img2.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>内向足疗馆</span>
					<p>内向足疗馆位于有“文化之都”美誉的哈尔滨，由郭准先生亲自主笔。空间设计以归本主义理念为出发点，充分利用当地的自然资源和特色，让东方元素加入现代简约......
					</p>
					<ul class="list-ment">
						<li>黑龙江·哈尔滨</li>
						<li class="heartbeat "><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=370&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img3.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>良子足浴</span>
					<p>
						采用“森林”作为项目的设计主题，以原始的水泥、原木为材料，以追求自然、纯净的空间美感为目的。在布局上，将空间化整为零，营造开阔，大气的室内效果......
					</p>
					<ul class="list-ment">
						<li>北京·通州</li>
						<li class="heartbeat "><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=330&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img4.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>蜜儿派母婴体验店</span>
					<p>
						白色和黑色的结合为整个空间提供明快干净的氛围，从原木楼梯到绿植点缀，从不规则天花装饰到自然采光的处理，每一个细节都更加注重孕妈的体验感受。在灯......
					</p>
					<ul class="list-ment">
						<li>河北·唐山</li>
						<li class="heartbeat "><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment last">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=323&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img5.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>檀邑溪谷旅游度假村</span>
					<p>
						从原始的色彩到令人陶醉的光影，都赋予度假村一种略带浪漫的休闲氛围。 从材质的选择上，整个度假村没有经过刻意雕琢，裸露的砖石、古朴的桌椅、粗矿的铁艺......
					</p>
					<ul class="list-ment">
						<li>河北·张家口</li>
						<li class="heartbeat "><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
		</div>
		<!-- 会所设计集锦 -->
		<div class="exhibition">
			<div class="exhibite">
				<p class="contenttitle">会所设计集锦</p>
				<div class="swiper-container">
					<div class="exhibition-list swiper-wrapper">
						<div class="swiper-slide">
							<ul>
								<li>
									<a href="{$index_url}product/showproduct.php?id=264&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case1.png" alt="">
									<div>
										<p>前沿公社红酒会所</p>
										<i></i>
										<span>兰州</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=322&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case2.png" alt="">
									<div>
										<p>良子健身</p>
										<i></i>
										<span>北京</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=461&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case3.png" alt="">
									<div>
										<p>盐城会所</p>
										<i></i>
										<span>江苏</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=326&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case4.png" alt="">
									<div>
										<p>铜须水族主题会所</p>
										<i></i>
										<span>延吉</span>
									</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
									<a href="{$index_url}product/showproduct.php?id=370&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case5.png" alt="">
									<div>
										<p>良子足浴</p>
										<i></i>
										<span>北京</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=323&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case6.png" alt="">
									<div>
										<p>檀邑溪谷旅游度假村</p>
										<i></i>
										<span>张家口</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=325&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case7.png" alt="">
									<div>
										<p>内向足疗</p>
										<i></i>
										<span>哈尔滨</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=327&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case8.png" alt="">
									<div>
										<p>丁香水岸</p>
										<i></i>
										<span>沈阳</span>
									</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
									<a href="{$index_url}product/showproduct.php?id=439&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case9.png" alt="">
									<div>
										<p>铜须水族主题会所</p>
										<i></i>
										<span>延吉</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=92&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case10.png" alt="">
									<div>
										<p>千色水会</p>
										<i></i>
										<span>玉林</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=294&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case11.png" alt="">
									<div>
										<p>溪树河谷</p>
										<i></i>
										<span>哈尔滨</span>
									</div>
									</a>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=383&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case12.png" alt="">
									<div>
										<p>福清融锦会客厅</p>
										<i></i>
										<span>福清</span>
									</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</div>
		<!-- 会所设计一步到位 -->
		<div class="case">
			<p class="contenttitle">会所设计一步到位</p>
			<div class="ilist">
					<ul>
				<li>
                            <div ><img src="{$img_url}canyin/z1.png" alt="沟通咨询" title="咖啡厅设计" ></div>
                            <p>沟通咨询</p>
                            <span>提供专业建议</span>
                   </li>
					<li>
                           <div><img src="{$img_url}canyin/s2.png" alt="定金勘测" title="咖啡厅设计"></div>
                            <p>定金勘测</p>
                           <span>品牌的保证&nbsp</span>
                    </li>
					<li>
                            <div ><img src="{$img_url}canyin/s3.png" alt="设计意向" title="咖啡厅设计" ></div>
                            <p>设计意向&nbsp</p>
                            <span>确定需求&nbsp&nbsp</span>
                    </li>
					<li>
                            <div ><img src="{$img_url}canyin/x1.png" alt="施工图" title="咖啡厅设计" ></div>
                           <p>&nbsp效果图&nbsp</p>
                            <span>最直观的设计效果</span>
                    </li>
					<li>
                            <div ><img src="{$img_url}canyin/x2.png" alt="施工图" title="咖啡厅设计" ></div>
                           <p>&nbsp施工图&nbsp</p>
                            <span>打造您店面的基石</span>
                    </li>
					<li>
							<div><img src="{$img_url}canyin/x3.png"/ ></div>
							<p>项目预算</p>
							<span>为您考虑成本</span>
					</li>
					
				</ul>
			</div>
		</div>
    	<!--了解海岸-->
    	<div class="haian">
    		<p class="contenttitle">了解海岸</p>
    		<div class="swiper-container">
					<div class="swiper-wrapper">
					  <div class="swiper-slide">
						  <div class="haian1">
						<div class="haian2">
							<img src="{$img_url}img/tuandui.jpg"/>
							<p>海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。海岸每年完成400余项目，一直保持着180个左右的项目在进行中。</p>
						</div>
						
						</div>
					  </div>
					  <div class="swiper-slide">
						  <div class="haian1">
						
						<div class="haian2">
							<img src="{$img_url}img/guiben.jpg"/>
							<p>归本主义是“华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻。”在生活体验中，不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考。</p>
						</div>
						</div>
					  </div>
					  <div class="swiper-slide">
						  <div class="haian1">
						<div class="haian2">
							<img src="{$img_url}img/chuangshi1.jpg"/>
							<p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸。他所设计的空间充满着动态方向的诱导，透视和生动明朗的创造，动态是创造性的，因为目的不在于追求耀眼的视觉效果，而是追求表现生活在其中人的活动本身。</p>
						</div>
						</div>
					  </div>
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next next">
						<img src="{$img_url}img/rigth.png" alt="">
					</div>
					<div class="swiper-button-prev prev">
						<img src="{$img_url}img/left.png" alt="">
					</div>
				  </div>
      
    		
    	</div>
    	<!--合作客户-->
    	<div class="custom">
    		<p class="contenttitle">合作客户</p>
    		<div class="company">
    			<ul>
	    			<li><img src="{$img_url}img/zu137.jpg"/></li>
	    			<li><img src="{$img_url}img/zu138.jpg"/></li>
	    			<li><img src="{$img_url}img/zu139.jpg"/></li>
	    			<li><img src="{$img_url}img/zu140.jpg"/></li>
	    			<li><img src="{$img_url}img/zu141.jpg"/></li>
	    			<li><img src="{$img_url}img/zu142.jpg"/></li>
	    			<li><img src="{$img_url}img/zu143.jpg"/></li>
	    			<li><img src="{$img_url}img/zu144.jpg"/></li>
	    			<li><img src="{$img_url}img/zu145.jpg"/></li>
	    			<li><img src="{$img_url}img/zu146.jpg"/></li>
	    			<li><img src="{$img_url}img/zu147.jpg"/></li>
	    			<li><img src="{$img_url}img/zu148.jpg"/></li>
	    		</ul>
    		</div>
    		
    	</div>
    	<!--海岸会所设计-->
    	<div class="anli">
    		<p class="contenttitle">海岸会所设计</p>
    		<ul class="content-list">
    			<li>
					<a href="{$index_url}product/showproduct.php?id=370&lang=cn" target="_blank"> 
    				<img src="{$img_url}img/ic1.jpg"/>
					<span>
						<h1>良子足浴</h1>
					</span>
					</a>
    			</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=323&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic2.jpg"/>
					<span>
						<h1>檀邑溪谷旅游度假村</h1>
					</span>
					</a>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=325&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic3.jpg"/>
					<span>
						<h1>内向足疗馆</h1>
					</span>
					</a>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=371&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic4.jpg"/>
					<span>
						<h1>千色水会</h1>
					</span>
					</a>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=327&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic5.jpg"/>
					<span>
						<h1>丁香水岸设计</h1>
					</span>
					</a>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=264&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic6.jpg"/>
					<span>
						<h1>前沿公社红酒会所</h1>
					</span>
					</a>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=338&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic7.jpg"/>
					<span>
						<h1>融锦会客厅</h1>
					</span>
					</a>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=439&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic8.jpg"/>
					<span>
						<h1>铜须水族主题会所</h1>
					</span>
					</a>
				</li>
    		</ul>
  
    			<div class="button"> <a href="{$index_url}product/list-170-cn.html" target="_blank"><button>更多会所设计案例</button></a></div>
    	</div>
    	<!--免费获取报价-->
        <div class="content">
        	<div class="iform">
       			<div  class="contenttitle">
       				<p>免费获取报价</p>
       			</div>
       			<div class="icontent">
<!--
EOT;
require_once template('feed/feedback_10'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}
       			</div>
       			
       		</div>
       	</div>
    	<!--footer-->
<!--
EOT;
require_once template('foot_com');
echo <<<EOT
-->
</html>

<!--
EOT;
?>