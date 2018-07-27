<?php
$bullet = $lang_navbulletok?'bullet':'animate';
if($lang_navhoverok){
	$navhover = 'data-hover="dropdown"';
}
$navnow =$classnow==10001?'active':'';
echo <<<EOT
-->
				<ul class="nav navbar-nav navbar-right navlist">
					<li><a href="{$index_url}" title="{$lang_home}" class="link {$navnow}">{$lang_home}</a></li>
<!--
EOT;
foreach($nav_list as $key=>$val){
	$navnow = $val['id']==$navdown?'active':'';
	$prohibit = $metcompress->prohibit($val['name']);
	if($val['classtype']==2){
		$nav_list2[$val['id']] = $nav_list3[$val['id']];
	}
echo <<<EOT
-->
<!--
EOT;
	if(count($nav_list2[$val['id']])&&$lang_navbarok&&$val['module']!=6&&$prohibit){
	//6为招聘模块，没必要展示下拉菜单
	//$prohibit为禁用下拉菜单的栏目名称
echo <<<EOT
-->					<li class="dropdown margin-left-{$lang_navmarginleft}">
						<a 
							class="dropdown-toggle link {$navnow} animation-zoomIn"  
							data-toggle="dropdown" 
							{$navhover}
							href="http://www.haianzhuangshi.com/{$val[url]}" 
							aria-expanded="false" 
							role="button" 
							{$val[new_windows]}
							title="{$val[name]}"
						>{$val[name]} <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu dropdown-menu-right {$bullet} " role="menu" >
<!--
EOT;
if($val['isshow']){
	$navname = $val['module']==1?$val['name']:$lang_all;
echo <<<EOT
-->	
							<li class='visible-xs'><a href="http://www.haianzhuangshi.com/{$val[url]}" {$val[new_windows]} title="{$navname}" class="">{$navname}</a></li>
<!--
EOT;
}
echo <<<EOT
-->	
<!--
EOT;
	foreach($nav_list2[$val['id']] as $key=>$val2){
		$navnow = $val2['id']==$class2?'active':'';
		if(count($nav_list3[$val2['id']])){
echo <<<EOT
-->
							<li class="dropdown-submenu">
								<a href="http://www.haianzhuangshi.com/{$val2[url]}" class="{$navnow} animation-fade" {$val2[new_windows]} role="button" tabindex="-1">{$val2[name]}<i class="fa fa-angle-right"></i></a>
								<ul class="dropdown-menu" role="menu">
<!--
EOT;
			foreach($nav_list3[$val2['id']] as $val3){
				$navnow = $val3['id']==$class3?'active':'';
echo <<<EOT
-->
									<li role="presentation"><a href="http://www.haianzhuangshi.com/{$val3[url]}" class="{$navnow} animation-fade" role="menuitem" tabindex="-1">{$val3[name]}</a></li>
<!--
EOT;
			}
echo <<<EOT
-->
								</ul>
							</li>
<!--
EOT;
		}else{
echo <<<EOT
-->
							<li class="animation-fade animation-delay-{$y}"><a href="http://www.haianzhuangshi.com/{$val2[url]}" class="{$navnow} animation-fade " {$val2[new_windows]} title="{$val2[name]}">{$val2[name]}</a></li>	
<!--
EOT;
		}
	}
echo <<<EOT
-->
						</ul>
					</li>
<!--
EOT;
	}else{
echo <<<EOT
-->
					<li class="margin-left-{$lang_navmarginleft}"><a href="http://www.haianzhuangshi.com/{$val[url]}" {$val[new_windows]} title="{$val[name]}" class="link {$navnow} animation-zoomIn">{$val[name]}</a></li>
<!--
EOT;
	}
echo <<<EOT
-->
<!--
EOT;
}
echo <<<EOT
-->
				</ul>
<!--
EOT;
?>