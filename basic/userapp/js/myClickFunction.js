$('.child_menu>li').click(function(){
	var className = this.className;
	className = className.replace(' active','');
	$('Form').text('这是'+className+'页面');
	$('#page').text(className);
	$(this).siblings('li').each(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}
	})
});
