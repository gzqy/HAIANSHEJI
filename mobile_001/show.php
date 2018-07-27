<?php
 
$classNow=$class_list[$classnow][index_num];


 if($classnow==165 || $classnow==188 ||$classnow == 222){
	require_once template('coffez'); 
	die(); 
}

 if($classnow == 229){
	require_once template('fkbdm'); 
	die(); 
}
 if($classnow == 112){
	require_once template('abouthaian'); 
	die(); 
}
 if($classnow == 223){
	require_once template('coffez'); 
	die(); 
}

 if($classnow == 229){
	require_once template('fkbdm'); 
	die(); 
}
 if($classnow == 173){
	require_once template('canyin'); 
	die(); 
}
 if($classnow == 172){
	require_once template('huisuo'); 
	die(); 
}
 if($classnow == 171){
	require_once template('wangka'); 
	die(); 
}
 if($classnow == 179 || $classnow==193){
	require_once template('jiudian'); 
	die(); 
}

 if($classnow == 198 || $classnow==199){
	require_once template('shudian'); 
	die(); 
}
if($classnow==225 || $classnow==226){
	require_once template('office');  
	die(); 
}

if($classnow==197 || $classnow==200){
	require_once template('liansuo'); 
	die();
}
if($classnow==227){
	require_once template('wenquan');  
	die(); 
}
if($classnow==201 || $classnow==202){
	require_once template('ruanz');  
	die(); 
}
if($classnow==231 ){
	require_once template('etly');  
	die(); 
}
if($classnow==205){
	require_once template('shangye');
	die(); 
}
if($classnow==207){
	require_once template('guihua');
	die(); 
}
if($classnow==176 || $classnow==192){
	require_once template('jizhuang');  
	die(); 
}
if( $classnow==243){
	// require_once template('guihua');
	require_once template('jizhuang'); 
	// require_once template('wenlv');  
	die(); 
}
require_once template('head');

//让内容支持图片懒加载
$show['content'] = $metcompress->lazyload($show['content']);

$team_procolumn_res=listcolumnRes($lang_team_procolumn_xs,$lang_team_procolumn_sm,$lang_team_procolumn_md,$lang_team_procolumn_xlg);


echo <<<EOT
--> 
<section class="met-show animsition">
	<div class="container">
		<div class="row">
<!--
EOT;
if($classNow==1){
echo <<<EOT
-->
<ul class="team_list {$team_procolumn_res} clearfix">
<!--
EOT;
foreach ($nav_list3[$classnow] as $key=>$val) {
echo <<<EOT
-->
<li class="team_item" >
<a href="{$val[url]}" title="{$val[name]}" {$metblank}>
<div class="team_img">
<img src="{$val[columnimg]}" alt="{$val[name]}">
</div>
<div class="wrap">
<div><span class="h"></span><span class="v"></span></div>
</div>
</a>
<div class="team_info">
<p class="title">{$val[name]}</p>
<p class="subtitle">{$val[namemark]}</p>
<p class="desc">{$val[description]}</p>
</div>
</li>


<!--
EOT;
}
echo <<<EOT
-->
</ul>
<!--
EOT;
}
echo <<<EOT
-->
			<div class="met-editor lazyload clearfix">
				{$show[content]}
			</div>
		</div>
	</div>
</section>
<!--
EOT;
require_once template('foot'); 
?>