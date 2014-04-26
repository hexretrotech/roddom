<?php
	include '../../../include/sql_connect.php';
$id = $_GET['id'];
$query = $db->prepare("DELETE FROM forum_start WHERE id= :id");
$query->execute(array(':id' => $id));
$item = $query->fetch(PDO::FETCH_ASSOC);
?>
