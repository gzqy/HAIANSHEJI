<!--<?php
require_once template('min/compress.class'); 
echo <<<EOT
-->
	<input type='hidden' name='lang' value='{$lang}' />
	<input type='hidden' name='jobid' value='{$jobid}' />
<!--
EOT;
$fromarray = $metcompress->formation($cv_para,true);
//参数1:表单数据
//参数2:是否极简化
require_once template('modular/form');
echo <<<EOT
-->
<!--
EOT;
?>-->