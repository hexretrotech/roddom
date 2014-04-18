<?php

session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
//echo disk_free_space("./");
include 'sql_connect.php';
$query = $db->query("SELECT * FROM color");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	$background_title = $item['background_title'];
	$background_top_menu = $item['background_top_menu'];
	$background_bottom_menu = $item['background_bottom_menu'];
	$background_content = $item['background_content'];
	$background_body = $item['background_body'];
}
?>
<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="docs/jquery-1.9.1.js"></script>
	<script src='./spectrum/spectrum.js'></script>
	<link rel='stylesheet' href='./spectrum/spectrum.css' />
<script>
var nc = [];
$( document ).ready(function() {
var th = $("#background_title");
th.spectrum({
color:"<?php echo $background_title; ?>",
    showAlpha: true,
	showInitial: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[1] = color.toRgbString();
}
});

var th = $("#background_top_menu");
th.spectrum({
color:"<?php echo $background_top_menu; ?>",
    showAlpha: true,
	showInitial: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[2] = color.toRgbString();
}
});

var th = $("#background_bottom_menu");
th.spectrum({
color:"<?php echo $background_bottom_menu; ?>", 
    showAlpha: true,
	showInitial: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[3] = color.toRgbString();
}
});

var th = $("#background_content");
th.spectrum({
color:"<?php echo $background_content; ?>", 
    showAlpha: true,
	showInitial: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[4] = color.toRgbString();
}
});

var th = $("#background_body");
th.spectrum({
color:"<?php echo $background_body; ?>", 
    showAlpha: true,
	showInitial: true,
    chooseText: "Сохранить",
    cancelText: "Отмена",
	hide: function(color) {
	nc[5] = color.toRgbString();
}
});

 var sv = [];
$("#submit").click(function() {
sv[1] = $("#background_title").spectrum("get").toRgbString();
sv[2] = $("#background_top_menu").spectrum("get").toRgbString();
sv[3] = $("#background_bottom_menu").spectrum("get").toRgbString();
sv[4] = $("#background_content").spectrum("get").toRgbString();
sv[5] = $("#background_body").spectrum("get").toRgbString();
		$.ajax({
       		type:  'post',
        	cache:  false ,
        	url:  'save_color.php',
        	data:  {result:JSON.stringify(sv)},
        	success: function(resp) {
         		window.location.replace("./edit_color.php");
        	} 

      });
 });
});
</script>
</head>
<body>
	<?php include "./menu.php"; ?>

	<div class="main_block">
		<h1 style="color: rgba(0, 0, 0, 0.3)">Редактор цвета</h1>
		<br>
		<p><h4>Фон заголовка: <input type='color' name='background_title' id='background_title' value="<?php echo $background_title; ?>" /></h4></p>
		<p><h4>Фон меню:</h4>
Цвет верхней заливки:
<input type='color' name='background_top_menu' id='background_top_menu' value="<?php echo $background_top_menu; ?>" style="margin-right:15px;"/>
Цвет нижней заливки:
<input type='color' name='background_bottom_menu' id='background_bottom_menu' value="<?php echo $background_bottom_menu; ?>" /></p>
		<p><h4>Фон контента: <input type='color' name='background_content' id='background_content' value="<?php echo $background_content; ?>" /></h4></p>
		<p><h4>Фон страницы: <input type='color' name='background_body' id='background_body' value="<?php echo $background_body; ?>" /></h4></p>
<button id="submit">Сохранить</button>

</div>
</body>
</html>
