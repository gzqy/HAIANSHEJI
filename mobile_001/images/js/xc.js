// 乡村振兴规划体系四块交互
$(function(){
  $(".xcsystemcenter li").hover(function() {
      $(".sysshuhr").css({opacity: '0'});
      $(".systophr").css({opacity: '0'});
      $(".sysbothr").css({opacity: '0'});
      var num=$(this).index();
      // alert(num);
      $(".systophr").eq(num).css({opacity: '1'});
      $(".sysshuhr").eq(num).prev(".sysshuhr").css({opacity: '1'});
      $(".sysshuhr").eq(num).css({opacity: '1'});
      $(".sysbothr").eq(num).prev(".sysbothr").css({opacity: '1'});
      $(".sysbothr").eq(num).next(".sysbothr").css({opacity: '1'});
  });
});
// 案例展示1效果
$(function(){
	(function(){
        var $left = $('#leftfirst');
        var $right = $('#rightfirst');
        var $li = $('#picfirst li');
        var $tabLi = $('#tabfirst li');
        var $tabPlaceLi = $('#tabplace li');
        var index = 0;

        // 补充交互
        // $("#picfirst").hover(function() {
        //   $("#tabplace").addClass('opacity1');
        // }, function() {
        //   $("#tabplace").removeClass('opacity1');
        // });
        $("#tabplace").hover(function() {
          $("#tabplace").addClass('opacity1');
        }, function() {
          $("#tabplace").removeClass('opacity1');
        });


        $li.append('<span></span>');
        $('#picfirst li span').eq(0).css('display' , 'none');
        
        var arrW=[],arrH=[],arrL=[],arrT=[],arrZ=[],arrS=[],arrO=[];
        var nowTime = 0;
        $right.click(function(){
          if ( new Date() - nowTime > 500 )
          {
            nowTime = new Date();
            index ++;
            index %= $li.length;
            $tabLi.eq(index).addClass('on').siblings().removeClass('on');
            $tabPlaceLi.eq(index).addClass('on').siblings().removeClass('on');
            fn( $(this).index() );
          }
          
        });

        $left.click(function(){
          if ( new Date() - nowTime > 500 )
          {
            nowTime = new Date();
            index --;
            if(index<0)index=$li.length-1;
            $tabLi.eq(index).addClass('on').siblings().removeClass('on');
            $tabPlaceLi.eq(index).addClass('on').siblings().removeClass('on');
            fn( $(this).index() );
          }
        });

        $tabLi.click(function(){
          $(this).addClass('on').siblings().removeClass('on');
          var nowIndex = $(this).index();
          var x = nowIndex - index;
          if ( x == 1 || x == -($li.length-1) )
          {
            fn( true );
            index = nowIndex;
          }
          else if ( x == -1 || x == $li.length-1 )
          {
            fn( false );
            index = nowIndex;
          }
          else if ( nowIndex != index )
          {
            $li.each(function(i){
              arrW[i] = $(this).css('width');
              arrH[i] = $(this).css('height');
              arrL[i] = $(this).css('left');
              arrT[i] = $(this).css('top');
              arrZ[i] = $(this).css('zIndex');
              arrS[i] = $(this).find('span').css('display');
              arrO[i] = $(this).css('opacity');
            });
            $li.each(function(i){
              $(this).animate({
                width : 0,
                height : 0,
                opacity : 0,
                left : '485px',
                top : '135px'
              },300);
            });
            setTimeout(function(){
              $li.each(function(i){
                var a = i - (nowIndex - index);
                if(a<0)a+=$li.length;
                if(a>=$li.length)a-=10;
                $(this).find('span').css('display' , arrS[a]);
                $(this).css('zIndex' , arrZ[a]).animate({
                  width : arrW[a],
                  height : arrH[a],
                  left : arrL[a],
                  top : arrT[a],
                  opacity : arrO[a]
                },500);
              });
              index = nowIndex;
            },300);
          }

          
        });

        function fn( x ){
          $li.each(function(i){
            arrW[i] = $(this).css('width');
            arrH[i] = $(this).css('height');
            arrL[i] = $(this).css('left');
            arrT[i] = $(this).css('top');
            arrZ[i] = $(this).css('zIndex');
            arrS[i] = $(this).find('span').css('display');
            arrO[i] = $(this).css('opacity');
          });
          $li.each(function(i){
            if ( x )
            {
              var a = i-1;
              if(a<0)a=$li.length-1;
            }
            else
            {
              var a = i+1;
              if(a==$li.length)a=0;
            }
            
            $(this).find('span').css('display' , arrS[a]);
            $(this).css('zIndex' , arrZ[a]).animate({
              width : arrW[a],
              height : arrH[a],
              left : arrL[a],
              top : arrT[a],
              opacity : arrO[a]
            },500);
          });
        }


      })();
});
//乡村振兴的解决办法
$(function(){
  $(".solulibtn").hover(function() {
      $(this).parent().find('.soluonp').css({
        left: '-40%'
      });
      $(this).parent().find('span').css({
        left: '-60%'
      }); 
      $(this).parent().find('.soludownp').css({
        color: '#fff'
      });
      $(this).parent().css({
        backgroundColor: '#3bc551'
      });
  },function(){
       $(this).parent().find('.soluonp').css({
        left: '50%'
      });
      $(this).parent().find('span').css({
        left: '0'
      }); 
      $(this).parent().find('.soludownp').css({
        color: '#ececec'
      });
      $(this).parent().css({
        backgroundColor: '#ececec'
      });
  });
});
$( document ).ready(function() { 
    var boot= $('.downtable');
   var bootwen=$('.downtbctn');
   var lforder=$('#lforder');
   var bclose=$('.close0');
    /*底部关闭按钮的设置*/
    bclose.bind('click',function(){
      /*boot.animate({*/
        boot.css("width","30px").css('transition','0s all').css('border-radius','0 10px 0 0');
      /*},500,"swing",function(){*/
        bootwen.hide();
        bclose.hide();
        lforder.addClass('order');
        
    });

  lforder.bind('click',function(){
    lforder.removeClass('order');
    bootwen.show();
      boot.css('width','100%').css('transition','.5s all').css('border-radius','0');
        bclose.show(); 
      
  });
  });
