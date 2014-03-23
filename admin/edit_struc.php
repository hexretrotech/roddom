<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
include 'sql_connect.php';
$query = $db->query("SELECT * FROM menu");
$menuitem = '';
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	if($item[group] == 1) {
		$menuitem = $menuitem . '<li id=' . $item[id] . '>';
		$menuitem = $menuitem . '<div>' . $item[label] . '</div>';

		if($item[nextgroup] == 1 or $item[nextgroup] == 0) {
			$menuitem = $menuitem . '</li>';
		}
		else {
			$menuitem = $menuitem . '<ol class="podmenu_item_body">';
		}
	}	

	if($item[group] == 2) {
		$menuitem = $menuitem . '<li class="li_podmenu">' . '<div>' . $item[label] . '</div>' . '</li>';
	}

	if($item[nextgroup] == 1) {
		$menuitem = $menuitem . '</ol>';
	}
		if($item[nextgroup] == 0) {
		$menuitem = $menuitem . '</li></ul>';
	}
}

	
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
<script>
$( document ).ready(function() {
	$( "#sortable" ).sortable({
		placeholder: "ui-state-highlight"
});
	$( "#sortable" ).disableSelection();
});
</script>
</head>
<body>
<?php include "./menu.php"; ?>
<div class="main_block">
<h1>Редактировать структуру</h1>
<?php
	echo "<ul id='sortable'>";
	for($c = 1; $c <= 8; $c++)
	{
		echo "<li class='limain' id=".$c . "><div class='label_movie'></div>" . $menu[$c][label] . "<button id='rm_main_item'></button><button id='edit_main_item'></button></li>";
	}
	echo "</ul>";
?>
<button onclick="var a = $( '#sortable' ).sortable( 'toArray' );">s</button>
</div>
</body>
</html>
