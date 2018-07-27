<!--<?php
require_once template('modular/meta/meta_product');
if($lang_navfixedok){
	$fixed = 'navbar-fixed-top';
	$fixedbody = 'class="met-navfixed"';
}
echo <<<EOT
-->

<body {$fixedbody}>
<!--[if lte IE 8]>
	<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
	<p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
	</div>
<![endif]-->
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
if($_M['url']['shop'])require_once template('modular/shop/shop_head_user');
require_once template('modular/head/topnav');
echo <<<EOT
-->
				</div>
			</div>
		</div>
    </nav>
<!--
EOT;
if(!$bannernone)require_once template('modular/head/new_banner');
if(!$index&&!$sidebarnone)require_once template('modular/head/sidebar');
?>