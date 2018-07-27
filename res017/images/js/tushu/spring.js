$(document).ready(function(){
    implement();
})

function implement(){
    vacation();
}
function vacation(){
    $('.top-1').on({
        mouseover : function(){
            $('.lost').css({top:'-18%',width:'130px',height:'300px',flexWrap:'wrap'})
            $('.lost b').css({borderBottom:'1px solid #fff',borderRight:'none'})
        },
        mouseout : function(){
            // $('.preparation').removeClass();
        }
    })
    $('.chart').mouseover(function(){
        var _index = $(this).index();
        $('.college img').eq(_index).show().siblings().hide();
    })
    $('.top-1').on({
        mouseover : function(){
            $(this).find('.mask').css('opacity','0');
            $(this).find('.mask-1').css('opacity','0');
            $(this).find('.concise').removeClass().addClass('fall');
        },
        mouseout : function(){
            $(this).find('.mask').css('opacity','0.5');
            $(this).find('.mask-1').css('opacity','0.5');
            $(this).find('.fall').removeClass().addClass('concise');
        }
    })
  cool();
}
function cool(){
    // $('.banner-header').css({'transform':'rotateY(360deg)',opacity:1});
    $('.banner-header').css({'backgroundSize':'100% 100%',opacity:1});
    $('.header-img p').css({
        opacity:0,
        transform:'scale(1)'
    })
    setTimeout(function(){
        $('.header-img p').animate({
            opacity:1,
            transform:'scale(1)'
        })
        $('.headerbox p img').animate({
            opacity:1,
            left:'17%'
        })
        $('.Sincerely').animate({
            opacity:1,
            left:'17%'
        })
        $('.user').animate({
            opacity:1,
            top:'500px'
        })
    })
    // $('.header-img p').css({'transform':'rotateY(360deg)','left':'10px'});
    // $('.headerbox p img').css({'transform':'rotateX(360deg)'});
    $(window).scroll(function(){
        if($(window).scrollTop()>800){
            $('.living').css({top:'0',left:'0',opacity: 1});
            $('.living-1').css({top:'0',left:'0',opacity: 1});
            $('.living-2').css({top:'0',left:'0',opacity: 1});
            $('.living-3').css({top:'0',left:'0',opacity: 1});
        }
        if($(window).scrollTop()>4100){
			$('.Plug-1').css({marginTop:'0',opacity: 1})
		}
		if($(window).scrollTop()>4500){
			$('.Plug-2').css({marginTop:'0',opacity: 1})
		}
		if($(window).scrollTop()>4900){
			$('.Plug-3').css({marginTop:'0',opacity: 1})
		}
		if($(window).scrollTop()>5300){
			$('.Plug-4').css({marginTop:'0',opacity: 1})
        }
        if($(window).scrollTop()>6100){
            $('.just').css({'transform':'scale(1.1)'})
        }
        
        // if($(window).scrollTop()>4100){
		// 	$('.Plug-1').css({marginTop:'0',opacity: 1})
		// }else if($(window).scrollTop()>4500){
        //     alert();
        //     $('.Plug-2').css({marginTop:'0',opacity: 1})
        // }else if($(window).scrollTop()>4900){
        //     $('.Plug-3').css({marginTop:'0',opacity: 1})
        // }else if($(window).scrollTop()>5300){
        //     $('.Plug-4').css({marginTop:'0',opacity: 1})
        // }
    })
}

$(window).scroll(function (){	
	var st = $(this).scrollTop();
	console.log(st);
});