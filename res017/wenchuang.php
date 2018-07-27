  <!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':''; 
require_once template('feed/form_l');  
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" href="{$img_url}css/wenchuang.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/slide_sySc.css"> 
 <div class="faer_top" >
            <div class="fixednav">
                 <a href="" title="{$met_webname}">  
            </div>
        </div>
<div style="display:none">
 { $met_foot_txt}
 </div>  
 
  <body>
    <header>
        <div class="headerbgimgbox">
          <div class="headerbox">
            <h2>文创园规划</h2>
            <div class="wendiv">
              <p>文创园设计  &nbsp;&nbsp;&nbsp;产业园  &nbsp;&nbsp;&nbsp;创业园  &nbsp;&nbsp;&nbsp;产业园区规划  &nbsp;&nbsp;&nbsp;创业园区规划设计</p> 
            </div>
            <ul class="headerul">
              <li>海岸成立于1999年，精英设计师300余人，18个战区配合作业</li> 
            </ul>
            <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="ordernow">一键预约设计师</div></a>
             <div class=""><img class="ordern_x" src="{$img_url}wenchuang/ordern_x.png" alt="" style="
    transform: rotate(180deg);
"> </div>
          </div>
        </div> 
    </header>
    <!-- 海岸的服务 -->
     <div class="servtit">
          <i class="areatitle"><img src="{$img_url}wenchuang/areatitle1.png" alt=""></i>
          <fieldset>
              <legend>海岸的服务</legend>
          </fieldset>
          <h3>海岸·为设计而生的空间艺术家</h3>
    </div> 
    <div class="cexpansion">
          <ul class="strentchlist">
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">建筑景观<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">酒店设计<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">品牌餐饮<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">会所设计<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li class="strentchli"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">文创园设计<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">办公产业园区<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">书店设计<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
              <li><div class="barbar1"><h3><img class="upicon03" src="{$img_url}wenchuang/upicon03.png">软装配饰<img class="downicon03" src="{$img_url}wenchuang/downicon03.png"></h3></div></li>
          </ul>
          <img src="{$img_url}wenchuang/servicedowmimg.png" alt="">
    </div>
    <div class="addfivetype">
        <div class="fivtyptitle">
            <span>GEN GARDEN FIVE TYPES</span>
            <em>文创园五大类型</em>
        </div>
        <div class="fivtypcontbox">
            <div class="fivconttxtbox">
                <ul class="fivconttxtcont">
                <li><em>产业型</em><p>一是独立型的。园区内，产业集群发展相对比较成熟，有很强的原创能力，产业链相对完整，形成了规模效应。
<br>二是依托型的。依托高校发展，也形成了一定的产业链条。
<br>如上海虹漕南路创意产业园，同济大学周边的现代设计产业园区等等。</p></li>
                <li><em>混合型</em><p>这种类型的文化创意产业园往往依托科技园区，并结合园区内的优势产业同步发展文化产业，但园区内并未形成文化产业链条。如张江文化科技创意产业基地、香港数码港等。
<br>如上海虹漕南路创意产业园，同济大学周边的现代设计产业园区等等。</p></li>
                <li><em>艺术型</em><p>这种类型的园区也是创作型园区，原创能力强，但艺术产业化程度还较弱。目前国内最有名的艺术园区有北京大山子艺术园区、青岛达尼画家村等。
<br>如上海虹漕南路创意产业园，同济大学周边的现代设计产业园区等等。</p></li>
                <li><em>休闲娱乐型</em><p>这类文化创意产业园区主要满足当地居民及外来游客的文化消费需求。最有代表性的是上海的新天地、北京长安街文化演艺集聚区等。
