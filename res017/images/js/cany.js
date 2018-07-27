// JavaScript Document
$( document ).ready(function() {

	/* banner */
	$('.banner .emone').css({top:"48px",opacity:1})
	$('.banner .emtwo').css('opacity',1)
	$('.banner .pone').css({top:"94px",opacity:1})
	$('.banner>a>button').css({top:"152px",opacity:1})
	$('.banner .ptwo').css('opacity',1)

	/* 横幅 */
    var boot= $('.downtable');
   	var bootwen=$('.downtbctn');
   	var lforder=$('#lforder');
   	var bclose=$('.close0');
    /*底部关闭按钮的设置*/
    bclose.bind('click',function(){
    	/*boot.animate({*/
    		boot.css("width","30px").css('border-radius','0 10px 10px 0');
    	/*},500,"swing",function(){*/
    		bootwen.hide();
    		bclose.hide();
    		lforder.addClass('order');
    		
    });

	lforder.bind('click',function(){
		lforder.removeClass('order');
		bootwen.show();
    	boot.css('width','100%').css('border-radius','0');;
    		bclose.show(); 
    	
	});
  });

// 海岸动态点击轮播
$(function(){
	var scroll_width = $('div.tem_inner').width();
	$('ul.tem_index_news_list').css('width',scroll_width);
	$('.tem_index_news_tab li').bind('click',function(){
		var index = $(this).index();
		$(this).children('h3').css({backgroundColor:"#f19601",color:"#000"}).parent().siblings().children('h3').css({backgroundColor:"#221e1b",color:"#f3f3f1"});
		if(index>0){
			$(this).parent().next().find('.slides').css({'transform':'translate3d('+ (- scroll_width * index) +'px, 0px, 0px)','transition':'.5s all'});
		}else{
				$(this).parent().next().find('.slides').css({'transform':'translate3d(0px, 0px, 0px)','transition':'.5s all'});
		}
	});
});



//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=300){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }
             // console.log($(this).scrollTop());  
             if($(this).scrollTop() >=600){
             	$('.faer_top').slideDown(200);
             }else{
             	$('.faer_top').slideUp(200);
             }
    })  
});

// 餐饮设计类型开始
$(document).scroll(function(){
	$this=$(document);
	if($this.scrollTop()>100){
	var li = $('.boxcontent ul>li');
	var num = 0;
	var time = setInterval(function(){
		if(num>li.length){
			clearInterval(time);
		}
		$('.boxcontent ul>li').eq(num).css({marginTop:"82px",opacity:1});
		num++;
	},100);
	}
})

/*底部hover*/
$(function(){
	var shudianlj = "../templates/res017/images/"; 
	$('.qbootinn p').hover(function(){
		var index=$(this).index('.qbootinn p');
		$this=$(this);
		$this.addClass('bootmid1').siblings('p').removeClass('bootmid1');
		if(index==1){
			$('.bootmid img').attr({src:shudianlj+'shudian/bootqrcode.jpg'});
		}else if(index==2){
			$('.bootmid img').attr({src:shudianlj+'shudian/callback.jpg'});
		}
	})
})

//d导航随高度变化变化
$(function(){  
    // var flag=true;  
    $(window).scroll(function(){
             if($(window).scrollTop() <=900 && $(window).scrollTop()<1800){  
                     
                     $("#firstnav").addClass('navblue').siblings().removeClass('navblue');             
                                                            
             }else if( $(window).scrollTop() <=1800 && $(window).scrollTop()<2500){  
                  
                     $("#secondnav").addClass('navblue').siblings().removeClass('navblue');             
                                                             
             }else if( $(window).scrollTop() <=2500  && $(window).scrollTop()<3300){  
                    
                     $("#thirdnav").addClass('navblue').siblings().removeClass('navblue');             
                                                             
             }else if( $(window).scrollTop() <=3300  && $(window).scrollTop()<3600){  
                     
                     $("#forthnav").addClass('navblue').siblings().removeClass('navblue');             
                                                            
             }else if( $(window).scrollTop() <=3600 && $(window).scrollTop()<4000 ){  
                      
                     $("#fifthnav").addClass('navblue').siblings().removeClass('navblue');             
                                                             
             }else if( $(window).scrollTop() <=4000 && $(window).scrollTop()<4600 ){  
                      
                     $("#sixthnav").addClass('navblue').siblings().removeClass('navblue');             
                                                             
             }else{                                        
                    
                     $("#seventhnav").addClass('navblue').siblings().removeClass('navblue');                                      
                                    
             }  
    })  
})  

