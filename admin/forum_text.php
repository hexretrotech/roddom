<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/forum_text.css">
<link rel="stylesheet" href="../../admin/app/editor/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../../admin/app/editor/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script src="../../admin/app/editor/js/jquery-1.6.1.min.js"           type="text/javascript" charset="utf-8"></script>
<script src="../../admin/app/editor/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../admin/app/editor/js/elrte.min.js"                  type="text/javascript" charset="utf-8"></script>
<script src="../../admin/app/editor/js/i18n/elrte.ru.js"              type="text/javascript" charset="utf-8"></script>

	<script>
$().ready(function() {
	var opts = {
		absoluteURLs: false,
		allowSource: false,
		cssClass : 'el-rte',
		lang     : 'ru',
		height   : 300,
		toolbar  : 'normal',
		cssfiles : ['./app/editor/css/elrte-inner.css'],
	}

	$('#editor-add').elrte(opts);
	$('#savet').click(function() {
		var nt = $('#editor-add').elrte('val');
		$.get( "./remote-script/ajax/edit_forum_text.php", { nt: nt } ).done(function() {location.reload(); });
	});
});
	</script>
</head>
<body>
	<?php include "./include/head.php"; ?>
	<?php include "./include/pull_moderation_message.php"; 
$query = $db->query("SELECT value FROM param WHERE param_name='text_forum'");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
$old_text = $item[value];
}

?>
	
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Вступление форума</div>
			<div class="edit-frame fiolet">
				<div class="title-edit fiolet-title">
					<span>
						<i id="icon-edit"></i>
						Редактировать сообщение
					</span>
				</div>
				<div class="edit-body">
					<textarea id="editor-add"><?php echo $old_text; ?></textarea>
					<div class="editpage-save">
						<button id="savet" class='editpage-savebutton button-edit-frame'>
							<i class='icon-save'></i>
							Сохранить
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