<br>如上海虹漕南路创意产业园，同济大学周边的现代设计产业园区等等。</p></li>
                <li><em>地方特色型</em><p>照影响范围来分又有国际型、国内型和地区型；<br>

                 还可按园区最初的形成分为自发形成和政府运作形成的文化创意产业园。<br>在这进行的类型划分仅是根据当前的一些情况进行的划分，

                 园区类型的划分将会进一步完善。</p></li>
                </ul>
                <div class="fivcontbtnbox">
                    <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">立即预约</a>
                    <button class="fivenextbtn">下一张</button>
                </div>
            </div>
            <div class="fivcontpicbox">
                <ul class="fivcontpiccont">
                <li><img src="{$img_url}wenchuang/fivecontpic01.jpg" alt=""></li>
                <li><img src="{$img_url}wenchuang/fivecontpic02.jpg" alt=""></li>
                <li><img src="{$img_url}wenchuang/fivecontpic03.jpg" alt=""></li>
                <li><img src="{$img_url}wenchuang/fivecontpic04.jpg" alt=""></li>
                <li><img src="{$img_url}wenchuang/fivecontpic05.jpg" alt=""></li>
              </ul>
            </div>
        </div>
    </div>
  <!-- 标题2 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}wenchuang/chainengtit02.png"/></div>
    <div class="chinesefon">海岸文创园设计案例</div>
    <div class="zsblock"></div>
    <hr/>
    <p>高效的生产能力，快速的应变能力，完善的售后保障，是我们赢得客户信任的关键！</p>
  </div>
  <ul class="chain3">
    <li>
      <img src="{$img_url}wenchuang/c3centent01.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">博多创业产业园</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：浙江杭州<br>
            项目类型：文创园设计<br>
            使用面积：105827㎡<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>博多创业产业园</em>
        <span>105827㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/news/713-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>

    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent02.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">番茄小镇设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：山西<br>
            项目类型：文创园设计<br>
            使用面积：5平方公里<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>番茄小镇</em>
        <span>5平方公里</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/391-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent03.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">北汽摩文创园设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>地址：北京汽车技术学院<br>
            项目类型：文创园设计<br>
            使用面积：13亩<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>北汽摩文创园</em>
        <span>13亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/service/661-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent04.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">南瓜公社设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：河南鹤壁<br>
            项目类型：文创园设计<br>
            使用面积：30000㎡<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>南瓜公社</em>
        <span>30000㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/news/251-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent05.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">隐逸水镇设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
           <p>云南省文山壮族苗族自治州<br>
            项目类型：文创园设计<br>
            使用面积：50亩<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>隐逸水镇</em>
        <span>50亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/212-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent06.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">绵阳特色小镇设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
         <p>项目地址：四川绵阳<br>
            项目类型：文创园设计<br>
            使用面积：120亩<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>绵阳特色小镇</em>
        <span>120亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/service/523-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent07.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">五山别院小镇</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
         <p>项目地址：四川攀枝花<br>
            项目类型：文创园设计<br>
            使用面积：110亩<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>五山别院小镇</em>
        <span>110亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/80-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent08.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">沙包甸度假村设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：辽宁<br>
            项目类型：文创园设计<br>
            使用面积：7000㎡<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>沙包甸度假村设计</em>
        <span>7000㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/59-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent09.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">焉耆公共设施设计</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：四川绵阳<br>
            项目类型：文创园设计<br>
            使用面积：120亩 <br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>焉耆公共设施设计</em>
        <span>120亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/241-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent010.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">河北香河杨家大院</em>
        <div class="c3liupcent">
          <hr class="c3centerhr">
          <p>项目地址：河北香河<br>
            项目类型：文创园设计<br>
            使用面积：40亩<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>杨家大院</em>
        <span>40亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/444-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent011.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">南彩酒店公寓综合体</em>
        <div class="c3liupcent">
           <hr class="c3centerhr">
           <p>项目地址：北京<br>
            项目类型：文创园设计<br>
            使用面积：35641㎡<br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>南彩酒店公寓综合体</em>
        <span>35641㎡</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/450-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>
    </li>
    <li>
      <img src="{$img_url}wenchuang/c3centent012.jpg" alt="北京海岸设计">
      <div class="c3centerredbox"></div>
      <div class="c3centertxtbox">
        <em class="claem">归园田居</em>
        <div class="c3liupcent">
            <hr class="c3centerhr">
         <p>项目地址：四川绵阳<br>
            项目类型：文创园设计<br>
            使用面积：120亩 <br>
            总设计师：郭准先生<br>
        </p>
        </div>
      </div>
      <div class="c3lidowncent ">
        <em>归园田居</em>
        <span>120亩</span>
      </div>
      <div class="c3lidowncenta"><a href="http://www.haianzhuangshi.com/product/433-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a> </div>

    </li>
  </ul>
    
  </div> 
  <!-- 标题3 -->
  <div class="chaintitle" id="chain3downtitle">
    <div class="englishfon"><img src="{$img_url}wenchuang/chainengtit03.png"/></div>
    <div class="chinesefon">我们一路走过</div>
    <div class="zsblock"></div>
    <hr/>
    <p>北京海岸设计是您最专业的设计服务管家</p>
  </div>
  <div class="chain03">
    <div class="walkalong">
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-fuwu1"></i><p>为客户提供<span> 一站式全程服务</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-hangyeicon"></i><p>行业经验<span>从1999年成立服务至今</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-jingyantubiao"></i><p>经验丰富<span>280余位专职行业精英</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-zhouqi"></i><p>设计周期<span>保质保量高效率出图</span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-qian"></i><p>预算合理<br/><span>开创有新意<br/>节约成本的实现方式 </span></p></div></div>
      <div class="walkbox"><div class="walkcir"><i class="iconfont icon-xiangyingkuaisu"></i><p>快速响应<span>提交需求立即回电</span></p></div></div>
    </div>
    <div class="yellowborbtn"> 
      <a href="javascript:;" onclick="jQuery('.boxbig').show()">懒得看了？直接找设计师吧</a>
       
    </div>
    <div class="figurewall">
      <div class="figurewallinn">
        <div class="qlffontbk">
            <span>Let</span><br/>
            <span class="yellowfont">us</span><br/>
            <span>do a lot</span><br/>
            <span>of</span><br/>
            <span>things</span><br/>
            <span class="yellowfont">together</span>
        </div>
        <div class="qrgtfontbk">
          <p class="pfont1">让我们一起做一番事情</p>
          <p class="pfont2 pmargin2">携手共进谱写合作共赢  美·利  世界新篇章</p>
          <p class="pfont3 pmargin3">精选的装修原材料</p>
          <p class="pfont2 pmargin2"><span class="yellowfont">海 岸 精 心</span>选材严格把关</p>
          <p class="pfont3 pmargin4">做到整体质感表里如一</p>
          <p class="pfont2 pmargin2">最终赢得<span class="yellowfont">客 户 满 意</span></p>
          <p class="pfont3 pmargin6">专业的服务，从来电咨询开始！</p>
          <div class="specialbtn"><span>免费咨询热线</span><span><!-- 400-879-1110 --></span></div>
        </div>
      </div>
    </div>
  </div>
 <!-- 标题5 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}wenchuang/chainengtit05.png"/></div>
    <div class="chinesefon">海岸文创园设计案例赏析</div>
    <div class="zsblock"></div>
    <hr/>
    <p>高效的生产能力快速的应变能力，完善的售后保障，是我们赢得客户信任的关键！</p>
  </div>
  <!-- 大蒙版 -->
   <!-- <div class="bigHotel clsplay">
          <div class="meng"></div>
          <div class="nomeng">
            <img class="tuceng" src=""/>
             <img  class="bigicon01" src="{$img_url}wenchuang/close.png" alt="关闭">
             <img class="bigicon02" src="{$img_url}wenchuang/left.png" alt="上一页"><img class="bigicon03" src="{$img_url}wenchuang/right.png" alt="下一页">
              <div class="hoteldata"><span class="hotelname">唐庄艺术酒店</span><span class="hotelcount">3/7</span></div>
             
          </div>
       </div> -->
  <div class="chain05">
    <div class="storefront">
      <div class='catcoff'><img class="catcoffimg" src="{$img_url}wenchuang/isoftware1.jpg"/><div class="lfrgticon"><span class="qprebtn"></span><span class="qnextbtn"></span></div></div>
      <div class="catcoffrgt">
        <!-- <div class="addricon"><img src="{$img_url}wenchuang/locationico.png"/>北京·朝阳门</div> -->
        <h2>博多创业园设计</h2>
        <hr>
        <a class="maskbigico" href="http://www.haianzhuangshi.com/product/233-cn.html" target="_blank">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}wenchuang/rgtarrow.png"/></a>
        <p>
