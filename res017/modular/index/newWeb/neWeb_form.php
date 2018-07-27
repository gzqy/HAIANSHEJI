<?php 
if($lang_home_contact_ok){
echo <<<EOT
-->
<!-- 联系方式、表单 -->
	<div class="calltablelist">
		<div class="calltablebg"></div>
		<div class="calltablemain">
				<div class="contactinformation">
					<h3>联系我们</h3>
					<span>Contact us</span>
					<ul class="informationul">
						<li><i><img src="{$img_url}haian-core/core-phone.png" alt="海岸设计全国免费电话400-879-1110" title="海岸设计全国免费电话400-879-1110"></i>{$lang_foot_info_tel}</li>
						<li><i><img src="{$img_url}haian-core/core-email.png" alt="海岸设计邮箱" title="海岸设计邮箱"></i>{$lang_foot_info_mail}</li>
						<li><i><img src="{$img_url}haian-core/core-web.png" alt="北京海岸设计官网" title="北京海岸设计官网"></i>{$lang_foot_info_web}</li>
						<li><i><img src="{$img_url}haian-core/core-place.png" alt="北京海岸设计地址" title="北京海岸设计地址"></i>{$lang_foot_info_location}</li>
					</ul>
					<em class="nationalhotlineembox">全国免费热线<br>{$lang_foot_info_tel}</em>
					<em class="webserviceembox">网站业务<span>{$lang_home_contact_cnt}</span></em>
					<div class="saofreeinlinebox">
						<img src="{$img_url}haian-core/freelinepic.jpg" alt="北京海岸设计">
						<p>扫一扫，免费通话</p>
					</div>
				</div>
<!--
EOT;
require template('feed/feedback8');
$metfeedback2=metlabel_feedback8(166);
echo <<<EOT
-->
				<div class="nformationsubmission">
					<p>使用下面表单，提交您的设计需求</p>
					{$metfeedback2}
					<!--<form action="#" method="post" class="submissionform">
						<input class="focuschange" type="text" placeholder="您的姓名："/>
						<input class="focuschange" type="text" placeholder="您的电话："/>
						<input class="focuschange" type="text" placeholder="项目面积："/>
						<textarea class="focuschange" placeholder="请简述您的需求，我们会在第一时间回复您！"></textarea>
						<input class="yanzhengmatxt focuschange" type="text" placeholder="验证码："/><div class="yanzhengma"></div>
						<input type="submit" value="提交">
					</form>-->
				</div>
		</div>
	</div>
<!--
EOT;
}
?>