<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
$id_edit = $_GET['id'];
include 'sql_connect.php';
	
	$m = 0;
	$a = 0;
	$query = $db->query("SELECT label FROM menu WHERE hierarchy=" . $id_edit);
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		$q = $item[label];
	}
?>

<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="./jqe.js"></script>

</head>
<body>
<?php include "./menu.php"; ?>
<div class="main_block">
<form action="rename_add.php" method="post">
		<p style="margin-bottom:5px; font-size:16pt">Название пункта:</p>
			<input id="input_title" value="<?php echo $q ?>" name="title" />
			<input type="hidden" name="id" value="<?php echo $id_edit; ?>">

<br>

<button type="submit" class="save_button" id="save_add" onclick="">Сохранить</button>
</form>
</div>
</body>
</html>
