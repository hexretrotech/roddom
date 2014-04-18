<?php

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

?>
