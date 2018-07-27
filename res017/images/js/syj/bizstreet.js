$(document).ready(function(){
	ready();
})

function ready(){
	$('.boutiqueCenter li').on({
		mouseover : function(){
			$(this).find('.hiveImg').css({top:'-220px',transtion:'2s all'})
			$(this).find('.hive').css({top:'400px',opacity:1})
		},
		mouseout : function(){
			$(this).find('.hiveImg').css({top:0,transtion:'2s all'})
			$(this).find('.hive').css({top:'340px',opacity:1,transtion:'1s all'})
		}
	})
	link();
}

function link(){
		// $('.centerList li').click(function(){
		// 	   $(this).find('.lottery').addClass('convention').parent().siblings().children('.lottery').removeClass('convention')
		// 	   $(this).children('.tax').addClass('cpm').parent().siblings().children('.tax').removeClass('cpm');
		// })
	$('.centerList li').on({
		mouseover : function(){
			$(this).find('.lottery').addClass('convention').parent().siblings().children('.lottery').removeClass('convention')
			$(this).children('.tax').addClass('cpm').parent().siblings().children('.tax').removeClass('cpm');
		},
		mouseout : function(){
			$(this).find('.lottery').removeClass('convention');
			$(this).children('.tax').removeClass('cpm');
		}
	})
	Special();
}

function Special(){

	$('.top-head').css({top:0,opacity:0})
	$('.top-text').css({left:'30%',opacity:0})
	$('.top-right').css({left:'30%',opacity:0})
	$('.heaImg').css({backgroundSize:'100% 100%'});
	setTimeout(function(){
		$('.top-head').animate({top:'22%',opacity:1},1000)
		$('.top-text').animate({left:'50%',opacity:1},1000)
		$('.top-right').animate({left:"50%",opacity:1},1000)
	})

	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			$('.slide-1').animate({right:'0%',opacity:1},500);
			$('.slide-2').animate({right:'0%',opacity:1},1000);
			$('.slide-3').animate({right:'0%',opacity:1},1500);
			$('.slide-4').animate({right:'0%',opacity:1},2000);
			$('.slide-5').animate({right:'0%',opacity:1},2500);
		}
		if($(window).scrollTop()>1300){
			$('.lottery').css({left:'-70px'});
		}
		if($(window).scrollTop()>1500){
			$('.businessImg img').css('transform','scale(1)')
		}
		if($(window).scrollTop()>2800){
			$('.boutiqueCenter li').css('marginTop','0');
		}
		if($(window).scrollTop()>4200){
			$('.retreat-text p').css({top:'0'},500);
		}
	})
	
}
$(window).scroll(function (){	
	var st = $(this).scrollTop();
	
});