$('body').removeClass('met-navfixed');
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
/*轮播*/
$(function(){
	var _picCurrentIndex=0;
	var _picPreIndex=-1;
	var _piccount;//获取总长度(个数)
	var _automove;//图片自动切换效果方法封装
	//实现图片轮换的初始状态，第一张图片显示，其他图片隐藏
	_piccount=$('.aboutcont>li').length;
	$('.aboutcont>li').hide().eq(_picCurrentIndex).show();
	
	$('.aboutguopagebtnbox>span').hover(function(){
		clearInterval(_automove);
		$('.aboutguopagebtnbox>span.pageonfocus').removeClass('pageonfocus');
		$(this).addClass('pageonfocus');
		var _index=$('.aboutguopagebtnbox>span').index($(this));
		if(_index==_picCurrentIndex) return false;
		movenext(_index);
	},function(){
		_automove=setInterval(automove,10000);
	});
	
	//实现图片轮换的初始状态，第一张图片显示，其他图片隐藏
	_piccount=$('.aboutcont>li').length;
	$('.aboutcont>li').hide();
	$('.aboutcont>li').eq(_picCurrentIndex).show();
	//第二个功能
	$('.aboutguopagebtnbox>span').hover(function(){
		clearInterval(_automove);
		$('.aboutguopagebtnbox>span.pageonfocus').removeClass('pageonfocus');
		$(this).addClass('pageonfocus');
		var _index=$('.aboutguopagebtnbox>span').index($(this));
		if(_index==_picCurrentIndex) return false;
		movenext(_index);
	},function(){
		_automove=setInterval(automove,10000);
	});

	/**
	图片自动切换效果
	**/
	_automove=setInterval(automove,10000);
	function automove(){
		var _index=(_picCurrentIndex+1)%_piccount;
		$('.aboutguopagebtnbox>span.pageonfocus').removeClass('pageonfocus');
		$('.aboutguopagebtnbox>span').eq(_index).addClass('pageonfocus');
		 movenext(_index);
	}
	/**
	该函数用于图片轮换效果的切换
	**/
	function movenext(_index){
		
		_picPreIndex=_picCurrentIndex;
		_picCurrentIndex=_index;
		$('.aboutcont>li').eq(_picCurrentIndex).fadeIn(700);
		$('.aboutcont>li').eq(_picPreIndex).fadeOut(700);

	}
});

// 提交信息表单背景样式变化
$(function(){
	$('.qb1025 li').hover(function() {
		var a= $(this).index();
		$(".positionaboul li").eq(a).addClass('turnbg');
	}, function() {
		var a= $(this).index();
		$(".positionaboul li").eq(a).removeClass('turnbg');
	});
});

// 项目案例点击对应切换
$(".projectcasetit dt.sy_column_3").eq(0).css('margin-left','276px');
var a_id = 145;
var class3Id;
var send_data = {class2_id:a_id};
ajax_send(send_data);
$(function(){
	$('.projectcasetit dt a').bind('mouseover',function(){
		var b = $(this).parent().index();
		a_id  = $(this).attr('data_id');
		$(this).css('color','#010101').parent().siblings('dt').children().css('color','#76838f');
		$(this).parent().css({transition:'.3s all',border:'1px solid #010101'}).siblings('dt').css('border','1px solid #aeaeae');
		if(typeof($(this).attr('data_pa')) != "undefined"){
			class3Id = $(this).attr('data_id');
			// console.log(class3Id);
			send_data = {class3_id:class3Id};
			ajax_send(send_data);
		}else{
			send_data = {class2_id:a_id};
			ajax_send(send_data);
		}
	});
});
function ajax_send(data){
	$.ajax({
		type:"POST",
		url :"../ajax/home_index.php",
		data:data,
		success:function(data){
			// console.log(data);
			$('.projectcasecont').empty();
			var num = 0;
			$.each(data,function(i,n){
				if(num > 7) return;
				var li_clone = $('#li_clone').clone(); 
				var img 	 = (li_clone.children().eq(0)).children();
				var span_cnt = (li_clone.children().eq(1)).children().eq(0);
				var a_link 	 = (li_clone.children().eq(1)).children().eq(1);
				img.attr({'src':n.imgurl,'title':n.title,'alt':'北京海岸设计-' + n.title});
				span_cnt.html(n.title);
				a_link.attr('href','http://www.haianzhuangshi.com/product/' + n.id + '-cn.html');
				a_link.attr('target','_blank');
				li_clone.fadeIn(600);
				li_clone.removeAttr('id');
				$('.projectcasecont').append(li_clone);
				num++;
				// console.log(num);
			});
		},
		error  :function(data){
			console.log(data);
		},
		beforeSend:function(){
			console.log('start');
		},
		dataType:"json"
	});
}

/*合作客户点击轮换效果*/
$(function(){
	var _ul=$(".designer-over ul");
	var _ulLi=$(".designer-over ul li");

	_ul.css("width",_ulLi.length*352+'px');
	// _ulLi.eq(1).find(".designer-img").addClass("designeractive"); 
	$("#_deleft").click(function(){
		var _newulLi=$(".designer-over ul li");
		var lastItem = _newulLi.last();		        
		$(".designer-over").find('ul').prepend(lastItem);
		_ul.css("left","-352px");
		_ul.stop().animate({left:0},0,function(){	
											
		});  
	})
	$("#_deright").click(function(){
		var _newulLi=$(".designer-over ul li");
		_ul.stop().animate({left:-352},0,function(){
			 var firstItem = _newulLi.first();
			 $(this).css("left","0px");
			 $(".designer-over").find('ul').append(firstItem);
		});  
	});
});

// 海岸动态变化线
$(function(){
	$('.tem_index_news_list dd').hover(function(){
		$(this).find('hr').eq(0).stop(true,true).animate({width:380},500);
	},function(){
		$(this).find('hr').eq(0).stop(true,true).animate({width:10},500);
	});
});

// 海岸动态点击轮播
$(function(){
	var scroll_width = $('div.tem_inner').width();
	// console.log(scroll_width);
	$('ul.tem_index_news_list').css('width',scroll_width);
	$('.tem_index_news_tab li').bind('click',function(){
		var index = $(this).index();
		$(this).children('h3').css({backgroundColor:"#8c989f",color:"#fff"}).parent().siblings().children('h3').css({backgroundColor:"#f5f5f5",color:"#444"});
		if(index>0){
			// alert(131315);
			$(this).parent().next().find('.slides').css({'transform':'translate3d('+ (- scroll_width * index) +'px, 0px, 0px)','transition':'.5s all'});
		}else{
				$(this).parent().next().find('.slides').css({'transform':'translate3d(0px, 0px, 0px)','transition':'.5s all'});
		}
	});
});


$('.demo').on({
            mouseover : function(){
                $('span').css({top:'-30px'});
                $('b').css({top:'-7px'});
            },
            mouseout : function(){
                $('span').css({top:'-7px'});
                $('b').css({top:'37px'});
            }
        })