/*首页大图轮播*/
$(function() {
	var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
	var len = $("#focus ul li").length; //获取焦点图个数
	var index = 0;
	var picTimer;
	$(window).resize(function(){
		sWidth = $("#focus").width();
		
	})
	//以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
	var btn = "<div class='btnBg'></div><div class='btn'>";
	btn += "<div class='preNext pre'></div><div class='preNext next'></div>";
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0.5);

	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$("#focus .btn span").css("opacity",0.4).mouseover(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
		//$(this).addClass('myover').siblings().removeClass('myover');
	}).eq(0).trigger("mouseover");
	
	//上一页、下一页按钮透明度处理
	$("#focus .preNext").css("opacity",0.2).hover(function() {
		$(this).stop(true,false).animate({"opacity":"0.5"},3000);
	},function() {
		$(this).stop(true,false).animate({"opacity":"0.2"},3000);
	});

	//上一页按钮
	$("#focus .pre").click(function() {
		index -= 1;
		if(index == -1) {index = len - 1;}
		showPics(index);
	});

	//下一页按钮·
	$("#focus .next").click(function() {
		index += 1;
		if(index == len) {index = 0;}
		showPics(index);
	});

	//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
	//$("#focus ul").css("width",sWidth * (len));
	
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if(index == len) {index = 0;}
		},2000); //此4000代表自动播放的间隔，单位：毫秒
	}).trigger("mouseleave");
	
	//显示图片函数，根据接收的index值显示相应的内容
	function showPics(index) { //普通切换
		var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
		$("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
		//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
		$("#focus .btn span").stop(true,false).animate({"opacity":"0.5"},300).eq(index).stop(true,false).animate({"opacity":"0.9"},300); //为当前的按钮切换到选中的效果
		
	}
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

/*选项卡图片介绍特效*/
$(function(){
	$(".xxcenter ul li").hover(function(){
		$(this).children(".txt").stop().animate({height:"360px"},700);
		$(this).find(".txt h3").stop().animate({paddingTop:"175"},900);
		$(this).find(".txt p").stop().show();
		$width=$(this).width();
		$(this).children('.txt').width($width);		
		
	},function(){
		$(this).children(".txt").stop().animate({height:"30px"},200);
		$(this).find(".txt h3").stop().animate({paddingTop:"0px"},550);
		$(this).find(".txt p").stop().hide();
	});
	
})

/*换一批效果*/
$(function() {
	var huannum=0;
	$(".nowjd_titlergt").click(function() {
		huannum++;
		if(huannum==0){
			$("#xxc1").show();
			$("#xxc2").hide();
			$("#xxc3").hide();
		}
		if(huannum==1){
			$("#xxc1").hide();
			$("#xxc2").show();
			$("#xxc3").hide();
		}
		if(huannum==2){
			$("#xxc1").hide();
			$("#xxc2").hide();
			$("#xxc3").show();
			huannum=-1;
		}
	})
});
/*了解海岸三块文字遮盖*/
$(function(){
	var $img = $(".f7imgbox img");
	$(".mo1").hover(function(){
		var index = $(this).index(".mo1");
		$img.eq(index).show().siblings().hide();
		$(this).siblings().show(300).parent().siblings().find(".mo2").hide();
	},function() {
		$(this).next().hide();
	});
});
/*两排展示图左右切换效果*/
$(function() {
	// var thirdboxnum=0;
	$(".boxbtn").click(function() {
		if ($("#swaplist").css("display") == 'none') {
			 $("#mainlist").hide(); 
			 $("#swaplist").fadeIn(100);
		}else{
			$("#swaplist").hide();  
			$("#mainlist").fadeIn(100);
        }  
    });  
});  

/*点击左右切换案例内容*/
$(function() {
	var thirdboxnum=0;
	$("#thlftnpre").click(function() {
		thirdboxnum--;
		if (thirdboxnum== -1) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").removeClass('clsplay');

			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").removeClass('clsplay');

			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").removeClass('clsplay');
		};
		if (thirdboxnum== -2) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").removeClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").removeClass('clsplay');
			$("#csetblebox5").addClass('clsplay');

			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").removeClass('clsplay');
			$("#csetxtbox5").addClass('clsplay');
		};
		if (thirdboxnum== -3) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").removeClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").removeClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").addClass('clsplay');

			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").removeClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").addClass('clsplay');
			thirdboxnum=0;
		};
		if (thirdboxnum== -4) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").removeClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").removeClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").addClass('clsplay');

			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").removeClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").addClass('clsplay'); 
		};
		if (thirdboxnum== -5) {
			$("#csepicbox1").removeClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").removeClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").addClass('clsplay');

			$("#csetxtbox1").removeClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").addClass('clsplay');
			thirdboxnum=0;
		};
	});
	$("#thlftnnext").click(function() {
		thirdboxnum++;
		if (thirdboxnum== 1) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").removeClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").removeClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").addClass('clsplay');

			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").removeClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").addClass('clsplay');
		};
		if (thirdboxnum== 2) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").removeClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").removeClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").addClass('clsplay');

			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").removeClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").addClass('clsplay');
		};
		if (thirdboxnum== 3) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").removeClass('clsplay');
			$("#csepicbox5").addClass('clsplay');
			
			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").removeClass('clsplay');
			$("#csetblebox5").addClass('clsplay');
						
			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").removeClass('clsplay');
			$("#csetxtbox5").addClass('clsplay'); 
		};
		if (thirdboxnum== 4) {
			$("#csepicbox1").addClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").removeClass('clsplay'); 
			
			$("#csetblebox1").addClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").removeClass('clsplay');
			
			$("#csetxtbox1").addClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").removeClass('clsplay');
			 
		};
		if (thirdboxnum== 5) {
			$("#csepicbox1").removeClass('clsplay');
			$("#csepicbox2").addClass('clsplay');
			$("#csepicbox3").addClass('clsplay');
			$("#csepicbox4").addClass('clsplay');
			$("#csepicbox5").addClass('clsplay');

			$("#csetblebox1").removeClass('clsplay');
			$("#csetblebox2").addClass('clsplay');
			$("#csetblebox3").addClass('clsplay');
			$("#csetblebox4").addClass('clsplay');
			$("#csetblebox5").addClass('clsplay');
			
			$("#csetxtbox1").removeClass('clsplay');
			$("#csetxtbox2").addClass('clsplay');
			$("#csetxtbox3").addClass('clsplay');
			$("#csetxtbox4").addClass('clsplay');
			$("#csetxtbox5").addClass('clsplay');
			thirdboxnum=0;
		};
	})
});

