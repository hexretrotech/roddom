<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/moderation.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script>
	$( document ).ready(function() {
		$('.remove').click(function() { 
			var num = $(this).attr('num');
			var use = $(this).attr('use');
			$.get( "./remote-script/ajax/edit-forum/moderation.php", { stat: "-1", num: num, use: use } ).done(function() {location.reload(); });
  });	
	
		
		$('.good').click(function() { 
			var num = $(this).attr('num');
			var use = $(this).attr('use');
			$.get( "./remote-script/ajax/edit-forum/moderation.php", { stat: "1", num: num, use: use } ).done(function() {location.reload(); });
				
		});
	});
	</script>
</head>
<body>
	<?php include "./include/head.php"; ?>
	<?php include "./include/pull_moderation_message.php"; ?>
	
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Модерация сообщений</div>
			<div class="edit-frame fiolet">
				<div class="title-edit fiolet-title">
					<span>
						<i id="icon-edit"></i>
						Новые сообщения
					</span>
				</div>
				<div class="edit-body">
					<table>
							<?php echo $table; ?>

					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
