<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';
echo <<<EOT
-->
{$methtml_head} 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>网咖设计</title>
    <link rel="stylesheet" href="{$img_url}css/wk/index.css">
    <link rel="stylesheet" href="{$img_url}css/wk/reset.css">
	<link rel="stylesheet" href="{$img_url}css/wk/swiper.min.css">
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
        		<div class="banner-zi">
	            	<img src="{$img_url}img/banner-zi.png"/>
	            </div>
	            <div class="bannerlogo">
	            	<img src="{$img_url}img/bannerlogowk.png"/>
	            </div>
	            <div class="pone">
	            	<p>主题网咖设计 | 游戏网咖设计 | 个性网咖设计 | 高端网咖设计</p>
	            </div>
	            <div class="button">
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
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}         			

       			</div>
       			
       		</div>
       	</div> 
		<!-- 网咖设计经典案例 -->
		<div class="introduce">
			<p class="contenttitle">网咖设计经典案例</p>
			<div class="appoint">
				<div class="appointment frist">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=317&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img1.png" alt=""/>
					</a>
					</div>
					<div class="detail">
						<span>冰雨网咖</span>
						<p>以美式自由文化精神为主线，以归本主义理念为辅线，运用网络娱乐、咖啡休闲、互动社交的组合方式，将简约时尚的地中海风情贯穿其中，整体有序的功能划分......
						</p>
						<ul class="list-ment">
							<li>江西·景德镇</li>
							<li><a  href="#div1">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=315&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img2.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>海角七号网咖</span>
					<p>以归本主义为设计理念，运用大量的自然元素，营造出一种神秘时尚的艺术空间。复古的暗色系并不代表颓废，而是表达出对时代的诉求。粗糙的砖墙、裸露的天花......
					</p>
					<ul class="list-ment">
						<li>湖北·襄阳</li>
						<li><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=446&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img3.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>漫海岸网咖</span>
					<p>
						采用水泥、锈铁、木头等自然材料的相互糅合来创造纯粹的感受。在细节的处理上，通过绿植的选择、灯光的渲染、游戏人物造型的陈列，勾画出一个完整的空间设计......
					</p>
					<ul class="list-ment">
						<li>广东·潮州</li>
						<li><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img4.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>旗鱼网咖</span>
					<p>
						在设计中，郭准先生打破常规、一改传统网咖模式，“以一块铁的视角，看待一个零件的涅槃”作为主线，将充满创意的灵感融入空间每一处细节。走进空间，加工......
					</p>
					<ul class="list-ment">
						<li>辽宁·大连</li>
						<li><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment last">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=314&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img5.png" alt=""/>
						</a>
					</div>
					<div class="detail">
					<span>798网咖</span>
					<p>
						在空间设计中，以归本主义为设计理念，以“钢、木、砖、石、玻璃、混凝土”六大元素为设计语言，结合点线面的排列对内部空间进行“表面切割”，以色彩、灯光......
					</p>
					<ul class="list-ment">
						<li>河南·洛阳</li>
						<li><a  href="#div1">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
		</div>
		<!-- 网咖设计集锦 -->
		<div class="exhibition">
			<div class="exhibite">
				<p class="contenttitle">网咖设计集锦</p>
				<div class="swiper-container">
					<div class="exhibition-list swiper-wrapper">
						<div class="swiper-slide">
							<ul>
								<li>
									<a href="{$index_url}product/showproduct.php?id=295&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case1.png" alt="">
										</a>
									<div>
										<p>优E客网咖</p>
										<i></i>
										<span>武汉</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=320&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case2.png" alt="">
										</a>
									<div>
										<p>震·网咖（二店）</p>
										<i></i>
										<span>天津</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=436&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case3.png" alt="">
										</a>
									<div>
										<p>格调网咖</p>
										<i></i>
										<span>乌海</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=321&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case4.png" alt="">
										</a>
									<div>
										<p>蓝色时光网咖</p>
										<i></i>
										<span>重庆</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
									<a href="{$index_url}product/showproduct.php?id=394&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case5.png" alt="">
										</a>
									<div>
										<p>旗鱼网咖</p>
										<i></i>
										<span>大连</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=318&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case6.png" alt="">
										</a>
									<div>
										<p>明禄网咖</p>
										<i></i>
										<span>旅顺</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=312&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case7.png" alt="">
										</a>
									<div>
										<p>G网咖</p>
										<i></i>
										<span>大同</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=320&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case8.png" alt="">
										</a>
									<div>
										<p>震·网咖（一店）</p>
										<i></i>
										<span>天津</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
									<a href="{$index_url}product/showproduct.php?id=311&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case9.png" alt="">
										</a>
									<div>
										<p>漫威网咖</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=320&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case10.png" alt="">
										</a>
									<div>
										<p>震·网咖（三店）</p>
										<i></i>
										<span>天津</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=319&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case11.png" alt="">
										</a>
									<div>
										<p>飞马网咖</p>
										<i></i>
										<span>厦门</span>
									</div>
								</li>
								<li>
									<a href="{$index_url}product/showproduct.php?id=469&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case12.png" alt="">
									</a>
									<div>
										<p>MEW网咖</p>
										<i></i>
										<span>兰州</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</div>
		<!-- 网咖设计一步到位 -->
		<div class="case">
			<p class="contenttitle">网咖设计一步到位</p>
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
    	<!--海岸网咖设计-->
    	<div class="anli">
    		<p class="contenttitle">海岸网咖设计</p>
    		<ul class="content-list">
    			<li>
    				<a href="{$index_url}product/showproduct.php?id=469&lang=cn" target="_blank"> 
    				<img src="{$img_url}img/ic1.jpg"/>
					</a>
					<span>
						<h1>MEW网咖</h1>
					</span>
    			</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=313&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic2.jpg"/>
					</a>
					<span>
						<h1>漫海岸网咖</h1>
					</span>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=436&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic3.jpg"/>
					</a>
					<span>
						<h1>格调网咖</h1>
					</span>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=314&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic4.jpg"/>
					</a>
					<span>
						<h1>798网咖</h1>
					</span>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=311&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic5.jpg"/>
					</a>
					<span>
						<h1>漫威网咖</h1>
					</span>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=315&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic6.jpg"/>
					</a>
					<span>
						<h1>海角七号网咖</h1>
					</span>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=316&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic7.jpg"/>
					</a>
					<span>
						<h1>辛巴网咖</h1>
					</span>
				</li>
				<li>
					<a href="{$index_url}product/showproduct.php?id=318&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic8.jpg"/>
					</a>
					<span>
						<h1>明禄网咖</h1>
					</span>
				</li>
    		</ul>
    		<div class="button"> <a href="{$index_url}product/list-169-cn.html" target="_blank"><button>更多网咖设计案例</button></a></div>
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
    	<div class="footer">
    		<div class="footer1">
				<div class="icon">
					<ul class="footericon">
						<li>
							<img src="{$img_url}img/iconwx.jpg"/>
							<p>官方微信</p>
						</li>

						<li>
							<img src="{$img_url}img/iconwb.jpg"/>
							<p>官方微博</p>
						</li>
					</ul>
				</div>
				<!--<div class="p1">
						<p>CopRright © 1999-2018 | All Rrights Reserved.<br /> 京ICP备13049424号</p>
				</div>-->
    		</div>
    		<div class="phone">
    			<div><img src="{$img_url}img/dianhua.png"/></div>
    			<p>全国免费咨询热线：<span>400-879-1110</span></p>
    		</div>
    		<div class="p1">
					<!--<p>CopRright © 1999-2018 北京海岸九九建筑装饰设计有限公司 <br />All Rrights Reserved. 京ICP备13049424号</p>-->
						<p>CopRright © 1999-2018 | All Rrights Reserved.<br /> 京ICP备13049424号</p>
						<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273855638'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1273855638%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    	</div>
    </div>

</body>
<script src="{$img_url}js/jquery-2.1.4.min.js"></script>
<script src="{$img_url}js/rem.js"></script>
<script src="{$img_url}js/swiper.min.js"></script>
<script>
    var mySwiper = new Swiper ('.exhibition .swiper-container', {
        direction: 'horizontal',
        loop: true,
		autoplay:true,
		followFinger:true,
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
			clickable:true
        }
    });
    var swiper = new Swiper('.haian .swiper-container', {
    	direction: 'horizontal',
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