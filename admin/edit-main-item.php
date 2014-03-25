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

	$("#save_add").click(function() {
		var stuff = $( "#sortable" ).sortable("toArray");
		var newname = $("#input_title").val();
		var chek = $("#srr").prop("checked");
		$.ajax({
       		type:  'post',
        	cache:  false ,
        	url:  'edit_add_item.php',
        	data:  {result:JSON.stringify(stuff), id:<?php echo $id_edit; ?>, label: newname},
        	success: function(resp) {

         		window.location.replace("./edit_struc.php");
        	} 

      });
	});
	$('.rm_add_item').click(function(e) { 
		var clicked = $(e.target);
		clicked.parent('.limain').remove();	
	});

	$('.edit_add_item').click(function() { 
		window.location.replace("./edit-add-item.php?id=" + $(this).parent('.limain').attr('hierarhy'));
	});

	$('#new-item-add').click(function() {
		window.location.replace("./add_item_add.php?id=" + <?php echo $id_edit ?>);
	});
	
	$( "#save_add" ).disableSelection();
});
</script>
</head>
<body>
<?php include "./menu.php"; ?>
<div class="main_block">
		<p style="margin-bottom:5px; font-size:16pt">Название пункта:</p>
			<input id="input_title" value="<?php echo $menu[$id_edit][label] ?>" name="title" />
<p style="margin-bottom:5px; font-size:16pt">Подпункты:</p>
<div style="border: 1px solid rgba(0, 0, 0, 0.1); margin-bottom:20px;">
<?php
	echo "<ul id='sortable'>";
	for($c = 1; $c <= count($menu[$id_edit][podpunkt]); $c++)
	{
		echo "<li class='limain' id=".$c . " hierarhy=" . $menu[$id_edit][podpunkt][$c][hierarchy] . "><div class='label_movie'></div>" . $menu[$id_edit][podpunkt][$c][label] . "<button class='rm_main_item rm_add_item'></button><button class='edit_main_item edit_add_item'></button></li>";
	}

?>
</ul>
<li class="limain" id="new-item-add"><div class='label_new'></div>Добавить новый пункт</li>
</div>
<button class="save_button" id="save_add" onclick="var a = $( '#sortable' ).sortable( 'toArray' );">Сохранить</button>
</div>
</body>
</html>
