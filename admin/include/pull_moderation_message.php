<?php
	$query = $db->query("SELECT DISTINCT forum_categories, categories_id FROM forum_start");
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		$cat[$item[categories_id]] = $item[forum_categories];
	}
	$query = $db->query("SELECT * FROM forum WHERE ok=0");
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		$c = $cat[$item[categories_id]];
		$table = $table . "<tr><td class='id'>$item[id]</td><td class='user'><u>$item[user]</u><br>$item[email]</td><td class='message'>$item[text]</td><td class='cat'>$c</td><td class='tools'><button num='$item[id]' class='remove'><i class='icon-remove'></i></button><button num='$item[id]' use='$item[user]' class='good'><i class='icon-save'></i></button></td></tr>";
	}

?>
