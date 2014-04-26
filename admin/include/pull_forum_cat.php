<?php
	$i = 1;
	$query = $db->query("SELECT DISTINCT forum_categories, categories_id FROM forum_start");
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		$cat[$i] = $item[forum_categories];	
		$catid[$i] = $item[categories_id];
		$i++;
	}
	for($i = 1; $i <= count($cat); $i++) {
		$start = $start . "<li class='editstruc-item' id=" .$catid[$i] . ">
	<div class='editstruc-labelitem'>" . $cat[$i] . "</div>
	<a class='editstruc-removeitem button-edit-frame'>
		<i class='icon-remove'></i>Удалить
	</a>
	<a class='editstruc-editmainitem button-edit-frame' href='./edit_forum_team.php?id=$catid[$i]'>
		<i class='icon-edit'></i>Редактировать
	</a>
</li>";
	}

?>
