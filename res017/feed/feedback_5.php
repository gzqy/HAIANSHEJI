<?php
//反馈提交表单函数
function metlabel_feedback5($fid,$mobile){
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
	$list[input]="<select class='msgSel' name='para$list[id]'><option selected='selected' value=''></option>";
	foreach($paravalue[$list[id]] as $key=>$val){
	$list[input]=$list[input]."<option value='$val[info]'>$val[info]</option>";
	}
	$list[input]=$list[input]."</select>";
	break;
	case 3:
	$list[input]="<textarea name='para$list[id]' class='requireform_txt' placeholder='请简述您的项目详情，我们会第一时间联系您'></textarea>";
	break;
	case 4:
	$i=0;
	foreach($paravalue[$list[id]] as $key=>$val){
	$i++;
	$list[input]=$list[input]."<input name='para$list[id]_$i' class='checboxcss' id='para$i$list[id]' type='checkbox' value='$val[info]' /><label for='para$i$list[id]'>$val[info]</label>&nbsp;&nbsp;";
	}
	$list[input]=$list[input]."<input name='para$list[id]' type='hidden' value='$i' />";
	$lagernum[$list[id]]=$i;
	break;
	 
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
     $metinfo.="<form class='requireform form_two' style='display:none;' enctype='multipart/form-data' method='POST' name='myform' onSubmit='return Checkfeedback();' action='{$lujin}index.php?action=add&lang=".$lang."' target='_self'>\n";
     $metinfo.="<div class='price-div'>\n";
     $metinfo.="<span class='price-div_header'>今日累计</span>\n";
     $metinfo.="<div class='bak bak_a'></div>\n";
     $metinfo.="<div class='bak bak_b'></div>\n";
     $metinfo.="<div class='bak bak_c'></div>\n";
     $metinfo.="<div class='bak bak_d'></div>\n";
     $metinfo.="<div class='h-k number'></div>\n";
     $metinfo.="<div class='t-k number'></div>\n";
     $metinfo.="<div class='k number'></div>\n";
     $metinfo.="<div class='h number'></div>\n";
     $metinfo.="<div class='t number'></div>\n";
     $metinfo.="<div class='single number'></div>\n";
     $metinfo.="<span class='price-div_foot'>位客户获取报价</span>\n";
     $metinfo.="<div class='t-d number'></div>\n";
     $metinfo.="<div class='h-d number'></div>\n";
     $metinfo.="</div>\n";
     $array = array(
	 	"<label>姓名","<label>面积","<label>省份","<label>手机号码","<label>需求</label>"
	 );
    foreach($fd_para as $key=>$val){
	    if($key==1){
	    	$search_str = 'name="para179"'; 
	 		$rep_str = 'name="para180"'; 
	 		$val["input"] = str_replace($search_str,$rep_str,$val["input"]);
	 		$metinfo.=$array[$key].$val["input"]."</label>";
	    }elseif($key==3){
	    	$search_str = 'name="para180"'; 
	 		$rep_str = 'name="para179"'; 
	 		$val["input"] = str_replace($search_str,$rep_str,$val["input"]);
	 		$metinfo.=$array[$key].$val["input"]."</label>";
	    }elseif($key==4){
	    	if($met_memberlogin_code==1){
					$metinfo.="<label>验证码<img align='absbottom' src='{$navurl}member/ajax.php?action=code'  onclick=this.src='{$navurl}member/ajax.php?action=code&'+Math.random() title='".$lang_memberTip1."'/><input name='code' type='text' size='6' maxlength='8' placeholder='验证码' ></label>";
			}
			$metinfo.=$array[$key].$val["input"];
	    }else{
	    	$metinfo.=$array[$key].$val["input"]."</label>";
	    }
	}
	 $metinfo.="<input type='hidden' name='fdtitle' value='".$title."' />\n";
	 $metinfo.="<input type='hidden' name='lang' value='".$lang."' />\n";
	 $metinfo.="<input type='hidden' name='ip' value='".$m_user_ip."' />\n";
	 $metinfo.="<input type='hidden' name='totnum' value='".count($fd_para)."' />\n";
	 $metinfo.="<input type='hidden' name='id' value='".$id."' />\n";
	 if($fid)$metinfo.="<input type='hidden' name='fid_url' value='1' />\n";//5.0.4
	 $metinfo.="<input type='submit' name='Submit' value='获取项目报价'>\n";
	 $metinfo.="</form>\n";
	}
	return $metinfo;
}
?>