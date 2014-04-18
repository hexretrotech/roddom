<?php
include '../sql_connect.php';
$query = $db->query("SELECT * FROM menu");
$first_item = 0;
$add_i = 0;
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	if($first_item == 0) {
		$menuitem = $menuitem . '<li class="menuitem"><div style="display: table; width: 100%; height: 100%"><a class="menu_a" href=' . $item[src] . '>' . $item[label] . '</a></div>';
		$first_item = 1;
	}
	else {
		if($item[group] == 1) {
			if($add_i == 1) { $menuitem = $menuitem . '</ul></div></div>'; $add_i = 0;}
			$menuitem = $menuitem . '</li><li class="menuitem"><div style="display: table; width: 100%; height: 100%"><a class="menu_a" href=' . $item[src] . '>' . $item[label] . '</a></div>';
		} else {
			if($add_i == 0) { $menuitem = $menuitem . '<div class="add_item"><div class="podmenu_item"><ul class="podmenu_item_body">'; $add_i = 1;}
			$menuitem = $menuitem . '<li class="li_podmenu"><a class="a_podmenu" href="' . $item[src] .'">' . $item[label] . '</a></li>';
		}
	}
}
$menuitem = $menuitem . '</li>';
function coin($arg) {
$dir = opendir("../files/images/gallery/" . $arg);
$count = 0;
while($file = readdir($dir)){
    if($file == '.' || $file == '..' || is_dir('path/to/dir' . $file)){
        continue;
    }
    $count++;
}
return $count - 1;
}
?>

<html>
<head>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../skin/main.css">
	<link rel="stylesheet" type="text/css" href="../skin/style.css">
	<link rel="stylesheet" type="text/css" href="style_g.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
	$('#menu li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('.add_item',this).stop(true,true).fadeIn(200);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('.add_item',this).stop(true,true).fadeOut(200);
    }, this), 100));
  });
});
	</script>
	<title>Галерея | ГУЗ Липецкий городской родильный дом №1</title>
</head>
<body <?php if(isset($_GET['album'])) { echo "style='overflow:hidden;'"; } ?>>

<div id="wrapg">
	<div class="head">
		<div class="title_name"><div style="display: table; width: 100%; height: 100%"><div style="display:table-cell; vertical-align:middle;">ГУЗ "Липецкий городской родильный дом"</div></div></div>
	</div>
	
	<div id="menu">
	<?php echo $menuitem; ?>
	</div>
<div class="content_main">
	<h1>Галерея - Фотоальбомы</h1>
<hr>
<div class="album_item" onclick="window.location='./index.php?album=1'"><div class="abl"><img src="../files/images/gallery/1/main.JPG" /><span>Внешний вид</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=2'"><div class="abl"><img src="../files/images/gallery/2/main.JPG" /><span>Женская консультация</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=3'"><div class="abl"><img src="../files/images/gallery/3/main.JPG" /><span>Оборудование</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=4'"><div class="abl"><img src="../files/images/gallery/4/main.JPG" /><span>Отделение анестезиологии-реанимации</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=5'"><div class="abl"><img src="../files/images/gallery/5/main.JPG" /><span>Отделение новорожденных</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=6'"><div class="abl"><img src="../files/images/gallery/6/main.JPG" /><span>Отделение патологии беременности</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=7'"><div class="abl"><img src="../files/images/gallery/7/main.JPG" /><span>Послеродовое отделение</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=8'"><div class="abl"><img src="../files/images/gallery/8/main.JPG" /><span>Приемное отделение</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=9'"><div class="abl"><img src="../files/images/gallery/9/main.JPG" /><span>Разные комнаты</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=10'"><div class="abl"><img src="../files/images/gallery/10/main.JPG" /><span>Родильный дом</span></div></div>
<div class="album_item" onclick="window.location='./index.php?album=11'"><div class="abl"><img src="../files/images/gallery/11/main.JPG" /><span>Родовое отделение</span></div></div>
	</div>
	</div>
	<?php
	if(isset($_GET['album'])) {
	echo "<iframe id='someid' src='show.php?album=" . $_GET['album'] . "' class='frame_show' ></iframe>";
}
?>
	
</div>
</body>
</html>
	 
