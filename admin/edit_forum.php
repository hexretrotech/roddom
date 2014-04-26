<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/forum.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script>
	$( document ).ready(function() {
			$('.editstruc-removeitem').click(function(e) { 
				var clicked = $(e.target);
				var ids = clicked.parent('.editstruc-item').attr('id');
				$.get( "./remote-script/ajax/edit-forum/remove_forum_categories.php", { id: ids } ).done(function() {location.reload(); });	
			});

			$('.editstruc-addbutton').click(function(e) {
				$.get( "./remote-script/ajax/edit-forum/add_forum_categories.php", { id: 1 } ).done(function() {location.reload(); });	
			});
	});
	</script>
</head>
<body>
	<?php include "./include/head.php"; ?>
	<?php include "./include/pull_forum_cat.php"; ?>
	
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Управление форумом</div>
			<div class="edit-frame fiolet">
				<div class="title-edit fiolet-title">
					<span>
						<i id="icon-edit"></i>
						Разделы:
					</span>
				</div>
				<div class="edit-body">
					<?php echo $start; ?>
					<div class="editstruc-saveandadd">
						<a class='editstruc-addbutton button-edit-frame'>
							<i class='icon-add'></i>
							Добавить новый раздел
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
