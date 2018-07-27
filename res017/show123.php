<!--<?php
require_once template('head');
echo <<<EOT
-->
        <div class="firstbox">
              <ul class="firstboxul">


 
               
               
<!--
EOT;
$firstbox[1]['name']   = $lang_icon1t;
$firstbox[1]['imgurl'] = $lang_icon1i;
$firstbox[1]['description']   = $lang_icon1d;

$firstbox[2]['name']   = $lang_icon2t;
$firstbox[2]['imgurl'] = $lang_icon2i;
$firstbox[2]['description']   = $lang_icon2d;

$firstbox[3]['name']   = $lang_icon3t;
$firstbox[3]['imgurl'] = $lang_icon3i;
$firstbox[3]['description']   = $lang_icon3d;

$firstbox[4]['name']   = $lang_icon4t;
$firstbox[4]['imgurl'] = $lang_icon4i;
$firstbox[4]['description']   = $lang_icon4d;
foreach($firstbox as $key=>$valz){
echo <<<EOT
-->
                <li><img src="{$valz[imgurl]}" alt="" /><span>{$valz[name]}</span><p>{$valz[description]}</p></li>
<!--
EOT;
}
echo <<<EOT
-->
              </ul>
        </div>
<div class="bakclor"id="productsone">
                  <div class="boxtitle">
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                            
                            <img src="{$lang_productsone1}" id="title1img" alt="想要座无虚席？" />
                        </a>
                  </div>
                    <div class='container'>
                        <div class="boxbtn" id="boxbtnl"><img src="{$img_url}img/btnleft.png" alt="" /></div>
                         <div class="cntarbox">
                              <ul id="mainlist">
                               
                               
                               
<!--
EOT;
foreach(methtml_getarray($lang_productsone3,'','','',$lang_productsone2,'','','','16') as $key=>$val){
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
-->
		
                                <li>
                                  <a class='normal' href='{$val[url]}'>
                                   <img src="{$val[imgurl]}">
                                  </a>
                                  <div class='info'>
                                    <h3>{$val[title]}</h3>
                                    <p>{$val['desc']}</p>
                                  </div>
                                </li>
                                
<!--
EOT;
}
echo <<<EOT
-->
                                
                                
                              </ul>
                            

                            </div>
                        <div class="boxbtn" id="boxbtnr"><img src="{$img_url}img/btnrgt.png" alt="" /></div>
                    </div>
              
        </div>
        
      <div class="fcclor" id="productstwo">            
                    <div class="boxtitle">
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                            <img src="{$lang_productstwot}" id="title2img" alt="还需快人一步？" />
                        </a>
                    </div>
                    <ul>
                                  
               
<!--
EOT;
$productstwott[1]['name']   = $lang_productstwo1t;
$productstwott[1]['description']   = $lang_productstwo1d;
$productstwott[2]['name']   = $lang_productstwo2t;
$productstwott[2]['description']   = $lang_productstwo2d;
$productstwott[3]['name']   = $lang_productstwo3t;
$productstwott[3]['description']   = $lang_productstwo3d;
$productstwott[4]['name']   = $lang_productstwo4t;
$productstwott[4]['description']   = $lang_productstwo4d;
$productstwott[5]['name']   = $lang_productstwo5t;
$productstwott[5]['description']   = $lang_productstwo5d;
$productstwott[6]['name']   = $lang_productstwo6t;
$productstwott[6]['description']   = $lang_productstwo6d;

foreach($productstwott as $key=>$valz){
echo <<<EOT
-->
                       
                       
                        <li>
                            <div class="secdboxcont"><img src="{$img_url}pic/deepdot13.png" alt="{$valz[name]}" /></div>
                            <span>{$valz[name]}</span>
                            <p>{$valz[description]}</p>
                        </li>
                        <!--
EOT;
}
echo <<<EOT
-->
                       
                    </ul>
                    <div class="sogen">{$lang_prod1}</div>
                    <div class="knowbtnbox"><a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                        <input type="button" value="{$lang_prod2}" ></a>
                    </div>
      </div>
            <!-- </div> -->

                    
                 
                       


      <div class="f7clor" id="productsthree">
                    <div class="boxtitle">
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                            <img src="{$lang_productsthreet}" id="title3img" alt="" />
                        </a>
                    </div>
                    <div class="thidboxcont">
                       
