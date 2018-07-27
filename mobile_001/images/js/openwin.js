
/* 修改表单二字段值 */
$('form.form_two input[name="para179"]').attr('name','para180').parent().next().next().children().attr('name','para179');
// 表单切换
$(function(){
	$('.reqireda>a').click(function(event) {
		/* Act on the event */
		var index=$(this).index();
		$(this).addClass('reqiredacli').siblings('.reqireda>a').removeClass('reqiredacli');
		$('.requireform').eq(index).show().siblings('form').hide();
		$('.requirergt>p').eq(index).show().siblings('p').hide();
		if(typeof(_script)=='undefined'){
			if(document.getElementById('number'))return;
			var _script = document.createElement('script');
			_script.setAttribute('type','text/javascript');
			_script.setAttribute('id','number');
			_script.setAttribute('src','../templates/res017/images/number/number.js');
			document.body.appendChild(_script);
		}	
	});
	$('form.requireform>.provincechoo').click(function() {
		/* Act on the event */
		if($(this).attr('src')=='openwin/trangleup.png'){

			$(this).attr('src', 'openwin/trangledown.png');
		}else{
			$(this).attr('src', 'openwin/trangleup.png');
		}
	});

	$('.requireclose').click(function(){
		$('.boxbig').hide();
	});

})