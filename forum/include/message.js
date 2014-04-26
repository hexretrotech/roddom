$().ready(function() {
	var opts = {
		absoluteURLs: false,
		allowSource: false,
		cssClass : 'el-rte',
		lang     : 'ru',
		height   : 300,
		toolbar  : 'normal',
		cssfiles : ['../../admin/app/editor/css/elrte-inner.css'],
	}

	$('#editor-add').elrte(opts);

	var form = $('.form_add_message');
	
	$('.add_message').click(function() {
		form.slideDown();
		$('#editor-add').elrte('val', '<p>');
	});

	$('.quote_icon').click(function() {
		var quote = "<blockquote>" + $(this).parents('.meta_message').siblings('.body_message').html() + "</blockquote><br>"
		$('#editor-add').elrte('val', quote);
		$('#quote_user').val($(this).attr('email'));
		form.slideDown();
	});
	$('#close_form').click(function() {
		form.slideUp();
	});

	$('#sub').submit(function() {
        if($('#email').val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#email').val())){
                return true;
            } else {
                $('#email').css({'background' : 'ffc0cb'});
                return false;
            }
        } else {
            $('#email').css({'background' : 'ffc0cb'});
	                return false;
        }
    
	});

});

