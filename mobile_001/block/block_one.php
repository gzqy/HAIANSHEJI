<!--<?php
	//图标【一】
	$Column1_name = $lang_Column1_title==''?$Column1[name]:$lang_Column1_title;
	$urlhtmla1 = "<a href=\"{$Column1[url]}\">";
	$urlhtmlb1 = '</a>';


	if($lang_Column1_bg != ""){$Column1_color=$lang_Column1_bg;}else{$Column1_color="#d87570";}
	//图标【二】
	$Column2_name = $lang_Column2_title==''?$Column2[name]:$lang_Column2_title;
	$urlhtmla2 = "<a href=\"{$Column2[url]}\">";
	$urlhtmlb2 = '</a>';


	if($lang_Column2_bg != ""){$Column2_color=$lang_Column2_bg;}else{$Column2_color="#bbd1c4";}
	//图标【三】
	$Column3_name = $lang_Column3_title==''?$Column3[name]:$lang_Column3_title;
	$urlhtmla3 = "<a href=\"{$Column3[url]}\">";
	$urlhtmlb3 = '</a>';

	if($lang_Column3_bg != ""){$Column3_color=$lang_Column3_bg;}else{$Column3_color="#febf02";}

	if($lang_Column1_ok == 0 && $lang_Column2_ok == 0 && $lang_Column3_ok == 0){$Column123 = false ;}else{$Column123 = true ;}
 
if($Column123){	
echo <<<EOT
-->
 
		<section style="padding:0px; margin:0px;">
            <ul class="list_font">
<!--
EOT;
if($lang_Column1_ok){
 

echo <<<EOT
-->
                    <li>
						{$urlhtmla1}
						    <div style="background-color:{$Column1_color};"><img src="{$img_url}nine/jd.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column1_name}</p>
                            </div>
                        {$urlhtmlb1}
                    </li>
<!--
EOT;
}

if($lang_Column2_ok){
echo <<<EOT
-->
                    <li>
					    {$urlhtmla2}
						    <div style="background-color:{$Column2_color};"><img src="{$img_url}nine/coffee.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column2_name}</p>
                            </div>
                        {$urlhtmlb2}
                    </li>
<!--
EOT;
}
if($lang_Column3_ok){
echo <<<EOT
-->
                    <li>
						{$urlhtmla3}
						    <div style="background-color:{$Column3_color};"><img src="{$img_url}nine/tsxz.png" style="width:30px;height:30px;display:block;margin:0px auto;padding-top:20px;"/></div>
                            <div>
                                <p>{$Column3_name}</p>
                            </div>
                        {$urlhtmlb3}
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