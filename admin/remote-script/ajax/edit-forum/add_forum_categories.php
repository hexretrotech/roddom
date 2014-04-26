<?php
$catmax = 0;
	include '../../../include/sql_connect.php';
$id = $_GET['id'];
$query = $db->query("SELECT categories_id FROM forum_start");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	if($item[categories_id] > $catmax) {
		$catmax = $item[categories_id];
	}
} 
$catmax++;
$query = $db->prepare("INSERT INTO forum_start VALUES ('', 'Новый', 'Сообщение', 'Новый', :id , 0, '')");
$query->execute(array(':id' => $catmax));
$item = $query->fetch(PDO::FETCH_ASSOC);
?>
