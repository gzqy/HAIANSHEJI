<!--<?php 
$methtml_head  = metlabel_html5();//基于Html5
$met_foot_txt  = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0); 
$navnow = $classnow==10001?'class="navblue"':'';
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166); 
echo <<<EOT
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$img_url}css/offc/office.css">
     <link rel="stylesheet" href="{$img_url}css/shudian.css">
    <link rel="stylesheet" href="{$img_url}css/offc/swiper.min.css">
    <script src="{$img_url}js/offc/jquery-2.1.4.min.js"></script>
    <script src="{$img_url}js/offc/office.js"></script>
    <script src="{$img_url}js/offc/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css">

    <title>办公空间设计</title>
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
    
      <!-- banner -->
    <header class="reach">
        <div class="reach-xian">
            <div class="top"></div>
            <div class="left"></div>
            <div class="right"></div>
            <div class="bottom"></div>
            <div class="reach-text">
                <h1>办公空间设计</h1>
                <i></i>
                <ul>
                    <li>办公空间 <i></i></li>
                    <li>时尚办公室 <i></i></li>
                    <li>现代办公空间 <i></i></li>
                    <li>创意办公空间 <i></i></li>
                    <li>国际时尚高冷范儿</li>
                </ul>
                <a href="" class="heartbeat">立即咨询</a>
                <p>19年行业领先品牌，300位设计团队精英</p>
            </div>
        </div>
        <div class="banner-back"></div>
    </header>
    <div class="dk">
        <!-- 办公设计类型 -->
        <div class="designs">
            <div class="sort">
                <p>选择办公设计类型</p>
                <em>Selection sort</em>
            </div>
            <a href="{$index_url}product/list-178-cn.html" target="_blank"> <div class="fashion">
                <div class="space slide-1">
                    <div class="inside">
                        <p class="lce"></p>
                       <em >    办公空间</em></a>
                    </div>
                </div>
                       <a href="{$index_url}product/list-178-cn.html" target="_blank"> <div class="space slide-2">
                    <div class="inside">
                        <p class="lce-1"></p>
                 <em>时尚办公室</em></a>
                    </div>
                </div>
                <a href="{$index_url}product/list-178-cn.html" target="_blank"> <div class="space slide-3">
                    <div class="inside">
                        <p class="lce-2"></p>
                        <em>现代办公</em></a>
                    </div>
                </div>
                 <a href="{$index_url}product/list-178-cn.html" target="_blank"> <div class="space slide-4">
                    <div class="inside">
                        <p class="lce-3"></p>
                       <em>创意办公</em></a>
                    </div>
                </div>
                <a href="{$index_url}product/list-178-cn.html" target="_blank"> <div class="space slide-5">
                    <div class="inside">
                        <p class="lce-4"></p>
                        <em>国际时尚</em></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 办公设计 -->
        <div class="sentence">
            <div class="sort-1">
                <p>办公设计</p>
                <em>Selective type</em>
            </div>
            <div class="through">
                <div class="through-text">
                    <ul>
                        <li>
                            <img src="{$img_url}img/office/bgsj-1.png" alt="">
                            <div class="mask">
                            <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                            <a href="http://www.haianzhuangshi.com/product/243-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-2.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/380-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-3.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/339-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-4.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/338-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-5.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/342-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-6.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/341-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-7.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/335-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                        <li>
                            <img src="{$img_url}img/office/bgsj-8.png" alt="">
                            <div class="mask">
                                <a  href="javascript:void(0);" onclick="jQuery('.boxbig').show()"><p>立即咨询</p></a>  
                                <a href="http://www.haianzhuangshi.com/product/346-cn.html"><em>查看详情</em></a>  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 多样的办公空间 -->
        <div class="Various">
            <div class="sort-2">
                <p>多样的办公空间</p>
                <em>Design pattern</em>
            </div>
            <div class="trousers">
                <ul>
                    <li>
                        <img src="{$img_url}img/office/shi.png" alt="">
                        <div class="demo">
                            <em>时尚办公</em>
                            <p>充满层次感和流动性。这次依旧是郭准先生的精笔之作，
                                跳出办公区的固定模式，郭准先生亲身感受办公族的需求，
                                巧妙大自然的无穷力量与摩登元素打造出了时尚，富有韵味的尊尚柏丽。
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{$img_url}img/office/chuang.png" alt="">
                        <div class="demo-1">
                            <em>现代办公</em>
                            <p>以现代人的审美体验来打造一个个性化的办公空间设计师在归本主义的基础上，
                                对形式进行创新，对材质进行重组，用线条来分割视觉比例，通过现代感的
                                材质表现与归本主义的设计理念，使整个空间都充满了生机。
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{$img_url}img/office/shiahng.png" alt="">
                        <div class="demo-2">
                            <em>创意办公</em>
                            <p>是由郭准先生打造的以创意设计为主题、具有创客属性的办公空间。
                                业主希望郭准先生尽一切所能，毫无顾忌的设计，让办公室充满
                                无限想象和时尚气息，吸引更多有**、有活力、有创意的年轻人来关注。
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{$img_url}img/office/xiand.png" alt="">
                        <div class="demo-3">
                            <em>国际时尚办公</em>
                            <p>告别一板一眼的办公室格子间 找寻灵活休闲的办公方式 
                                在归本主义的世界里 工作热情和归属感 在设计初期，
                                设计师就摒弃了传统办公思维方式，打破区域上的约束，
                                针对不同办公形式的需求，打造出真正意义上的休闲式办公。 
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 一体化办公 -->
        <div class="people">
            <div class="sort-3">
                <p>一体化办公</p>
                <em>Design lntegration</em>
            </div>
            <div class="through">
                <div class="rotate">
                    <div class="rotate-1">
                        <img src="{$img_url}img/office/1.png" alt="" class="num">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>业态定位</p>
                        </div>
                    </div>
                    <div class="rotate-2">
                        <img src="{$img_url}img/office/3.png" alt="" class="num">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>项目策划</p>
                        </div>
                    </div>
                    <div class="rotate-3">
                        <img src="{$img_url}img/office/5.png" alt="" class="num">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>项目施工</p>
                        </div>
                    </div>
                    <div class="rotate-4">
                        <img src="{$img_url}img/office/7.png" alt="" class="num">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>完美服务</p>
                        </div>
                    </div>
                    <div class="rotate-5">
                        <img src="{$img_url}img/office/2.png" alt="" class="num-1">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>风格定位</p>
                        </div>
                        
                    </div>
                    <div class="rotate-6">
                        <img src="{$img_url}img/office/4.png" alt="" class="num-1">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>项目设计</p>
                        </div>
                    </div>
                    <div class="rotate-7">
                        <img src="{$img_url}img/office/6.png" alt="" class="num-1">
                        <div class="lamp">
                            <img src="{$img_url}img/office/waiquan.png" alt="">
                            <img src="{$img_url}img/office/liquan.png" alt="" class="img-2">
                            <p>项目管控</p>
                        </div>
                    </div>
                    <div class="zjis"></div>
                    <div class="zjis-1"></div>
                    <div class="zjis-2"></div>
                    <div class="zxcv"></div>
                    <div class="zxcv-1"></div>
                    <div class="zxcv-2"></div>
                </div>
            </div>
        </div>
        <!-- 办公空间设计精品案例 -->
        <div class="Boutique">
            <div class="sort-4">
                <p>办公空间设计精品案例</p>
                <em>Excellent case</em>
            </div>
            <div class="Boutique-text">
                <div class="detection Plug-1">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-1.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>乡关科技办公空间设计</span> <br>
                            <em>设计面积：600m²</em>
                        </p>
                        <div class="discipline">
                            <!-- <img src="{$img_url}img/office/youj.png" alt=""> -->
                   
                             <a href="{$index_url}product/380-cn.html">
                      <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                            </a>
                        
                        </div>
                    </div>
                </div>
                <div class="detection Plug-1">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-2.jpg" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>大宏集团办公室设计</span> <br>
                            <em>设计面积：2800m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/515-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                           </a>

                        </div>
                    </div>
                </div>
                <div class="detection Plug-2">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-3.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>广州天贵科创办公室设计</span> <br>
                            <em>设计面积：1286m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/62-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="detection Plug-2">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-4.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>陕西西安新西兰公司办公室设计</span> <br>
                            <em>设计面积：813m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/64-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                                     </a>

                        </div>
                    </div>
                </div>
                <div class="detection Plug-3">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-5.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>爱心人寿办公室设计</span> <br>
                            <em>设计面积：600m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/243-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                                     </a>

                        </div>
                    </div>
                </div>
                <div class="detection Plug-3">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-6.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>广州天贵科创办公室设计</span> <br>
                            <em>设计面积：1286m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/62-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                                     </a>

                        </div>
                    </div>
                </div>
                <div class="detection Plug-4">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-7.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>北京昆泰办公室设计</span> <br>
                            <em>设计面积：200m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/335-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                                 </a>
                        </div>
                    </div>
                </div>
                <div class="detection Plug-4">
                    <div class="demo">
                        <img src="{$img_url}img/office/lest-8.png" alt="">
                    </div>
                    <div class="Research">
                        <p>
                            <span>北京壹点意念办公室设计</span> <br>
                            <em>设计面积：1000m²</em>
                        </p>
                        <div class="discipline">
                          <a href="{$index_url}product/420-cn.html">
                            <img src="{$img_url}img/office/youj.png" alt="">
                            <span class="hide"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="http://www.haianzhuangshi.com/product/list-178-cn.html"><div class="More heartbeat">查看更多</a></div>
        </div>
        <!-- 办公空间设计珍品案例 -->
        <div class="Treasures">
            <div class="sort-5">
                <p>办公空间设计精品案例</p>
                <em>Rare cases</em>
            </div>
            <div class="wrap">
                    <ul>
                        <li>
                    
                           
                            <img src="{$img_url}img/office/test1.png" alt="" style="width:100%;">
                     
                            <div class="Struggle">
                                <div class="contradiction">
                                    <em>北京</em>
                                   <p> <a href="{$index_url}product/337-cn.html">魏老香总部办公室设计714㎡</p>       </a>
                                     <span class="details"> <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  >立即预约</a></span>
                                </div>
                            </div>
                        </li>
                    <li><img src="{$img_url}img/office/test2.png" alt="" style="width:100%;">
                        <div class="Struggle">
                            <div class="contradiction">
                                <em>山西</em>
                                <p><a href="{$index_url}product/342-cn.html">田森办公室样板间设计870㎡</a></p>
                                 <span class="details"> <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  >立即预约</a></span>
                            </div>
                        </div>
                        </li>
                    <li><img src="{$img_url}img/office/test3.png" alt="" style="width:100%;">
                        <div class="Struggle">
                            <div class="contradiction">
                                <em>济南</em>
                                <p><a href="{$index_url}product/66-cn.html">心里疗养室设计600㎡</p>    </a>
                                 <span class="details"> <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  >立即预约</a></span>
                            </div>
                        </div>
                    </li>
                    <li><img src="{$img_url}img/office/test4.png" alt="" style="width:100%;">
                        <div class="Struggle">
                            <div class="contradiction">
                                <em>广州</em>
                                <p> <a href="{$index_url}product/268-cn.html">天贵办公室设计1286㎡</p>    </a>
                                 <span class="details"> <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  >立即预约</a></span>
                            </div>
                        </div>
                    </li>
                    <li><img src="{$img_url}img/office/test5.png" alt="" style="width:100%;">
                        <div class="Struggle">
                            <div class="contradiction">
                                <em>重庆</em>
                                <p><a href="{$index_url}product/290-cn.html">Rattan skin care800㎡</p>    </a>
                                 <span class="details"> <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  >立即预约</a></span>
                            </div>
                        </div>
                    </li>
                    <li><img src="{$img_url}img/office/test6.png" alt="" style="width:100%;">
                        <div class="Struggle">
                            <div class="contradiction">
                                <em>山西</em>
                                <p><a href="{$index_url}product/342-cn.html">田森办公室样板间设计870㎡</p>    </a>
                                <span class="details"> <a   href="javascript:void(0);" onclick="jQuery('.boxbig').show()"  >立即预约</a></span>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div> 
                
            
        </div>
         <div id="div1"></div> 
        <!-- 在线预约设计 -->

        <div class="appointment">
            <em>在线预约设计</em>
            
           <div class="qbtform">
