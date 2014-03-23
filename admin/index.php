<?php
	
?>
<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
body {
		background: url(./7.jpg); 
background-size: 100% 100%; 
}
	</style>
</head>
<body>
<div id="space"></div>
<div id="loginform">
<h3 class="form-title">Пожалуйста войдите</h3>
<form method="POST" action="./auth.php">
<div class="input-icon left">
                    <i id="icon-user1"></i>
                    <input class="valid" type="text" placeholder="Логин" name="login"  required="required">
                </div>
<div class="input-icon left">
                    <i id="icon-user2"></i>
                    <input id class="valid" type="text" placeholder="Пароль" name="pas"  required="required">
                </div>
<button class="sub" type="submit">Вход</button>
</form>
</div>
</body>
</html>
