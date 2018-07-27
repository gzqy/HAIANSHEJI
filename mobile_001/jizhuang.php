<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';

echo <<<EOT
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$img_url}css/jzx/Collection.css">
    <link rel="stylesheet" href="{$img_url}css/jzx/swiper.min.css">
    <link rel="stylesheet" href="{$img_url}css/jzx/reset.css">
    <link rel="stylesheet" href="{$img_url}css/comform.css">
    <script src="{$img_url}js/jzx/jquery-1.9.1.min.js"></script>
    <script src="{$img_url}js/jzx/publicRem.js"></script>
    <script src="{$img_url}js/jzx/swiper.min.js"></script>
    <title>集装箱</title>
    {$lang_head_one}
</head>
<body>
    <header class="Bedroom">
        <div class="Ponder">
            <span>FOUNDED IN 1999</span>
            <strong>集装箱设计</strong>
            <ul>
                <li><i></i>精英设计师300余人</li>
                <li><i></i>18个站区配合作业</li>
            </ul>
        </div>
        <p>集装箱设计的商业艺术家，欢迎垂询：400-879-1110</p>
    </header>

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

    <div class="platform">
        <div class="warmth">
            <p>Customer</p>
            <span class="ellipsis">我们的客户</span>
        </div>
        
        <div class="gement">
            <div class="material">
                  <a href="{$index_url}product/245-cn.html"><p>音乐创客集装箱街区</p></a>
            </div>
        </div>
        <ul class="Consultation">
            <li>项目名称：音乐创客</li>
            <li>使用面积：1200㎡</li>
            <li>项目地址：西安</li>
            <li>项目类型：内外建筑</li>
            <li>设计风格：归本主义</li>
            <li>总设计师：郭准先生</li>
        </ul>
        <div class="lucky">
            <div class="material">
               <a href="{$index_url}product/49-cn.html"> <p>IN酒店设计</p></a>
            </div>
        </div>
        <ul class="Consultation">
            <li>项目名称：酒店设计</li>
            <li>使用面积：2000㎡</li>
            <li>项目地址：山东济南 </li>
            <li>项目类型：室内设计</li>
            <li>设计风格：归本主义</li>
            <li>总设计师：郭准先生</li>
        </ul>
        <div class="hive">
            <div class="material">
                <a href="{$index_url}product/38-cn.html"><p>蜂巢商业综合体设计</p></a>
            </div>
        </div>
        <ul class="Consultation">
            <li>项目名称：蜂巢商业</li>
            <li>使用面积：12万平米</li>
            <li>项目地址：河北</li>
            <li>项目类型：内外建筑</li>
            <li>设计风格：归本主义</li>
            <li>总设计师：郭准先生</li>
        </ul>
    </div>

    <div class="contract">
        <div class="warmth">
            <p>Customer</p>
            <span class="ellipsis">集装箱建筑分类</span>
        </div>
        <div class="cr-Polly">
            <div class="Crops">
                <img src="{$img_url}img/jzx/Player_08.jpg" alt="">
            </div>
            <div class="cr-Sell">
                <ul>
                    <li>
                        <i><img src="{$img_url}img/jzx/destroy_03.png" alt=""> </i>
                        <span><a href="{$index_url}product/list-146-cn.html">集装箱街区</a></span>
                        <p>集装箱住宅/集装箱公寓/集装箱宾馆 
                            集装箱旅社/集装箱酒店
                        </p>
                    </li>
                    <li>
                        <i><img src="{$img_url}img/jzx/destroy_02.png" alt=""></i>
                          <a href="{$index_url}product/list-146-cn.html"><span>集装箱民宿</span></a>
                        <p>集装箱餐厅/集装箱咖啡馆/集装箱超市 
                            集装箱购物中心/集装箱度假村
                        </p>
                    </li>
                    <li>
                        <i><img src="{$img_url}img/jzx/destroy_01.png" alt=""></i>
                          <a href="{$index_url}product/list-146-cn.html"><span>集装箱酒店</span></a>
                        <p>集装箱建筑/集装箱办公楼/集装箱学校
                            集装箱图书馆
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="payment">
        <div class="warmth">
            <p>Prospect</p>
            <span class="ellipsis">集装箱建筑发展前景</span>
        </div>
        <div class="ct-Sports">
            <div class="encourage">
                <p>传统的住房观念已经不合时宜，这也激发了
                    人们对自我居住空间的全新思考。集装箱建筑
                    它绿色环保，省时省力，非常灵活多变，相对
                    传统住房能提供给住家更多的选择，个人、家庭、
                    甚至是一个社区都能各取所需，一个钢铁盒子做
                    成的房子也能充满时尚气息，对环境非常友好。
                </p>
                <p>
                    集装箱建筑，是一种又一次撞击时尚
                    潮流的建筑体系，可随时随地移动到各地
                    ，为人们带来更方便的舒适生活。
                    通过太阳能光电板可供室内用电，太阳能热水
                    器可供暖、供水，室内淋浴、生活用水的排放由污
                    水处理系统进行净化，以便再次利用。
                </p>
            </div>
        </div>
    </div>
