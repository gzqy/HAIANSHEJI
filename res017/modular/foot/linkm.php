<?php
echo <<<EOT
-->
<div style="width:100%;overflow:hidden;text-align:center;color:#dedede;font-size:10px;background-color:#f5f5f5;">
    <div>
		<ol class="breadcrumb">
<!--
EOT;
function link_f($len,$link_title_lang,$link_url_lang)
{
	$len_new = $len+1;
	$link_title = explode("|",$link_title_lang,$len_new);
	$link_title = array_filter($link_title);
	$link_url = explode("|",$link_url_lang,$len_new);
	$link_url = array_filter($link_url);
	$length = count($link_title);
	if($length>$len)
	{
		$link_title = array_slice($link_title,0,$len);
		$link_url = array_slice($link_url,0,$len);
	}
	$link_all = array();
	for($l = 0;$l < $length;$l++)
	{
		$link_all[$l]['name'] = $link_title[$l];
		$link_all[$l]['link'] = $link_url[$l];
	}
	return $link_all;
}
$link_all_one = link_f($lang_f_link_num,$lang_f_lk_more_one,$lang_f_text_more_one);
$link_all_two = link_f($lang_f_link_num,$lang_f_lk_more_two,$lang_f_text_more_two);
$link_all_three = link_f($lang_f_link_num,$lang_f_lk_more_three,$lang_f_text_more_three);
$link_all_four = link_f($lang_f_link_num,$lang_f_lk_more_four,$lang_f_text_more_four);
if(count($link_all_one)>0)
	{
		foreach($link_all_one as $link_all_v_one){
echo <<<EOT
-->
			<a style="color:#dedede;" href="{$link_all_v_one['link']}" target="_blank"><li style="float:left;border-width:0px;">{$link_all_v_one['name']}</li></a><span style="float:left">&nbsp;</span>
<!--
EOT;
}}
if(count($link_all_two)>0)
	{
		foreach($link_all_two as $link_all_v_two){
echo <<<EOT
-->
			<a style="color:#dedede;" href="{$link_all_v_two['link']}" target="_blank"><li style="float:left;border-width:0px;">{$link_all_v_two['name']}</li></a><span style="float:left">&nbsp;</span>
<!--
EOT;
}}
if(count($link_all_three)>0)
	{
		foreach($link_all_three as $link_all_v_three){
echo <<<EOT
-->
			<a style="color:#dedede;" href="{$link_all_v_three['link']}" target="_blank"><li style="float:left;border-width:0px;">{$link_all_v_three['name']}</li></a><span style="float:left">&nbsp;</span>
<!--
EOT;
}}
if(count($link_all_four)>0)
	{
		foreach($link_all_four as $link_all_v_four){
echo <<<EOT
-->
			<a style="color:#dedede;" href="{$link_all_v_four['link']}" target="_blank"><li style="float:left;border-width:0px;">{$link_all_v_four['name']}</li></a><span style="float:left">&nbsp;</span>
<!--
EOT;
}}
echo <<<EOT
-->   
		</ol>
	</div>
</div>
<!--
EOT;
?>