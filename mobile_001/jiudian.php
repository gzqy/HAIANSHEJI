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
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />
    <link rel="stylesheet" href="{$img_url}css/jiudian/index.css">
    <link rel="stylesheet" href="{$img_url}css/jiudian/swiper.min.css">
    <script src="{$img_url}js/jiudian/jquery-2.1.4.min.js"></script>
    <script src="{$img_url}js/jiudian/swiper.min.js"></script>
    <script src="{$img_url}js/jiudian/rem.js"></script>
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
		  　　var r = /^\+?[1-9][0-9]*$/;　　//判断是否为正整数 
		    if(text.length !== 11 ||  r.test(tex) == false){
		    	
		    	
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
			
				 $(this).removeAttr("style")
				}
	         });


			$(".para250").blur(function(e){
		
		
			var txt =$(this).val();//当前值
			　var r = /^\d+.*?/;　　//判断是否为正整数 
				
			if(txt==null || r.test(txt) == false )//判断是否为空或输入长度小于6个字符
			{
				
				$(this).attr('placeholder','请输入项目面积');
			
			   $(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
			   
			}
			else{
				
			
				$(this).removeAttr("style")
				}
	         });

		       $(".para252").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入正确的数字');
						  
						}else{
						
							}
		         });

		      $(".para248").blur(function(e){
					var txt =$(this).val();//当前值
						if(txt==null || txt.length <2 )//判断是否为空或输入长度小于6个字符
						{
							$(this).attr('placeholder','请输入您的名字');
						    $(this).attr("style", "border:1px solid #ef2b2b;border-radius: 0.1rem;") 
						}else{
							$(this).removeAttr("style")
							}
		         });
			 
		
		});
	</script>
    <script>
    changeRem();
        function changeRem() {
            var html = document.querySelector('html');
            var width = html.getBoundingClientRect().width;
            // var xianzhiwidth = document.getElementsByClassName("xianzhiwidth");
            if( width > 768 ){
            	width = 768;
            }
            // html.style.fontSize = width / 10 +'px';
        }
        window.onresize = changeRem;
    </script>
    <title>酒店</title>
</head>
<body>
    <div id="lives">
        <div class="header">
            <img src="{$img_url}img/jiudian/20180509113703.jpg" alt="">
            <img src="{$img_url}img/jiudian/_20180509113729.png" alt="" class="header-img">
            <span>全国免费咨询热线：400-879-1110</span>
            <a href="#div1" class="heartbeat">一键预约设计师</a>
        </div>
        <div id="div1"></div> 
        <div class="title-2">
            <em>免费获取报价</em>
            <div class="icontent">
                   