<!--
EOT;
$prodi[1]['name']   = $lang_prod1t;
$prodi[1]['description']   = $lang_prod1d;
$prodi[1]['imgurl']   = $lang_prod1i; 
$prodi[1]['cat1']   = $lang_cat1;
$prodi[1]['dog1']   = $lang_dog1; 
$prodi[1]['cat2']   = $lang_cat2;
$prodi[1]['dog2']   = $lang_dog2;
$prodi[1]['cat3']   = $lang_cat3;
$prodi[1]['dog3']   = $lang_dog3;
$prodi[1]['url']   = $lang_prod1a;

$prodi[2]['name']   = $lang_prod2t;
$prodi[2]['description']   = $lang_prod2d;
$prodi[2]['imgurl']   = $lang_prod2i; 
$prodi[2]['cat1']   = $lang_car1;
$prodi[2]['dog1']   = $lang_ip1;
$prodi[2]['cat2']   = $lang_car2;
$prodi[2]['dog2']   = $lang_ip2;
$prodi[2]['cat3']   = $lang_car3;
$prodi[2]['dog3']   = $lang_ip3;  
$prodi[2]['url']   = $lang_prod2a;

$prodi[3]['name']   = $lang_prod3t;
$prodi[3]['description']   = $lang_prod3d;
$prodi[3]['imgurl']   = $lang_prod3i;
$prodi[2]['cat1']   = $lang_gou1;
$prodi[2]['dog1']   = $lang_mao1;
$prodi[2]['cat2']   = $lang_gou2;
$prodi[2]['dog2']   = $lang_mao2;
$prodi[2]['cat3']   = $lang_gou3;
$prodi[2]['dog3']   = $lang_mao3; 
$prodi[3]['url']   = $lang_prod3a;
$i=0;
foreach($prodi as $key=>$valz){
$i++;
$keyz = $i!=1?'clsplay':'';
echo <<<EOT
-->       
                       
                        <div class="thidlftbox {$keyz}" id="csepicbox{$i}">
                          <a href="{$valz[imgurl]}"  class="swipebox" title="">
                            <img src="{$valz[imgurl]}" alt="" />
                          </a>
                          <span>点击图片全屏看</span> 
                        </div>
                        
<!--
EOT;
}
echo <<<EOT
-->  
                        
                        <div class="thidrgtbox">
                              <div class="thrgtup">
                                    <div class="thrgbtnbox" id="thlftnpre"><img src="{$img_url}img/btnlefse.png" alt="" /></div>
                                    
                                    
<!--
EOT;
$prodi[1]['name']   = $lang_prod1t;
$prodi[1]['description']   = $lang_prod1d;
$prodi[1]['imgurl']   = $lang_prod1i; 
$prodi[1]['cat1']   = $lang_cat1;
$prodi[1]['dog1']   = $lang_dog1; 
$prodi[1]['cat2']   = $lang_cat2;
$prodi[1]['dog2']   = $lang_dog2;
$prodi[1]['cat3']   = $lang_cat3;
$prodi[1]['dog3']   = $lang_dog3;
$prodi[1]['url']   = $lang_prod1a;

$prodi[2]['name']   = $lang_prod2t;
$prodi[2]['description']   = $lang_prod2d;
$prodi[2]['imgurl']   = $lang_prod2i; 
$prodi[2]['cat1']   = $lang_car1;
$prodi[2]['dog1']   = $lang_ip1;
$prodi[2]['cat2']   = $lang_car2;
$prodi[2]['dog2']   = $lang_ip2;
$prodi[2]['cat3']   = $lang_car3;
$prodi[2]['dog3']   = $lang_ip3;  
$prodi[2]['url']   = $lang_prod2a;

