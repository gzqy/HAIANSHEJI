  <!--<?php 
 $methtml_head  = metlabel_html5();//基于Html5
 $met_foot_txt = metlabel_foot();
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表） 
$navnow = $classnow==10001?'class="navblue"':''; 
require_once template('feed/form_l');   
echo <<<EOT
-->
{$methtml_head} 
<link rel="stylesheet" href="{$img_url}css/shangchang.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}css/feed_6_new.css"/> 
<link rel="stylesheet" type="text/css" href="{$img_url}css/fr_feed.css"/>
<link rel="stylesheet" type="text/css" href="{$img_url}fStyle/openwin_update_topWeb.css">
<link rel="stylesheet" type="text/css" href="{$img_url}number/number.css"> 
<script type="text/javascript" src="{$img_url}js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="{$img_url}js/shangchang.js"></script>
 <div class="faer_top" >
            <div class="fixednav">
                 <a href="" title="{$met_webname}"></a>  
            </div>
</div>
<div style="display:none">
 { $met_foot_txt}
</div>  

  <div class="bannfontfa">
  <div class="bannbar"></div>
    <div class="bannfont">
      <img src="{$img_url}shangchang/img1999.png"/>
      <h1>商场规划设计</h1>
      <h4>海岸创立于1999年，300人精英设计师，打造归本主义风格！</h4>
      <h3>商业广场设计<i><img src="{$img_url}shangchang/bannerarrow.png"></i>购物广场设计<i><img src="{$img_url}shangchang/bannerarrow.png"></i>百货广场设计<i><img src="{$img_url}shangchang/bannerarrow.png"></i>商业街规划</h3>
    </div>
    <div class="bannbigblue">
     <div class="lfbblue"></div> 
     <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="bannblue">立即<br>预约</a> 
   </div>
    <img src="{$img_url}shangchang/banner_01.jpg"/>
    <img src="{$img_url}shangchang/banner_02.jpg"/>
    <img src="{$img_url}shangchang/banner_03.jpg"/>
    <img src="{$img_url}shangchang/banner_04.jpg"/>
    <img src="{$img_url}shangchang/banner_05.jpg"/>
    <img src="{$img_url}shangchang/banner_06.jpg"/>
    <img src="{$img_url}shangchang/banner_07.jpg"/>
    <img src="{$img_url}shangchang/banner_08.jpg"/>
    <img src="{$img_url}shangchang/banner_09.jpg"/>
    <img src="{$img_url}shangchang/banner_10.jpg"/>
    <img src="{$img_url}shangchang/banner_11.jpg"/>
    <img src="{$img_url}shangchang/banner_12.jpg"/>
    <img src="{$img_url}shangchang/banner_13.jpg"/>
    <img src="{$img_url}shangchang/banner_14.jpg"/>
    <img src="{$img_url}shangchang/banner_15.jpg"/>
    <img src="{$img_url}shangchang/banner_16.jpg"/>
    <img src="{$img_url}shangchang/banner_17.jpg"/>
    <img src="{$img_url}shangchang/banner_18.jpg"/>
    <img src="{$img_url}shangchang/banner_19.jpg"/>
    <img src="{$img_url}shangchang/banner_20.jpg"/>
    <img src="{$img_url}shangchang/banner_21.jpg"/>
    <img src="{$img_url}shangchang/banner_22.jpg"/>
    <img src="{$img_url}shangchang/banner_23.jpg"/>
    <img src="{$img_url}shangchang/banner_24.jpg"/>
    <img src="{$img_url}shangchang/banner_25.jpg"/>
    <img src="{$img_url}shangchang/banner_26.jpg"/>
    <img src="{$img_url}shangchang/banner_27.jpg"/>
    <img src="{$img_url}shangchang/banner_28.jpg"/>
    <img src="{$img_url}shangchang/banner_29.jpg"/>
    <img src="{$img_url}shangchang/banner_30.jpg"/>
    <img src="{$img_url}shangchang/banner_31.jpg"/>
    <img src="{$img_url}shangchang/banner_32.jpg"/>

   </div>
   

