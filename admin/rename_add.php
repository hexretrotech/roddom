<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}
$title = $_POST['title'];
$id = $_POST['id'];
include 'sql_connect.php';
$query = $db->prepare("UPDATE menu SET label = :title WHERE hierarchy = :id ");
		$query->execute(array(':id' => $id, ':title' => $title));
		$query->fetch();
header("Location: ".$_SERVER['HTTP_REFERER']); 
?>
