<?php
ini_set('display_errors', 'On');
$catmax = 0;
	include '../../../include/sql_connect.php';
$id = $_GET['id'];
echo $id;
$query = $db->prepare("SELECT forum_categories FROM forum_start WHERE categories_id = :id ");
$query->execute(array(':id' => $id));
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
$catname = $item[forum_categories];
}
echo $catname;
$query2 = $db->prepare("INSERT INTO forum_start VALUES ('', 'Новый', 'Сообщение', :cat , :id , 0, '')");
$query2->execute(array(':cat' => $catname, ':id' => $id));
$item2 = $query2->fetch(PDO::FETCH_ASSOC);
?>
