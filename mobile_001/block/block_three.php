<!--<?php

	//Í¼±ê¡¾Æß¡¿
	$Column7_name = $lang_Column7_title==''?$Column7[name]:$lang_Column7_title;
	$urlhtmla7 = "<a href=\"{$Column7[url]}\">";
	$urlhtmlb7 = '</a>';

	if($lang_Column7_bg != ""){$Column7_color=$lang_Column7_bg;}else{$Column7_color="#d87570";}
	//Í¼±ê¡¾°Ë¡¿
	$Column8_name = $lang_Column8_title==''?$Column8[name]:$lang_Column8_title;
	$urlhtmla8 = "<a href=\"{$Column8[url]}\">";
	$urlhtmlb8 = '</a>';

	if($lang_Column8_bg != ""){$Column8_color=$lang_Column8_bg;}else{$Column8_color="#bbd1c4";}
	//Í¼±ê¡¾¾Å¡¿
	$Column9_name = $lang_Column9_title==''?$Column9[name]:$lang_Column9_title;
	$urlhtmla9 = "<a href=\"{$Column9[url]}\">";
	$urlhtmlb9 = '</a>';

	if($lang_Column9_bg != ""){$Column9_color=$lang_Column9_bg;}else{$Column9_color="#febf02";}
	
	if($lang_Column7_ok == 0 && $lang_Column8_ok == 0 && $lang_Column9_ok == 0){$Column789 = false ;}else{$Column789 = true ;}

if($Column789){	
echo <<<EOT
-->

		<section style="padding:0px; margin:0px;">
            <ul class="list_font">

<!--
EOT;
if($lang_Column7_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla7}
						    <div style="background-color:{$Column7_color};"><img src="{$img_url}nine/jzsj.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></span></div>
                            <div>
                                <p>{$Column7_name}</p>
                            </div>
                        {$urlhtmlb7}
                    </li>
<!--
EOT;
}
if($lang_Column8_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla8}
						    <div style="background-color:{$Column8_color};"><img src="{$img_url}nine/mssj.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></span></div>
                            <div>
                                <p>{$Column8_name}</p>
                            </div>
                        {$urlhtmlb8}
                    </li>
<!--
EOT;
}
if($lang_Column9_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla9}
						    <div style="background-color:{$Column9_color};"><img src="{$img_url}nine/tyzht.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column9_name}</p>
                            </div>
                        {$urlhtmlb9}
                    </li>
<!--
EOT;
}
echo <<<EOT
-->
                            </ul>
        </section>
		<div class="clear"></div>
<!--
EOT;
}
echo <<<EOT
-->

<!--
EOT;
?>