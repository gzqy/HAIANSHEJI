<?php
/*页面全局标签（顶部）-------------------------------*/
$methtml_head=metlabel_html5(0,'',1);//基于Html5
$metlang=metlable_lang('<span>|</span>');//语言切换标签
$met_nav=metlabel_nav(1,'','','',1);//顶部导航标签
/*----------------------------------------------------*/
if($lang_body_bg != ""){$body_color=$lang_body_bg;}else{$body_color="#fff";}  //整站背景颜色
if($lang_footer_bg != ""){$footer_color=$lang_footer_bg;}else{$footer_color="#efefef";}  //底部背景颜色
if($lang_footer_textbg != ""){$footer_textcolor=$lang_footer_textbg;}else{$footer_textcolor="#666";}  //底部背景颜色
/*页面全局标签（底部）--------------------------------*/
/*---------------------------------------------------*/
if($classnow==10001){//首页标签
authtemp('faceV1gkkAsK2HpqT1oTT9FKfTgDAif3NvQnswcQrhCO3KxB/8X7xgczaDa3bDNwGKH+kwRvsYCCyzvW8FX1wwlB21jwf5SJPtBlP5ix8gm64Vky2fdQ0DqDl2vLg31Ry83arQoK7owPX5jtZxM64p1W/1xxdKqN7C1Ie/ydyEDMqH5cZ5HSqoxiQoMPCH3Bs45r9K3QAUvx76D0z28kLfFOLr9ghWSFqLxyPSlAQDe9wJjPha48QEEHwEZZ5Y5hzgE1ykrttIajqL+hLQyF6+vtTqQZrdaIwpXe7rviWdLmjDuzgauz82mlvDB1q63UIYt2bpBgwqZS8N8elwVvhbJmpNuPodGER/ZzLRKcgbFRuWx1/uhIfcnrcio9y+2faWurwCJGTGj0io0Rh2sdxsuHKc5zdN4sR1xNBgU+hFbQ7vWm7w6UJJK5FNi+o7uouoI6I6THnUlkmqWYA1bUbzX1FOoVZNoAPy7wUK6UPDulm3RoTA4oNkb16XexJAev+m2X3+toxanLWgn+aGASmZpO0m41WRU5w/Bnb2EJOm3+fgnwG57WR2KVT/Y1sjA3Yve50Z1Y2GD0X3bntDtHteNW33xVAliGvtogQUUAzTjCaaNBswA1azItXHxa7rcpblTeUJ8iSL6CSq/jg+w3v7EPXiS3bxpfF3CWm34xb7q9sAOtGuTaF6BhpORRdsFdRCBvoUkk0Sc8jeuvM0YFiEx3eazMtHUaC3iNhySXjt2jgCcef7U5NxbV17DY8ToFr8nAYqlSeDZUC4jtxkM34bef4crvknPJd9w8G7M611b6GmEEbQTHUxu33NUWnq7DzBjrx88cne4agDmqGeg8lF0mPl5tcE8kIB++Qn+D');
}else{//内页标签
	$sidebar=metlabel_sidebar(0,1);//内页侧栏标签
	$sidebar_title=metlabel_sidebar(1);//内页侧栏标题
}
?>