$prodi[3]['name']   = $lang_prod3t;
$prodi[3]['description']   = $lang_prod3d;
$prodi[3]['imgurl']   = $lang_prod3i;
$prodi[2]['cat1']   = $lang_gou1;
$prodi[2]['dog1']   = $lang_mao1;
$prodi[2]['cat2']   = $lang_gou2;
$prodi[2]['dog2']   = $lang_mao2;
$prodi[2]['cat3']   = $lang_gou3;
$prodi[2]['dog3']   = $lang_mao3; 
$prodi[3]['url']   = $lang_prod3a;
$i=0;
foreach($prodi as $key=>$valz){
$i++;
$keyz = $i!=1?'clsplay':'';
echo <<<EOT
-->       
                       
                                    <div class="updbebox {$keyz}" id="csetblebox{$i}">
                                         {$valz[name]}
                                    </div>
                        
<!--
EOT;
}
echo <<<EOT
-->  
                                   
                                   

                                    <div class="thrgbtnbox" id="thlftnnext"><img src="{$img_url}img/btnrgtse.png" alt="" /></div>
                              </div>
                              
                              
                                    
<!--
EOT;
$prodi[1]['name']   = $lang_prod1t;
$prodi[1]['description']   = $lang_prod1d;
$prodi[1]['imgurl']   = $lang_prod1i; 
$prodi[1]['cat1']   = $lang_cat1;
$prodi[1]['dog1']   = $lang_dog1; 
$prodi[1]['cat2']   = $lang_cat2;
$prodi[1]['dog2']   = $lang_dog2;
$prodi[1]['cat3']   = $lang_cat3;
$prodi[1]['dog3']   = $lang_dog3;
$prodi[1]['url']   = $lang_prod1a;

$prodi[2]['name']   = $lang_prod2t;
$prodi[2]['description']   = $lang_prod2d;
$prodi[2]['imgurl']   = $lang_prod2i; 
$prodi[2]['cat1']   = $lang_car1;
$prodi[2]['dog1']   = $lang_ip1;
$prodi[2]['cat2']   = $lang_car2;
$prodi[2]['dog2']   = $lang_ip2;
$prodi[2]['cat3']   = $lang_car3;
$prodi[2]['dog3']   = $lang_ip3;  
$prodi[2]['url']   = $lang_prod2a;

$prodi[3]['name']   = $lang_prod3t;
$prodi[3]['description']   = $lang_prod3d;
$prodi[3]['imgurl']   = $lang_prod3i;
$prodi[2]['cat1']   = $lang_gou1;
$prodi[2]['dog1']   = $lang_mao1;
$prodi[2]['cat2']   = $lang_gou2;
$prodi[2]['dog2']   = $lang_mao2;
$prodi[2]['cat3']   = $lang_gou3;
$prodi[2]['dog3']   = $lang_mao3; 
$prodi[3]['url']   = $lang_prod3a;
$i=0;
foreach($prodi as $key=>$valz){
$i++;
$keyz = $i!=1?'clsplay':'';
echo <<<EOT
-->      
                                    <div class="thrgtdown {$keyz}" id="csetblebox{$i}">
                                         {$valz[description]}
                                    </div>
                        
<!--
EOT;
}
echo <<<EOT
-->  
                             
                        </div>
                    </div>
      </div>


                   
               

      <div class="blackbgp" id="productsfour">
                    <div class="boxtitle">
                        <a href="javascript:;" onclick="jQuery('.boxbig').show()" class="show">
                            <img src="{$lang_productsfourt}" id="title4img" alt="" />
                        </a>
                    </div>
                    <div class="biaodanbox">
                          <div class="customerlogobox">
                                <ul class="customerlist">
                                 
                                 
                                 
