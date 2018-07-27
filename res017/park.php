<!--<?php 
$methtml_head  = metlabel_html5();//基于Html5
$met_foot_txt  = metlabel_foot();
$topnav       = metlable_lang('<li class="line">|</li>',1,0); 
$navnow = $classnow==10001?'class="navblue"':'';
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166); 
echo <<<EOT
-->
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{$img_url}css/models.css"/>
	<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_new.css">
	<link rel="stylesheet" href="{$img_url}css/part_c.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$img_url}css/park.css">
    <link rel="stylesheet" href="{$img_url}css/park/reset.css">
    <link rel="stylesheet" href="{$img_url}css/park/swiper.min.css">
    <link rel="stylesheet" href="{$img_url}css/park/animate.min.css">
    <script src="{$img_url}js/park/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="{$img_url}js/cany.js"></script> 
    <script src="{$img_url}js/park/park.js"></script>
    <script src="{$img_url}js/park/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
	<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">
    <title>主题公园</title>
</head>
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

    <header class="headImg animated bounceInRight">
        <div class="mask">
            <div class="headTxt">
                <div class="text animated rotateInDownRight" ><img src="{$img_url}img/park/ziti.png" alt=""></div>
                <p class="animated rotateInDownRight">19年行业领先品牌，300位设计团队精英</p>
                <ul class="animated rotateInDownLeft">
                    <li>主题公园设计 丨</li>
                    <li>游乐公园设计 丨</li>
                    <li>儿童乐园设计 丨</li>
                    <li>文化公园设计 丨</li>
                    <li>生态公园设计 丨</li>
                    <li>森林公园设计</li>
                </ul>
                 <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  ><img src="{$img_url}img/park/z7.png" alt="" class="but"></a>
            </div>
        </div>
    </header>

    <div class="public">
        <p><b></b>为什么选择我们<b></b></p> 
    </div>

    <div class="leaves">
        <ul>
            <li class="one-img slide-1">
                <img src="{$img_url}img/park/and-1_03.jpg" alt="">
                <div class="files">
                    <div class="inside">
                        <p>OUR ADVANTAGES <br>
                            <span>我们的优势</span>
                        </p>
                        <em>400-879-1110</em>
                        <a  class="heartbeat">全国免费咨询热线</a><br>
                        <b>经验</b><b>风格</b><b>团队</b><b>周期</b>
                    </div>
                </div>
            </li>
            <li class="two-img slide-2">
                <img src="{$img_url}img/park/and-2.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            为客户提供<br>
                            <span>一站式全程服务</span>
                        </p>
                        <div class="corner">
                            <b></b>
                            <em>为客户提供</em>
                        </div>
                    </div>
                </div>
            </li>
            <li class="two-img slide-3">
                <img src="{$img_url}img/park/and-3.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            300余位<br>
                            <span>专业行业精英</span>
                        </p>
                        <div class="corner-1">
                            <b></b>
                            <em>经验丰富</em>
                        </div>
                    </div>
                </div>
            </li>
            <li class="two-img slide-4">
                <img src="{$img_url}img/park/and-4.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            开创有新意节<br>
                            <span>约成本的实现方式</span>
                        </p>
                        <div class="corner-1">
                            <b></b>
                            <em>预算合理</em>
                        </div>
                    </div>
                </div>
            </li>
            <li class="two-img slide-5">
                <img src="{$img_url}img/park/and-5.jpg" alt="">
                <div class="files-1">
                    <div class="flood">
                        <p>
                            从1999年<br>
                            <span>成立服务至今</span>
                        </p>
                        <div class="corner-1">
                            <b></b>
                            <em>行业经验</em>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="public">
        <p><b></b>主题公园分类<b></b></p> 
    </div>

    <div class="circular">
        <div class="abroad main-list1">
            <div class="within">
                <span>游乐型主 <br>题乐园</span>
            </div>
        </div>
        <div class="abroad main-list2">
            <div class="within">
                <span>观光型主 <br>题乐园</span>
            </div>
        </div>
        <div class="abroad main-list3">
            <div class="within">
                <span>情景模拟<br> 主题乐园</span>
            </div>
        </div>
        <div class="abroad main-list4">
            <div class="within">
                <span>主体风情<br> 体验性</span>
            </div>
        </div>
        <div class="abroad main-list5">
            <div class="within">
                <span>专项型主 <br> 题乐园</span>
            </div>
        </div>
        <div class="abroad main-list6">
            <div class="within">
                <span>4D体验型 <br> 主题乐园</span>
            </div>
        </div>
    </div>

    <div class="theme">
        <div class="cr-tis public">
            <p class="bask"><b></b>主题公园特点<b></b></p> 
        </div>
        <ul class="c-abstract">
            <div class="look">
            <li class="merge">
                <em>01</em>
                <p>主题公园的创新性</p>
                <span class="cr-text">The theme park innovation</span>
                <span class="cr-test">强烈的个性，普遍的适宜性</span>
                <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  ><div>立即预约</div></a>
            </li>
        </div>
        <div class="look-1">
            <li>
                <em>02</em>
                <p>主题公园游憩形式</p>
                <span class="cr-text">The theme park innovation</span>
                <span class="cr-test">被动游憩形式、投入高</span>
                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()" ><div>立即预约</div></a>
            </li>
        </div>
        <div class="look-2">
            <li>
                <em>03</em>
                <p>主题公园消费形式</p>
                <span class="cr-text">The theme park innovation</span>
                <span class="cr-test">投入高，占地规模大</span>
                <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()" ><div>立即预约</div></a>
            </li>
        </div>
        <div class="look-3">
            <li>
                <em>04</em>
                <p>规模大主题多样性</p>
                <span class="cr-text">The theme park innovation</span>
                <span class="cr-test">投入高，占地规模大</span>
                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  ><div>立即预约</div></a>
            </li>
        </div>
        </ul>
    </div>

    <div class="trend">
        <div class="public">
            <p><b></b>主题公园发展趋势<b></b></p> 
        </div>
        <div class="ment">
            <ul>
                <li>
                    <img src="{$img_url}img/park/one.jpg" alt="">
                    <p>主题选择的文化性和多元化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/two.jpg" alt="">
                    <p>产品技术的互动性和现代化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/three.jpg" alt="">
                    <p>娱乐内容的创意性和多样性</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/fore.jpg" alt="">
                    <p>活动项目的参与性和个性化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/five.jpg" alt="">
                    <p>游乐氛围的刺激性和场景化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/six.jpg" alt="">
                    <p>园林景观的真实性和自然化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/seven.jpg" alt="">
                    <p>消费付款的便捷性和超市化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/eight.jpg" alt="">
                    <p>滞留时间的扩张性和白日化</p>
                </li>
                <li>
                    <img src="{$img_url}img/park/nine.jpg" alt="">
                    <p>游乐过程的安全性和舒适化</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="Classic">
        <div class="public">
            <p><b></b>海岸经典案例<b></b></p> 
        </div>
        <div class="boutiqueList">
            <ul class="boutiqueCenter">