<!--
EOT;

if($lang_jizhuang_ok){
echo <<<EOT
-->
    <div class="warmth">
        <p>Design</p>
        <span class="ellipsis">我们的设计</span>
    </div>

    <div class="dividend">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                
<!--
EOT;
$desc = array(
  "2000㎡",
  "6016㎡",
  "12000㎡"
);
$city = array(
  "河北",
  "山东",
  "河北"
);


foreach(methtml_getarray($lang_jizhuang,'',hits,'','3','','','','16') as $key=>$val){
echo <<<EOT
-->
			
                <div class="swiper-slide">
                    <img src="{$val[imgurl]}"/>
                   <a href="{$val[url]}" target="_blank"> <p>{$val[title]}丨{$desc[$key]}</p>    </a>
                </div>
        


<!--
EOT;
}
}
echo <<<EOT
-->
                <!-- <div class="swiper-slide">
                    <img src="{$img_url}img/jzx/encourage_02.jpg" />
                    <p>归隐酒店设计丨山东丨6016m²</p>
                </div>
                <div class="swiper-slide">
                    <img src="{$img_url}img/jzx/encourage_03.jpg" />
                    <p>蜂巢商业体 丨 河北丨12万m²</p>
                </div> -->
            </div>
        </div>
    </div>

    <div class="warmth">
        <p>Design</p>
        <span class="ellipsis">海岸设计</span>
    </div>
    
    <div class="Ceremony">
        <ul>
            <li>
                <img src="{$img_url}img/jzx/benefit.jpg" alt="">
                <div>
                    <em>品牌</em>
                    <p>海岸设计由郭准先生创立于1999年，
                        专注于室内设计、施工、监理
                        一体化服务的专业化企业。
                    </p>
                </div>
            </li>
            <li>
                <img src="{$img_url}img/jzx/benefit-1.jpg" alt="">
                <div>
                    <em>风格</em>
                    <p>
                        海岸以归本主义为核心设计理念，
                        以九一律为设计指针，
                        对每个项目进行原创设计。
                    </p>
                </div>
            </li>
            <li>
                <img src="{$img_url}img/jzx/benefit-2.jpg" alt="">
                <div>
                    <em>团队</em>
                    <p>
                        海岸由精英设计师300余人组成，分18个战区
                        专业化配合作业。海岸每年完成400余项目，
                        一直保持着180个左右的项目碰行中...
                    </p>
                </div>
            </li>
            <li>
                <img src="{$img_url}img/jzx/benefit-3.jpg" alt="">
                <div>
                    <em>服务</em>
                    <p>
                        海岸设计客服实时在线为您服务，即时响
                        应解答疑难，一键预约便可享受私人专
                        属服务，专业的设计师及时为您提供帮助。
                    </p>
                </div>
            </li>
        </ul>
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
    <!-- 底部 -->
<!--
EOT;
require_once template('foot_com');
echo <<<EOT
-->

	<!-- 底部 -->
    
</body>
<script>
    var mySwiper = new Swiper ('.dividend .swiper-container', {
    // direction: 'horizontal',
    // loop: true,
    // slidesPerView: 'auto',
    // centeredSlides:true,
    // spaceBetween: 3,
    // 如果需要分页器

       direction: 'horizontal',
                loop: true,
                autoplay: 5000,
                slidesPerView: "auto",
                centeredSlides:true,
                spaceBetween: 3,
                //如果需要分页器
                pagination: '.swiper-pagination',
        })
 
</script>
</html>
<!--
EOT;
?>