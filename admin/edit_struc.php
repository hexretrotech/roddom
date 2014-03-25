<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
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
			$a = 0;
			
		}
		else
		{
			$a++;
			$menu[$m][podpunkt][$a][hierarchy] = $item[hierarchy];
			$menu[$m][podpunkt][$a][src] = $item[src];
			$menu[$m][podpunkt][$a][label] = $item[label];
			$menu[$m][podpunkt][$a][group] = $item[group];
			
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

	$("#save_main").click(function() {
		var stuff = $( "#sortable" ).sortable("toArray");
		$.ajax({
       		type:  'post',
        	cache:  false ,
        	url:  'edit_main_item.php',
        	data:  {result:JSON.stringify(stuff)},
        	success: function(resp) {
         		location.reload();
        	} 

      });
	});
	$('.rm_main_item').click(function(e) { 
		var clicked = $(e.target);
		clicked.parent('.limain').remove();	
	});

	$('.edit_main_item').click(function() { 
		window.location.replace("./edit-main-item.php?id=" + $(this).parent('.limain').attr('id'));
	});

	$('#new-item-main').click(function() {
		window.location.replace("./add_item.php");
	});
	
	$( "#save_main" ).disableSelection();
});
</script>
</head>
<body>
<?php include "./menu.php"; ?>
<div class="main_block">
<h1>Редактировать структуру</h1>
<?php
	echo "<ul id='sortable'>";
	for($c = 1; $c <= count($menu); $c++)
	{
		echo "<li class='limain' id=".$c . " hierarhy=" . $menu[$c][hierarchy] . "><div class='label_movie'></div>" . $menu[$c][label] . "<button class='rm_main_item'></button><button class='edit_main_item'></button></li>";
	}

?>
</ul>
<li class="limain" id="new-item-main"><div class='label_new'></div>Добавить новый пункт</li>
<button class="save_button" id="save_main" onclick="var a = $( '#sortable' ).sortable( 'toArray' );">Сохранить</button>
</div>
</body>
</html>
