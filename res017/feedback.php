<!--<?php
require_once template('head'); 
$fid_url=$fid?1:0;
echo <<<EOT
-->
<section class="met-feedback animsition">
	<div class="container">
		<div class="row">
			<div class="met-feedback-body">
				<form enctype="multipart/form-data" method='POST' class="met-form met-form-validation" action='index.php?action=add'>
				<input type='hidden' name='lang' value='{$lang}' />
				<input type='hidden' name='fdtitle' value='{$title}' />
				<input type='hidden' name='ip' value='{$m_user_ip}' />
				<input type='hidden' name='id' value='{$id}' />
				<input type='hidden' name='fid_url' value='{$fid_url}' />
<!--
EOT;
$fromarray = $metcompress->formation(metlabel_feedback(),true);
require_once template('modular/form');
echo <<<EOT
-->
					<div class="form-group margin-bottom-0">
						<button type="submit" class="btn btn-primary btn-lg btn-block btn-squared">{$lang_submit}</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--
EOT;
require_once template('foot'); 
?>