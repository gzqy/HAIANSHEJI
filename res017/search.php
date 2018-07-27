<!--<?php
if($mbpagelist){
require_once template('new_search/ajax');
}else{
$bannernone  = 1;
$sidebarnone = 1;
require_once template('new_search/head'); 
echo <<<EOT
-->
<section class="met-search animsition">
	<div class="container">
		<div class="row">
			<div class="met-search-body">
				<form method='get' class="page-search-form" role="search" action='{$_M[url][site]}{$class_list[$classnow][foldername]}/search.php'>
					<input type='hidden' name='lang' value='{$lang}' />
					<input type='hidden' name='class1' value='{$class1}' />
					<div class="input-search input-search-dark">
						<button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
						<input 
							type="text" 
							class="form-control input-lg" 
							name="searchword" 
							value="{$searchword}"
							placeholder="{$lang_SearchInfo1}"
							data-fv-notempty = "true" 
							data-fv-message = "{$lang_Empty}"
						>
					</div>
				</form>
				<ul class="list-group list-group-full list-group-dividered met-page-ajax">
<!--
EOT;
require_once template('new_search/ajax');
echo <<<EOT
-->
				</ul>
<!--
EOT;
if($i==0&&$searchword){
echo <<<EOT
-->
				<h1 class="page-search-title">
					{$lang_SearchInfo3} "{$searchword}" {$lang_SearchInfo4}
				</h1>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
require_once template('new_search/page');
echo <<<EOT
-->
			</div>
		</div>
	</div>
</section>
<!--
EOT;
require_once template('foot'); 
}
?>