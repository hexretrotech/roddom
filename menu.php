<?
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	if($item[group] == 1) {
		$menuitem = $menuitem . '<li class="menuitem">';
		$menuitem = $menuitem . '<div style="display: table; width: 100%; height: 100%"><a class="menu_a" href=' . $item[src] . '>' . $item[label] . '</a></div>';

		if($item[nextgroup] == 1) {
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
		$menuitem = $menuitem . '</li>';
	}
}
?>
