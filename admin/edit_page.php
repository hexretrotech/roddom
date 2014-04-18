<?php
//echo disk_free_space("./");
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
include 'sql_connect.php';
$query = $db->prepare("SELECT * FROM page WHERE id = :id");
	$query->execute(array(':id' => $_GET['id']));
	$inf = $query->fetch(PDO::FETCH_ASSOC);
?>
<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="../editor/ckeditor.js"></script>
</head>
<body>
	<?php include "./menu.php"; ?>

	<div class="main_block">
		<form action="edit_page_action.php" method="POST">
			<input type=hidden name=id value="<?php echo $_GET['id']; ?>">
			<p  style="margin-bottom:5px; font-size:16pt">Содержимое:</p>
			<textarea class="ckeditor" name="content"><?php echo $inf['content']; ?></textarea>
			<p style="margin-bottom:5px; font-size:16pt">Дополнительная информация:</p>
			<div style="width:300px;"><textarea class="ckeditor" style="width:300px; height:800px" name="add_content"><?php echo $inf['add_content']; ?></textarea></div>
			<input id="submit" type="submit"/>
		</form>
	</div>
</body>
</html>
