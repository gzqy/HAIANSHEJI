$( document ).ready(function() {
    implement();
    var boot= $('.downtable');
    var bootwen=$('.downtbctn');
    var Iforder=$('#lforder');
    var bclose=$('.close0');
    /*底部关闭按钮的设置*/
    bclose.bind('click',function(){
        Downclose(boot, bootwen, Iforder, bclose);  
    });

    Iforder.bind('click',function(){
        openNow(boot, bootwen, Iforder, bclose);
        
    });
  });

$(function(){
    $('.boxbig').click(function(event){
    var _con = $(this);
    if(_con.is(event.target) && _con.has(event.target).length === 0)
    {
      $(this).hide();
    }
  });
});

// $(document).ready(function(){
// 	implement();
// })
function implement(){
    Special();
    distance();
}
/* 控制底部横幅关闭展开*/
function Downclose(downtable,downbtn,Iforder,close)
{
    downtable.css("width","30px").css('border-radius','0 10px 10px 0');
    downbtn.hide();
    close.hide();
    Iforder.addClass('order');
}
function openNow(downtable,downbtn,Iforder,close)
{
    Iforder.removeClass('order');
    downbtn.show();
    downtable.css('width','100%').css('border-radius','0');;
    close.show();
} 
//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=280){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    })  
});
// 海岸动态点击轮播
$(function(){
    var scroll_width = $('div.tem_inner').width();
    $('ul.tem_index_news_list').css('width',scroll_width);
    $('.tem_index_news_tab li').bind('click',function(){
        var index = $(this).index();
        $(this).children('h3').css({backgroundColor:"#8c989f",color:"#fff"}).parent().siblings().children('h3').css({backgroundColor:"#f5f5f5",color:"#444"});
        if(index>0){
            $(this).parent().next().find('.slides').css({'transform':'translate3d('+ (- scroll_width * index) +'px, 0px, 0px)','transition':'.5s all'});
        }else{
                $(this).parent().next().find('.slides').css({'transform':'translate3d(0px, 0px, 0px)','transition':'.5s all'});
        }
    });
});
// 禁止右键及复制
$(function(){
    document.oncontextmenu=new Function("event.returnValue=false"); 
    document.onselectstart=new Function("event.returnValue=false"); 
});
//banner动画效果
function Special(){
    $('.banner-2').css({
        left:'100px',
        opactiy:0
    })
    $('.plan').css({
        left:'-100px',
        opactiy:0
    })
    $('.essence').css({
        left:'100px',
        opactiy:0
    })
    setTimeout(function(){
        $('.banner-2').animate({
            left:'500px',
            opactiy:1
        },600)
        $('.plan').animate({
            left:'110px',
            opactiy:1
        },600)
        $('.essence').animate({
            left:'500px',
            opactiy:1
        },600)
    })
    Carousel();
}
// 标题-3 标题-4 标题-5 动画效果
function distance(){
    var st = $(this).scrollTop();
    // console.log(st);
    $(window).scroll(function(){
        if($(window).scrollTop()>1200){
            $('.Whole').animate({top: '150px', opacity: 1}, 300);
            setTimeout(function() {
				$('.Whole>li:first-child').addClass('professionalliturn');
				setTimeout(function() {
					$('.Whole>li:nth-child(2)').addClass('professionalliturn');
					setTimeout(function() {
						$('.Whole>li:nth-child(3)').addClass('professionalliturn');
						setTimeout(function() {
							$('.Whole>li:nth-child(4)').addClass('professionalliturn');
							setTimeout(function() {
								$('.Whole>li:last-child').addClass('professionalliturn');
							}, 200);
						}, 250);
					}, 200);
				}, 200);
			}, 200);
        }
        if($(window).scrollTop()>2000){
            $('.type-left').animate({opacity:1},300);
            setTimeout(function() {
				$('.type-left>li:first-child').addClass('peace');
				setTimeout(function() {
					$('.type-left>li:nth-child(2)').addClass('peace');
					setTimeout(function() {
						$('.type-left>li:nth-child(3)').addClass('peace');
						setTimeout(function() {
							$('.type-left>li:nth-child(4)').addClass('peace');
							setTimeout(function() {
								$('.type-left>li:last-child').addClass('peace');
							}, 200);
						}, 200);
					}, 200);
				}, 200);
            }, 200);
            $('.type-right').animate({opacity:1},300);
            setTimeout(function() {
				$('.type-right>li:first-child').addClass('Harmonious');
				setTimeout(function() {
					$('.type-right>li:nth-child(2)').addClass('Harmonious');
					setTimeout(function() {
						$('.type-right>li:nth-child(3)').addClass('Harmonious');
						setTimeout(function() {
							$('.type-right>li:nth-child(4)').addClass('Harmonious');
							setTimeout(function() {
								$('.type-right>li:last-child').addClass('Harmonious');
							}, 200);
						}, 200);
					}, 200);
				}, 200);
			}, 200);
        }
        if($(window).scrollTop()>2700){
            $('.Operate').animate({bottom: '0', opacity: 1}, 300);
			setTimeout(function() {
				$('.Operate>li:first-child').addClass('advantageulturn');
				setTimeout(function() {
                    $('.Operate>li:nth-child(2)').addClass('advantageulturn1');
                    setTimeout(function() {
                        $('.Operate>li:nth-child(3)').addClass('advantageulturn');
                        setTimeout(function() {
                            $('.Operate>li:nth-child(4)').addClass('advantageulturn1');
                            setTimeout(function() {
                                $('.Operate>li:nth-child(5)').addClass('advantageulturn');
                                setTimeout(function() {
                                    $('.Operate>li:last-child').addClass('advantageulturn1');
                                }, 200)
                            }, 200)
                        }, 200)
                    }, 200)
				}, 200);
			}, 200);
        }
        if($(window).scrollTop()>3600){
            $('.difficulty').animate({opacity:'1'},300);
            $('.xc_demo hr').animate({opacity:'1'},300);
        }
    })
}
// 标题-9 案例详情轮播
function Carousel(){
    var _picCurrentIndex=0;
	var _picPreIndex=-1;
	var _piccount;
	var _automove;
	//实现图片轮换的初始状态，第一张图片显示，其他图片隐藏
	_piccount=$('.cont2centlt .imginfo li').length;
	$('.cont2centlt .imginfo li').hide().eq(_picCurrentIndex).show();
	
	$('.imgbgcolor li').hover(function(){
		clearInterval(_automove);
		$('.imgbgcolor li.defoutimg').removeClass('defoutimg');
		$(this).addClass('defoutimg');
		var _index=$('.imgbgcolor li').index($(this));
		if(_index==_picCurrentIndex) return false;
		movenext(_index);
	},function(){
		_automove=setInterval(automove,1500);
	});	
	/**
	图片自动切换效果
	**/
	_automove=setInterval(automove,1500);
	function automove(){
		var _index=(_picCurrentIndex+1)%_piccount;
		$('.imgbgcolor li.defoutimg').removeClass('defoutimg');
		$('.imgbgcolor li').eq(_index).addClass('defoutimg');
		 movenext(_index);
	}
	/**
	该函数用于图片轮换效果的切换
	**/
	function movenext(_index){
		_picPreIndex=_picCurrentIndex;
		_picCurrentIndex=_index;
		$('.cont2centlt .imginfo li').eq(_picCurrentIndex).fadeIn(1000);
		$('.cont2centlt .imginfo li').eq(_picPreIndex).fadeOut(1000);
	}
    Special_effects();
}
//乡村十大振兴
function Special_effects(){
    $('.interactive').on({
        mouseover:function(){
             $(this).find('.nesting').css('display','block');
             $(this).find('.education').css('display','none');
        },
        mouseout:function(){
            $(this).find('.nesting').css('display','none');
            $(this).find('.education').css('display','block');
        }
    })
    $('.choose').click(function(){
        $(this).css("background","#3ac301");
    })
    Case_details();
}
// 案例详情
function Case_details(){
    var ls_img_path = '../templates/res017/images/xiangcun/';
    var coffindex=0;
	var cofflen=$('.catcoffrgt').length;
	$('.qprebtn').click(function(){
		$this=$(this);
		coffindex--;
		if(coffindex<0){
			coffindex=cofflen-1;
		}
		$('.catcoffimg').attr({
			src: ls_img_path+'isoftware'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
	});
	$('.qnextbtn').click(function(){
		$this=$(this);
		coffindex++;
		if(coffindex==cofflen){
			coffindex=0;
		}
		$('.catcoffimg').attr({
			src: ls_img_path+'isoftware'+(coffindex+1)+'.jpg'
		});
		$('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
    });
    option();
}
//关于海岸的选项卡切换
function option(){
    $('.small li').mouseover(function(){
        $(this).addClass('list').siblings().removeClass('list');
        var _index = $(this).index();
        $('.Include>div').eq(_index).show().siblings().hide();
        $('.Choice>div').eq(_index).show().siblings().hide();
        $(this).addClass("xc_change").siblings().removeClass("xc_change");
    })
    footer();
}
//页面底部选项卡切换
function footer(){
    $('.footleft em').click(function(){
        var list = $(this).index('.footleft em');
        console.log(list);
        $(this).addClass('factive').siblings().removeClass('factive');
        $('.footleft>.alinkbox').eq(list).removeClass('hide').siblings('ul.alinkbox').addClass('hide');
    })
    mouse();
}
// 鼠标移入移出效果
function mouse(){
    $('.situation div').on({
        mouseover : function(){
            $(this).find('li:nth-child(1)').addClass('active');
			$(this).siblings().find('li.active').removeClass('active');
        },
        mouseout : function(){
            $(this).find('li:nth-child(1)').removeClass();
			$('.look li:first-child').addClass('active'); 
        }
    })
    $('.bright').on({
        mouseover : function(){
           $(this).find('.Sensitive').removeClass();
        },
        mouseout : function(){
            $(this).find('div').addClass('Sensitive');
        }
    })
    $('.bleft').on({
        mouseover : function(){
           $(this).find('div').removeClass();
        },
        mouseout : function(){
            $(this).find('div').addClass('div1');
        }
    })
   
    $('.wda').hover(function(){
        $(this).find('.hospital').addClass('hoverbig');
        $(this).find('.hospital-1').addClass('hoverbig');
        $(this).find('.hospital-2').addClass('hoverbig');
        $(this).find('.inspect button:nth-child(1)').css({background:'#54b42c',color:'#fff'})
    },function(){
        $(this).find('.hospital').removeClass('hoverbig');
        $(this).find('.hospital-1').removeClass('hoverbig');
        $(this).find('.hospital-2').removeClass('hoverbig');
        $(this).find('.inspect button:nth-child(1)').css({background:'#f2f2f2',color:'#000'})
    })
    $('.maskbigico').on({
        mouseover : function(){
            $('.Arrow').removeClass().addClass('Arrow-1')
        },
        mouseout : function(){
            $('.Arrow-1').removeClass().addClass('Arrow');
        }
    })
    Transformation();
    mouse1();
}
function mouse1(){ 
    $('.tright').on({
        mouseover : function(){
          $(this).find('.div-right').removeClass();
        },
        mouseout : function(){ 
            $(this).find('div').addClass('div-right');
        }
    })
    $('.tleft').on({
        mouseover : function(){
           $(this).find('.div-right1').removeClass();
        },
        mouseout : function(){
            $(this).find('div').addClass('div-right1');
        }
    })
}
// 轮播图
function Transformation(){
    var sWidth = $('.wda').width();
    var len = $('.wda ul li').length;
    var index = 0;
    var picTimer;

    $('.lunborgtbtn').click(function(){
        index += 1;
        if(index == len){
            index = 0;
        }
        showPics(index);
    });
    $('.wda ul').css('width',sWidth * (len));
    function showPics(index){
        var nowLeft = -index*sWidth;
        $('.wda ul').stop(true,false).animate({"left":nowLeft},500);
    }
    install();
}
function install(){
    var sWidth = $('.wda-1').width();
    var len = $('.wda-1 ul li').length;
    var index = 0;
    var picTimer;

    $('.lunborgtbtn-1').click(function(){
        index += 1;
        if(index == len){
            index = 0;
        }
        showPics(index);
    });
    $('.wda-1 ul').css('width',sWidth * (len));
    function showPics(index){
        var nowLeft = -index*sWidth;
        $('.wda-1 ul').stop(true,false).animate({"left":nowLeft},500);
    }
    webpack();
}
function webpack(){
    var sWidth = $('.wda-2').width();
    var len = $('.wda-2 ul li').length;
    var index = 0;
    var picTimer;

    $('.lunborgtbtn-2').click(function(){
        index += 1;
        if(index == len){
            index = 0;
        }
        showPics(index);
    });
    $('.wda-2 ul').css('width',sWidth * (len));
    function showPics(index){
        var nowLeft = -index*sWidth;
        $('.wda-2 ul').stop(true,false).animate({"left":nowLeft},500);
    }
}