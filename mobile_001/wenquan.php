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
   
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$img_url}css/Admission.css">
    <link rel="stylesheet" href="{$img_url}css/wq/normalize.css">
    <link rel="stylesheet" href="{$img_url}css/wq/swiper.min.css">
    <title>温泉度假设计</title>
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
            if(text.length !== 11 ||  r.test(txt) == false){
                
                
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
    <style>

    </style>
</head>
<body>
    <div class="headerImg">
        <div class="headtxt">
            <div class="title">温泉度假设计</div>
            <div class="ment"><img src="{$img_url}img/wq/kill.png" alt=""></div>
            <div class="headcont">
                <span>温泉度假村</span> <b>|</b>
                <span>旅游度假村</span> <b>|</b>
                <span>度假村酒店</span> <b>|</b>
                <span>民宿度假村</span>
            </div>
                <div id="div1"></div> 
            <div class="headfoot">
                <button>立即咨询</button>
            </div>
            <div id="onlineBooking">
                    <div class="onlineTitle">在线预约设计</div>
                    <div id="inputGroup">
<!--
EOT;
require_once template('feed/feedback_wq'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}  
                    </div>
                    </div>
                </div>
        </div>
    </div>

    <div id="selectType">
            <div class="typeTitle">
                <span>
                    选择度假村类型
                </span>
            </div>
            <div class="typeEnTitle">
                <b class="line"></b>
                 <span>WOMENDEFUWU</span>
                <b class="line"></b>
            </div>
            <div class="imgBox">
                <div class="lf">
                    <div class="imgItem">
                        <img src="{$img_url}img/wq/spa hotel.png" alt="">
                    </div>
                    <p>温泉度假村</p>
                </div>
                <div class="lf">
                    <div class="imgItem">
                        <img src="{$img_url}img/wq/Tourism Resort.png" alt="">
                    </div>
                    <p>旅游度假村</p>
                </div>
                <div class="lf">
                    <div class="imgItem">
                        <img src="{$img_url}img/wq/the resort.png" alt="">
                    </div>
                    <p>度假村酒店</p>
                </div>
                <div class="lf">
                    <div class="imgItem">
                        <img src="{$img_url}img/wq/Homestay Resort.png" alt="">
                    </div>
                    <p>民宿度假村</p>
                </div>
            </div>
    </div>

    <div id="Sincere" style="margin-top: 13rem;">
        <div class="serviceimg">
            <div class="Backstage">
                <p>海岸秉承努力学习、虔诚服务的企业精神，形成了针对特定行业、不同规模、不同客户群体的系列产品和针对性解决方案，先后设计与承建了4000余项工程，项目遍布全国各地。
                    <br>
                    <a href="{$index_url}product/">查看详情</a>
                </p>
            </div>
        </div>
    </div>
    
    <div id="example">
        <div class="exampleTitle">
            <span>多样度假村模式</span>
        </div>
        <div class="typeEnTitle search">
            <b class="line"></b>
             <span>WOMENDEFUWU</span>
            <b class="line"></b>
        </div>
        <ul id="exampleItem">
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/wq/1.png" alt="">
                </div>
                <div class="contentBox">
                    <p>会议中心模式</p>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/wq/2.png" alt="">
                </div>
                <div class="contentBox">
                    <p>温泉设计模式</p>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/wq/3.png" alt="">
                </div>
                <div class="contentBox">
                    <p>生态庄园模式</p>
                </div>
            </li>
            <li class="lf">
                <div class="exampleImgBox">
                    <img src="{$img_url}img/wq/4.png" alt="">
                </div>
                <div class="contentBox">
                    <p>康复基地模式</p>
                </div>
            </li>
        </ul>
        <div class="btnMore">
           <a href="{$index_url}product/"><button>查看更多</button></a>
        </div>
        <!-- 图片?? -->
    </div>

    <div id="Sincere">
        <div class="Pattern">
            <div class="contant">
                <p>海岸的客户群涵盖了业界众多知名企业及集团：漫咖啡、咖啡陪你咖啡之翼、麻辣诱惑海底捞火锅汉拿山、鸿坤逸美时光、太平洋咖啡山西田森集团釜山料理、恒大集团苏宁华远地产等。
                    <br>
                    <a href="{$index_url}product/">查看详情</a>
                </p>
            </div>
        </div>
    </div>

    <div id="officeSpaceExample">
        <div class="exampleTitle">
            <span>温泉酒店成功案例</span>
        </div>
        <div class="typeEnTitle">
            <b class="line"></b>
             <span>WOMENDEFUWU</span>
            <b class="line"></b>
        </div>
        <ul id="officeSpaceItem">
            <li>
                <div class="lf itemLeft">
                  <a href="{$index_url}product/82-cn.html"  target="_self"> <img src="{$img_url}img/wq/lost-1.png" alt=""></a>
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">隐逸水镇设计</p>
                    <p class="itemRightSynopsis">
                        日出而作，日落而息。最传统自然的生活方式，已然变成都市中上班族们的向往。
                    </p>
                    <p class="consultBtn">
                       <a  href="#div1" > <button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                     <a href="{$index_url}product/212-cn.html"  target="_self"><img src="{$img_url}img/wq/lost-2.png" alt=""></a>
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">云南丘北县设计</p>
                    <p class="itemRightSynopsis">
                        整个水镇是集民宿、水上乐园、餐饮、婚礼、野宿于一体的旅行圣地。
                    </p>
                    <p class="consultBtn">
                         <a  href="#div1" > <button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                     <a href="{$index_url}product/273-cn.html"  target="_self"><img src="{$img_url}img/wq/lost-3.png" alt=""></a>
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">云南设计案例</p>
                    <p class="itemRightSynopsis">
                        将七彩云南的美淋漓尽致的展现于世人，让人们在品味美味的咖啡同时，也能体验到归本主义所带来的独特。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1" > <button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                     <a href="{$index_url}product/408-cn.html"  target="_self"><img src="{$img_url}img/wq/lost-4.png" alt=""></a>
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">浣花草堂酒店设计</p>
                    <p class="itemRightSynopsis">
                        将东方元素加入现代简约设计，精心打造了一个极富空间美感的民宿酒店。
                    </p>
                    <p class="consultBtn">
                        <a  href="#div1" > <button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            <li>
                <div class="lf itemLeft">
                     <a href="{$index_url}product/79-cn.html"  target="_self"><img src="{$img_url}img/wq/lost-5.png" alt=""></a>
                </div>
                <div class="lf itemRight">
                    <p class="itemRightTitle">六度别院小镇设计</p>
                    <p class="itemRightSynopsis">
                        项目改造之前，保留了原本的一些自然树木。郭准先生想用这种低调的建筑表现方式，把自然与家结合起来。
                    </p>
                    <p class="consultBtn">
                         <a  href="#div1" > <button>立即咨询</button></a>
                    </p>
                </div>
            </li>
            
        </ul>
        <div class="btnMore">
            <a  href="{$index_url}product/list-150-cn.html" ><button>查看更多</button></a>
        </div>
        
    </div>

    <div id="character">
        <div class="exampleTitle">
            <span>郭淮先生</span>
        </div>
        <div class="typeEnTitle">
            <b class="line"></b>
             <span>WOMENDEFUWU</span>
            <b class="line"></b>
        </div>
        <!-- 轮播图divbox -->

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="haian1">
                        <div class="haian2">
                            <img src="{$img_url}img/wq/chuangshi1.jpg" />
                            <p>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸。他所设计的空间充满着动态方向的诱导，透视和生动明朗的创造，动态是创造性的，因为目的不在于追求耀眼的视觉效果，而是追求表现生活在其中人的活动本身。
                            </p>
                        </div>  
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="haian1">
                        <div class="haian2">
                            <img src="{$img_url}img/wq/tuandui.jpg" />
                            <p>海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。海岸每年完成400余项目，一直保持着180个左右的项目在进行中。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="haian1">
                        <div class="haian2">
                            <img src="{$img_url}img/wq/guiben.jpg" />
                            <p>归本主义是“华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻。”在生活体验中，不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next next">
                <img src="{$img_url}img/wq/right.png" alt="">
            </div>
            <div class="swiper-button-prev prev">
                <img src="{$img_url}img/wq/left.png" alt="">
            </div>
        </div>
    </div>

    <div id="Treasures">
        <div class="exampleTitle">
            <span>温泉酒店珍品案例</span>
        </div>
        <div class="typeEnTitle">
            <b class="line"></b>
             <span>WOMENDEFUWU</span>
            <b class="line"></b>
        </div>

        <ul class="Doomed">
            <li>
                <img src="{$img_url}img/wq/case-1.jpg" alt="">
               <a href="{$index_url}product/408-cn.html"  target="_self"> <span>浣花草堂民宿</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-2.jpg" alt="">
               <a href="{$index_url}product/408-cn.html"  target="_self"> <span>陕西·浣花草堂</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-3.jpg" alt="">
               <a href="{$index_url}product/388-cn.html"  target="_self"> <span>隐逸水镇·民宿</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-4.jpg" alt="">
               <a href="{$index_url}product/392-cn.html"  target="_self"> <span>青岛弄海园</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-5.jpg" alt="">
               <a href="{$index_url}product/323-cn.html"  target="_self"> <span>檀邑溪谷度假村</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-6.jpg" alt="">
               <a href="{$index_url}product/253-cn.html"  target="_self"> <span>上谷郡精品民宿</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-7.jpg" alt="">
               <a href="{$index_url}product/87-cn.html"  target="_self"> <span>昆明朴舍</span></a>
            </li>
            <li>
                <img src="{$img_url}img/wq/case-8.jpg" alt="">
                <a href="{$index_url}product/79-cn.html"  target="_self"><span>六度别院小镇</span></a>
            </li>
        </ul>
    </div>
    <div class="biao">
           
            <div class="onlineBook">
                    <div class="exampleTitle">
            <span>在线预约设计</span>
        </div>
        <div class="typeEnTitle">
            <b class="line"></b>
             <span>MAKE AN APPOINTMN </span>
            <b class="line"></b>
        </div>
                    <div id="inputGroup">
<!--
EOT;
require_once template('feed/feedback_wq'); 
$metfeedback6=metlabel_feedback10(226);
echo <<<EOT
-->  
    {$metfeedback6}  
                    </div>
                    </div>
                </div>
    </div>
    <div  class="bottomx">
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
    </div>
        
    <script src="{$img_url}js/wq/jquery-1.9.1.min.js"></script>
    <script src="{$img_url}js/wq/publicRem.js"></script>
    <script src="{$img_url}js/wq/swiper.min.js"></script>

    <script>
      var swiper = new Swiper('#character .swiper-container', {
            direction: 'horizontal',
        autoplay:true,
            loop: true,
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
<!--
EOT;
?>
