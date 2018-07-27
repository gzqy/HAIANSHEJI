<!--<?php
require_once template('head');

echo <<<EOT
-->
{$methtml_head}
<link rel="stylesheet" type="text/css" href="{$img_url}css/formtjbd.css"/>
<!--获取报价表单-->

<div class="quotationForm">
		<div class="box1">
                 
                  <!-- <p>18年不断积累，我们已经做到领先，值得您的青睐</p> -->
                    <form class="iptbox">
                    	<div class="iptboxcenter">
                          <em>海岸设计专属服务</em>
                          <span>全国免费咨询电话：400-879-1110</span>
                          <input type="text" placeholder="您的称呼" />
                          <input type="text" placeholder="手机号码" />
                          <div class="plceadarea">
                              <input type="text" placeholder="项目面积" />
                              <select name="">
									<option selected="selected" value="">请选择省份</option>
									<option value="北京">北京</option>
									<option value="天津">天津</option>
									<option value="河北">河北</option>
									<option value="山西">山西</option>
									<option value="内蒙古">内蒙古</option>
									<option value="辽宁">辽宁</option>
									<option value="吉林">吉林</option>
									<option value="黑龙江">黑龙江</option>
									<option value="上海">上海</option>
									<option value="江苏">江苏</option>
									<option value="浙江">浙江</option>
									<option value="安徽">安徽</option>
									<option value="福建">福建</option>
									<option value="江西">江西</option>
									<option value="山东">山东</option>
									<option value="河南">河南</option>
									<option value="湖北">湖北</option>
									<option value="湖南">湖南</option>
									<option value="广东">广东</option>
									<option value="广西">广西</option>
									<option value="海南">海南</option>
									<option value="重庆">重庆</option>
									<option value="四川">四川</option>
									<option value="贵州">贵州</option>
									<option value="西藏">西藏</option>
									<option value="陕西">陕西</option>
									<option value="云南">云南</option>
									<option value="甘肃">甘肃</option>
									<option value="青海">青海</option>
									<option value="宁夏">宁夏</option>
									<option value="新疆">新疆</option>
									<option value="台湾">台湾</option>
									<option value="香港">香港</option>
									<option value="澳门">澳门</option>
							  </select>
                          </div>
                          <textarea value="请简述您的项目详情，我们会第一时间联系您" >
                             
                          </textarea>
                          <button>免费获取项目报价</button>
                        </div>
                    <p>今日已有  <span class="red">36</span> 人申请</p>
                    </form>
        </div>
	</div>



<!--
EOT;
require_once template('foot');
?>