// 底部二维码hover切换事件
$(document).ready(function () {
	$(".official-plat ul li:first-child").hover(function () {
		$(".weixin").show();
		$(".weibo").hide();
	});
	$("li[title='点击打开官方微博']").hover(function () {
		$(".weixin").hide();
		$(".weibo").show();
	});
	//href="#a_null"的统一设置为无效链接
	$("a[href='#productsone']").click(function () {
		return false;
	});
});

// 3Dbox
$(function () {
var nodes  = document.querySelectorAll('.container ul li'),
    _nodes = [].slice.call(nodes, 0);

var getDirection = function (ev, obj) {
    var w = obj.offsetWidth,
        h = obj.offsetHeight,
        x = (ev.pageX - obj.offsetLeft - (w / 2) * (w > h ? (h / w) : 1)),
        y = (ev.pageY - obj.offsetTop - (h / 2) * (h > w ? (w / h) : 1)),
        d = Math.round( Math.atan2(y, x) / 1.57079633 + 5 ) % 4;
  
    return d;
};

var addClass = function ( ev, obj, state ) {
    var direction = getDirection( ev, obj ),
        class_suffix = "";
    
    obj.className = "";
    
    switch ( direction ) {
        case 0 : class_suffix = '-top';    break;
        case 1 : class_suffix = '-right';  break;
        case 2 : class_suffix = '-bottom'; break;
        case 3 : class_suffix = '-left';   break;
    }
    
    obj.classList.add( state + class_suffix );
};

_nodes.forEach(function (el) {
    el.addEventListener('mouseover', function (ev) {
        addClass( ev, this, 'in' );
    }, false);

    el.addEventListener('mouseout', function (ev) {
        addClass( ev, this, 'out' );
    }, false);
});
});