<div class="busitit">
    <h2 class="cntit">专业服务</h2>
    <h2 class="engtit">PROFESSIONAL SERVICES</h2>
  </div>
  <div class="cexpansion">
    <ul class="strentchlist">
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=114" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">景观规划<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=114" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">建筑景观<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=113" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">特色小镇<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li  class="strentchli"><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=147" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">商场规划设计<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=119" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">商业综合体<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class3=178" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">办公产业园区<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class3=155" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">书店设计<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=182" target="_blank"><div class="barbar1"><h3><img class="upicon03" src="{$img_url}shangchang/upicon03.png">软装配饰<img class="downicon03" src="{$img_url}shangchang/downicon03.png"></h3></div></a></li>
    </ul>
  </div>
  <div class="busitit">
    <h2 class="cntit">优秀案例</h2>
    <h2 class="engtit">OUTSTANDING CASE</h2>
  </div>
  <div class="baulkimgs">
    <ul class="bauklist">
      <li><img src="{$img_url}shangchang/baulkimg01.jpg"/><div class="barbaric"></div><div class="lander"><h2>南瓜公社</h2>
      <p>项目地址：河南鹤壁<br/>
        项目类型：商场设计<br/>
        使用面积：30000㎡<br/>
        总设计师：郭准先生<br/>
        设计风格：归本主义</p>
      <a href="http://www.haianzhuangshi.com/service/252-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg02.jpg"/><div class="barbaric"></div><div class="lander"><h2>蜂巢商业综合体</h2>
         <p>项目地址：河北<br/>
            项目类型：商业体设计<br/>
            总设计师：郭准先生<br/>
            设计风格：归本主义</p>
      <a href="http://www.haianzhuangshi.com/product/38-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg03.jpg"/><div class="barbaric"></div><div class="lander"><h2>云创谷商业综合体</h2>
        <p>
          项目地址：黑龙江<br/>
          项目类型：商业综合体设计<br/>
          使用面积：180亩<br/>
          总设计师：郭准先生<br/>
          设计风格：归本主义
        </p>
      <a href="http://www.haianzhuangshi.com/news/496-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg04.jpg"/><div class="barbaric"></div><div class="lander"><h2>隐逸水镇设计</h2>
        <p>
          项目地址：云南省文山壮族苗族自治州丘北县<br/>
          项目类型：室内外建筑<br/>
          使用面积：50亩<br/>
          总设计师：郭准先生<br/>
          设计风格：归本主义
        </p>
      <a href="http://www.haianzhuangshi.com/product/212-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg05.jpg"/><div class="barbaric"></div><div class="lander"><h2>塞北特色小镇设计</h2>
        <p>
          项目地址：河北张家口<br/>
          项目类型：城市规划<br/>
          项目面积：约300平方公里<br/>
          总设计师：郭准先生<br/>
          设计风格：归本主义
        </p>
     <a href="http://www.haianzhuangshi.com/product/81-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg06.jpg"/><div class="barbaric"></div><div class="lander"><h2>杭州博多</h2>
        <p>
          项目地址：浙江杭州<br/>
          项目类型：室内外建筑<br/>
          使用面积：97313㎡<br/>
          总设计师：郭准先生<br/>
          设计风格：归本主义
        </p>
     <a href="http://www.haianzhuangshi.com/product/233-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg07.jpg"/><div class="barbaric"></div><div class="lander"><h2>新疆公共设施设计</h2>
          <p>
            项目地址：新疆焉耆<br/>
            项目类型：公共设施建设<br/>
            总用地面积：1270亩<br/>
            总建筑面积：1481354㎡<br/>
            总设计师：郭准先生<br/>
            设计风格：归本主义
          </p>
      <a href="http://www.haianzhuangshi.com/product/250-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg08.jpg"/><div class="barbaric"></div><div class="lander"><h2>江苏淮安广场</h2>
        <p>
          项目地址：江苏淮安CBD<br/>
          项目类型：商场设计<br/>
          使用面积：14285㎡<br/>
          总建筑师：郭准先生
        </p>
      <a href="http://www.haianzhuangshi.com/product/54-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
      <li><img src="{$img_url}shangchang/baulkimg09.jpg"/><div class="barbaric"></div><div class="lander"><h2>中阿军事合作小镇</h2>
        <p>
          项目地址：内蒙古自治区阿拉善左旗腾格里沙漠<br/>
          项目类型：室内外建筑<br/>
          使用面积：十平方公里<br/>
          总设计师：郭准先生<br/>
          设计风格：归本主义
        </p>
      <a href="http://www.haianzhuangshi.com/product/78-cn.html" target="_blank">查看详情</a><a href="javascript:;" onclick="jQuery('.boxbig').show()">立即预约</a></div></li>
    </ul>
  </div>
  <div class="avegentbox">
      <div class="avegent">
        <div class="lftpbor"></div>
        <div class="rgttpbor"></div>
        <div class="lfbtbor"></div>
        <div class="rgtbtbor"></div>
        <hr class="lfhr001"><hr class="rgthr001">
        <p class="lftp001">海岸设计团队汇聚跨领域的国际精英人才，每一个海岸设计人
        都是久经沙场的圣斗士，他们具有广博的知识构成，优秀的沟
        通能力，前瞻和敏锐的目光。保证项目的顺利进行与质量，多
        年来，海岸设计团队为数不清的客户提供专业科学的设计分析
        赢得了海岸内外客户与同事的盛誉。行业办公研究与分析、建
        筑与景观规划项目策划等内容。</p>
        <p class="rgttp001">海岸以归本主义对每个项目进行原创，专业资深的设计团队涵
        盖建筑、景观规划、酒店、办公、会所、商场等综合公共空间
        这里有历经风雨沉稳内敛的设计师郭准先生，提供给每一个项
        目全面精细的设计分析。我们坚持作品的独创性，抵抗在追求
        快速实现利益最大化的进程中设计的趋同。用直觉和情感靠近
        真相，以人为本，创造满足人们物质和精神生活需要的人居环境。</p>
         <p class="lfbt001">海岸坚持“设计施工一体，设计施工分离”的原则，设计施工
        完美对接，同时设计施工核算独立以保证设计效果不打折。无  
      论在方案设计、材料选配、施工环节，都注重节能环保新材料 
      、新技术的应用。是国内少数能将气象数据应用在采光设 
        计、节能设计、生态感应等方面的专业团队。</p>
        <p class="rgtbt001">海岸设计团队，针对酒店、商业空间、会所、商场等提供软装
        设计及顶级定制服务。我们擅于将艺术融入设计，用细节表达
        生活气息；我们从不追逐流行，我们坚持每一个作品的独创性 
        。为客户提供定制式的软装设计与实现服务，以此示范生活
        之美、建立行业标杆，推进新的主流的产生。</p>
        <div class="avegcenter">

          <img class="centeravg" src="{$img_url}shangchang/avgcen00.png"/>
          <img class="ltavg" src="{$img_url}shangchang/avgcen01.png"/>
          <img class="rtavg" src="{$img_url}shangchang/avgcen02.png"/>
          <img class="lbavg" src="{$img_url}shangchang/avgcen03.png"/>
          <img class="rbavg" src="{$img_url}shangchang/avgcen04.png"/>
          <div class="udhr">
            <p>我们的优势</p>
          </div>
        </div>
      </div>
  </div>
  <div class="usensurebox">
    <h2>我们的保障</h2>
    <span>我们四大保障的保障，升华后的空间让您更为满意</span>
    <div class="usensuremain">
      <ul class="ensureul">
        <li><i><img src="{$img_url}shangchang/ensureicon1.png" alt="实力设计"></i><div class="ensureulcenter"><em>实力设计</em><p>行业大咖设计，拒绝伪资深</p></div></li>
        <li><i><img src="{$img_url}shangchang/ensureicon2.png" alt="保证原创"></i><div class="ensureulcenter"><em>保证原创</em><p>以归本主义风格100%原创</p></div></li>
        <li><i><img src="{$img_url}shangchang/ensureicon3.png" alt="品牌定制"></i><div class="ensureulcenter"><em>品牌定制</em><p>高端私人订制，尽显品牌个性</p></div></li>
        <li><i><img src="{$img_url}shangchang/ensureicon4.png" alt="完美售后"></i><div class="ensureulcenter"><em>完美售后</em><p>多年完美良心服务，满意为止</p></div></li>
      </ul>
    </div><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
    <button class="ensurebtn">立即预约设计师</button></a>
  </div>
  <div class="caseshowbox">
                 <div id="wrap">
                    <div id="tab">
                      <li class='on'>
                            <h3>江苏淮安CBD</h3>
                            <div class="b7duoline">项目地址：江苏淮安CBD <br>
                            项目类型：商场设计 <br>
                            使用面积：14285㎡ <br>
                            总设计师：郭准先生 <br>
                            </div>
                            <p>
                              郭准先生的归本主义设计理念讲究点缀在自然和心灵中的自然回归感，在任何一个角落，都能让人体会到悠然自得和阳光明媚。
                              夜色下的春日街头，植物、木质材料、玻璃以及锈铁的搭配“半旧时装”，无不彰显出淮安CBD建筑外观及广场设计的气质与品位。<br>夜色下的春日街头，植物、木质材料、玻璃以及锈铁的搭配“半旧时装”，无不彰显出淮安CBD建筑外观及广场设计的气质与品位
                              <br>更重要的是，这样的半旧不新，让建筑的视觉性和自然感立即数倍地增强。
                            </p>
                      </li>
                      <li>
                            <h3>南瓜公社</h3>
                            <div class="b7duoline">项目地址：河南鹤壁<br>
                              项目类型：室内设计<br>
                              使用面积：30000㎡<br>
                              总设计师：郭准先生<br>
                            </div>
                            <p>
                            在本案的设计中，郭准先生将建筑以super fly为中心分为两侧，北侧楼以教育为主，南侧楼以娱乐休闲为主。
                            <br>
                            其中，北侧楼的一至四层为幼儿园，五层为电影院，六层为餐厅。南侧楼的一至三层为儿童娱乐场所，四至六层为酒店。
                            <br>
                            流畅的线条，活力的色彩，每一层的设计都带给人们不同的视觉感官印象。
                            </p>
                      </li>
                      <li>
                            <h3>山西时代广场建筑体设计</h3>
                            <div class="b7duoline"> 项目地址：山西运城<br>
                              项目类型：室内外设计<br>
                              使用面积：500㎡<br>
                              总设计师：郭准先生<br>
                            </div>
                            <p>
                            本案是一个商业营销中心的建筑体设计，设计师参考集装箱的设计元素，对形式进行创新设计，打乱原有结构进行材质重组，从而打造了一个造型新颖的不规则建筑体。
                            <br>
                            建筑整体风格简约大气，构成简洁洗练，设计师将简单几何图形巧妙的融入设计当中，明确直接，趣味十足。
                            </p>
                      </li>
                      <li>
                            <h3>云创谷商业综合体</h3>
                            <div class="b7duoline">项目地址：黑龙江<br>
                              项目类型：室内外建筑<br>
                              使用面积：180亩<br>
                              总设计师：郭准先生<br>
                            </div>
                            <p>
                            在本案的设计中，郭准先生以“细胞”为主要设计元素，建筑外观采用细胞的形状进行设计，用科技的手法展现孕育、孵化的魅力。
                            <br>
                            为了将室内外相融合，郭准先生利用建筑和其外部环境之间的灰空间，进行着重设计，用室外景色打破钢筋混凝土及玻璃幕墙所带来的“硬、实”效果。
                            </p>
                      </li>
                      <li>
                            <h3>新疆公共设施建设</h3>
                            <div class="b7duoline">项目地址：新疆焉耆<br>
                            项目类型：公共设施建设<br>
                            使用面积：1270亩<br>
                            总设计师：郭准先生<br>

                            </div>
                            <p>
                              以小镇中心湖面为景观轴，沿湖面两侧建设文化小镇和主题乐园。景观中心建设高端酒店，酒店北侧向开都河方向，建设特色民宿，基地北侧为高层住宅。
                              <br>
                              湖心酒店和特色民宿位于基地中心，人们可通过在景观中心自由穿梭到达湖面两侧各文化场馆和商业娱乐区。每个组团景观同湖面景观轴相连，围绕同一主题设计, 主次分明，既统一又独立。
                            </p>
                      </li>
                      <li>
                            <h3>MEET U酒店公寓</h3>
                            <div class="b7duoline"> 项目地址：上海<br>
                                  项目类型：室内设计<br>
                                  使用面积：614㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            归本主义天然的设计理念，融入到公寓的设计里，从内带外透漏出典雅大气的风范
                            裸露的混凝土结构诉说着这里的历史，木材的质感传达给客人温暖、热情的讯号，绿植的点缀营造舒适自然的环境
                            </p>
                      </li>
                      <li>
                            <h3>唐庄艺术酒店</h3>
                            <div class="b7duoline"> 项目地址：山东<br>
                                  项目类型：室内设计<br>
                                  使用面积：2857㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            这里有热恋般的浪漫与激情，有梦幻般的时空穿梭，有粗犷的工业质感也有田园风光
                            以艺术的创意巧思，展现耐人寻味的文化内涵，以低调奢华的典雅品味打动人心，传递清新的设计美学
                            </p>
                      </li>
                      <li>
                            <h3>东方酒店</h3>
                            <div class="b7duoline"> 项目地址：内蒙古<br>
                                  项目类型：室内设计<br>
                                  使用面积：2130㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            略去繁杂的线条，升华空间的高度，尊享艺术文化之品质，每一处都极具创意美感
                            当艺术优雅地融入生活，当俄式元素木屋走入酒店，那神秘中的丝丝敏感，在归本主义元素间微妙，或洋溢着热情，或权衡这安静
                            </p>
                      </li>
                      <li>
                            <h3>太谷田里酒店 </h3>
                            <div class="b7duoline"> 项目地址：山西<br>
                                  项目类型：室内外建筑<br>
                                  使用面积：11055㎡<br>
                                  总设计师：郭准先生<br>
                            </div>
                            <p>
                            极简风，东西方文化与新旧元素进行融合，没有任何扎眼和哗众取宠的设计
                            自然光下的折纸将成为创造和谐紧密的建筑外轮廓，边边角角，条条框框，有意无意间，都在体现对极致生活的追求
                            </p>
                      </li>
                    </div>
                    <div id='pic'>
                      <li class='l1'><img src="{$img_url}shangchang/1_03.jpg" alt="" /></li>
                      <li class='l2'><img src="{$img_url}shangchang/2_03.jpg" alt="" /></li>
                      <li class='l3'><img src="{$img_url}shangchang/3_03.jpg" alt="" /></li>
                      <li class='l9'><img src="{$img_url}shangchang/4_03.jpg" alt="" /></li>
                      <li class='l0'><img src="{$img_url}shangchang/5_03.jpg" alt="" /></li>
                    </div>
                    <div id="btn">
                      <div id="left"></div>
                      <div id="right"></div>
                    </div>
                  </div>  
      </div>
     <!-- 关于我们 -->
   <div class="aboutus">

   <img src="{$img_url}heti/aboouter.jpg">
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
     <div class="aboutinn">
       <div class="aboutrgt">
         <h2>归本主义</h2>
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
          <h2>郭准先生</h2>
          <p>郭准先生<br>
            郭准先生，知名建筑师，归本主义发起人、北京海岸品牌创始人，1999年创立北京海岸


            为了追寻自己的设计理念，他在漫长的设计岁月间隙，用大量光阴游历了地球的每一个角落。从建筑的角度感受不同的人类文化，特别是在欧美、日韩，

            他虔诚的寻访了建筑巨匠们的足迹，深入大师们的实际作品内部，感悟其中奥妙所在，探寻大师们伟大思想的形成历程。

            在消化历代建筑大师的精华，思考业界的现状及趋势，结合自己从业以来的沉淀与感悟，最终形成了自己独特的建筑思想——归本主义。
          </p>
      </div>
     </div>
     <div class="aboutbtn"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">立即预约</a></div>
     <div class="aboutlfbtn"></div>
     <div class="aboutrgtbtn"></div>
   </div>
      <div class="shangchangcaseshowbox">
          <div class="shangchangcaseshow">
              <div class="shangchangcasepic">
                  <ul>
                    <li><img src="{$img_url}shangchang/shangchangimglinbo1.jpg" alt="北京海岸商业综合体设计案例"></li>
                    <li><img src="{$img_url}shangchang/shangchangimglinbo2.jpg" alt="北京海岸商业综合体设计案例"></li>
                    <li><img src="{$img_url}shangchang/shangchangimglinbo3.jpg" alt="北京海岸商业综合体设计案例"></li>
                  </ul>
                 <!--  <div class="shangchangchangebtnleft"></div>
                  <div class="shangchangchangebtnright"></div> -->
              </div>
              <div class="shangchangcasetxt">
                  <span>MALL PLANNING AND DESIGN</span>
                  <em>商场规划设计</em>
                  <hr class="shangchangshowhr">
                  <p>
                      购物中心的市场定位从某种意义上讲比选择地段更重要。详细的调研，清晰的判断，宏观的统筹，果断的决策，是准确定位的要件，这样才能准确把握市场脉搏，确定不同类别的经营模式，避免同质性，创造最大差异化，从而引领市场。海岸设计，致力于打造商场设计行业的领军品牌。海岸有针对性地为不同地域、不同类型的项目提供专业、完善的设计支持，经过多年的风雨历程，海岸积累了丰富的设计实践经验以及一大批精锐高能的设计人才。
                  </p>
                 <a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class2=119" target="_blank">
                  <button>更多案列</button> </a>
              </div>
          </div>
      </div>
      <div class="linianbox">
          <em>商业中心的经营档次与形象定位</em>
          <div class="linianpbox">
            <p>建立独特而鲜明的购物商场设计、百货商场设计、商业街规划形象不仅是竞争市场的制胜关健，而且是快速提升企<br/>
               业知名度和美誉度的重要手段。海岸捕捉时代的元素、历史的印记，实现着生活的美好，让每位到店的顾客留下美<br/>好的记忆成为城市生活中不可缺失的组成部分。<br/>
                购物商场设计——无论是独立商铺、超级市场、百货店、购物中心，所有的商场规划设计都要实现它的功能。不同<br/>
              的空间对通道设置、楼层业态安排、平行交通组织、垂直交通组织公共空间的尺度控制，有着不同的要求。我们的<br/>团队在积淀中实现传承和发展。<br/>
              商场规划的形象定位，实际上是商场经营企业的形象定位，因此，它随着商场的经营运作而持续存在并发挥作用。通过<br/>
              对商业中心品牌的定位界定商业文化内涵，建立超前的品牌形象（引领购物时尚、反映地域特色、精选服务对象、<br/>
              创新组合业态、综合形象鲜明且易推广传播等）。所以从战略高度上系统设计和推出专业化商场规划设计/商业广场<br/>
              设计是完全必要的选择，也是成就卖场无形的品牌资产根本。

