<?php
include 'sql_connect.php';
$query = $db->query("SELECT * FROM menu");
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	if($item[group] == 1) {
		$menuitem = $menuitem . '<li class="menuitem">';
		$menuitem = $menuitem . '<div style="display: table; width: 100%; height: 100%"><a class="menu_a" href=' . $item[src] . '>' . $item[label] . '</a></div>';

		if($item[nextgroup] == 1 or $item[nextgroup] == 0) {
			$menuitem = $menuitem . '</li>';
		}
		else {
			$menuitem = $menuitem . '<div class="add_item"><div class="podmenu_item"><ul class="podmenu_item_body">';
		}
	}	

	if($item[group] == 2) {
		$menuitem = $menuitem . '<li class="li_podmenu"><a class="a_podmenu" href="' . $item[src] .'">' . $item[label] . '</a></li>';
	}

	if($item[nextgroup] == 1) {
		$menuitem = $menuitem . '</ul>';
	}
		if($item[nextgroup] == 0) {
		$menuitem = $menuitem . '</li>';
	}
}
	$title = "главная";
	$tpl = file_get_contents('skin/page.html');
	$tpl = str_replace('{menu_item}', $menuitem, $tpl);

	$query = $db->prepare("SELECT * FROM page WHERE id = :id");
	$query->execute(array(':id' => $_GET['id']));
	$inf = $query->fetch(PDO::FETCH_ASSOC);
	
	$tpl = str_replace('{title_main_page}', $inf['title'], $tpl);
	$tpl = str_replace('{content}', $inf['content'], $tpl);
	$tpl = str_replace('{add_content}', $inf['add_content'], $tpl);
	echo $tpl;
?>

