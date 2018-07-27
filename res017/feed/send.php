<?php
echo <<<EOT
-->
<form style="white-space:nowrap;text-align:center;font-family:'微软雅黑'" enctype="multipart/form-data" method="POST" action="../join/index_join.php?action=add">
			<label style="margin-left:20px"><i style="color:red">* </i>入职战区:</label>
			<input style="border:none;width:110px;outline:none;height:30px;padding:6px" name="para188" type="text" size="30" class="input-text">
			<label style="margin-left:106px"><i style="color:red">* </i>职位:</label>
				<input style="border:none;width:110px;outline:none;height:30px;padding:6px" name="para189" type="text" size="30" class="input-text">
			<label style="margin-left:50px"><i style="color:red">* </i>入职时间:</label>
				<input style="border:none;outline:none;height:30px;padding:6px;width:180px" name="para190" type="text" size="30" class="input-text">
			<table border="1" cellspacing="0">
				<tr>
					<td><i style="color:red">* </i>姓名</td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para191" type="text" size="30" class="input-text"></td>
					<td><label><i style="color:red">* </i>性别</label></td>
					<td><select name="para192" style="border:none;outline:none">
						<option selected="selected" value="">请选择</option>
						<option value="男">男</option><option value="女">女</option>
					</select></td>
					<td><label><i style="color:red">* </i>籍贯</label></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para193" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>	
					<td><label><i style="color:red">* </i>民族</label></td>
					<td>
						<input style="border:none;width:126px;outline:none;padding:6px" type="text" name="para194" size="30">
					</td>
					<td><label><i style="color:red">* </i>最高文化程度</label></td>
					<td>
						<select name="para195" style="border:none;outline:none">
						<option selected="selected" value="">请选择</option>
						<option value="高中">高中</option>
						<option value="专科">专科</option>
						<option value="本科">本科</option>
						<option value="研究生">研究生</option>
						<option value="博士">博士</option>
						</select>
					</td>	
					<td><label><i style="color:red">* </i>婚姻情况</label></td>
					<td>
						<select name="para196" style="border:none;outline:none">
						<option selected="selected" value="">请选择</option>
						<option value="未婚">未婚</option>
						<option value="已婚">已婚</option>
						</select>
					</td>	
				</tr>	
				<tr>
					<td><label><i style="color:red">* </i>身份证号码</label></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para197" type="text" size="30" class="input-text"></td>
					<td><label><i style="color:red">* </i>联系电话:</label></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para198" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>		
					<td><label><i style="color:red">* </i>户籍所在地</label></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para199" type="text" size="30" class="input-text"></td>
					<td><label><i style="color:red">* </i>现居住地址</label></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para200" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>		
					<td><label><i style="color:red">* </i>QQ\微信工作号</label></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para201" type="text" size="30" class="input-text"></td>
					<td><label><i style="color:red">* </i>紧急联系人及电话</label></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para202" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>
					<td rowspan="4">
						<label>工作经验<br/>（根据实际情况选填）</label>
					</td>
					<td>
						<label>起止年月</label>
					</td>
					<td colspan="2">
						<label>工作单位</label>
					</td>
					<td>
						<label>职位</label>
					</td>
					<td>
						<label>离职原因</label>
					</td>
				</tr>
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para203" type="text" size="30" class="input-text"></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para204" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para205" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para206" type="text" size="30" class="input-text"></td>
				</tr>	
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para217" type="text" size="30" class="input-text"></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para218" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para219" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para220" type="text" size="30" class="input-text"></td>
				</tr>	
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para221" type="text" size="30" class="input-text"></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para222" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para223" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para224" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>
					<td rowspan="4">
						<label>教育培训经历<br/>（根据实际情况选填）</label>
					</td>
					<td>
						<label>起止年月</label>
					</td>
					<td>
						<label>教育培训机构</label>
					</td>
					<td>
						<label>专业</label>
					</td>
					<td>
						<label>外语程度</label>
					</td>
					<td>
						<label>证书</label>
					</td>
				</tr>
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para207" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para208" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para209" type="text" size="30" class="input-text"></td>
					<td rowspan='3'>
						<select name="para210" style="border:none;outline:none">
							<option selected="selected" value="">请选择</o9tion>
							<option value="一般">一般</option>
							<option value="良好">良好</option>
							<option value="优秀">优秀</option>
						</select>
					</td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para211" type="text" size="30" class="input-text"></td>
				</tr>	
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para225" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para226" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para227" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para228" type="text" size="30" class="input-text"></td>
				</tr>	
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para229" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para230" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para231" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para232" type="text" size="30" class="input-text"></td>
				</tr>			
				<tr>
					<td rowspan="4">
						<label>家庭成员<br/>（根据实际情况选填）</label>
					</td>
					<td>
						<label>姓名</label>
					</td>
					<td colspan="2">
						<label>工作单位</label>
					</td>
					<td>
						<label>职务</label>
					</td>
					<td>
						<label>电话</label>
					</td>
				</tr>
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para212" type="text" size="30" class="input-text"></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para213" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para214" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para215" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para233" type="text" size="30" class="input-text"></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para234" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para235" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para236" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para237" type="text" size="30" class="input-text"></td>
					<td colspan="2"><input style="border:none;width:240px;outline:none;padding:6px" name="para238" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para239" type="text" size="30" class="input-text"></td>
					<td><input style="border:none;width:126px;outline:none;padding:6px" name="para240" type="text" size="30" class="input-text"></td>
				</tr>
				<tr>
					<td><label>填表人申明<label></td>
					<td colspan="5" align="left" style="padding-left:10px;font-size:12px;padding-top:10px;">
						1. 本人保证所填写资料属实（表中<i style="color:red;"> * </i>为必填项）<br>
						2. 保证遵守公司各项规章制度<br>
						3. 若有不实之处，本人愿意无条件接受公司处罚甚至辞退，并不要求任何补助。<br>
						<div style="font-size:12px"><i style="color:red"> * </i>申明人：<input style="border:none;width:126px;outline:none;padding:6px" name="para216" type="text" size="30"></div>
					</td>
				</tr>
				<tr>
					<td rowspan="2">
						<label>入职所需材料</label>
					</td>
					<td colspan="5">
						<label style="font-size:12px"><i style="color:red">* </i>请您根据入职通知邮件所述，将入职所需材料上传（包括毕业证书、学士学位证书等）</label>
					</td>
				</tr>
				<tr>
					<td colspan="5"><input style="width:100%" type="file" name="upload[]"  multiple="multiple"></td>
				</tr>
				</table>
				<input type="hidden" name="totnum" value="32">
				<input type="hidden" name="id" value="218">
				<input type="hidden" name="fid_url" value="1">
				<div style="margin-top:10px;position:relative;height: 26px;line-height: 21px;"><span style="position:absolute;right:154px;top:6px">验证码</span><input style="position:absolute;right:86px" name="code" onkeyup="pressCaptcha(this)" type="text" class="code" id="code" size="6" maxlength="8" style="width:50px"><img style="position:absolute;right:6px;width: 80px;height: 25px;" align="absbottom" src="../member/ajax.php?action=code" onclick="this.src='../member/ajax.php?action=code&amp;'+Math.random()" style="cursor: pointer;" title="看不清？点击更换验证码"></div>
				<div style="margin-top:14px"><button style="width:100%;height:40px;border-radius:6px;border:none;background:#000;color:#fff;letter-spacing:2px;font-size:14px;" type="submit">点击提交</button></div>
			</form>
<!--
EOT;
?>