// 右侧二维码
$(function () {
   var scrolltotop={
    setting:{
        startline:100, //起始行
        scrollto:0, //滚动到指定位置
        scrollduration:400, //滚动过渡时间
        fadeduration:[500,100] //淡出淡现消失
    },
    controlHTML:'<img src="images/top.png" style="width:30px; height:30px; border:0;" />', //返回顶部按钮
    controlattrs:{offsetx:10,offsety:10},//返回按钮固定位置
    anchorkeyword:"#top",
    state:{
        isvisible:false,
        shouldvisible:false
    },scrollup:function(){
        if(!this.cssfixedsupport){
            this.$control.css({opacity:0});
        }
        var dest=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);
        if(typeof dest=="string"&&jQuery("#"+dest).length==1){
            dest=jQuery("#"+dest).offset().top;
        }else{
            dest=0;
        }
        this.$body.animate({scrollTop:dest},this.setting.scrollduration);
    },keepfixed:function(){
        var $window=jQuery(window);
        var controlx=$window.scrollLeft()+$window.width()-this.$control.width()-this.controlattrs.offsetx;
        var controly=$window.scrollTop()+$window.height()-this.$control.height()-this.controlattrs.offsety;
        this.$control.css({left:controlx+"px",top:controly+"px"});
    },togglecontrol:function(){
        var scrolltop=jQuery(window).scrollTop();
        if(!this.cssfixedsupport){
            this.keepfixed();
        }
        this.state.shouldvisible=(scrolltop>=this.setting.startline)?true:false;
        if(this.state.shouldvisible&&!this.state.isvisible){
            this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]);
            this.state.isvisible=true;
        }else{
            if(this.state.shouldvisible==false&&this.state.isvisible){
                this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]);
                this.state.isvisible=false;
            }
        }
    },init:function(){
        jQuery(document).ready(function($){
            var mainobj=scrolltotop;
            var iebrws=document.all;
            mainobj.cssfixedsupport=!iebrws||iebrws&&document.compatMode=="CSS1Compat"&&window.XMLHttpRequest;
            mainobj.$body=(window.opera)?(document.compatMode=="CSS1Compat"?$("html"):$("body")):$("html,body");
            mainobj.$control=$('<div id="topcontrol" >'+mainobj.controlHTML+"</div>").css({position:mainobj.cssfixedsupport?"fixed":"absolute",bottom:mainobj.controlattrs.offsety,right:mainobj.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"返回顶部"}).click(function(){mainobj.scrollup();return false;}).appendTo("body");if(document.all&&!window.XMLHttpRequest&&mainobj.$control.text()!=""){mainobj.$control.css({width:mainobj.$control.width()});}mainobj.togglecontrol();
            $('a[href="'+mainobj.anchorkeyword+'"]').click(function(){mainobj.scrollup();return false;});
            $(window).bind("scroll resize",function(e){mainobj.togglecontrol();});
        });
    }
};
scrolltotop.init();
});

//footer点击切换选项卡

$(function() {
	$(".footuplistbox>dl>dt").click(function() {
		var footerxuanindex= $(this).index();
		$(".footuplistbox dl dt").eq(footerxuanindex).addClass('footdtfocus').siblings().removeClass('footdtfocus');
		$(".footuplistbox ul").eq(footerxuanindex).removeClass('clsplay').siblings('ul').addClass('clsplay');
	});
})
// 禁止右键及复制
$(function(){
	document.oncontextmenu=new Function("event.returnValue=false"); 
	document.onselectstart=new Function("event.returnValue=false"); 
});

/* 返回顶部 */
function go_top(){
	$('html,body').animate({  
        scrollTop: 0  
    }, 800); 
}