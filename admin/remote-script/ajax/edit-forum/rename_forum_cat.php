<?php 
$name = $_GET['nn'];
$id = $_GET['id'];
	include '../../../include/sql_connect.php';
$query = $db->prepare("UPDATE forum_start SET forum_categories= :name WHERE categories_id= :id");
$query->execute(array(':id' => $id, ':name' => $name));
$item = $query->fetch(PDO::FETCH_ASSOC);

?>
