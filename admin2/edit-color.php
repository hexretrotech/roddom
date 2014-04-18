<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-edit-color.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src='./app/spectrum/spectrum.js'></script>
	<link rel='stylesheet' href='./app/spectrum/spectrum.css' />

</head>
<body>
	<?php include "./include/head.php"; 	
	include './include/pull_color.php'; ?>
	<script src="./include/setup-spectrum.js"></script>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Редактор цвета</div>
			
			<div class="edit-frame orange">
				<div class="title-edit orange-title">
					<span>
						<i id="icon-edit"></i>
						Редактор
					</span>
				</div>
				<div class="edit-body">
					<div class="edit-item">
						<label class="control-label">Фон заголовка:</label>
						<div class="edit-color">
							<input type='color' name='background_title' id='background_title' value="<?php echo $background_title; ?>" />
						</div>
					</div>
					<div class="edit-item">
						<label class="control-label">Фон меню:</label>
						<div class="edit-color">
							Цвет верхней заливки:
							<input type='color' name='background_top_menu' id='background_top_menu' value="<?php echo $background_top_menu; ?>" style="margin-right:15px;"/>
							<br><br>Цвет нижней заливки:
							<input type='color' name='background_bottom_menu' id='background_bottom_menu' value="<?php echo $background_bottom_menu; ?>" /></p>
							<br>Цвет текста:
							<input type='color' name='color_menu_text' id='color_menu_text' value="<?php echo $color_menu_text; ?>" /></p>
							<br>Цвет верхней заливки подпункатов:
							<input type='color' name='background_subparagraph_top' id='background_subparagraph_top' value="<?php echo $background_subparagraph_top; ?>" /></p>
							<br>Цвет нижней заливки подпункатов:
							<input type='color' name='background_subparagraph_bottom' id='background_subparagraph_bottom' value="<?php echo $background_subparagraph_bottom; ?>" /></p>
							<br>Цвет рамки подпунктов:
							<input type='color' name='color_border_subparagraph' id='color_border_subparagraph' value="<?php echo $color_border_subparagraph; ?>" /></p>


						</div>
					</div>
					<div class="edit-item">
						<label class="control-label">Фон контента:</label>
						<div class="edit-color">
							<input type='color' name='background_content' id='background_content' value="<?php echo $background_content; ?>" />
						</div>
					</div>
					<div class="edit-item">
						<label class="control-label">Фон страницы:</label>
						<div class="edit-color">
							<input type='color' name='background_body' id='background_body' value="<?php echo $background_body; ?>" />
						</div>
					</div>

					<div class="editcolor-save">
						<a class='editcolor-savebutton button-edit-frame'>
							<i class='icon-save'></i>
							Сохранить
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
