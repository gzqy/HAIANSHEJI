<?php
$met_foot_txt = metlabel_foot();
require template('feed/feedback_5'); 
$metfeedback1=metlabel_feedback5(166);
require template('feed/feedback_7'); 
$metfeedback2=metlabel_feedback7(166);
echo <<<EOT
-->
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
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>
<footer class="foot_foott">
    <div class="footertopfriendbox">
      <ul class="frienttitlebox">
        <li class="onfocuslinktitle">海岸设计</li>
        <li>友情链接</li>
      </ul>
      <ul class="footertopcontentbox">
<!--
EOT;
foreach($nav_list2[181] as $key=>$val1){
echo <<<EOT
-->
      <li class="z_link"><a href="http://www.haianzhuangshi.com/{$val1[url]}" target="_blank">{$val1[name]}</a></li>
<!--
EOT;
}
echo <<<EOT
-->

      </ul>
      <ul class="footertopcontentbox disnone">
        {$met_seo} 
      </ul>
    </div>
    <hr class="footercommonhr">
    <div class="footeruslinkbox">
      <div class="footerbottomleft">
<!--
EOT;
$met_link=methtm_link('text','','','',1);
echo <<<EOT
-->
       {$met_link}
        <div class="bottomcommon">
          {$lang_foot_met}<i><img src="{$img_url}haian-core/policeicon.png" alt="北京海岸设计备案信息"></i> {$lang_foot_cnzz}
        </div>
      </div>
      <div class="footerbottomright">
        <ul>
          <li><img src="{$img_url}haian-core/weixin.jpg" alt="北京海岸设计微信公众号" title="北京海岸设计微信公众号二维码"><span>微信公众号</span></li>
          <li><img src="{$img_url}haian-core/weiboicon.jpg" alt="北京海岸设计微博" title="北京海岸设计微博二维码"><span>微博</span></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<script type="text/javascript" src="{$img_url}js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/haian-core.js"></script>
<script type="text/javascript" src="{$img_url}fStyle/openwin.js"></script>
<!--
EOT;
require_once template('modular/footer');

echo <<<EOT
-->

  <div style="display:none">
  {$met_foot_txt}
  </div>
<!--
EOT;
?>