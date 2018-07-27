<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';

echo <<<EOT
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>连锁店设计</title>
    <link rel="stylesheet" href="{$img_url}css/ls.css">
    <link rel="stylesheet" href="{$img_url}css/ls/reset.css">
	<link rel="stylesheet" href="{$img_url}css/ls/swiper.min.css">
	<script type="text/javascript" src="{$img_url}js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="{$img_url}js/ruanzhuang.js"></script>  
	<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="{$img_url}js/1.9.0.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script src="{$img_url}js/sea.js" type="text/javascript"></script>
	
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
		 	 var texo = $(".para252").val();
		 	 
	
	
		  　　var r = /^\+?[1-9][0-9]*$/;　　//判断是否为正整数 
		    if(text.length !== 11  ||  r.test(tex) == false  ||  texo.length == ''){
		    	
		    	
		    	changeBtndisable();
		    	 
		    }
		}	
	
	 </script> 
	<script type="text/javascript">
	


	$(function(){
		
		$(".para249").blur(function(e){
			
		
			var txt =$(this).val();//当前值

			

			if(txt==null||txt.length <11)//判断是否为空或输入长度小于11个字符
			{
				
				$(this).attr('placeholder','请输入正确的手机号');
				
			  
			  
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
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
				
				$(this).attr('placeholder','请输入正确的数字');
			
			   
			    var attr = document.getElementsByClassName("para250");
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para250");
			
				$(this).removeAttr("style") 
				
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
						$(this).removeAttr("style") 
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
							$(this).removeAttr("style")
							}
		         });
			 
		
		});
	</script>
