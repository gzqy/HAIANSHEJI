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
    <title>书店设计</title>
    <link rel="stylesheet" href="{$img_url}css/sd.css">
    <link rel="stylesheet" href="{$img_url}css/sd/reset.css">
	<link rel="stylesheet" href="{$img_url}css/sd/swiper.min.css">
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
    <div id="wrap">
    	<!--banner开始-->
        <div class="header">
        	<div class="banner">
        		<div class="logo">
	        		<img src="{$img_url}img/sd/bannerlogo.png"/>
	        	</div>
	        	<div class="hr"></div>
	        	<div class="banner-zi">
	        		<p><span>■ </span>&nbsp;主题书店 &nbsp;&nbsp;<span>■ </span>&nbsp;特色书店 &nbsp;&nbsp;<span>■ </span>&nbsp;个性书店&nbsp;&nbsp; <span>■ </span>&nbsp;儿童书店 &nbsp;&nbsp; <span>■ </span>&nbsp;图书馆</p>
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
		 	<p  class="contenttitle">书店设计空间区域</p>
		 	<div class="spacebox">
		 		<ul>
			 		<li class="spaceli1">
			 			<div class="space01">
			 				<h1>书籍区</h1>
			 			<p>不同的位置，书店产品的配置，比例不一样。切合实际的规划功能区域，既能呈现书籍的种类，又能凸显书籍区阅览的独特性。</p>
			 			</div>
			 			
			 		</li>
			 		<li class="spaceli2">
			 			<div class="space02">
			 				<h1>休闲区</h1>
			 			<div >
			 				
			 			</div><p>作为阅读体验的延伸，以浓郁的咖啡、精致的西点、清新的茶饮为主要形态，为消费者提供了一个慢呆书适的阅读环境和交流空间。</p>
			 			</div>
			 			
			 		</li>
			 		<li class="spaceli3">
			 			<div class="space03">
			 			<h1>精品区</h1>
			 			<p>这里是一个大众的艺术舞台，这里有时尚前沿的艺术作品，也有两两自己的文创产品，效率手册、咖啡杯、情绪包、手工布袋、吉祥物、果壳…</p>
			 			</div>
			 			
			 		</li>
			 		<li class="spaceli4">
			 			<div class="space04">
			 				<h1>社交沙龙</h1>
			 			<p>为了给更多的人带来对生活的理解和启发，这里定期推出各种文化体验活动，打造了一个文化生活载体、社交共享平台。</p>
			 			</div>
			 			
			 		</li>
			 	</ul>
		 	</div>
		 	
		 </div>
    	<!--设计原则-->
    	<div class="principle">
    		<p  class="contenttitle">书店设计原则</p>
    		<div class="principlewrap">
	    		<div class="principlebox">
	    			<div class="principle00 principle01">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/sd/shudian.png"/>
	    				</div>
	    				<div class="principle001">
	    					<h1>书店区域</h1>
	    					<p>每个书店所处的地理位置、环境和读者结构不一样，各书店服务区的读者购买习惯可能是不一样的，要考虑读者选购习惯，同时要根据这个习惯设计读者的购书路线。</p>
	    				</div>
	    				
	    			</div>
	    			<div class="principle00 principle02">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/sd/shujia.png"/>
	    				</div>
	    				<div class="principle001">
	    				<h1>书架摆放</h1>
	    				<p>书架摆放要合理，尽量不要让读者走重复路线，还要考虑在主通道两侧位置合理布置主打商品，因为主打品种占图书销售额比例是比较大的，把这些图书陈列在主通道上。</p>
	    				</div>
	    			</div>
	    			<div class="principle00 principle03">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/sd/xiuxi.png"/>
	    				</div>
	    				<div class="principle001">
	    				<h1>休息座位</h1>
	    				<p>书墩是一个很好的促销方式，但摆得过多过滥，反而适得其反，在主通道上适当摆放一些畅销或是特色图书可以引导读者按照设计路线去行走，同时促进图书销售额。</p>
	    				</div>
	    			</div>
	    			<div class="principle00 principle04">
	    				<div class="imgbox">
	    					<img src="{$img_url}img/sd/yinyue.png"/>
	    				</div>
	    				<div class="principle001">
	    				<h1>背景音乐</h1>
	    				<p>音乐在卖场中扮演着十分重要的角色，但只能作为背景乐而发挥作用，千万不能让它“喧宾夺主”。 </p>
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
	    				<p class="severp1">BOOKSTORE<br />DESIGN</p>
	    				<p>书店设计</p>
	    			</div>
	    			<div class="serve_00 serve_02">
	    				<p class="severp1">SHELF<br />LAYOUT</p>
	    				<p>布局设计</p>
	    			</div>
	    			<div class="serve_00 serve_03">
	    				<p class="severp1">SPACE<br />DESIGN</p>
	    				<p>空间设计</p>
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
	    				<p class="severp1">DISPLAY<br />AND BOOKS</p>
	    				<p>书籍陈列</p>
	    			</div>
	    			<div class="serve_00 serve_07">
	    				<p class="severp1">IMAGE<br />WALL</p>
	    				<p>形象墙设计</p>
	    			</div>
	    			<div class="serve_00 serve_08">
	    				<p class="severp1">TRADEMARK<br />DESIGN</p>
	    				<p>招牌设计</p>
	    			</div>
	    			<div class="serve_00 serve_09">
	    				<p class="severp1">LEISURE<br />SPACE</p>
	    				<p>休闲空间设计</p>
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
    						<img src="{$img_url}img/sd/liaojie.png"/>
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
    		<p  class="contenttitle">书店设计案例赏析</p>
    		<div class="swiper-container">
			    <div class="swiper-wrapper">
