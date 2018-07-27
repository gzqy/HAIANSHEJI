<?php
//反馈提交表单函数
function metlabel_form_slide($fid,$mobile){
	global $lang,$message_list,$lang_Submit,$lang_Reset,$lang_Publish,$lang_Reply,$fromurl,$m_user_ip,$id,$title;
	global $met_memberlogin_code,$lang_memberImgCode,$lang_memberTip1,$met_adminfile,$navurl,$settings_arr;
	global $db,$met_parameter,$met_admin_array,$met_member_use,$metinfo_member_type,$met_list,$met_class,$class_list,$met_product,$lang_Choice,$lang_Empty;
	if($fid)$id=$fid;
	if(!$title){
		foreach($settings_arr as $key=>$val){
			if($val['columnid']==$id && $val['name']=='met_fdtable'){
				$title=$val['value'];
			}
		}
	}
	$query = "SELECT * FROM $met_parameter where lang='$lang' and  module=8 and class1='$id' order by no_order";
	if($met_member_use)$query = "select * from $met_parameter where (access in(select id from $met_admin_array where user_webpower<='$metinfo_member_type') or access=0) and lang='$lang' and module=8 and class1='$id' order by no_order;";
	$result = $db->query($query);
	while($list= $db->fetch_array($result)){
	 if($list[type]==2 or $list[type]==4 or $list[type]==6){
		$listinfo=$db->get_one("select * from $met_list where bigid='$list[id]' and no_order=99999");
		$listinfoid=intval(trim($listinfo[info]));
		if($listinfo){
		$listmarknow='metinfo';
		$classtype=($listinfo[info]=='metinfoall')?$listinfoid:($met_class[$listinfoid][releclass]?'class1':'class'.$class_list[$listinfoid][classtype]);
		$query1 = "select * from $met_product where lang='$lang' and $classtype='$listinfoid' and recycle='0' order by updatetime desc";
	   $result1 = $db->query($query1);
	   $i=0;
	   while($list1 = $db->fetch_array($result1)){
		 $list1[info]=$list1[title];
		 $i++;
		 $list1[no_order]=$i;
	   $paravalue[$list[id]][]=$list1;
	   }
		}else{
	   $query1 = "select * from $met_list where lang='$lang' and bigid='".$list[id]."' order by no_order";
	   $result1 = $db->query($query1);
	   while($list1 = $db->fetch_array($result1)){
	   $paravalue[$list[id]][]=$list1;
	   }
	   }}
	if($list[wr_ok]=='1')$list[wr_must]="*";
	switch($list[type]){
	case 1:
	$list[input]="<input name='para$list[id]' type='text' size='30' />";
	break;
 	case 2:
	$list[input]="<select class='msgSel' name='para$list[id]' ><option selected='selected' value=''>城市</option>";
	foreach($paravalue[$list[id]] as $key=>$val){
	$list[input]=$list[input]."<option value='$val[info]'>$val[info]</option>";
	}
	$list[input]=$list[input]."</select>\n<i class='icon-2'></i>";
	break;
	case 3:
	$list[input]="<span class='mi'>㎡</span>\n<textarea name='para$list[id]' class='requireform_txt' placeholder='请简述您的项目详情，我们会第一时间联系您'></textarea>\n<i class='icon-3'></i>";
	break;
	// case 4:
	// $i=0;
	// foreach($paravalue[$list[id]] as $key=>$val){
	// $i++;
	// $list[input]=$list[input]."<input name='para$list[id]_$i' class='checboxcss' id='para$i$list[id]' type='checkbox' value='$val[info]' /><label for='para$i$list[id]'>$val[info]</label>&nbsp;&nbsp;";
	// }
	// $list[input]=$list[input]."<input name='para$list[id]' type='hidden' value='$i' />";
	// $lagernum[$list[id]]=$i;
	// break;
	case 6:
	$i=0;
	foreach($paravalue[$list[id]] as $key=>$val){
	$checked='';
	$i++;
	if($i==1)$checked="checked='checked'";
	$list[input]=$list[input]."<input name='para$list[id]' type='radio' id='para$i$list[id]' value='$val[info]' $checked /><label for='para$i$list[id]'>$val[info]</label>  ";
	 }
	break;
	}
	$fd_para[]=$list;
	if($list[wr_ok])$fdwr_list[]=$list;
	}
	$fdjs="<script language='javascript'>";
	$fdjs=$fdjs."function Checkfeedback(){ ";
	foreach($fdwr_list as $key=>$val){
	if($val[type]==1 or $val[type]==2 or $val[type]==3 or $val[type]==5){
	$fdjs=$fdjs."var length = document.myform.para$val[id].value.replace(/(^\s*)|(\s*$)/g, '');\n";
	$fdjs=$fdjs."if (length == 0) {\n";
	$fdjs=$fdjs."alert('$val[name] {$lang_Empty}');\n";
	$fdjs=$fdjs."document.myform.para$val[id].focus();\n";
	$fdjs=$fdjs."return false;}\n";
	}elseif($val[type]==4){
	 $lagerinput="";
	 for($j=1;$j<=count($paravalue[$val[id]]);$j++){
	 $lagerinput=$lagerinput."document.myform.para$val[id]_$j.checked ||";
	 }
	 $lagerinput=$lagerinput."false\n";
	 $fdjs=$fdjs."if(!($lagerinput)){\n";
	 $fdjs=$fdjs."alert('$val[name] {$lang_Empty}');\n";
	 $fdjs=$fdjs."document.myform.para$val[id]_1.focus();\n";
	 $fdjs=$fdjs."return false;}\n";
	}
	}
	$fdjs=$fdjs."}</script>";
	$lujin='';
	if($fid)$lujin=$navurl.'feedback/';
	if($mobile){
		$metinfo1 =array();
		foreach($fd_para as $key=>$val){
			$wr_ok = $val[wr_ok]?'required':'';
			$metinfo='';
			switch($val[type]){
				case 1:
					$val[type_class]='input';
					$val[type_html]="<input name='para{$val[id]}' type='text' class='input-text {$wr_ok}' placeholder='{$val[name]}' />";
				break;
				// case 2:
				// 	$val[type_class]='select';
				// 	$metinfo.="<span class='name'>{$val[name]}</span>";
				// 	$metinfo.="<select name='para{$val[id]}'><option value=''>{$lang_Choice}</option>";
				// 	foreach($paravalue[$val[id]] as $key=>$val1){
				// 	$metinfo.="<option value='{$val1[info]}'>{$val1[info]}</option>";
				// 	}
				// 	$metinfo.="</select>";
				// 	$val[type_html]=$metinfo;
				// break;
				case 3:
					$val[type_class]='textarea';
					$val[type_html]="<textarea name='para{$val[id]}' class='textarea-text' placeholder='{$val[name]}'></textarea>";
				break;
				case 4:
					$val[type_class]='radio';
					$metinfo.="<span class='name'>{$val[name]}</span>";
					$i=0;
					foreach($paravalue[$val[id]] as $key=>$val1){
					$i++;
					$metinfo.="<label><input name='para{$val[id]}_{$i}' type='checkbox' value='{$val1[info]}' />{$val1[info]}</label>";
					}
					$metinfo.="<input name='para{$val[id]}' type='hidden' value='{$i}' />";
					$val[type_html]=$metinfo;
				break;
				case 6:
					$val[type_class]='radio';
					$metinfo.="<span class='name'>{$val[name]}</span>";
					$i=0;
					foreach($paravalue[$val[id]] as $key=>$val2){
					$i++;
					$checked=$i==1?'checked':'';
					$metinfo.="<label><input name='para{$val[id]}' type='radio' value='{$val2[info]}' {$checked} />{$val2[info]}</label>";
					}
					$val[type_html]=$metinfo;
				break;
			}
			$metinfo1[]=$val;
		}
		$metinfo = $metinfo1;
	}else{
     $metinfo =$fdjs;
     $metinfo.="<form class='slide_form' enctype='multipart/form-data' method='POST' name='myform' onSubmit='return Checkfeedback();' action='{$lujin}index.php?action=add&lang=".$lang."' target='_self'>\n";
     $metinfo.="<div class='form-1'>\n";
     $metinfo.="<p class='Admission'>免费获取报价</p>\n";
     $array = array(
	 	"<i class='icon'></i>","<i class='icon-5'></i>","<i class='icon-4'></i>",""
	 );
    foreach($fd_para as $key=>$val){
    	$metinfo.=$val[input].$array[$key];
	}
	if($met_memberlogin_code==1){
				$metinfo.="<i class='icon-6'></i><input name='code' type='text' size='6' maxlength='8' placeholder='验证码' ><img align='absbottom' src='{$navurl}member/ajax.php?action=code'  onclick=this.src='{$navurl}member/ajax.php?action=code&'+Math.random() title='".$lang_memberTip1."'/>";
	 }
	 $metinfo.="<input type='hidden' name='fdtitle' value='".$title."' />\n";
	 $metinfo.="<input type='hidden' name='lang' value='".$lang."' />\n";
	 $metinfo.="<input type='hidden' name='ip' value='".$m_user_ip."' />\n";
	 $metinfo.="<input type='hidden' name='totnum' value='".count($fd_para)."' />\n";
	 $metinfo.="<input type='hidden' name='id' value='".$id."' />\n";
	 if($fid)$metinfo.="<input type='hidden' name='fid_url' value='1' />\n";//5.0.4
	 $metinfo.="</div>\n";
	 $metinfo.="<div class='xian'>\n";
	 $metinfo.="<img src='../templates/res017/images/slide_new/xiaoxian-3.png'>\n";
	 $metinfo.="<div class='pulice-1'></div>\n";
	 $metinfo.="<button class='pulice' type='submit'>获取<br>报价</button>\n";
	 $metinfo.="</div>\n";
	 $metinfo.="<div class='demo'>\n";
	 $metinfo.="<p>你的预算&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 元</p>\n";
	 $metinfo.="<img src='../templates/res017/images/slide_new/wen.png'>\n";
	 $metinfo.="<div class='demo-2'>\n";
	 $metinfo.="<p>设计费：<span>?</span> 元 </p>\n";
	 $metinfo.="<p>施工费：<span>?</span> 元 </p>\n";
	 $metinfo.="<p>材料费：<span>?</span> 元 </p>\n";
	 $metinfo.="<img src='../templates/res017/images/slide_new/fang.png'>\n";
	 $metinfo.="</div>\n";
	 $metinfo.="</div>\n";
	 $metinfo.="</form>\n";
	}
	return $metinfo;
}
?>