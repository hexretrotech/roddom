<?php
//echo disk_free_space("./");
include 'sql_connect.php';	
?>
<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="left_colomn">
		<div class="menu">
			<ul class="clear">
				<li class="li_menu p_edit"><a class="menu_link" href="edit_main.php">Главная</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php?id=1">Информация об организации</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_roddom.php">Родильный дом</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_cons.php">Женская консультация №1</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php?id=2">Информация пациентам</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php?id=3">Контакты</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php?id=4">Форум</a></li>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php">Галерея</a></li>
				
			</ul>
		</div>
	</div>

	<div class="main_block">
		
	</div>
</body>
</html>
