<?php
	$count = 0;
	include '../../../include/sql_connect.php';
$stat = $_GET['stat'];
$id = $_GET['num'];
$user = $_GET['use'];
$query = $db->prepare("UPDATE forum SET ok=:stat WHERE id=:id ");
$query->execute(array(':id' => $id, ':stat' => $stat));
$item = $query->fetch(PDO::FETCH_ASSOC);
echo "dd";

$query = $db->prepare("SELECT team_id FROM forum WHERE id=:id ");
$query->execute(array(':id' => $id));
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	$cat = $item[team_id];
}

$query = $db->prepare("SELECT message_num FROM forum_start WHERE id=:id");
$query->execute(array(':id' => $cat));
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	$count = $item[message_num];
}
$count++;
#$query = $db->prepare("SELECT user FROM forum WHERE ok=1 AND categories_id=:id ");
#$query->execute(array(':id' => $cat));
#while($item = $query->fetch(PDO::FETCH_ASSOC)) {
#	$user = $item[user];
#}

$query = $db->prepare("UPDATE forum_start SET message_num= :count, end_message= :user WHERE id=:id ");
$query->execute(array(':id' => $cat, ':count' => $count, ':user' => $user));
$item = $query->fetch(PDO::FETCH_ASSOC);
?>
