<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';

echo <<<EOT
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>餐饮设计</title>
    <link rel="stylesheet" href="{$img_url}css/cy/index.css">
    <link rel="stylesheet" href="{$img_url}css/cy/reset.css">
	<link rel="stylesheet" href="{$img_url}css/cy/swiper.min.css">
		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script language="JavaScript" type="text/javascript"> 


		function changeBtnable(){
		    $("#btn").removeAttr("disabled");
		}
		function changeBtndisable(){
		    $("#btn").attr("disabled","true");
		}
		function checkInput(){
		    var text = $("#para242").val();
		 	 var tex = $("#para243").val();
		  　　var r = /^\+?[1-9][0-9]*$/;　　//判断是否为正整数 
		    if(text==null||text.length !== 11 ||  r.test(txt) == false){
		    	
		    	
		    	changeBtndisable();
		    	
		    }
		}	
	
	 </script> 
	<script type="text/javascript">
	


	$(function(){
		
		$(".para242").blur(function(e){
			
		
			var txt =$(this).val();//当前值

			

			if(txt==null||txt.length <7)//判断是否为空或输入长度小于6个字符
			{
				
				$(this).attr('placeholder','请输入正确的手机号');
				
			  
			  
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para242");
			
				 $(this).attr("style", "border:1px solid green;border-radius: 0.1rem;") 
				}
	         });


			$(".para243").blur(function(e){
		
		
			var txt =$(this).val();//当前值
			　var r = /^\d+.*?/;　　//判断是否为正整数 
				
			if(txt==null || r.test(txt) == false )//判断是否为空或输入长度小于6个字符
			{
				
				$(this).attr('placeholder','请输入正确的数字');
			
			   
			    var attr = document.getElementsByClassName("para243");
				$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			}
			else{
				var attr = document.getElementsByClassName("para243");
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

		      $(".para241").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null || txt.length <2 )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入您的名字');
						    var attr = document.getElementsByClassName("para241");
							$(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
						}else{
							var attr = document.getElementsByClassName("para241");
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
            		<img src="{$img_url}img/bannerlogocy.png"/>
            	</div>
            	<div class="banner-zi">
            		<img src="{$img_url}img/banner-zi.png"/>
            	</div>
            	<div class="pone">
            		<p>连锁餐厅设计 | 主题餐厅设计 | 休闲餐厅设计 | 特色小店设计</p>
            	</div>
            	<div class="button">
            		<button>立即咨询详情</button>
            	</div>
            	<div class="ptwo">
            		<p>北京海岸设计成立于1999年</p>
            		<p>拥有精英团队设计师300余人</p>
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
		<!-- 餐饮设计经典案例 -->
		<div class="introduce">
			<p class="contenttitle">餐饮设计经典案例</p>
			<div class="appoint">
				<div class="appointment frist">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=85&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img1.png" alt=""/>
					</a>
					</div>
					<div class="detail">
						<span>归隐酒店SHANG</span>
						<p>大量几何切割设计结合绿植营造出了“山”的效果，通过对光线的把控，使室内气氛给人以安逸感，原木与绿色植物的应用将自然气息环绕在人们周围。整个大厅......
						</p>
						<ul class="list-ment">
							<li>山东·潍坊</li>
							<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=91&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img2.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>田里酒店餐厅设计</span>
					<p>步入田里酒店，宾客将会体验一场以时空为线索，由自然和心灵构成的艺术之旅。室内运用了大量的归本主义风格家具、吊挂艺术装置、雕塑、艺术画件及摆件......
					</p>
					<ul class="list-ment">
						<li>山西·榆次</li>
						<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=256&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img3.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>娄三少春饼店</span>
					<p>
						原木和水泥，让设计“活”起来，精美的瓷器、生机的绿植、
						以及错落有致的鸟笼装饰，整个空间弥漫着浓郁的北京味道。
						空间主色调以原木色为主，简洁自然的..
					</p>
					<ul class="list-ment">
						<li>北京</li>
						<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=402&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img4.png" alt=""/>
					</a>
					</div>
					<div class="detail">
					<span>隐逸水镇餐厅设计</span>
					<p>
						将丰富的哲理与生活态度蕴含在室内空间当中，
						以原木、植物、铁艺等不同设计元素为主题，对空间进行重新
						解构与创新演绎，赋予空间新的生命力，同时选用适......
					</p>
					<ul class="list-ment">
						<li>云南·丘北县</li>
						<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment last">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=382&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img5.png" alt=""/>
						</a>
					</div>
					<div class="detail">
					<span>红树林和风阁局酒屋</span>
					<p>
						归本主义的设计理念，以木、石、竹等自然材质为主，
						用拟意的手法，表达玄妙深邃的意境，另整个空间宁静，
						简朴。采用不规则的鹅卵石用作地面装饰，飞石布...
					</p>
					<ul class="list-ment">
						<li>山东</li>
						<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
					</ul>
				</div>
				</div>

			</div>
		</div>
		<!-- 餐饮设计集锦 -->
		<div class="exhibition">
			<div class="exhibite">
				<p class="contenttitle">餐饮设计集锦</p>
				<div class="swiper-container">
					<div class="exhibition-list swiper-wrapper">
						<div class="swiper-slide">
							<ul>
								<li>
								<a href="{$index_url}product/showproduct.php?id=45&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case1.png" alt="">
									</a>

									<div>
										<p>李嘉嘉串串香火锅店</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=272&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case2.png" alt="">
									</a>

									<div>
										<p>芙蓉壹号餐厅</p>
										<i></i>
										<span>山东</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=240&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case3.png" alt="">
									</a>

									<div>
										<p>拾味馆餐厅</p>
										<i></i>
										<span>海南</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=4882&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case4.png" alt="">
									</a>

									<div>
										<p>侗家食府（工厂店）</p>
										<i></i>
										<span>河南</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
								<a href="{$index_url}product/showproduct.php?id=128&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case5.png" alt="">
									</a>

									<div>
										<p>汉拿山烤肉店</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=397&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case6.png" alt="">
									</a>

									<div>
										<p>布拉格餐厅</p>
										<i></i>
										<span>天津</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=381&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case7.png" alt="">
									</a>

									<div>
										<p>铜城味道美食城</p>
										<i></i>
										<span>甘肃</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=374&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case8.png" alt="">
									</a>

									<div>
										<p>海味当家餐厅</p>
										<i></i>
										<span>辽宁</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
								<a href="{$index_url}product/showproduct.php?id=493&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case9.png" alt="">
									</a>

									<div>
										<p>炉食铺餐厅</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=124&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case10.png" alt="">
									</a>

									<div>
										<p>北太平庄福口居火锅店</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=238&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case11.png" alt="">
									</a>

									<div>
										<p>冰煮羊火锅店</p>
										<i></i>
										<span>内蒙古</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=260&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case12.png" alt="">
									</a>

									<div>
										<p>卢布里烤肉餐厅</p>
										<i></i>
										<span>内蒙古</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
								<li>
								<a href="{$index_url}product/showproduct.php?id=405&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case13.png" alt="">	
									</a>

									<div>
										<p>红树林酒吧餐厅</p>
										<i></i>
										<span>三亚</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=139&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case14.png" alt="">
								</a>
									<div>
										<p>虾说八道餐厅</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=138&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case15.png" alt="">
								</a>
									<div>
										<p>魏老香烤鱼餐厅</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								<li>
								<a href="{$index_url}product/showproduct.php?id=204&lang=cn" target="_blank"> 
									<img src="{$img_url}img/case16.png" alt="">
									</a>
									<div>
										<p>苒时光餐厅</p>
										<i></i>
										<span>湖南</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</div>
		<!-- 餐饮设计一步到位 -->
		<div class="case">
			<p class="contenttitle">餐饮设计一步到位</p>
			<div class="ilist">
				<ul>
				<li>
                            <div ><img src="{$img_url}canyin/z1.png" alt="沟通咨询" title="餐饮厅设计" ></div>
                            <p>沟通咨询</p>
                            <span>提供专业建议</span>
                   </li>
					<li>
                           <div><img src="{$img_url}canyin/s2.png" alt="定金勘测" title="餐饮厅设计"></div>
                            <p>定金勘测</p>
                           <span>品牌的保证&nbsp</span>
                    </li>
					<li>
                            <div ><img src="{$img_url}canyin/s3.png" alt="设计意向" title="餐饮厅设计" ></div>
                            <p>设计意向&nbsp</p>
                            <span>确定需求&nbsp&nbsp</span>
                    </li>
					<li>
                            <div ><img src="{$img_url}canyin/x1.png" alt="施工图" title="餐饮厅设计" ></div>
                           <p>&nbsp效果图&nbsp</p>
                            <span>最直观的设计效果</span>
                    </li>
					<li>
                            <div ><img src="{$img_url}canyin/x2.png" alt="施工图" title="餐饮厅设计" ></div>
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
    	<!--海岸餐饮设计-->
    	<div class="anli">
    		<p class="contenttitle">海岸餐饮设计</p>
    		<ul class="content-list">
    			<li>
    			<a href="{$index_url}product/showproduct.php?id=403&lang=cn" target="_blank"> 
    				<img src="{$img_url}img/ic1.jpg"/>
    				</a>
					<span>
						<h1>红树林儿童海鲜餐厅</h1>
					</span>
    			</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=166&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic2.jpg"/>
					</a>
					<span>
						<h1>约克音乐西餐厅</h1>
					</span>
				</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=354&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic3.jpg"/>
					</a>
					<span>
						<h1>闹他餐厅</h1>
					</span>
				</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=168&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic4.jpg"/>
					</a>
					<span>
						<h1>侗家食府餐饮店</h1>
					</span>
				</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=414&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic5.jpg"/>
					</a>
					<span>
						<h1>匠子烤鱼餐厅</h1>
					</span>
				</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=188&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic6.jpg"/>
					</a>
					<span>
						<h1>舒记鱼火锅餐厅</h1>
					</span>
				</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=207&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic7.jpg"/>
					</a>
					<span>
						<h1>鱼常见餐厅</h1>
					</span>
				</li>
				<li>
				<a href="{$index_url}product/showproduct.php?id=141&lang=cn" target="_blank"> 
					<img src="{$img_url}img/ic8.jpg"/>
					</a>
					<span>
						<h1>魏老香马驹桥店</h1>
					</span>
				</li>
    		</ul>
    		<div class="button"> <a href="{$index_url}product/list-175-cn.html" target="_blank"><button>更多餐饮设计案例</button></a></div>
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