//当屏幕滚动到第二屏，缓慢出现
$(function(){  
    // var flag=true;
    $(window).scroll(function(){
             if($(window).scrollTop() <=280){  
                     
                     $(".downtable").slideUp(200);          
                                                            
             }else{                                        
                    
                     $(".downtable").slideDown(400);                                      
                                    
             }  
    });  
 });
// 案例展示2效果
$(function(){
	(function(){
        var $left = $('#left');
        var $right = $('#right');
        var $li = $('#pic li');
        var $tabLi = $('#tab li');
        var index = 0;

        $li.append('<span></span>');
        $('#pic li span').eq(0).css('display' , 'none');
        
        var arrW=[],arrH=[],arrL=[],arrT=[],arrZ=[],arrS=[],arrO=[];
        var nowTime = 0;
        $right.click(function(){
          if ( new Date() - nowTime > 500 )
          {
            nowTime = new Date();
            index ++;
            index %= $li.length;
            $tabLi.eq(index).addClass('on').siblings().removeClass('on');
            fn( $(this).index() );
          }
          
        });

        $left.click(function(){
          if ( new Date() - nowTime > 500 )
          {
            nowTime = new Date();
            index --;
            if(index<0)index=$li.length-1;
            $tabLi.eq(index).addClass('on').siblings().removeClass('on');
            fn( $(this).index() );
          }
        });

        $tabLi.click(function(){
          $(this).addClass('on').siblings().removeClass('on');
          var nowIndex = $(this).index();
          var x = nowIndex - index;
          if ( x == 1 || x == -($li.length-1) )
          {
            fn( true );
            index = nowIndex;
          }
          else if ( x == -1 || x == $li.length-1 )
          {
            fn( false );
            index = nowIndex;
          }
          else if ( nowIndex != index )
          {
            $li.each(function(i){
              arrW[i] = $(this).css('width');
              arrH[i] = $(this).css('height');
              arrL[i] = $(this).css('left');
              arrT[i] = $(this).css('top');
              arrZ[i] = $(this).css('zIndex');
              arrS[i] = $(this).find('span').css('display');
              arrO[i] = $(this).css('opacity');
            });
            $li.each(function(i){
              $(this).animate({
                width : 0,
                height : 0,
                opacity : 0,
                left : '485px',
                top : '135px'
              },300);
            });
            setTimeout(function(){
              $li.each(function(i){
                var a = i - (nowIndex - index);
                if(a<0)a+=$li.length;
                if(a>=$li.length)a-=10;
                $(this).find('span').css('display' , arrS[a]);
                $(this).css('zIndex' , arrZ[a]).animate({
                  width : arrW[a],
                  height : arrH[a],
                  left : arrL[a],
                  top : arrT[a],
                  opacity : arrO[a]
                },500);
              });
              index = nowIndex;
            },300);
          }

          
        });

        function fn( x ){
          $li.each(function(i){
            arrW[i] = $(this).css('width');
            arrH[i] = $(this).css('height');
            arrL[i] = $(this).css('left');
            arrT[i] = $(this).css('top');
            arrZ[i] = $(this).css('zIndex');
            arrS[i] = $(this).find('span').css('display');
            arrO[i] = $(this).css('opacity');
          });
          $li.each(function(i){
            if ( x )
            {
              var a = i-1;
              if(a<0)a=$li.length-1;
            }
            else
            {
              var a = i+1;
              if(a==$li.length)a=0;
            }
            
            $(this).find('span').css('display' , arrS[a]);
            $(this).css('zIndex' , arrZ[a]).animate({
              width : arrW[a],
              height : arrH[a],
              left : arrL[a],
              top : arrT[a],
              opacity : arrO[a]
            },500);
          });
        }


      })();
});
// banner效果
$(function(){
	$('.banntit').css({
		top: '105px',
		opacity: 0
	});
	$('.banntit>p').css({
		bottom: '0px',
		opacity: 0
	});
	$('.bannblue').css({
		top: '318px',
		opacity: 0
	});
	$('.bannp>p').eq(0).css({
		left: '-255px',
		opacity: 0
	});
	$('.bannp>p').eq(1).css({
		right: '-255px',
		opacity: 0
	});
	$('.bannp>hr').css({
		opacity: 0
	});
	setTimeout(function() {
		$('.banntit').animate({
		top: '184px',
		opacity: 1
	},500,function(){
		$('.banntit>p').animate({
			bottom: '8px',
			opacity: 1
		},500,function(){
			$('.bannblue').animate({
				top: '417px',
				opacity:1
			},1000,function(){
				$('.bannp>p').eq(0).animate({
					left: '138px',
					opacity: 1
				},1000);
				$('.bannp>p').eq(1).animate({
					right: '82px',
					opacity: 1
				},1000);
				setTimeout(function() {
					$('.bannp>hr').animate({
						opacity: 1
					},1000);
				}, 1000);
			});
		});
	});
	}, 300);
});
// 海岸服务图标效果
$(function(){
			$(".cont2ulbox li").hover(function(){
				$(this).addClass('cont2ulboxlibg');
				$(this).find('img').css({'opacity':'1','transform':'scale(0.9)','margin-top':'20px'});
				$(this).find('em').css({'margin-top':'-15px','color':'#e9e9e9'});
				$(this).find('span').css({'display':'block','color':'#e9e9e9'});
			},function(){
				$(this).find('img').css({'opacity':'0','transform':'scale(1)','margin-top':'40px'});
				$(this).find('em').css({'margin-top':'0px','color':'#363636'});
				$(this).find('span').css({'display':'none','color':'#363636'});
				$(this).removeClass('cont2ulboxlibg');
			});
		});
/*footer导航按钮*/
$(function(){
  $('div.footleft>em').click(function(event) {
    /* Act on the event */
      $this=$(this);
      var liin=$(this).index('div.footleft>em'); 
       $this.css({backgroundColor:'#07a757',color:'#fff'}).siblings('em').css({background:'none',color:'#fff'});
       $this.css('text-align','center');
       $(" .alinkbox").eq(liin).removeClass('clsply').siblings('ul.alinkbox').addClass('clsply');
  });
});
