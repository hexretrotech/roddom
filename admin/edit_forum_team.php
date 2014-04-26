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
				$.get( "./remote-script/ajax/edit-forum/remove_forum_item.php", { id: ids } ).done(function() {location.reload(); });	
			});

			$('.ditstruc-addbutton').click(function(e) {
				$.get( "./remote-script/ajax/edit-forum/add_forum_item.php", { id: <?php echo $_GET[id]; ?> } ).done(function() {location.reload(); });	
			});
			$('#sn').click(function(e) {
				var nn = $("#name_team").val();
				var ni = $("#info_team").val();
				var nid = $("#idee").val();
				$.get( "./remote-script/ajax/edit-forum/edit_forum_item.php", { id: nid, nn: nn, ni: ni} ).done(function() {location.reload(); });	
			});
			$('.editstruc-editmainitem').click(function(e) {
				$("#name_team").val($(this).attr('nn'));
				$("#info_team").val($(this).attr('inf'));
				$("#idee").val($(this).attr('id'));
				$("#rename").fadeIn();
			});
			$('#cl').click(function(e) {
				$("#rename").fadeOut();
			});
			$('#rnm').click(function(e) {
				var rnm = $("#input_title").val();
				$.get( "./remote-script/ajax/edit-forum/rename_forum_cat.php", { nn: rnm, id: <?php echo $_GET[id]; ?> } ).done(function() { location.reload();});	

			});
	});
	</script>
</head>
<body>
	<?php include "./include/head.php"; ?>
	<?php include "./include/pull_forum_team.php"; ?>
	
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i><a href="./edit_forum.php">Управление форумом</a><i class="icon-angle-right"></i>Редактирование раздела</div>
			<div class="edit-frame fiolet">
				<div class="title-edit fiolet-title">
					<span>
						<i id="icon-edit"></i>
						Разделы:
					</span>
				</div>
				<div class="edit-body">
					<label class="control-label">Имя:</label>
					<div class="edit-name">
						<input name="name" class="main-name" id="input_title" value="<?php echo $forum_cat; ?>" />
						<br><a class='editstruc-addbutton cn button-edit-frame' id="rnm">
							<i class='icon-add'></i>
							Переименовать
						</a>
					</div>
					<?php echo $team; ?>
					<div class="editstruc-saveandadd">
						<a class='editstruc-addbutton ditstruc-addbutton button-edit-frame'>
							<i class='icon-add'></i>
							Добавить новую тему
						</a>
					</div>
				</div>
			</div>
		<div id="rename" style="display:none;">
		<input type="hidden" id="idee">
			Имя темы: <input id="name_team" /><br>
			Комментарии: <textarea style="width:500px; height:100px" id="info_team" ></textarea><br>
<button id="sn">Сохранить</button><button id="cl">Отмена</button>
		</div>
		</div>

	</div>
</body>
</html>
