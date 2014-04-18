<?php
	ini_set('display_errors', 'On');
	include './include/sql_connect.php';
	include './include/pull-menu.php';
?>
<html>
<head>
	<title>Форум</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-menu.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-menu.css">

	<script src="./include/jquery-1.10.2.min.js"></script>
	<script src="./include/jquery-migrate-1.2.1.min.js"></script>
	<script src="./include/main-menu.js"></script>
</head>
<body>
	<div id="scrolled">
		<div class="head">
			<div id="menu">
				<?php echo $menuitem; ?>
			</div>
			<div class="forum-section">
				<li><a href="#">Обратиться к администрации</a></li>
				<li><a href="#">Обращения других пользователей</a></li>
				<li><a href="#">qqwewrwe</a></li>
			</div>
		</div>
		<div class="main">
			<h1>ГУЗ "Липецкий городской родильный дом"</h1>
			<div class="all-item">
				<div class="labellistteam">
					<span>Список форумов:</span>			
				</div>
				<table class="list-team">
					<tr class="item">
						<td class="block-item imgitem"><img src="http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png" /></td>
						<td class="block-item nameitem"><a class="subject" href="#">Жалобы</a><p>Здесь вы сможите подать жалобу и прочитать жалобы от других пользователей</p></td>
						<td class="block-item varmas">9 сообщений<br>5 тем</td>
						<td class="block-item newmas"><b>Последний ответ</b> от <u>truegeek</u><br>12 Январь 2012, 18:34:41</td>
					</tr>
					<tr class="item">
						<td class="block-item imgitem"><img src="http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png" /></td>
						<td class="block-item nameitem"><a class="subject" href="#">Предложения</a><p>Здесь вы можите внести свое предложние</p></td>
						<td class="block-item varmas">9 сообщений<br>5 тем</td>
						<td class="block-item newmas"><b>Последний ответ</b> от <u>truegeek</u><br>12 Январь 2012, 18:34:41</td>
					</tr>
					<tr class="item">
						<td class="block-item imgitem"><img src="http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png" /></td>
						<td class="block-item nameitem"><a class="subject" href="#">Правила и инструкции</a><p>Правила форума и инструкции для раздела поддержки</p></td>
						<td class="block-item varmas">9 сообщений<br>5 тем</td>
						<td class="block-item newmas"><b>Последний ответ</b> от <u>truegeek</u><br>12 Январь 2012, 18:34:41</td>
					</tr>
				</table>

				<div class="labellistteam">
					<span>Список обсуждений:</span>			
				</div>
				<table class="list-team">
					<tr class="item">
						<td class="block-item imgitem"><img src="http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png" /></td>
						<td class="block-item nameitem"><a class="subject" href="#">Жалобы</a><p>Здесь вы сможите подать жалобу и прочитать жалобы от других пользователей</p></td>
						<td class="block-item varmas">9 сообщений<br>5 тем</td>
						<td class="block-item newmas"><b>Последний ответ</b> от <u>truegeek</u><br>12 Январь 2012, 18:34:41</td>
					</tr>
					<tr class="item">
						<td class="block-item imgitem"><img src="http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png" /></td>
						<td class="block-item nameitem"><a class="subject" href="#">Предложения</a><p>Здесь вы можите внести свое предложние</p></td>
						<td class="block-item varmas">9 сообщений<br>5 тем</td>
						<td class="block-item newmas"><b>Последний ответ</b> от <u>truegeek</u><br>12 Январь 2012, 18:34:41</td>
					</tr>
					<tr class="item">
						<td class="block-item imgitem"><img src="http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png" /></td>
						<td class="block-item nameitem"><a class="subject" href="#">Правила и инструкции</a><p>Правила форума и инструкции для раздела поддержки</p></td>
						<td class="block-item varmas">9 сообщений<br>5 тем</td>
						<td class="block-item newmas"><b>Последний ответ</b> от <u>truegeek</u><br>12 Январь 2012, 18:34:41</td>
					</tr>
				</table>

				<div class="stat_bottom">
					<div class="label_stat">
						<span>Статистика форума:</span>
					</div>
					<div class="body_stat">
						<span><b>2268962</b> Сообщений <br><b>158231</b> Тем <br><b>131939</b> Пользователей <br>Последний пользователь: <u>izksn<u></span>
					</div>
				</div>


			</div>
		</div>
	</div>
</body>
</html>
