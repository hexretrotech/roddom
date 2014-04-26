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

		</div>
			<div class="forum-section">
<!---				<li><a href="#">Обратиться к администрации</a></li>
				<li><a href="#">Обращения других пользователей</a></li>
				<li><a href="#">qqwewrwe</a></li> -->
			</div>
		<div class="main">
	<!---			<h1>ГУЗ "Липецкий городской родильный дом"</h1> -->
<div class="enter_text">
<?php echo $old_text; ?>
</div>
			<div class="all-item">

				<?php 	include './include/pull-start.php'; ?>


			</div>
		</div>
	</div>
</body>
</html>
