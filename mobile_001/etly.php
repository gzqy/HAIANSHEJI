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
		<link rel="stylesheet" href="{$img_url}css/etly/common.css">
		<link rel="stylesheet" href="{$img_url}css/etly/styles.css">
		<link rel="stylesheet" href="{$img_url}css/etly/swiper.min.css">
		<script src="{$img_url}js/etly/jquery-1.11.0.min.js"></script>
		<script src="{$img_url}js/etly/swiper.min.js"></script>
		<script src="{$img_url}js/etly/publicRem.js"></script>
		<title>儿童乐园</title>
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
	
{$lang_foot_cnzz}
</head>
<body>
  <div class="children_paradise">
    <div class="banner">
      <div class="container">
        <img class="logo" src="{$img_url}img/etly/cp_logo.png" alt="">
        <img class="txt" src="{$img_url}img/etly/cp_banner_title.png" alt="">
        <div class="kind">
          <div class="item">室内乐园</div>
          <div class="item">室外乐园</div>
          <div class="item">梦幻乐园</div>
          <div class="item">水上乐园</div>
        </div>
       <a  href="#div1"><img class="down" src="{$img_url}img/etly/cp_banner_down.png" alt=""></a>
      </div>
    </div>
    <div class="cp_type">
      <div class="content">
        <div class="item">
          <div class="project">
            <img class="icon" src="{$img_url}img/etly/cp_type_inside.png" alt="">
            <span class="tip">室内乐园</span>
          </div>
          <div class="hate"><img src="{$img_url}img/etly/cp_type_hate.png" alt=""></div>
        </div>
        <div class="item">
          <div class="project">
            <img class="icon" src="{$img_url}img/etly/cp_type_outside.png" alt="">
            <span class="tip">室外乐园</span>
          </div>
          <div class="hate"><img src="{$img_url}img/etly/cp_type_hate.png" alt=""></div>
        </div>
        <div class="item">
          <div class="project">
            <img class="icon" src="{$img_url}img/etly/cp_type_dream.png" alt="">
            <span class="tip">梦幻乐园</span>
          </div>
          <div class="hate"><img src="{$img_url}img/etly/cp_type_hate.png" alt=""></div>
        </div>
        <div class="item">
          <div class="project">
            <img class="icon" src="{$img_url}img/etly/cp_type_water.png" alt="">
            <span class="tip">水上乐园</span>
          </div>
          <div class="hate"><img src="{$img_url}img/etly/cp_type_hate.png" alt=""></div>
        </div>
        <div class="item">
          <div class="project">
            <img class="icon" src="{$img_url}img/etly/cp_type_qfrindes.png" alt="">
            <span class="tip">q友乐园</span>
          </div>
          <div class="hate"><img src="{$img_url}img/etly/cp_type_hate.png" alt=""></div>
        </div>
        <div class="item">
          <div class="project">
            <img class="icon" src="{$img_url}img/etly/cp_type_nature.png" alt="">
            <span class="tip">自然乐园</span>
          </div>
          <div class="hate"><img src="{$img_url}img/etly/cp_type_hate.png" alt=""></div>
        </div>
      </div>
      <div class="title">
        <div class="title_txt">
          儿童乐园的类型
          <em></em>
        </div>
      </div>
    </div>
    <div class="second_case">
      <div class="title">
        <div class="title_txt">
          儿童乐园的成功案例
          <em></em>
        </div>
      </div>
      <div class="container">
        <div class="sea_case">
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=403&lang=cn">儿童海鲜餐厅</a></div>
            <div class="details">每个孩子都是派下凡间的天使他们的笑容便是世间最美的绽放打造了一个充满欢声笑语的儿童王国。</div>
          </div>
          <img src="{$img_url}img/etly/cp_second_pic.png" alt="">
        </div>
        <div class="case_details">
          <div class="item">
            <div class="item_content">本案的亮点就在于设计师通过绚丽的颜色激发孩子内心探索的欲望。</div>
            <em></em>
          </div>
          <div class="item">
            <div class="item_content">儿童喜爱的元素遵循归本主义的同时满足孩子的好奇心。</div>
            <em></em>
          </div>
          <div class="item">
            <div class="item_content">以水泥、原木为设计材料进行简单的布局，呈现出时尚可爱的空间模式。</div>
            <em></em>
          </div>
        </div>
        <em class="second_bg"></em>
        <div class="bot_bg"></div>
      </div>
    </div>
    <div class="third_case">
      <div class="title">
        <div class="title_txt">
          儿童乐园的精品案例
          <em></em>
        </div>
      </div>
      <div class="container">
        <div class="sea_case">
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=219&lang=cn">廊坊鸿坤儿童友好社区 </a></div>
            <div class="details">其设计主题为“童年”。设计师以“动物”为切入点 ， 让孩子熟悉和喜爱动物。同时，通过故事、展示、游戏等多种不同的体验来满足孩子探索未来的愿望。</div>
          </div>
          <div class="pic">
            <img src="{$img_url}img/etly/cp_third_case1.png" alt="">
            <em class="oval"></em>
            <em class="sub_pic"></em>
          </div>
        </div>
        <div class="sea_case">
          <div class="pic">
            <img src="{$img_url}img/etly/cp_third_case2.png" alt="">
            <em class="oval"></em>
            <em class="sub_pic"></em>
          </div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=36&lang=cn">青岛红树林度假世界</a> </div>
            <div class="details">别具一格的设计，千奇百怪的动物绚丽缤纷的色彩，设计师营造了一个欢乐，奇幻，梦想的氛围，让所有的小朋友爱上了这里。</div>
          </div>
        </div>
        <div class="sea_case">
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=82&lang=cn">隐逸水镇•大堂/儿童DIY</a></div>
            <div class="details">儿童DIY区围绕海洋主题,进行设计生活功能的重置，独具一格的设计缤纷的海洋生物，如梦似幻，这里是孩子们创意的海洋天堂。</div>
          </div>
          <div class="pic">
            <img src="{$img_url}img/etly/cp_third_case3.png" alt="">
            <em class="oval"></em>
            <em class="sub_pic"></em>
          </div>
        </div>
        <div class="sea_case">
          <div class="pic">
            <img src="{$img_url}img/etly/cp_third_case4.png" alt="">
            <em class="oval"></em>
            <em class="sub_pic"></em>
          </div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=220&lang=cn">北京儿童摄影</a></div>
            <div class="details">楼梯的设计，采用的是通透的铁艺与原木结合的造型。几株色彩斑斓的植物点缀，使空间更显遒劲且富有生命力。</div>
          </div>
        </div>
      </div>
    </div>
    <div class="excellent_case">
      <div class="title">
        <div class="title_txt">
          儿童乐园的珍品案例
          <em></em>
        </div>
      </div>
      <div class="content">
        <div class="case">
          <div class="pic"><img src="{$img_url}img/etly/cp_excellent_case1.png" alt=""></div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=219&lang=cn">湖北儿童摄影</a></div>
            <span class="details">项目地址：湖北</span>
            <span class="details">项目类型：室内设计</span>
            <span class="details">使用面积：1821㎡</span>
            <span class="details">主创团队：北京海岸设计</span>
            <em></em>
          </div>
        </div>
        <div class="case">
          <div class="pic"><img src="{$img_url}img/etly/cp_excellent_case2.png" alt=""></div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=350&lang=cn">度假儿童海鲜餐厅</a></div>
            <span class="details">项目地址：山东</span>
            <span class="details">项目类型：室内设计</span>
            <span class="details">使用面积：1821㎡</span>
            <span class="details">主创团队：北京海岸设计</span>
            <em></em>
          </div>
        </div>
        <div class="case">
          <div class="pic"><img src="{$img_url}img/etly/cp_excellent_case3.png" alt=""></div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=219&lang=cn">鸿坤儿童友好社区</a></div>
            <span class="details">项目地址：河北</span>
            <span class="details">项目类型：室内设计</span>
            <span class="details">使用面积：1800㎡</span>
            <span class="details">主创团队：北京海岸设计</span>
            <em></em>
          </div>
        </div>
        <div class="case">
          <div class="pic"><img src="{$img_url}img/etly/cp_excellent_case4.png" alt=""></div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=2200&lang=cn">星光贝贝儿童摄影</a></div>
            <span class="details">项目地址：北京</span>
            <span class="details">项目类型：室内设计</span>
            <span class="details">使用面积：571㎡</span>
            <span class="details">主创团队：北京海岸设计</span>
            <em></em>
          </div>
        </div>
        <div class="case">
          <div class="pic"><img src="{$img_url}img/etly/cp_excellent_case5.png" alt=""></div>
          <div class="discribe">
            <div class="subtitle"><a href="{$index_url}product/showproduct.php?id=403&lang=cn">儿童海鲜餐厅设计</a></div>
            <span class="details">项目地址：山东</span>
            <span class="details">项目类型：室内设计</span>
            <span class="details">使用面积：1821㎡</span>
            <span class="details">主创团队：北京海岸设计</span>
            <em></em>
          </div>
        </div>
      </div>
    </div>
    <div class="cp_success_case">
      <div class="cp_success_title">
        <div class="case_discribe">
          <div class="title">
            <div class="title_txt">
              儿童乐园的成功案例
              <em></em>
            </div>
          </div>
          <div class="case_type">
            <div class="case">大堂儿童DIY</div>
            <div class="case">大堂儿童DIY</div>
            <div class="case">大堂儿童DIY</div>
          </div>
        </div>
      </div>
      <div class="cp_success_content">
        <div class="container">
          <div class="item">
            <div class="item_content"> 
              <p class="caption"><a href="{$index_url}product/showproduct.php?id=219&lang=cn">湖北儿童摄影</a></p>
            </div>
            <em></em>
          </div>
          <div class="item">
            <div class="item_content"> 
              <p class="caption"><a href="{$index_url}product/showproduct.php?id=82&lang=cn">大堂儿童DIY</a></p>
            </div>
            <em></em>
          </div>
          <div class="item">
            <div class="item_content"> 
              <p class="caption"><a href="{$index_url}product/showproduct.php?id=82&lang=cn">儿童友好社区</a></p>
            </div>
            <em></em>
          </div>
        </div>
      </div>
    </div>
    <div class="cp_advantage">
      <div class="title">
        <div class="title_txt">
          海岸设计的优势
          <em></em>
        </div>
      </div>
      <div class="content">
        <div class="item">
          <img class="show" src="{$img_url}img/etly/cp_advantage_pic1.png" alt="">
          <div class="discribe">
            <span class="rules">19年行业经验</span>
            <span class="rules">客户涵盖众多</span>
            <span class="rules">归本主义设计风</span>
          </div>
          <em></em>
        </div>
        <div class="item">
          <img class="show" src="{$img_url}img/etly/cp_advantage_pic2.png" alt="">
          <div class="discribe">
            <span class="rules">一站式配套服务</span>
            <span class="rules">设计周期短</span>
            <span class="rules">预算精准合理</span>
          </div>
          <em></em>
        </div>
        <div class="item">
          <img class="show" src="{$img_url}img/etly/cp_advantage_pic3.png" alt="">
          <div class="discribe">
            <span class="rules">设计施工规划</span>
            <span class="rules">快速服务响应</span>
            <span class="rules">合作共赢</span>
          </div>
          <em></em>
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








    <div class="cp_footer">
      <div class="qr_code">
        <div class="item">
          <img src="{$img_url}img/etly/footer_wechat.jpg" alt="">
          <span class="tip">官方微信</span>
        </div>
        <div class="item">
          <img src="{$img_url}img/etly/footer_weibo.jpg" alt="">
          <span class="tip">官方微博</span>
        </div>
      </div>
      <div class="cutoff"></div>
      <p class="company">CopRright © 1999-2017 北京海岸九九建筑装饰设计有限公司</p>
      <p class="company">All Rrights Reserved.京ICP备13049424号</p>
      <div class="tel_bj">
        <div class="tel">
          <img src="{$img_url}img/etly/footer_tel.png" alt="">
          <span class="hot_tel">全国免费咨询热线：</span>
          <span class="num">400-879-1110</span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


<!--
EOT;
?>