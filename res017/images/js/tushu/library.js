$(document).ready(function(){
    implement();
})

function implement(){

      $('#cos').find('.dbx').css('background-image',"url(http://www.haianzhuangshi.com/templates/res017/images/img/tushu/dbx.jpg)");


    $('.vide-text').on({

        mouseover : function(){
            $(this).find('.vide-yuan').css('border','1px solid #f5a43c');
            $(this).find('p').css('color','#f5a43c');
            $('#cos').find('.dbx').css('background-image','none');
            $('.vide-text').find('.dbx').css('background-image','none');
            $(this).find('.dbx').css('background-image',"url(http://www.haianzhuangshi.com/templates/res017/images/img/tushu/dbx.jpg)");
            
            

        },
        mouseout : function(){
            $(this).find('.vide-yuan').css('border','1px solid #dddddd');
            $(this).find('p').css('color','black');
           

        }
    })
    $('.vide-text').mouseover(function(){
        var _index = $(this).index();
        $('.join .metro').eq(_index).show().siblings().hide();
        $(this).find('.textss').removeClass().addClass('textss-1');
        $(this).find('.rest').removeClass().addClass('rest-1');
        $(this).find('.Season').removeClass().addClass('Season-1');
    })
    $('.vide-text').mouseout(function(){
        $(this).find('.textss-1').removeClass().addClass('textss');
        $(this).find('.rest-1').removeClass().addClass('rest');
        $(this).find('.Season-1').removeClass().addClass('Season');
    })
    inline();
}

function inline(){
    $('.headtext p').css({top:'-200px',opacity:0})
    $('.Surround').css({top:'200px',opacity:0})
    $('.headtext ul').css({transform:'scale(1)'})
    $('.typeTitle').css({transform:'scale(1)'})
    $('.headimg').css({backgroundSize:'100% 100%'})
    setTimeout(function(){
        $('.headtext p').animate({
            top:0,
            opacity:1
        },1000)
        $('.Surround').animate({
            top:0,opacity:1
        },1000)
        $('.headtext ul').animate({
            transform:'scale(1)'
        },1000)
    })

    
	$(window).scroll(function(){
		if($(window).scrollTop()>200){
			$('.slide-1').animate({left:'0%',opacity:1},500);
			$('.slide-2').animate({left:'0%',opacity:1},1000);
			$('.slide-3').animate({left:'0%',opacity:1},1500);
			$('.slide-4').animate({left:'0%',opacity:1},2000);
			$('.slide-5').animate({left:'0%',opacity:1},2500);
        }
        if($(window).scrollTop()>1600){
            $('.search').css({left:'0',opacity:1});
            $('.search-1').css({left:'0',opacity:1});
        }
        if($(window).scrollTop()>2400){
            $('.droid').css({top:'0',opacity:1})
            $('.example').css({top:'0',left:'0',opacity:1})
            $('.scar').css({transform:'scale(1)'})
        }
        if($(window).scrollTop()>3300){
            $('.Cheerful').css({transform:'scale(1)'})
        }
        if($(window).scrollTop()>3500){
            $('.Respond').css({transform:'scale(1)'})
        }
        if($(window).scrollTop()>4000){
            $('.foam').css({transform:'scale(1)'})
        }
        
        if($(window).scrollTop()>5500){
            $('.retreat-text p').css({top:'0'})
        }
	})
}

$(window).scroll(function (){	
	var st = $(this).scrollTop();
	
});