博多集团将产业园定义为一个办公为主、商业为辅的地方，分为办公、研发、商业、仓储和培训五个功能区域，是一个全新的运营方式，

可称之为复合型综合体。
建筑体如峡谷般高低错落，通过巧妙的错层设计，使建筑的外墙空间得到充分利用，种满植物，即可带来十倍建筑占地的绿化空间！</p>
      </div>
      <div class="catcoffrgt clsplay">
        <!-- <div class="addricon"><img src="{$img_url}wenchuang/locationico.png"/>北京·朝阳门</div> -->
        <h2>番茄小镇创意园设计</h2>
        <hr>
        <a class="maskbigico" href="http://www.haianzhuangshi.com/product/391-cn.html" target="_blank">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}wenchuang/rgtarrow.png"/></a>
        <p>番茄小镇位于山西省晋中市太谷县，逃离城市的喧嚣，规划总面积为3.3平方公里。规划区以番茄为实际载体，打造成为拥有特色产品、

特色农业、特色科技、特色名片及特色发展模式的番茄特色小镇。小镇分为文创体验区、新农村社区、庄园逸养区、滨水休闲游乐区、

高端度假区、太古酒庄、农耕创意园区七个特色区域，满足人们的各项需求，与自然和谐共生。</p>
      </div>
      <div class="catcoffrgt clsplay">
        <!-- <div class="addricon"><img src="{$img_url}wenchuang/locationico.png"/>北京·朝阳门</div> -->
        <h2>北汽摩文创园设计</h2>
        <hr>
        <a class="maskbigico" href="http://www.haianzhuangshi.com/service/661-cn.html" target="_blank">点击查看&nbsp;&nbsp;&nbsp;&nbsp;<img src="{$img_url}wenchuang/rgtarrow.png"/></a>
        <p>园区的改造应从市场出发，分析园区的文化基因和特质，形成和保留园区的整体印象。

