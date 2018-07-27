<!--<?php
$module = $class_list[$classnow][module];
switch($module){
	case 2:$mtitle=$lang_nettext2;break;
	case 3:$mtitle=$lang_nettext3;break;
	case 4:$mtitle=$lang_nettext4;break;
	case 5:$mtitle=$lang_nettext5;break;
	case 6:$mtitle=$lang_nettext6;break;
	case 9:$mtitle=$lang_nettext9;break;
}
$mtitle=$mtitle?$mtitle:$class_list[$classnow][name];
echo <<<EOT
-->
    <header>
		<div class="top mtop">
			<div class="metreturn"><a href="javascript:history.go(-1);"></a></div>
			<div class="mtitle">{$mtitle}</div>

			<ul class="rightnav top-right">		
<!--
EOT;
if($lang_columnshow==3){
echo <<<EOT
-->
				<li class="tlist column fr"><span class="tspan icon-reorder"></span>
<!--导航方式3-->
		             <nav class="type3 none topmorebox"><i></i>{$met_nav}</nav>
				</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>

		</div>

	</header>
<!--
EOT;
?>