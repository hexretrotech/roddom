<?php
	$id =$_GET['id'];
	$query = $db->prepare("SELECT id, forum_team_title, team_info, forum_categories FROM forum_start WHERE categories_id= :id");
	$query->execute(array(':id' => $id));
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		$team = $team . "<li class='editstruc-item' id=" . $item[id] . ">
	<div class='editstruc-labelitem'>" . $item[forum_team_title] . "</div>
	<a class='editstruc-removeitem button-edit-frame' >
		<i class='icon-remove'></i>Удалить
	</a>
	<a class='editstruc-editmainitem button-edit-frame' inf='". $item[team_info] ."' id='" . $item[id] . "' nn='" . $item[forum_team_title] . "'>
		<i class='icon-edit'></i>Редактировать
	</a>
</li>";
$forum_cat = $item[forum_categories];
	}


?>
