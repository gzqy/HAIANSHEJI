<?php 
require_once template('head_haian');
echo <<<EOT
-->

<!-- 侧边导航开始 -->
<div class="besidenavbox">
    <dl class="besideyiji">
<!--
EOT;
    foreach($nav_list2[1] as $val2){
echo <<<EOT
-->
    <dt><a href="{$val2['url']}" target="_blank">{$val2['name']}</a></dt>
<!--
EOT;
    }
echo <<<EOT
-->
    </dl>
    <div class="besideturntop">
        <em>TOP</em>
        <span></span>
        <div class="turntopbgbox">
            
        </div>
    </div>
</div>
<!-- 侧边导航结束 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$img_url}css/abouthaian.css">  
</head>
	 <body>
    <!-- 头部 -->
    <!-- 标题-1 -->


    <div class="title">
        <div class="about"> 
            <p class="shut">01</p>
            <div class="sea">
                关于海岸
                <br>
                <span>ON THE COAST</span>
            </div>
            <img src="{$img_url}abouthaian/x-1.png" alt="" class="img-xie">
        </div>
        <!-- 轮播 -->
        <div class="carousel">
            <ul>
                <li>
                    <img src="{$img_url}abouthaian/0-1.png" alt="">
                    <i class="triangle"></i>
                </li>
            </ul>
        </div>
        <!-- 内容 -->
        <div class="establish">
            <p class="changes">“<span class="oast">北京海岸设计</span>”成立于1999年，至今已发展成为中国极具规模和影响力的综合性设计公司。北京海岸设计现有精英设计团队300余人，足迹遍布大江南北<br>
                <br>
                海岸的客户群涵盖了业界众多知名企业及集团：漫咖啡、咖啡陪你、咖啡之翼、麻辣诱惑、海底捞火锅、汉拿山、鸿坤、逸美时光、太平洋咖啡、山西田森集团、釜山料理、恒大集团、苏宁、华远地产等。<br><br>
                海岸秉承努力学习、虔诚服务的企业精神，形成了针对特定行业、不同规模、不同客户群体的系列产品和针对性解决方案，先后设计与承建了4000余项工程，项目遍布全国各地，并在加拿大和澳大利亚开展了业务。<br>
            </p>
        </div>
    </div>
    <!-- 标题-2 -->
    <div class="automatic">
        <div class="Include">   
            <ul>
                <li class="Modular">
                    <img src="{$img_url}abouthaian/_07.jpg" alt="">
                    <div class="mghf">
                        <span>郭老师美国回访</span>
                        <i class="icon"></i>
                    </div> 
                </li>
                <li class="Modular1">
                    <img src="{$img_url}abouthaian/mghf_03.jpg" alt="">
                    <div class="mghf">
                        <span>客户来访</span>
                        <i class="icon"></i>
                    </div> 
                </li>
                <li class="Modular2">
                    <img src="{$img_url}abouthaian/_10.jpg" alt="">
                    <div class="mghf">
                        <span class="meeting">"唯快不破"---2018海岸19周年主题年会</span>
                        <i class="icon"></i>
                    </div> 
                </li>     
            </ul> 
        </div>
    </div>
    <!-- 标题-3 -->
    <div class="Genesis">
        <div class="about"> 
            <p class="shut">02</p>
            <div class="sea">
                品牌创始人
                <br>
                <span>ABOUT THE FOUNDER</span>
            </div>
            <img src="{$img_url}abouthaian/x-1.png" alt="" class="img-xie">
        </div>
        <div class="brand">
            <p class="people">
                <img src="{$img_url}abouthaian/05-1.png" alt="">
                <span class="Teacher">
                    <img src="{$img_url}abouthaian/_03.png" alt="">
                </span>
            </p>
        </div>
        <div class="resume">
            <ul class="introduce">
                <li>郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸。在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角。</li>
                <li>从建筑的角度感受不同的人类文化，特别在欧美、日韩，他虔诚的寻访了建筑巨匠们的足迹深入大师们的实际作品内部，感悟奥妙所在，探寻大师们伟大思想的形成历程。</li>
                <li>在消化历代建筑大师的精华，思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。</li>
                <li>郭准先生喜欢置身于广袤的大自然环境之中，在大自然中感悟到蕴藏在四季之中的神秘力量，体会到了自然周围的韵律和节奏。</li>
                <li>他经历了一个搜索建立空间意义和表达的历程，从由实体转向空间，从静态空间到流体和连续空间，最后达成戏剧性的空间。</li>
            </ul>
            <ul class="introduce1">
                <li>他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的，因为目的不在于追求耀眼的视觉效果，而是追求表现生活在其中人的活动本身。</li>
                <li>他对于传统的重新解释，对于环境因素的重视，对于材料的强调，特别是钢木、砖石、混凝土、玻璃的运用，和一系列强烈装饰感的灯饰与家具的运用.</li>
                <li>归本主义作品是空间和形式在艺术上的惊奇组合，透过他的作品没有人可预测这个时刻将会到来。他愿意受传统的束缚，创新是他的手段，个人世界观是他灵感的源泉。</li>
                <li>无论是归本主义纹理细腻、轻盈柔美的清水混凝土，还是对光影的绝妙控制，这些具象的载体不过是他表达设计思想的某种手段，营造令人动容的精神空间才是他的诉求。</li>
                <li>如果仅用一个词汇形容他的归本主义作品，我们眼睛所见的种种虚形必将不着踪影，唯留感动二字。</li>
            </ul>
           <div class="line"></div>    
        </div> 
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
        <div class="btno">
            <span class="liji0">立即预约</span>
        </div>
        </a>
    </div>
    <!-- 标题-4 -->
    <div class="doctrine">
        <div class="layer">
            <p class="repeat">归本主义理念</p>
            <p class="natural">归本主义以“顺应自然”的理论为基础，以钢、木、砖、石、玻璃、混凝土为设计六大元素。
                表面材料 常用这些原生态元素再以绿色的自然景物衬托，使人觉得清新、脱俗。不过分渲染气氛，用最简单的 
                装饰营造最舒适的环境
            </p>
            <div class="hr"></div>
            <div class="stan">
                <p>北京海岸</p>
                <p>BEI JING HAI NA</p>
            </div>
            <P><img src="{$img_url}abouthaian/1-1.png" alt=""></P>
           
        </div>
    </div> 
    <!-- 标题-5 -->
    <div class="works" id="lo">
        <div class="anoe"> 
            <p class="shut">03</p>
            <div class="sea">
                归本主义九一律
                <br>
                <span>ABOUT NINE ARE</span>
            </div>
            <img src="{$img_url}abouthaian/x-1.png" alt="" class="img-xie">
        </div> 
        <div class="the_left">
            <div class="plan">
                <div class="one">
                    <div class="one-1">
                        <div class="one-title">
                            <ul>
                                <li style="padding-top:3px">一个归本主义作品</li>
                                <li>讲述一个故事</li>
                                <li>留下一个印象</li>
                            </ul>
                        </div>  
                    </div>
                </div>  
                <div class="two">
                    <div class="two-1">
                        <div class="two-title">
                            <ul>
                                <li style="padding-top:4px">把入口做的有意思点</li>
                                <li>把卫生间做的好玩点</li>
                                <li>把整个动线做的科学点</li>
                                <li>把功能区做的合理点</li>
                                <li>这是归本主义作品的起码要求</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="three">
                    <div class="three-1">
                        <div class="three-title">
                            <ul>
                                <li style="padding-top:4px">大自然的启示</li>
                                <li>生活感受、哲学与美学、园林与诗词</li>
                                <li>雕塑与绘画、建筑与音乐</li>
                                <li>人类地域文化的差别</li>
                                <li>是归本主义作品创作的灵感源泉</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="play">
                <div class="fore">
                    <div class="fore-1">
                        <div class="fore-title">
                            <ul>
                                <li>震撼人心的</li>
                                <li>归本主义作品</li>
                                <li>是第一印象</li>
                                <li>的建筑外观</li>
                                <li>是走进建筑</li>
                                <li>内部的空间感受</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="five">
                    <div class="five-1">
                        <div class="five-title">
                            <ul>
                                <li style="padding-top:3px">有冷有暖</li>
                                <li>有繁有简</li>
                                <li>有动有静</li>
                                <li>尺度与比列</li>
                                <li>内容与样式</li>
                                <li>这五个关系决定了一个</li>
                                <li>归本主义作品令人</li>
                                <li>愉快的程度</li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="the_right">   
            <div class="plah">
                <div class="six">
                    <div class="six-1">
                        <div class="six-title">
                            <ul>
                                <li style="padding-top:8px">玻璃</li>
                                <li>混凝土</li>
                                <li>钢、木</li>
                                <li>砖、石</li>
                                <li>是归本主义作品</li>
                                <li>的六个要素</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="seven">
                    <div class="seven-1">
                        <div class="seven-title">
                            <ul>
                                <li style="padding-top:4px">不好看、不好用</li>
                                <li>不安全、匠气</li>
                                <li>繁琐、庸俗</li>
                                <li>还贵</li>
                                <li>无耻的抄袭</li>
                                <li>占了这其中一条</li>
                                <li>就不配称为</li>
                                <li>归本主义作品</li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="plae">
                <div class="eight">
                    <div class="eight-1">
                        <div class="eight-title">
                            <ul>
                                <li style="padding-top:8px">不刻意的去显摆</li>
                                <li>不去模仿追逐别人</li>
                                <li>不做多余的事情</li>
                                <li>那么</li>
                                <li>我们的归本主义作品</li>
                                <li>就会流露出</li>
                                <li>自然 脱俗 简单的美</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nine">
                    <div class="nine-1">
                        <div class="nine-title">
                            <ul>
                                <li>让大自然进入室内</li>
                                <li>让文化艺术进入大自然</li>
                                <li>让智能和原始结合</li>
                                <li>让光成为建筑的表情</li>
                                <li>让材料释放本身的魅力</li>
                                <li>让空间打动人心</li>
                                <li>让意外的创意创造出戏剧化效果</li>
                                <li>让装修消失</li>
                                <li>用可持续和零排放的追求打造</li>
                                <li>令人愉快的归本主义作品</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 标题-6 -->
    <div class="team">
        <div class="alout"> 
            <p class="shut">04</p>
            <div class="sea">
                关于团队
                <br>
                <span>ABOUT THE TEAM</span>
            </div>
            <img src="{$img_url}abouthaian/x-1.png" alt="" class="img-xie">
        </div>
        <div class="boutique">
            <div class="character">
                <div class="character-1"></div>
            </div>
            <div class="coordination">
                <div class="coordination-1"></div>
                <div class="coordination-2"></div>
                <div class="Corps">海岸由精英设计师300余人组成</div>
            </div>
            <div class="project">
                <div class="project-1"></div>
                <div class="project-2"></div>
                <div class="project-3">分为18个战区进行专业化配合作业</div>
            </div>
            <div class="keep">
                <div class="keep-1"></div>
                <div class="keep-2"></div>
                <div class="keep-3">海岸每年完成400余项目</div>
            </div>
        </div>
    </div>
    <!-- 标题-7 -->
    <div class="scenery">
        <div class="aloue">
            <p class="shut">05</p>
            <div class="sea">
                海岸案例
                <br>
                <span>OFF THE COAST OF CASE</span>
            </div>
            <img src="{$img_url}abouthaian/x-1.png" alt="" class="img-xie">
        </div>
        <div class="formulate">
            <ul class="design">
                <li class="active0">酒店设计</li>
                <li>咖啡餐饮</li>
                <li>民宿设计</li>
                <li>景观规划</li>
                <li>品牌VI设计</li>
                <li><a href='http://www.haianzhuangshi.com/product/' target="_blank" style="color:#333">更多案例</a></li>
            </ul>
        </div>
        <div class="hotel" >
            <ul class="loste">
                <li class="control coff1 coff" data-move-y="200px" data-move-x="0px">
                    <img src="{$img_url}abouthaian/zt/jd/jd_03.jpg" alt="" class="img1">
                    <div class="mask">
                        <a href="{$index_url}/product/432-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control coff2 coff" data-move-y="200px" data-move-x="-100px">
                    <img src="{$img_url}abouthaian/zt/jd/jd_05.jpg" alt=""class="img2">
                    <div class="mask">
                        <a href="{$index_url}/product/86-cn.html" target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control coff3 coff" data-move-y="200px" data-move-x="100px" >
                    <img src="{$img_url}abouthaian/zt/jd/jd_07.jpg" alt=""class="img3">
                    <div class="mask">
                        <a href="{$index_url}/product/85-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control coff4 coff" data-move-y="200px" data-move-x="200px">
                    <img src="{$img_url}abouthaian/zt/jd/jd_09.jpg" alt=""class="img4">
                    <div class="mask">
                        <a href="{$index_url}/product/87-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
            </ul>
            <ul class="loste" style="display:none;">
                <li class="control coff1 coff" data-move-y="200px" data-move-x="0px">
                    <img src="{$img_url}abouthaian/zt/cd/ct_03.jpg" alt="" class="img1">
                    <div class="mask">
                        <a href="{$index_url}/product/375-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control coff2 coff" data-move-y="200px" data-move-x="-100px">
                    <img src="{$img_url}abouthaian/zt/cd/ct_05.jpg" alt=""class="img2">
                    <div class="mask">
                        <a href="{$index_url}/product/397-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control coff3 coff" data-move-y="200px" data-move-x="100px" >
                    <img src="{$img_url}abouthaian/zt/cd/ct_07.jpg" alt=""class="img3">
                    <div class="mask">
                        <a href="{$index_url}/product/181-cn.html" target="_blank"  class="info"></a>
                    </div>
                </li>
                <li class="control coff4 coff" data-move-y="200px" data-move-x="200px">
                    <img src="{$img_url}abouthaian/zt/cd/ct_09.jpg" alt=""class="img4">
                    <div class="mask">
                        <a href="{$index_url}/product/390-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
            </ul>
            <ul style="display:none;">
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/ms/ms_03.jpg" alt="" class="img1">
                    <div class="mask">
                        <a href="{$index_url}/product/304-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/ms/ms_05.jpg" alt=""class="img2">
                    <div class="mask">
                        <a href="{$index_url}/product/430-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/ms/ms_07.jpg" alt=""class="img3">
                    <div class="mask">
                        <a href="{$index_url}/product/59-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/ms/ms_09.jpg" alt=""class="img4">
                    <div class="mask">
                        <a href="{$index_url}/product/391-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
            </ul>
            <ul style="display:none;">
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_03.jpg" alt="" class="img1">
                    <div class="mask">
                        <a href="{$index_url}/product/253-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_05.jpg" alt=""class="img2">
                    <div class="mask">
                        <a href="{$index_url}/product/44-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_07.jpg" alt=""class="img3">
                    <div class="mask">
                        <a href="{$index_url}/product/449-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_09.jpg" alt=""class="img4">
                    <div class="mask">
                        <a href="{$index_url}/product/212-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
            </ul>
            <ul style="display:none;">
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/VI_03.jpg" alt="" class="img1">
                    <div class="mask">
                        <a href="{$index_url}/product/478-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/VI_05.jpg" alt=""class="img2">
                    <div class="mask">
                        <a href="{$index_url}/product/476-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/VI_07.jpg" alt=""class="img3">
                    <div class="mask">
                        <a href="{$index_url}/product/474-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/VI_09.jpg" alt=""class="img4">
                    <div class="mask">
                        <a href="{$index_url}/product/467-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
            </ul>
            <ul style="display:none;">
               <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_03.jpg" alt="" class="img1">
                    <div class="mask">
                        <a href="{$index_url}/product/253-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_05.jpg" alt=""class="img2">
                    <div class="mask">
                        <a href="{$index_url}/product/44-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_07.jpg" alt=""class="img3">
                    <div class="mask">
                        <a href="{$index_url}/product/449-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
                <li class="control">
                    <img src="{$img_url}abouthaian/zt/jg/jg_09.jpg" alt=""class="img4">
                    <div class="mask">
                        <a href="{$index_url}/product/212-cn.html"  target="_blank" class="info"></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- 标题-8 -->
    <div class="footer">
        <div class="aloua">
            <p class="shut">06</p>
            <div class="sea">
                合作客户<br>
                <span>COOPERATIVE CLIENT</span>
            </div>
            <img src="{$img_url}abouthaian/x-1.png" alt="" class="img-xie">
        </div>
        <div class="cooperation">
            <ul>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_03.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_05.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_07.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_09.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_16.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_18.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_19.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_20.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/gywmgb4_21.png" alt=""></li>
                <li><img src="{$img_url}abouthaian/Icon/mkftb_03.png" alt=""></li>
            </ul>
        </div>
    </div>   
</body>
<!--
EOT;
require_once template('foot');
?>