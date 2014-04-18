<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-edit-page.css">	
	
<link rel="stylesheet" href="./app/editor/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="./app/editor/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

<script src="./app/editor/js/jquery-1.6.1.min.js"           type="text/javascript" charset="utf-8"></script>
<script src="./app/editor/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./app/editor/js/elrte.min.js"                  type="text/javascript" charset="utf-8"></script>
<script src="./app/editor/js/i18n/elrte.ru.js"              type="text/javascript" charset="utf-8"></script>

<script src="./app/filemanager/js/elfinder.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./app/filemanager/js/i18n/elfinder.ru.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="./app/filemanager/css/elfinder.min.css" type="text/css" media="screen" charset="utf-8">

<script type="text/javascript" charset="utf-8">

      $().ready(function() {
            var opts = {
                absoluteURLs: false,
                cssClass : 'el-rte',
                lang     : 'en',
                height   : 420,
                toolbar  : 'maxi',
                cssfiles : ['./app/editor/css/elrte-inner.css'],
				fmOpen : function(callback) {
    				$('<div />').dialogelfinder({
     					url: './app/filemanager/php/connector.php',
     					commandsOptions: {
       						getfile: {
         						oncomplete: 'destroy' // destroy elFinder after file selection
        					}
						},
						getFileCallback: callback // pass callback to file manager
					});
  				}
            }
 $('#editor-main').elrte(opts);
$('#editor-add').elrte(opts);
      });
</script>
</head>
<body>
	<?php include "./include/head.php";
$query = $db->prepare("SELECT * FROM page WHERE id = :id");
	$query->execute(array(':id' => $_GET['id']));
	$inf = $query->fetch(PDO::FETCH_ASSOC);
?>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i><a href="./edit-page-main.php">Редактирование информации на страницах</a><i class="icon-angle-right"></i>Редактирование страницы</div>
<form method="post" action="./remote-script/query/save_page.php">
<input type=hidden name=id value="<?php echo $_GET['id']; ?>">
			<div class="edit-frame blue">
				<div class="title-edit blue-title">
					<span>
						<i id="icon-edit"></i>
						Редактор основной информации
					</span>
				</div>
				<div class="edit-body">
					<textarea name="editor-main" id="editor-main" ><?php echo $inf['content']; ?></textarea>
				</div>
			</div>

			<div class="edit-frame blue">
				<div class="title-edit blue-title">
					<span>
						<i id="icon-edit"></i>
						Редактор дополнительной информации
					</span>
				</div>
				<div class="edit-body">
					<textarea name="editor-add" id="editor-add" ><?php echo $inf['add_content']; ?></textarea>
					<div class="editpage-save">
						<button type="submit" class='editpage-savebutton button-edit-frame'>
							<i class='icon-save'></i>
							Сохранить
						</button>
					</div>
				</div>
			</div>
</form>
		</div>
	</div>
</body>
</html>
