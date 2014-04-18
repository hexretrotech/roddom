$( document ).ready(function() {
	$('#menu li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('.add_item',this).stop(true,true).fadeIn(100);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('.add_item',this).stop(true,true).fadeOut(100);
    }, this), 100));
  });
});

