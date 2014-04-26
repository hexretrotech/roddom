<?php
ini_set('display_errors', 'On');
	include '../../include/sql_connect.php';
$nt = $_GET['nt'];
$query = $db->prepare("UPDATE param SET value= :nt WHERE param_name='text_forum'");
$query->execute(array(':nt' => $nt));
$item = $query->fetch(PDO::FETCH_ASSOC);

?>
