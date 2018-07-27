<!--<?php
echo <<<EOT
-->
   	<div class="footer">
    		<div class="footer1">
				<div class="icon">
					<ul class="footericon">
						<li>
							<img src="{$img_url}img/iconwx.jpg"/>
							<p>官方微信</p>
						</li>

						<li>
							<img src="{$img_url}img/iconwb.jpg"/>
							<p>官方微博</p>
						</li>
					</ul>
				</div>
				<!--<div class="p1">
						<p>CopRright © 1999-2018 | All Rrights Reserved.<br /> 京ICP备13049424号</p>
				</div>-->
    		</div>
    		<div class="phone">
    			<div><img src="{$img_url}img/dianhua.png"/></div>
    			<p>全国免费咨询热线：<span>400-879-1110</span></p>
    		</div>
    		<div class="p1">
					
						<p>CopRright © 1999-2018 | All Rrights Reserved.<br /> 京ICP备13049424号</p>
					
    	</div>
    </div>

</body>
<script src="{$img_url}js/jquery-2.1.4.min.js"></script>
<script src="{$img_url}js/rem.js"></script>
<script src="{$img_url}js/swiper.min.js"></script>
<script>
    var mySwiper = new Swiper ('.exhibition .swiper-container', {
        direction: 'horizontal',
        loop: true,
		autoplay:true,
		followFinger:true,
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
			clickable:true
        }
    });
    var swiper = new Swiper('.haian .swiper-container', {
    	direction: 'horizontal',
    	autoplay:true,
			loop: true,
		      navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		      },
		    });

</script>

<!--
EOT;
?>