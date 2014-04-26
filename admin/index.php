<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style-index.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
</head>
<body>
	<div id="index-head">
		<span>Пожалуйста войдите</span>
	</div>
	<div id="space"></div>
	<div id="loginform">
	<form method="POST" action="./remote-script/query/autorization.php">
		<div class="input-icon left">
			<i id="icon-user1"></i>
			<input class="valid" type="text" placeholder="Логин" name="login"  required="required">
		</div>
		<div class="input-icon left">
                	<i id="icon-user2"></i>
                	<input id class="valid" type="password" placeholder="Пароль" name="pas"  required="required">
                </div>
		<button class="sub" type="submit">Вход</button>
	</form>
	</div>
</body>
</html>