</head>
<body>
    <div id="wrap">
    	<!--banner开始-->
        <div class="header">
        	<div class="banner">
        		<div class="logo">
	        		<img src="{$img_url}img/ls/bannerlogo.png"/>
	        	</div>
	        	<div class="banner-zi">
	        		<p>·&nbsp;连锁店面设计 ·&nbsp;品牌店面设计·&nbsp;餐饮店面设计 ·&nbsp;高端店铺设计 ·&nbsp;高端体验店设计</p>
	        	</div>
	        	<div class="bannerbt">
	        		<a  href="#div1"><button>立即预约</button></a>
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
$metfeedback6=metlabel_feedback10(224);
echo <<<EOT
-->  
    {$metfeedback6}  
       			</div>
       			
       		</div>
       	</div>
		<!--设计空间区域-->
		 <div class="space">
		 	<p  class="contenttitle">连锁店设计空间区域</p>
		 	<div class="spacebox">
		 		<ul>
			 		<li class="spaceli1">
			 			<div>
			 				<h1>不出效果？</h1>
			 			<p>根据客户的项目特性，切合实际的规划功能区域，打造独树一帜的空间风格。既能呈现空间使用率，又能凸显重要区域的独特性。</p>
			 			</div>
			 			
			 		</li>
			 		<li class="spaceli2">
			 			<div>
			 				<h1>不能传播需求？</h1>
			 			<div >
			 				
			 			</div><p>以归本主义为核心对每个项目进行原创设计从设计图效果图到最终效果让客户全程参与设计，按需求量身设计海岸给您想要的完美空间 。</p>
			 			</div>
			 			
			 		</li>
			 		<li class="spaceli3">
			 			<div>
			 			<h1>权益如何保障？</h1>
			 			<p>海岸创立于1999年，被认为是设计行业第一品牌，精英设计师280人，分为18个战区进行流程化标准化作业，优秀的执行是结果的保障。</p>
			 			</div>
			 			
			 		</li>
			 		<li class="spaceli4">
			 			<div>
			 				<h1>我们都为您想到了！</h1>
			 			<p>我们的设计，更专业、更专注。从全案设计→方案效果图→3D立体效果展现→店面实施→完美呈现落地效果，进行全方位设计配套服务。 </p>
			 			</div>
			 			
			 		</li>
			 	</ul>
		 	</div>
		 	
		 </div>
    	<!--设计原则-->
    	<div class="principle">
    		<p  class="contenttitle">连锁店设计原则</p>
    		<div class="principlewrap">
	    		<div class="principlebox">
	    			<div class="principle00 principle01">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/ls/zhengti.png"/>
	    				</div>
	    				<div class="principle001">
	    					<h1>整体性</h1>
	    					<p>连锁店装修时首先要注意充分考虑到墙面和室内的其他部分的统一性，使整个墙面和整个空间形成统一的整体。</p>
	    				</div>
	    				
	    			</div>
	    			<div class="principle00 principle02">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/ls/dute.png"/>
	    				</div>
	    				<div class="principle001">
	    				<h1>独特性</h1>
	    				<p>做到与众不同、标新立异，使顾客一看到店铺就具有心灵上的震撼感和情感的共鸣，敢用夸张的形象、文字来体现店铺的独特风格。</p>
	    				</div>
	    			</div>
	    			<div class="principle00 principle03">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/ls/yishu.png"/>
	    				</div>
	    				<div class="principle001">
	    				<h1>艺术性</h1>
	    				<p>墙面的装饰效果能够很好的渲染和美化室内的环境，影响着室内空间的气氛，创造室内空间良好的艺术效果。</p>
	    				</div>
	    			</div>
	    			<div class="principle00 principle04">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/ls/wuli.png"/>
	    				</div>
	    				<div class="principle001">
	    				<h1>物理性</h1>
	    				<p>墙面在连锁店装修中占据的空间较大，要求也较高，因此在处理保暖和防火等要求时也需要特别的注意。</p>
	    				</div>
	
	    			
	    			</div>
	    		</div>
    		</div>
    	</div>
    	<!--一站式全程服务-->
    	<div class="serve">
    		<p  class="contenttitle">一站式全程服务</p>
    		<div class="servebox">
    			<div class="servebox1">
    				<div class="serve_00 serve_01">
	    				<p class="severp1">FACADE<br />DESIGN</p>
	    				<p>门面设计</p>
	    			</div>
	    			<div class="serve_00 serve_02">
	    				<p class="severp1">STORE<br />LAYOUT DESIGN</p>
	    				<p>店面布局设计</p>
	    			</div>
	    			<div class="serve_00 serve_03">
	    				<p class="severp1">DOODS ON<br />DESIGN</p>
	    				<p>商品陈列</p>
	    			</div> 
	    			<div class="serve_00 serve_04">
	    				<p class="severp1">LIGHTING</p>
	    				<p>照明设计</p>
	    			</div>
	    			<div class="serve_05">
	    				<div>
	    					<p>整体规划</p>
	    					<p class="severp1">OVERALL PLANNING</p>
	    				</div>
	    			</div>
	    			<div class="serve_00 serve_06">
	    				<p class="severp1">IMAGE<br />WALL DESIGN</p>
	    				<p>形象墙</p>
	    			</div>
	    			<div class="serve_00 serve_07">
	    				<p class="severp1">TRADEMARK<br />DESIGN</p>
	    				<p>招牌设计</p>
	    			</div>
	    			<div class="serve_00 serve_08">
	    				<p class="severp1">ENVIRONMENTAL<br />DESIGN</p>
	    				<p>店面环境设计</p>
	    			</div>
	    			<div class="serve_00 serve_09">
	    				<p class="severp1">THE WINDOW<br />DESIGN</p>
	    				<p>橱窗设计</p>
	    			</div>
    			</div>
    			
    		</div>
    	</div>
    	<!--了解海岸设计-->
    	<div class="know">
    		<p  class="contenttitle">了解海岸设计</p>
    		<div class="knowbox">
    			<div class="knowbox01">
    				<div class="know_01">
    					<div class="know_05">
    						<img src="{$img_url}img/ls/liaojie.png"/>
    					</div>
    					<div class="know_06">
    						<h1>我们的态度</h1>
		    				<p>将每一个项目都做成精品，否定平凡的设计创作</p>
		    				<a  href="#div1"><button>立即预约</button></a>
    					</div>
	    				
	    			</div>
	    			<div class="knowbox02">
	    				<div class="know_02">
		    				<h1>从案例开始</h1>
		    				<p>十八年来，秉持匠人精神成就每一个商业艺术品</p>
		    				<button>查看案例</button>
		    			</div>
		    			<div class="know_03">
		    				<h1>从策划开始</h1>
		    				<p>多元化的思维和卓越的创意</p>
		    				<a  href="#div1"><button>立即预约</button></a>
		    			</div>
		    			<div class="know_04">
		    				<h1>从团队开始</h1>
		    				<p>海岸成立于1999年，拥有精英团队设计师300余人</p>
		    				<a  href="#div1"><button>立即预约</button></a>
		    			</div>
	    			</div>
    			</div>
    			
    		</div>
    	</div>
    	<!--设计案例赏析-->
    	<div class="case">
    		<p  class="contenttitle">连锁店设计案例赏析</p>
    		<div class="swiper-container">
			    <div class="swiper-wrapper">
			      <!--<div class="swiper-slide">
			      	<div class="case1">
			      		<img src="{$img_url}img/ls/case1.jpg"/>
			      		<a  href="{$index_url}product/showproduct.php?id=200&lang=cn" target="_blank"><h1>漫猫咖啡</h1></a>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<img src="{$img_url}img/ls/case2.jpg"/>
			      		<a  href="{$index_url}product/showproduct.php?id=159&lang=cn" target="_blank"><h1>逸美时光</h1><a>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<img src="{$img_url}img/ls/case3.jpg"/>
			      		<a href="{$index_url}product/showproduct.php?id=116&lang=cn" target="_blank"><h1>咖啡陪你</h1><a>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<div class="caseimg"><img src="{$img_url}img/ls/case4.jpg"/></div>
			      		<a href="{$index_url}product/showproduct.php?id=131&lang=cn" target="_blank"><h1>SOME咖啡</h1><a>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<div class="caseimg"><img src="{$img_url}img/ls/1498124119.jpg"/></div>
			      		<a href="{$index_url}product/showproduct.php?id=97&lang=cn" target="_blank"><h1>苏宁.云咖</h1><a>
			      	</div>
			      </div>-->

