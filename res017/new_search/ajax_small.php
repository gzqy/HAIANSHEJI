<?php
$i=0;
foreach($search_list as $key=>$val){
	if(!strstr($val['title'],$lang_SearchInfo1)){
		if($val['url']!=$_M['url']['site']){
		$i++;
echo <<<EOT
-->
<!--
EOT;
		}
	}
}
?>