<!--
EOT;
require_once template('feed/feedback_slr'); 
$metfeedback4=metlabel_feed_slr(166);
echo <<<EOT
-->  
    {$metfeedback4}    
     </div>
         <!--  <form class="form-main">
                <input type="text" placeholder="您的姓名">
                <input type="text" placeholder="您的手机号">
                <div class="formst">
                    <select>
                        <option selected="selected">省份</option>
                        <option value="河南">河南</option>
                        <option value="河南">河北</option>
                        <option value="河南">山西</option>
                        <option value="河南">内蒙古</option>
                        <option value="河南">黑龙江</option>
                    </select>
                    <i class="icon"></i>
                    <select>
                        <option selected="selected">城市</option>
                        <option value="河南">北京</option>
                        <option value="河南">天津</option>
                        <option value="河南">上海</option>
                        <option value="河南">广州</option>
                        <option value="河南">深圳</option>
                    </select>
                    <i class="icon-1"></i>
                </div>
                <textarea placeholder="请简述您的需求，我们会第一时间回复你您！"></textarea>
                <div class="Consultation heartbeat">立即咨询</div>
            </form>-->
        </div>
    </div>

<script src="{$img_url}js/slide_new.js" type="text/javascript"></script>         
<script type="text/javascript" src="{$img_url}fStyle/openwin.js">
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
 <div class="navigation">
    <ul class="nit">
      <li class="nit-li active">快速导航</li>
      <li>海岸设计</li>
    </ul>
    <ul class="gation">