因此，他对文创园的设计将突破单一产业的发展格局，将办公、餐饮、文创精品、艺术工作室、停车场等产业汇集于此，

搭建一个开放、多元文化融合、碰撞和交流的复合型创意产业园区，为都市人群提供全新体验生活方式的可能。</p>
      </div>
      <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><button class="catcoffbtnbox">立即预约</button></a>
    </div>
    
  
    <div class="blacklittlephone">
        <div class="inner1200">
            <span class="spanworry01">请别客气，与我联系！</span>
            <span class="spanworry02">全国免费服务热线：400-897-1110</span>
            <!-- <div class="divworry03">
              <i><img src="{$img_url}wenchuang/calling.gif" alt="拨打电话"></i>
              400-879-1110
            </div> -->
        </div>
    </div>
     
    <!-- 标题6 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}wenchuang/chainengtit-chose.png"/></div>
    <div class="chinesefon">选择海岸就是选择信任</div>
    <div class="zsblock"></div>
    <hr/>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您看到的是名字和标志，我们获得的是信任和满意。展示不是为了炫耀，而是，让您放心！</p>
  </div>
    <!-- 关于我们 -->
     <div class="aboutus">

        <img src="{$img_url}wenchuang/aboutus001.jpg">
        <div class="aboutinn">
          <div class="aboutrgt">
            <h2>关于我们</h2>
            <p>郭准先生<br>
              郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸


              为了追寻自己的设计理念，他在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角落。从建筑的角度感受不同的人类文化，特别是在欧美、日韩，

              他虔诚的寻访了建筑巨匠们的足迹，深入大师们的实际作品内部，感悟其中奥妙所在，探寻大师们伟大思想的形成历程。

              在消化历代建筑大师的精华，思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。
            </p>
          </div>
        </div>
        <div class="aboutinn">
           <div class="aboutrgt">
             <h2>关于我们</h2>
             <p>归本主义<br/>
               归本主义有着不同的思想内涵：<br/>
              ——他裸、他拙、他浪漫，他奢华……他本从土中来，他将归于尘土<br/>
              ——道法自然：按照自然的启示行事，而非刻意模仿自然；<br/>
              ——注重材料本质的运用，钢木、砖石、水泥、玻璃、树木、灯饰、老桌椅……<br/>
              ——凸显原始、原生态、崇尚自然文化为中心，<br/>

              在简单古朴的自然元素中增添了土耳其
              东南亚风格的水晶灯饰以及风格各异的桌椅，让人们在树影烛光下、柔美音乐中享受享受最美妙的时光……
               </p>
           </div>
        </div>
        <div class="aboutinn">
            <div class="aboutrgt">
              <h2>关于我们</h2>
              <p>海岸团队<br>有一面旗帜，有一个核心人物，有一彪整齐的人马，用爱和智慧在阳光照耀的地方播种荣光，这就是海岸——斗志昂扬的钢铁军团

                海岸以归本主义为核心设计理念，以九一律为设计指针，对每个项目进行原创设计。 海岸由精英设计师300余人组成，分为18个战区进行专业化配合作业。<br/>

                他们是这样的一群人
                ——有梦想
                又实干
                敢于冒险
                又充满创意
                ，洞察世事
                又见解独到，
                酷爱竞争又心怀慈悲
                ，是这样的一群人
                肩负着归本主义远播四方的使命
                担当着海岸的全部荣光
                </p>
            </div>
        </div>
        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show"><div class="aboutbtn">立即预约</div></a>
        <div class="aboutlfbtn"></div>
        <div class="aboutrgtbtn"></div>
     </div>
  </div>
   <!-- 标题6 -->
  <div class="chaintitle">
    <div class="englishfon"><img src="{$img_url}shudian/chainengtit06.png"/></div>
    <div class="chinesefon">海岸文创园设计 · 预约触手可及</div>
    <div class="zsblock"></div>
    <hr/>
    <p>欢迎您提交需求，收到您的需求我们会在第一时间内给您反馈！</p>
  </div>
  <div class="chain06">
    <div class="qbtform">
