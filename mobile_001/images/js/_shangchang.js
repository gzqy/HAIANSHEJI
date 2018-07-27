 $(function(){
  /*banner of begining*/
  $('.bannblue').css({
    width: 0,
    height: 0,
    fontSize:0,
    opacity:0
  });
  setTimeout(function() {
    $('.bannblue').animate({
    width: '112px',
    height: '98px',

    },1000);
    $('.bannblue').animate({fontSize: '30.19px',opacity:1}, 1000);
  }, 100);

   $(document).scroll(function(){
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
      if($(this).scrollTop()>5900){
          $('.linianpbox p').css({
            left: '0',
          });
       }
       if($(this).scrollTop()>6500){
          $('.jianyanbox p').css({
            height: '480px',
          });
       }

});
 })
 $(function(){
  $('.boxbig').click(function(event){
    var _con = $(this);
    if(_con.is(event.target) && _con.has(event.target).length === 0)
    {
      $(this).hide();
    }
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

$(function(){
  $('.strentchlist li').not('.strentchli').hover(function(){
      $('.strentchlist li.strentchli').addClass('width100');
      $('.strentchlist li.strentchli').find('.barbar1').css("background","rgba(0,0,0,.5)");
       $('.strentchlist li.strentchli .barbar1').find('img').css('display', 'block');
        $('.strentchlist li.strentchli .barbar1').find('h3').css({
          top: '50%',
          left: '50%',
          transform:'translateX(-50%) translateY(-50%)',
          webkitTransform:'translateX(-50%) translateY(-50%)',
          mozTransform:'translateX(-50%) translateY(-50%)',
          msTransform:'translateX(-50%) translateY(-50%)',
          oTransform:'translateX(-50%) translateY(-50%)',
        });
  },function(){
    $('.strentchlist li.strentchli').removeClass('width100');
      $('.strentchlist li.strentchli').find('.barbar1').css("background","rgba(0,0,0,0)");
       $('.strentchlist li.strentchli .barbar1').find('img').css('display', 'none');
       $('.strentchlist li.strentchli .barbar1').find('h3').css({
          top: '100%',
          left: '100%',
          transform:'translateX(-150%) translateY(-102%)',
          webkitTransform:'translateX(-150%) translateY(-102%)',
          mozTransform:'translateX(-150%) translateY(-102%)',
          msTransform:'translateX(-150%) translateY(-102%)',
          oTransform:'translateX(-150%) translateY(-102%)',
        });
  });
});
/*滑动到*/
$(function(){
  $('.avegent>p').hide();
  $('.avegcenter>img').not('.centeravg').addClass('aligncenter').css({
    width: '0',
    height: '0'
  });
  $('.avegent>div').not('.avegcenter').addClass('aligncenter').css({
    width: '0',
    height: '0'
  });
  $('.avegent>hr').css('width',0);
  $(document).scroll(function(event) {
    /* Act on the event */
    $this=$(this);
    var qval=$('.avegent').css('width');
    var subint=parseInt(qval.substr(0,(qval.length-2)));
    var subhr=Math.floor(subint*38.8/100);
    if($this.scrollTop()>2000){
      $('.avegent>hr').animate({
        width: subhr+"px"},
        1000, function() {
        /* stuff to do after animation is complete */
          $('.avegcenter>img').not('.centeravg')
          .css({
            width: '82px',
            height: '82px'
          })
          .removeClass('aligncenter');
          setTimeout(function() {
            $('.avegent>div').not('.avegcenter').css({
              width: '216px',
              height: '216px'
            }).removeClass('aligncenter');
            setTimeout(function() {
              $('.avegent>p').slideDown('slow');
            }, 1000);
          }, 1000);
      });
    }
  });
 
})
// 提交信息表单背景样式变化
$(function(){
	$('.focuschange').focus(function() {
		$(this).css({
        	borderBottom: '1px solid #adadad',
        	backgroundColor: '#333333',
       });
     });
	$('.focuschange').blur(function() {
		$(this).css({
        	borderBottom: '1px solid #757575',
        	backgroundColor: '#393939',
       });
     });
});
// 友情链接、热门城市选项卡切换
$(function(){
	$('.frienttitlebox li').click(function() {
			$(this).addClass('onfocuslinktitle').siblings().removeClass('onfocuslinktitle');
			$('.footertopcontentbox').eq($(this).index()).removeClass('disnone').siblings('.footertopcontentbox').addClass('disnone');
	});
});

//关于我们部分获取P高度
$(function(){
  var aboutindex=0;
   $('.aboutlfbtn').click(function(){
        var arr=lfabout(aboutindex,true);
          aboutindex=arr[0];
          nextindex=arr[1];
          lastindex=arr[2];
          $('.aboutinn').eq(aboutindex).css({zIndex: 2,opacity:1});
          $('.aboutinn').eq(nextindex).css({opacity:0});

          $('.aboutinn').eq(lastindex).animate({
            left:'-100%'},
            1000, function() {
                $('.aboutinn').eq(aboutindex).css({zIndex: 3,opacity:1});
                $('.aboutinn').eq(lastindex).css({
                  zIndex:2,
                  left: 0,
                  opacity: 1
                });
          });
          

   });
   $('.aboutrgtbtn').click(function(){

       var arr=lfabout(aboutindex,false);
          aboutindex=arr[0];
          nextindex=arr[1];
          lastindex=arr[2];
        
          $('.aboutinn').eq(aboutindex).css({zIndex: 2,opacity:1});
          $('.aboutinn').eq(nextindex).css({opacity:0});
          $('.aboutinn').eq(lastindex).animate({
            left:'100%'},
            1000, function() {
              $('.aboutinn').eq(aboutindex).css({zIndex: 3,opacity:1});
                $('.aboutinn').eq(lastindex).css({
                  zIndex:2,
                  left: 0,
                  opacity: 1
                });
          });
             
        
   });

  function lfabout(index,lf){
    if(lf){
       if(index==0){
          return new Array(2,1,0);
        }else if(index==1){
          return new Array(0,2,1);
        }else if(index==2){
          return new Array(1,0,2);
        }
    }else{
       if(index==0){
          return new Array(1,2,0);
        }else if(index==1){
          return new Array(2,0,1);
        }else if(index==2){
          return new Array(0,1,2);
        }
    }
  }
});

//点击商业综合体切换
$(function(){
  var clai=0;
  var _picCurrentIndex=0;
  var _picPreIndex=-1;
  // var _piccount;
  var _automove;
  _clalen=$('.shangchangcasepic ul li').length;
  $('.shangchangchangebtnleft').click(function(){
    clearInterval(_automove);
    $('.shangchangcasepic ul li').eq(clai).fadeOut(1000);
    clai--;
    if(clai<0){
      clai=_clalen-1;
      $('.shangchangcasepic ul li').eq(clai).fadeIn(1000);
    }else{
      $('.shangchangcasepic ul li').eq(clai).fadeIn(1000);     
    }
  },function(){
    _automove=setInterval(movenext,2000);
  });
  $('.shangchangchangebtnright').click(function(){
    clearInterval(_automove);
    $('.shangchangcasepic ul li').eq(clai).fadeOut(1000);
    clai++;
    if(clai==_clalen){
      clai=0;
      $('.shangchangcasepic ul li').eq(clai).fadeIn(1000);
    }else{
      $('.shangchangcasepic ul li').eq(clai).fadeIn(1000);
    }
        
  },function(){
    _automove=setInterval(movenext,2000);
  });
  _automove=setInterval(movenext,2000);
  /**
  该函数用于图片轮换效果的切换
  **/
  function movenext(_index){
      var _index=(_picCurrentIndex+1)%_clalen;
      _picPreIndex=_picCurrentIndex;
      _picCurrentIndex=_index;
      $('.shangchangcasepic ul li').eq(_picCurrentIndex).fadeIn(1000);
      $('.shangchangcasepic ul li').eq(_picPreIndex).fadeOut(1000);
  }
})

//点击切换轮播图 
$(function(){
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
});

/*footer导航按钮*/
$(function(){
  $('ul.footul>li').click(function(event) {
    /* Act on the event */
      $this=$(this);
      var liin=$(this).index('ul.footul>li');
       $this.css({background: 'none',color:'#fff'}).siblings('li').css({backgroundColor:'#efefef',color:'#232323'});
       $(".footer>.menuul").eq(liin).removeClass('clsply').siblings('ul.menuul').addClass('clsply');
  });
});
// 禁止右键及复制
$(function(){
  document.oncontextmenu=new Function("event.returnValue=false"); 
  document.onselectstart=new Function("event.returnValue=false"); 
});