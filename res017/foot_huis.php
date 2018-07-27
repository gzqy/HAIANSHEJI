<!--<?php
$met_foot_nav = methtml_footnav();//底部导航标签（次导航）
$met_foot_txt = metlabel_foot();//底部信息标签  
echo <<<EOT
--> 
<div class="footcenter">
  <div class="footuplistbox">
      <dl>
        <dt class="footdtfocus">快速导航</dt>
        <dt>海岸设计</dt>
      </dl> 
      <ul>
<!--
EOT;
foreach($nav_list2[181] as $val){
  if($val[name]=='会所设计')continue;
echo <<<EOT
-->        
      <a href="{$val[url]}" target="_blank" alt="{$val[name]}"><li>{$val[name]}</li></a>
<!--
EOT;
}
echo <<<EOT
-->              
      </ul>
      <ul class="clsplay">
        <li>高档会所设计</li>
        <li>美容会所设计</li>
        <li>会所装修设计</li>
        <li>高端会所设计</li>
        <li>专业会所设计</li>
        <li>高级会所设计</li>
        <li>养生会所设计</li>
        <li>酒吧会所设计</li>
        <li>私人会所设计</li>
        <li>商务会所设计</li>
        <li>音乐会所设计</li>
      </ul>
  </div>
</div>
<footer>
  <div class="footertop">
        <div class="footertitle">
            <em>联系我们</em><span>Contact us</span>
        </div>
        <div class="footermain">
            <div class="ftmainlft">
                 
                  <em><i class="fticon fticon4"></i>haianzhuangshi@sina.com </em>
                  <em><i class="fticon fticon1"></i>www.haianzhuangshi.com</em>
                  <em><i class="fticon fticon2"></i>北京市朝阳区北汽双井文创园3号楼E座108号</em>
            </div>
             <div class="footzxlg">
                <img src="{$img_url}jiudian/zuoji-1.png"></img>
                <img src="{$img_url}jiudian/free_phone.png"></img>
                <img src="{$img_url}jiudian/telphone.png"></img> 
            </div>
            <ul class="ftmainrgt">
                  <li><img src="{$img_url}pic/erweima1.jpg" alt="扫一扫，免费通话" /><span>扫一扫，免费通话</span></li>
                  <li><img src="{$img_url}pic/erweima2.jpg" alt="微信公众号" /><span id="weixincenter">微信公众号</span></li>
            </ul>
        </div>
  </div>
  <div class="footerdown">
    <div class="ftdown_all">
        <p>CopRright &copy; 1999-2017 北京海岸设计 All Rrights Reserved  &nbsp;&nbsp;&nbsp;&nbsp;京ICP备13049424号</p >
        <p>海岸声明：本站内容 图像资料版权均属北京海岸设计任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p >
        <div class="cnzz">{$lang_foot_cnzz}</div>
    </div>     
  </div>
</footer>
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
<!--
EOT;
require_once template('feed/feedback_new_Slide');
$form_slide = metlabel_form_slide(166);
echo <<<EOT
-->      
        {$form_slide}             
      </div>
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
 <div style="display:none">
 { $met_foot_txt}
 </div>

<script src="{$img_url}js/slide_new.js" type="text/javascript"></script>             
<script type="text/javascript" src="{$img_url}fStyle/openwin.js">
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
 
</body>
</html>
<!--
EOT;
?>-->


