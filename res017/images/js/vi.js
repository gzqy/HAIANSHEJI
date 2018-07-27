// javascript Document

// banner 
$(function(){
	$(document).scroll(function(){
		$this=$(this);
		if($this.scrollTop()>480){
			$('.reddiscard p').animate({left:0,top:0,opacity:1},1000);
		}
		if($this.scrollTop()>5442){
			$('.conclosure span img').animate({
				left: 0,
				top: 0,
				opacity:1
			},
				1000);
		};
	});
});
/*轮播*/
$(function(){
	var _picCurrentIndex=0;
	var _picPreIndex=-1;
	var _piccount;//获取总长度(个数)
	var _automove;//图片自动切换效果方法封装
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
		_automove=setInterval(automove,3000);
	});
	
	/**
	图片自动切换效果
	**/
	_automove=setInterval(automove,3000);
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
		$('.cont2centlt .imginfo li').eq(_picCurrentIndex).fadeIn(2000);
		$('.cont2centlt .imginfo li').eq(_picPreIndex).fadeOut(500);

	}
})

$(function(){
	var clai=0;
	var clalen=$('.innerimg').length;
	$('.chaplfbtn').click(function(){
		$('.innerimg').eq(clai).hide();
		$('.rgtcapvi').eq(clai).hide();
		clai--;
		if(clai<0){
			clai=clalen-1;
			$('.innerimg').eq(clai).show();
			$('.rgtcapvi').eq(clai).show();
		}else{
			$('.innerimg').eq(clai).show();
			$('.rgtcapvi').eq(clai).show();					
		}
	});
	$('.chaprgtbtn').click(function(){
		$('.innerimg').eq(clai).hide();
		$('.rgtcapvi').eq(clai).hide();
		clai++;
		if(clai==clalen){
			clai=0;
			$('.innerimg').eq(clai).show();
			$('.rgtcapvi').eq(clai).show();
		}else{
			$('.innerimg').eq(clai).show();
			$('.rgtcapvi').eq(clai).show();
		}
				
	});

})

// 底部横幅
$( document ).ready(function() {
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

//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=300){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    })  
});

/* 控制底部横幅关闭展开*/
function Downclose(downtable,downbtn,Iforder,close)
{
	downtable.css("width","30px").css('transition','0 all').css('border-radius','0 10px 0 0');
	downbtn.hide();
	close.hide();
	Iforder.addClass('order');
}
function openNow(downtable,downbtn,Iforder,close)
{
	Iforder.removeClass('order');
	downbtn.show();
    downtable.css('width','100%').css('transition','.5s all').css('border-radius','0');
    close.show();
} 

// 弹框点击空白关闭
$(function(){
	$('.boxbig').click(function(event){
    var _con = $(this);
    if(_con.is(event.target) && _con.has(event.target).length === 0)
    {
      $(this).hide();
    }
  });
});

// 禁止右键及复制
$(function(){
	document.oncontextmenu=new Function("event.returnValue=false"); 
	document.onselectstart=new Function("event.returnValue=false"); 
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