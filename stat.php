<?php
	$query = $db->prepare("INSERT INTO statistic VALUES ('', :ip , :horse , :date )");
	$query->execute(array(':ip' => $_SERVER["REMOTE_ADDR"], ':horse' => date('H'), ':date' => date('j.m.Y')));
	$query->fetch();
?>
