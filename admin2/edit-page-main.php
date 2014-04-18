<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-edit-page.css">	
</head>
<body>
	<?php include "./include/head.php"; 	
	include './include/pull_menu.php'; ?>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Редактирование информации на страницах</div>

			<div class="edit-frame blue">
				<div class="title-edit blue-title">
					<span>
						<i id="icon-edit"></i>
						Редактор
					</span>
				</div>
				<div class="edit-body">
					<?php
						for($i = 1; $i <= count($menu); $i++) {
						if($menu[$i][label] != 'Главная' and $menu[$i][label] != 'Форум' and $menu[$i][label] != 'Галерея' ) {
							echo '<li class="li_menu p_edit"><a class="menu_link" >' . $menu[$i][label] . '</a><a class="button-edit-frame" href="edit_page.php?id=' . $menu[$i][hierarchy] . '"><i class="icon-edit"></i>Редактировать</a></li>';

							if(count($menu[$i][podpunkt]) != 0) {
								echo "<ul>";
								for($t = 1; $t <= count($menu[$i][podpunkt]); $t++) {
									echo '<li class="li_menu p_edit"><a class="menu_link" >' . $menu[$i][podpunkt][$t][label] . '</a><a class="button-edit-frame" href="edit_page.php?id=' . $menu[$i][podpunkt][$t][hierarchy] . '"><i class="icon-edit"></i>Редактировать</a></li>';
								}
								echo "</ul>";
							}
						}
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
