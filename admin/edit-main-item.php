<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
$id_edit = $_GET['id'];
include 'sql_connect.php';
	
	$m = 0;
	$a = 0;
	$query = $db->query("SELECT * FROM menu");
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		if($item[group] == 1) 
		{
			$m++;
			$menu[$m][hierarchy] = $item[hierarchy];
			$menu[$m][src] = $item[src];
			$menu[$m][label] = $item[label];
			$menu[$m][group] = $item[group];
			$menu[$m][nextgroup] = $item[nextgroup];
			$a = 0;
			
		}
		else
		{
			$a++;
			$menu[$m][podpunkt][$a][hierarchy] = $item[hierarchy];
			$menu[$m][podpunkt][$a][src] = $item[src];
			$menu[$m][podpunkt][$a][label] = $item[label];
			$menu[$m][podpunkt][$a][group] = $item[group];
			$menu[$m][podpunkt][$a][nextgroup] = $item[nextgroup];
			
		}
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
		<p style="margin-bottom:5px; font-size:16pt">Название пункта:</p>
			<input id="input_title" value="<?php echo $menu[$id_edit][label] ?>" name="title" />
<div style="border: 1px solid rgba(0, 0, 0, 0.1); margin-top:20px;">
<?php
	echo "<ul id='sortable'>";
	for($c = 1; $c <= count($menu[$id_edit][podpunkt]); $c++)
	{
		echo "<li class='limain' id=".$c . " hierarhy=" . $menu[$id_edit][podpunkt][$c][hierarchy] . "><div class='label_movie'></div>" . $menu[$id_edit][podpunkt][$c][label] . "<button class='rm_main_item rm_add_item'></button><button class='edit_main_item'></button></li>";
	}

?>
</ul>
<li class="limain" id="new-item-main"><div class='label_new'></div>Добавить новый пункт</li>
</div>
</div>
</body>
</html>
