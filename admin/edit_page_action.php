<?php
	session_start();
	include 'sql_connect.php';
$query = $db->query("DELETE FROM page WHERE id=" . $_POST['id']);
$query = $db->prepare("INSERT INTO page VALUES ( :id , :content , :add_content )");
		$query->execute(array(':id' => $_POST['id'], ':content' => $_POST['content'], ':add_content' => $_POST['add_content']));
		$query->fetch();

$_SESSION['status'] = 1;
header("Location: ".$_SERVER['HTTP_REFERER']); 
?>
