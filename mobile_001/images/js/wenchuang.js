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
            top: '0',
            left: '0',
            transform:'translateX(25%) translateY(25%)',
            webkitTransform:'translateX(25%) translateY(25%)',
            mozTransform:'translateX(25%) translateY(25%)',
            msTransform:'translateX(25%) translateY(25%)',
            oTransform:'translateX(25%) translateY(25%)',
        });
  });
});
/*banner 动效*/
$(function(){
  $('.banntit').css({top:'130px',opacity:0});
  $('.banntit>p').css({bottom:'-2px',opacity:0});
  $('.bannpp').css({top:'254px',opacity:0});
  $('.bannblue').css({top:'468px',opacity:0});
  $('.banntit').animate({top: '183px', opacity: 1}, 800,function(){
    $('.banntit>p').animate({
      bottom: '6px',
      opacity: 1},
      800);
    $('.bannpp').animate({top:'388px',opacity:1},800,function(){
      $('.bannblue').animate({top:'468px',opacity:1},800);
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
// $(function(){
//   $('.ordern_x').click(function(){
//     var screenH=$(window).height();
//     $(document).scrollTop(screenH);
//   })
// })
/*圆hover变红*/
$(function(){
  $(".walkcir").hover(function(){
    $this=$(this);
    $this.find('p').css({color:'#fff'});
    $this.find('p>span').css({opacity:1});
    $this.find('i').css({color:'#fff'});
    // $this.find("p").css('top')
  },function(){
    $this.find('p').css({color:'#242424'});
    $this.find('p>span').css({opacity:0});
    $this.find('i').css({color:'#26beaa'});
  });
});

//第二大板块dl/em变化
$(function(){
  var c2liemtop=$(".c3lidowncent em").css("height");
  var c2liemtopnum=c2liemtop.substr(0,c2liemtop.length-2);
  $(".chain3 li").hover(function() {
    $(this).children('.c3lidowncent').css('bottom', "0px");
    $(this).children('.c3lidowncenta').css('display', "block");
  },function(){
    $(this).children('.c3lidowncent').css('bottom', -c2liemtopnum+"px"); 
    $(this).children('.c3lidowncenta').css('display', "none");
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
           $('.aboutinn').eq(nextindex).stop(true,true).animate();
         $('.aboutinn').eq(lastindex).stop(true,true).animate();
          $('.aboutinn').eq(aboutindex).css('zIndex', '2');
          $('.aboutinn').eq(nextindex).css('zIndex', '1');
          $('.aboutinn').eq(lastindex).animate({
            left: '100%'},
            1000, function() {
              $('.aboutinn').eq(aboutindex).css('zIndex', '3');
              $('.aboutinn').eq(lastindex).css({
                zIndex: 1,
                left: 0
              });
              $('.aboutinn').eq(nextindex).css('zIndex', '2');
          });

   });
   $('.aboutrgtbtn').click(function(){

       var arr=lfabout(aboutindex,false);
          aboutindex=arr[0];
          nextindex=arr[1];
          lastindex=arr[2];
        $('.aboutinn').eq(nextindex).stop(true,true).animate();
         $('.aboutinn').eq(lastindex).stop(true,true).animate();
          $('.aboutinn').eq(aboutindex).css('zIndex', '2');
          $('.aboutinn').eq(nextindex).css('zIndex', '1');
          $('.aboutinn').eq(lastindex).animate({
            left: '100%'},
            1000, function() {
              $('.aboutinn').eq(aboutindex).css('zIndex', '3');
              $('.aboutinn').eq(lastindex).css({
                zIndex: 1,
                left: 0
              });
              $('.aboutinn').eq(nextindex).css('zIndex', '2');
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

/*文创园五大类型切换*/
$(function(){
  var fiveindex=0;
  var fivemax=4;
  $('.fivenextbtn').click(function() {
    // alert(".fivconttxtcont li".length);
      fiveindex++;
      if(fiveindex>fivemax){
        fiveindex=0;
      }
      $(".fivconttxtcont li").eq(fiveindex).show().siblings(".fivconttxtcont li").hide();
      $(".fivcontpiccont li").eq(fiveindex).show().siblings(".fivcontpiccont li").hide();
  });
});

/*咖啡动态*/
$(function(){
  var qunextbtnlj = "../templates/res017/images/"
  var coffindex=0;
  var cofflen=$('.catcoffrgt').length;
  $('.qprebtn').click(function(){
    $this=$(this);
    // $this.css('backgroundColor','rgba(37,37,37,1)');
    // $('.qnextbtn').css('backgroundColor','rgba(37,37,37,.5)');
    coffindex--;
    if(coffindex<0){
      coffindex=cofflen-1;
    }
    $('.catcoffimg').attr({
      src: qunextbtnlj+'wenchuang/isoftware'+(coffindex+1)+'.jpg'
    });
    $('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
  });
  $('.qnextbtn').click(function(){
    $this=$(this);
    // $this.css('backgroundColor','rgba(37,37,37,1)');
    // $('.qprebtn').css('backgroundColor','rgba(37,37,37,.5)');
    coffindex++;
    if(coffindex==cofflen){
      coffindex=0;
    }
    $('.catcoffimg').attr({
      src: qunextbtnlj+'wenchuang/isoftware'+(coffindex+1)+'.jpg'
    });
    $('.catcoffrgt').eq(coffindex).removeClass('clsplay').siblings('.catcoffrgt').addClass('clsplay');
  });

});

//按钮部分
$(function(){
  $(document).scroll(function(event) {
    if($(this).scrollTop()>3500){
      // alert("arba");
      $(".hrtopright").animate({width:'0px'}, 800);
      $(".hrdownleft").animate({width:'0px'}, 800);
      setTimeout(function() {
        $(".hrright").animate({height:'0px'}, 400);
        $(".hrleft").animate({height:'0px'}, 400);
        setTimeout(function() {
          $(".hrdownright").animate({width:'0px'}, 700);
          $(".hrtopleft").animate({width:'0px'}, 700);
        }, 400);
      }, 700);
    }
  });

});

/*footer导航按钮*/
$(function(){
  $('ul.footul>li').click(function(event) {
    /* Act on the event */
      $this=$(this);
      var liin=$(this).index('ul.footul>li');
       $this.css({background: '#5353537d',color:'#d0caca'}).siblings('li').css({backgroundColor:'#181818',color:'#969696'});
       $(".footertop>.menuul").eq(liin).removeClass('clsply').siblings('ul.menuul').addClass('clsply');
  });
});
// 禁止右键及复制
$(function(){
  document.oncontextmenu=new Function("event.returnValue=false"); 
  document.onselectstart=new Function("event.returnValue=false"); 
});