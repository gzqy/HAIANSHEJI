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
var a_id = 145;
ajax_send();
$(function(){
	$('.projectcasetit dt a').bind('mouseover',function(){
		var b = $(this).parent().index();
		a_id  = $(this).attr('data_id');
		$(this).css('color','#010101').parent().siblings('dt').children().css('color','#76838f');
		$(this).parent().css({transition:'.3s all',border:'1px solid #010101'}).siblings('dt').css('border','1px solid #aeaeae');
		ajax_send();
	});
});
function ajax_send(){
	$.ajax({
		type:"POST",
		url :"../ajax/home_index.php",
		data:{list_id:a_id},
		success:function(data){
			$('.projectcasecont').empty();
			$.each(data,function(i,n){
				var li_clone = $('#li_clone').clone(); 
				var img 	 = (li_clone.children().eq(0)).children();
				var span_cnt = (li_clone.children().eq(1)).children().eq(0);
				var a_link 	 = (li_clone.children().eq(1)).children().eq(1);
				img.attr({'src':n.imgurl,'title':n.title,'alt':'北京海岸设计-' + n.title});
				span_cnt.html(n.title);
				a_link.attr('href','http://www.haianzhuangshi.com/product/' + n.id + '-cn.html');
				a_link.attr('target','_blank');
				li_clone.fadeIn(600);
				li_clone.removeAttr('id').addClass('li_clone');
				$('.projectcasecont').append(li_clone);
			});
		},
		error  :function(){
			console.log('请求异常');
		},
		beforeSend:function(){
			console.log('请求开始');
		},
		dataType:"json"
	});
}