<!--
EOT;
require template('feed/feedback_slr'); 
$metfeedback3=metlabel_feed_slr(166);
echo <<<EOT
-->  
    {$metfeedback3}    
    </div>

  </div>
<footer>
  <div class="footertop">
    <div class="nav nav_down">
        <ul class="footul">
          <li>快速导航</li>
          <li>海岸设计</li>
        </ul>
    </div>
    <ul class="menuul">
      <li><a href="{$index_url}haian/show.php?id=188" target="_blank">咖啡厅设计</a></li> 
      <li><a href="{$index_url}haian/show.php?id=195" target="_blank">特色小镇设计</a></li> 
      <li><a href="{$index_url}haian/show.php?id=192" target="_blank">集装箱设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=206" target="_blank">商业综合体设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=193" target="_blank">酒店设计</a></li> 
      <li><a href="{$index_url}haian/show.php?id=194" target="_blank">民宿设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=189" target="_blank">网咖设计</a></li>
      <li><a href="{$index_url}product/product.php?class3=177" target="_blank">酒吧设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=190" target="_blank">会所设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=199" target="_blank">书店设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=114" target="_blank">文旅设计</a></li>
      <li><a href="{$index_url}/product/product.php?lang=cn&class2=151" target="_blank">园林设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=202" target="_blank">软装设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=119" target="_blank">商业综合体规划</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=114" target="_blank">文创园设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=150" target="_blank">主题酒店设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class3=174" target="_blank">咖啡馆设计</a></li> 
      <li><a href="{$index_url}haian/show.php?id=196" target="_blank">田园综合体设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=147" target="_blank">商业空间设计</a></li>
      <li><a href="{$index_url}haian/show.php?id=204" target="_blank">品牌VI设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=114" target="_blank">景观规划设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class3=155" target="_blank">图书馆设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=151" target="_blank">田园景观规划</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=154" target="_blank">民宿规划设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=182" target="_blank">室内软装设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=164" target="_blank">品牌定位策划</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class2=146" target="_blank">集装箱建筑规划</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class3=169" target="_blank">创意网咖设计</a></li>
      <li><a href="{$index_url}product/product.php?lang=cn&class3=170" target="_blank">高档会所设计</a></li>
    </ul>
    <ul class="menuul clsply">
      <li><a><strong>文创园设计</strong></a></li>
      <li><a><strong>产业园</strong></a></li>
      <li><a><strong>创业园</strong></a></li>
      <li><a><strong>产业园区规划</strong></a></li>
      <li><a><strong>创业园区规划设计</strong></a></li> 
    </ul>
    <hr class="hr_line"/>
        <div class="footertitle">
            <em>联系我们</em><span>Contact us</span>
        </div>
        <div class="footermain">
            <div class="ftmainlft">
                  <em><i class="fticon fticon1"></i>400-879-1110</em>
                  <em><i class="fticon fticon2"></i>haianzhuangshi@sina.com </em>
                  <em><i class="fticon fticon3"></i>www.haianzhuangshi.com</em>
                  <em><i class="fticon fticon4"></i>北京市朝阳区北汽双井文创园3号楼E座108号</em>
            </div>
             <div class="footzxlg">
                <img src="{$img_url}wenchuang/footlo.png"></img>
                <img src="{$img_url}wenchuang/free_phone.png"></img>
                <img src="{$img_url}wenchuang/telphone.png"></img> 
            </div>
            <ul class="ftmainrgt">
                  <li><img src="{$img_url}wenchuang/erweima1.jpg" alt="扫一扫，免费通话" /><span>扫一扫，免费通话</span></li>
                  <li><img src="{$img_url}wenchuang/erweima2.jpg" alt="微信公众号" /><span id="weixincenter">微信公众号</span></li>
            </ul>
        </div>
  </div>
  <div class="footerdown">
    <div class="ftdown_all">
        <p>CopRright &copy; 1999-2017 北京海岸设计 All Rrights Reserved. </p >
        <p>海岸声明：本站内容 图像资料版权均属北京海岸设计任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p >
        <p>京ICP备13049424号</p >
        <div class="cnzz">{$lang_foot_cnzz}</div>
    </div>     
  </div>
</footer>
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/slide_new.js"></script>
<script type="text/javascript" src="{$img_url}js/wenchuang.js"></script>
<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
  </body>       
<!--
EOT;
?>