</p>
          
          </div>
         <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
          <button>立即预约</button></a>
      </div> 
      <div class="jianyanbox">
          <p>
            失去一个客户<br>
            只需要一秒<br>
            得到一个客户的信任<br>
            却需要三年<br>
            签约只是服务的开始<br>
            服务却永远没有句号
          </p>

          <div class="graybtn1"> <div class="graybarbar"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">立即预约设计师</a></div></div>

      </div>
  <footer>
  <div class="footer">
    <div class="nav">
      <div class="lfnavline"></div>
      <ul class="footul">
        <li>快速导航</li>
        <li>海岸设计</li>
      </ul>
      <div class="rgtnavline"></div>
    </div>
    <ul class="menuul"> 
      <li><a href="http://www.haianzhuangshi.com/jiudian/" target="_blank">酒店设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/canyin/" target="_blank">餐厅设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/cafe/" target="_blank">咖啡馆设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/xiaozhen/" target="_blank">特色小镇设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/tianyuan/" target="_blank">田园综合体设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/minsu/" target="_blank">民宿设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/wangka/" target="_blank">网咖设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/product/product.php?lang=cn&class3=177">酒吧设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/huisuo/" target="_blank">会所设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/liansuo/" target="_blank">连锁店设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/shudian/" target="_blank">书店设计</a></li> 
      <li><a href="http://www.haianzhuangshi.com/yuanlin" target="_blank">园林设计</a></li>
      <li><a href="">文创园设计</a></li>
      <li><a href="">商场设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/ruanzhuang/" target="_blank">软装设计</a></li>
      <li><a href="http://www.haianzhuangshi.com/vi/" target="_blank">品牌VI设计</a></li>
    </ul>
    <ul class="menuul clsply">
      <li>商场规划设计</li>
      <li>商业广场设计</li>
      <li>购物广场设计</li>
      <li>百货商场设计</li>
      <li>商业街规划</li>
    </ul>
    <div class="footlf">
      <img src="{$img_url}shangchang/footerhaianlogo.png" alt="海岸九九">
      <p>
        Web：http://www.haianzhuangshi.com/<br/>
     
        Add：北京市朝阳区北汽双井文创园3号楼E座108车间<br/>
      
        E-mail：haianzhuangshi@sina.com 
      </p>
    </div>
    <div class="footmid">
      <div class="erweimod">
        <img src="{$img_url}shangchang/erweima2.jpg"/>
        <p>扫一扫，免费通话</p>
      </div>
      <div class="erweimod">
        <img src="{$img_url}shangchang/erweima1.jpg"/>
        <p>微信公众号</p>
      </div>
    </div>
    <div class="footrgt">
      <img src="{$img_url}shangchang/footphone.png" alt="联系我们">
      <span>400-879-1110</span>
      <a href="javascript:;" onclick="jQuery('.boxbig').show()">
      <button>立即咨询</button></a>
    </div>
    <p>CopRright © 1999-2017 北京海岸设计 All Rrights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 京ICP备13049424号<br/>
    海岸声明：本站内容 图像资料版权均属「北京海岸设计」任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p>
     <p class="cnzz">{$lang_foot_cnzz}</p>
  </div> 
           
    </footer>
  <script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
 <script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
          
<!--
EOT;
?>