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

			$(".editstruc-savebutton").click(function() {
				var stuff = $( "#sortable" ).sortable("toArray");
				$.ajax({
					type:  'post',
					cache:  false ,
					url:  './remote-script/ajax/edit-struc/edit-struc-save-main-item.php',
					data:  {result:JSON.stringify(stuff)},
					success: function(resp) {
						location.reload();
					} 

				});
			});

			$('.editstruc-removeitem').click(function(e) { 
				var clicked = $(e.target);
				clicked.parent('.editstruc-item').remove();	
			});

			$(".editstruc-addbutton").click(function() {
				$.ajax({
					type:  'get',
					cache:  false ,
					url:  './remote-script/ajax/edit-struc/edit-struc-add-main-item.php',
					success: function(resp) {
						location.reload();
					} 

				});
			});

			$(".editstruc-editmainitem").click(function() { 
				window.location.replace("./edit_structure_subparagraph.php?id=" + $(this).parent('.editstruc-item').attr('id'));
			});

		});
	</script>
</head>
<body>
	<?php include "./include/head.php"; 	
	include './include/pull_menu.php'; ?>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Редактор структуры сайта</div>
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
						for($c = 1; $c <= count($menu); $c++)
						{
							echo "<li class='editstruc-item' id=".$c . " hierarhy=" . $menu[$c][hierarchy] . "><div class='editstruc-labelitem'>" . $menu[$c][label] . "</div><a class='editstruc-removeitem button-edit-frame'><i class='icon-remove'></i>Удалить</a><a class='editstruc-editmainitem button-edit-frame'><i class='icon-edit'></i>Редактировать</a></li>";
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
