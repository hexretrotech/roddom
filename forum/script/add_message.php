<?php
	ini_set('display_errors', 'On');
	include './sql_connect.php';
	$text = $_POST['text'];
	$user = $_POST['name'];
	$catid = $_POST['catid'];
	$email = $_POST['email'];
	$date = date('d n o, H:i:s');
	
	$categories_id = $_POST['id'];
	$quote = $_POST['quote_user'];
#	echo $user . "user<br>";
#	echo $email . "mail<br>";
#	echo $date . "date<br>";
#	echo $text . "text<br>";
#	echo $categories_id . "catid<br>";
#	echo $quote . "quote<br>";
	$query = $db->prepare("INSERT INTO forum VALUES ('', :user , :email , :date , :text , :catid, :cat , '0', :quote )");
	$query->execute(array(':user' => $user, ':email' => $email, ':date' => $date, ':text' => $text, ':catid' => $catid, 'cat' => $categories_id, ':quote' => $quote));
	$query->fetch();
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>
