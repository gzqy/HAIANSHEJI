 <!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':''; 
require_once template('feed/form_l'); 
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" type="text/css" href="{$img_url}../cache/2.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/countryside.css"/> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/iconfont.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link href="{$_M[url][site]}favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_sySc.css">

<div class="faer_top" >
            <div class="fixednav">
                 <a href="{$index_url}" title="{$met_webname}">  
         
            </div>
        </div>
 
 <div style="display:none">
 { $met_foot_txt}
 </div>
<!--
EOT;
// require_once template('modular/head/more_nav');
echo <<<EOT
--> 
<body>
    <!-- banner头部 -->
    <header class="banner">
        <div class="banner-1">
            <div class="banner-2">
                <p class="strategy">战略设计</p>
            </div>
            <div class="plan">
                <ul>
                    <li><i class="xc_icon"></i>园林景观设计</li>
                    <li><i class="xc_icon"></i>园林规划设计</li>
                    <li><i class="xc_icon"></i>园林绿化设计</li>
                    <li><i class="xc_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公园绿化景观设计</li>
                    <li><i class="xc_icon"></i>风景园林设计</li>
                    <li><i class="xc_icon"></i>古典园林设计</li>
                    <li><i class="xc_icon"></i>公园景观设计</li>
                    <li><i class="xc_icon"></i>园林生态设计</li>
                </ul>
            </div>
            <div class="essence">
                <hr>
                <p>北京海岸设计创立于1999年，精英设计师300人组成</p>
                <hr>
            </div>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="btn">立即预约</button></a>
            <img src="{$img_url}xiangcun/banner_btn_03.png" alt="" class="drop-down">
            <p class="drop-down"></p>
        </div>
    </header>
    <!-- 标题1 -->
    <div class="title-1">
        <div class="Rural">
            乡村振兴背景
        </div>
        <div class="title-img">
            <div class="vigorous">
                <img src="{$img_url}xiangcun/xc_bg_03.png" alt="">
                <div class="Publish">
                    2018中央一号文件公布 <br>
                    全面部署实施乡村振兴战略
                </div>
                <div class="cont2centlt">
                    <ul class="imginfo">
                        <li>
                            中央一号文件”原指中共中央每年发的第一份文件，该文件在国家全年工作中具有纲领性和指导性的地位。<br>
                            一号文件中提到的”三农”问题是中央全年需要重点解决，也是当前国家急需解决的问题，更从一个侧面反中央一<br>
                            号文件映出了解决这些问题的难度。
                        </li>
                        <li>
                            十九大报告：实施乡村振兴战略是党十九大做出的重大决策部署<br>
                            是决胜全面小康社会，全面建设社会主义现代化国家的重大历史任务
                        </li>
                    </ul>
                    <ul class="imgbgcolor">
                        <li class="defoutimg"></li>
                        <li></li>       
                    </ul>
                </div>                
            </div>
        </div>
    </div>
    <!-- 标题2 -->
    <div class="title-2">
        <div class="Rural">
            乡村振兴转型思路
        </div>
        <div class="countryside">
            <ul class="situation">
                <div class="look">
                    <li class="active">
                        <div class="Letter">A</div>
                        <div class="Development">重点发展乡村</div>
                        <hr>
                        <div class="City">发展城市 → 城乡融合发展 </div>
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="appointment">立即预约</button></a>
                    </li>
                </div>
                <div class="look-1">
                <li>
                    <div class="Letter">B</div>
                    <div class="Development">发展乡村实体经济</div>
                    <hr>
                    <div class="City">经济的脱实向虚 → 脱虚向实 </div>
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="appointment">立即预约</button></a>
                </li>
            </div>
            <div class="look-2">
                <li>
                    <div class="Letter">C</div>
                    <div class="Development">打造乡村产业融合体</div>
                    <hr>
                    <div class="City">三产割裂发展 → 三产融合发展 </div>
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="appointment">立即预约</button></a>
                </li>
            </div>
            <div class="look-3">
                <li>
                    <div class="Letter">D</div>
                    <div class="Development">打造产，镇，人，文，治 <br>
                            兼备的乡村新生活载体</div>
                    <hr>
                    <div class="City">产业依赖 → 各产业生态并重 </div>
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="appointment">立即预约</button></a>
                </li>
            </div>
            </ul>
        </div>
    </div>
    <!-- 标题3 -->
    <div class="title-3">
        <ul class="Whole">
            <li class="production">
                <div class="House"></div>
                <div class="mode">1.转生产方式</div>
                <hr>
                <div class="xc_change">改变农业生产方式<br>创新社会化服务</div>
            </li>
            <li class="production">
                <div class="House"></div>
                <div class="mode">2.调产品流通</div>
                <hr>
                <div class="xc_change">改变农产品流通方式<br>促使产消良性互动</div>
            </li>
            <li class="production">
                <div class="House"></div>
                <div class="mode">3.促三产融合</div>
                <hr>
                <div class="xc_change">创建城乡互动载体<br>促进产业融合发展</div>
            </li>
            <li class="production">
                <div class="House"></div>
                <div class="mode">4.新乡村生活</div>
                <hr>
                <div class="xc_change">打造乡村新生活模式<br>培养新生活价值观</div>
            </li>
            <li class="production">
                <div class="House"></div>
                <div class="mode">5.聚新农人才</div>
                <hr>
                <div class="xc_change">形成乡村振兴合力<br>培养新农人队伍</div>
            </li>     
        </ul>
       <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"> <button class="immediately">立即预约</button></a>
    </div>
    <!-- 标题4 -->
    <div class="title-4">
        <div class="Rural">
            乡村振兴类型规划
        </div>
        <div class="type">
            <ul class="type-left"> 
                <li class="bright"><div class="Sensitive"></div><span class="one">1</span><p class="words">国家农业公园</p></li>
                <li class="bleft"><div class="div1"></div><span class="one">2</span><p class="words">休闲农场/休闲牧场</p></li>
                <li class="bright"><div class="Sensitive"></div><span class="one">3</span><p class="words">乡村营地/运动公园/乡村公园</p></li>
                <li class="bleft"><div class="div1"></div><span class="one">4</span><p class="words">乡村庄园/酒店/会所</p></li>
                <li class="bright"><div class="Sensitive"></div><span class="one">5</span><p class="words">乡村博物馆/艺术村</p></li>
            </ul>
            <ul class="type-right">
                <li class="tright"><div class="div-right"></div><span class="two">6</span><p class="citizen">市民农园</p></li>
                <li class="tleft"><div class="div-right1"></div><span class="two">7</span><p class="citizen">高科技农园/教育庄园</p></li>
                <li class="tright"><div class="div-right"></div><span class="two">8</span><p class="citizen">乡村民宿</p></li>
                <li class="tleft"><div class="div-right1"></div><span class="two">9</span><p class="citizen">农家乐</p></li>
                <li class="tright"><div class="div-right"></div><span class="two">10</span><p class="citizen">文化创意农园</p></li>
            </ul>
        </div>
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="Horse">立即预约</button></a>
    </div>
    <!-- 标题5 -->
    <div class="title-5">
        <div class="Rural">
            乡村振兴运营模式
        </div>
        <ul class="Operate">
            <li>
                <p class="industry">产业发展模式</p>
                <div class="main">
                    主要针对东部沿海等经济相对发达地区的乡村，其特点是产业优势和特色明显，产业化水平高。<br> <br>
                    规划路径：初步构建美丽乡村旅游产业链，针对每一个乡村特色，衍伸特色休闲农业产业，加速产业带动效应。
                </div>
            </li>
            <li >
                <p class="industry">生态保护型</p>
                <div class="main">
                    生态保护特点是自然条件优越，水资源和森林资源丰富，具有传统的田园风光和乡村特色，生态环境优势明显，
                    把生态环境优势变为经济优势的潜力大适宜发展生态旅游 <br><br> 
                    规划路径：构建旅游引导的农业生态示范区。
                </div>
            </li>
            <li>
                <p class="industry">城郊集约性</p>
                <div class="main">
                        城市郊区特点是经济条件较好，公共设施和基础设施较为完善，规模化经营水平高，土地产出率高，农民收入水平相对较高。 <br><br>

                        规划路径：在一、二线城市周边规划以品质乡村旅游为导向的新型城镇化和新农村社区建设示范项目
                </div>
            </li>
            <li>
                <p class="industry">资源整合性</p>
                <div class="main">
                    主要在沿海和水网地区的传统渔区，或者在我国牧区半牧区县(旗、市)，或者其他农业资源发达地区，产业以渔业或者牧业，或其他农业资源为主。<br><br> 
                    规划路径：构建休闲农业综合体。
                </div>
            </li>
            <li>
                <p class="industry">高效农业性</p>
                <div class="main">
                    其特点是以发展农业作物生产为主，农田水利等农业基础设施相对完善，农产品商品化率和农业机械化水平高，人均耕地资源丰富。<br><br>
                    规划路径：建立现代都市型生态科技农业产业示范园。
                </div>
            </li>
            <li>
                <p class="industry">休闲旅游型</p>
                <div class="main">
                    休闲旅游型美丽乡村模式主要是在适宜发展乡村旅游的地区，其特点是旅游资源丰富，住宿、餐饮、休闲娱乐设施完善齐备，交通便捷，距离城市较近<br><br>
                    规划路径：适合休闲度假发展乡村旅游潜力大。
                </div>
            </li>
        </ul>
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="Horse0">立即预约</button></a>
    </div>
    <!-- 标题6 -->
    <div class="title-6">
        <div class="revitalization">
            乡村十大振兴
        </div>
        <div class="xc_demo">
            <ul class="difficulty">
                <li class="interactive">
                    <p class="education">教育振兴</p>
                    <ul class="nesting fashion">
                        <li>1.打破城乡教育二元格局,</li>
                        <li>2.导入城市优质教育资源</li>
                        
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">产业振兴</p>
                    <ul class="nesting">
                        <li>1.融合发展乡村产业</li>
                        <li>2.发展乡村的新动能</li>
                        <li>3.有效规避“空心村”</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">环境振兴</p>
                    <ul class="nesting fashion-1">
                        <li>1.统筹治理“山水林田湖草”</li>
                        <li>2.打造美丽乡村</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">医疗振兴</p>
                    <ul class="nesting fashion-5">
                        <li>1.优化乡村医疗条件</li>
                        <li>2.实现乡村便民医疗</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">人心振兴</p>
                    <ul class="nesting fashion-4">
                        <li>1.激励留守村民信心</li>
                        <li>2.鼓动城市居民下乡决心</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">品牌振兴</p>
                    <ul class="nesting fashion-2">
                        <li>1.实施“一村一品牌”战略</li>
                        <li>2.注重乡村品牌的塑造推广</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">机制振兴</p>
                    <ul class="nesting">
                        <li>1.活化乡村管理机制</li>
                        <li>2.实现“党建产业、村民、<br>村务”多维统一</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">振兴文化</p>
                    <ul class="nesting">
                        <li>1.软实力文化振兴为<br> 每个村落留住乡魂,<br>真心文化软实力</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">公益振兴</p>
                    <ul class="nesting">
                        <li>1.鼓励乐善好施公益振 <br>的现代乡绅</li>
                        <li>2.让乡村更有“人情味</li>
                    </ul>
                </li>
                <li class="interactive">
                    <p class="education">基建振兴</p>
                    <ul class="nesting fashion-3">
                        <li>1.灵活运用政策、融资渠道,</li>
                        <li>2.切实改善乡村基础设施建设</li>
                    </ul>
                </li>
            </ul>
            <hr class="hr"><hr class="hr1"><hr class="hr2"><hr class="hr3">
            <hr class="hr4"><hr class="hr5"><hr class="hr6"><hr class="hr7">
        </div>
    </div>
     <!-- 标题7 -->
    <div class="title-7">
    <div class="Rural">
        海岸经典案例
    </div>
    <div class="Classic">
        <div class="Town">
            <p class="Campus">五山别院小镇设计</p>
            <div class="Architecture">
                塞北小镇是将建筑、景观与自然相融合，使之成为自然的一部
                分。 根据当地特色，小镇设有湿地公园、荣盛塞北中心、荣盛
                公园、荣盛商街、木头巨人国、狼山等内容。
            </div>
            <ul class="Architecture">
                <li>项目类型：城市规划</li>
                <li>使用面积：110亩</li>
                <li>总设计师：郭准先生</li>
                <li>项目地址：四川攀枝花</li> 
            </ul>
            <div class="inspect">
                <button><a href='http://www.haianzhuangshi.com/product/80-cn.html' target='_blank'>查看详情</a></button>
                <button class="choose"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">立即预约</a></button>
            </div>
        </div>
        <div class="wda">
            <ul>
                <li><img src="{$img_url}xiangcun/bieyaun.jpg" alt=""></li>
                <li><img src="{$img_url}xiangcun/xc_ws_01.jpg" alt=""></li>
                <li><img src="{$img_url}xiangcun/xc_ws_02.jpg" alt=""></li>
            </ul>
            <span class="lunborgtbtn">
                下一张
                <i class="singlebtn"></i>
            </span>
        </div> 
    </div>
    <div class="Classic-1">
        <div class="wda-1">
            <ul>
                <li><img src="{$img_url}xiangcun/anli_07.jpg" alt=""></li>
                <li><img src="{$img_url}xiangcun/xc_sb_01.jpg" alt=""></li>
                <li><img src="{$img_url}xiangcun/xc_sb_02.jpg" alt=""></li>
            </ul>
            <span class="lunborgtbtn-1">
                    下一张
                <i class="singlebtn"></i>
            </span>
        </div> 
        <div class="Town-1">
            <p class="Campus">塞北特色小镇设计</p>
            <div class="Architecture">
                塞北小镇是将建筑、景观与自然相融合，使之成为自然的一部
                分。 根据当地特色，小镇设有湿地公园、荣盛塞北中心、荣盛
                公园、荣盛商街、木头巨人国、狼山等内容。
            </div>
            <ul class="Architecture">
                <li>项目类型：城市规划</li>
                <li>使用面积：约300平方公里</li>
                <li>总设计师：郭准先生</li>
                <li>项目地址：河北张家口</li> 
            </ul>
            <div class="inspect">
                <button><a href='http://www.haianzhuangshi.com/product/81-cn.html' target='_blank'>查看详情</a></button>
                <button class="choose"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">立即预约</a></button>
            </div>
        </div>
    </div>
    <div class="Classic-1">
        <div class="Town">
            <p class="Campus">隐逸水镇设计</p>
            <div class="Architecture">
                隐逸水镇，一个桃花源般的旅行圣地,日出而作，日落而息最传
                统自然的生活方式，已然变成都市中上班族们的向往。纯净的
                空气、清澈的小溪。
            </div>
            <ul class="Architecture">
                <li>项目类型：室内外建筑</li>
                <li>使用面积：50亩</li>
                <li>总设计师：郭准先生</li>
                <li>项目地址：云南省文山壮族苗族自治州</li> 
            </ul>
            <div class="inspect">
                <button><a href='http://www.haianzhuangshi.com/product/212-cn.html' target='_blank'>查看详情</a></button>
                <button class="choose"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">立即预约</a></button>
            </div>
        </div>
        <div class="wda-2">
            <ul>
                <li><img src="{$img_url}xiangcun/xc_sz_01.jpg" alt=""></li>
                <li><img src="{$img_url}xiangcun/xc_sz_02.jpg" alt=""></li>
                <li><img src="{$img_url}xiangcun/xc_sz_03.jpg" alt=""></li>
            </ul>
            <span class="lunborgtbtn-2">
                下一张
                <i class="singlebtn"></i>
            </span>
        </div> 
    </div>
    </div>
    <!-- 标题8 -->
    <div class="title-8">
    <div class="Rural">
        关于海岸
    </div>
    <div class="frame">
        <div class="Include">
            <div class="character"></div>
            <div class="character1"></div>
            <div class="character2"></div>
        </div>
        <span class="truth">DESIGN</span>
        <div class="Choice">
            <div class="manager">
                <p>郭准先生</p>
                <div>
                    郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人
                    1999年创立北京海岸，                         
                    他所设计的空间充满着动态方位诱导，透视和生动明朗的创造，动态是创造性的                          
                    因为目的不在于追求耀眼的视觉效果                          
                    而是追求表现生活在其中人的活动本身。
                </div>
                <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="Horse-1">立即预约</button></a>
            </div>
            <div class="manager1">
                <p>北京海岸设计</p>
                <div>
                    北京海岸设计由郭准先生创立于1999年，是一家以归本主义设计理论为指导专注于咖啡厅装修设计、施工、监理一体化服务的专业化企业，
                    经过十余年漫长设计岁月的洗礼、积累与沉淀海岸创始人郭准先生创立了属于海岸独有的设计风格——归本主义，                    
                    海岸将致力于把归本主义流派与学说发扬光大，为人类的生活环境增加一道不同的风景，             
                    也籍此赢得客户、造福员工、发展海岸。
                </div>
                <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="Horse-1">立即预约</button></a>
            </div>
            <div class="manager2">
                <p>归本主义</p>
                <div>
                    归本主义是华美的贫乏、空虚的盈满、开放的围蔽、柔和的坚硬、半透明的不透明、
                    发光的实体、光亮的黑暗、模糊的清晰、浩瀚的荒僻
                    在生活体验中                      
                    不仅是设计的问题，历史、风土、社会等方方面面的事情都需要同时思考。
                </div>
                <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="Horse-1">立即预约</button></a>
            </div>
        </div>
        <ul class="small">
            <li class="list"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    </div>
 <!--
