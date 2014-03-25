<?php
session_start();
if($_SESSION['auth'] != 1) {
	header('Location: index.php');
}

include 'sql_connect.php';
$free_hierarchy = 0;
$query = $db->query("SELECT * FROM menu");
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	$this_hierarchy = (int)$item[hierarchy];

	if ($this_hierarchy > $free_hierarchy)
	{
		$free_hierarchy = $this_hierarchy;
	}	
}
$free_hierarchy++;
$query = $db->prepare("INSERT INTO menu VALUES ('', :hierarchy , :label , '', :group, '')");
$query->execute(array(':hierarchy' => $free_hierarchy, ':label' => 'Новый пункт', ':group' => 1));
$query->fetch();
header('Location: ./edit_struc.php');
?>
