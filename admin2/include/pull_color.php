<?php
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
?>
