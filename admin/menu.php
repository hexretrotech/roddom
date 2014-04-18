<div class="left_colomn">
		<div class="menu">
			<ul class="clear">
				<li class="li_menu p_edit"><a class="menu_link" href="edit_struc.php">Редактировать структуру</a></li>
<hr>
				<?php
	include 'sql_connect.php';
	
	$m = 0;
	$a = 0;
	$query = $db->query("SELECT * FROM menu");
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		if($item[group] == 1) 
		{
			$m++;
			$menu[$m][hierarchy] = $item[hierarchy];
			$menu[$m][src] = $item[src];
			$menu[$m][label] = $item[label];
			$menu[$m][group] = $item[group];
			$a = 0;
			
		}
		else
		{
			$a++;
			$menu[$m][podpunkt][$a][hierarchy] = $item[hierarchy];
			$menu[$m][podpunkt][$a][src] = $item[src];
			$menu[$m][podpunkt][$a][label] = $item[label];
			$menu[$m][podpunkt][$a][group] = $item[group];
			
		}
	}

for($i = 1; $i <= count($menu); $i++) {
	echo '<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php?id=' . $menu[$i][hierarchy] . '">' . $menu[$i][label] . '</a><a class="editstruc-removeitem button-edit-frame"><i class="icon-remove"></i>Удалить</a></li>';

	if(count($menu[$i][podpunkt]) != 0) {
		echo "<ul>";
		for($t = 1; $t <= count($menu[$i][podpunkt]); $t++) {
			echo '<li class="li_menu p_edit"><a class="menu_link" href="edit_page.php?id=' . $menu[$i][podpunkt][$t][hierarchy] . '">' . $menu[$i][podpunkt][$t][label] . '</a></li>';
		}
		echo "</ul>";
	}
}
?>
				<hr>
				<li class="li_menu p_edit"><a class="menu_link" ONCLICK="window.open('../ckfsys-master/browser/default/browser.html?Connector=/ckfsys-master/connectors/php/connector.php','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=550,Height=400' );" href="#" >Файловый менеджер</a></li>
				<hr>
				<li class="li_menu p_edit"><a class="menu_link" href="edit_color.php">Редактор цвета</a></li>
				<hr>
				<li class="li_menu p_edit"><a class="menu_link" href="exit.php">Выход</a></li>
			</ul>
		</div>
	</div>