<!--
EOT;
foreach(methtml_getarray($lang_productsfourc,'','','',$lang_productsfourn,'','','','16') as $key=>$val){
echo <<<EOT
-->         
                                  <li><img src="{$img_url}pic/customer1.png" alt="" /></li>
                                  
<!--
EOT;
}
echo <<<EOT
-->    
                                  
                                </ul>
                           </div>
                    </div> <!-- fordown.png -->
                    <div class="customslogn">{$lang_productsfourd}</div>
        </div>












        <div class="fcfclor" id="productsfive">
                    <div class="boxtitle"> 
                            <img src="{$lang_productsfivet}" id="title5img" alt="" /> 
                    </div>
                     <div class="nowjingdian">
                                          <div class="nowjd_title"><div class="nowjd_titlergt"><img src="{$img_url}img/changeyipi.png" />换一批</div></div>
                          <div class="main_lft">
                                      
                                          <div class="xxcenter" id="xxc1">
                                            <ul>

<!--
EOT;
	$productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'','','',8,'','','','16') as $key=>$val){

$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 
 
                                            <li style="background-image:url({$val[imgurl]}); ">
                                                          <div class="txt">
                                                                      <h3>{$val[title]}</h3>
                                                                      <p>{$val['desc']}</p>
                                                          </div>
                                            </li>

<!--
EOT;
}
echo <<<EOT
-->

                                             
                                              </ul>
                                           </div>
                                           <div class="xxcenter" id="xxc2">
                                            <ul>

<!--
EOT;
  $productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'','','',4,'','','','16') as $key=>$val){

$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 
 
                                            <li style="background-image:url({$val[imgurl]}); ">
                                                          <div class="txt">
                                                                      <h3>{$val[title]}</h3>
                                                                      <p>{$val['desc']}</p>
                                                          </div>
                                            </li>

<!--
EOT;
}
echo <<<EOT
-->

                                             
                                              </ul>
                                           </div>
                                           <div class="xxcenter" id="xxc3">
                                            <ul>

<!--
EOT;
  $productsfivec=tmpcentarr($lang_productsfivec);
foreach(methtml_getarray($lang_productsfivec,'','','',5,'','','','16') as $key=>$val){  
$val['desc']=utf8substr($val['description'],0,60);
echo <<<EOT
--> 
 
                                            <li style="background-image:url({$val[imgurl]}); ">
                                                          <div class="txt">
                                                                      <h3>{$val[title]}</h3>
                                                                      <p>{$val['desc']}</p>
                                                          </div>
                                            </li>

<!--
EOT;
} 
echo <<<EOT
-->

                                             
                                              </ul>
                                           </div>
                            </div>
                            <div class="knowbtnbox">
                                <input type="button" onclick="window.location='{$productsfivec[url]}'" value="{$lang_productsfivez}" >
                            </div>
          </div> 

           <div class="f7clor" id="productssix">
                    <div class="boxtitle">
                            <img src="{$lang_productssix1}" id="title6img" alt="了解海岸" />
                    </div>
                    <div class="anconbox">
                    <div class="f7imgbox">
                            <img src="{$lang_productssix2}" id="haian1" alt="创始人" />
                            <img src="{$lang_productssix5}" id="haian2" alt="归本主义" />
                            <img src="{$lang_productssix8}" id="haian3" alt="海岸团队" />
                        </div>
                    <div class="f7txtsbox">
                       
<!--
EOT;
$towbox[1]['name']   = $lang_productssix3; 
$towbox[1]['description']   = $lang_productssix4;

$towbox[2]['name']   = $lang_productssix6; 
$towbox[2]['description']   = $lang_productssix7;

$towbox[3]['name']   = $lang_productssix9; 
$towbox[3]['description']   = $lang_productssix10;

 
foreach($towbox as $key=>$valz){
echo <<<EOT
-->                  
                       
                            <div class="f7txtline">
                                <div class="mo1">{$valz[name]}</div>
                                <div class="mo2 clsplay">
                                     {$valz[description]}
                                </div>
                            </div> 
<!--
EOT;
}
echo <<<EOT
-->   
                    </div> 
                </div>

          </div>   
<!--
EOT;
require_once template('foot');
?>