<!--
EOT;
foreach($nav_list2[181] as $val){
  if($val['name']=='书店设计')continue;

echo <<<EOT
-->
      <li><a href="{$val[url]}" target="_blank" alt="{$val[name]}">{$val[name]}</a></li>
<!--
EOT;
}
echo <<<EOT
-->
    </ul>
    <ul class="gation clsplay">
<!--
EOT;
$met_link=methtm_link('text','','','',1);
echo <<<EOT
-->
       {$met_link}
    </ul>
  </div>
  <div class="qboot">
    <div class="qbootinn">
      <div class="bootlf"><img src="{$img_url}shudian/bootlogo.png"/><p>WEB：www.beijinghaian.com<br/>
        E -MAIL：ceo@beijinghaian.com <br/>
        地址：北京市朝阳区北汽双井文创园3号楼E座108</p></div>
      <div class="bootmid">
        <img src="{$img_url}shudian/bootqrcode.jpg"/>
        <p class="bootp1 bootmid1">扫一扫，免费通话</p>
        <p class="bootp2">海岸官方公众号</p>
        <p class="bootp3">在线服务客服</p>
        </div>
      <div class="bootrgt"><h3><img src="{$img_url}shudian/boot400.png"/></h3><p>全国免费热线</p><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="bootredbtn">立即预约</div></a></div>
      <div></div>
    </div>
  </div>
  <div class="footer">
      <div class="footer1">
        <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>京ICP备13049424号</span></p>
        <p>海岸声明：本站内容 图像资料版权均属「北京海岸设计」所有，任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布，违者本公司将依法追究其法律责任！</p> 
        <div class="cnzz">{$lang_foot_cnzz}</div>
      </div>  
    </div>
     <script>
  var _hmt = _hmt || [];
  (function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
  })();
  </script>
<div class="slide_order"></div>
  <div class="slide_fo_a">
    <div class="slide_c_a">
      <div class="slide_close"></div>
      <div class="center">
        <div class="slide_jt updown"></div>
        <div class="top_content">
          <span>归本主义风格</span>
          <span>打造最美好的设计</span>
        </div>
        <div class="top_left_img"></div>
      </div>
    </div>
    <div class="slide_f_a">
      <div class="center color_f">
          
      </div>
    </div>
  </div>  
<script src="{$img_url}js/slide_new.js" type="text/javascript"></script>
<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
 </body>
</html>         
<!--
EOT;
?>










