<?php
$query = $db->query("SELECT DISTINCT forum_categories, categories_id FROM forum_start");
while($item = $query->fetch(PDO::FETCH_ASSOC))
{
	$categories[] = $item[forum_categories];
	$categories_id[] = $item[categories_id];
}



for($i=0; $i < count($categories_id); $i++) {
	$main_table = $main_table . "<div class='labellistteam'>
									<span> $categories[$i] </span>			
								</div>
								<table class='list-team'>";
	$query = $db->query("SELECT * FROM forum_start WHERE categories_id=" . $categories_id[$i]);
	while($item = $query->fetch(PDO::FETCH_ASSOC))
	{
		$main_table = $main_table . "<tr class='item'>
						<td class='block-item imgitem'><img src='http://forum.ubuntu.ru/Themes/ubuntu-portal/images/off.png' /></td>
						<td class='block-item nameitem'><a class='subject' href='./team.php?id=$item[id]&cat=$item[categories_id]&name=$item[forum_team_title]'>$item[forum_team_title]</a><p>$item[team_info]</p></td>
						<td class='block-item varmas'> $item[message_num] сообщений</td>
						<td class='block-item newmas'><b>Последний ответ</b> от <u>$item[end_message]</u></td>
					</tr>";
	}
		$main_table = $main_table . "</table>";
}
echo $main_table;
?>
