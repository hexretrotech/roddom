<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
//echo disk_free_space("./");
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
		
	</div>
</body>
</html>
