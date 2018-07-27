<?php
 
 $classNow=$class_list[$classnow][index_num];
 if($classnow==181){
	require_once template('haian'); 
	die(); 
}
 if($classnow==112){
	require_once template('abouthaian'); 
	die(); 
}
 if($classnow==165 || $classnow==188){
	require_once template('cafe'); 
	die(); 
}
if($classnow==171 || $classnow==189){
	require_once template('wangka');  
	die(); 
}

 if($classnow==172 || $classnow==190){
	require_once template('huisuo'); 
	die(); 
}
 if($classnow==173 || $classnow==191){
	require_once template('canyin'); 
	die(); 
}
 if($classnow==176 || $classnow==192){
	require_once template('jzx');  
	die(); 
}
 if($classnow==179 || $classnow==193){
	require_once template('jiudian');
	die();  
}
 if($classnow==183 || $classnow==194){
	require_once template('minsu');  
	die(); 
}
if($classnow==184 || $classnow==195){
	require_once template('xiaozhen');  
	die(); 
}
if($classnow==185 || $classnow==196){
	require_once template('tianyuan');  
	die(); 
}
if($classnow==199 || $classnow==198){
	require_once template('shudian');  
	die(); 
}
if($classnow==197 || $classnow==200){
	require_once template('liansuo');  
	die(); 
}
if($classnow==201 || $classnow==202){
	require_once template('ruanz');  
	die(); 
}
if($classnow==203 || $classnow==204){
	require_once template('vi');  
	die(); 
}
if($classnow==205 || $classnow==206){
	require_once template('shangye');  
	die(); 
}
if($classnow==207 || $classnow==208){
	require_once template('shangchang');  
	die(); 
}
if($classnow==209 || $classnow==210){
	require_once template('yuanlin');  
	die(); 
}
if($classnow==213 || $classnow==212){
	require_once template('wenchuang');  
	die(); 
}
if($classnow==214 || $classnow==215){
	require_once template('xiangcun');  
	die(); 
}
if($classnow==216 || $classnow==217){
	require_once template('wenlv');  
	die(); 
}
if($classnow==219 || $classnow==220){
	require_once template('countryside');  
	die(); 
}
if($classnow==225 || $classnow==226){
	require_once template('bangong');  
	die(); 
}

if($classnow==227){
	require_once template('wenquan');  
	die(); 
}
if($classnow == 238){
	require_once template('libuary'); 
	die(); 
}
if($classnow == 239){
	require_once template('shangyejie'); 
	die(); 
}
if($classnow == 240){
	require_once template('park'); 
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