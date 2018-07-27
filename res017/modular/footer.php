<?php
echo <<<EOT
-->
<!--
EOT;
if($_M['url']['shop']){
echo <<<EOT
--><script>
var jsonurl='{$_M['url']['shop_cart_jsonlist']}',totalurl='{$_M['url']['shop_cart_modify']}',delurl='{$_M['url']['shop_cart_del']}',lang_emptycart='{$_M['word']['app_shop_emptycart']}';
</script>
<!--
EOT;
}
if($lang_lazyloadbg_open){
    if(is_file($lang_lazyloadbg)){
echo <<<EOT
-->
<input type="hidden" name="lazyloadbg" value="{$lang_lazyloadbg}">
<!--
EOT;
    }
}else{
echo <<<EOT
-->
<input type="hidden" name="lazyloadbg" value="base64">
<!--
EOT;
}
echo <<<EOT
-->
<script src="{$resui['js']}"></script>
</body>
</html>
<!--
EOT;
?>