<?php
	session_start();
	include 'sql_connect.php';
try {
	$query = $db->prepare("UPDATE page SET title = :title, content = :content, add_content = :add_content WHERE id = :id");
	$query->execute(array(':id' => $_POST['id'], ':title' => $_POST['title'], ':content' => $_POST['content'], ':add_content' => $_POST['add_content']));
	$query->fetch(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
 echo 'Ошибка: ' . $e->getMessage();

$_SESSION['status'] = 0;
header("Location: ".$_SERVER['HTTP_REFERER']); 
}

$_SESSION['status'] = 1;
header("Location: ".$_SERVER['HTTP_REFERER']); 
?>
