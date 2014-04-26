<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	
</head>
<body>
	<?php include "./include/head.php"; ?>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Домашняя страница</div>

			<div class="menu-home">
				<div class="menu-home-title"><i id="icon-home-menu"></i>Домашняя страница</div>
				<div class="menu-home-plit">
				

					<a class="home-site-menu-item" href="http://lgrd48.ru">
						<img src="./images/home-site.png">
						<div class="name">Домашняя страница сайта</div>
					</a>
				</div>
			</div>

			<div class="menu-home">
				<div class="menu-home-title"><i id="icon-home-menu"></i>Страницы</div>
				<div class="menu-home-plit">
					<a class="home-site-menu-item" href="./edit_structure_main.php">
						<img src="./images/home-editstruc.png">
						<div class="name">Редактор структуры</div>
					</a>

					<a class="home-site-menu-item" href="./edit-color.php">
						<img src="./images/home-editcolor.png">
						<div class="name">Редактор цвета</div>
					</a>

					<a class="home-site-menu-item" href="./edit-page-main.php">
						<img src="./images/home-editpage.png">
						<div class="name">Редактор страниц</div>
					</a>

					<a class="home-site-menu-item" href="#" ONCLICK="window.open('./filemanager.html','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=550,Height=400' );">
						<img src="./images/home-filemanager.png">
						<div class="name" >Файловый менеджер</div>
					</a>
				</div>
			</div>
			<div class="menu-home">
				<div class="menu-home-title"><i id="icon-home-menu"></i>Форум</div>
				<div class="menu-home-plit">
					<a class="home-site-menu-item" href="./moderation.php">
						<img src="./images/moder.png">
						<div class="name">Модерация</div>
					</a>

					<a class="home-site-menu-item" href="./edit_forum.php">
						<img src="./images/cteam.png">
						<div class="name">Управление темами</div>
					</a>

					<a class="home-site-menu-item" href="./forum_text.php">
						<img src="./images/entert.png">
						<div class="name">Текст приветствия</div>
					</a>

				</div>
			</div>
			<div class="menu-home">
				<div class="menu-home-title"><i id="icon-home-menu"></i>Информация</div>
				<div class="menu-home-plit">
					<a class="home-site-menu-item" href="./stat_today.php">
						<img src="./images/home-statthis.png">
						<div class="name">Статистика посещений за сегодня</div>
					</a>

					<a class="home-site-menu-item" href="./stat_mounth.php">
						<img src="./images/home-statmonth.png">
						<div class="name">Статистика посещений за месяц</div>
					</a>

					<a class="home-site-menu-item" href="./stat_year.php">
						<img src="./images/home-statall.png">
						<div class="name">Статистика посещений за все время</div>
					</a>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