EOT;
require_once template('modular/news_specialTop_F');
echo <<<EOT
-->
    <!-- 标题9 -->
    <div class="title-9">
    <div class="Rural">
        案例详情
    </div>
    <div class="chain05">
        <div class="storefront">
            <div class='catcoff'>
                <img class="catcoffimg" src="{$img_url}xiangcun/isoftware1.jpg"/>
                <div class="lfrgticon">
                    <span class="qprebtn"></span>
                    <span class="qnextbtn"></span>
                </div>
            </div>
            <div class="catcoffrgt">
                <div>隐逸水镇设计</div>
                <hr>
                <a href='http://www.haianzhuangshi.com/product/212-cn.html' target='_blank' class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="Arrow"></span>
                </a>
                <p>
                    隐逸水镇位于云南省文山州丘北县，由北京海岸倾力打造。整个水镇是集水上乐园、民宿、餐饮、婚礼、野宿于一体的旅行圣地。
                    小溪自上而下流淌，不经意间将安静区和喧闹区分割开来，玩耍与休息在这里互不干扰，如此甚好。       
                    作为电视剧《三生三世十里桃花》的取景基地，隐藏于山水之间，犹如世外桃源般的普者黑景区也位于丘北县境内。          
                    郭准先生为了进一步体现丘北县的桃花源元素，隐逸水镇的设计材料以最原始的钢筋、水泥、原木为主。回归自然，享受自然。         
                    游走于天地间，感受万物灵气。在这里，呼吸那不曾沾染尘埃的空气，体验那如诗如画的景致，领略那绿色生态的意义。
                </p>
            </div>
            <div class="catcoffrgt clsplay">
                <div>塞北农旅</div>
                <hr>
                <a href='http://www.haianzhuangshi.com/product/432-cn.html' target='_blank' class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="Arrow"></span></a>
                <p>
                    野奢酒店带弥补京津冀高端消费的需求空缺，使置身于此的游客获得独特生活环境和区域未来价值，让置身者享受全新的艺术生活方式，
                    阳光、氧气、绿色、社交生活方式为内涵。
                    主要针对白领人群，引入国际最新理念“商业娱乐化，娱乐商业化”的场景互动体验式购物，打造多维度生活体验；  
                    酒店居住空间注重人与自然空间多维度交流，提供度假、养生、社交、娱乐、文化等多种综合性的体验，功能区内可以实现自我供给、循环。
                </p>
            </div>
            <div class="catcoffrgt clsplay">
                <div>塞北特色小镇</div>
                <hr>
                <a href='http://www.haianzhuangshi.com/product/81-cn.html' target='_blank' class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="Arrow"></span>
                </a>
                <p>塞北小镇，位于河北省张家口市沽源县塞北管理区，面积约300平方公里。为了在恢复生态的基础上合理发展，郭准先生将建筑、景观与自然相融合，
                    使之成为自然的一部分。
                    根据当地特色，小镇设有湿地公园、荣盛塞北中心、荣盛公园、荣盛商街、木头巨人国、狼山等内容。    
                    在本案的设计中，郭准先生从建筑入手，步入塞北大门，首先便看到一个雪人造型的吉祥物以及一分为二的建筑体。
                    如果说洋溢着青春可爱气息的雪人代表着塞北的冬天，那草坪和玻璃幕相结合的建筑，便天生属于这片草地。
                </p>
            </div>
            <div class="catcoffrgt clsplay">
                <div>五山别院小镇设计</div>
                <hr>
                <a href='http://www.haianzhuangshi.com/product/80-cn.html' target='_blank' class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<span class="Arrow"></span></a>
                <p>曾几何时，诗与远方成了久在囚笼里的我们高频词；我们一直试图寻找一个可以安放身体和心灵的归处，从遥远的城市出发来到五山别院，
                    山水之间，心境超然并不需要我们去参悟什么，浮生偷得半日闲让心灵度个假足矣。
                    在这里，一切风格的呈现都是为了自然流露，郭准先生以归本主义概念为统领，深刻挖掘巴蜀山水自然特色，将自然赋予的美景渗透到室内外  
                    每个细节中，演绎了一处如虹溪诺雅般的僻静放逐之境。
                    十几间民宿散落其间自成一派宜人景色，与山水的融洽是如此自然，无丝毫生硬与突兀 ，释放心情，再合适不过
                </p>
            </div>
            <div class="catcoffrgt clsplay">
                <div>博多创业产业园</div>
                <hr>
                <a href='http://www.haianzhuangshi.com/product/449-cn.html' target='_blank' class="maskbigico">点击查看&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="Arrow"></span>
                </a>
                <p>
                    为了将办公园区和商业综合体结合起来打造一个全新的建筑物，郭准先生用艺术的手法，将立体花园搬到空中通过建筑的错落叠拼形成一个立体的。
                    为了避免光照不足，他打破传统的设计模式让建筑物高低错落，同时还通过巧妙的错层设计使建筑外墙空间得到充分利用，综合体将生态系统运用
                    至建筑通过高低错落的落差间距形成一个天然的室内空气循环系统。
                    厚厚的墙体被绿植层覆盖就如皮肤一样遍及微孔，感受阳光和空气植物在上面生长，从而也给了建筑独特的视觉效果。
                </p>
            </div>
        </div>  
    
    </div>
    </div>
    <!-- 页面footer -->
    <footer class="footer">
        <div class="footermain">
        <div class="footermain1">
            <div class="footleft">
                <em class="factive">快速导航</em>
                <em>海岸设计</em>
                <ul class="alinkbox">