<!--
EOT;
foreach(methtml_getarray($lang_shudian,'',hits,'','8','','','','16') as $key=>$val){
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

			     <!-- <div class="swiper-slide">
			      	<div class="case1">
			      		<img src="{$img_url}img/sd/case1.jpg"/>
			      		<h1>新华书店</h1>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<img src="{$img_url}img/sd/case2.jpg"/>
			      		<h1>知一书店</h1>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<img src="{$img_url}img/sd/case3.jpg"/>
			      		<h1>朔州大学书店</h1>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<div class="caseimg"><img src="{$img_url}img/sd/case4.jpg"/></div>
			      		<h1>新华阅读客厅</h1>
			      	</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="case1">
			      		<div class="caseimg"><img src="{$img_url}img/sd/case5.jpg"/></div>
			      		<h1>阅悦书店</h1>
			      	</div>
			      </div>-->

			    </div>
			    <!-- Add Arrows -->
			    <div>
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
	    			<li><img src="{$img_url}img/sd/zu01.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu02.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu03.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu04.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu05.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu06.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu07.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu08.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu09.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu10.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu11.jpg"/></li>
	    			<li><img src="{$img_url}img/sd/zu12.jpg"/></li>
	    		</ul>
    		</div>
    		
    	</div>
    	<!--海岸设计-->
    	<div class="anli">
    		<p class="contenttitle">海岸书店设计</p>
    		<div class="anlilist">
    			<ul class="content-list">
<!--
EOT;
$desc = array(
  "北京",
  "山西",
  "湖南",
  "山西",
  "黑龙江",
  "北京",
  "山西",
  "黑龙江"
);
foreach(methtml_getarray($lang_shudian,'',hits,'','8','','','','16') as $key=>$val){
echo <<<EOT
-->
    				<li>
						<img src="{$val[imgurl]}"/>
						<span>
							<a  href="{$val[url]}" target="_blank"><h1>{$val[title]}</h1></a>
							 <p>{$desc[$key]}</p>
						</span>
					</li>		
                             
<!--
EOT;
}
echo <<<EOT
-->
    			<!--<li>
    				<img src="{$img_url}img/sd/ic1.jpg"/>
					<span>
						<h1>新华书店</h1>
						<p>北京</p>
					</span>
    			</li>
				<li>
					<img src="{$img_url}img/sd/ic2.jpg"/>
					<span>
						<h1>田森图书馆</h1>
						<p>山西</p>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/sd/ic3.jpg"/>
					<span>
						<h1>悦阅书店</h1>
						<p>湖南</p>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/sd/ic4.jpg"/>
					<span>
						<h1>朔州大学书店</h1>
						<p>山西</p>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/sd/ic5.jpg"/>
					<span>
						<h1>黑河图书馆</h1>
						<p>黑龙江</p>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/sd/ic6.jpg"/>
					<span>
						<h1>单向空间书店</h1>
						<p>北京</p>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/sd/ic7.jpg"/>
					<span>
						<h1>新华阅读课厅</h1>
						<p>山西</p>
					</span>
				</li>
				<li>
					<img src="{$img_url}img/sd/ic8.jpg"/>
					<span>
						<h1>知一书店</h1>
						<p>黑龙江</p>
					</span>
				</li>-->
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
							<img src="{$img_url}img/sd/iconwx.jpg"/>
							<p>官方微信</p>
						</li>

						<li>
							<img src="{$img_url}img/sd/iconwb.jpg"/>
							<p>官方微博</p>
						</li>
					</ul>
				</div>
    		</div>
    		<div class="phone">
    			<div><img src="{$img_url}img/sd/dianhua.png"/></div>
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
					<div><img src="{$img_url}img/sd/fixed3.png"/></div>
					<p>联系我们</p>
				</button>
			</div>
			<div class="button1">
				<button>
				<div><img src="{$img_url}img/sd/fixed4.png"/></div>
					<p>提交表单</p>
				</button>
			</div>
		</div>
	</div>-->
	</div>
</body>
<script src="{$img_url}js/sd/jquery-2.1.4.min.js"></script>
<script src="{$img_url}js/sd/rem.js"></script>
<script src="{$img_url}js/sd/swiper.min.js"></script>
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