<!--<?php

	//图标【四】
	$Column4_name = $lang_Column4_title==''?$Column4[name]:$lang_Column4_title;
	$urlhtmla4 = "<a href=\"{$Column4[url]}\">";
	$urlhtmlb4 = '</a>';

	if($lang_Column4_bg != ""){$Column4_color=$lang_Column4_bg;}else{$Column4_color="#bc4040";}
	//图标【五】
	$Column5_name = $lang_Column5_title==''?$Column5[name]:$lang_Column5_title;
	$urlhtmla5 = "<a href=\"{$Column5[url]}\">";
	$urlhtmlb5 = '</a>';

	if($lang_Column5_bg != ""){$Column5_color=$lang_Column5_bg;}else{$Column5_color="#6f9c97";}
	//图标【六】
	$Column6_name = $lang_Column6_title==''?$Column6[name]:$lang_Column6_title;
	$urlhtmla6 = "<a href=\"{$Column6[url]}\">";
	$urlhtmlb6 = '</a>';

	if($lang_Column6_bg != ""){$Column6_color=$lang_Column6_bg;}else{$Column6_color="#ff8b00";}
	
	if($lang_Column4_ok == 0 && $lang_Column5_ok == 0 && $lang_Column6_ok == 0){$Column456 = false ;}else{$Column456 = true ;}

if($Column456){		
echo <<<EOT
-->

		<section style="padding:0px; margin:0px;">
            <ul class="list_font">
<!--
EOT;
if($lang_Column4_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla4}
						    <div style="background-color:{$Column4_color};"><img src="{$img_url}nine/jggh.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column4_name}</p>
                            </div>
                        {$urlhtmlb4}
                    </li>
<!--
EOT;
}
if($lang_Column5_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla5}
						    <div style="background-color:{$Column5_color};"><img src="{$img_url}nine/jizx.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column5_name}</p>
                            </div>
                        {$urlhtmlb5}
                    </li>
<!--
EOT;
}
if($lang_Column6_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla6}
						    <div style="background-color:{$Column6_color};"><img src="{$img_url}nine/sykj.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column6_name}</p>
                            </div>
                        {$urlhtmlb6}
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