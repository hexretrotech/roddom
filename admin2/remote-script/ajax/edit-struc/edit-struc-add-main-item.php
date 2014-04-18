<?php
include '../../../include/sql_connect.php';
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
$query = $db->prepare("INSERT INTO menu VALUES ('', :hierarchy , :label , :src , :group)");
$query->execute(array(':hierarchy' => $free_hierarchy, ':label' => 'Новый пункт', 'src' => "../page.php?id=" . $free_hierarchy, ':group' => 1));
$query->fetch();
?>
