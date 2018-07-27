<!--<?php
$met_foot_nav = methtml_footnav();//底部导航标签（次导航）
$met_foot_txt = metlabel_foot();//底部信息标签  
echo <<<EOT
--> 
<footer>
              <div class="footerup">
                    <div class="footertitle">
                        <em>联系我们</em><span>Contact us</span>
                    </div>
                    <div class="footermain">
                        <div class="ftmainlft">
                              <em><i class="fticon fticon3"></i>400-879-1110</em>
                              <em><i class="fticon fticon4"></i>haianzhuangshi@sina.com </em>
                              <em><i class="fticon fticon1"></i>www.haianzhuangshi.com</em>
                              <em><i class="fticon fticon2"></i>北京市朝阳区北汽双井文创园3号楼E座108号</em>
                        </div>
                         <div class="footzxlg">
                            <img src="{$img_url}pic/footlo.png"></img>
                        </div>
                        <ul class="ftmainrgt">
                              <li><img src="{$img_url}pic/erweima1.jpg" alt="扫一扫，免费通话" /><span>扫一扫，免费通话</span></li>
                              <li><img src="{$img_url}pic/erweima2.jpg" alt="微信公众号" /><span id="weixincenter">微信公众号</span></li>
                        </ul>
                        <div class="ftdownul">
                            <ul>
                                  <li><a href="#">咖啡厅设计</a></li>
                                  <li><a href="#"> 餐厅设计</a></li>
                                  <li><a href="#"> 田园综合体设计</a></li>
                                  <li><a href="#"> 特色小镇设计</a></li>
                                  <li><a href="#">集装箱设计</a></li>
                                  <li><a href="#">商业综合体设计</a></li>
                                  <li><a href="#">民宿设计</a></li>
                                  <li><a href="#">网咖设计</a></li>
                                  <li><a href="#">酒吧设计</a></li>
                                  <li><a href="#">会所设计</a></li>
                                  <li><a href="#">书店设计</a></li>
                                  <li><a href="#">软装设计</a></li>
                                  <li><a href="#">品牌VI设计</a></li>
                            </ul>
                        </div>
                    </div>
              </div>
              <div class="footerdown">
                    <p>CopRright &copy; 1999-2017 北京海岸设计 All Rrights Reserved. </p >
                    <p>海岸声明：本站内容 图像资料版权均属北京海岸设计任何组织、媒体、网站和个人未经授权不得转载复制或其它任何方式发布;违者本公司将依法追究其法律责任！</p >
                    <p>京ICP备13049424号</p >
                    <div class="cnzz"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1262177712'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/stat.php%3Fid%3D1262177712%26show%3Dpic' type='text/javascript'%3E%3C/script %3E"));</script></div>
              </div>

      </footer>

 <div style="display:none">
 { $met_foot_txt}
 </div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6cc600faa9645755766632f71872d7a6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
 <!-- 提交需求列表底部 -->
        <div class="downtable">
        <div id="lforder" hidden>立即预约</div>
          <div class="close0"><i>×</i></div>
              <div class="downtbctn">
                        <div class="tableimg"><img src="{$img_url}pic/smallhand.png" alt="" /><span>10秒提交设计需求</span></div>
                        <div class="tablemain">
                              <!--
EOT;
require template('feed/feedback6'); 
$metfeedback2=metlabel_feedback6(166);
echo <<<EOT
-->
              {$metfeedback2}
                        </div>
                        <div class="tablergt">
                              <span>免费热线电话</span>
                              <em><a href=" ">400-879-1110</a></em>
                        </div>
              </div>
        </div>
              

<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
 
</body>
</html>
<!--
EOT;
?>-->