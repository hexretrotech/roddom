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
$menuitem = $menuitem . '</li>';
	$title = "главная";
	$tpl = file_get_contents('skin/main.html');
	$tpl = str_replace('{menu_item}', $menuitem, $tpl);

	$query = $db->prepare("SELECT * FROM page WHERE id = :id");
	$query->execute(array(':id' => $_GET['id']));
	$inf = $query->fetch(PDO::FETCH_ASSOC);
	
	$tpl = str_replace('{title_main_page}', $inf['title'], $tpl);
	$tpl = str_replace('{content}', $inf['content'], $tpl);
	$query = $db->query("SELECT * FROM color");
while($item = $query->fetch(PDO::FETCH_ASSOC)) {
	$background_title = $item['background_title'];
	$background_top_menu = $item['background_top_menu'];
	$background_bottom_menu = $item['background_bottom_menu'];
	$background_content = $item['background_content'];
	$background_body = $item['background_body'];
	$color_menu_text = $item['color_menu_text'];
	$color_border_subparagraph = $item['color_border_subparagraph'];
	$background_subparagraph_top = $item['background_subparagraph_top'];
	$background_subparagraph_bottom = $item['background_subparagraph_bottom'];
}
$tpl = str_replace('$bodycolor$', $background_body, $tpl);
$tpl = str_replace('$headcolor$', $background_title, $tpl);
$tpl = str_replace('$topmenucolor$', $background_top_menu, $tpl);
$tpl = str_replace('$bottommenucolor$', $background_bottom_menu, $tpl);
$tpl = str_replace('$contentcolor$', $background_content, $tpl);
$tpl = str_replace('$textcolor$', $color_menu_text, $tpl);
$tpl = str_replace('$topadd$', $background_subparagraph_top, $tpl);
$tpl = str_replace('$bottomadd$', $background_subparagraph_bottom, $tpl);
$tpl = str_replace('$bord$', $color_border_subparagraph, $tpl);
	echo $tpl;
?>

