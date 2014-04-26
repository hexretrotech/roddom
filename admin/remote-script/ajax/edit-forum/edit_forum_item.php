<?php 
$name = $_GET['nn'];
$inf = $_GET['ni'];
$id = $_GET['id'];
	include '../../../include/sql_connect.php';
$query = $db->prepare("UPDATE forum_start SET forum_team_title= :name, team_info= :inf WHERE id= :id");
$query->execute(array(':id' => $id, ':name' => $name, ':inf' => $inf));
$item = $query->fetch(PDO::FETCH_ASSOC);

?>
