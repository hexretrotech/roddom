<?php
session_start();
if($_SESSION["auth"] == 0) {
	header('Location: index.php');
}
include './include/sql_connect.php';
?>
<div class="head-menu">
	<link rel="stylesheet" type="text/css" href="./stylesheet/head-menu.css">
	<ul class="menu">
		<li><a href="./main.php">Домашняя страница</a></li>
		<li><a href="#">Страницы</a>
			<ul>
				<li><a href="./edit_structure_main.php">Редактор структуры</a></li>
				<li><a href="./edit-color.php">Редактор цвета</a></li>
				<li><a href="./edit-page-main.php">Редактор страниц</a></li>
				<li><a href="#" ONCLICK="window.open('./filemanager.html','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=550,Height=400' );">Файловый менеджер</a></li>
			</ul>
		</li>
		<li><a href="#">Форум</a>
        	
		</li>
		<li><a href="/about">Информация</a>
			<ul>
				<li><a href="./stat_today.php">Статистика за сегодня</a></li>
				<li><a href="#">Статистика за месяц</a></li>
				<li><a href="#">Статистика за все время</a></li>
				<li><a href="#">Техническая информация о серевере</a></li>
			</ul>
		</li>
	</ul>
	<li class="exit-button"><a href="./remote-script/query/exit.php">Выход</a></li>
</div>
