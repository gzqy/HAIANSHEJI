<!--<?php
require_once template('min/config');
if($nofollow)$nofollow = "<meta name=\"robots\" content=\"noindex,nofllow\" />";
echo <<<EOT
--><!DOCTYPE HTML>
<html>
<head>  
<script type="text/javascript" src="{$img_url}js/mootools-core.js"></script>  

 

</head><!--
EOT;
if($lang_navfixedok){
	$fixed = 'navbar-fixed-top';
	$fixedbody = 'class="met-navfixed"';
}
echo <<<EOT
-->   
	<nav class="navbar navbar-default met-nav {$fixed}" role="navigation">
        <div class="container">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle hamburger hamburger-close collapsed"
					data-target="#example-navbar-default-collapse" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="hamburger-bar"></span>
					</button>
					<a href="{$index_url}" class="navbar-brand navbar-logo vertical-align" title="{$met_webname}">
						<div class="vertical-align-middle"><img src="{$met_logo}" alt="{$met_webname}" title="{$met_webname}" /></div>
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-default-collapse">
<!--
EOT;
require_once template('modular/head/topnav');
echo <<<EOT
-->
				</div>
			</div>
		</div>
    </nav>
<!--
EOT;
?>