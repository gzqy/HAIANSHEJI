<!--<?php 
$methtml_head 	= metlabel_html5();//基于Html5
$met_foot_txt 	= metlabel_foot();
$topnav        	= metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':'';

echo <<<EOT
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>办公空间设计</title>
    <link rel="stylesheet" href="{$img_url}css/bg/normalize.css">
    <link rel="stylesheet" href="{$img_url}css/bg.css">
    <link rel="stylesheet" href="{$img_url}css/bg/swiper.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
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
            if(text.length !== 11  ||  r.test(tex) == false  ){
                
                
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
    <div id="header">
        <div id="headBox">
            <div id="headContent">
                <div class="title">办公空间设计</div>
                <div class="content">
                    <span>办公空间</span>
                    <b>|</b>
                    <span>时尚办公室</span>
                    <b>|</b>
                    <span>现代办公室</span>
                    <b>|</b>
                    <span>创意办公室</span>
                </div>
                <div class="footer">
                    <a  href="#div1"><button  class="heartbeat">立即咨询</button></a>
                </div>
                <p class="titleBottom">19年行业领先品牌,300位团队设计精英</p>
            </div>
        </div>
    </div>
       <div id="div1"></div> 
    <div id="onlineBooking">
        <div class="onlineTitle">在线预约设计</div>
        <div id="inputGroup">

<!--
EOT;
require_once template('feed/feedback_bg'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6} 


        </div>
    </div>
    <div id="selectType">
        <div class="typeTitle">
            <span>
                选择办公设计类型
            </span>
        </div>
        <div class="typeTitleBot">Section sort</div>
        <div class="imgBox">
            <div class="lf">
                <div class="imgItem">
                    <img src="{$img_url}img/bg/type/officeSpace.png" alt="">
                </div>
                <p>办公空间</p>
            </div>
            <div class="lf">
                <div class="imgItem">
                    <img src="{$img_url}img/bg/type/fashionOffice.png" alt="">
                </div>
                <p>时尚办公</p>
            </div>
            <div class="lf">
                <div class="imgItem">
                    <img src="{$img_url}img/bg/type/modernOffice.png" alt="">
                </div>
                <p>现代办公</p>
            </div>
            <div class="lf">
                <div class="imgItem">
                    <img src="{$img_url}img/bg/type/creativeDesign.png" alt="">
                </div>
                <p>创意办公</p>
            </div>
        </div>
    </div>
    <div id="example">
        <div class="exampleTitle">
            <span>办公设计案例推荐</span>
        </div>
        <div class="typeTitleBot duct">Case referral</div>
        <ul id="exampleItem">
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/bg/Insurance.png" alt="">
                </div>
                <div class="contentBox">
                    <p><a href="{$index_url}product/showproduct.php?id=380&lang=cn" target="_blank">乡关科技办公空间设计</a></p>
                    <span>设计面积:600m²</span>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/bg/regular.png" alt="">
                </div>
                <div class="contentBox">
                    <p><a href="{$index_url}product/showproduct.php?id=62&lang=cn" target="_blank">广州天贵科创办公室设计</a></p>
                    <span>设计面积:1286m²</span>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/bg/Pulpy.png" alt="">
                </div>
                <div class="contentBox">
                    <p><a href="{$index_url}product/showproduct.php?id=64&lang=cn" target="_blank">新西兰公司办公室设计</a></p>
                    <span>设计面积:813m²</span>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/bg/Finance.png" alt="">
                </div>
                <div class="contentBox">
                    <p><a href="{$index_url}product/showproduct.php?id=243&lang=cn" target="_blank">爱心人寿办公室设计</a></p>
                    <span>设计面积:600m²</span>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/bg/Obtain.png" alt="">
                </div>
                <div class="contentBox">
                    <p><a href="{$index_url}product/showproduct.php?id=337&lang=cn" target="_blank">魏老香总部办公室设计</a></p>
                    <span>设计面积:1286m²</span>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/bg/espionage.png" alt="">
                </div>
                <div class="contentBox">
                    <p><a href="{$index_url}product/showproduct.php?id=345&lang=cn" target="_blank">壹点意念办公室空间设计</a></p>
                    <span>设计面积:420m²</span>
                </div>
            </li>
        </ul>
        <div class="btnMore">
            <a  href="{$index_url}product/list-150-cn.html" target="_blank"><button>查看更多</button></a>
        </div>
        <!-- 图片?? -->
    </div>

    <div id="Sincere">
        <div class="serviceimg">
            <div class="Backstage">
                <p>海岸秉承努力学习、虔诚服务的企业精神，形成了针对特定行业、 不同规模、不同客户群体的系列产品和针对性解决方案， 先后设计与承建了4000余项工程，项目遍布全国各地。
                    <br>

                    <a href="{$index_url}product">查看详情</a>
                </p>

            </div>

        </div>
    </div>

    <div id="officeSpaceExample">
        <div class="exampleTitle">
            <span>办公空间设计精品案例</span>
        </div>
        <div class="typeTitleBot">Excellent case</div>
        <ul id="officeSpaceItem">
            <li>
                <div class="lf itemLeft">
                    <img src="{$img_url}img/bg/officeSpace/1.png" alt="">
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">爱心人寿办公室</p>
                    <p class="itemRightSynopsis">
                        从细节到整体,精心勾勒营造流畅舒适的空间氛围,让你感受到前所未有的梦幻喜悦。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1"><button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                    <img src="{$img_url}img/bg/officeSpace/2.png" alt="">
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">海口拾味馆办公室设计</p>
                    <p class="itemRightSynopsis">
                        郭准先生将现代和传统结合在一起，以现代人审美体验打造富有原始韵味的事物。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1"><button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                    <img src="{$img_url}img/bg/officeSpace/3.png" alt="">
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">中关村鼎开办公室设计</p>
                    <p class="itemRightSynopsis">
                        人的想象力可以使粗糙的结构语言演变为高尚的形式，他用超越常规的自然方式。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1"><button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                    <img src="{$img_url}img/bg/officeSpace/4.png" alt="">
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">大宏集团办公室设计</p>
                    <p class="itemRightSynopsis">
                        以归本主义为核心用象征性的表现手法，多种归本主义设计元素相融合。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1"><button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                    <img src="{$img_url}img/bg/officeSpace/5.png" alt="">
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">壹点意念办公室设计</p>
                    <p class="itemRightSynopsis">
                        郭准先生运用材料与色彩的巧妙搭配，打造一个现代极简的创意办公空间。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1"><button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                    <img src="{$img_url}img/bg/officeSpace/6.png" alt="">
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">爱心人寿办公室</p>
                    <p class="itemRightSynopsis">
                        从细节到整体,精心勾勒营造流畅舒适的空间氛围,让你感受到前所未有的梦幻喜悦。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1"><button>立即咨询</button></a>
                    </p>
                </div>
            </li>
        </ul>
        <div class="btnMore">
             <a  href="{$index_url}product/list-150-cn.html" target="_blank"><button>查看更多</button></a>
        </div>
        <div class="bgBox">
            <div class="ItemImg">
                <div class="lf smImgItem">
                    <img src="{$img_url}img/bg/integration/localization.png" alt="">
                    <p>业态定位</p>
                </div>
                <div class="lf nextStep">
                    <img src="{$img_url}img/bg/integration/nextStep.png" alt="">
                </div>
                <div class="lf smImgItem">
                    <img src="{$img_url}img/bg/integration/styleOrientation.png" alt="">
                    <p>风格定位</p>
                </div>
                <div class="lf nextStep">
                    <img src="{$img_url}img/bg/integration/nextStep.png" alt="">
                </div>
                <div class="lf smImgItem">
                    <img src="{$img_url}img/bg/integration/projectPlanning.png" alt="">
                    <p>项目策划</p>
                </div>
                <div class="lf nextStep">
                    <img src="{$img_url}img/bg/integration/nextStep.png" alt="">
                </div>
                <div class="lf smImgItem">
                    <img src="{$img_url}img/bg/integration/projectControl.png" alt="">
                    <p>项目施工</p>
                </div>
                <div class="lf nextStep">
                    <img src="{$img_url}img/bg/integration/nextStep.png" alt="">
                </div>
                <div class="lf smImgItem">
                    <img src="{$img_url}img/bg/integration/construction.png" alt="">
                    <p>项目管控</p>
                </div>
            </div>
        </div>
    </div>
    <div id="character">
        <div class="exampleTitle-title">
            <span>郭淮先生</span>
        </div>
        <div class="typeTitleBot">Return to humanism</div>
        <!-- 轮播图divbox -->

          <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="haian1">
                        <div class="haian2">
                            <img src="{$img_url}img/bg/chuangshi1.jpg" />
                            <p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸。他所设计的空间充满着动态方向的诱导，透视和生动明朗的创造，动态是创造性的，因为目的不在于追求耀眼的视觉效果，而是追求表现生活在其中人的活动本身。
                            </p>
                        </div>  
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="haian1">
                        <div class="haian2">
                            <img src="{$img_url}img/bg/tuandui.jpg" />
                            <p>海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。海岸每年完成400余项目，一直保持着180个左右的项目在进行中。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="haian1">
                        <div class="haian2">
                            <img src="{$img_url}img/bg/guiben.jpg" />
                            <p>归本主义是“华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻。”在生活体验中，不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next next">
                <img src="{$img_url}img/bg/right.png" alt="">
            </div>
            <div class="swiper-button-prev prev">
                <img src="{$img_url}img/bg/left.png" alt="">
            </div>
        </div>
    </div>
    <div id="officeSpaceBox">
        <div class="exampleTitle">
            <span>办公空间设计珍品案例</span>
        </div>
        <div class="typeTitleBot">Rare cases</div>
        <div id="outstanding">
            <!-- 不知道需要什么效果 -->
            <div class="swiper-container">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <img src="{$img_url}img/bg/chider-1.png" alt="">
                        <em>济南</em>
                        <p>心理疗养室600m²</p>
                        <a href="">立即预约</a>
                    </li>
                    <li class="swiper-slide">
                        <img src="{$img_url}img/bg/chider-2.png" alt="">
                        <em>济南</em>
                        <p>心理疗养室600m²</p>
                        <a href="">立即预约</a>
                    </li>
                    <li class="swiper-slide">
                        <img src="{$img_url}img/bg/chider-3.png" alt="">
                        <em>济南</em>
                        <p>心理疗养室600m²</p>
                        <a href="">立即预约</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="onlineBooking2">
        <div class="onlineTitle">在线预约设计</div>
        <div id="inputGroup2">
<!--
EOT;
require_once template('feed/feedback_bg'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6} 
        </div>
    </div>

    <div id="footer">
        <div id="official">
            <div class="lf wechatBox">
                <img src="{$img_url}img/bg/weixin.png" alt="" class="wechat">
                <p class="wechatPromt">官方微信</p>
            </div>
            <div class="lf tweetBox">
                <img src="{$img_url}img/bg/weibo.png" alt="" class="tweet">
                <p class="tweetPromt">官方微博</p>
            </div>

        </div>
        <div class="phone">
            <div>
                <img src="{$img_url}img/bg/dianhua.png" alt="">
            </div>
            <p>全国免费咨询热线：
                <span>400-879-1110</span>
            </p>
        </div>
        <div class="ploriginal">
            <p>CopRright © 1999-2018 | All Rrights Reserved.</p>
            <p>All Rrights Reserved. 京ICP备13049424号</p>
        </div>
    </div>
    <script src="{$img_url}js/bg/jquery-1.9.1.min.js"></script>
    <script src="{$img_url}js/bg/publicRem.js"></script>
    <script src="{$img_url}js/bg/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('#character .swiper-container', {
            direction: 'horizontal',
    	autoplay:true,
			loop: true,
		      navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		      },
            // direction: 'horizontal',
            // loop: true,
            // paginationClickable: true,
            // autoplay: 3000,
            // /*每隔几秒自动播放 */
            //  autoplayDisableOnInteraction: false, /*点击之后是否停止自动轮播*/
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });
        var swiper = new Swiper('#outstanding .swiper-container', {
            slidesPerView: 2.3,
            spaceBetween: 10,
            freeMode: true,
            resistanceRatio: 0,
        });
    </script>
</body>

</html>




<!--
EOT;
?>