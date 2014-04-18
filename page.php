<?php
include 'sql_connect.php';
$query = $db->query("SELECT * FROM menu");
$first_item = 0;
$add_i = 0;
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	if($first_item == 0) {
		$menuitem = $menuitem . '<li class="menuitem"><div style="display: table; width: 100%; height: 100%"><a class="menu_a" href=' . $item[src] . '>' . $item[label] . '</a></div>';
		$first_item = 1;
	}
	else {
		if($item[group] == 1) {
			if($add_i == 1) { $menuitem = $menuitem . '</ul></div></div>'; $add_i = 0;}
			$menuitem = $menuitem . '</li><li class="menuitem"><div style="display: table; width: 100%; height: 100%"><a class="menu_a" href=' . $item[src] . '>' . $item[label] . '</a></div>';
		} else {
			if($add_i == 0) { $menuitem = $menuitem . '<div class="add_item"><div class="podmenu_item"><ul class="podmenu_item_body">'; $add_i = 1;}
			$menuitem = $menuitem . '<li class="li_podmenu"><a class="a_podmenu" href="' . $item[src] .'">' . $item[label] . '</a></li>';
		}
	}
}
$query = $db->query("SELECT label FROM menu WHERE hierarchy=" . $_GET['id']);
	while($name = $query->fetch(PDO::FETCH_ASSOC))
	{
		$q = $name[label];
	}
$menuitem = $menuitem . '</li>';
	$title = "главная";
	$tpl = file_get_contents('skin/page.html');
	$tpl = str_replace('{menu_item}', $menuitem, $tpl);

	$query = $db->prepare("SELECT * FROM page WHERE id = :id");
	$query->execute(array(':id' => $_GET['id']));
	$inf = $query->fetch(PDO::FETCH_ASSOC);
	$ac = '<div class="colomn contentblock">
			<div class="colomn_content">
				<div style="color:#777777">

Дополнительная информация:

				</div>' . $inf['add_content'] . '</div>
		</div>';
	$tpl = str_replace('{title_main_page}', $q, $tpl);
	$tpl = str_replace('{content}', $inf['content'], $tpl);
if(!($inf['add_content'] == "none")) {
	$tpl = str_replace('{add_content}', $ac, $tpl);
} else {
	$tpl = str_replace('{add_content}', "", $tpl);
}
	$query = $db->query("SELECT * FROM color");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	$background_title = $item['background_title'];
	$background_top_menu = $item['background_top_menu'];
	$background_bottom_menu = $item['background_bottom_menu'];
	$background_content = $item['background_content'];
	$background_body = $item['background_body'];
}
$tpl = str_replace('$bodycolor$', $background_body, $tpl);
$tpl = str_replace('$headcolor$', $background_title, $tpl);
$tpl = str_replace('$topmenucolor$', $background_top_menu, $tpl);
$tpl = str_replace('$bottommenucolor$', $background_bottom_menu, $tpl);
$tpl = str_replace('$contentcolor$', $background_content, $tpl);
	echo $tpl;
?>

