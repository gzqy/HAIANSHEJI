<?php
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

  <!-- 横幅 -->
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
<!--
EOT;
?>