<!--
EOT;
foreach(methtml_getarray($lang_liansuo,'',hits,'','8','','','','16') as $key=>$val){
echo <<<EOT
-->
    						
							<div class="swiper-slide">
						      	<div class="case1">
						      		<img src="{$val[imgurl]}"/>
						      		<a  href="{$val[url]}" target="_blank"><h1>{$val[title]}</h1></a>
						      	</div>
						      </div>

                             
<!--
EOT;
}
echo <<<EOT
-->




			    </div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next">
			    	<button>下一个案例</button>
			    </div>
			    <div class="swiper-button-prev">
			    	<button>上一个案例</button>
			    </div>
			    <div class="casebt">
			    	<a  href="#div1"><button>立即预约</button></a>
			    </div>
			</div>

    	</div>	
    	<!--选择海岸就是选择信任-->
    	<div class="custom">
    		<p class="contenttitle">选择海岸就是选择信任</p>
    		<div class="company">
    			<ul>
	    			<li><img src="{$img_url}img/ls/zu01.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu02.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu03.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu04.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu05.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu06.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu07.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu08.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu09.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu10.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu11.jpg"/></li>
	    			<li><img src="{$img_url}img/ls/zu12.jpg"/></li>
	    		</ul>
    		</div>
    		
    	</div>
    	<!--海岸连锁店设计-->
    	<div class="anli">
    		<p class="contenttitle">海岸连锁店设计</p>
    		<div class="anlilist">
    			<ul class="content-list">
    			<!--<li>
    				<img src="{$img_url}img/ls/ic1.jpg"/>
					<span>
						<h1>良子足浴</h1>
					</span>
    			</li>
				<li>
					<img src="{$img_url}img/ls/ic2.jpg"/>
					<span>
						<h1>檀邑溪谷旅游度假村</h1>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/ls/ic3.jpg"/>
					<span>
						<h1>内向足疗馆</h1>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/ls/ic4.jpg"/>
					<span>
						<h1>千色水会</h1>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/ls/ic5.jpg"/>
					<span>
						<h1>丁香水岸设计</h1>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/ls/ic6.jpg"/>
					<span>
						<h1>前沿公社红酒会所</h1>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/ls/ic7.jpg"/>
					<span>
						<h1>融锦会客厅</h1>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/ls/ic8.jpg"/>
					<span>
						<h1>铜须水族主题会所</h1>
					</span>
				</li>-->
<!--
EOT;
foreach(methtml_getarray($lang_liansuo,'',hits,'','8','','','','16') as $key=>$val){
echo <<<EOT
-->
    				<li>
						<img src="{$val[imgurl]}"/>
						<span>
							<a  href="{$val[url]}" target="_blank"><h1>{$val[title]}</h1></a>
						</span>
					</li>		
                             
<!--
EOT;
}
echo <<<EOT
-->
    		</ul>
    		</div>
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
$metfeedback6=metlabel_feedback10(224);
echo <<<EOT
-->  
    {$metfeedback6}         				
       			</div>
       			
       		</div>
       	</div>
    	<!--footer-->
    	<div class="footer">
    		<div class="footer1">
				<div class="icon">
					<ul class="footericon">
						<li>
							<img src="{$img_url}img/ls/iconwx.jpg"/>
							<p>官方微信</p>
						</li>

						<li>
							<img src="{$img_url}img/ls/iconwb.jpg"/>
							<p>官方微博</p>
						</li>
					</ul>
				</div>
    		</div>
    		<div class="phone">
    			<div><img src="{$img_url}img/ls/dianhua.png"/></div>
    			<p>全国免费咨询热线：<span>400-879-1110</span></p>
    		</div>
    		<div class="p1">
						<p>CopRright © 1999-2018 | All Rrights Reserved.</p>
						<p class="lastp">京ICP备13049424号</p>
    	</div>
    </div>
	    <!--固定按钮-->
	    <!--<div class="fixfooter">
		<div class="fixer">
			<div class="button1">
				<button>
					<div><img src="{$img_url}img/ls/fixed3.png"/></div>
					<p>联系我们</p>
				</button>
			</div>
			<div class="button1">
				<button>
				<div><img src="{$img_url}img/ls/fixed4.png"/></div>
					<p>提交表单</p>
				</button>
			</div>
		</div>
	</div>-->
	</div>
	<!--  test  -->
	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>

<script src="{$img_url}js/ls/jquery-2.1.4.min.js"></script>
<script src="{$img_url}js/ls/rem.js"></script>
<script src="{$img_url}js/ls/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
    	autoplay:true,
    	loop: true,
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },
    });
</script>
</html>


<!--
EOT;
?>