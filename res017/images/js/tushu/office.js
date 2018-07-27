$(document).ready(function(){
    implement();
})

function implement(){
    Remove();
}

function Remove(){
    $('.inside').on({
        mouseover : function(){
		  $(this).find('.lce').removeClass().addClass('lve');
		  $(this).find('.lce-1').removeClass().addClass('lve-1');
		  $(this).find('.lce-2').removeClass().addClass('lve-2');
		  $(this).find('.lce-3').removeClass().addClass('lve-3');
		  $(this).find('.lce-4').removeClass().addClass('lve-4');
        },
        mouseout : function(){
		 $(this).find('.lve').removeClass().addClass('lce');
		 $(this).find('.lve-1').removeClass().addClass('lce-1');
		 $(this).find('.lve-2').removeClass().addClass('lce-2');
		 $(this).find('.lve-3').removeClass().addClass('lce-3');
		 $(this).find('.lve-4').removeClass().addClass('lce-4');
        }
    })
    $('.demo>img').hover(function(){
            $(this).addClass('Larger');
        },function(){
            $(this).removeClass('Larger');
        }
    )
    Carousel();
}

function Carousel(){
    var oul = $('.wrap ul');
	var oulHtml = oul.html();
	oul.html(oulHtml+oulHtml)
	var timeId = null;
	var ali = $('.wrap ul li');
	var aliWidth = ali.eq(0).width();
	var aliSize = ali.size();
	var ulWidth = aliWidth*aliSize;
	oul.width(ulWidth);	//1600px
	var speed = 2;
	function slider(){
		if(speed<0){
			if(oul.css('left')==-ulWidth/2+'px'){
	 		oul.css('left',0);
		 	}
		 	oul.css('left','+=-2px');
		}
		if(speed>0){
			if(oul.css('left')=='0px'){
	 		oul.css('left',-ulWidth/2+'px');
		 	}
		 	oul.css('left','+='+speed+'px');
		}
	 }
	
	// setInterval()函数的作用是：每隔一段时间，执行该函数里的代码
	 timeId = setInterval(slider,30);
	$('.wrap').mouseover(function(){
		// clearInterval()函数的作用是用来清除定时器
		clearInterval(timeId);
	});

	$('.wrap').mouseout(function(){
		timeId = setInterval(slider,30);
	});
    later();
}

function later(){
	$('.discipline').on({
		mouseover : function(){
			$('.replace').removeClass().addClass('change');
		},
		mouseout : function(){
			$('.change').removeClass().addClass('replace');
		}
	})
	Cool();
}

function Cool(){
	$('.reach-xian').css({'transform': 'scale(1)',opacity:1,width:'1322px',height:'600px',visibility: 'visible'})
	$('.reach-text h1').css({'transform': 'scale(1)'})
	$('.reach-text ul').css({'transform': 'scale(1)'})
	$('.reach-text a').css({'transform': 'scale(1)'})
	$('.reach-text p').css({'transform': 'scale(1)'})
	$('.banner-back').css({left:'-50%'})

	$(window).scroll(function(){
		if($(window).scrollTop()>400){
			$('.slide-1').animate({left:'0%',opacity:1},500);
			$('.slide-2').animate({left:'20%',opacity:1},1000);
			$('.slide-3').animate({left:'40%',opacity:1},1500);
			$('.slide-4').animate({left:'60%',opacity:1},2000);
			$('.slide-5').animate({left:'80%',opacity:1},2500);
		}
		if($(window).scrollTop()>1300){
			$('.through-text ul').css({'transform': 'scale(1)',opacity:1})
		}
		if($(window).scrollTop()>1700){
			$('.trousers ul').css({marginTop:'65px',})
		}
		if($(window).scrollTop()>3500){
			$('.Plug-1').css({marginTop:'0',opacity: 1})
		}
		if($(window).scrollTop()>3900){
			$('.Plug-2').css({marginTop:'0',opacity: 1})
		}
		if($(window).scrollTop()>4300){
			$('.Plug-3').css({marginTop:'0',opacity: 1})
		}
		if($(window).scrollTop()>4700){
			$('.Plug-4').css({marginTop:'0',opacity: 1})
		}
	})
	
}

$(window).scroll(function (){	
	var st = $(this).scrollTop();
	console.log(st);
});