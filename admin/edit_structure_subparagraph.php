<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/edit-structure.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script>
	$( document ).ready(function() {
		$( "#sortable" ).sortable({
			placeholder: "ui-state-highlight"
		});

		$( "#sortable" ).disableSelection();

		$('.editstruc-removeitem').click(function(e) { 
			var clicked = $(e.target);
			clicked.parent('.editstruc-item').remove();	
		});

		$(".editstruc-addbutton").click(function() {
			$.ajax({
				type:  'get',
				cache:  false ,
				url:  './remote-script/ajax/edit-struc/edit-struc-add-subparagraph-item.php?id=' + <?php echo $_GET['id'] ?>,
				success: function(resp) {
					location.reload();
				} 
			});
		});

		$(".editstruc-savebutton").click(function() {
			var stuff = $( "#sortable" ).sortable("toArray");
			var newname = $("#input_title").val();
			$.ajax({
       			type:  'post',
        		cache:  false ,
        		url:  './remote-script/ajax/edit-struc/edit-struc-save-subparagraph-item.php',
        		data:  {result:JSON.stringify(stuff), id:<?php echo $_GET['id']; ?>, label: newname},
        		success: function(resp) {
         			window.location.replace("./edit_structure_main.php");
        		} 

     		});
		});

		$(".editstruc-editmainitem").click(function(e) {
			var clicked = $(e.target);
			var numh = clicked.parent('.editstruc-item').attr('hierarhy');
			var newname = prompt('Редактирование имени', clicked.parent('.editstruc-item').find('.editstruc-labelitem').html());
			$.ajax({
       			type:  'post',
        		cache:  false ,
        		url:  './remote-script/ajax/edit-struc/edit-struc-rename-subparagraph-item.php',
        		data:  {name: newname, numh: numh},
        		success: function(resp) {
         			window.location.reload();
        		} 

     		});
		});

	});
	</script>
</head>
<body>
	<?php include "./include/head.php"; 	
	include './include/pull_menu.php'; 
	$id_edit = $_GET['id']; ?>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i><a href="./edit_structure_main.php">Редактор структуры сайта</a><i class="icon-angle-right"></i>Редактирование подпункта меню</div>

			<div class="edit-frame green">
				<div class="title-edit green-title">
					<span>
						<i id="icon-edit"></i>
						Имя главного пункта
					</span>
				</div>
				<div class="edit-body">
					<label class="control-label">Имя:</label>
					<div class="edit-name">
						<input name="name" class="main-name" id="input_title" value="<?php echo $menu[$id_edit][label] ?>" />
						<span>Имя главного пункта отображается в меню и заглавии страницы</span>
					</div>
				</div>
			</div>

			<div class="edit-frame green">
				<div class="title-edit green-title">
					<span>
						<i id="icon-edit"></i>
						Редактор
					</span>
				</div>
				<div class="edit-body">
					<?php
						echo "<ul id='sortable'>";
						for($c = 1; $c <= count($menu[$id_edit][podpunkt]); $c++)
						{
							echo "<li class='editstruc-item' id=".$c . " hierarhy=" . $menu[$id_edit][podpunkt][$c][hierarchy] . "><div class='editstruc-labelitem'>" . $menu[$id_edit][podpunkt][$c][label] . "</div><a class='editstruc-removeitem button-edit-frame'><i class='icon-remove'></i>Удалить</a><a class='editstruc-editmainitem button-edit-frame'><i class='icon-edit'></i>Переименовать</a></li>";
						}

					?>
					<div class="editstruc-saveandadd">
						<a class='editstruc-savebutton button-edit-frame'>
							<i class='icon-save'></i>
							Сохранить
						</a>
						<a class='editstruc-addbutton button-edit-frame'>
							<i class='icon-add'></i>
							Добавить пункт
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