<!--
EOT;
require_once template('feed/feedback_13'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6} 


            </div>
        </div>
        <div class="title-1">
            <em>酒店的类型</em>
            <ul>
                <li>
                    <img src="{$img_url}img/jiudian/loy-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">商务酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/bgjd-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">星级酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/shjd-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">度假酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/hyjd-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">精品酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/msjd-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">民宿酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/mxjs-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">连锁酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/gygk-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">主体酒店设计</span></a>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/xlxq-1.png">
                    <span><a href="{$index_url}product/list-150-cn.html">艺术酒店设计</span></a>
                </li>
            </ul>
        </div>
        <div class="title-3">
            <em>山东·归隐酒店设计</em>
            <div class="belly">
                <div class="swiper-container">
                    <div class="exhibition-list swiper-wrapper">  
                        <div class="swiper-slide">
                            <div class="speace">
                                <img src="{$img_url}img/jiudian/1.jpg">
                                
                            </div>
                        </div>  
                        <div class="swiper-slide">
                            <div class="speace">
                                <img src="{$img_url}img/jiudian/2.jpg" alt="">
                            </div>
                        </div> 
                        <div class="swiper-slide">
                            <div class="speace">
                                <img src="{$img_url}img/jiudian/3.jpg" alt="">
                            </div>
                        </div> 
                        <div class="swiper-slide">
                            <div class="speace">
                                <img src="{$img_url}img/jiudian/4.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="speace">
                                <img src="{$img_url}img/jiudian/5.jpg" alt="">
                            </div>
                        </div>
                    </div>  
                    <div class="mask">
                        <ul>
                            <li>该建筑以归本主义为设计理念</li>
                            <li>用木的温厚营造出舒适的居住环境 </li>
                            <li>内部的结构设计</li>
                            <li>将建筑划分为不同风格的居住空间</li>
                            <li>酒店延续着色彩拼撞</li>
                            <li>不同的色块对比冲撞在一起</li>
                            <li>同时喷涂一些不同色彩缀点其中</li>
                            <li>自然独特的设计反映在每一处细节</li>
                        </ul>
                        <ul>
                            <li>超五星级的服务与设施</li>
                            <li>并未扰乱亘古的宁静</li>
                            <li>提振了整个空间的活力</li>
                            <li>在放肆与克制之间总能找到恰当的平衡点</li>
                        </ul>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-pagination"></div>
                </div>	
            </div>  
        </div>
        <div class="title-4">
            <em>酒店设计特点</em>
            <div class="Characteristic">
                <div class="Pisces">
                    <div class="lsnbor"></div>
                    <h2 class="lsneng">HOTEL DESIGN</h2>
                    <h2 class="lsncn">酒店设计</h2>
                    <p class="lsnp">中国的酒店设计业发展可以说是蒸蒸日上，最近的几十年也算是发展极为迅速，
                        那么将来会怎么发展呢？看了很多关于酒店设计的文章，感觉中国的酒店设计将会进入“九个现代化” 。
                    </p>
                    <a href="#div1" ><button class="sjbtn">马上咨询</button></a>
                    <img src="{$img_url}img/jiudian/jt.png" class="lsnimg">
                    <h3 class="lsnengh3">HOTEL</h3>
                </div>
                <div class="Cancer">
                    <img src="{$img_url}img/jiudian/15.jpg">
                </div>
                <div class="lsncenter">
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/wl.png"></div>
                        <p>网格化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/zt.png"></div>
                        <p>主题化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/qq.png"></div>
                        <p>亲情化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/jau.png"></div>
                        <p>家居化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/rex.png"></div>
                        <p>人性化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/shs.png"></div>
                        <p>时尚化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/jim.png"></div>
                        <p>经济化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/jy.png"></div>
                        <p>简约化</p>
                    </div>
                    <div class="lsnwh">
                        <div><img src="{$img_url}img/jiudian/jx.png"></div>
                        <p>精细化</p>
                    </div>
                </div>
                <img src="{$img_url}img/jiudian/xian-1.png" class="xian">
            </div>
        </div>
        <div class="title-5">
            <em>海岸精品酒店设计</em>
            <div class="Boutique">
                <div class="measure">
                    <img src="{$img_url}img/jiudian/128.jpg" alt="">
                    <p>
                       <!-- <i class="sign"> <img src="{$img_url}img/jiudian/dw.png" alt=""> </i>-->
                       <span><a href="{$index_url}product/showproduct.php?id=87&lang=cn" target="_blank"> 昆明 朴舍酒店设计</a></span>
                    </p>
                </div>
                <div class="measure">
                    <div class="work">
                        <img src="{$img_url}img/jiudian/129.jpg" alt="">
                        <p>
                           <!-- <i class="sign"> <img src="{$img_url}img/jiudian/dw.png" alt=""> </i>-->
                           <span> <a href="{$index_url}product/showproduct.php?id=91&lang=cn" target="_blank">田森 田园酒店设计</a></span>
                        </p>
                    </div>
                    <div class="work">
                        <img src="{$img_url}img/jiudian/qdjd.jpg" alt="">
                        <p>
                           <!-- <i class="sign"> <img src="{$img_url}img/jiudian/dw.png" alt=""> </i>-->
                            <span><a href="{$index_url}product/showproduct.php?id=86&lang=cn" target="_blank">青岛 IN酒店设计</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-6">
            <em>酒店设计案例</em>
            <div class="acrobatics">
                <div class="perform">
                    <a href="{$index_url}product/showproduct.php?id=84&lang=cn" target="_blank"><img src="{$img_url}img/jiudian/19.jpg" alt=""></a>
                    <h2>唐庄艺术酒店设计 <i></i>   </h2>
                    <a href="#div1" class="heart">立即咨询</a>
                    <ul>
                        <li>项目名称: 唐庄艺术酒店</li>
                        <li>使用面积: 2857m²</li>
                        <li>项目地址: 山东</li>
                        <li>项目类型: 酒店设计</li>
                        <li>设计风格: 归本主义</li>
                        <li>总设计师: 郭准先生</li>
                    </ul>
                </div>
                <div class="perform">
                     <a href="{$index_url}product/showproduct.php?id=265&lang=cn" target="_blank"><img src="{$img_url}img/jiudian/20.jpg" alt=""></a>
                    <h2>东方酒店设计 <i class="line"></i> </h2>
                     <a href="#div1" class="heart">立即咨询</a>
                    <ul>
                        <li>项目名称: 东方酒店</li>
                        <li>使用面积: 2130m²</li>
                        <li>项目地址: 内蒙古</li>
                        <li>项目类型: 酒店设计</li>
                        <li>设计风格: 归本主义</li>
                        <li>总设计师: 郭准先生</li>
                    </ul>
                </div>
                <div class="perform">
                     <a href="{$index_url}product/showproduct.php?id=410&lang=cn" target="_blank"><img src="{$img_url}img/jiudian/21.jpg" alt=""></a>
                    <h2>湾流公寓酒店设计 <i></i>   </h2>
                    <a href="#div1" class="heart">立即咨询</a>
                    <ul>
                        <li>项目名称: 湾流公寓酒店</li>
                        <li>使用面积: 2857m²</li>
                        <li>项目地址: 北京</li>
                        <li>项目类型: 酒店设计</li>
                        <li>设计风格: 归本主义</li>
                        <li>总设计师: 郭准先生</li>
                    </ul>
                </div>
                <div class="perform">
                     <a href="{$index_url}product/showproduct.php?id=368&lang=cn" target="_blank"><img src="{$img_url}img/jiudian/22.jpg" alt=""></a>
                    <h2>晋善地产公寓设计 <i></i>   </h2>
                    <a href="#div1" class="heart">立即咨询</a>
                    <ul>
                        <li>项目名称: 晋善地产公寓</li>
                        <li>使用面积: 11400m²</li>
                        <li>项目地址: 北京</li>
                        <li>项目类型: 室内设计</li>
                        <li>设计风格: 归本主义</li>
                        <li>总设计师: 郭准先生</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="title-7">
            <em>北京海岸设计</em>
            <ul>
                <li>
                    <img src="{$img_url}img/jiudian/28.jpg">
                    <div>
                        <p>品牌</p>
                        <em>海岸设计由郭准先生创立于1999年，
                            专注于室内设计、施工、监理
                            一体化服务的专业化企业。
                        </em>
                    </div>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/29.jpg">
                    <div>
                        <p>风格</p>
                        <em>
                            海岸以归本主义为核心设计理念，
                            以九一律为设计指针，
                            对每个项目进行原创设计。
                        </em>
                    </div>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/30.jpg">
                    <div>
                        <p>团队</p>
                        <em>
                            海岸由精英设计师300余人组成，分18个战区
                            专业化配合作业。海岸每年完成400余项目，
                            一直保持着180个左右的项目碰行中...
                        </em>
                    </div>
                </li>
                <li>
                    <img src="{$img_url}img/jiudian/31.jpg">
                    <div>
                        <p>服务</p>
                        <em>
                            海岸设计客服实时在线为您服务，即时响
                            应解答疑难，一键预约便可享受私人专
                            属服务，专业的设计师及时为您提供帮助。
                        </em>
                    </div>
                </li>
            </ul>
        </div>
        <div class="title-8">
            <em>酒店设计案例集锦</em>
            <div class="init">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=87&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/ph.jpg"/></a>
                            <p>朴舍酒店设计丨云南丨2000m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=85&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/gyjd.jpg" /></a>
                            <p>归隐酒店设计丨山东丨6016m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=266&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/yclb.jpg" /></a>
                            <p>桃园田里酒店设计 丨 山西丨3747m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=86&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/IN.jpg" alt=""></a>
                            <p>青岛IN酒店设计丨山东丨2000m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=88&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/jngy.jpg" alt=""></a>
                            <p>济南公寓酒店设计丨山东丨1122m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=84&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/tzys.jpg" alt=""></a>
                            <p>唐庄艺术酒店设计丨山东丨2857m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=68&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/MRRT U.jpg" alt=""></a>
                            <p>MEET U 酒店公寓设计丨上海丨614m²</p>
                        </div>
                        <div class="swiper-slide">
                           <a href="{$index_url}product/showproduct.php?id=353&lang=cn" target="_blank"> <img src="{$img_url}img/jiudian/tgtl.jpg" alt=""></a>
                            <p>太古田里酒店设计丨山西丨11055m²</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-2">
                <em>免费获取报价</em>
                <div class="icontent">
<!--
EOT;
require_once template('feed/feedback_13'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}                    
                </div>
        </div>
        <footer>
            <div class="erweimabox">
                <img src="{$img_url}img/jiudian/weixinma.jpg" alt="官网微信二维码" />
                <img src="{$img_url}img/jiudian/weiboma.jpg" alt="官网微博二维码" />
                <em>官方微信</em><em>官方微博</em>
            </div>
            <span><img src="{$img_url}img/jiudian/footerphone.png" alt="全国免费咨询热线：400-879-1110" />全国免费咨询热线：<span class="red">400-879-1110</span></span>
            <p>CopRright © 1999-2017 丨 All Rrights Reserved.<br /> 京ICP备13049424号</p>
        </footer>
    </div>
</body>
<script>
var mySwiper = new Swiper ('.belly .swiper-container', {
    direction: 'horizontal',
    loop: true,
    followFinger:true,
    // 如果需要分页器
    pagination:'.swiper-pagination',
    autoplay:3000,
});
var mySwiper = new Swiper ('.init .swiper-container', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: "auto",
    centeredSlides:true,
    spaceBetween: 3,
    // 如果需要分页器
 })
</script>
</html>
<!--
EOT;
?>