<!--
EOT;
foreach($nav_list2[181] as $key=>$val){
  if($val['name']=='乡村设计')continue;
echo <<<EOT
-->                
                  <a href="{$val['url']}" target="_blank" alt="{$val['name']}"><li>{$val['name']}</li></a>
<!--
EOT;
}
echo <<<EOT
-->
                </ul>
                <ul class="alinkbox hide">
                    <li><a href="">酒店设计</a></li>
                    <li><a href="">乡村设计</a></li>
                    <li><a href="">餐厅设计</a></li>
                    <li><a href="">特色小镇设计</a></li>
                    <li><a href="">田园综合体设计</a></li>
                </ul>
            </div>
            <div class="footcent">
                <ul>
                    <li>
                        <em>官方微信</em>
                        <img src="{$img_url}xiangcun/wx-1.jpg" alt="">
                    </li>
                    <li>
                        <em>官方微博</em>
                        <img src="{$img_url}xiangcun/wb-1.jpg" alt="">
                    </li>
                </ul>
            </div>
            <div class="footright">
                <a href=""><em>400-879-1110</em></a>
                <span>全国免费热线</span>
                <a href="http://p.qiao.baidu.com/cps/chatIndex?reqParam=%7B%22from%22%3A0%2C%22sid%22%3A%22-100%22%2C%22tid%22%3A%22-1%22%2C%22ttype%22%3A1%2C%22siteId%22%3A%2210721007%22%2C%22userId%22%3A%228158746%22%2C%22pageId%22%3A0%7D" target="_blank"><button>立即咨询</button></a>
            </div>
        </div>
        </div>
        <div class="footermost">
        <div class="footer-title">
            <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved.</p>
            <p>海岸声明：本站内容 图像资料版权均属「北京海岸设计」所有；任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布；违者本公司将依法追究其法律责任！</p>
            <p>*本页最终解释权为本公司所有</p>
            <div class="cnzz">{$lang_foot_cnzz}</div>
        </div>
        </div>
    </footer>
    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/countryside.js"></script> 
<script type="text/javascript" src="{$img_url}js/slider.js"></script>
<script type="text/javascript" src="{$img_url}js/slide_new.js"></script>
<script type="text/javascript" src="{$img_url}fStyle/openwin.js">
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
</body> 
<!--
EOT;
?>