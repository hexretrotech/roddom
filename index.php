<?php
include 'sql_connect.php';
$query = $db->query("SELECT * FROM menu");
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	$menu_item = $menu_item . '<a class="menu_a" href=' . $item[src] . '><li class="menuitem">' . $item[label] . '</li></a>';
}
	$title = "главная";
	$tpl = file_get_contents('skin/main.html');
	$tpl = str_replace('{title_main_page}', $te[1], $tpl);
	$tpl = str_replace('{menu_item}', $menu_item, $tpl);
	
	echo $tpl;
?>

