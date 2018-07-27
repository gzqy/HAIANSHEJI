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
{$methtml_head} 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>咖啡馆设计</title>
<link rel="stylesheet" href="{$img_url}css/index_cf.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link rel="stylesheet" href="{$img_url}css/reset.css">
<link rel="stylesheet" href="{$img_url}css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_tianyuan.css">
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

    	<!--banner开始-->
        <div class="header">
            <div class="title">
                <p><span>-&nbsp</span>北京海岸成立于<strong>1999</strong>年 拥有精英设计师<strong>200</strong>余人<span>&nbsp-</span></p>
            </div>
            <div class="pic">
                <img src="{$img_url}img/bannerlogo.png" alt="">
            </div>
            <div class="con">
            	<ul class="list">
	            	<li>
	            		<img src="{$img_url}img/zhuti.png" alt="主题咖啡馆"/>
	            	</li>
	            	<li>
	            		<img src="{$img_url}img/liansuo.png" alt="连锁咖啡馆"/>
	            	</li>
	            	<li>
	                    <img src="{$img_url}img/coffee.png" alt="咖啡">
	                </li>
	            	<li>
	            		<img src="{$img_url}img/xiuxian.png" alt="休闲咖啡馆"/>
	            	</li>
	            	<li>
	            		<img src="{$img_url}img/tese.png" alt="特色咖啡馆"/>
	            	</li>
	            </ul>
            </div>
            <div class="cheak">
            	<a  href="#div1"><div class="button1"><button>立即预约</button></div></a>
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
		<!-- 咖啡馆设计经典案例 -->
		<div class="introduce">
			<p class="contenttitle">咖啡馆设计经典案例</p>
			<div class="appoint">
				<div class="appointment frist">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=151&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img1.png" alt=""/>
					 </a>
					</div>
					<div class="detail">
						<span>番禺煮糖间</span>
						<p>
							在考察完煮糖间的实际情况之后，结合归本之以理念，保留了原有工业遗址基础，将其打造一个复合多元化的咖啡馆。采用“以旧修旧”的设计手法，用更直接的....
						</p>
						<ul class="list-ment">
							<li>广州</li>
							<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					 <a href="{$index_url}product/showproduct.php?id=359&lang=cn" target="_blank"> 
						<img src="{$img_url}img/img2.png" alt=""/>
					 </a>
					</div>
					<div class="detail">
						<span>漫咖啡</span>
						<p>
							在整体混合结构的基础上，大胆的使用了原始材料和原顶配黑塑料造出归本独有的顶面；一系列精心挑选的绿植、配饰、桌椅空间增添了无穷的魅力；大范围的玻璃....
						</p>
						<ul class="list-ment">
							<li>河南·信阳</li>
							<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					 <a href="{$index_url}product/showproduct.php?id=115&lang=cn" target="_blank">  
						<img src="{$img_url}img/img3.png" alt=""/>
					 </a>
					</div>
					<div class="detail">
						<span>咖啡陪你</span>
						<p>
							俯视整个空间，色彩采用宁静舒适的色调，质感材料的运用转化为视觉上的享受，独特的铁艺护栏，创意感十足。充满街头气息的涂鸦风尚一直是年轻人的钟爱....
						</p>
						<ul class="list-ment">
							<li>北京·三里屯</li>
							<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment">
					<div class="draw">
					<a href="{$index_url}product/showproduct.php?id=113&lang=cn" target="_blank">  
						<img src="{$img_url}img/img4.png" alt=""/>
					 </a>
					</div>
					<div class="detail">
						<span>漫猫咖啡</span>
						<p>
							设计师郭准先生大胆开拓建筑风格，独特的归本设计理念，逆袭刻板的规则，大量运用自然元素、木质地板、红砖石、通透玻璃、芬芳花草，还有裸露的清水....
						</p>
						<ul class="list-ment">
							<li>西安·万达广场</li>
							<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="appoint">
				<div class="appointment last">
					<div class="draw">
					 <a href="http://m.haianzhuangshi.com/product/263-cn.html" target="_blank"> 
						<img src="http://oz8o3l2bg.bkt.clouddn.com/upload/201708/1503560487.jpg?imageView2/1/w/358/h/228/&x=358&y=228" alt=""/>
					 </a>  
					</div>
					<div class="detail">
						<span>上海猫王咖啡厅</span>
						<p>
							设计师郭准说，他设计的猫王咖啡馆位于小资的上海，拥有猫王身上那种特有的美式风格，自由洒脱，复古怀旧。想充分感受猫王的魅力吗，那就来猫王咖啡馆吧!
						</p>
						<ul class="list-ment">
							<li>成都·雅安</li>
							<li class="heartbeat "><a  href="#div1" class="mz">立即预约</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		<!-- 咖啡馆设计集锦 -->
		<div class="exhibition">
			<div class="exhibite">
				<p class="contenttitle">咖啡馆设计集锦</p>
				<div class="swiper-container">
					<div class="exhibition-list swiper-wrapper">
						<div class="swiper-slide">
							<ul>
								<a href="http://m.haianzhuangshi.com/product/375-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>

									<img  src="{$img_url}img/case1.png" alt="">
									<div>
										<p>U°咖啡（二店）</p>
										<i></i>
										<span>内蒙古</span>
									</div>
								</li>
								</a>

								<a href="http://m.haianzhuangshi.com/product/471-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
								

									<img  src="{$img_url}img/case2.png" alt="">
									<div>
										<p>ZOO COFFEE咖啡店</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
								</a>

								<a href="http://m.haianzhuangshi.com/product/416-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case3.png" alt="">
									<div>
										<p>SOME咖啡</p>
										<i></i>
										<span>上海大宁</span>
									</div>
								</li>
								</a>

								<a href="http://m.haianzhuangshi.com/product/178-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case4.png" alt="">
									<div>
										<p>逸美时光咖啡厅</p>
										<i></i>
										<span>河南</span>
									</div>
								</li>
								</a>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
							<a href="http://m.haianzhuangshi.com/product/373-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case5.png" alt="">
									<div>
										<p>U°咖啡厅（一店）</p>
										<i></i>
										<span>内蒙古</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/298-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case6.png" alt="">
									<div>
										<p>创客咖啡设计</p>
										<i></i>
										<span>南昌</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/71-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case7.png" alt="">
									<div>
										<p>See You咖啡厅</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/165-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case8.png" alt="">
									<div>
										<p>漫猫咖啡厅设计</p>
										<i></i>
										<span>河北保定</span>
									</div>
								</li>
							</a>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
							<a href="http://m.haianzhuangshi.com/product/112-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case9.png" alt="">
									<div>
										<p>小菊咖啡厅设计</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/200-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case10.png" alt="">
									<div>
										<p>漫猫咖啡咖啡馆设计</p>
										<i></i>
										<span>黑龙江</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/150-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case11.png" alt="">
									<div>
										<p>咖啡陪你设计</p>
										<i></i>
										<span>甘肃</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/130-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case12.png" alt="">
									<div>
										<p>漫猫咖啡设计</p>
										<i></i>
										<span>上海浦东</span>
									</div>
								</li>
							</a>
							</ul>
						</div>
						<div class="swiper-slide">
							<ul>
							<a href="http://m.haianzhuangshi.com/product/263-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case13.png" alt="">
									<div>
										<p>猫王咖啡厅设计</p>
										<i></i>
										<span>上海</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/244-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case14.png" alt="">
									<div>
										<p>尚睿·纯咖啡馆设计</p>
										<i></i>
										<span>天津</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/96-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case15.png" alt="">
									<div>
										<p>克拉恋人咖啡设计</p>
										<i></i>
										<span>北京</span>
									</div>
								</li>
							</a>

							<a href="http://m.haianzhuangshi.com/product/425-cn.html" title="U°咖啡厅设计（二店）" target="_self">
								<li>
									<img  src="{$img_url}img/case16.png" alt="">
									<div>
										<p>丁香水岸咖啡馆设计</p>
										<i></i>
										<span>沈阳</span>
									</div>
								</li>
							</a>
							</ul>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</div>
		<!-- 咖啡馆设计一步到位 -->

		<div class="case">
			<p class="contenttitle">咖啡馆设计一步到位</p>
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
    	<!--海岸咖啡馆设计-->
    	<div class="anli">
    		<p class="contenttitle">海岸咖啡馆设计</p>
    		<ul class="content-list">


<!--
EOT;
if($lang_cofe_ok){
$productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'','','',$lang_cofe_num,'','','','16') as $key=>$val){
echo <<<EOT
--> 
  					 
	    			<li>
	    			<a href="{$val[url]}" target="_blank">
	    				<img src="{$val[imgurl]}" alt="">
						<span>
							<h1>{$val[title]}</h1>
							<p>{$val[keywords]}</p>
						</span>
					</a>
	    			</li>
	    			
    			

<!--
EOT;
}
}
echo <<<EOT
-->	
				

    		</ul>
    		<div class="button"> <a href="{$index_url}product/list-174-cn.html" target="_blank"><button>更多咖啡馆设计案例</button></a></div>
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
<script src="{$img_url}js/sea.js" type="text/javascript"></script>
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