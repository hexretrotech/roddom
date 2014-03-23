<?php
$name[1] = "Внешний вид";
$name[2] = "Женская консультация";
$name[3] = "Оборудование";
$name[4] = "Отделение анестезиологии-реанимации";
$name[5] = "Отделение новорожденных";
$name[6] = "Отделение патологии беременности";
$name[7] = "Послеродовое отделение";
$name[8] = "Приемное отделение";
$name[9] = "Разные комнаты";
$name[10] = "Родильный дом";
$name[11] = "Родовое отделение";
$ti = $_GET['album'];
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_g.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> <!-- 33 KB -->

<!-- fotorama.css & fotorama.js. -->
<link  href="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.js"></script> <!-- 15 KB -->
</head>
<body>
<button class="close" onclick="window.parent.document.body.style.overflow = 'visible'; window.parent.document.getElementById('someid').parentNode.removeChild(window.parent.document.getElementById('someid')); "></button>
<div style="background-color:white; opacity:0.9; position:absolute; top:0; left:0; right:0; bottom:0;">
</div>
<div class="fotorama" data-loop="true" data-fit="cover" data-transition="dissolve" data-nav="none" data-width="100%" data-height="100%">
<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/files/images/gallery/' . $_GET['album'];
$images = scandir($path);
if (false !== $images) {
    $images = preg_grep('/\\.(?:png|gif|jpe?g|JPG)$/', $images);
    foreach ($images as $image)
        echo '<img src="/files/images/gallery/' . $_GET['album'] . '/' . htmlspecialchars(urlencode($image)),'" />';
}
?>
</div>
</body>
</html>
