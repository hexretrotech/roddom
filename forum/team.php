<?php
	ini_set('display_errors', 'On');
	include './include/sql_connect.php';
	include './include/pull-menu.php';
	$query = $db->query("SELECT * FROM color");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	$background_title = $item['background_title'];
	$background_top_menu = $item['background_top_menu'];
	$background_bottom_menu = $item['background_bottom_menu'];
	$background_content = $item['background_content'];
	$background_body = $item['background_body'];
	$color_menu_text = $item['color_menu_text'];
	$color_border_subparagraph = $item['color_border_subparagraph'];
	$background_subparagraph_top = $item['background_subparagraph_top'];
	$background_subparagraph_bottom = $item['background_subparagraph_bottom'];
	$color_text_top = $item['color_text_top'];
	$color_forum_team = $item['forum_team'];
	$color_forum_button = $item['forum_button'];
}
$query = $db->query("SELECT value FROM param WHERE param_name='text_forum'");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
$old_text = $item[value];
}
?>
<html>
<head>
	<title>Форум</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-menu.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-menu.css">

	<script src="./include/jquery-1.10.2.min.js"></script>
	<script src="./include/message.js"></script>
	<script src="./include/jquery-migrate-1.2.1.min.js"></script>
	<script src="./include/main-menu.js"></script>
	
<link rel="stylesheet" href="../../admin/app/editor/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../../admin/app/editor/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script src="../../admin/app/editor/js/jquery-1.6.1.min.js"           type="text/javascript" charset="utf-8"></script>
<script src="../../admin/app/editor/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../admin/app/editor/js/elrte.min.js"                  type="text/javascript" charset="utf-8"></script>
<script src="../../admin/app/editor/js/i18n/elrte.ru.js"              type="text/javascript" charset="utf-8"></script>
	<style>
	body { background-color: <?php echo $background_body ?>; }
	.head { background-color: <?php echo $background_title ?>; }
	#menu { background-image: -webkit-linear-gradient(top, <?php echo $background_top_menu ?> 2%, <?php echo $background_bottom_menu ?> 100%); }
	.content_main { background-color: <?php echo $background_content ?>; }
	.menu_a, .a_podmenu { color: <?php echo $color_menu_text ?>; }
	.li_podmenu { background-image: -webkit-linear-gradient(top, <?php echo $background_subparagraph_top ?> 2%, <?php echo $background_subparagraph_bottom ?> 100%); }
	.podmenu_item_body { border:2px solid <?php echo $color_border_subparagraph ?>; }
	.add_message {background-color: <?php echo $color_forum_team ?>; }
	.labellistteam {background-color: <?php echo $color_forum_button ?>; }
	</style>
</head>
<body>
	<div id="scrolled">
		<div class="head">
			<div id="menu">
				<?php echo $menuitem; ?>
			</div>

		</div>
			<div class="forum-section">
			<!---	<li><a href="#">Обратиться к администрации</a></li>
				<li><a href="#">Обращения других пользователей</a></li>
				<li><a href="#">qqwewrwe</a></li>-->
			</div>
		<div class="main">
		<!--	<h1>ГУЗ "Липецкий городской родильный дом"</h1> -->
<div class="enter_text">
<?php echo $old_text; ?>
</div>
			<div class="all-item">
				<h3><?php echo $title_team ?></h3>
			<!---	<div class="page"><span>Страницы: </span><a href="#">1</a><a href="#">2</a><a href="#">3</a>--><div class="add_message">Написать сообщение</div><!--</div> -->
				<div class="body_item">
				<?php include './include/pull-team.php'; ?>

					<br>



			</div>
		</div>
	</div>
	</div>
	<div class="form_add_message">
		<form method="POST" id="sub" action="./script/add_message.php">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<input type="hidden" name="catid" value="<?php echo $_GET['cat']; ?>">
					<input type="hidden" name="quote_user" id="quote_user" value="">
					<div class="edit-item">
						<label class="control-label">Ваше имя:</label>
						<div class="edit-color">
							<input name='name' />
						</div>
					</div>
					<div class="edit-item">
						<label class="control-label">Ваш E-mail:</label>
						<div class="edit-color">
							<input id="email" name='email' />
						</div>
					</div>

					<div class="edit-item">
						<label class="control-label">Ваше сообщение:</label>
						<div class="edit-color">
							<input name="text" id="editor-add" />
						</div>
					</div>
			<button type="submit" class="save2" />Отправить</button>
		</form>
<button class="add_message save2 close" id="close_form" >Закрыть</button>
	</div>
</body>
</html>
