var nc = [];
$( document ).ready(function() {
var th = $("#background_title");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[1] = color.toRgbString();
}
});

var th = $("#background_top_menu");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[2] = color.toRgbString();
}
});

var th = $("#background_bottom_menu");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[3] = color.toRgbString();
}
});

var th = $("#background_content");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[4] = color.toRgbString();
}
});

var th = $("#background_body");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[5] = color.toRgbString();
}
});

var th = $("#color_menu_text");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[6] = color.toRgbString();
}
});

var th = $("#background_subparagraph_top");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[7] = color.toRgbString();
}
});

var th = $("#background_subparagraph_bottom");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[8] = color.toRgbString();
}
});

var th = $("#color_border_subparagraph");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[9] = color.toRgbString();
}
});
var th = $("#color_text_top");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[10] = color.toRgbString();
}
});
var th = $("#color_forum_team");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[10] = color.toRgbString();
}
});
var th = $("#color_forum_button");
th.spectrum({
color: th.attr("value"), 
    showAlpha: true,
	showInitial: true,
	showInput: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[10] = color.toRgbString();
}
});
 var sv = [];
$(".editcolor-savebutton").click(function() {
sv[1] = $("#background_title").spectrum("get").toRgbString();
sv[2] = $("#background_top_menu").spectrum("get").toRgbString();
sv[3] = $("#background_bottom_menu").spectrum("get").toRgbString();
sv[4] = $("#background_content").spectrum("get").toRgbString();
sv[5] = $("#background_body").spectrum("get").toRgbString();
sv[6] = $("#color_menu_text").spectrum("get").toRgbString();
sv[7] = $("#background_subparagraph_top").spectrum("get").toRgbString();
sv[8] = $("#background_subparagraph_bottom").spectrum("get").toRgbString();
sv[9] = $("#color_border_subparagraph").spectrum("get").toRgbString();
sv[10] = $("#color_text_top").spectrum("get").toRgbString();
sv[11] = $("#color_forum_team").spectrum("get").toRgbString();
sv[12] = $("#color_forum_button").spectrum("get").toRgbString();
		$.ajax({
       		type:  'post',
        	cache:  false ,
        	url:  './remote-script/ajax/edit-color/edit-color-save.php',
        	data:  {result:JSON.stringify(sv)},
        	success: function(resp) {
         		window.location.reload();
        	} 

      });
 });
});
