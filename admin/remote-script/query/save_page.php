<?php
	session_start();
	include '../../include/sql_connect.php';
$query = $db->query("DELETE FROM page WHERE id=" . $_POST['id']);
$query = $db->prepare("INSERT INTO page VALUES ( :id , :content , :add_content )");
		$query->execute(array(':id' => $_POST['id'], ':content' => $_POST['editor-main'], ':add_content' => $_POST['editor-add']));
		$query->fetch();

$_SESSION['status'] = 1;
header("Location: ../../edit-page-main.php"); 
?>