<!--
EOT;
$six=tmpcentarr($lang_six);
foreach(methtml_getarray($lang_six,'','','',6,'','','','30') as $key=>$val){
$val[description] = utf8substr($val[description],0,50);
$desc = array(
  "1050㎡ ",         
  "614㎡ ",            
  "486㎡ ",            
  "320㎡ ",           
  "700㎡ ",            
  "543㎡ ",            
  "893㎡ ",           
  "774㎡"         
);
echo <<<EOT
--> 
                <li class="boutiqueImgOne">
                    <p class="boutiqueText">{$val[title]}</p>
                    <p class="designer">设计师：郭淮先生</p>
                    <div class="zhe">
                        <div class="hive">
                            <div class="hiveImg">
                            </div>
                            <div class="hiveTitle">{$val[title]}</div>
                            <div class="address">
                                <span style="padding-right: 30%">项目地址：四川</span>
                                <span>设计面积：{$desc[$key]}</span>
                                <a href="{$val[url]}" class="hiveBtn">查看详情</a>
                                <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()" class="hivaBtn"  >立即预约</a>
                            </div>
                        </div>
                    </div>
                </li>
<!--
EOT;
}
echo <<<EOT
-->	 
            </ul>
        </div>
    </div>
    <div class="brief">
            <div class="about">
                <p>关于海岸</p>
                <em>一个归本主义作品，讲述一个故事，留下一个印象，播种一个梦想。欢迎咨询：400-879-1110</em>
            </div>
            <div class="character"> 
                <img src="{$img_url}img/park/guolaoshi_03.png" alt="">
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
        <a href="javascript:void(0);" onclick="jQuery('.boxbig').show()">立即咨询</a>
    </div>

    <div class="dynamic">    
        <div class="dynamic">
	        <div class="public">
	            <p><b></b>海岸动态<b></b></p> 
	        </div>
		</div> 
        <em>北京海岸设计是您最专业的设计服务管家...全国免费咨询热线：400-879-1110</em>
    </div>



	
<!--
EOT;
	require_once template('modular/index/newWeb/neWeb_park');
echo <<<EOT
--> 
    <div class="Carousel">  
        <div class="swiper-container">
            <div class="swiper-wrapper">
<!--
EOT;
$six=tmpcentarr($lang_six);
foreach(methtml_getarray($lang_six,'','','',4,'','','','30') as $key=>$val){
$val[description] = utf8substr($val[description],0,50);
echo <<<EOT
--> 
                <div class="swiper-slide">
                    <img class="six" src="{$val[imgurl]}" />
                    <a  href="{$val['url']}">
	                    <div class="Occlusion">
	                        <em>{$val[title]}</em>
	                        <ul>
	                            <li>项目类型：</li>
	                            <li>景观庭院</li>
	                            <li>项目规模：</li>
	                            <li>大型项目</li>
	                            <li>项目风格：</li>
	                            <li>归本主义</li>
	                            <li>总设计师：</li>
	                            <li>郭准</li>
	                        </ul>
	                        <p>
	                            $val[description]
	                        </p>
	                    </div>
	                </a>
                </div> 
<!--
EOT;
}
echo <<<EOT
-->	
            
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>

<div class="dynamic">
        <div class="public">
            <p><b></b>提交需求<b></b></p> 
        </div>
       
</div> 
<div class="chain06" >
    <div class="qbtform">
<!--
EOT;
require_once template('feed/feedback_slr'); 
$metfeedback4=metlabel_feed_slr(166);
echo <<<EOT
-->  
    {$metfeedback4}    
    </div>

</div>
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

 </body>
</html>



          
<!--
EOT;
require_once template('foot_canyin'); 
?>