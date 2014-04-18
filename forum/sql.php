<?php
	ini_set('display_errors', 'On');
	include './include/sql_connect.php';
	
	
//$query = $db->query("SELECT * FROM forum");
//$query = $db->query("SELECT user FROM forum");
//$query = $db->query("SELECT user, text FROM forum WHERE categories=1 ORDER BY id");
$query = $db->query("SELECT id, user, text FROM forum WHERE categories=1 ORDER BY id DESC");
$first_item = 0;
$add_i = 0;
$item = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($item);
echo "</pre>";
#while($item = $query->fetch(PDO::FETCH_ASSOC))
#{

#}
?>
