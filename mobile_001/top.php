<!--<?php
echo <<<EOT
-->
    <header data-value={$lang_headnav_ok}>
	
<!--
EOT;
if(!($classnow==10001&&$lang_headnav_ok==1)){

echo <<<EOT
-->	
		<div class="top">
			<div class="top-logo">
				<a href="{$index_url}"><img src="{$met_logo}" alt="{$met_webname}" title="{$met_webname}" /></a>
			</div>
			<ul class="top-right">
				<li class="tlist seach"><span class="tspan icon-search"></span>
				</li>


		
	

<!--
EOT;
if(count($met_langok)>1&&$met_lang_mark){
echo <<<EOT
-->
<!--语言切换功能-->
				<li class="tlist lang"><span class="tspan icon-globe"></span>
<!--
EOT;
if(count($met_langok)>1&&$met_lang_mark){
echo <<<EOT
-->
<!--语言切换功能-->
		<div class="langlist none topmorebox">
		<i></i>
<!--
EOT;
foreach($met_langok as $key=>$val){
echo <<<EOT
-->
			<a href='{$met_index_url[$val[mark]]}' title='{$val[name]}' >{$val[name]}</a>
<!--
EOT;
}
echo <<<EOT
-->
			<div class="clear"></div>
		</div>
<!--
EOT;
}
echo <<<EOT
-->
				</li>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
if($lang_columnshow==3){
echo <<<EOT
-->
				<li class="tlist column"><span class="tspan icon-reorder"></span>
<!--
EOT;
if($lang_columnshow==3){
echo <<<EOT
-->
<!--导航方式3-->
		<nav class="type3 none topmorebox"><i></i>{$met_nav}</nav>
<!--
EOT;
}
echo <<<EOT
-->
				</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>
		</div>
<!--搜索框-->
<div class="seachbox none topmorebox">
	<div class="seachbox_box">
			<i></i>
			<form method="POST" name="myform" action="{$searchurl}">
                <input type="text" name="searchword" class="text" placeholder="{$lang_saechplaceholder}" />
                <input type="submit" name="Submit" value="{$lang_initext1}" class="submit" />
            </form>
	</div>
</div>
<!--
EOT;
}
if(!$map){
echo <<<EOT
-->
<!--
EOT;
if($lang_columnshow==1){
echo <<<EOT
-->
<!--导航方式1-->
		<nav class="type1" id="nav">
			{$met_nav}
		</nav>
<!--
EOT;
}elseif($lang_columnshow==2){
echo <<<EOT
-->
<!--导航方式2-->
		<nav class="type2">
			{$met_nav}
			<div class="clear"></div>
		</nav>
<!--
EOT;
}
echo <<<EOT
-->


	</header>
<script type="text/javascript">
//导航
$("#nav li.navdown").addClass('ui-state-active');
if($("nav").size()>0){
var navsize = $('.navflipsnap li').size();
	var navszlt = new Array();
	if(columnshow==1){//内滚导航
	if(document.documentElement.clientWidth>800){
		$(".metcont").width(340);
	}
		function navmore(navsize,ks){
			ks=ks>4?4:ks;
			navszlt[1] = Math.round($('.metcont').width()/1);
			navszlt[2] = Math.round($('.metcont').width()/2);
			navszlt[3] = Math.round($('.metcont').width()/3);
			navszlt[4] = Math.round($('.metcont').width()/4);
			$('#nav li').width(navszlt[ks]);
			$('#nav').navigator();
		}
		navmore(navsize,ks);
		$(window).resize(function() {
			navmore(navsize,ks);
		});
	}else if(columnshow==2){//普通导航
		function navtype2(ks){
			navszlt[1] = '100%';
			navszlt[2] = '50%';
			navszlt[3] = '33.3%';
			navszlt[4] = '25%';
			$('nav.type2 li,nav.type3 li').css("width",navszlt[ks]);
			//if(ks==3)$('nav.type2 li,nav.type3 li').each(function(i){ i++; if(i%3==0){ $(this).css("width",'34%'); } });
		}
		navtype2(ks);
		$(window).resize(function() {
			navtype2(ks);
		});
	}
}
</script>
<!--
EOT;
}else{
echo <<<EOT
-->
</header>
<!--
EOT;
}
echo <<<EOT
-->

<!--
EOT;
?>